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
      <link rel="stylesheet" href="./../../Assets/listwork.css">

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
            <div class="logout">
                    <a href="./../../Controllers/logout.php" >Đăng xuất</a>
            </div>
           
        </div>
    </div>
<?php  $id_G = $_GET['id']?>
    <div id="main">
        <div class="nav">
            <div id="left">
                <div><a <?php echo "href='./Room.php?id=$id_G'" ?>>Hành Động</a></div>
                <div class="active"><a <?php echo "href='./ListWork.php?id=$id_G'" ?>>Bài Tập Trên Lớp</a></div>



            </div>
        </div>
        <div class="box1" 
>
            <div id="left">



            </div>
        </div>
        <div id="right-work">
            <div class="chat">
            <div class="mess">

  <?php require_once '../../Modals/assignment_modal.php'?>
                <?php
                if(isset($_GET['id']))
{
        $id=$_GET['id'];
   }
           $a=Assignment::getIDassignment($_GET['id']);
           foreach ($a as $s) {
     
        ?>
                    <div onclick="changeTab(<?= $s->id_assign ?>)" class="container tab">
                        <span><?= $s->title?></span>
                        <span><?= $s->content?></span>
                        <span><?= date("d-m-Y", strtotime($s->time_deadline))?></span>
                        <span><a href="<?= $s->file?>" download>download</a></span>
                    </div>



     <?php 


       }


       ?>
                       </div>

            </div>

        </div>
    </div>
    <!-- The Modal -->

    </div>
</body>
<script>
    function changeTab($id) {
        window.location.href = 'DetailWork.php?id='+$id+'&d=<?= $s->id_group ?>';

    }
</script>

</html>