<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<?php if(count($posts) == 0 ){ ?>
    <p>nav atrasts pamegini citu</p>;
<?php } ?>
<ul>
<?php foreach($posts as $post){ ?>
     <li><a herf="show?id=<?=  $post["id"] ?>"> <?= $post["content"] ?></a> </li>
<?php } ?>
<form>
 <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?> ' />
 <button>meklet</button>
 </form>
 </ul> 
   <?php require "views/components/footer.php";


 


