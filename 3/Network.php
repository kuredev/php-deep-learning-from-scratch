<?php

class Network{
    private $b = array();//重み
    private $W = array();

    /**
     * Network constructor.
     * @param array $b [[]]
     * @param array $W [[]]
     */
    public function __construct(array $b, array $W){
        $this->b = $b;
        $this->W = $W;
    }

    /**
     * @param array $x [[1, 0.5]]
     */
    public function forward(array $x){
        $matrixX = new Matrix($x);
        $matrixW1 = new Matrix($this->W[0]);

      /*  var_dump($matrixX);
        var_dump($matrixW1);*/

        $a = MatrixUtil::productMatrix($matrixX, $matrixW1, $this->b[0]);
        $z[0] = MatrixUtil::sigmoidArray($a[0]);
        var_dump($z);

        $matrixX2 = new Matrix($z);
        $matrixW2 = new Matrix($this->W[1]);
        $a2 = MatrixUtil::productMatrix($matrixX2, $matrixW2, $this->b[1]);
        var_dump($a2);
        $z1[0] = MatrixUtil::sigmoidArray($a2[0]);
        var_dump($z1);

        $matrixX3 = new Matrix($z1);
        $matrixW3 = new Matrix($this->W[2]);
        $a3 = MatrixUtil::productMatrix($matrixX3, $matrixW3, $this->b[2]);
        var_dump($a3);
    }
}
