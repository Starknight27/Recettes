<?php

$recette = [
    "nom" => "Croque Madame",
    "description" => "Un classique des bistrots français : le croque-monsieur surmonté d'un œuf au plat parfait et coulant.",
    "note" => "4.7",
    "temps_prep" => "10 min",
    "temps_cuisson" => "15 min",
    "difficulte" => "Facile",
    "ingredients" => [
        "4 tranches de pain de mie",
        "2 tranches de jambon blanc",
        "100 g de gruyère ou emmental râpé",
        "2 œufs frais",
        "20 g de beurre",
        "Sel et poivre"
    ],
    "ustensiles" => [
        "1 poêle anti-adhésive",
        "1 plaque allant au four",
        "1 spatule"
    ],
    "etapes" => [
        "Préparer les croques : Beurrez légèrement les faces extérieures des tranches de pain de mie.",
        "Garnir : Sur la face intérieure, déposez le jambon et parsemez généreusement de fromage râpé. Refermez les croques.",
        "Gratiner : Enfournez les croques à 200°C pendant 10 à 15 minutes jusqu'à ce qu'ils soient bien dorés.",
        "Cuire les œufs : Pendant ce temps, faites fondre une noisette de beurre dans une poêle et faites cuire vos œufs au plat. Salez et poivrez.",
        "Dresser : Sortez les croques du four, déposez délicatement un œuf au plat sur chacun d'eux et servez immédiatement avec une salade."
    ],
    "commentaire" => "Pour un œuf parfait, couvrez la poêle avec un couvercle pendant la dernière minute de cuisson !",
    "images_carousel" => [
        "croque_madame.jpg",
        "croque_madame.jpg",
        "croque_madame.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $recette['nom'] ?> - Recettes Maison</title>
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

    <main class="container my-5 py-4">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 pe-md-5">
                <p>CLASSIQUE</p>
                <h1 class="font-heading display-4 fw-bold mb-3"><?= $recette['nom'] ?></h1>
                <p><?= $recette['description'] ?></p>

                <div class="d-flex gap-2 align-items-center mb-4 rating">
                    <i class="fa-solid fa-star"></i>
                    <span class="ms-2 fw-bold text-dark"><?= $recette['note'] ?></span>
                </div>

                <div class="d-flex gap-5 mt-4 border-top pt-4">
                    <div class="text-center">
                        <i class="fa-regular fa-clock fs-4 mb-2 text-secondary"></i>
                        <p>Préparation</p>
                        <div class="fw-bold"><?= $recette['temps_prep'] ?></div>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-fire fs-4 mb-2 text-secondary"></i>
                        <p>Cuisson</p>
                        <div class="fw-bold"><?= $recette['temps_cuisson'] ?></div>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-chart-simple fs-4 mb-2 text-secondary"></i>
                        <p>Difficulté</p>
                        <div class="fw-bold"><?= $recette['difficulte'] ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <img src="assets/<?= $recette['images_carousel'][0] ?>" alt="<?= $recette['nom'] ?>"
                    class="img-fluid rounded-3 shadow-sm w-100" style="height: 400px; object-fit: cover;">
            </div>
        </div>

        <div class="row mt-5 pt-4 border-top">

            <div class="col-md-4 pe-md-4">
                <h3 class="font-heading h4 mb-4"><i class="fa-solid fa-lightbulb text-warning me-2"></i> Ingrédients
                </h3>
                <ul class="list-group list-group-flush mb-5">
                    <?php foreach($recette['ingredients'] as $ingredient): ?>
                    <li class="list-group-item bg-transparent px-0 border-light">
                        <span class="text-warning fw-bold me-2">•</span> <?= $ingredient ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <h3 class="font-heading h4 mb-4"><i class="fa-solid fa-spoon text-warning me-2"></i> Ustensiles</h3>
                <ul class="list-group list-group-flush mb-5">
                    <?php foreach($recette['ustensiles'] as $ustensile): ?>
                    <li class="list-group-item bg-transparent px-0 border-light">
                        <span class="text-warning fw-bold me-2">•</span> <?= $ustensile ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <div class="p-4 rounded-3 mt-4" style="background-color: #fdfaf5; border: 1px solid #f0e6d2;">
                    <h5 class="font-heading text-dark mb-3"><i class="fa-regular fa-lightbulb text-warning me-2"></i>
                        Conseil du chef</h5>
                    <p><?= $recette['commentaire'] ?></p>
                </div>
            </div>
            <div class="col-md-8 ps-md-4 mt-5 mt-md-0">
                <h3 class="font-heading h4 mb-4"><i class="fa-solid fa-list-ol text-warning me-2"></i> Étapes de
                    préparation</h3>
                <div>
                    <?php foreach($recette['etapes'] as $index => $etape): ?>
                    <div class="d-flex mb-4 p-3 bg-white rounded-3 shadow-sm border"
                        style="border-color: #f0e6d2 !important;">
                        <div class="me-4 flex-shrink-0 d-flex justify-content-center align-items-center text-white fw-bold rounded-circle"
                            style="width: 35px; height: 35px; background-color: goldenrod;">
                            <?= $index + 1 ?>
                        </div>
                        <p><?= $etape ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </main>

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