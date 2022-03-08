
<?php
session_start();
$bdd=new pdo('mysql:host=localhost;dbname=projet;','root','');
if(isset($_GET['id']) and !empty('id')){
    $getid=$_GET['id'];
    $recupUsers =$bdd->prepare('select * from user where id=?');
    $recupUsers->execute(array( $getid));
    if ($recupUsers->rowcount()>0){
$bannirUser =$bdd->prepare('delete from user where id =?');
$bannirUser->execute($arrayName=array($getid));
header('location;member.php');
    }else{
        echo" Aucun member n'a été trouvé";
    }
}else{
    echo "l'identifiant n'a pas été récupéré";
}
?>