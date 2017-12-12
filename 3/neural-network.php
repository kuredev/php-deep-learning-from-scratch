<?php

require_once "Matrix.php";
require_once "MatrixUtil.php";
require_once "Network.php";

$b = array();
$W = array();
$b[0] = [0.1, 0.2, 0.3];
$b[1] = [0.1, 0.2];
$b[2] = [0.1, 0.2];

$W[0] = [[0.1, 0.3, 0.5], [0.2, 0.4, 0.6]];
$W[1] = [[0.1, 0.4], [0.2, 0.5], [0.3, 0.6]];
$W[2] = [[0.1, 0.3], [0.2, 0.4]];
$network = new Network($b, $W);

$network->forward([[1, 0.5]]);





