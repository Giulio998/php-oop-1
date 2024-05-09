<?php
class Production {
    public $title;
    public $language;
    public $vote;
    
    function __construct(string $_title,string $_language,int $_vote){
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
    }
}

$venom = new Production('Venom', 'English', 7);
$jumanji = new Production('Jumanji','English',7);