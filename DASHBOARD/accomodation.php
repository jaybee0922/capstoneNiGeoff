<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Hotel Rapid</title>
    <link rel="stylesheet" href="./css/stylesTables.css" />
</head>

<body>
    <div class="main-container">
        <?php
        include("./header.php");
      ?>
        <div class="slider"></div>
        <div class="container">
            <div class="panel-body">
                <h3>List of Accommodation</h3>
                <form action="controller.php?action=delete" method="POST">
                    <table id="example" class="table table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th class="table-checkbox">
                                    <input type="checkbox" name="chkall" id="chkall" />
                                    Accommodation
                                </th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody id="content-container">
                            <tr>
                                <td>1</td>
                                <td><input type="checkbox" name="chk[]" id="chk1">Single Room</td>
                                <td>Cozy room with a single bed and basic amenities.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btns-group">
                        <div class="add-del-group">
                            <button type="submit" class="btn btn-default add" name="add">
                                New
                            </button>
                            <button type="submit" class="btn btn-default del" name="delete">
                                Delete Selected
                            </button>
                        </div>
                        <div class="pagination">
                            <button class="btn page-btn prev">Prev</button>
                            <span class="page-count">1</span>
                            <button class="btn page-btn nxt">Next</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="./js/slider.js"></script>
    <script src="./js/scriptAdmin.js"></script>
    <script src="./js/pag.js"></script>
</body>

</html>