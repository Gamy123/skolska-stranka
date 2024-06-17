<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operátory porovnávania v PHP</title>
</head>
<body>
<?php include('partials\header.php')?>
<section class="nehcapem">
        <h2>Úvod</h2>
        <p>V jazyku PHP sa používajú rôzne operátory porovnávania na porovnávanie hodnôt. Tieto operátory sa často používajú v podmienkových príkazoch a pri vyhodnocovaní logických výrazov.</p>
        <h2>Operátory porovnávania</h2>
        <p>Tu sú niektoré základné operátory porovnávania v jazyku PHP:</p>
        <ul>
            <li><code>==</code>: Rovná sa (hodnoty sú rovnaké)</li>
            <li><code>===</code>: Rovná sa a je rovnakého typu (hodnoty a typy sú rovnaké)</li>
            <li><code>!=</code> alebo <code>&lt;&gt;</code>: Nerovná sa (hodnoty nie sú rovnaké)</li>
            <li><code>!==</code>: Nerovná sa alebo nie je rovnakého typu (hodnoty alebo typy nie sú rovnaké)</li>
            <li><code>&lt;</code>: Menšie než</li>
            <li><code>&gt;</code>: Väčšie než</li>
            <li><code>&lt;=</code>: Menšie alebo rovné</li>
            <li><code>&gt;=</code>: Väčšie alebo rovné</li>
        </ul>

        <h2>Príklady</h2>
        <p>Tu sú niektoré príklady použitia operátorov porovnávania v PHP:</p>
        <pre>
            <code>
<?php
$age = 25;

if ($age >= 18) {
    echo "Ste dospelý.";
} else {
    echo "Ste dieťa.";
}

$number1 = 10;
$number2 = 20;

if ($number1 != $number2) {
    echo "Čísla sa nerovnajú.";
} else {
    echo "Čísla sa rovnajú.";
}
?>
            </code>
        </pre>
        <p>V týchto príkladoch sa porovnáva vek a dve čísla pomocou operátorov porovnávania v PHP.</p>
        </section>
        <?php include('partials\footer.php')?>
</body>
</html>
