<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<?php if(count($posts) == 0 ){ ?>
    <p>Nav atrasti rezultāti, mēģiniet citu.</p>
<?php } ?>

<ul>
<?php foreach($posts as $post){ ?>
    <li><a href="show?id=<?= $post["id"] ?>"> <?= htmlspecialchars($post["content"]) ?></a></li>
<?php } ?>
</ul>

<form method="GET" action="">
    <input name='search_query' value='<?= htmlspecialchars($_GET["search_query"] ?? "") ?>' />
    <button type="submit">Meklēt</button>
</form>

<?php require "views/components/footer.php"; ?>
