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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            <div class="logout" style="display: flex;">
                    <a href="./../../Controllers/logout.php" style="    margin: auto;
    color: #2e4e6a;
    font-size: 20px;
    padding-right: 20px;">Đăng xuất</a>
            </div>
           
        </div>
    </div>

    <div id="main">
        <div class="nav">
            <div id="left">
               



            </div>
        </div>
        <div style="background-color: #9D6F68;
">
            <div id="left">



            </div>
        </div>
        <div id="right">
            <div class="chat">
                
                <div class="mess">
                   <!-- head -->
                    <div class="container" style="display: flex;
    justify-content: space-around;">
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