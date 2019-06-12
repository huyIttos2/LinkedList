<?php


class Node
{
    public $data;
    public $next;
     function __construct($data)
    {
        $this-> data = $data;
        $this->next = NULL;
    }
     function readNote(){
        return $this->data;
    }
}

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/26/2018
 * Time: 2:24 AM
 */
