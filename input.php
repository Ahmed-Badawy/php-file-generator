<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<style type="text/css">
		input,textarea,button{
			width:100%;
			margin-bottom: 20px;
		}
	</style>

</head>
<body class='container'>
<br>

<form action="generate.php" method='post'>
	<label>File Name</label>
	<input type='text' name='file_name' class='form-control' value='orders.php'>
	<label>File Contents</label>
	<textarea name='file_contents' class='form-control'><?php echo htmlspecialchars("<?php\n        echo 'hello world'; \n?>"); ?></textarea>
	<button type='reset' class='btn btn-danger col-sm-6 btn-lg'>Reset</button>
	<button type='submit' class='btn btn-primary col-sm-6 btn-lg'>Submit</button>
</form>



</body>
</html>