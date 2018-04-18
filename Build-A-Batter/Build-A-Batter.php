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
		<script src="../Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("divFlash", "../Build/BuildABatter_20180415.json");
    </script>
	</head>

	<body class="batteruppage">

		<div>        
			<br /><br /><br /><br />
			<div class="batterupgame" style="text-align:center;">

				<div id="divFlash" align="middle" style="visibility: visible;box-sizing:border-box;width:760px;height:480px">
				</div>
				
				

				
			</div>
		</div>

	</body>
</html>


                    
		         
                
  