<?php

function getPassword()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'abcdefghijklmnopqrstwyxz';
    $upperCaseLetters = strtoupper($letters);
    $numbers = '0123456789';

    if (isset($_GET["passwordLength"]) && $_GET["passwordLength"] > 6 && $_GET["passwordLength"] < 20) {
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
    return false;
}

?>