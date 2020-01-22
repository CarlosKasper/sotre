<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,900&display=swap" rel="stylesheet">
</head>
<link rel="stylesheet" type="text/css" href="./static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./static/css/style.css">
<body class="bg-login">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./static/js/bootstrap.min.js"></script> 
    <div class="container d-flex align-items-center justify-content-center h-100">
      <form class="box-container" method="post" action="confirma_login.php">
        <img  src="./static/verde.png" alt=""   class="logo-login"> 
        <div class="form-group">
          <label for="login">Login:</label>
          <input type="text" class="form-control" id="login" name="login" placeholder="Enter login">
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Lembrar senha</label>
        </div>
        <button type="submit" class="btn btn-block btn-cor">Login</button><br>
        <p align="center"><a href="cadastro.php">Não possui conta?</a></p>
      </form>
    </div>
</body>
</html>