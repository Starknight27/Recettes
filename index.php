<?php
$categories = ["Tout voir", "Entrées", "Plats", "Desserts", "Végétarien"];

$recettes = [
    ["nom" => "Croque Madame",           "note" => 4.7, "temps" => "25 min", "image" => "croque_madame.jpg"],
    ["nom" => "Croque Savoyard",         "note" => 4.6, "temps" => "30 min", "image" => "croque_savoyard.jpg"],
    ["nom" => "Homard à l'armoricaine",  "note" => 4.5, "temps" => "20 min", "image" => "homard_armoricaine.jpg"],
    ["nom" => "Soupe à l'Oignon",        "note" => 4.8, "temps" => "45 min", "image" => "soupe_oignon.jpg"],
    ["nom" => "Fondant Chocolat",        "note" => 4.9, "temps" => "25 min", "image" => "fondant_chocolat.jpg"],
    ["nom" => "Buddha Bowl",             "note" => 4.7, "temps" => "15 min", "image" => "buddha_bowl.webp"],
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes Maison</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <div class="header-brand d-flex align-items-center">
                <img src="assets/Toque.png" alt="Logo de recettes">
                <h2 class="font-heading"><a href="index.php">Recettes Maison</a></h2>
            </div>
            <nav>
                <ul class="d-flex gap-4 m-0 p-0">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="recette.php">Recettes</a></li>
                    <li><a href="contact.php">À propos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="hero text-center mt-4 mb-4">
        <h1 class="font-heading">Toutes nos recettes</h1>
        <h4>Explorez notre collection de recettes gourmandes,
            testées et approuvées pour régaler vos proches au quotidien.</h4>
    </div>

    <div class="categories d-flex justify-content-center gap-2 mb-5 flex-wrap">
        <?php foreach ($categories as $categorie): ?>
        <button type="button" class="btn category-color"><?= $categorie ?></button>
        <?php endforeach; ?>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($recettes as $recette): ?>
            <div class="col-md-4 mb-4">
                <a href="recette.php" style="text-decoration: none; color : inherit">
                    <div class="card h-100 border-0 shadow-sm recipe-card">
                        <img src="assets/<?= $recette["image"] ?>" class="card-img-top" alt="<?= $recette["nom"] ?>">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <h2 class="font-heading"><?= $recette["nom"] ?></h2>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <span><?= $recette["note"] ?></span>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-clock"></i>
                                <span><?= $recette["temps"] ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="btn-load text-center mt-4">
        <button class="btn-load-more" type="button">Charger plus de recettes</button>
    </div>

    <footer>
        <div
            class="container d-flex justify-content-between align-items-center flex-wrap border-bottom border-secondary pb-4 mb-3">
            <div class="footer-brand d-flex align-items-center">
                <img src="assets/Toque.png" alt="Logo">
                <h2 class="font-heading">Recettes Maison</h2>
            </div>
            <ul class="footer-social d-flex gap-3 m-0 p-0" style="list-style: none;">
                <li><a href="#"><img src="brand/instagram.svg" alt="Instagram"></a></li>
                <li><a href="#"><img src="brand/facebook.svg" alt="Facebook"></a></li>
                <li><a href="#"><img src="brand/pinterest.svg" alt="Pinterest"></a></li>
            </ul>
        </div>
        <p class="footer-copy text-center text-secondary small m-0">© Recettes Maison. Tous droits réservés.</p>
    </footer>
</body>

</html>