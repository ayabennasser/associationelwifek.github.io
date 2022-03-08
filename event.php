<?php
include_once("cnx.php");
class event extends cnx{
 private $nom,$prenom  ,$phone ,$mail,$gender ;
 function __construct($nom="",$prenom="" ,$phone="",$mail="",$gender="") {
$this->nom=$nom;
$this->prenom=$prenom;
$this->phone=$phone;
$this->mail=$mail;
$this->gender=$gender;

parent::__construct();
 }

 function insert($nom,$prenom  ,$phone ,$mail,$gender){
    $query="INSERT INTO `projet`.`user`(
      `nom` ,
      `prenom` ,
      `tel` ,
      
      `mail` ,
      `sexe`
      )
      VALUES (
      ?,?,?,?,?
      );
       ";
   $res=$this->pdo->prepare($query); 
   return $res->execute(array($nom,$prenom  ,$phone ,$mail,$gender)); 
    }
}
    ?>