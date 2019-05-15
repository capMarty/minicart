<?php 

include_once 'config.php';


if (isset($_POST['sign_in'])) {
	$login = htmlspecialchars($_POST['login']);
	$pass = htmlspecialchars($_POST['password']);

	$err = [];
	if (trim($login) == "") {
		$err[] = "введите email";
	}
	
	if ($password == "") {
		$err[] = "введите пароль";
	}

	if (empty($err)) {
		$sql = "SELECT `password` FROM `users` WHERE `login` = ?";

		$stmt = $pdo->prepare($sql);
		$stmt->execute([$login]);
		$row = $stmt->fetchAll(PDO::FETCH_COLUMN);
		if (empty($row)) {
			echo "Пользователь не найден!";
		}else{
			$passwd_ver = $row[0];
			if (password_verify($pass, $passwd_ver)) {
				 $_SESSION['logged_user'] = $row[0][0];
				 header('Location: temp/index.php');
			}else{
				echo "неверно введен пароль!";
			}
		}
	}

}


