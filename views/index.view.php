<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(count($posts) == 0 ){ ?>
    <p>nav atrasts pamegini citu</p>;
<?php } ?>
<ul>
<?php foreach($posts as $post){ ?>
     <li> <?= $post["content"] ?>  </li>
<?php } ?>
 </ul> 
</body>
</html>


 <form>
 <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?> ' />
 <button>meklet</button>
 </form>


