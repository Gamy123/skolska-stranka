<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t1</title>
</head>

<body>
    <?php include('partials\header.php') ?>
    <section class="nehcapem">
        <h2>Čo je XAMPP?</h2>
        
        <ol>
        <li>XAMPP je sada open-source aplikácií, ktorá obsahuje Apache, MySQL, PHP a Perl. Je navrhnutý na jednoduchú
            inštaláciu a použitie, čo umožňuje vytvoriť lokálny vývojový server pre vývoj webových aplikácií.</li>
        </ol>
        <h2>Ako nainštalovať XAMPP?</h2>
        <ol>
            <li>Stiahnite si inštalačný súbor XAMPP z oficiálnej stránky <a
                    href="https://www.apachefriends.org/sk/index.html">XAMPP</a>.</li>
            <li>Spustite inštalačný súbor a postupujte podľa inštrukcií inštalačného procesu.</li>
            <li>Po úspešnej inštalácii spustite XAMPP Control Panel.</li>
        </ol>
        <h2>Pridanie PHP do XAMPP</h2>
        <ol>
            <li>Otvorte XAMPP Control Panel a spustite Apache kliknutím na tlačidlo "Start" vedľa názvu Apache.</li>
            <li>Skontrolujte, či je Apache spustený, prejdite na adresu http://localhost vo vašom prehliadači. Ak všetko
                funguje správne, uvidíte uvítaciu stránku XAMPP.</li>
            <li>Teraz môžete pridať svoje PHP súbory do priečinku `htdocs`, ktorý sa nachádza v adresári, kde ste
                nainštalovali XAMPP. Vaše PHP súbory musia byť uložené v tomto priečinku, aby boli dostupné na lokálnom
                serveri.</li>
            <li>Ak chcete testovať svoje PHP súbory, otvorte váš prehliadač a zadajte adresu
                http://localhost/názov-vašeho-súboru.php, kde `názov-vašeho-súboru.php` je názov vášho PHP súboru.</li>
        </ol>
    </section>
    <?php include('partials\footer.php')?>
</body>

</html>