<?php

	session_start();
	session_destroy();
	header('Location: index.php');

	// FORMAS DE LIDAR COM A REMOÇÃO DAS VARIÁVEIS DE SEÇÃO
	// 1. remover índices do array de sessão
	// unset(array['indice']) -> remove indices de qualquer tipo de array
	// remove o índice apenas se existir

	// 2. destruir a variável de sessão ()
	// session_destroy() -> remove todos os índices da superglobal session
	// forçar um redirecionamento (nova requisição http em que as variáveis de sessão não estarão mais disponíveis)
?>