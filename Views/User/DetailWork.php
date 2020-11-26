
<?php
session_start();

require_once("./../../Controllers/Session_Controller.php");
include("./../../config.php");
include("./../../Modals/group_modal.php");
if(Session::checkAuth() == "0")
{
    header("Location: ./../login.php");
}
else
{
    $result = Group::Checkexsit($_SESSION['id'],$_GET['id']);
    if($result=="1")
    {

    }
    else
    {
        header("Location: ./../../index.php");

    }
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
     <link rel="stylesheet" href="./../../Assets/detailwork.css">

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
                <a  class="fea-b" href="./../ListSchedule.php">Giảng Dạy</a>
                </div>
            </div>
            <div class="logout" >
                    <a href="./../../Controllers/logout.php" >Đăng xuất</a>
            </div>
        </div>
    </div>
    <?php  $id_G = $_GET['id']?>

    <div id="main">
        <div class="nav">
            <div id="left">
                <div><a <?php echo "href='Room.php?id=$id_G'" ?>>Hành Động</a></div>
                <div><a <?php echo "href='ListWork.php?id=$id_G'" ?>>Bài Tập Trên Lớp</a></div>



            </div>
        </div>
        <div class="box1"
>
            <div id="left">



            </div>
        </div>
                     <?php
                if(isset($_GET['id']))
{       $assign=$_GET['id'];
        $group=$_GET['d'];
        
       
   }
         
     
        ?>
        <div id="right">
            <div class="chat">
        
                <div class="mess">
                  
                    <h5>Nội dung :</h5>
                    <div class="container">
                    <form action="insert_file.php" method="post" enctype="multipart/form-data">
                        <input id="content" name="content"></input>
                        <input type="hidden" id="assign" name="assign" value="<?= $assign ?>"></input>
                        <input type="hidden" id="group" name="group" value="<?= $group ?>"></input>
                    
                   

                   


               <div class="mb-3">
              <label for="fileUpload">Image</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
              </div>
            </div>
  <input type="submit">
</form>     </div>
               
                    <!-- <textarea name="message-to-send" id="message-to-send" placeholder="Type your message" rows="3"></textarea>


                    <button>Send</button> -->

                </div>
            </div>

        </div>
    </div>
    <!-- The Modal -->

    </div>
</body>

</html>