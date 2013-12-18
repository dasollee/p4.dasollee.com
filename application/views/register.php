<html>
	<head>
	<link rel="stylesheet" type="text/css" href="/css/register.css" />
	</head>
	<body>
		<fieldset>
		<legend>Join us</legend>
		<form id='regi-form' method='post' action='/index.php/user/register'>
			<input type='email' name='uid' id='uid' placeholder='email' required><br>
			<input type='password' name='upw' id='upw' placeholder='password. more than 6' required><br>
			<input type='submit' id='sub' disabled="disabled" value='register'>
		</form>
		</fieldset>
		<a href='/index.php/user/login'>login</a>
	</body>
	<script type="text/javascript">
		document.getElementById("upw").onkeyup=function() {
		if(document.getElementById("upw").value.length>6) document.getElementById("sub").removeAttribute("disabled");
		else document.getElementById("sub").setAttribute("disabled","disabled");
		};
	</script>
