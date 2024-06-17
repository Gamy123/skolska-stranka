<body>
<?php include('partials\header.php')?>
<h1> <?php
    $hodina = date("G");
    switch (true) {
        case ($hodina >= 0 && $hodina < 9):
            echo ("Dobré ráno!");
            break;
        case ($hodina >= 9 && $hodina < 18):
            echo ("Dobrý deň!");
            break;
        default:
            echo ("Dobrý večer!");
    }
    ?>
    </h1>
    <p>Táto stránka slúži na školské účely.</p>
    <?php include('partials\footer.php')?>
</body>
</html>
