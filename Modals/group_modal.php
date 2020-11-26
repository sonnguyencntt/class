<?php


	class Group{
    public $id_group;
    public $id_login ;
    public $subject;
    public $room;
    public $code_group;



  
  public function __construct($id_group,$id_login,$subject,$room,$code_group)
  {
    $this->id_group = $id_group;
    $this->id_login = $id_login;
    $this->subject = $subject;
    $this->room = $room;
    $this->code_group = $code_group;
    
  }
  
		

	
		public  function getAll(){
            $sql ="SELECT * FROM `group` ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
         
             
            if ( mysqli_num_rows($stms) == 0) {
                return null;
            }
            else{
                $acount = array();
                while($row = mysqli_fetch_assoc($stms)){
                    array_push($acount, new Group(     $row['id_group']
                                                     ,$row['id_login']
                                                     ,$row['subject']
                                                     ,$row['room'],$row['code_group'] ));
                                                          
                    }
                    
                return $acount;
                
            }

        }
        public  function CheckQR($codegroup,$id_group,$id_login){
            $sql ="SELECT * from `group` where code_group='$codegroup' and id_group = '$id_group' ";
            $conn =DB::GetConnection();
            $stm = mysqli_query($conn,$sql) ;
                
            if (mysqli_num_rows($stm) == 0) {
                return 0;
            }
            else{
                
                $sql ="INSERT INTO `list`( `id_user`, `id_group`) VALUES ('$id_login','$id_group') ";
          
                $stms = mysqli_query($conn,$sql);
                if ($stms) {
                    
                }
                else {
                }
                return 1;
                
            }

        }
        public  function Checkexsit($idlogin,$id_group){
            $sql ="SELECT * FROM `list` where id_user ='$idlogin' and id_group= $id_group ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
               
             
            if ( mysqli_num_rows($stms) == 0) {
                return 0;
            }
            else{
                
                
                return 1;
                
            }

        }
        public  function getForUser($id){
            $conn=DB::GetConnection();
          $stm=mysqli_query($conn,"select * from `group` WHERE id_login =$id");
          $getId=array();
          if( $stm ){
          while($row = mysqli_fetch_assoc($stm)){
                              array_push($getId, new Group($row['id_group']
                                                               ,$row['id_login']
                                                               ,$row['subject']
                                                               ,$row['room'],$row['code_group']  ));
                                                                    
                              }
                              
                          return $getId;
          }
      else{
         
      }
                      
      
              }

        public  function getID($id){
      $conn=DB::GetConnection();
    $stm=mysqli_query($conn,"SELECT * FROM `group` WHERE id_group=$id");
    $getId=array();
    if( $stm ){
    while($row = mysqli_fetch_assoc($stm)){
                        array_push($getId, new Group($row['id_group']
                                                         ,$row['id_login']
                                                         ,$row['subject']
                                                         ,$row['room'],$row['code_group']  ));
                                                              
                        }
                        
                    return $getId;
    }
else{
    echo "thất bại";
}
                

        }


    public  function insertGroup($id_login,$subject,$room,$code_group){
             $sql ="INSERT INTO `group`( `id_login`, `subject`, `room`, `code_group`) VALUES ('$id_login','$subject','$room','$code_group') ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                echo "1";
                
            }
            else {
                echo "0";
            }

        }
        public  function updateGroup($id_group,$subject,$room,$code_group){
             $sql ="UPDATE `group` SET `subject`='$subject',`room`='$room',`code_group`='$code_group' WHERE id_group=$id_group ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                echo "1";
                
            }
            else {
                echo "0";
            }

        }
        public  function delete($id_group){
            $sql ="DELETE FROM `group` WHERE id_group=$id_group ";
          
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
