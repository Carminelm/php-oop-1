<?php

class Movie {
    public $title;
    public $type;
    public $date;


    function __construct ($_title,$_type,$_date){
        $this->$title;
        $this->$type;
        $this->$date;
    }

    public function printName (){
        echo $this-> title;
    }

    public function printData (){
        echo $this-> date;
    }
}