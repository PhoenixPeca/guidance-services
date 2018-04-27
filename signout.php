<?php
session_start();
if (!empty($_SERVER['HTTP_REFERER'])) {
	session_destroy();
	setcookie('succ', 'signed_out');
}
header('Location: /index.php');
exit;