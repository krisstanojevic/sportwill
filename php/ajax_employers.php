<?php

if($_SERVER['REQUEST_METHOD'] != "GET") {
    echo "Ne mozete pristupiti bazi";
}


if(isset($_GET['idEmployer'])){
    $id = $_GET['idEmployer'];
    
    include "../config/connection.php";
    
    $query = "SELECT employers.*, about.*, gallery.* FROM employers INNER JOIN about ON employers.id_employers = about.employers_id INNER JOIN gallery on gallery.id_gallery = about.gallery_id INNER JOIN gallery_type on gallery.gallery_type_id = gallery_type.id_gallery_type where gallery_type.name = 'employer' and employers.id_employers=". $id . ";";
  //  $e = $konekcija->prepare($query);
  //  $e->bindParam(":id", $id);
    try{
        $employer = $konekcija->query($query)->fetchAll();
        if($employer){
            $statusCode = 204;
        }
        else {
            $statusCode = 500;
        }
    }
    catch(PDOException $e)
    {
        $statusCode = 500;
    }
    
    http_response_code($statusCode);    
    echo $employer;
}
