<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----------slide show bootstrap----------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

    <!--------------icon for stars-------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />

    <!---------Boxicons CSS ------------>
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <!-----------my css-->
    <link rel="stylesheet" href="./css/app.css" />

    <!-------------favicon----------->
    <link rel="shortcut icon" href="./images/home-images/logo11.png" type="image/x-icon" />

    <!-------------slider image------------>
    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <title>Hotel Rapid | Home</title>
</head>

<body>


    <nav>
        <div class="nav-bar">
            <i class="bx bx-menu sidebarOpen"></i>
            <span class="logo navLogo"><img src="./images/home-images/logo11.png" alt="Kusina La Pinas Logo" /></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo navLogo"><img src="./images/home-images/logo11.png" alt="Kusina La Pinas Logo" /></span>
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
                        <a href="#" id="loginLink" class="loginNavbar">Login</a>
                    </li>
                    <li>
                        <a href="#" id="logoutLink" style="display: none" class="logout-navbar">Logout</a>
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
                    <h1>Hotel Rapid</h1>
                    <p>
                        At Hotel Rapid, guests are welcomed into a world of unparalleled luxury and comfort. Our
                        commitment to excellence is reflected in every aspect of your stay. From the moment you step
                        through our doors, you'll experience a level of hospitality that goes beyond the ordinary.
                        Immerse yourself in the elegant surroundings and discover a haven of tranquility.
                    </p>
                    <button class="more-info">Book Now!</button>
                </div>
            </div>
            <div class="image">
                <img src="./images/home1.jpg" class="slide" />
            </div>
        </div>
    </section>

    <!------------slide show------------>
    <section id="learn slide-show" class="p-5 text-dark mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 p-5">
                    <h2 id="first-title" class="plate-pleasure">
                        Hotel Rapid
                    </h2>
                    <p class="lead" id="first-paragraph">
                        With a meticulous attention to detail, Hotel Rapid ensures that every stay is a seamless blend
                        of sophistication and relaxation. Our dedicated staff is committed to providing personalized
                        service, ensuring that your needs are not only met but exceeded. Embrace the opulence of our
                        accommodations, where every room is designed to offer the utmost in comfort. Whether you're here
                        for business or leisure, Hotel Rapid is your premier destination for a truly memorable
                        experience."
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="slideshow">
                        <img src="./images/slide-show/first-image.jpg" alt="first image" class="slide-image" />
                        <img src="./images/slide-show/second-image.jpg" alt="second image" class="slide-image" />
                        <img src="./images/slide-show/third-image.jpg" alt="third image" class="slide-image" />
                        <!-- <img src="./images/slide-show/fourth-image.jpg" alt="fourth image" class="slide-image" /> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- left image-->
    <section id="learn" class="p-5">
        <div class="left-image">
            <div class="container">
                <div class="row align-items justify-content-between">
                    <div class="col-md">
                        <img src="./images/slide-show/fourth-image.jpg" alt="fourth image" class="img-fluid" />
                    </div>
                    <div class="col-md p-5">
                        <h2 id="second-title">Hotel Rapid</h2>
                        <p class="lead" id="second-first-paragraph">
                            At Hotel Rapid, we redefine the essence of hospitality, offering a distinctive blend of
                            modern luxury and personalized service. Our commitment to exceeding expectations is evident
                            in every detail, from the stylish decor to the impeccable service provided by our attentive
                            staff.
                        </p>
                        <p id="second-second-paragraph">
                            The joy of staying in a hotel is in the subtle blend of
                            amenities, the perfect balance of comfort, and the harmonious
                            combination of services that create a hospitality masterpiece.
                        </p>
                        <button id="second-button">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------testimonials of 3 images-------------->
    <section id="section-testimonials">
        <div class="section-testimonials">
            <div class="header-testimonials">
                <h1 id="fifth-title">Our Customer Reviews</h1>
                <p id="fifth-paragraph">
                    Our dining experience at this restaurant was truly exceptional. From
                    the moment we walked in, we were greeted with warm hospitality and a
                    welcoming atmosphere.
                </p>
            </div>
            <div class="reviewSection">
                <!------------first person-------------->
                <div class="reviewItem">
                    <div class="top">
                        <div class="clientImage">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="first person" />
                            <span id="first-person">Ryan Azur</span>
                        </div>
                        <ul>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-regular bi-star"></i></li>
                            <li><i class="bi-regular bi-star"></i></li>
                        </ul>
                    </div>
                    <article>
                        <p class="review" id="first-review">
                            Each bite is a culinary delight, with flavors that leave you
                            wanting more.
                        </p>
                        <p id="date1">November 23, 2023 <i class="bi bi-calendar4"></i></p>
                    </article>
                </div>

                <!------------second person-------------->
                <div class="reviewItem">
                    <div class="top">
                        <div class="clientImage">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="second person" />
                            <span id="second-person">Quez Fabela</span>
                        </div>
                        <ul>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-regular bi-star"></i></li>
                            <li><i class="bi-regular bi-star"></i></li>
                        </ul>
                    </div>
                    <article>
                        <p class="review" id="second-review">
                            The ambiance is warm and cozy, creating a welcoming atmosphere
                            for dining.
                        </p>
                        <p id="date2">November 23, 2023 <i class="bi bi-calendar4"></i></p>
                    </article>
                </div>

                <!------------third person-------------->
                <div class="reviewItem">
                    <div class="top">
                        <div class="clientImage">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="Random men picture" alt="third person" />
                            <span id="third-person">Lancelot Guinevere</span>
                        </div>
                        <ul>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-solid bi-star"></i></li>
                            <li><i class="bi-regular bi-star"></i></li>
                            <li><i class="bi-regular bi-star"></i></li>
                        </ul>
                    </div>
                    <article>
                        <p class="review" id="third-review">
                            The menu offers a variety of options, catering to all tastes and
                            preferences.
                        </p>
                        <p id="date3">November 23, 2023 <i class="bi bi-calendar4"></i></p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- right image -->
    <section id="learn" class="p-5 bg-primary text-light">
        <div class="container">
            <div class="row align-items justify-content-between">
                <div class="col-md p-5">
                    <h2>Hotel Rapid</h2>
                    <p class="lead">
                        Hotel Rapid stands as a beacon of sophistication in the heart of comfort and style. From the
                        moment you step into our elegant lobby, you are greeted by a seamless blend of modern design and
                        warm hospitality.
                    </p>
                    <p>
                        Our commitment to providing a memorable stay is reflected in the meticulously curated amenities
                        and services offered. Whether you're here for a business meeting, a special occasion, or simply
                        to unwind, our dedicated team is poised to cater to your every need.
                    </p>
                    <a href="#" class="btn btn-warning mt-3"><i class="bi bi-chevron-right"></i>Read More</a>
                </div>
                <div class="col-md">
                    <img src="./images/salad.png" alt="fifth image" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <!---------------slider image----------------->
    <section id="slider-image">
        <div class="container">
            <div class="swiper mySwiper container">
                <div class="swiper-wrapper content">
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/fourth-image.jpg" alt="first image" alt="" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/fourth-image.jpg" alt="second image" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/fourth-image.jpg" alt="third image" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/fourth-image.jpg" alt="fourth image" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/first-image.jpg" alt="fifth image" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/first-image.jpg" alt="sixth image" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/first-image.jpg" alt="seventh image" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/first-image.jpg" alt="eight image" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="./images/slide-show/first-image.jpg" alt="nine image" />
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Hotel Rapid</span>
                                <span class="profession">Hotel Rapid</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">Read more</button>
                                <!-- <button class="hireMe">Hire Test</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Learn Section -->
    <section id="learn" class="p-5 bg-primary text-light">
        <div class="container">
            <div class="row align-items justify-content-between">
                <div class="col-md">
                    <img src="./images/salad.png" alt="Fundamentals" class="img-fluid" />
                </div>
                <div class="col-md p-5">
                    <h2>Hotel Rapid</h2>
                    <p class="lead">
                        The well-appointed rooms and suites provide a sanctuary of tranquility, offering a perfect
                        retreat after a day of exploration or business endeavors.
                    </p>
                    <p>
                        Hotel Rapid is not just a place to stay; it's a destination that elevates your experience,
                        leaving you with cherished memories of unparalleled comfort and luxury."
                    </p>
                    <a href="#" class="btn btn-primary mt-3"><i class="bi bi-chevron-right"></i>Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!------------footer--------------->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>


    <!-----------show modal every 15 seconds------->
    <section id="modal-form">
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
                                <li>Welcome Hotel Rapid Holiday Treats in the room.</li>
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
            <div id="modal-form-index" class="modal-form">
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="js/app.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/index/index.js"></script>
</body>

</html>