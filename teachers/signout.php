<?php
   
		session_start();
    session_destroy();
    session_unset();
		echo "<script> window.location='http://localhost/nationalmathbee/index.html'; </script>";

?>