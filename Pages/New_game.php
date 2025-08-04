<?php
session_start();
    require('../Models/Header.php');
    require('../Incl/fonction_vue_role.php');

    $list_role = aff_role();
    $_SESSION['count']=count($_SESSION['choix']);

    //var_dump($_SESSION['choix']);
    //var_dump($_SESSION['count']);
    
?>
    <div class="container py-5">
        <h1 class="text-center mb-5 text-danger">Choisissez un rôle</h1>
<div>
    <p>nbr carte:<?= $_SESSION['count']?></p>
</div>

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            <?php foreach($list_role as $role): 
                $isSelected = isset($_SESSION['choix']) && in_array($role['id'], (array)$_SESSION['choix']);
            ?>
                <div class="col">
                    <form action="../Traitement/traitement_choix.php" method="get" class="h-100">
                        <input type="hidden" name="choix" value="<?= $role['id']?>">
                        <div class="card h-100 shadow-lg border-danger <?= $isSelected ? 'border-success' : '' ?>">
                            <img src="<?= $role['image']?>" class="card-img-top p-3" alt="<?= $role['nom']?>" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $role['nom']?></h5>
                            </div>
                            <div class="card-footer bg-transparent">
                                <?php if($isSelected): ?>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-success fw-bold">Sélectionné</span>
                                        <a href="../Traitement/traitement_annuler.php?choix=<?= $role['id']?>" class="btn btn-sm btn-outline-danger">Annuler</a>
                                    </div>
                                <?php else: ?>
                                    <input type="submit" class="btn btn-danger w-100" value="Sélectionner">
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endforeach;?>
        </div>
        
        <div class="fixed-bottom p-4 bg-dark">
            <div class="container text-end">
                <a href="Game.php" class="btn btn-success btn-lg">
                    <i class="bi bi-check-circle"></i> Terminer la sélection
                </a>
            </div>
        </div>
    </div>
<?php
    require('../Models/Footer.php');
?>