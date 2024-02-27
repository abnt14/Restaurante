<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="../styles/login.css">
		<script src="../scripts/formResponse.js"></script>
	</head>
	<body>
		<form method="POST" action="../controllers/loginController.php">
			<h2>Name</h2>
			<input name="usrName">
			<h2>Password</h2>
			<input name="usrPass" type="password">
			<br>
			<input onclick="return verifyInputsLogin()" value="Login" type="submit">
		</form>
	</body>
</html>

