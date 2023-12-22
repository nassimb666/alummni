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
    <?php
    include('./assets/data/data.php');

    $images = [
        "./assets/img/portrait-1.jpg",
        "./assets/img/portrait-2.jpg",
        "./assets/img/portrait-3.jpg",
        "./assets/img/portrait-4.jpg",
        "./assets/img/portrait-5.jpg",
        "./assets/img/portrait-6.jpg",
        "./assets/img/portrait-7.jpg",
        "./assets/img/portrait-8.jpg",
        "./assets/img/portrait-9.jpg",
        "./assets/img/portrait-10.jpg",
        "./assets/img/portrait-11.jpg",
        "./assets/img/portrait-12.jpg",
        "./assets/img/portrait-13.jpg",
        "./assets/img/portrait-14.jpg",
        "./assets/img/portrait-15.jpg",
        "./assets/img/portrait-16.jpg",
        "./assets/img/portrait-17.jpg",
        "./assets/img/portrait-18.jpg",
        "./assets/img/portrait-19.jpg",
        "./assets/img/portrait-20.jpg",
    ];

    $imageIndex = 0;
    
    foreach ($data as $person) {
        echo '<div class="card">';
        echo '<img src="' . $images[$imageIndex] . '" alt="" class="portrait">'.'<br>';
        echo '<strong>Nom:</strong> ' . $person['name'] . '<br>';
        echo '<strong>Téléphone:</strong> ' . $person['phone'] . '<br>';
        echo '<strong>Email:</strong> ' . $person['email'] . '<br>';
        echo '<strong>Région:</strong> ' . $person['region'] . '<br>';
        echo '<button>Contactez</button>';
        echo '</div>';

        
        $imageIndex = ($imageIndex + 1) % count($images);
    }
?>



    </div>
    

    <div class="parallax"></div>

    <?php include './components/footer.php'; ?>

    <!-- <script src="./assets/script/script.js"></script> -->
</body>
</html>
