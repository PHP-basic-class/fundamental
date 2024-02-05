<?php 

class Request {
    public $param; 
    public $body;
    function __construct ($param = [], $body = []) 
    {
        $this->param = $param;
        if (count($_FILES) != 0) {
            $body["image"] = $_FILES["image"];
        }
        $this->body = $body;
    }
}