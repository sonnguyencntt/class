<?php
session_start();
include("./../config.php");

include("./../Modals/group_modal.php");
$id_group = $_POST['id_group'];

if(isset($_SESSION['id']))
{
   $result = Group::Checkexsit($_SESSION['id'],$id_group);
   echo $result;
}
else
{
    echo "0";
}

?>