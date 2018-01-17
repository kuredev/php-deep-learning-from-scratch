<?php

/*echo Util::softmax(0,[1,2,3])."\n";
echo Util::softmax(1,[1,2,3])."\n";
echo Util::softmax(2,[1,2,3]);

echo log(1)."\n";
echo log(2)."\n";
echo log(3)."\n";*/

class Util{

    /**
     * @param int $i
     * @param array $arr
     */
    public static function softmax(int $i, array $arr){
        $sum = 0;
        foreach ($arr as $a){
            $sum += log($a);
        }
        return log($arr[$i])/$sum;
//        echo log(9);
    }

    public static function sumExp(array $arr){
        $sum = 0;
        foreach ($arr as $a){
            $aexp = log($a);
            $sum = $sum + $aexp;
        }
        return $sum;
    }

    public static function getArrayKeyMaxValue(array $arr)
    {
        $max = max($arr);
        $arrFind = array_keys($arr, $max);
        $key = array_rand($arrFind, 1);
        return $arrFind[$key];
    }
}

