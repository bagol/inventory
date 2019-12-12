<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
	<?= $this->session->userdata('username'). ' selamat datang'; ?>
	<a href="<?= base_url('Login/logOut') ?>">Logout</a>
</body>
</html>