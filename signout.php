<?php
session_start();
session_destroy();
setcookie('succ', 'signed_out');
header('Location: /index.php'); // go back to log in
exit;