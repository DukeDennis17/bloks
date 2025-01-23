<?php

if (isset($_POST["id"]) && $_POST["id"] != "") {
    $sql = "INSERT INTO posts (content) VALUES (:content);";
    $params = ["content" => $_POST["id"]];
    $post = $db->query($sql, $params)->fetch();
   
}
require "views/posts/show.view.php";