<?php

	class Detail{
    public $id_detail ;
    public $id_group ;
    public $id_login;
    
    public $id_assignment;
    public $file;
    public $content;
    public $name;
   


  
  public function __construct($id_detail,$id_group,$id_login,$id_assignment,$content,$file,$name)
  {
    $this->id_detail = $id_detail;
    $this->id_group = $id_group;
    $this->id_login = $id_login;
    $this->id_assignment = $id_assignment;
    $this->content = $content;
    $this->file = $file;
    $this->name = $name;
    
  }
  
		

	
		

        public  function getDetail($id_group,$id_assignment){
             $conn=DB::GetConnection();
    $stm=mysqli_query($conn,"SELECT * FROM login,detail WHERE login.id_login in (SELECT `id_login` FROM `detail` WHERE id_group=$id_group and id_assignment=$id_assignment) ");
    $getId=array();
    if( $stm ){
    while($row = mysqli_fetch_assoc($stm)){
                        array_push($getId, new Detail($row['id_detail']
                                                         ,$row['id_group']
                                                         ,$row['id_login']
                                                         ,$row['id_assignment'],$row['content'] 
                                                         ,$row['file']
                                                         ,$row['name']  ));
                                                              
                        }
                        
                    return $getId;
    }
else{
    echo "thất bại";
}
                

        }
            
        }
     

 








?>

