<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>

<?php if(count($posts) == 0 ){ ?>
    <p>nav atrasts pamegini citu</p>;
<?php } ?>
<ul>
<?php foreach($posts as $post){ ?>
     <li> <?= $post["content"] ?>  </li>
<?php } ?>
<form>
 <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?> ' />
 <button>meklet</button>
 </form>
 </ul> 
</body>
</html>


 


