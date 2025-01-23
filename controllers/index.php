<?php

$sql = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) &&$_GET["search_query"] != ""){
    // echo"fent reactor";
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query;"; // sagatavotais vaicajums
    $params = ["search_query" => $search_query]; //saistitais parametrs
} 

$posts = $db->query($sql, $params)->fetchall();
    $pageTitle = "Blogs";
require "views/posts/index.view.php";
?>
<img src="download.jpg">;