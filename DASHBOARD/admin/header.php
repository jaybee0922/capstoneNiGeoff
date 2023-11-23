<?php
	session_start();
	if (!isset($_SESSION["user_id"])) {
		header('Location: ../admin.php');
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
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./css/stylesHeader.css" />
</head>

<body>

    <header class="headerCont">
        <nav class="navCont">
            <div class="top-side">
                <a href="#" class="profCircle" id="profile-option-link">
                    <img src="../img/profile.png" alt="Profile Logo" class="profile__img">
                </a>
                <div class="spans">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <a href="home.php" class="navModalLink">
                Home <img src="../img/icons8-home-50.png" alt="link icons" class="link-icons">
            </a>
            <a href="rooms.php" class="navModalLink">
                Rooms <img src="../img/icons8-living-room-64.png" alt="link icons" class="link-icons">
            </a>
            <a href="reservation.php" class="navModalLink">
                Reservation <img src="../img/icons8-reservation-64.png" alt="link icons" class="link-icons">
            </a>
            <a href="users.php" class="navModalLink">
                Users <img src="../img/icons8-users-50.png" alt="link icons" class="link-icons">
            </a>
            <img src="../img/logo12.png" alt="logo" class="logo-img">
        </nav>
    </header>


    <!-- pop up option of profile -->
    <div class="popup-wrapper" id="popup-wrapper">
        <div class="profile-option-cont">

            <a href="./ext-page/profile.php" class="change-pass"><img src="../img/icons8-edit-24.png" />Change
                Password</a>
            <hr>
            <a href="logout.php" class="logout-btn"><img src="../img/icons8-log-out-50.png" />Logout</a>
        </div>
    </div>
</body>

</html>