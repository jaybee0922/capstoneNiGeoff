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
                <h3>List of Users</h3>
                <form action="controller.php?action=delete" Method="POST">
                    <table id="example" class="table table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>
                                    <input type="checkbox" name="chkall" id="chkall">
                                    Account Name
                                </th>
                                <th>Username</th>
                                <th>Contact #</th>
                            </tr>
                        </thead>
                        <tbody id="content-container">
                        </tbody>
                    </table>
                    <div class="btns-group">
                        <span></span>
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

    <script src="./js/slideSrc.js"></script>
    <script src="./js/scriptAdmin.js"></script>
    <script src="./js/get/getUsers.js"></script>
</body>

</html>