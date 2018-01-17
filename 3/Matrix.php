<?php

class Matrix{
    private $lineArray = array();

    /**
     * Matrix constructor.
     * @param array $lineArray [[1,2],[3,4]]
     * (1,2)
     * (3,4)
     */
    public function __construct(array $lineArray){
        $this->lineArray = $lineArray;
    }

    public function getLineArray(int $n){
        return $this->lineArray[$n];
    }

    /**
     * @param int $n 0
     * @return array [1,3] コンストラクタの例の場合
     */
    public function getColumnArray(int $n){
        $result = array();
        for($i = 0; $i < count($this->lineArray); $i++){
            array_push($result, $this->lineArray[$i][$n]);
        }
        return $result;
    }

    /**
     * @param int $n
     * @return array [1,2] コンストラクタの例の場合
     */
    public function getRowArray(int $n){
        return $this->lineArray[$n];
    }

    /**
     * 行 行自体の数
     * [[1,3,5],[2,4,6]] -> 2
     * @return int
     */
    public function getRowSize(){
        return count($this->lineArray);
    }

    /**
     * 列　列自体の数
     * [[1,3,5],[2,4,6]] -> 3
     * @return int
     */
    public function getColumnSize(){
        return count($this->lineArray[0]);
    }
}




