<?php

		session_start();

			$_SESSION['parentuser'] = $_POST['username'];

		echo "Success";
		
?>