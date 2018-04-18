<?php

		session_start();

			$_SESSION['teacheruser'] = $_POST['username'];

		echo "Success";
		
?>