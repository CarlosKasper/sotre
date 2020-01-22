<?php
session_name(md5("http://localhost"));
session_start();
 
 ?>
<!DOCTYPE html>
<head>
  <title>Cadastro</title>
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
    <form class="box-container" method="post" action="confirma_cadastro.php">
      <div class="form-group">
       <img  src="./static/verde.png" alt=""   class="logo-login"> 
       <label for="Login">Login:</label>
       <input type="text" class="form-control" id="login" name="login" placeholder="Enter login">
     </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Senha:</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Digite novamente a senha:</label>
      <input type="password" class="form-control" id="passwordrepeat" name="passwordrepeat" placeholder="Digite a senha novamente">
    </div>
    <!--<div class="form-group">
      <label>Escolhe um tipo de conta :</label>
      <select class="form-control" >
        <option value="1">Doador</option>
        <option value="2">Instituição</option>
      </select>
    </div>!-->
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Lembrar senha</label>
    </div>
    <button type="submit" class="btn  btn-block btn-cor">Cadastrar</button><br>
    <p align="center"><a  href="login.php"> Já possui conta?</a></p>
  </form>
</div>
</body>
</html>