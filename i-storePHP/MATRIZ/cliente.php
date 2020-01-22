<?php

	session_start();

	$urlUsuario = 'http://localhost:3000/v1/usuario/lista';

	$retorno = file_get_contents($urlUsuario);

	$obj = json_decode($retorno);
	 
	$lista = $obj->results;

	foreach ( $lista as $e )
    {
	    echo " $e->Login <br>"; 
    }
?> 