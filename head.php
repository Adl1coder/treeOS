<?php
    error_reporting(E_ERROR | E_PARSE); 
    session_start(); 
    include("db.php"); 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo isset($title) ? "treeOS - ".$title : "treeOS" ?></title>
</head>