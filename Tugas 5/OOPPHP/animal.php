<?php

class animal
{
    public $legs = 4;
    public $coldblooded = "no";
    public $nama;
    public $jump = "hop hop"; 
    public $yell = "Auooo";

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
}

?>