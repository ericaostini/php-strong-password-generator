<?php
function getPassword()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'abcdefghijklmnopqrstwxyz';
    $upperCaseLetters = strtoupper($letters);
    $numbers = '0123456789';

    if (isset($_GET["passwordLength"]) && $_GET["passwordLength"] > 6 && $_GET["passwordLength"] < 20) {
        $passwordLength = $_GET['passwordLength'];
        $password = '';
        while (strlen($password) < $passwordLength) {
            $caratteri = $_GET['caratteri'][0];
            if ($caratteri === 'lettere') {
                $allItems = $letters . $upperCaseLetters;
                $randItem = $letters[rand(0, strlen($letters) - 1)];
            } elseif ($caratteri === 'numeri') {
                $randItem = $numbers[rand(0, strlen($numbers) - 1)];
            } elseif ($caratteri === 'simboli') {
                $randItem = $symbols[rand(0, strlen($symbols) - 1)];
            } else {
                $allItems = $symbols . $letters . $upperCaseLetters . $numbers;
                $randItem = $allItems[rand(0, strlen($allItems) - 1)];
            }
            if ($_GET["ripetizione"] === 'no') {
                if (!strpos($password, $randItem)) {
                    $password .= $randItem;
                }
            } else {
                $password .= $randItem;
            }
        }
        // var_dump($password);
        $_SESSION['password'] = $password;
        header('Location: index.php');
        return $password;
    }
    return false;
}

?>