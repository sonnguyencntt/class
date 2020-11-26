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
    <link rel="stylesheet" href="./../../Assets/detail_ad.css">
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
                <div><a href="Room.php">Hành Động</a></div>
                <div><a href="ListWork.php">Bài Tập Trên Lớp</a></div>



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
                   <h5>Tiêu đề :</h5>
                    <div class="container">
                        <p>Hello. How are you today?</p>
                    </div>
                    <h5>Nội dung :</h5>
                    <div class="container">
                        <p>Hello. How are you today?</p>
                    </div>
                    <h5>Fie đính kèm :</h5>
                    <div class="container">
                        <p>Hello. How are you today?</p>
                    </div>

                   


                </div>
               
            </div>
            <div class="create-work">
                <button onclick="edit_Exc()" class= "btn btn-success">Chỉnh sửa</button>
                <button onclick="infoAlert()" style="margin-top: 20px;" class= "btn btn-danger">Xóa</button>

            </div>

        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Chỉnh sửa</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                       <input type="text" class="form-control">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Lưu</button>
                    </div>

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

    function edit_Exc() {
        $("#myModal").modal('show')
    }
</script>
</html>