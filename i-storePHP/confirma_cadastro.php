<?php
session_start();
 
	if(isset($_POST['login']) and isset($_POST['password']) and isset($_POST['passwordrepeat'])){

		$login = $_POST['login'];
		$password = $_POST['password'];
		$passwordrepeat = $_POST['passwordrepeat'];
		
		$urlIncluiUsuario = 'http://localhost:3000/v1/usuario/inclui';

		//file_put_contents($urlIncluiUsuario,'Login', $password);

		//$retorno = file_get_contents($urlIncluiUsuario);

		//$obj = json_decode($retorno);
		 
		//$lista = $obj->results;

		

		mysqli_query($urlIncluiUsuario,"INSERT INTO usuario (login, senha) VALUES ( '$login','$password');");
		  
		if(!empty($login) and !empty($password) and !empty($passwordrepeat)){

			//$busca_login = mysqli_query($conexao,"SELECT * FROM users WHERE LCASE(login) = '$login'");

						//if(mysqli_num_rows($busca_login) == 0){

								if($password == $passwordrepeat){
		
									//if(strlen($password) >= 5 and strlen($password) <= 24){
											
										$password_crypt = hash("sha256", $password);
										$_SESSION['password_crypt'] = $password_crypt;

										//mysqli_query($conexao,"INSERT INTO users( Login , Senha) VALUES ('$login', '$password_crypt');");
									//}else{
									//	echo "A senha deve ter 5 a 24 caracteres";
									//}													
								}else{
									echo "Senhas não conferem";
								}
						//}else{
						//	echo "Login já cadastrado";
						//}
		}else{
			echo "Login inválido";
		}
	}else{
		echo "Erro";
	}
	?>