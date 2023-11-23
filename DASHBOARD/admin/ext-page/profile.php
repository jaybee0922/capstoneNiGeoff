<?php
	session_start();
	if (!isset($_SESSION["user_id"])) {
		header('Location: ../../admin.php');
		exit;
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Hotel Rapid</title>
    <link rel="stylesheet" href="../css/profileStyle.css" />
</head>

<body>
    <div class="wrapper">
        <div class="reset-out">
            <!--
      <h2>Reset Password</h2>
      <p>Please fill out this form to reset your password.</p>
      -->
            <div class="reset-password-text" id="reset-password-main">
                Reset password
            </div>
            <form action="#" method="post" id="main-form" class="main-form">
                <div class="form-group">
                    <label>New Password:</label>
                    <input type="password" name="new_password" class="form-control passwords newPass" />
                    <span class="invalid-feedback"></span>
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label>
                    <input type="password" name="confirm_password" class="form-control passwords confirm" />
                    <span class="invalid-feedback"></span>
                </div>
                <div class="form-group sub-group">
                    <input type="submit" class="btn btn-primary btn-sm update-pass" value="Submit" />
                    <a class="cancel" href="../home.php">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="./js/updateScripts.js"></script>
</body>

</html>