<?php 
session_start();
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
require_once ('config.php');
require_once (ROOT . DS . APP . DS . 'core.php');
//} ?>