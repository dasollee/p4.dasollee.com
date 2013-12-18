<html>
	<head>
	<link rel="stylesheet" type="text/css" href="/css/login.css" />
	</head>
	<body>
		<fieldset>
		<legend>Login</legend>
		<form method='post' action='/index.php/user/login'>
			<input type='email' name='uid' id='uid' placeholder='email' required><br>
			<input type='password' name='upw' id='upw' placeholder='password. more than 6' required><br>
			<input type='submit' id='sub' value='login'>
		</form>
		</fieldset>
		<a href='/index.php/user/register'>register</a>
	</body>
	<script type="text/javascript">
	     document.getElementById("upw").onkeyup=function() {
	      if(document.getElementById("upw").value.length>6) document.getElementById("sub").removeAttribute("disabled");
	      else document.getElementById("sub").setAttribute("disabled","disabled");
	      };
	</script>
</html>
