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
            <div class="logout" style="display: flex;">
                    <a href="./../../Controllers/logout.php" style="     margin: auto;
    color: #2e4e6a;
    font-size: 20px;
    padding-right: 20px;">Đăng xuất</a>
            </div>
        </div>
    </div>

    <div id="main">
        <div class="nav">
            <div id="left">
                <div><a  <?php $id_G = $_GET['id_group']; echo "href='Room.php?id=$id_G'" ?>>Hành Động</a></div>
                <div  style="    border-right: 1px solid #b0c1ce;
    border-width: 5px;"><a href="">Bài Tập Trên Lớp</a></div>


            </div>
        </div>
        <div style="background-color: #9D6F68;
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
                    <div onclick="changeTab('3')" class="container" style="display: flex;
    justify-content: space-between;">
                        <span><?= $s->title?></span>
                        <span><?= $s->content?></span>
                        <span><?= $s->time_deadline?></span>
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
                        <input style="margin-top: 20px;" type="text" class="form-control" name = "time" placeholder="Thời hạn" >
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
        window.location.href = 'Archive.php?id=<?= $s->id_assign ?>&d=<?= $s->id_group ?>';
    }
</script>
<script>
     function showmodal(){
        $("#Modal-create").modal('show')
    }
</script>
</html>