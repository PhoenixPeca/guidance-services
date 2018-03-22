<?php
session_start();
// if post data exists
if(!empty($_POST['username']) && !empty($_POST['password'])) {
	// if username in post data has match
	if(file_exists('./data/student/'.$_POST['username'].'/main') && $user_data = json_decode(file_get_contents('./data/student/'.$_POST['username'].'/main'))) {
		// check username password
		if($user_data->pass_hash == md5($_POST['password'])) {
			$_SESSION['valid'] = true;
			$_SESSION['id_no'] = $_POST['username'];
			$_SESSION['sess_pass'] = $_POST['password'];
			$_SESSION['type'] = 'student';
			header('Location: /panel.php');
			exit;
		} else {
			$_SESSION['valid'] = false;
		}
	} elseif(file_exists('./data/counselor/'.$_POST['username'].'/main') && $user_data = json_decode(file_get_contents('./data/counselor/'.$_POST['username'].'/main'))) {
		// check username password
		if($user_data->pass_hash == md5($_POST['password'])) {
			$_SESSION['valid'] = true;
			$_SESSION['id_no'] = $_POST['username'];
			$_SESSION['sess_pass'] = $_POST['password'];
			$_SESSION['type'] = 'counselor';
			header('Location: /panel.php');
			exit;
		} else {
			$_SESSION['valid'] = false;
		}
	} elseif(file_exists('./data/teacher/'.$_POST['username'].'/main') && $user_data = json_decode(file_get_contents('./data/teacher/'.$_POST['username'].'/main'))) {
		// check username password
		if($user_data->pass_hash == md5($_POST['password'])) {
			$_SESSION['valid'] = true;
			$_SESSION['id_no'] = $_POST['username'];
			$_SESSION['sess_pass'] = $_POST['password'];
			$_SESSION['type'] = 'teacher';
			header('Location: /panel.php');
			exit;
		} else {
			$_SESSION['valid'] = false;
		}
	} elseif(file_exists('./data/staff/'.$_POST['username'].'/main') && $user_data = json_decode(file_get_contents('./data/staff/'.$_POST['username'].'/main'))) {
		// check username password
		if($user_data->pass_hash == md5($_POST['password'])) {
			$_SESSION['valid'] = true;
			$_SESSION['id_no'] = $_POST['username'];
			$_SESSION['sess_pass'] = $_POST['password'];
			$_SESSION['type'] = 'staff';
			header('Location: /panel.php');
			exit;
		} else {
			$_SESSION['valid'] = false;
		}
	} else {
		$_SESSION['valid'] = false;
	}
}


if($_SESSION['valid'] === true && file_exists('./data/'.$_SESSION['type'].'/'.$_SESSION['id_no'].'/main') && $user_data = json_decode(file_get_contents('./data/'.$_SESSION['type'].'/'.$_SESSION['id_no'].'/main'))) {
	if($user_data->pass_hash != md5($_SESSION['sess_pass'])) {
		session_destroy();
		setcookie('err', 'invalid_session');
		header('Location: /index.php'); // go back to log in
		exit;
	}
	header('Location: /panel.php'); // go to panel
	exit;
} elseif($_SESSION['valid'] === false) {
	session_destroy();
	setcookie('err', 'login_failed');
	header('Location: /index.php'); // incorrect username or password
	exit;
} else {
	session_destroy();
	setcookie('err', 'invalid_session');
	header('Location: /index.php'); // go back to log in
	exit;
}