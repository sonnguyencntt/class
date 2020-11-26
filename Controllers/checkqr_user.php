<?php
session_start();
include("./../config.php");
include("./../Modals/group_modal.php");
$id_group = $_POST['id_group'];
$code = $_POST['qr'];

if(isset($_SESSION['id']))
{
   $result = Group::CheckQR($code,$id_group,$_SESSION['id']);
   echo $result;
}
else
{
    echo "0";
}

?>