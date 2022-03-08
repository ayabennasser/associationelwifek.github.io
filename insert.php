<?php
require_once('event.php');
$vt=new event();
$vt->insert($_POST['nom'],$_POST['prenom'],$_POST['phone'],$_POST['mail'],$_POST['gender']);
header("location:index.html");

/*include "cnx.php";
if(isset($_GET["nom"]) )
{
   $nom=$_GET["nom"];
   $prenom=$_GET["prenom"];
    $phone=$_GET["phone"];
    $mail=$_GET["mail"];
    $sexe=$_GET["gender"];

$req=mysqli_query($link, "insert into user(nom,prenom,tel,mail,sexe) values ('$nom','$prenom','$phone','$mail','$sexe')");

 if($req){
     echo "insertion effectuéé";
 }else{
     echo "erreur d'insertion";
 }

}


//if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["phone"]) && isset($_GET["mail"]) && isset($_GET["gender"]))*/
?>