<?php


class Node
{
    public $leftChild;
    public $rightChild;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
        $this->leftChild = null;
        $this->rightChild = null;
    }
}