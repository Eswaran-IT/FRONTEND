<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

       if ($username === 'Eswaran' && $password === '1234') {
        header("Location: success.html"); 
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>
