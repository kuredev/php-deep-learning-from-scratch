<?php

class Network{
    private $b = array();//重み
    private $W1 = array();
    private $W2 = array();
    private $W3 = array();

    /**
     * Network constructor.
     * @param array $b
     * @param array $W1
     * @param array $W2
     * @param array $W3
     */
    public function __construct(array $b, array $W1, array $W2, array $W3){
        $this->b = $b;
        $this->W1 = $W1;
        $this->W2 = $W2;
        $this->W3 = $W3;
    }

    /**
     * @param array $x [[1, 0.5]]
     */
    public function forward(array $x){
        $matrixX = new Matrix($x);
        $matrixW1 = new Matrix($this->W1);

        // matrixW1: ここの配列がおかしいのか
        $a = MatrixUtil::productMatrix($matrixX, $matrixW1, $this->b[0]);

        $z[0] = MatrixUtil::sigmoidArray($a[0]);

        $matrixX2 = new Matrix($z);
        $matrixW2 = new Matrix($this->W2);
        $a2 = MatrixUtil::productMatrix($matrixX2, $matrixW2, $this->b[1]);

        $z1[0] = MatrixUtil::sigmoidArray($a2[0]);

        $matrixX3 = new Matrix($z1);
        $matrixW3 = new Matrix($this->W3);
        $a3 = MatrixUtil::productMatrix($matrixX3, $matrixW3, $this->b[2]);

        echo Util::getArrayKeyMaxValue($a3[0])."\n";

        //ソフトマックス関数
    }
}
