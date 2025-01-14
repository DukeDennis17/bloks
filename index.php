<?php
include "helper.php";
include "database.php";

$config = require ("config.php");

$db = new database($config["Database"]);

require "router.php";