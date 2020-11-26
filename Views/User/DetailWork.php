
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            <div class="logout" style="display: flex;">
                    <a href="./../../Controllers/logout.php" style="    margin: auto;
    color: #2e4e6a;
    font-size: 20px;
    padding-right: 20px;">Đăng xuất</a>
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
        <div style="background-color: #9D6F68;
">
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