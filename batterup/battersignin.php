<?php

		session_start();

			$_SESSION['batteruser'] = $_POST['username'];

		echo "Success";
		
?>