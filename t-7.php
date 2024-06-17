<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmetické operácie v PHP</title>
</head>
<body>
    <?php include('partials\header.php')?>
<section class="nehcapem">
        <h2>Úvod</h2>
        <p>V jazyku PHP sa používajú aritmetické operácie na vykonávanie matematických operácií s číselnými hodnotami.</p>

        <h2>Aritmetické operátory</h2>
        <p>Tu sú niektoré základné aritmetické operátory v jazyku PHP:</p>
        <ul>
            <li><code>+</code>: Sčítanie</li>
            <li><code>-</code>: Odčítanie</li>
            <li><code>*</code>: Násobenie</li>
            <li><code>/</code>: Delenie</li>
            <li><code>%</code>: Zvyšok po delení (modulo)</li>
            <li><code>**</code>: Umocňovanie</li>
        </ul>

        <h2>Príklady</h2>
        <p>Tu sú niektoré príklady použitia aritmetických operácií v PHP:</p>
        <pre>
            <code>
<?php
$a = 10;
$b = 5;

$sum = $a + $b;
$subtract = $a - $b;
$multiply = $a * $b;
$divide = $a / $b;
$modulo = $a % $b;
$exponent = $a ** $b;

echo "Sčítanie: " . $sum . "<br>";
echo "Odčítanie: " . $subtract . "<br>";
echo "Násobenie: " . $multiply . "<br>";
echo "Delenie: " . $divide . "<br>";
echo "Zvyšok po delení: " . $modulo . "<br>";
echo "Umocňovanie: " . $exponent . "<br>";
?>
            </code>
        </pre>
        <p>V tomto príklade sa vykonávajú rôzne aritmetické operácie s číslami.</p>
    </section>
    <?php include('partials\footer.php')?>
</body>
</html>
