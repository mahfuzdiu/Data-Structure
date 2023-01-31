<?php


class Bfs
{
    public $graph;
    public $queue;
    public $visited;
    public $result;

    public function __construct($graph)
    {
        $this->graph = $graph;
        $this->queue = [];
        $this->visited = [];
        $this->result = [];
    }

    public function traverseFrom($source)
    {
        //for inserting source node into the queue
        if(!in_array($source, $this->visited)){
            $this->queue[] = $source;
            $this->visited[] = $source;
        }

        //for inserting connected nodes into the queue
        //value in visited list means it is/was already in queue or its was moved to result array
        if(isset($this->graph[$source])){ //in directed graph some node dont have any edge out of it
            foreach ($this->graph[$source] as $value){
                if(!in_array($value, $this->visited)){
                    $this->queue[] = $value;
                    $this->visited[] = $value;
                }
            }
        }

        $this->result[] = $this->queue[0];
        array_shift($this->queue);

        if(count($this->queue) > 0)
            $this->traverseFrom($this->queue[0]);
    }


    public function displayBfsResult()
    {
        $bfsResult = '';
        foreach ($this->result as $key => $node){
            $bfsResult = $bfsResult . $node;
            if($key + 1 < count($this->result))
                $bfsResult = $bfsResult . '->';
        }
        echo 'BFS: ' . $bfsResult . PHP_EOL . PHP_EOL;
    }

}