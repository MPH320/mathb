<?php

		session_start();
    $_SESSION['adminuser'] = $_POST['username'];
		echo $_SESSION['adminuser'];
		
?>