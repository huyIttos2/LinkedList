<?php
include_once 'Node.php';

class Linked
{
private $firstNode;
private $lastNode;
private $count;

//public function __construct()
//{
//    $this->firstNode = NULL;
//    $this->count = 0;
//    $this->lastNode = NULL;
//}
public function __construct()
{
    $this->firstNode = NULL;
    $this->count = 0;
    $this->lastNode = NULL;

}


    public function insertFirst($data){
$link = new Node($data);
$link->next = $this ->firstNode;
$this->firstNode = $link;
if($this->lastNode == NULL){
    $this->lastNode = $link;
    $this->count++;
}
}
public function insertLast($data){
    if($this->firstNode != NULL){
        $link = new Node($data);
        $this->lastNode->next =$link;
        $link->next = NULL;
        $this->lastNode =$link;
        $this->count++;
    }else{
        $this->insertFirst($data);
    }
}
public function totalNode(){
    return $this->count;
}
public function readList(){
    $listData = array();
    $current =$this->firstNode;
    while($current != NULL){
array_push($listData, $current->readNode());
$current =$current->next;
    }
        return $listData;
}
}