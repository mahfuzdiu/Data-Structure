<?php

class Graph
{
    public $graph;
    public $queue;
    public $visited;
    public $result;

    public function __construct()
    {
        $this->graph = [];
        $this->queue = [];
        $this->visited = [];
        $this->result = [];
    }

    public function add($node, $data)
    {
        if(array_key_exists($node, $this->graph)){
             array_push($this->graph[$node], $data);
        } else{
            $this->graph[$node] = [$data];
        }
    }

    public function displayGraph()
    {
        
    }


    public function traverseGraphFromNode($source)
    {
        if(!array_key_exists($source, $this->graph)) return "'${$source}' node is not available in graph.";
        $this->bfs($source);
    }

    //example graph
    //A => B, C, D
    //B => A, C, D, E
    //C => B, A, D
    //D => A, B, C
    //E => B


    public function bfs($source)
    {
        //for inserting source node into the queue
        if(!in_array($source, $this->visited)){
            $this->queue[] = $source;
            $this->visited[] = $source;
        }

        //for inserting connected nodes into the queue
        //value in visited list means it is/was already in queue or its was moved to result array
        foreach ($this->graph[$source] as $value){
            if(!in_array($value, $this->visited)){
                $this->queue[] = $value;
                $this->visited[] = $value;
            }
        }

        $this->result[] = $this->queue[0];
        array_shift($this->queue);

        if(count($this->queue) > 0)
            $this->bfs($this->queue[0]);
    }


    public function displayBfsResult()
    {
        $bfsResult = '';
        foreach ($this->result as $key => $node){
            $bfsResult = $bfsResult . $node;
            if($key + 1 < count($this->result))
                $bfsResult = $bfsResult . '->';
        }
        echo $bfsResult . PHP_EOL;
    }
}