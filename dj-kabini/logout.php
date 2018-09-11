<?php
require_once "BasicDB.php";
require_once "baglan.php";
session_start();
session_destroy();
header("refresh: 0; URL=login.php");
?>