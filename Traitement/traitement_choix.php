<?php
session_start();
    require('../Incl/fonction_traitement.php');

    if(!isset($_SESSION['choix'])){

        $_SESSION['choix']=[];
    
    }
    $_SESSION['choix'][]=$_GET['choix'];

    header('Location:../Pages/New_game.php');
?>