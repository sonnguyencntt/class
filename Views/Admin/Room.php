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
   
     <link rel="stylesheet" href="./../../Assets/room_ad.css">
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
                <div class="nav-action"><a href="">Hành Động</a></div>
                <div ><a <?php echo 'href="ListWork.php?id_group='.$_GET['id'].'"'?>>Bài Tập Trên Lớp</a></div>


            </div>
        </div>
        <div class="box1"
">
            <div id="left">


            </div>
        </div>
        <div id="right">
            <div class="chat">
            <?php
                require_once './../../config.php';

                require_once "./../../Modals/comment.php";

                require_once "./../../Modals/group_modal.php";

                // $group = new Group(null,null,null,null,null);
                
                $data = Group::getID($_GET['id']);
               
                foreach ($data as $value) {
                    echo '
                    <div class="title-post" >
                    <h3>'.$value->room.'</h3>
                    <h5>'.$value->subject.'</h5>
                    <h5>'.$value->code_group.'</h5>
                </div>

                   
                ';
                }
               
                ?>
              
                <div class="mess">

                <?php

                // $group = new Group(null,null,null,null,null);
                
                $data = Comment::getIdComment($_GET['id']);
               
                foreach ($data as $value) {
                    echo '
                    <div class="container">
                    <img src="https://st.quantrimang.com/photos/image/072015/22/avatar.jpg" alt="Avatar">
                    <p>'.$value->id_login.'</p>
                    <p style="    padding-left: 50px;
padding-top: 10px;" >'.$value->comment.'</p>

                </div>
                ';
                }
               
                ?>

                   

                   

                <?php $id_log = $_SESSION['id']?>
                </div>
                <div class="chat-message clearfix">
                    <textarea name="comment" id="message-to-send" placeholder="Type your message" rows="3"></textarea>

                <input  type="hidden" name="id_login" value=<?php echo "$id_log" ?> >
                    <button  <?php echo 'onclick="insert_mess('.$_GET['id'].')"'?>  class="btn btn-primary">Send</button>

                </div>
            </div>

        </div>
    </div>
    <!-- The Modal -->

    </div>
</body>
<script>
     function insert_mess(id){
        var id_login = $('[name = id_login]').val();
      var comment = $('[name = comment]').val();
                $.ajax({
                    type:'POST',
      url:'./../../Controllers/api/insert_mess.php', 
      dataType : 'json',
      data : {
          id:id,
          id_login:id_login,
          comment : comment
      },   
                    success: function (data) {
                        if(data=='1'){
                            
                location.reload();
            }else
            {
                alert('Nhập dữ liệu k đúng');
            }
                    },
                   
                });
       
      };

    

</script>
</html>