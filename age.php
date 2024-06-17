<!DOCTYPE html>
<html>
<head>
    <title>Age Verification</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="over18">Mam viac ako 18</button>
        <button type="submit" name="under18">Mam menej ako 18</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['over18'])) {
            header("Location: index.php");
        } elseif (isset($_POST['under18'])) {
            echo "<h1>Nikam nejdes</h1>";
        }
    }
    ?>
</body>
</html>