<?php
require_once 'config/config.php';
require_once 'config/autoload.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);
$bookController = new BookController();
            $bookController->showHome();
?>

