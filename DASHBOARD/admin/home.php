<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Hotel Rapid</title>
    <link rel="stylesheet" href="./css/styleTbs.css">
</head>

<body>
    <div class="main-container">
        <?php
        include("header.php");
        ?>
        <div class="slider"></div>
        <div class="panel-group" id="accordion">
            <h3>Introduction</h3>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion">
                            Rooms
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        The guest house has got various rooms that are categorised accordion to types.
                        Each room is of particular category and have a maximum number of Adults and Children that can be
                        accomodated. Click<a href="./rooms.php"> HERE.</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion">
                            Reservation
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        In this area, you can view all the reservation transaction of all guest. And this area allow the
                        the receptionist confirm the request of guest or either to cancel the reservation. Click <a href="./reservation.php">HERE.</a>
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion">
                            Users
                        </a>
                    </h4>
                </div>
                <div id="collapsesix" class="panel-collapse collapse">
                    <div class="panel-body">
                        The system displays the list of all people that have been registered in to the system.If a
                        particular user is logged in the system the, such as users record is does not appear in the list
                        of records. To view all the registered other than the logged in user. Click <a href="./users.php">HERE.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/slideSrc.js"></script>
    <script src="./js/scriptAdmin.js"></script>
</body>

</html>