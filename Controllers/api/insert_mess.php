<?php
session_start();
include("./../../config.php");
include("./../../Modals/comment.php");
$result = Comment::insertComment($_SESSION['id'],$_POST['id'],2,$_POST['comment']);
echo $result;

