<?php
    function connect_sql(){
        $host = 'localhost'; 
        $user = 'root'; 
        $pw = 'SmartHomePi'; 
        $dbName = 'smarthome'; 
        $mysqli = new mysqli($host, $user, $pw, $dbName); 
        return $mysqli; 
    }
?>