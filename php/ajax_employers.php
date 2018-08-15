<?php

if($_SERVER['REQUEST_METHOD'] != "GET") {
    echo "Ne mozete pristupiti bazi";
}


if(isset($_GET['idEmployer'])){
    $id = $_GET['idEmployer'];
    
    include "../config/connection.php";
    
    $query = "SELECT employers.*, about.*, gallery.* FROM employers INNER JOIN about ON employers.id_employers = about.employers_id INNER JOIN gallery on gallery.id_gallery = about.gallery_id INNER JOIN gallery_type on gallery.gallery_type_id = gallery_type.id_gallery_type where gallery_type.name = 'employer' and employers.id_employers=". $id . ";";
  // ovo sam zakomentarisala jer sam u $query dodala $id, a posle nisam mogla da se setim 
  // kako ste radili sa onim :id, da vratim :D 
  //  $e = $konekcija->prepare($query);
  //  $e->bindParam(":id", $id);
    try{
        $employer = $konekcija->query($query)->fetchAll();
        if($employer){
            $statusCode = 201;
        }
        else {
            $statusCode = 500;
        }
    }
    catch(PDOException $e)
    {
        $statusCode = 500;
    }
    
    //iz nekog razloga ne moze http_response_code i slanje sa echo u isto vreme!
    //to nas je zezalo sve vreme, echo json_encode radi ako se ne napise ovaj http_response_code!
    //moramo drugacije da posaljemo $statusCode ili ove podatke! 
    //jeste li vi slali na vezbama oba u isto vreme?
    
    http_response_code($statusCode);    
    echo json_encode($employer);
}

//SAD sve radi, samo popuni tabele employers, about, slike zaposlenih, da bi mogao da 
//vidis rezultat. Samo da vidimo ovo za $statusCode kako da prosledimo i ako 
//ono sa :id u $query.