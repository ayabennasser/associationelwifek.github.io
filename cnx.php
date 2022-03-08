<?php


abstract class cnx {
protected $pdo;

function __construct(){
 $this->pdo=new PDO('mysql:host=localhost;dbname=projet','root',''); 
}
function __destruct(){
 $this->pdo=null;
}
}
/*$user="root";
$mdp="";
$db="projet";
$server="localhost";

$link=mysqli_connect($server,$user,$mdp,$db);


if($link){
   // echo"connection etablie";

}else{
    die(mysqli_connect_error());
}*/
?>