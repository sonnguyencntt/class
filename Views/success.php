<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Roboto">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

    <title>Document</title>
</head>

<style>
    /* 
Practicing HTML CSS, layout based on Daily Success UI Layout, link to original codepen here: https://codepen.io/iheartkode/full/yJBBZZ/ 
*/

body {
  text-align: center;
  font-family: Oswald;
  margin-top: 50px;
}

.main-container {
  width: 500px;
  height: 500px;
  margin: 0 auto;
  border: 1px solid lightgrey;
  border-radius: 5px;
  background-color: #f0f0f0;
}

.top-container {
  height: 280px;
  background-color: #29CDB5;
}

i.bigger-size {
  font-size: 280px;
  color: white;
}

.bottom-container {
  margin-top: 30px;
}

button {
  font-family: Roboto;
  background-color: #f0f0f0;
  border-radius: 15px;
  padding: 15px;
  width: 150px;
  border: 3px solid #29CDB5;
  color: #555;
}

button:hover {
  background-color: #29CDB5;
  color: white;
  cursor: pointer;
}

h1 {
  margin-bottom: -15px;
  color: #555;
}

p {
  font-size: 20px;
  color: #555;
}
</style>
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