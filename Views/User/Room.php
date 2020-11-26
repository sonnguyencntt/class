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
    <link rel="stylesheet" href="./../../Assets/room.css">

    <title>Document</title>


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
                    <a href="./../../Controllers/logout.php" style="     margin: auto;
    color: #2e4e6a;
    font-size: 20px;
    padding-right: 20px;">Đăng xuất</a>
            </div>

        </div>
    </div>
    <?php require_once './../../Modals/group_modal.php' ?>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $a = Group::getID($id);
    foreach ($a as $s) {

    ?>
        <div id="main">
            <div class="nav">
                <div id="left">
                    <div style="    border-right: 1px solid #b0c1ce;
    border-width: 5px;"><a href="">Hành Động</a></div>
                    <div><a href="ListWork.php?id=<?= $s->id_group ?>">Bài Tập Trên Lớp</a></div>



                </div>
            </div>
            <div style="background-color: #9D6F68;
">
                <div id="left">



                </div>
            </div>



            <div id="right">
                <div class="chat">
                    <?php require_once '../../Modals/group_modal.php' ?>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    }
                    $a = Group::getID($id);
                    foreach ($a as $s) {

                    ?>
                        <div class="title-post" style="border: 1px solid;">
                            <h3><?= $s->subject ?></h3>
                            <h5><?= $s->room ?></h5>
                            <h5><?= $s->code_group ?></h5>
                        </div>
                    <?php


                    }

                    ?>
                    <div class="mess">
                        <?php require_once '../../Modals/comment.php' ?>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                        }
                        $a = Comment::getIdComment($id);
                        foreach ($a as $s) {

                        ?>
                            <div class="container">
                                <img src="https://st.quantrimang.com/photos/image/072015/22/avatar.jpg" alt="Avatar">
                                <p><?= $s->id_login ?></p>
                                <p><?= $s->comment ?></p>

                            </div>

                    <?php


                        }
                    }

                    ?>

                    </div>
                    <div class="chat-message clearfix">
                        <textarea name="comment" id="message-to-send" placeholder="Type your message" rows="3"></textarea>


                        <button <?php echo 'onclick="insert_mess(' . $_GET['id'] . ')"' ?> class="btn btn-primary">Send</button>

                    </div>
                </div>

            </div>
        </div>


        </div>
</body>
<script>
    function insert_mess(id) {
        var comment = $('[name = comment]').val();
        $.ajax({
            type: 'POST',
            url: './../../Controllers/api/insert_mess.php',
            dataType: 'json',
            data: {
                id: id,
                comment: comment
            },
            success: function(data) {
                if (data == '1') {

                    location.reload();
                } else {
                    alert('Nhập dữ liệu k đúng');
                }
            },

        });

    };
</script>

</html>