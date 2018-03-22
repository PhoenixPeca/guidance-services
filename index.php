<?php
error_reporting(0);
session_start();
if(!empty($_COOKIE['err'])) { setcookie('err', ''); }
if(!empty($_COOKIE['succ'])) { setcookie('succ', ''); }
if($_SESSION['valid'] === true) {
	header('Location: /login.php');
	exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		html,
		body {
		  height: 100%;
		  font-family: Quicksand;
		}

		body {
		  display: -ms-flexbox;
		  display: -webkit-box;
		  //display: flex;
		  display: initial;
		  -ms-flex-align: center;
		  -ms-flex-pack: center;
		  -webkit-box-align: center;
		  align-items: center;
		  -webkit-box-pack: center;
		  justify-content: center;
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #f5f5f5;
		}

		.form-signin {
		  width: 100%;
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .checkbox {
		  font-weight: 400;
		}
		.form-signin .form-control {
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="username"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		  //text-transform: uppercase;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
	</style>	
	<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  </head>
  <body class="text-center">
	<form class="form-signin" method="post" action="./login.php" style="margin: 3% auto 3% auto;">
	  <img class="mb-4" src="./core/assets/spud.svg" alt="St. Paul University Dumaguete" width="200" style="opacity: 0.9;">
	  <h1 class="h3 mb-3 font-weight-normal" style="text-align: initial; border-bottom: 2px solid #afafaf; font-size: 28px; font-family: Anton; width: 80%;">Guidance Services</h1>
	  <input type="username" name="username" id="inputUsername" class="form-control" placeholder="ID Number" <?php if(!empty($_GET['user']) && !empty($_GET['err']) && $_GET['err'] == 'login_failed') { echo 'value="'.$_GET['user'].'"'; } ?> required>
	  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	  <a href="./recover.php" style="padding-top: 10px; display: block;">Forgot account?</a>
	  <?php if(!empty($_COOKIE['err']) && $_COOKIE['err'] == 'login_failed') { ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: initial; margin-top: 15px;">
		  <strong>Login Failed</strong>
		  <p>The supplied <i>ID Number</i> or <i>Password</i> does not match with any of our records.</p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
	  <?php } ?>
	  <?php if(!empty($_COOKIE['succ']) && $_COOKIE['succ'] == 'signed_out') { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: initial; margin-top: 15px;">
		  <strong>Session Ended</strong>
		  <p>Your session for this device has been cleared out successfully.</p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
	  <?php } ?>
	  <?php if(!empty($_COOKIE['err']) && $_COOKIE['err'] == 'invalid_session') { ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: initial; margin-top: 15px;">
		  <strong>Invalid Session</strong>
		  <p>Your previous request was malformed or has been expired. Please authenticate once more.</p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
	  <?php } ?>
	</form>
	<p class="mt-5 mb-3 text-muted">&copy; St. Paul University Dumaguete <?=date('Y');?></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>