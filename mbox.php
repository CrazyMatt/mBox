<!DOCTYPE html>
<html>
	<head>
		<title>Message Box</title>
		<link rel="stylesheet" type="text/css" href="main.css" />
	</head>
	<body>
		<div class="msgbox">
		<?php
			echo "<p class='article'>" . $_GET["msg"] . "</p>";
			echo "<br/>";
			echo "<div class='b1'><a href='" . $_GET["return"] . "' class='msgboxans'><span class='grey'>OK</span></a></div>"
		?>
		</div>
	</body>
</html>
