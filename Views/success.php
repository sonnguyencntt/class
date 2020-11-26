<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Roboto">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
<link rel="stylesheet" href="./../Assets/success.css">
    <title>Document</title>
</head>




<body>
    <!-- 
Practicing HTML CSS, layout based on Daily Success UI Layout, link to original codepen here: https://codepen.io/iheartkode/full/yJBBZZ/ -->


<div class="main-container">
  <div class="top-container">
    <i class="fa fa-check-circle-o bigger-size" aria-hidden="true"></i>
  </div>

  <div class="bottom-container">
    <h1>Upload thành công</h1>
    <h4>Quay về trang chủ</h4>

    <button onclick="backhome()">Trở về</button>
  </div>
</div>
</body>
<script>
    function backhome()
    {
        window.location.href = "./../index.php"   }



</script>
</html>