<?php

require __DIR__ . '/graph-algorithm/Bfs.php';

class Graph
{
    public $graph;

    public function __construct()
    {
        $this->graph = [];
    }

    //adjacency list using associative array/hashmap
    public function add($source, $destination)
    {
        if(array_key_exists($source, $this->graph)){
             array_push($this->graph[$source], $destination);
        } else{
            $this->graph[$source] = [$destination];
        }
    }

    public function displayGraph()
    {
        foreach ($this->graph as $key => $value){
           $list = $key . ' => ';

           while (count($value) > 0){
               $list = $list . $value[0];
               array_shift($value);
               if(count($value) >= 1)
                   $list = $list. ', ';
           }
           echo $list . PHP_EOL;
        }
    }

    public function traverseGraphFromNode($source)
    {
        if(!array_key_exists($source, $this->graph)) return "'${$source}' node is not available in graph.";
        $bfs = new Bfs($this->graph);
        $bfs->traverseFrom($source);
        $bfs->displayBfsResult();
    }
}