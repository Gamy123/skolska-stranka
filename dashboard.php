<?php include('partials/header.php') ?>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: log.php');
    exit();
}

function isAdmin($username) {
    $usersJson = file_get_contents('assets/users.json');
    $users = json_decode($usersJson, true);
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['role'] === 'admin') {
            return true;
        }
    }
    return false;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: log.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change_role']) && isAdmin($_SESSION['username'])) {
    $username = $_POST['username'];
    $role = $_POST['role'];

    $usersJson = file_get_contents('assets/users.json');
    $users = json_decode($usersJson, true);

    foreach ($users as &$user) {
        if ($user['username'] === $username) {
            $user['role'] = $role;
            break;
        }
    }

    file_put_contents('assets/users.json', json_encode($users, JSON_PRETTY_PRINT));

    header('Location: dashboard.php?success=Uspesne zmenena rola');
    exit();
}
?>
<form action="dashboard.php" method="get">
    <button type="submit" name="logout">Logout</button>
</form>

<?php if (isAdmin($_SESSION['username'])): ?>
    <form action="dashboard.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="role">New Role:</label>
        <select id="role" name="role" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>
        <button type="submit" name="change_role">Change Role</button>
    </form>
<?php endif; ?>

<?php include('partials/footer.php') ?>
