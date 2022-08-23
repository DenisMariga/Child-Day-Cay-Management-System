<?php

    $database= new mysqli("localhost","root","","gefrims");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>