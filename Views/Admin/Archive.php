<?php
session_start();

require_once("./../../Controllers/Session_Controller.php");
if(Session::checkAuth() == "0")
{
    header("Location:./../login.php");
}
else
{
    
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../Assets/lib/font.css">
	<script src="./../../Assets/lib/jquery.js"></script>

	<link rel="stylesheet" href="./../../Assets/lib/bootstrap.css">
	<script src="./../../Assets/lib/sweet.js"></script>
    <script src="./../../Assets/lib/bootstrap.js"></script>    
  <link rel="stylesheet" href="./../../Assets/archive.css">
    <title>Document</title>
</head>


<body>
    <div class="header">
        <div class="containerr">
            <div class="feature">
                <div class="fea-right">
                    <a class="fea-a" href="./../../index.php">Lớp Học</a>
                </div>
                <div class="fea-left">
                    <a class="fea-b" href="./../ListSchedule.php">Giảng Dạy</a>
                </div>
            </div>
            <div class="logout" >
                    <a href="./../../Controllers/logout.php" \>Đăng xuất</a>
            </div>
           
        </div>
    </div>

    <div id="main">
        <div class="nav">
            <div id="left">
               



            </div>
        </div>
        <div class="box1"
">
            <div id="left">



            </div>
        </div>
        <div id="right">
            <div class="chat">
                
                <div class="mess">
                   <!-- head -->
                    <div class="container save" >
                        <span>Tên</span>
                        <span>Tiêu đê</span>
                        <span>File Nộp</span>
                    </div>
                    <!-- head -->
                        <?php require_once '../../Modals/detail_modal.php'?>
                <?php
                include '../../config.php';
    
           $a=Detail::getDetail($_GET['d'],$_GET['id']);
           foreach ($a as $s) {
     
        ?>
                            <div class="container item-work" >

                        <span><?= $s->name?></span>
                        <span><?= $s->content?></span>
                        
                        <a href="<?= $s->file?>" download>bài tập về nhà </a>
                        </div>

                         <?php 

       
       }


       ?>
                   

                   


                </div>
               
            </div>
           

        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script>
  
</script>
</html>