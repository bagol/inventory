<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="<?= base_url('Login/verifikasi') ?>" method="post">
		<input type="text" name="username" id="username" placeholder="Masukan username">
		<input type="password" name="password" id="password" placeholder="Masukan password">
		<input type="submit" value="Login">
	</form>
</body>
</html>