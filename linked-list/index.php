<?php

require __DIR__ . '/LinkedList.php';

$linkedList = new LinkedList();
$linkedList->insertAtBack(5);
$linkedList->insertAtBack(2);
$linkedList->insertAtBack(10);
$linkedList->insertAtBack(99);
$linkedList->insertAtBack(100);

echo 'Linked list: ' . json_encode($linkedList);