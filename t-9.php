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
        <p>V jazyku PHP sa používa cyklus "for" na opakovanie kódu určitý počet krát.</p>
        <h2>Cyklus "for"</h2>
        <p>Cyklus "for" vykonáva určitý blok kódu určitý počet krát, pričom umožňuje definovať podmienku špecifikujúcu, kedy má cyklus skončiť.</p>
        <p>Formát:</p>
        <pre><code>
for (inicializácia; podmienka; iterácia) {
    // kód, ktorý sa opakuje
}
        </code></pre>
        <ul>
            <li><strong>Inicializácia:</strong> Inicializuje premennú cyklu.</li>
            <li><strong>Podmienka:</strong> Určuje, kedy má cyklus skončiť.</li>
            <li><strong>Iterácia:</strong> Aktualizuje stav cyklu po každej iterácii.</li>
        </ul>
        <h2>Príklady</h2>
        <p>Tu sú niektoré príklady použitia cyklu "for" v PHP:</p>
        <pre><code>
<?php
// Cyklus for na výpis čísel od 1 do 5
for ($i = 1; $i <= 5; $i++) {
    echo "Číslo: $i <br>";
}

// Cyklus for na výpis sudých čísel od 2 do 10
for ($i = 2; $i <= 10; $i += 2) {
    echo "Sudé číslo: $i <br>";
}
?>
        </code></pre>
        <p>V prvom príklade sa opakuje výpis čísel od 1 do 5, a v druhom príklade sa opakuje výpis sudých čísel od 2 do 10.</p>
        </section>
    <?php include('partials\footer.php')?>
</body>
</html>