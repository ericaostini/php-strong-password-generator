<?php
include __DIR__ . "/partials/header.php";
$error = getPassword();
if (isset($_GET["ripetizione"])) {
    $ripetizione = $_GET["ripetizione"];
}
?>

<main class="container mt-3">
    <?php if ($error) { ?>
    <div class="alert alert-danger">
        <?php echo $error ?>
    </div>
    <?php } ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <label class="form-label">Lunghezza password</label>
        <input type="number" name="passwordLength">
        <button type="submit">Genera</button>
        <button type="reset">Reset</button>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ripetizione" value="si">
            <label class="form-check-label">
                Si
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ripetizione" value="no" checked>
            <label class="form-check-label">
                No
            </label>
        </div>
    </form>
</main>

<?php
include __DIR__ . "/partials/footer.php";
?>