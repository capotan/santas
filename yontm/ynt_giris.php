<?php
require 'ynt_init.php';
 
if (empty($_POST) === false) {
 
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
 
	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Kullanıcı adı ve şifrenizi giriniz.';
	}  else {
 
		$login = $grup->login($username, $password);
		if ($login === false) {
			$errors[] = 'Kullanıcı adı ve/veya şifre yanlış.';
		}else {
			// username/password is correct and the login method of the $grup object returns the user's id, which is stored in $login.
 
 			$_SESSION['admin_id'] =  $login; // The user's id is now set into the user's session  in the form of $_SESSION['id'] 
			
			#Redirect the user to home.php.
			header('Location: ynt_home.php');
			exit();
		}
	}
} 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Login</title>
</head>
<body>	
	<div id="container">
		
		<h1>Sanat ve Tasarım Fakültesi Yönetim Paneli</h1>
 
		<?php if(empty($errors) === false){
 
			echo '<p>' . implode('</p><p>', $errors) . '</p>';			
 
		} 
		?>
		<form method="post" action="">
			<h4>Kullanıcı Adı:</h4>
			<input type="text" name="username">
			<h4>Şifre:</h4>
			<input type="password" name="password">
			<br>
			<input type="submit" name="submit">
		</form>
	</div>
</body>
</html>