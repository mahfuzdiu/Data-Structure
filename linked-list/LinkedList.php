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

            /*by updating the $currentNode object it also updating that specific head list object
            property because of object properties pass by reference system*/
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


    /**
     * @param $position
     * @param $data
     * inset a new data after a certain position in list
     * automatically adds the data at the last of the list if position value is greater than list's length
     */
    public function insertAfterPosition($position, $data)
    {
        if ($position == 1) {
            $this->insertAtFront($data);
            return;
        }
        //object are copied by "pass by reference"
        $currentNode = $this->head;

        $counter = 0;
        $previousNode = null;

        /*important note:
            changing/updating the value of the variable $currentNode itself has no effect on the head object
            but when any object's property of $currentNode is changed from $currentNode variable it also changes
            the same object property in head list cause these objects have the same reference*/

        while ($counter != $position && isset($currentNode->data)) {
            $previousNode = $currentNode;
            $currentNode = $currentNode->tail;
            $counter++;
        }

        $previousNode->tail = new Node($data);
        $previousNode->tail->tail = $currentNode;

    }

    public function deleteDataAtPosition($position)
    {
        $currentNode = $this->head;

        if($position == 1)
        {
            //checking if at least there are two nodes
            if(isset($currentNode->tail->data)){
                $currentNode->data = $currentNode->tail->data;
                $currentNode->tail = $currentNode->tail->tail;
                return;
            } else {
                $this->head = null;
                return;
            }
        }

        $previousNode = null;
        $counter = 1;
        while ($counter != $position && isset($currentNode->data)) {
            $previousNode = $currentNode;
            $currentNode = $currentNode->tail;
            $counter++;
        }

        $previousNode->tail = $currentNode->tail;
    }
}
