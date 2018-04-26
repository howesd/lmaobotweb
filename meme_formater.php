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
			body {
				font-family: "Lato", sans-serif
			}

			canvas {
				box-shadow: rgb(0, 0, 0) 0px 0px 10px;
			}

			.smallScreenNav {
				display: none
			}

			.canvas-container {
				margin: 1%;
				display: block;
		    margin-left: auto;
		    margin-right: auto;
			}

			.toolbar {
				margin: 1%;
			}

			.toolbar input, .toolbar select {
				margin: 2.5px;
				padding: 5px;
				border-radius: 10px;
			}
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

	  <!-- Start Page content -->
	  <div class="w3-content" style="max-width: 2000px; margin-top: 46px; text-align: center; align-content: center;">

			<canvas style="margin: 5px;" width="800" height="600" id="master_canvas"><b>HTML Canvas isn't supported...</b></canvas>

			<form class="toolbar">
				<input type="file" onchange="load_background(this.files[0]);" accept=".jpg, .png" style="display: none;" name="image_file" />
				<input type="button" onclick="image_file.click();" value="Open image..." />
				<br />
				<select name="add_type">
					<option value="square">
						Square
					</option>
					<option value="circle">
						Circle
					</option>
				</select>
				<br />
				<input type="button" value="Add Text" name="add_text" />
				<input type="button" value="Add Image" name="add_image" />
				<br />
				<input type="button" value="Export" name="export_format" />
				<input type="file" style="display: none;" name="format_file" />
				<input type="button" value="Import" onclick="format_file.click();" name="import_format" />
			</form>

		</div>
		<!-- End Page Content -->

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
		// Setup global variables
		var canvas;

		// Setup Fabric.js on page load
		window.onload = function () {
			// Setup Canvas
			canvas = new fabric.Canvas('master_canvas');
			canvas.setBackgroundColor('black', canvas.renderAll.bind(canvas));

		  // Setup resize
		  window.addEventListener("resize", resize_canvas);
		  resize_canvas();
		}


		/**
		 * Resize Canvas and it's content.
		 * @return {undefined} Returns nothing.
		 */
		function resize_canvas() {
		  // Resize canvas
			canvas.setWidth(window.innerWidth - 100);
			canvas.setHeight(window.innerHeight - 100);
			canvas.calcOffset();

			canvas.renderAll();
		}


		/**
		 * Load background for the Canvas.
		 * @param {image_file} [image] A image file.
		 * @return {undefined} Returns nothing.
		 */
		 function load_background(image) {
		 	var reader  = new FileReader();

			// Once file has been read do the following
			reader.addEventListener("load", function () {
				new fabric.Image.fromURL(reader.result, function (image) {
					// Set Image to center
					image.originX = image.originY = "center";
					image.left = canvas.width / 2;
					image.top = canvas.height / 2;

					// Resize Image to fit Canvas
					image.scaleToWidth(canvas.width);

					// Set Canvas background
					canvas.setBackgroundImage(image);
					canvas.renderAll();
				});
			});

			// Read image if any given
			if (image) {
				reader.readAsDataURL(image)
			}
		 }

	</script>

	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-117753493-1');
	</script>

	</body>
</html>
