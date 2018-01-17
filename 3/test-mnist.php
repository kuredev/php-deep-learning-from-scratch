<?php

require_once "MatrixUtil.php";
require_once "Matrix.php";



//testTrainImage();
testTrainLabel();

function testTrainLabel(){
  //  $image = file_get_contents("train-labels.idx1-ubyte");//60008Byte
    $image = file_get_contents("t10k-labels.idx1-ubyte");//60008Byte
    for($i = 8; $i < 10008; $i++){
        $value = substr($image, $i, 1);
        echo (int)(ord($value))."\n";
        //exit();
    }
}

/**
 * 画像ファイルが60000枚
 */
function testTrainImage(){
//    $image = file_get_contents("train-images.idx3-ubyte");
    $image = file_get_contents("t10k-images.idx3-ubyte");


    for($k = 0; $k < 28; $k++){
        $cut_image = substr($image, (16+$k*28), 28);
        for($i = 0; $i < strlen($cut_image); $i++) {
            $value = (int)(ord($cut_image[$i]));
            echo $value === 0 ? "0" :  "1";
        }
        echo "\n";
    }
}


