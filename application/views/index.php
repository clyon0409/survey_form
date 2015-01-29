<!DOCTYPE HTML>
<html lang='en'>
<head>
	<title>Survey Form</title>
	<meta charset='UTF-8'>
	<meta name='description' content='survey form for poll of favorite coding languages'>
</head>
<style>
	#wrapper{
		border: 1px solid black;
		width: 400px;
		height: 337px;
		margin: 20px auto;
		padding: 20px;
	}

	form{
		width: 380px;
		height: 300px;
	}

	label, p  {width: 380px;
				height: 50px;
				margin: 10px;
	}
	p{height: 14px;}

	input {
		margin: 10px 0px 10px 68px;
	}

	select {margin: 10px 0px 10px 80px;}

	.language {margin: 10px 0px 10px 163px;}

	textarea{
		width:324px;
		height: 150px;
	}

	.button {margin-left: 270px;}
	
</style>
<body>
	<div id='wrapper'>
			<form action = '/surveys/process_data' method='post'>
				<label>Your name:<input type='text' name='name'></label>
				<label>Dojo location
					<select name="location">
						<option value="mv">Mountain View, CA</option>
						<option value="wa">Seattle, Washington</option>
						<option value="la">Los Angeles, CA</option>
					</select>
				</label>
				<label>Language
					<select class='language' name="language">
						<option value="php">PHP</option>
						<option value="python">Python</option>
						<option value="js">Javascript</option>
					</select>
				</label>
				<p>Comment (optional)</p>
				<textarea name='comments'></textarea>
				<input class ='button' type='submit' name='submit' value='Submit'>
			</form>
	</div>
</body>
</html>