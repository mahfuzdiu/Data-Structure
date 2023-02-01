<?php


class Dfs
{
    public $graph;
    public $visited;

    public function __construct($graph)
    {
        $this->graph = $graph;
        $this->visited = [];
    }

    public function traverseFrom($source)
    {
        if(count($this->visited) == 0){
            $this->visited[] = $source;
        }

        foreach ($this->graph[$source] as $node){
            if(!in_array($node, $this->visited)){
                $this->visited[] = $node; //enters 1 node at a time of a source and keep going next node till no source to visit
                if(isset($this->graph[$node])) //handling a source node which has no edge
                    $this->traverseFrom($node); //recursive solution
            }
        }
    }

    public function displayResult()
    {
        $dfsResult = '';
        foreach ($this->visited as $key => $node){
            $dfsResult = $dfsResult . $node;
            if($key + 1 < count($this->visited))
                $dfsResult = $dfsResult . '->';
        }
        echo 'DFS: ' . $dfsResult . PHP_EOL . PHP_EOL;
    }

}