<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logické operátory "and" a "or" v PHP</title>
</head>
<body>
<?php include('partials\header.php')?>
<section class="nehcapem">
        <h2>Úvod</h2>
        <p>V jazyku PHP sa používajú logické operátory na vyhodnotenie logických výrazov. Dva z týchto operátorov sú "and" a "or".</p>
        <h2>Logický operátor "and"</h2>
        <p>Logický operátor "and" vyhodnocuje sa ako true, ak obe podmienky sú true.</p>
        <p>Formát: <code>podmienka1 and podmienka2</code></p>
        <h2>Logický operátor "or"</h2>
        <p>Logický operátor "or" vyhodnocuje sa ako true, ak aspoň jedna z podmienok je true.</p>
        <p>Formát: <code>podmienka1 or podmienka2</code></p>
        <h2>Príklady</h2>
        <p>Tu sú niektoré príklady použitia logických operátorov "and" a "or" v PHP:</p>
        <pre>
            <code>
<?php
$age = 25;
$score = 80;

if ($age >= 18 and $score >= 50) {
    echo "Ste dosť starý a získali ste dosť bodov.";
} else {
    echo "Nie ste dosť starý alebo ste získali nedostatočný počet bodov.";
}

$username = "user123";
$password = "password";

if ($username == "admin" or $password == "admin123") {
    echo "Ste prihlásený ako administrátor.";
} else {
    echo "Nie ste administrátor.";
}
?>
            </code>
        </pre>
        <p>V týchto príkladoch sa používa logický operátor "and" na kontrolu veku a skóre a logický operátor "or" na kontrolu prihlasovacích údajov.</p>
    </section>
    <?php include('partials\footer.php')?>
</body>
</html>