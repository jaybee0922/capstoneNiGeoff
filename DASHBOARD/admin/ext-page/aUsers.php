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
    <div class="wrapper">
        <div class="add-in">
            <div class="add-users" id="add-users">
                Add Users
            </div>
            <form>
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required placeholder="ex: Peter">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required placeholder="ex: Parker">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required placeholder="ex: user01">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="text" id="contact" name="contact" required placeholder="09*********">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required placeholder="********">
                </div>
                <div class="form-group sub-group">
                    <button type="submit" class="btn btn-primary btn-sm">Add</button>
                    <a class="cancel" href="../home.php">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</html>