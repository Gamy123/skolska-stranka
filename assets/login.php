<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $usersJson = file_get_contents('users.json');
        $users = json_decode($usersJson, true);

        foreach ($users as $user) {
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                header('Location: ../dashboard.php');
                exit();
            }
        }
        echo "Zle heslo alebo meno";
    } else {
        echo "Vypln vsetky polia";
    }
}
?>
