<!DOCTYPE html>
<html>
<head>
	<title>Survey Processed</title>
</head>
<body>
	<fieldset>
		<legend><h1>Submitted Info.</h1></legend>

		<p>Name:<?php echo $_POST["first_name"]; ?></p>
		<p>Dojo Location: <?php echo $_POST["location"]; ?> </p>
		<p>Favorite Location: <?php echo $_POST["lang"]; ?> </p>
		<p>Comments: <?php echo $_POST["comment"]; ?></p>

	</fieldset>
</body>
</html>