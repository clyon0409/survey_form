<!DOCTYPE HTML>
<html lang='en'>
<head>
	<title>Survey Form</title>
	<meta charset='UTF-8'>
</head>
<style>
		.info, p{ width: 400px;
					border: 2px solid black;
					margin: 5px auto;
					padding: 15px;}

		p {height: 50px;
			background-color: LightSpringGreen}

		h4{ text-decoration: underline;}

		.info p {width: 140px;
				height: 5px;
				display:inline-block;
				border: none;}

		.comment {width: 350px;
				 height: 100px;
				overflow-y: auto;}

		input {margin-left: 317px;}
</style>
<body>
	<p>Thanks for submitting the form.  You have submitted the form <?= $counter ?> times now.</p>
	<div class='info'>
		<h4>Submitted Information:</h4>
		<p>Name:</p>
		<p><?= $info['name'] ?></p>
		<p>Dojo Location:</p>
		<p><?= $info['location'] ?></p>
		<p>Favorite Language:</p>
		<p><?= $info['language'] ?></p>
		<p>Comment</p>
		<div class='comment'><?= $info['comments'] ?></div>
		<form action='surveys/go_back' method='post'>
			<input type='submit' name='return' value='Go Back'>
		</form>
	</div>
</body>
</html>
