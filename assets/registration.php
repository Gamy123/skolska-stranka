<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        // Get form data
        $username = $_POST['username'];
        // Hash the password
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $formData = array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'role'=>'user'
        );
        $jsonData = json_encode($formData);


        $file = 'users.json';
        $currentData = file_get_contents($file);
        $currentArray = json_decode($currentData, true);
        $currentArray[] = $formData;
        $newData = json_encode($currentArray, JSON_PRETTY_PRINT);
        if(file_put_contents($file, $newData)) {
            header('Location: ../dashboard.php');
            exit();
        } else {
            echo "Error: Neda sa zapisat data do json file";
        }
    } else {
        echo "Error: zapis vsetky polia";
    }
} else {

    echo "Error: Neklikol si tlacitko";
}
?>
