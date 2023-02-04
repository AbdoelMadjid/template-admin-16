<?php
$page = (isset($_GET['page']))? $_GET['page'] : "";
if(isset($_GET['page'])){include 'pages/'.$page.'.php';}else{include 'pages/home.php';}
?>