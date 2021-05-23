<?php

class Proses{

    private $DB;

    public function __construct(){

        //Koneksi Database
        $DB = new mysqli('localhost', 'username', 'password');
        
    }



}

?>