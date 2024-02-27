<html>
	<head>
		<title>SignUp</title>
		<link rel="stylesheet" href="../styles/signUp.css">
		<script src="../scripts/formResponse.js"></script>
	</head>
	<body>
		<form method="POST" action="../controllers/signUpController.php">
			<h2>Name</h2>
			<input name="userName">
			<h2>Password</h2>
			<input name="userPassword" type="password">
			<input value="sign up" type="submit">
		</form>
	</body>
</html>
