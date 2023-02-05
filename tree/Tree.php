<?php

require __DIR__.'/Node.php';

class Tree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function addNode($data)
    {
        $node = new Node($data);

        if ($this->root == null){
            $this->root = $node;
        } else{

            $currentNode = $this->root;

            while ($currentNode->data){
                //go left child if incoming node is smaller than current node
                if($data < $currentNode->data){
                    if($currentNode->leftChild == null)
                    {
                        $currentNode->leftChild = $node;
                        break;
                    }
                    else
                        $currentNode = $currentNode->leftChild;

                }
                //go right child if incoming node is greater than current node
                elseif ($currentNode->data < $data){
                    if($currentNode->rightChild == null){
                        $currentNode->rightChild = $node;
                        break;
                    }
                    $currentNode = $currentNode->rightChild;
                }
            }

        }

        print_r($this->root);
    }
}