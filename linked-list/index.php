<?php

require __DIR__ . '/LinkedList.php';

$linkedList = new LinkedList();

//insert at back
$linkedList->insertAtBack(5);
$linkedList->insertAtBack(2);
$linkedList->insertAtBack(10);

//insert at front
$linkedList->insertAtFront(77);
$linkedList->insertAtFront(55);

//inset a new data after a targeted data in list
$linkedList->insertDataAfter(10, 100);

//inset a new data before a targeted data in list
$linkedList->insertDataBefore(77, 45);

echo 'Linked list: ' . json_encode($linkedList->head) . PHP_EOL;