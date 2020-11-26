<?php
	require_once('../../config.php');
	$name = $_POST["name"];
	$title = $_POST["title"];
    $content= $_POST["content"];
    $id_group = $_POST["id_group"];
    $time = $_POST['time'];
    $duongdan = "./../../upload/" . $_FILES['fileUpload']['name'];
    echo $duongdan;
	move_uploaded_file($_FILES['fileUpload']['tmp_name'],$duongdan);

	 $sql ="INSERT INTO `assignment`(`id_assign`, `id_group`, `title`, `time_deadline`, `file`) VALUES (null,'$id_group','$title','$time','$duongdan')";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                header("Location: ./../success.php");
                
            }
            else {
                header("Location: ./../success.php");
            }
	
	
?>
