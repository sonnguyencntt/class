<?php
require_once '../config.php';
	class Account{
    public $id_login;
    public $name ;
    public $password;
    public $email;
   


  
  public function __construct($id_login,$name,$password,$email)
  {
    $this->id_login = $id_login;
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
    
  }
  
		

	
		public  function Login(){
            $sql ="SELECT * FROM `login` ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
         
             
            if ( mysqli_num_rows($stms) == 0) {
                return null;
            }
            else{
                $acount = array();
                while($row = mysqli_fetch_assoc($stms)){
                    array_push($acount, new Account(     $row['id_login']
                                                     ,$row['name']
                                                     ,$row['password']
                                                     ,$row['email'] ));
                                                          
                    }
                    
                return $acount;
                
            }

        }


        static  function CheckLogin($name,$password){
            $sql ="SELECT * FROM `login` where name='$name' and password='$password' ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
         
            while($row = mysqli_fetch_assoc($stms)){
                $id = $row['id_login'];
            break;                  
                }
            if ( mysqli_num_rows($stms) == 0) {

                echo "0";
            }
            else{
                session_start();

                $_SESSION["user"] = $name; 
                $_SESSION["id"] = $id; 
                


                echo "1";
                
            }

        }
       
        public  function insertLogin($name,$password,$gmail){
            $sql ="INSERT INTO `login`( `name`, `password`, `email`) VALUES ('$name','$password','$gmail') ";
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                echo "1";
                
            }
            else {
                echo "0";
            }
        }
     

 
}







?>


