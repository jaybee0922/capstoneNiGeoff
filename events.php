<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----------slide show bootstrap----------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!--------------icon for stars-------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />

    <!---------Boxicons CSS ------------>
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <!-----------my css-->
    <link rel="stylesheet" href="./css/app.css" />
    <!-----------payment css------------->
    <link rel="stylesheet" href="./css/payment.css" />

    <!-------------favicon----------->
    <link rel="shortcut icon" href="./images/home-images/logo11.png" type="image/x-icon" />

    <title>Hotel Rapid | Events</title>
</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class="bx bx-menu sidebarOpen"></i>
            <span class="logo navLogo"><img src="./images/home-images/logo11.png" alt="Kusina La Pinas Logo" /></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo navLogo"><img src="./images/home-images/logo11.png"
                            alt="Kusina La Pinas Logo" /></span>
                    <i class="bx bx-x siderbarClose"></i>
                </div>
                <ul class="nav-links">
                    <li>
                        <a href="index.php" id="home">Home</a>
                    </li>
                    <li>
                        <a href="rooms.php" id="rooms">Rooms</a>
                    </li>
                    <li>
                        <a href="events.php" id="events">Events</a>
                    </li>

                    <li>
                        <a href="about.php" id="About">About</a>
                    </li>
                    <li>
                        <a href="#" id="loginLink" class="login-navbar">Login</a>
                    </li>
                    <li>
                        <a href="#" id="logoutLink" style="display: none;" class="logout-navbar">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class="bx bx-moon moon"></i>
                    <i class="bx bx-sun sun"></i>
                </div>
                <div class="searchBox">
                    <div class="searchToggle"></div>
                </div>
            </div>
        </div>
    </nav>

    <!-------------image background automatic change every 5 seconds----------->
    <section class="home" id="home">
        <div class="head_container">
            <div class="box">
                <div class="text">
                    <h1>Events</h1>
                    <p>
                    At Hotel Rapid, guests are welcomed into a world of unparalleled luxury and comfort. Our commitment to excellence is reflected in every aspect of your stay. From the moment you step through our doors, you'll experience a level of hospitality that goes beyond the ordinary. Immerse yourself in the elegant surroundings and discover a haven of tranquility. 
                    </p>
                    <button class="more-info">Book Now!</button>
                </div>
            </div>
            <div class="image">
                <img src="./images/home1.jpg" class="slide" />
            </div>
        </div>
    </section>

    <!-----------sign in && sign up form-------------->
    <section id="sign-form">
        <div class="container">
            <div id="modal-form-events" class="modal-form">
                <div class="my-container">
                    <input type="checkbox" id="check" />
                    <span class="close-form" onclick="closeModal()">&times;</span>
                    <div class="login form">
                        <header>Login</header>
                        <form>
                            <input type="text" id="loginUsername" placeholder="Enter your username" />
                            <input type="password" id="loginPassword" placeholder="Enter your password" />
                            <a href="#">Forgot password?</a>
                            <input type="button" class="button" value="Submit" onclick="login()" />
                        </form>
                        <div class="signup">
                            <span class="signup">Don't have an account?
                                <label for="check">Signup</label>
                            </span>
                        </div>
                    </div>
                    <div class="registration form">
                        <header>Signup</header>
                        <form>
                            <input type="text" id="firstName" placeholder="Enter firstname" />
                            <input type="text" id="lastName" placeholder="Enter lastname" />
                            <input type="number" id="age" placeholder="Enter age" />
                            <input type="text" id="username" placeholder="Enter username" />
                            <input type="password" id="password" placeholder="Enter password" />
                            <input type="button" class="button" value="Submit" onclick="signUp()" />
                        </form>
                        <div class="signup">
                            <span class="signup">Already have an account?
                                <label for="check">Login</label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!---------------payment modal-------------->
    <section id="all-cards">
        <div class="container">
            <div class="allcards-container">    
                <div class="container">
                    <div class="book-cards">
                        <div class="first-book-cards">
                            <label class="check-in" for="check-in">Check-In Date:</label>
                            <input type="date" id="check-in" name="check-in">
                            <label class="check-out" for="check-out">Check-Out Date:</label>
                            <input type="date" id="check-out" name="check-out">
                            <label class="qtyRooms" for="qtyRooms">Room Qty.:</label>
                            <input type="number" name="qtyRooms" id="qtyRooms" placeholder="Enter how many rooms">
                            <button onclick="bookNow()">Book now</button>
                        </div>
                    </div>                 
                </div>

                <div class="box" data-type="traveller" data-price="35000">
                    <div class="image">
                        <img src="./images/home1.jpg" alt="traveller">
                    </div>
                    <div class="name-all-cards">Traveller</div>              
                    <div class="btns">
                        <button class="book-now-button" onclick="selectRoom('Traveller')">Select Room</button>
                    </div>
                </div>

                <div class="box" data-type="standard" data-price="30000">
                    <div class="image">
                        <img src="./images/home2.jpg" alt="standard">
                    </div>
                    <div class="name-all-cards">Standard</div>
                    <div class="btns">
                        <button class="book-now-button" onclick="selectRoom('Standard')">Select Room</button>
                    </div>
                </div>

                <div class="box" data-type="vip" data-price="45000">
                    <div class="image">
                        <img src="./images/home3.jpg" alt="vip">
                    </div>
                    <div class="name-all-cards">VIP</div>     
                    <div class="btns">
                        <button class="book-now-button" onclick="selectRoom('VIP')">Select Room</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------show the receipt-------->
    <div id="receipt-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Booking Receipt</h2>
            <p id="receipt-message"></p>
        </div>
    </div>





    <!------------footer--------------->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/abouts.js"></script>
    <script src="js/paymentModal/payment.js"></script>

</body>

</html>