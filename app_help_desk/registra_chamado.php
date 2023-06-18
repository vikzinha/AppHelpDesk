<?php

	session_start();

	// trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	// abrindo um arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.txt', 'a'); // função abre um novo arquivo -> recebe dois parâmetros, um nome e uma ação (abrir, ler, etc) -> documentação no php.net

	$texto = $_SESSION['id'] . '#' . $titulo . '#'. $categoria . '#' . $descricao . PHP_EOL;

	//php_EOL -> constante armazena o caracter de quebra de linha de acordo com o sistema operacional 

	// escrevendo o texto
	fwrite($arquivo, $texto); // função para escrever em um arquivo, recebe dois parâmetros : a referÊncia (variável) do arquivo e a string que será escrita no arquivo

	// fechando o arquivo
	fclose($arquivo); // função para fechar o arquivo de texto

	header('Location: abrir_chamado.php');

 ?>