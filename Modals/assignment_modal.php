<?php

	class Assignment{
    public $id_assign;
    public $id_group ;
    public $title;
    public $content;
    public $time_deadline;
    public $file;


  
  public function __construct($id_assign,$id_group,$title,$content,$time_deadline,$file)
  {
    $this->id_assign = $id_assign;
    $this->id_group = $id_group;
    $this->title = $title;
    $this->content = $content;
    $this->time_deadline = $time_deadline;
    $this->file = $file;
  }
  
		

	
		public  function getAllassignment(){
            $sql ="SELECT * FROM `assignment` ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
         
             
            if ( mysqli_num_rows($stms) == 0) {
                return null;
            }
            else{
                $acount = array();
                while($row = mysqli_fetch_assoc($stms)){
                    array_push($acount, new Assignment( $row['id_assign'],$row['id_group']
                                                     ,$row['title']
                                                     ,$row['content']
                                                     ,$row['time_deadline']
                                                     ,$row['file'] ));
                                                          
                    }
                    
                return $acount;
                
            }

        }
        public  function getIDassignment($id){
      $conn=DB::GetConnection();
    $stm=mysqli_query($conn,"SELECT * FROM `assignment` WHERE id_group=$id");
    $getId=array();
    if( $stm ){
    while($row = mysqli_fetch_assoc($stm)){
                        array_push($getId, new Assignment( $row['id_assign'],$row['id_group']
                                                     ,$row['title']
                                                     ,$row['content']
                                                     ,$row['time_deadline']
                                                     ,$row['file']  ));
                                                              
                        }
                        
                    return $getId;
    }
else{
    echo "sdfds";
}
                

        }


    public  function insertAssignment($id_group,$title,$content,$time_deadline,$file){
             $sql ="INSERT INTO `assignment`( `id_group`, `title`, `content`, `time_deadline`, `file`) VALUES ('$id_group','$title','$content','$time_deadline','$file') ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                echo "thanh công ";
                
            }
            else {
                echo "thất bại";
            }

        }
        public  function updateAssignment($id_assign,$title,$content,$time_deadline,$file){
             $sql ="UPDATE `assignment` SET `title`='$title',`content`='$content',`time_deadline`='$time_deadline',`file`='$file' WHERE id_assign=$id_assign ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                echo "thanh công ";
                
            }
            else {
                echo "thất bại";
            }

        }
        public  function delete($id_assign){
            $sql ="DELETE FROM `assignment` WHERE id_assign=$id_assign ";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                echo "thanh công ";
                
            }
            else {
                echo "thất bại";
            }
        }
     

 
}







?>
