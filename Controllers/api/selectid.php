<?php
include("./../../config.php");
include("./../../Modals/group_modal.php");
$result = Group::getID($_POST['id']);
echo json_encode($result);