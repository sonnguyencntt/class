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
      <link rel="stylesheet" href="./../../Assets/listwork_ad.css">
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
                    <a href="./../../Controllers/logout.php" >Đăng xuất</a>
            </div>
        </div>
    </div>

    <div id="main">
        <div class="nav">
            <div id="left">
                <div><a  <?php $id_G = $_GET['id_group']; echo "href='Room.php?id=$id_G'" ?>>Hành Động</a></div>
                <div class="active"><a href="">Bài Tập Trên Lớp</a></div>


            </div>
        </div>
        <div class="box1"
">
            <div id="left">



            </div>
        </div>
        <div id="right-work">
            <div class="chat">
            <div class="mess">

  <?php
  include("./../../config.php");

   require_once '../../Modals/assignment_modal.php';
  ?>
                <?php
                if(isset($_GET['id_group']))
{
        $id=$_GET['id_group'];
   }
           $a=Assignment::getIDassignment($_GET['id_group']);
           foreach ($a as $s) {
     
        ?>
                    <div onclick="changeTab(<?= $s->id_assign ?>)" class="container tab" 
   >
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
            <div class="create-work">
                <button onclick="showmodal()" class= "btn btn-success">Tạo Bài Tập</button>
            </div>
        </div>
    </div>
    <!-- The Modal -->

    </div>
    <div class="modal" id="Modal-create">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tạo bài tập</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
<?php $id_group = $_GET['id_group']?>
                    <!-- Modal body -->
                    <form action="insert_file.php" method="post" enctype="multipart/form-data">

                    <div class="modal-body">
                        <input style="margin-top: 20px;" type="text" class="form-control" name="name" placeholder="Tên">
                        <input style="margin-top: 20px;" type="text" class="form-control" name="title" placeholder="Chủ đề">

                        <input style="margin-top: 20px;" type="text" class="form-control" name = "content" placeholder="Nội dung">
                        <input style="margin-top: 20px;" type="date" class="form-control" name = "time" placeholder="Thời hạn" required >
                        <input type="hidden" name="id_group" value ="<?php echo "$id_group" ?>">
                        <br>
                        <label for="fileUpload">UpLoad File:</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
              </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" >Tạo</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
</body>
<script>
   
    function insert(){
        var name = $("[name = name]").val();
        var content = $("[name = content]").val();
        var time = $("[name = time]").val();
        var file = $("[name = file]").val();

    }
    function changeTab($id) {
        window.location.href = 'Archive.php?id='+$id+'&d=<?= $s->id_group ?>';
    }
</script>
<script>
     function showmodal(){
        $("#Modal-create").modal('show')
    }
</script>
</html>