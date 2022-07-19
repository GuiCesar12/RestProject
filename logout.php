<?php

	if (isset($_COOKIE['cod_cli'])) {		


		setcookie("cod_cli","",1,'/');
		unset($_COOKIE["cod_cli"]);

		header("Location: index.php");

	} else {

		header("Location: index.php");

	}

?>
