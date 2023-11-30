<?php

function getPassword()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'abcdefghijklmnopqrstwyxz';
    $upperCaseLetters = strtoupper($letters);
    $numbers = '0123456789';

    if (isset($_GET["passwordLength"])) {
        $passwordLength = $_GET['passwordLength'];
        $password = '';
        while (strlen($password) < $passwordLength) {
            $allItems = $symbols . $letters . $upperCaseLetters . $numbers;
            $randItem = $allItems[rand(0, strlen($allItems) - 1)];
            $password .= $randItem;
        }
        // var_dump($password);
        $_SESSION['password'] = $password;
        header('Location: index.php');
        return $password;
    }
}

?>