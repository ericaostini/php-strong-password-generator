<?php

function getPassword()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'abcdefghijklmnopqrstwyxz';
    $upperCaseLetters = strtoupper($letters);
    $numbers = '0123456789';

    $allItems = $symbols . $letters . $upperCaseLetters . $numbers;

    if (isset($_GET["passwordLength"])) {
        $passwordLength = $_GET['passwordLength'];
        $password = '';
        while (strlen($password) < $passwordLength) {
            $randItem = $allItems[rand(0, strlen($allItems) - 1)];
            $password .= $randItem;
        }
        return $password;
    }
}

?>