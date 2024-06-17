<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<body>
    <nav>
    <?php
    $directory = $_SERVER['DOCUMENT_ROOT'] . '/php-site/PRAX/';
    if (is_dir($directory)) {
        if ($handle = opendir($directory)) {
            while (($file = readdir($handle)) !== false) {
                $filename = basename($file, '.php');
                if ( $filename != '' && !is_dir($directory . '/' . $file)) {
                    echo "<div><a href='/php-site/PRAX/$file'>$filename</a></div>";
                }
            }
            closedir($handle);
        }
    }
?>
    </nav>
    <div class="idk"><b><?php echo(basename($_SERVER['SCRIPT_FILENAME'],'.php')) ?></b></div>
</body>