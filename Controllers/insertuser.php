<?php
include("./../Modals/login_Modal.php");
$result = Account::insertLogin($_POST['name'],$_POST['pass'],$_POST['email']);
echo $result;
