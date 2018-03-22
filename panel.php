<?php
session_start();
if($_SESSION['valid'] === false) {
	session_destroy();
	setcookie('err', 'login_failed');
	header('Location: /index.php'); // incorrect username or password
	exit;
} elseif($_SESSION['valid'] !== true) {
	session_destroy();
	setcookie('err', 'invalid_session');
	header('Location: /index.php'); // go back to log in
	exit;
}


if(!file_exists('./data/'.$_SESSION['type'].'/'.$_SESSION['id_no'].'/main')) {
	session_destroy();
	setcookie('err', 'invalid_session');
	header('Location: /index.php'); // go back to log in
	exit;
} elseif($_SESSION['valid'] === true && file_exists('./data/'.$_SESSION['type'].'/'.$_SESSION['id_no'].'/main') && $user_data = json_decode(file_get_contents('./data/'.$_SESSION['type'].'/'.$_SESSION['id_no'].'/main'))) {
	if($user_data->pass_hash != md5($_SESSION['sess_pass'])) {
		session_destroy();
		setcookie('err', 'invalid_session');
		header('Location: /index.php'); // go back to log in
		exit;
	}
}

//echo 'Welcome '.$_SESSION['type'];

include('./core/framework/'.$_SESSION['type'].'.ui.php');