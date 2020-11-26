<?php
require_once '../../config.php';
	class Comment{
    public $id_cmt ;
    public $id_login ;
    public $id_group;
    public $id_assign;
    public $comment ;


  
  public function __construct($id_cmt,$id_login,$id_group,$id_assign,$comment)
  {
    $this->id_cmt = $id_cmt;
    $this->id_login = $id_login;
    $this->id_group = $id_group;
    $this->id_assign = $id_assign;
    $this->comment = $comment;
    
  }
  
		

	
		



        public  function insertComment($id_login,$id_group,$id_assign,$comment){
            $sql ="INSERT INTO `comment`( `id_login`, `id_group`, `id_assign`, `comment`) VALUES ('$id_login','$id_group','$id_assign','$comment')";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                echo "1";
                
            }
            else {
                echo "0";
            }
        }
         public  function getIdComment($id_group){
           $conn=DB::GetConnection();
    $stm=mysqli_query($conn,"SELECT * FROM `comment` WHERE  id_group=$id_group ");
    $getId=array();
    if( $stm ){
    while($row = mysqli_fetch_assoc($stm)){
                        array_push($getId, new Comment($row['id_cmt']
                                                         ,$row['id_login']
                                                         ,$row['id_group']
                                                         ,$row['id_assign'],$row['comment']  ));
                                                              
                        }
                        
                    return $getId;
    }
else{
    echo "thất bại";
}
                

        }
        }
     

 








?>
