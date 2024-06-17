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
        <h2>Skalárne dátové typy</h2>
        <p>V PHP existujú nasledovné skalárne dátové typy:</p>
        <ul>
            <li><strong>String:</strong> Sekvencia znakov, napríklad "Hello World".</li>
            <li><strong>Integer:</strong> Celé číslo bez desatinných číslic.</li>
            <li><strong>Float (alebo Double):</strong> Číslo s desatinnými číslicami.</li>
            <li><strong>Boolean:</strong> Hodnota, ktorá je buď true (pravdivá) alebo false (nepravdivá).</li>
        </ul>
        <h2>Zložené dátové typy</h2>
        <p>V PHP existujú aj zložené dátové typy, ktoré môžu obsahovať viacero hodnôt:</p>
        <ul>
            <li><strong>Array:</strong> Zoznam hodnôt, ktoré sú indexované kľúčmi.</li>
            <li><strong>Object:</strong> Inštancia triedy, ktorá môže obsahovať vlastnosti a metódy.</li>
            <li><strong>Callable:</strong> Reťazec alebo pole, ktoré môže byť volané ako funkcia.</li>
        </ul>
        <h2>Špeciálne dátové typy</h2>
        <p>Okrem skalárnych a zložených dátových typov existujú v PHP aj špeciálne dátové typy:</p>
        <ul>
            <li><strong>NULL:</strong> Špeciálna hodnota, ktorá indikuje, že premenná nemá žiadnu hodnotu.</li>
            <li><strong>Resource:</strong> Špeciálny typ, ktorý obsahuje odkaz na externý zdroj, ako sú databázové spojenia alebo otvorené súbory.</li>
        </ul>
    </section>
    <?php include('partials\footer.php')?>
</body>
</html>