<?php
    require('../Models/Header.php');
?>
    <div class="container d-flex flex-column align-items-center justify-content-center vh-100">
        <div class="text-center mb-5">
            <img src="../Assets/images/werewolf-logo.png" alt="Loup-Garou" style="max-height: 200px;">
            <h1 class="text-danger mt-3">Loup-Garou</h1>
            <p class="lead">Un jeu de stratégie et de déduction</p>
        </div>
        <div class="d-grid gap-3 col-md-6 mx-auto">
            <a href="New_game.php" class="btn btn-danger btn-lg py-3">
                <i class="bi bi-plus-circle me-2"></i>Nouvelle partie
            </a>
            <button class="btn btn-outline-danger btn-lg py-3" disabled>
                <i class="bi bi-arrow-clockwise me-2"></i>Reprendre
            </button>
        </div>
    </div>
<?php
    require('../Models/Footer.php');
?>