<?php
session_start();

    require('../Models/Header.php');
    require('../Incl/fonction_traitement.php');

    $aff=0;
    if(isset($_GET['nbr'])){
        $aff=1;
        $nbr=$_SESSION['count']/$_GET['nbr'];
    }

?>

    <h1>Entrer le nom de role par joueurs</h1>

    <form action="Game.php" method="get">
        <input type="number" name="nbr" id="">
        <input type="submit" value="Valider">
    </form>

        <form action="Attribution.php" method="get">
        <?php if($aff==1){
             for($i=0;$i<$nbr;$i++){?>
    
                <input type="text" name="nom<?=$i?>">
            
            <?php }?>

            <input type="submit" value="Valider">
        <?php }?>
            
      </form>

<?php
    require('../Models/Footer.php');
?>