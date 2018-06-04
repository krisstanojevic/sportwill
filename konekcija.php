<?php
    $bazaPodataka = "sportwill_baza";
    $serverBaze = "localhost";
    $username = "root";
    $password = "";
    
    $konekcija = new PDO("mysql:host=$serverBaze;dbname=$bazaPodataka",$username,$password);