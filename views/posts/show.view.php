<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Viens bloga ieraksts</h1>

<!-- Pieņemot, ka parādām ieraksta saturu -->
<div>
    <p><?= htmlspecialchars($post["content"]) ?></p>
</div>

<?php require "views/components/footer.php"; ?>
