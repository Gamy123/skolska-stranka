<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cykly "while" a "do while"</title>
</head>
<body>
<?php include('partials\header.php')?>
<section class="nehcapem">
        <h2>Úvod</h2>
        <p>V jazyku PHP sa používajú cykly na opakovanie kódu, kým je splnená určitá podmienka. Dva základné typy cyklov sú "while" a "do while".</p>
        <h2>Cyklus "while"</h2>
        <p>Cyklus "while" vykonáva určitý blok kódu, kým je splnená zadaná podmienka.</p>
        <p>Formát:</p>
        <pre><code>
while (podmienka) {
    // kód, ktorý sa opakuje
}
        </code></pre>
        <h2>Cyklus "do while"</h2>
        <p>Cyklus "do while" vykonáva určitý blok kódu aspoň raz, a potom pokračuje v opakovaní, kým je splnená zadaná podmienka.</p>
        <p>Formát:</p>
        <pre><code>
do {
    // kód, ktorý sa opakuje
} while (podmienka);
        </code></pre>
        <h2>Príklady</h2>
        <p>Tu sú niektoré príklady použitia cyklov "while" a "do while" v PHP:</p>
        <pre><code>
<?php
// Cyklus while
$count = 1;
while ($count <= 5) {
    echo "Číslo: $count <br>";
    $count++;
}

// Cyklus do while
$count = 1;
do {
    echo "Číslo: $count <br>";
    $count++;
} while ($count <= 5);
?>
        </code></pre>
        <p>V týchto príkladoch sa opakuje výpis čísel od 1 do 5 pomocou cyklov "while" a "do while".</p>
    </section>
    <?php include('partials\footer.php')?>
</body>
</html>