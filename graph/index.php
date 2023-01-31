<?php

require __DIR__ . '/Graph.php';
//an undirected graph representation
$graph = new Graph();
$graph->add('A', 'B');
$graph->add('A', 'C');
$graph->add('A', 'D');
$graph->add('B', 'A');
$graph->add('B', 'C');
$graph->add('B', 'E');
$graph->add('C', 'A');
$graph->add('C', 'B');
$graph->add('C', 'D');
$graph->add('D', 'A');
$graph->add('D', 'C');
$graph->add('E', 'B');

$graph->displayGraph();
$graph->traverseGraphFromNode('C');


//directed graph representation
$graph = new Graph();
$graph->add('A', 'B');
$graph->add('A', 'E');
$graph->add('B', 'G');
$graph->add('C', 'A');
$graph->add('D', 'C');
$graph->add('D', 'B');
$graph->add('E', 'D');
$graph->add('F', 'C');
$graph->add('F', 'G');

$graph->displayGraph();
$graph->traverseGraphFromNode('D');


//$graph->traverseGraphFromNode("C");
//echo json_encode($graph->graph) . PHP_EOL;

