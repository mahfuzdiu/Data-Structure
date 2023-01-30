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

//adjacency list using associative array/ alternative hashmap
$graph->traverseGraphFromNode("C");
//echo json_encode($graph->graph) . PHP_EOL;
$graph->displayBfsResult();

