<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){



if (isset($_POST["content"]) && $_POST["content"] != "") {
    $sql = "INSERT INTO posts (content) VALUES (:content);";
    $params = ["content" => $_POST["content"]];
     $db ->query($sql, $params);
    
}
}
$pageTitle = "ievades lauks!";
require "views/posts/create.view.php";

?>


