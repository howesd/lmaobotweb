<!DOCTYPE html>
<html>
	<head>
	  <title>LMAOBot</title>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="LMAOBot is an innovative Discord bot equipped with a dank soundboard. You can use Discord's chat function to give lmaobot commands, to which the bot sends a response. lmaobot uses the lmao prefix.">
	  <link rel="stylesheet" href="./css/libs/w3.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="shortcut icon" type="image/x-icon" href="./assets/LMAO_logo.jpg"/>

		<style>
			body {font-family: "Lato", sans-serif}
			.smallScreenNav {display: none}
		</style>
	</head>
	<body>

	  <!-- Navbar -->
	  <div class="w3-top">
	    <div class="w3-bar w3-black w3-card">
	      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="setup_navbar()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	      <a href="index.php" class="w3-bar-item w3-button w3-padding-large">LMAOBOT</a>
	      <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">MEME FORMATER</a>
	      <a href="index.php#commands" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">COMMANDS</a>
	      <a href="index.php#invite" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">INVITE</a>
	    </div>
	  </div>

	  <!-- Navbar on small screens -->
	  <div id="smallScreenNav" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	    <a href="index.php#invite" class="w3-bar-item w3-button w3-padding-large">INVITE</a>
	    <a href="index.php#commands" class="w3-bar-item w3-button w3-padding-large">COMMANDS</a>
	    <a href="#" class="w3-bar-item w3-button w3-padding-large">MEME FORMATER</a>
	  </div>

	  <!-- Page content -->
	  <div class="w3-content" style="max-width:2000px;margin-top:46px">



		<!-- End Page Content -->
		</div>

	<!-- Footer -->
	<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
	  <p class="w3-medium">&copy; LMAOBOT ALL RIGHTS RESERVED. <?php echo date("Y"); ?></p>
	</footer>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117753493-1"></script>

	<script>
		// Used to toggle the menu on small screens when clicking on the menu button
		function setup_navbar() {
			var x = document.getElementById("smallScreenNav");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}
	</script>

	<script src="./js/libs/fabric.min.js"></script>
	<script>



	</script>

	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-117753493-1');
	</script>

	</body>
</html>
