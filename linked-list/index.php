<?php

require __DIR__ . '/LinkedList.php';

$linkedList = new LinkedList();

//insert at back
$linkedList->insertAtBack(5);
$linkedList->insertAtBack(2);
$linkedList->insertAtBack(10);

//echo 'Linked list: ' . json_encode($linkedList) . PHP_EOL;

//insert at front
$linkedList->insertAtFront(77);
$linkedList->insertAtFront(55);
//echo 'Linked list: ' . json_encode($linkedList) . PHP_EOL;

//inset a new data after a targeted data in list
$linkedList->insertDataAfter(10, 100);
echo 'Linked list: ' . json_encode($linkedList->head) . PHP_EOL;