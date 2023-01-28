<?php

require __DIR__ . '/Node.php';

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insertAtBack($data)
    {
        $node = new Node($data);

        if ($this->head == null) {
            $this->head = $node;

        } else {
            $currentNode = $this->head;

            while ($currentNode->tail != null) {
                $currentNode = $currentNode->tail;
            }

            $currentNode->tail = $node;
        }
    }
}
