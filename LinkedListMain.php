<?php
include_once 'Linked.php';
$linkedList = new Linked();
$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertFirst(33);
$linkedList->insertLast(44);
$linkedList->insertLast(55);
$totalNode = $linkedList->totalNode();
$linkData =$linkedList -> readList();
echo $totalNode;
echo implode('-',$linkData);