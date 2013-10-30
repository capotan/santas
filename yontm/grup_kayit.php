<?php
require"ynt_init.php";
$general->logged_out_protect();

# if form is submitted
if (isset($_POST['submit'])) {
 
	if(empty($_POST['username']) || empty($_POST['password']) ){
 
		$errors[] = 'Tüm alanları doldur.';
 
	}else{
        
        #validating user's input with functions that we will create next
        if ($grup->user_exists($_POST['username']) === true) {
            $errors[] = 'That username already exists';
        }
        if (strlen($_POST['password']) <6){
            $errors[] = 'Your password must be at least 6 characters';
        } else if (strlen($_POST['password']) >18){
            $errors[] = 'Your password cannot be more than 18 characters long';
        }
	}
 
	if(empty($errors) === true){
		
		$username 	= htmlentities($_POST['username']);
		$password 	= $_POST['password'];
 
		$grup->register($username, $password);// Calling the register function, which we will create soon.
		header('Location: grup_kayit.php?success');
		exit();
	}
}
 
if (isset($_GET['success']) && empty($_GET['success'])) {
  echo 'Kayıt tamamlandı';
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Register</title>
</head>
<body>	
	<div id="container">
		
		<h1>Yeni Grup Kaydı(Dikkat et grup sana kaymasın :D)</h1>
 
		<form method="post" action="">
			<h4>Username:</h4>
			<input type="text" name="username" />
			<h4>Password:</h4>
			<input type="password" name="password" />
			<br>
			<input type="submit" name="submit" />
		</form>
 
 
		<?php 
		# if there are errors, they would be displayed here.
		if(empty($errors) === false){
			echo '<p>' . implode('</p><p>', $errors) . '</p>';
		}
 
		?>
 
	</div>
</body>
</html>