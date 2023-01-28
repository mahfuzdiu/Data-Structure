<?php


class Node
{
    public $data;
    public $tail;

    public function __construct($data)
    {
        $this->data = $data;
        $this->tail = null;
    }
}