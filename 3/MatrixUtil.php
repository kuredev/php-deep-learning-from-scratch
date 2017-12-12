<?php

class MatrixUtil{

    /**
     * @param Matrix $matrix1
     * @param Matrix $matrix2
     * @param array $b 重み
     */
    public static function productMatrix(Matrix $matrix1, Matrix $matrix2, array $b = [0,0,0]){
        $rowNum = $matrix1->getRowSize();//1
        $resultArray = array();
        for($i = 0; $i < $rowNum; $i++){
            $rowResultArray = array();
            //まず左行列の行から
            $rowArray = $matrix1->getRowArray($i);//[1,2]
            $columnNumber = $matrix2->getColumnSize();//列の数
            for($j = 0; $j < $columnNumber; $j++){
                $columnArray = $matrix2->getColumnArray($j);
                $value = Self::productArray($rowArray, $columnArray);
                $value += $b[$j];
                array_push($rowResultArray, $value);
            }
            array_push($resultArray, $rowResultArray);
        }
        return $resultArray;
    }

    /**
     * @param array $array1 [1,2] 行
     * @param array $array2 [5,7] 列
     * 1*5 + 2*7
     * @return 19
     */
    public static function productArray(array $array1, array $array2){
        $result = 0;
        for($i = 0; $i < count($array1); $i++){
            $result += $array1[$i]*$array2[$i];
        }
        return $result;
    }

    public static function sigmoidArray(array $array){
        $resultArray = array();
        foreach ($array as $a){
            $siga = Self::sigmoid($a);
            array_push($resultArray, $siga);
        }
        return $resultArray;
    }

    public static function sigmoid(float $x){
        return 1/(1+exp(-$x));
    }

}

