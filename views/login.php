<?php

// views/login.php

session_start();

	if(!isset($_SESSION['logueado'])) {
		header("location: login");
		exit;
	}