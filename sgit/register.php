<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book Info</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/javascript/scripts.js"></script>
	
</head>
<body>
	<div class="main">
		<?php require "header.php"?>
		</div>
		<div class="site_content">


			<div class="content reg">
				<div class="register">
					<h1>Регистрация</h1>
					<form method="post" action="do_register.php" id="login">
						<input type="text" name="reglogin" placeholder="логин" required /></br></br>
						<input type="password" name="regpassword" placeholder="пароль" required /></br></br>
						<input type="password" name="r_regpassword" placeholder="повторите пароль" required /></br></br>
						<input type="submit" name="submit" class="btn" value="Register" />
					</form>
				</div>
			</div>

		</div>


	</div>
	
</body>
</html>