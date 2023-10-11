<?php
session_start();
session_destroy();
header("location:/sidesa/login.php");
?>