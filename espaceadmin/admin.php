<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) and !empty($_POST['mdp'])){
    $pseudo_par_defaut ="elwifek fevrier2022";
    $mdp_par_defaut ="ELwifek2022grombalia#";

    $pseudo_saisi =htmlspecialchars($_POST['pseudo']);
    $mdp_saisi =htmlspecialchars($_POST['mdp']);
    if ($pseudo_saisi==$pseudo_par_defaut and  $mdp_saisi==$mdp_par_defaut){
      $_SESSION['mdp'] =$mdp_saisi;
      header('location:indexadmin.php');
    }else{
        echo "veuillez mot de passe ou passe est incorrect ";
    }
    }else{
        echo "veuillez compléter tous les champs...";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Espace de connexion admin</title>
</head>
<body style="background:url(imageee/log.webp);background-repeat:no repeat;background-size:100% 100%" >
   <form action="admin.php" align="center" method="post">
       <input type="text" name="pseudo" autocomplete="off">
       <br>
       <input type="password" name="mdp">
       <br><br> 
       <input type="submit" name="valider"> 

   </form> 
   
   
</body>
</html>