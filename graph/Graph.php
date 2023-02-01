<?php

require __DIR__ . '/graph-algorithm/Bfs.php';
require __DIR__ . '/graph-algorithm/Dfs.php';

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

    public function traverseGraphFromNode($source, $algorithm)
    {
        $traverseAlgorithm = [
          'bfs' => new Bfs($this->graph),
          'dfs' => new Dfs($this->graph),
        ];
        if(!array_key_exists($source, $this->graph)) return "'${$source}' node is not available in graph.";
        $traverseAlgorithm[$algorithm]->traverseFrom($source);
        $traverseAlgorithm[$algorithm]->displayResult();
    }
}