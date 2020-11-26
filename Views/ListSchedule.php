<?php
session_start();

require_once("./../Controllers/Session_Controller.php");
if(Session::checkAuth() == "0")
{
    header("Location:login.php");
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
    <link rel="stylesheet" href="./../../Assets/schedule.css">
    <title>Document</title>
</head>


<body>
    <div class="header">
        <div class="container">
            <div class="feature">
                <div class="fea-right">
                    <a class="fea-a" href="./../index.php">Lớp Học</a>
                </div>
                <div class="fea-left">
                    <a class="fea-b" href="">Giảng Dạy</a>
                </div>
            </div>
           
            <div class="icon-plus">
                <i onclick="show_Modal_Create()" class="fa fa-plus" title="Tạo lớp học"></i>
            </div>
            <div class="logout" style="display: flex;">
                    <a href="./../Controllers/logout.php" style="    margin: auto;
    color: beige;
    font-size: 20px;">Đăng xuất</a>
            </div>
        </div>
    </div>
    <div class="body">

        <div class="container-fluid">

            <div class="row">

                <?php
                include("./../config.php");
                require_once "./../Modals/group_modal.php";
                // $group = new Group(null,null,null,null,null);
                $data = Group::getForUser($_SESSION['id']);
               
                foreach ($data as $value) {
                    echo '
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="card-head">
                            <img class="title-img" src="https://images.unsplash.com/photo-1471107340929-a87cd0f5b5f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        </div>
                        <div class="card-body">
                            <h3>'.$value->room.'</h3>
                            <br>
                            <h5>'.$value->subject.'</h5>
                                    </div>
                        <div class="card-footer">
                            <div>
                            <a onclick="delete_item('.$value->id_group.')" class="btn btn-danger">Xóa</a>

                                <a onclick="edit_item('.$value->id_group.')" class="btn btn-success">Sửa</a>
                                <a onclick="checkIdRoom('.$value->id_group.')"   class="btn btn-primary">Bắt đầu </a>

                            </div>


                        </div>
                    </div>
                </div>
                ';
                }
               
                ?>
              
               

            </div>

        </div>



    </div>
    <div id="footer">
           
        </div>
    <div>

        <!-- The Modal -->
        <div class="modal" id="Modal-check">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Nhập mã lớp</h4>
                        <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <input type="text" class="form-control">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Gửi</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal" id="Modal-create">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tạo lớp</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <input name = "id"type="text" class="form-control" placeholder="auto" disabled>
                        <input name = "name"style="margin-top: 20px;" type="text" class="form-control" placeholder="Nhập tên lớp">
                        <input name = "subject"style="margin-top: 20px;" type="text" class="form-control" placeholder="Nhập nội dung">
                        <input name = "code"style="margin-top: 20px;" type="text" class="form-control" placeholder="Nhập mã lớp">


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button <?php echo 'onclick="insert('.$_SESSION['id'].')"'?> type="button" class="btn btn-danger" data-dismiss="modal">Tạo</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal" id="Modal-edit">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Chỉnh sửa</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <input name = "id-e"type="text" class="form-control" placeholder="Nhập mã lớp" placeholder="auto" disabled>
                        <input name = "name-e"style="margin-top: 20px;" type="text" class="form-control" placeholder="Nhập tên lớp">
                        <input name = "subject-e"style="margin-top: 20px;" type="text" class="form-control" placeholder="Nhập nội dung">
                        <input name = "code-e"style="margin-top: 20px;" type="text" class="form-control" placeholder="Nhập mã lớp">


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button onclick="update()" type="button" class="btn btn-danger" data-dismiss="modal">Lưu</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- <div class="modal" id="Modal-edit">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Chỉnh sửa</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <div class="modal-body">
                        <input type="text" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button onclick="update()" type="button" class="btn btn-danger" data-dismiss="modal">Lưu</button>
                    </div>

                </div>
            </div>
        </div> -->
    </div>
    <input name="edit-group" type="hidden">
</body>
<script>






function edit_item(id){
      
      $.ajax({
      type:'POST',
      url:'./../Controllers/api/selectid.php', 
      data : {
          id:id,
          
      },   
      dataType:'text'
      }).done(function(data){
          var ketqua = JSON.parse(data)
          
          
              $("[name = name-e]").val(ketqua[0].room);
    $("[name = code-e]").val(ketqua[0].code_group);
      $("[name = subject-e]").val(ketqua[0].subject);
      $("[name = edit-group]").val(ketqua[0].id_group);

      $("#Modal-edit").modal('show')


        
      })};


      function update(){
        var id = $("[name = edit-group]").val();
        var name = $("[name = name-e]").val();
        var code = $("[name = code-e]").val();
        var subject = $("[name = subject-e]").val();
        $.ajax({
        type:'POST',
        url:'./../Controllers/api/update_group.php', 
        data : {
            id:id,
            name:name,
            code:code,
            subject:subject
        },  
          
        dataType:'json'
        }).done(function(ketqua){
            if(ketqua=='1'){
                location.reload();
            }else
            {
                alert('Nhập dữ liệu k đúng');
            }
        })};













    function infoAlert() {
        swal({
            title: "Bạn có muốn xóa?",
            text: "Dữ liệu xóa không thể khôi phục",
            icon: "warning",
            buttons: [
                'Yes',
                'No'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Xóa thành công',
                    icon: 'success'
                }).then(function() {
                    form.submit(); // <--- submit form programmatically
                });
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        })
    }

  
    function show_Modal_Create(){
        $("#Modal-create").modal('show')

    }
    // function checkIdRoom()
    // {
    //     $("#Modal-check").modal('show')
    // }

    function checkIdRoom($id){
		
        $.ajax({
        type:'POST',
        url:'./../Controllers/checklogin_group.php',        
        dataType:'json'
        }).done(function(ketqua){
            if(ketqua=='1'){
                window.location.replace("./Admin/Room.php?id=" + $id);

            }else
            {
                $("#Modal-check").modal('show')
            }
        })};

        function insert(id){
        var id = id;
        var name = $("[name = name]").val();
        var code = $("[name = code]").val();
        var subject = $("[name = subject]").val();
        $.ajax({
        type:'POST',
        url:'./../Controllers/api/api.php', 
        data : {
            id:id,
            name:name,
            code:code,
            subject:subject
        },  
          
        dataType:'text'
        }).done(function(ketqua){
            if(ketqua=='1'){
                location.reload();
            }else
            {
                alert('Nhập dữ liệu k đúng');
            }
        })};

    
        function delete_item(id){
        

            swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "warning",
            title: "Bạn có muốn xóa?",
            text: "Dữ liệu xóa không thể khôi phục",
            icon: "warning",
            buttons: [
                'No',
                'Yes'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Xóa thành công',
                    icon: 'success'
                }).then(function() {
                    $.ajax({
        type:'POST',
        url:'./../Controllers/api/delete.php', 
        data : {
            id:id,
            
        },    
        dataType:'json'
        }).done(function(ketqua){
            if(ketqua=='1'){
                location.reload();
            }else
            {
                alert('Không thành công');
            }
        })
                });
            } else {
                swal("Cancelled", "", "error");
            }
        })


        };

        

</script>

<script>
   
	
</script>

</html>