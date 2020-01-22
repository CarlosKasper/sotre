<?php
	session_start();
	
	//$login = $_POST['login'];
	//$senha = $_POST['password'];

	/*$urlUsuario = 'http://localhost:3000/v1/usuario/lista';

	$retorno = file_get_contents($urlUsuario);

	$obj = json_decode($retorno);
	 
	$lista = $obj->results;

	foreach ( $lista as $e )
    {
	    if($login == $e->Login and $senha == $e->Senha){
	    	header('location:index.php');
	    	break;


	    } 
	    elseif($login != $e->Login or $senha != $e->Senha){
	    	echo 'sai';
	    	break;
	    }
    }

   */ 
    $client = new \.\Client();


	// Create a POST request
	$response = $client->request(
	    'POST',
	    'http://localhost:3000/v1/usuario/lista',
	    [
	        'form_params' => [
	            'login' => 'alex',
	            'senha' => '123'
	        ]
	    ]
	);

	// Parse the response object, e.g. read the headers, body, etc.
	$headers = $response->getHeaders();
	$body = $response->getBody();

	// Output headers and body for debugging purposes
	var_dump($headers, $body);

	   
?>