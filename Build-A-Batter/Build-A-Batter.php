<?php
    session_start();

		if(!isset($_SESSION['batteruser'])){
			echo "<script> window.location='http://localhost/nationalmathbee/batterup/SignIn.html'; </script>";
		}
		
?>
<!DOCTYPE html>

<html>
	<head id="Head1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
		<title>Build-A-Batter</title>
		<meta name="description" />
		<meta name="keywords" />
		<meta name="author" />
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
		<link rel="Stylesheet" type="text/css" href="../css/screen_styles.css" />
		<link rel="Stylesheet" type="text/css" href="../css/screen_layout_large.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="../css/screen_layout_small.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)" href="../css/screen_layout_medium.css" />
	</head>

	<body class="batteruppage">

		<div>        
			<br /><br /><br /><br />
			<div class="batterupgame" style="text-align:center;">

				<div id="divFlash">
					<iframe width="760" height="480" id="divFlash" align="middle" style="visibility: visible;"></iframe>
				</div>
				
			</div>
		</div>

	</body>
</html>


                    
		         
                
  