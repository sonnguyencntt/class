<?php
    include("./../Modals/login_Modal.php");
   $user =  $_POST["user"];
   $pass = $_POST["pass"];
 Account::CheckLogin($user, $pass);

?>