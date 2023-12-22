<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />

        <title>Alumni AFPA</title>
</head>
<body>

    <div class="nav">
        <?php include './components/navbar.php'; ?>
    </div>

    <div class="parallax"></div>

    <div>
        <h1>Alumni AFPA </h1>
    </div>

    <div class="search_toggle">
        <h2>Vous pouvez rechercher vos collègues de formation ici</h2>
        <div class="search2">
            <input type="text">
            <button type="submit">Rechercher</button>
        </div>
    </div>

    <h3>Liste des nouveaux diplômés :</h3>

    <div class="liste">
    
    </div>

    <div class="parallax"></div>

    <?php include './components/footer.php'; ?>

    <script src="./assets/script/script.js"></script>
</body>
</html>
