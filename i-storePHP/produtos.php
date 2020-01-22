<?php
  session_start();
?>

<!DOCTYPE html>
<head>
  <title>Produtos</title>
  <meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="static/css/style.css">

 	<script type="text/javascript" src="static/js/bootstrap.min.js"></script> 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="static/css/home.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	

<body class="bg-login">

 
  <?php include('header.php') ?>
  	 <div class="container d-flex align-items-center justify-content-center h-100">
		    <form class="cadastro box-container" method="post" action="">
		 		<div class="row">
				    <div class="col">
				     <div class="form-group">
				          <label for="login">Código:</label>
				          <input type="text" class="form-control" id="cod" name="cod" placeholder="Digite o código do produto">
				        </div>
				        <div class="form-group">
				          <label for="text">Descrição:</label>
				          <input type="text" class="form-control" id="desc" name="desc" placeholder="Digite uma descrição">
				        </div>
				        <div class="form-group">
				          <label for="text">Fornecedor:
				          	 <button type="button" class=" fa fa-search btn btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"></button>

								  <div class="modal fade" id="myModal" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								          	<button type="button" class="close" data-dismiss="modal">&times;</button>
								        </div>
								        <div class="modal-body">
								          <table border="3">
								          	<tr>
								          		<td><label>Quantidade:</label></td>
								          		<td><label>Valor:</label></td>
								          		<td><label>Gramas:</label></td>
								          	</tr>
								          	<tr>
								          		<td>15</td>
								          		<td>9,25</td>
								          		<td>150g</td>
								          	</tr>
								          </table>
								        </div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								        </div>
								      </div>
								    </div>
								  </div>
								</label>
				          </label>
				          <input type="text" class="form-control" id="fornecedor" name="fornecedor" placeholder="Escolha o fornecedor clicando na lupa" disabled="">
				        </div>
				    </div>

				    <div class="col">
				      <div class="form-group">
				          <label for="text">ICMS Compra:</label>
				          <input type="text" class="form-control" id="icms" name="icms" placeholder="Digite a porcentagem do ICMS">
				        </div>
				        <div class="form-group">
				          <label for="text">IPI Compra:</label>
				          <input type="text" class="form-control" id="ipi" name="ipi" placeholder="Digite a porcentagem da IPI">
				        </div>
				        <div class="form-group">
				          <label for="text">Grade:
				            <button type="button" class=" fa fa-search btn btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"></button>

								  <div class="modal fade" id="myModal" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								          	<button type="button" class="close" data-dismiss="modal">&times;</button>
								        </div>
								        <div class="modal-body">
								          <table border="3">
								          	<tr>
								          		<td><label>Quantidade:</label></td>
								          		<td><label>Valor:</label></td>
								          		<td><label>Gramas:</label></td>
								          	</tr>
								          	<tr>
								          		<td>15</td>
								          		<td>9,25</td>
								          		<td>150g</td>
								          	</tr>
								          </table>
								        </div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								        </div>
								      </div>
								    </div>
								  </div>
								</label>
				          <input type="text" class="form-control mr-sm-2" id="grade" name="grade" placeholder="Escolha a grade clicando na lupa" disabled="">
				        </div>
				     </div>
				        <button type="submit" id="clicar" class="btn btn-block btn-cor form-group">Cadastrar Produto</button><br>
				</div>
 	  		</form>
  		
	</div>
</body>
</html>
