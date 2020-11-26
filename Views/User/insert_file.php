<?php
	require_once('../../config.php');

	$tenbaihat = $_POST["content"];
	
	$assign= $_POST["assign"];
	$group= $_POST["group"];
	$duongdan = "../../homework/" . $_FILES['fileUpload']['name'];
	move_uploaded_file($_FILES['fileUpload']['tmp_name'],$duongdan);

	 $sql ="INSERT INTO `detail`(  `id_group`, `id_login`, `id_assignment`, `content`, `file`) VALUES ('$group',2,'$assign','$tenbaihat','$duongdan')";
          
            $conn =DB::GetConnection();
            $stms = mysqli_query($conn,$sql);
            if ($stms) {
                echo "thanh công ";
                
            }
            else {
                echo "thất bại";
            }
	
	
?>
