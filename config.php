<?php
class DB{
  
    public  function GetConnection(){
      $servername = "localhost";
      $username = "root";
      $password = "";  
      $db = 'classroom';
        $conn = new mysqli($servername, $username, $password, $db);
        mysqli_query($conn,"SET NAMES 'utf8'");
        return $conn;
    }
}
	

?>