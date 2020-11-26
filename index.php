
<?php
session_start();

require_once("Controllers/Session_Controller.php");
if(Session::checkAuth() == "0")
{
    header("Location:Views/login.php");
}
else
{
    
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/lib/font.css">
	<script src="Assets/lib/jquery.js"></script>

	<link rel="stylesheet" href="Assets/lib/bootstrap.css">
	<script src="Assets/lib/sweet.js"></script>
	<script src="Assets/lib/bootstrap.js"></script>
        <link rel="stylesheet" href="Assets/index.css">
    <title>Document</title>
</head>


<body>
    <div class="header">
        <div class="container">
            <div class="feature">
                <div class="fea-right">
                    <a class="fea-a" href="">Lớp Học</a>
                </div>
                <div class="fea-left">
                    <a class="fea-b" href="Views/ListSchedule.php">Giảng Dạy</a>
                </div>
            </div>
            <div class="logout" >
                    <a href="Controllers/logout.php" >Đăng xuất</a>
            </div>
            
        </div>
    </div>

    <div class="body">

<div class="container-fluid">

    <div class="row">
        <?php require_once 'Modals/group_modal.php';
        require_once './config.php';?>
            <?php 
$a=Group::getAll();
if(count($a) > 0)

{
   foreach ($a as $s) {

?>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
             

            <div class="card">

                <div class="card-head">
                    <img class="title-img" src="https://images.unsplash.com/photo-1471107340929-a87cd0f5b5f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                </div>

                <div class="card-body">
                    <h3><?= $s->subject?></h3>
                    <br>
                    <h5><?= $s->room?></h5>
                            </div>
                <div class="card-footer">
                    <div>
                        
                        <!-- <a onclick="editClassRoom()" href="Views/User/Room.php?id=<?= $s->id_group?>" class="btn btn-primary">Tham gia</a> -->
                        <a onclick="checkIdRoom(<?= $s->id_group?>)"   class="btn btn-primary">Bắt đầu </a>

                    </div>


                </div>

            </div>

  
        </div>
                                                       <?php 

   }
}
else
{
    echo "<h2>Không có lớp</h2>";
}
?>

    </div>

</div>


</div>



    </div>
    <div id="footer">
           
        </div>
    <div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Nhập mã lớp</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <input name="qr" type="text" class="form-control">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" onclick = "checkQR()" class="btn btn-primary" data-dismiss="modal">Gửi</button>
                    </div>
                    <input name="id_hidden" type="hidden">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function infoAlert() {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Shortlisted!',
                    text: 'Candidates are successfully shortlisted!',
                    icon: 'success'
                }).then(function() {
                    form.submit(); // <--- submit form programmatically
                });
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        })
    }

    function editClassRoom() {
        $("#myModal").modal('show')
    }
    function show_Modal_Create(){

    }
    function checkIdRoom($id){
        $.ajax({
        type:'POST',

        url:'./Controllers/checklogin_user.php',  
        data : {
            id_group:$id
        },    
        dataType:'text'
        }).done(function(ketqua){
            if(ketqua=='1'){
                window.location.replace("./Views/User/Room.php?id=" + $id);

            }else
            {
                $("[name = id_hidden]").val($id);
                $("#myModal").modal('show')
            }
        })};

        function checkQR(){
            var qr = $("[name = qr]").val();
            var id_group = $("[name = id_hidden]").val();
            $.ajax({
        type:'POST',

        url:'./Controllers/checkqr_user.php',  
        data : {
            id_group:id_group,
            qr:qr
        },    
        dataType:'text'
        }).done(function(ketqua){
            if(ketqua=='1'){
                window.location.replace("./Views/User/Room.php?id=" + id_group);

            }else
            {
               
            }
        })



        }
</script>

</html>
