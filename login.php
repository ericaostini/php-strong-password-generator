<?php
include __DIR__ . "/partials/header.php";
getPassword();
?>

<main class="container mt-3">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <label class="form-label">Lunghezza password</label>
        <input type="number" name="passwordLength">
        <button type="submit">Genera</button>
        <button type="reset">Reset</button>
    </form>
    <div>
        <?php echo $_GET["passwordLength"] ?>
    </div>
</main>

<?php
include __DIR__ . "/partials/footer.php";
?>