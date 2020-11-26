<?php
include("./../../config.php");
include("./../../Modals/group_modal.php");
$result = Group::delete($_POST['id']);
echo $result;
