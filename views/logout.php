<?php

// views/login.php

session_start();

	unset($_SESSION['logueado']);
	header("location: ../html/login.php");
		exit;