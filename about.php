<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!------------form------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!----------slide show bootstrap----------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!--------------icon for stars-------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />

    <!---------Boxicons CSS ------------>
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <!-----------my css-->
    <link rel="stylesheet" href="./css/app.css" />

    <!-------------favicon----------->
    <link rel="shortcut icon" href="./images/home-images/logo11.png" type="image/x-icon" />

    <!-- <script>
    document.addEventListener("contextmenu", (event) =>
        event.preventDefault()
    );
    </script> -->
    <title>Hotel Rapid | About</title>
</head>


<body>
    <nav>
        <div class="nav-bar">
            <i class="bx bx-menu sidebarOpen"></i>
            <span class="logo navLogo"><img src="./images/home-images/logo11.png" alt="Hotel Rapid Logo" /></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo navLogo"><img src="./images/home-images/logo11.png"
                            alt="Hotel Rapid Logo" /></span>
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
                    <h1>About</h1>
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
    <!------------about----------->
    <section id="about">
        <div class="about">
            <div class="development-title">
                <h1>Development Team</h1>
                <p>
                    We are a team of highly skilled developers who are passionate about
                    creating innovative solutions. Our expertise spans a wide range of
                    programming languages and technologies, allowing us to tackle
                    complex projects with confidence and precision. With years of
                    experience under our belts, we have honed our abilities to deliver
                    high-quality software, websites, and applications that not only meet
                    but exceed our clients' expectations.
                </p>
            </div>

            <div class="developers">
                <div class="second-dev">
                    <img src="./images/about-images/third.png" alt="geoff" />
                    <div class="developer-title">
                        <h3 id="geoff">
                            <a class="whites2" href="https://geoffreywd86webdev.netlify.app//" target="_blank"
                                rel="noopener noreferrer">Geoffrey Beenie P. Orpia</a>
                        </h3>
                        <p id="geoff-dev">WEB DEVELOPER</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------contact form------------->
    <div id="contactForm">
        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Davao del Norte, 8100, Philippines</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+63 999 999 999</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">HotelRapid@gmail.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>
                        If you have any work from me or any types of quries related to my
                        tutorial, you can send me message from here. It's my pleasure to
                        help you.
                    </p>
                    <form action="#">
                        <div class="input-box">
                            <input type="text" placeholder="Enter your name" />
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Enter your email" />
                        </div>
                        <div class="input-box message-box">
                            <textarea placeholder="Enter your message"></textarea>
                        </div>
                        <div class="button">
                            <input type="button" value="Send Now" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!------------footer--------------->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <!-----------show modal every 15 seconds------->
    <section id="modal-form-about">
        <div class="container">
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="modal-body">
                        <img src="./images/home1.jpg" alt="Left Image" />
                        <div class="text-content">
                            <h2>Festive Season is Coming!</h2>
                            <p>
                                Experience the magic of the festive season at our hotel.
                                Indulge in luxurious accommodations, festive decorations, and
                                special holiday menus.
                                <span class="highlight-modal">
                                    Rate starts at Php11,588 net/room/night.</span>
                                Book your stay now!
                            </p>
                            <h3>Package Inclusions:</h3>
                            <ul>
                                <li>Room accommodation with breakfast at Madayaw Cafe.</li>
                                <li>
                                    Complimentary day tour with lunch in Dusit Thani Lubi
                                    Plantation.
                                </li>
                                <li>Welcome Dusit Holiday Treats in the room.</li>
                            </ul>
                            <button class="book-now">Book Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------sign in && sign up form-------------->
    <section id="sign-form">
        <div class="container">
            <div id="modal-form-myabout" class="modal-form">
                <div class="my-container">
                    <input type="checkbox" id="check" />
                    <span class="close-form" onclick="closeModal()">&times;</span>
                    <div class="login form">
                        <header>Login</header>
                        <form id="loginForm" action="#">
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
                        <form id="signupForm" action="#">
                            <input type="text" id="firstName" placeholder="Enter firstname" />
                            <input type="text" id="lastName" placeholder="Enter lastname" />
                            <input type="number" name="age" id="age" placeholder="Enter age" />
                            <input type="number" name="number" id="number" placeholder="Enter number" />
                            <input type="text" name="username" id="username" placeholder="Enter username" />
                            <input type="password" name="password" id="password" placeholder="Enter password" />

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/newJss.js"></script>
    <script src="js/about/about.js"></script>

</body>

</html>