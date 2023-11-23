<?php
	session_start();
	if (isset($_SESSION["user_id"])) {
		header('Location: ./admin/home.php');
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Hotel Rapid</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>

    <div id="login-modal">
        <div class="modal-content">
            <h2>Log-in</h2>
            <form role="form" method="POST" action="login.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="form-control" type="text" id="username" name="username" autofocus
                        placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <div class="password-container">
                        <input class="form-control" type="password" id="password" name="password" value=""
                            placeholder="********">
                        <label for="show-password" class="show-password-icon"></label>
                        <input type="checkbox" id="show-password" class="show-password">
                    </div>
                </div>
                <button type="submit" name="btnlogin" class="btn btn-lg btn-success btn-block">Login</button>
            </form>
        </div>
    </div>

    <script src="admins.js"></script>
</body>

</html>