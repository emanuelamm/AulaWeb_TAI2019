<?php
//essas duas linhas vão mostrar os erros do código
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
//deu inicio a pagina
	include_once('escreverArquivoArray.php');

	$pessoas = array(
		"000.000.000.01" => array(
			"nome" => "Carlos Eduardo",
			"endereco" => "Rua Manuel Viana, 200",
			"telefone" => "(41)3422-2829",
		),

		"000.000.000.02" => array(
			"nome" => "Fabiola Oliveira",
			"endereco" => "Rua Antonio Carlos Rodrigues, 2064",
			"telefone" => "(41)99912-0214",
		)
	);
//passou como parametro
	escreverArquivoArray($pessoas);
?>
