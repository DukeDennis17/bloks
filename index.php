<?php
include "helper.php";
include "database.php";

$config = require ("config.php");

$db = new database($config["Database"]);

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
require "views/index.view.php";