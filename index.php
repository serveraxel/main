<!DOCTYPE html>
<html onload="loader()">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    .bg {
      background: #fff;
    }
    .loader {
      margin-top: 70%;
      border: 7px solid #0068ff;
      border-top: 7px solid #ffffff;
      border-radius: 100%;
      width: 25px;
      height: 25px;
      animation: spin 0.8s linear infinite;
      display: none;
   }

   @keyframes spin {
     100% {
     transform: rotate(360)deg;
    }
  }

  .input {
    margin-top: 70%;
    border: 4px solid #0072ff;
    border-radius: 15px;
    width: 250px;
    height: 40px;
    font-size: 17px;
    font-weight: bold;
  }

  .button {
    margin-top: 30px;
    border: 4px solid #0072ff;
    border-radius: 15px;
    background: #ffffff;
    color: #556367;
    font-size: 17px;
    font-weight: bold;
    width: 80px;
    height: 45px;
  }
  </style>
  <script>
    function loader() {
      setTimeout(()=> {
       document.getElementById("bg").style.background = "#bed6ff";
       document.getElementById("loader").style.display = "block"
      }, 2000);
    }
  </script>
  <title>website.io</title>
</head>
<body id="bg" class="bg">
  <center>
    <div id="loader" class="loader"></div>
    <form method="post">
      <input type="text" name="textdata" placeholder="write something.." id="input" class="input"></br>
      <input type="submit" name="submit" class="button">
    </form>
  </center>
</body>
</html>
<?php
if(isset($_POST['textdata']))
{
  $data=$_POST['textdata'];
  $fp = fopen('data.db', 'a');
  fwrite($fp, "{$data}\n");
  fclose($fp);
}
?>