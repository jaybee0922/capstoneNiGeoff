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
        include("./header.php");
        ?>
        <div class="slider"></div>
        <div class="container">
            <div class="panel-body">
                <h3>Reservations</h3>
                <h1>Date: </h1>
                <form class="pagination-form" method="post" action="">
                    <table class="pagination-table" id="table" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Guest</th>
                                <th>Transaction Date</th>
                                <th>Check-in Date</th>
                                <th>Check-out Date</th>
                                <th>Room Type</th>
                                <th>Room Qty.</th>
                                <th>Assign Room</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="content-container">
                        </tbody>
                    </table>
                </form>
                <div class="btns-group">
                    <span class="left-span"></span>
                    <div class="pagination">
                        <button class="btn page-btn prev">Prev</button>
                        <span class="page-count">1</span>
                        <button class="btn page-btn nxt">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/slideSrc.js"></script>
    <script src="./js/scriptAdmin.js"></script>
    <script src="./js/get/gReservations.js"></script>

</body>

</html>