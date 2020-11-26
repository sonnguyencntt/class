<?php
include("./../../config.php");
include("./../../Modals/group_modal.php");
$result = Group::insertGroup($_POST['id'],$_POST['subject'],$_POST['name'],$_POST['code']);
echo $result;
