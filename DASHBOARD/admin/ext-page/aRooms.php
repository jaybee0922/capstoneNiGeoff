<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Hotel Rapid</title>
    <link rel="stylesheet" href="../css/extPage.css">
</head>

<body>

    <div class="wrapper" id="add-rooms">
        <div class="add-room-out">
            <div class="add-room-text" id="add-room-main">
                Add Room
            </div>
            <form action="#" method="post" id="add-room-form" class="add-room-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Image File:</label>
                    <input type="file" name="img" class="form-control room-image" />
                </div>
                <div class="form-group">
                    <label>Accommodation Type:</label>
                    <input type="text" name="accomodation" class="form-control accommodation-type" />
                </div>
                <div class="form-group">
                    <label>Available Rooms:</label>
                    <input type="number" name="avail_rooms" class="form-control available-rooms" />
                </div>
                <div class="form-group">
                    <label>Room Number (From):</label>
                    <input type="number" name="room_from" class="form-control room-number-from" />
                </div>
                <div class="form-group">
                    <label>Room Number (To):</label>
                    <input type="number" name="room_to" class="form-control room-number-to" />
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <input type="number" name="price" class="form-control room-price" />
                </div>
                <div class="form-group sub-group">
                    <input type="submit" class="btn btn-primary btn-sm add-room" value="Add Room" />
                    <a class="cancel" href="../rooms.php">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/add/aRooms.js"></script>
</body>

</html>