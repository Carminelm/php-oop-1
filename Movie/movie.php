<?php

class Movie {
    public $title;
    public $type;
    public $date;


    function __construct ($_title,$_type,$_date){
        $this->title = $_title;
        $this->type = $_type;
        $this->date = $_date;
    }

    public function printName (){
        echo $this->title;
    }

    public function printData (){
        echo $this->date;
    }

    public function prinType (){
        echo $this->type;
    }
}



