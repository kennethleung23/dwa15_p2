<!DOCTYPE html>
<html>
<head>

	<title>P2 XKCD Password Generator</title>
	<meta charset='utf-8'>
	
	<link href='//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css' rel="stylesheet">
	<link rel='stylesheet' href='P2_style.css' type='text/css'>
	
<?php require 'P2_password.php' ?>
</head>
<body>

	<div class='container'>
		<h1>xkcd Password Generator</h1>		

		<form action='index.php' method='POST'>
			<p class='options'>
			
				<label for='number_of_words'># of Words</label>
				<input maxlength=1 type='text' name='number_of_words' id='number_of_words' value='3'>  (Max 9)
				<br>
				<input type='checkbox' name='add_number' id='add_number' <?php if(isset($_POST['add_number'])) echo 'checked="checked"'; ?> > 
				<label for='add_number'>Please add a number</label>
				<br>
				<input type='checkbox' name='add_symbol' id='add_symbol' <?php if(isset($_POST['add_symbol'])) echo 'checked="checked"'; ?> > 
				<label for='add_symbol'>Please add a symbol</label>
				<br>
				<input type='checkbox' name='add_uppercase' id='add_uppercase' <?php if(isset($_POST['add_uppercase'])) echo 'checked="checked"'; ?> > 
				<label for='add_uppercase'>Make First Letter Uppercase</label>
				<br>
				<input type='checkbox' name='add_lowercase' id='add_lowercase' <?php if(isset($_POST['add_lowercase'])) echo 'checked="checked"'; ?> > 
				<label for='add_lowercase'>Make Third Letter Lowercase</label>
			</p>
		
			<input type='submit' class='btn btn-default' value='Generate Password'>
					
		</form>
				
				<br><br><p class='password'> <?php echo $password ?></p>

		<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='xkcd_image' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
		</p>
			
	</div>
	
	<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
	
</body>
</html>