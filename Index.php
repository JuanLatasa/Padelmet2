
<?php
require 'PadelMeet/header.php';
require 'PadelMeet/db_key.php';
?>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
			<form method = 'POST' action = 'PadelMeet/backend.php' >
			<div class="login-form">
				<div class="control-group">
				<input type="text" name="username" class="login-field"  placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" name="password" id="password" autocomplete="off" class="login-field" placeholder="password">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<button class = 'btn btn-primary btn-large btn-block' type="submit" name="login" value= 'login' class="submit">Login</button>
				<a class="btn btn-primary btn-large btn-block" href="PadelMeet/register.php">Registro</a>
			</div>
			</form>
		</div>
	</div>

</body>
</html>

