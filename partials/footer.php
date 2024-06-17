<!DOCTYPE html>
<body>
    <?php
    $obj = json_decode(file_get_contents('assets/veci.json'));
    ?>
    <footer>
        <div>
            <b>Kontakt</b>
            <?php foreach ($obj->Kontakt as $key): ?>
                <a><?php echo htmlspecialchars($key); ?></a>
            <?php endforeach; ?>
        </div>
        <div>
            <b>Linky</b>
            <?php foreach ($obj->Linky as $key): ?>
                <a href="<?php echo htmlspecialchars($key); ?>"><?php echo htmlspecialchars($key); ?></a>
            <?php endforeach; ?>
        </div>
        <div>
            <b>O nás</b>
            <a class="nvm"><?php echo htmlspecialchars($obj->Onas->text); ?></a>
        </div>
    </footer>
</body>

</html>
