<?php

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
}

function sanitizePassword($inputText) {
    $inputText = strip_tags($inputText);
}

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}
    // if(isset($_POST['Login'])) {
    //   //  echo "login button was pressed";
    // }
    if(isset($_POST['register'])) {

        $username = sanitizeFormUsername($_POST['username']);

        $firstName = sanitizeFormString($_POST['firstName']);

        $lastName = sanitizeFormString($_POST['lastName']);

        $email = sanitizeFormString($_POST['email']);

        $email2 = sanitizeFormString($_POST['email2']);

        $password = sanitizePassword($_POST['password']);

        $password2 = sanitizePassword($_POST['password2']);

  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username: </label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. your name" required>
            </p>
            <p>
                <label for="loginPassword">Password: </label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
            </p>

            <button type="submit" name="Login">Login</button>
        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username: </label>
                <input id="username" name="username" type="text" placeholder="e.g. your name" required>
            </p>
            <p>
                <label for="firstName">firsname: </label>
                <input id="firstName" name="firstName" type="text" placeholder="your firstname" required>
            </p>
            <p>
                <label for="lastName">lastname: </label>
                <input id="lastName" name="lastName" type="text" placeholder="your lastname" required>
            </p>
            <p>
                <label for="email">Email: </label>
                <input id="email" name="email" type="email" placeholder="e.g. name@gmail.com" required>
            </p>
            <p>
                <label for="email2">Confirm email: </label>
                <input id="email2" name="email2" type="email" placeholder="e.g. name@gmail.com" required>
            </p>

            <p>
                <label for="password">Password: </label>
                <input id="password" name="password" type="password" placeholder="Your password" required>
            </p>


            <p>
                <label for="password2"> Confirm Password: </label>
                <input id="password2" name="password2" type="password" placeholder="Confirm your password" required>
            </p>

            <button type="submit" name="register">confirm</button>
        </form>
    </div>
</body>
</html>