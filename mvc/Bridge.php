<?php
session_start();
// Gọi vời app
require_once "./mvc/core/App.php";
require_once "./mvc/core/controller.php";
$myApp = new App();