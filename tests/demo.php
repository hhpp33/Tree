<?php
use  Caihui\Tree\Tree;
require __DIR__ . '/../vendor/autoload.php';

$data = include __DIR__."/data.php";

print_r(Tree::makeTree($data));

