<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<style type="text/css">
		fieldset {
		height:400px;
		width:300px;
	}

	input {
		display:inline-block;
		vertical-align: top;
		margin:5px;
	}

	#comment {
		width: 280px;
		height:150px;
	}
	</style>

</head>
<body>
	<div id ="container">
		<form action='/process_form' method='post'>
		<fieldset>
			<legend><h1>Survey Form</h1></legend>
			   <p> Full Name:<input type='text' name="first_name"> </p>
			   <p> Dojo Location: 
				   <select name ="location">
				   		<option value="Seattle">Seattle</option>
				   		<option value="Dallas">Dallas</option>
				   		<option value="San Francisco">San Francisco</option>
				   		<option value="Washington">Washington D.C.</option>
				   </select>
			   </p>
			   <p>Favorite Language:
			   		<select name = "lang">
				   		<option value="PHP">PHP</option>
				   		<option value="Python">Python</option>
				   		<option value="Ruby">Ruby</option>
				   		<option value="Java">Java</option>
				   </select>
			   <p>Comment (optional)<textarea name='comment' id='comment'></textarea></p>
			    <input type='submit' value='Submit'>
		</fieldset>
</form>
	</div>
</body>
</html>