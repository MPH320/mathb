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
		<title>BatterUp</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="Stylesheet" type="text/css" href="../css/screen_styles.css" />
		<link rel="Stylesheet" type="text/css" href="../css/screen_layout_large.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="../css/screen_layout_small.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)" href="../css/screen_layout_medium.css" />
	</head>

	<body class="batteruppage">
		<div> 
			<div class="batterupheader">
				<h1 id="h1Player"></h1>           
			</div>
			<div class="batterupgame" style="text-align:center;">
				<a id="btnBack" class="batterup_back" href="selectgame.php"></a>
		
				
				<canvas class="emscripten" id="canvas" align="middle" oncontextmenu="event.preventDefault()" width="800" height="600"></canvas><br /><br />
				<h3 style="color:#fff;">Use the SPACEBAR to pitch, skip base running, and bypass the scoreboard.</h3>
			</div>
		</div>
		
		

    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    backgroundColor: "#222C36",
    splashStyle: "Light",
    dataUrl: "../Release/BatterUp_20180325_M1.data",
    codeUrl: "../Release/BatterUp_20180325_M1.js",
    asmUrl: "../Release/BatterUp_20180325_M1.asm.js",
    memUrl: "../Release/BatterUp_20180325_M1.mem",
  };
</script>
<script src="../Release/UnityLoader.js"></script>
		
		
	</body>
</html>
