<?php
include __DIR__ . "/partials/header.php";
include __DIR__ . "/function/function.php";
getPassword();
?>

<main class="container mt-3">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <label class="form-label">Lunghezza password</label>
        <input type="number" name="passwordLength">
        <button type="submit">Genera</button>
        <button type="reset">Reset</button>
    </form>
</main>

<?php
include __DIR__ . "/partials/footer.php";
?>