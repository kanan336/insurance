<?php
session_start();
require 'functions/routing.php';
session_unset();
session_destroy();
 go('./login.php');    
?>