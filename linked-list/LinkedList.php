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

            //by updating the $currentNode object it also updating that specific head list object
            //property because of object properties pass by reference system
            $currentNode->tail = $node;
        }
    }


    public function insertAtFront($data)
    {
        $node = new Node($data);

        $tempListHolder = $this->head;

        $this->head = $node;
        $this->head->tail = $tempListHolder;
    }


    public function insertDataAfter($after, $data)
    {
        //object are copied by "pass by reference"
        $currentNode = $this->head;

        while ($currentNode->data != $after && $currentNode->tail != null) {
            //important note:
            //changing/updating the value of the variable $currentNode itself has no effect on the head object
            //but when any object's property of $currentNode is changed from $currentNode variable it also changes
            //the same object property in head list cause these objects have the same reference
            $currentNode = $currentNode->tail;
        }

        if ($currentNode->data == $after) {
            $tempNextNodesHolder = $currentNode->tail;
            $node = new Node($data);
            $currentNode->tail = $node;
            $currentNode->tail->tail = $tempNextNodesHolder;
        } else {
            echo "warning: data = ${after} not in the list" . PHP_EOL;
        }

    }

    public function insertDataBefore($before, $data)
    {
        $currentNode = $this->head;

        $previousNode = null;
        while ($currentNode->data != $before && $currentNode->tail != null) {
            $previousNode = $currentNode;
            $currentNode = $currentNode->tail;
        }

        if ($currentNode->data == $before) {
            $node = new Node($data);
            $previousNode->tail = $node;
            $previousNode->tail->tail = $currentNode;
        } else {
            echo "warning: data = ${before} not in the list" . PHP_EOL;
        }
    }
}
