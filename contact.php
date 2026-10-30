<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Recettes Maison</title>
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

    <main class="container my-5">
        <div class="row align-items-center mb-5 pb-5 border-bottom">
            <div class="col-md-6">
                <p class="text-warning fw-bold mb-1 small">QUI SOMMES-NOUS ?</p>
                <h1 class="font-heading display-4 mb-4">Des idées simples,<br>du plaisir à partager.</h1>
                <p>Bienvenue chez Recettes Maison. Derrière ce site, il y a Rayaan, Alvin et Adam :
                    trois étudiants réunis autour de la cuisine.</p>
            </div>
            <div class="col-md-6">
                <img src="assets/croque_madame.jpg" alt="Croque Madame" class="img-fluid rounded-3 shadow-sm w-100"
                    style="height: 350px; object-fit: cover;">
            </div>
        </div>

        <div class="text-center mb-5">
            <h2 class="font-heading">Trois regards sur la cuisine.</h2>
            <p>Chacun sa spécialité, une même envie de vous régaler.</p>
        </div>

        <div class="row g-4 mb-5 pb-5 border-bottom">
            <div class="col-md-4">
                <div class="card team-card text-center p-4 h-100">
                    <img src="assets/ToadM.png" alt="Avatar Rayaan" class="avatar-img mx-auto">
                    <h3 class="font-heading h4">Rayaan</h3>
                    <p class="text-muted small">Les plats familiaux et les saveurs réconfortantes. Occupé de
                        l'architecture PHP et la structure du code.</p>
                    <details class="text-start mt-3">
                        <summary>En savoir plus</summary>
                        <p class="small">Mettre à l'honneur des recettes traditionnelles et les expliquer simplement.
                        </p>
                    </details>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card team-card text-center p-4 h-100">
                    <img src="assets/ToadL.png" alt="Avatar Alvin" class="avatar-img mx-auto">
                    <h3 class="font-heading h4">Alvin</h3>
                    <p class="text-muted small">La créativité en cuisine. Il a géré la structure HTML et l'intégration
                        de Bootstrap.</p>
                    <details class="text-start mt-3">
                        <summary>En savoir plus</summary>
                        <p class="small">Imaginer des variantes gourmandes tout en gardant des recettes faciles.</p>
                    </details>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card team-card text-center p-4 h-100">
                    <img src="assets/Toad.png" alt="Avatar Adam" class="avatar-img mx-auto">
                    <h3 class="font-heading h4">Adam</h3>
                    <p class="text-muted small">Le ninja culinaire des repas rapides. Il a conçu le design et la feuille
                        de style CSS.</p>
                    <details class="text-start mt-3">
                        <summary>En savoir plus</summary>
                        <p class="small">Sélectionner des idées pratiques pour les repas de tous les jours.</p>
                    </details>
                </div>
            </div>
        </div>

        <div class="row text-center mb-4">
            <div class="col-md-4 mb-3">
                <h3 class="font-heading h5 text-warning border-top pt-3 d-inline-block">01. Faire simple</h3>
                <p class="text-muted small mt-2">Des étapes compréhensibles et des ingrédients du quotidien.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h3 class="font-heading h5 text-warning border-top pt-3 d-inline-block">02. Se faire plaisir</h3>
                <p class="text-muted small mt-2">Des recettes gourmandes qui donnent envie de passer à table.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h3 class="font-heading h5 text-warning border-top pt-3 d-inline-block">03. Partager</h3>
                <p class="text-muted small mt-2">Des idées à préparer ensemble et des repas qui rassemblent.</p>
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