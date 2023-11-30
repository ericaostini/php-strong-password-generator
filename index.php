<?php
include __DIR__ . "/partials/header.php";
if (!isset($_SESSION["password"])) {
    header("Location: login.php");
    exit();
}
?>

<main class="container">
    <div>
        <?php echo $_SESSION['password'] ?>
    </div>
</main>

<?php
include __DIR__ . "/partials/footer.php";
?>