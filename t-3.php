<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('partials\header.php')?>
<section class="nehcapem">
        <h2>Čo je podmienkový príkaz IF?</h2>
        Podmienkový príkaz `if` v jazyku PHP je používaný na vykonanie určitého kódu iba v prípade, že je splnená určitá podmienka. Ak je podmienka pravdivá (hodnota je `true`), vykoná sa kód uvnútri bloku `if`. V opačnom prípade sa kód preskočí alebo vykoná alternatívny kód, ak je definovaný.

        <h2>Syntax IF príkazu</h2>
        Podmienkový príkaz `if` v PHP má nasledujúcu syntax:
        <pre>
            <code>
if (podmienka) {
    // kód, ktorý sa vykoná, ak je podmienka pravdivá
} else {
    // kód, ktorý sa vykoná, ak nie je splnená prvá podmienka
}
            </code>
        </pre>

        <h2>Príklady</h2>
        Tu sú niektoré príklady použitia podmienkového príkazu `if` v PHP:
        <pre>
            <code>
<?php
$age = 25;

if ($age >= 18) {
    echo "Máte povolený prístup.";
} else {
    echo "Prístup zamietnutý - musíte byť starší ako 18 rokov.";
}
?>
            </code>
        </pre>
        V tomto príklade sa skontroluje vek. Ak je vek väčší alebo rovný 18, vypíše sa správa "Máte povolený prístup.". V opačnom prípade sa vypíše "Prístup zamietnutý - musíte byť starší ako 18 rokov.".
    </section>
    <br>
    <br>
    <br>
    <br>

    <?php include('partials\footer.php')?>
</body>
</html>