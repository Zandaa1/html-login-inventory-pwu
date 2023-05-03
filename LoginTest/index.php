<!DOCTYPE html>

<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<title>LOGIN</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	<form action="login.php" method="post">
		<center>
			<img src="img/PWU-Logo.png" height="50px" alt="">
			<img src="img/jasms.png" height="40px" alt="">
			<br>
			<br>
		</center>
		<h2><b>Inventory Login Page</b></h2>

		<?php if (isset($_GET['error'])) { ?>

			<p class="error"><?php echo $_GET['error']; ?></p>

		<?php } ?>

		<label><b>User Name:</b></label>

		<input type="text" name="uname" placeholder="User Name"><br>



		<label><b>Password:</b></label>

		<input type="password" name="password" placeholder="Password"><br>



		<button type="submit">Login</button>

</div>
</div>

	</form>
	<br>
	<small>Copyright 2023 by NAME. All rights reserved.</small>

</body>

</html>