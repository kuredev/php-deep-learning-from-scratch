<?php

require_once "Matrix.php";
require_once "MatrixUtil.php";
require_once "Network.php";
require_once "Util.php";

ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

$b = array();
$W1 = array();
$W2 = array();
$W3 = array();


$b[0] = explode(',', file_get_contents("fixed/b1.txt"));
$b[1] = explode(',', file_get_contents("fixed/b2.txt"));
$b[2] = explode(',', file_get_contents("fixed/b3.txt"));
$W0Array = explode("\n", file_get_contents("fixed/W1.txt"));
for($i = 0; $i < count($W0Array); $i++){
    $W1[$i] = explode(',', $W0Array[$i]);
}

$W1Array = explode("\n", file_get_contents("fixed/W2.txt"));
for($i = 0; $i < count($W1Array); $i++){
    $W2[$i] = explode(',', $W1Array[$i]);
}

$W2Array = explode("\n", file_get_contents("fixed/W3.txt"));
for($i = 0; $i < count($W2Array); $i++){
    $W3[$i] = explode(',', $W2Array[$i]);
}

$network = new Network($b, $W1, $W2, $W3);

for($i =9000; $i < 10000; $i++){
    $x = array(load_train_image($i));
    $network->forward($x);
}


// 60000枚
function load_train_image($num){
//    $image = file_get_contents("train-images.idx3-ubyte");
    $image = file_get_contents("t10k-images.idx3-ubyte");

        $number = 0;
        $imageElementArray = array();
        for($k = 0; $k < 28; $k++){
            $cut_image = substr($image, ($num*28*28) + (16+$k*28), 28);
            for($i = 0; $i < strlen($cut_image); $i++) {
                $number++;
                $value = (int)(ord($cut_image[$i]));
                  array_push($imageElementArray, $value);
            }
            }

        return $imageElementArray;
}

// 60000枚(60000Byte)
function load_train_label(){
    $label = file_get_contents("train-labels.idx1-ubyte");
    $labelArray = array();
    for($i = 0; $i < 60000; $i++){
        $str = substr($label, $i, 1);
        array_push($labelArray, ord($str));
    }
    return $labelArray;
}


