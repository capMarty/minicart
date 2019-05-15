<?php 

include_once 'config.php';


if (isset($_POST['sign_up'])) {
	$email = htmlspecialchars($_POST['email']);
	$login = htmlspecialchars($_POST['login']);
	$password = htmlspecialchars($_POST['password']);

	$err = [];
	if (trim($email) == "") {
		$err[] = "введите email";
	}
	if (trim($login) == "") {
		$err[] = "введите логин";
	}
	if ($password == "") {
		$err[] = "введите пароль";
	}

	if (empty($err)) {
		$sql = "INSERT INTO users(login, email, password) VALUES (:login, :email, :password)";
		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$stmt = $pdo->prepare($sql);
		$stmt->execute([
			"login"=>$login,
			"email"=>$email,
			"password"=>$password_hash
		]);
		$_SESSION['logged_user'] = $password_hash;
		header("location: /");
	}

}


