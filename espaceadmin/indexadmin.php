<?php
session_start();
if(!$_SESSION['mdp']){
    header('location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <a href="member.php">afficher tous les étudiants</a>
</body>
</html>