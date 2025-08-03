<?php
    require('../Models/Header.php');
    require('../Incl/fonction_vue_role.php');

    $list_role=aff_role();
   
?>
    <div class="container py-5">
        <h1 class="text-center mb-5 text-danger">Choisissez un rôle</h1>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            <?php foreach($list_role as $role):?>
                <div class="col">
                    <form action="" method="get" class="h-100">
                        <input type="hidden" value="<?= $role['id']?>">
                        <div class="card h-100 shadow-lg border-danger">
                            <img src="<?= $role['image']?>" class="card-img-top p-3" alt="<?= $role['nom']?>" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $role['nom']?></h5>
                                <p class="card-text"><?= substr($role['description'], 0, 100)?>...</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <input type="submit" class="btn btn-danger w-100" value="Sélectionner">
                            </div>
                        </div>
                    </form>
                </div>
            <?php endforeach;?>
        </div>
    </div>
<?php
    require('../Models/Footer.php');
?>