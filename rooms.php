<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----------slide show bootstrap----------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!--------------icon for stars-------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />

    <!---------Boxicons CSS ------------>
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <!-----------my css-->
    <link rel="stylesheet" href="./css/app.css" />

    <!-------------favicon----------->
    <link rel="shortcut icon" href="./images/home-images/logo11.png" type="image/x-icon" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />


    <title>Hotel Rapid | Rooms</title>
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
                    <h1>Rooms</h1>
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

    <!-----------rooms paragraph-------->
    <section id="rooms-section">
        <div class="container">
            <div class="rooms-section-title">
                <h1>Hotel Rapid</h1>
            </div>
            <div class="rooms-section-first-paragraph">
                <p>
                    Comfort and style distinguish this smart and modern Davao city
                    hotel. Conveniently located near Francisco Bangoy International
                    Airport, dusitD2 Davao offers easy access to the new central
                    business district and convention centre as well as golf and country
                    clubs, premium malls and nature parks.
                </p>
            </div>
            <div class="rooms-section-second-paragraph">
                <p>
                    With modern rooms and suites, each fully fitted with sleek
                    contemporary comforts, not to mention a spa, fitness centre and
                    courtyard-style pool, your hotel haven in Davao caters to both
                    business and leisure travellers.
                </p>
            </div>
        </div>
    </section>

    <!------------rooms slider--------------->
    <section id="rooms-slider">
        <div class="container">
            <h1 class="rooms-slider-title">Featured Offers</h1>
            <div class="container-rooms swiper">
                <div class="slider-container-rooms">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card-rooms swiper-slide">
                            <div class="image-box">
                                <img src="./images/rooms/featured-offers1.jpg" alt="" />
                            </div>
                            <div class="profile-details-rooms">
                                <div class="name-job-rooms">
                                    <h3 class="name-rooms">Saver Offer Room with Breakfast</h3>
                                    <h4 class="job">
                                        Highly affordable stays with delicious daily breakfasts
                                        are here
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-rooms swiper-slide">
                            <div class="image-box">
                                <img src="./images/rooms/featured-offers2.jpg" alt="" />
                            </div>
                            <div class="profile-details-rooms">
                                <div class="name-job-rooms">
                                    <h3 class="name-rooms">Bed and Breakfast on your terms</h3>
                                    <h4 class="job">
                                        Book now, change late, with our fully flexible room with
                                        breakfast offer
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-rooms swiper-slide">
                            <div class="image-box">
                                <img src="./images/rooms/featured-offers3.jpg" alt="" />
                            </div>
                            <div class="profile-details-rooms">
                                <div class="name-job-rooms">
                                    <h3 class="name-rooms">
                                        Early Bird Offer Room with Breakfast
                                    </h3>
                                    <h4 class="job">
                                        Highly affordable stays with delicious daily breakfasts
                                        are here
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-rooms swiper-slide">
                            <div class="image-box">
                                <img src="./images/rooms/featured-offers1.jpg" alt="" />
                            </div>
                            <div class="profile-details-rooms">
                                <div class="name-job-rooms">
                                    <h3 class="name-rooms">Saver Offer Room with Breakfast</h3>
                                    <h4 class="job">
                                        Highly affordable stays with delicious daily breakfasts
                                        are here
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-rooms swiper-slide">
                            <div class="image-box">
                                <img src="./images/rooms/featured-offers2.jpg" alt="" />
                            </div>
                            <div class="profile-details-rooms">
                                <div class="name-job-rooms">
                                    <h3 class="name-rooms">Bed and Breakfast on your terms</h3>
                                    <h4 class="job">
                                        Book now, change late, with our fully flexible room with
                                        breakfast offer
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------popular all rooms-------------->
    <section id="popular-menu-rooms">
        <div class="room-items">
            <div class="container">
                <div class="section-title-popular-rooms">
                    <h2 id="menu-subtitle-popular">Popular Rooms</h2>
                    <p id="menu-paragraph-popular">
                        Imagine a hotel that offers a variety of traveler's rooms designed
                        to meet the needs of modern explorers. Each room is inspired by
                        different cultures from around the world, creating a unique blend
                        of styles and influences.
                    </p>
                </div>

                <!---------travellers rooms popular-------->
                <div class="item-rooms-popular">
                    <img src="./images/home1.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Traveller Room 1</h4>
                        <p id="menu-item-paragraph">
                            Our Traveller Room 1 is a perfect choice for any occasion,
                            whether it's a quick stay or a romantic getaway with your
                            significant other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 105.25</span>
                            <button class="cart-btn-popular-trav1">Book Now!</button>
                            <button class="cart-btn-travellers" onclick="openModal('#myModalTravellers')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item-rooms-popular">
                    <img src="./images/home1.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Traveller Room 2</h4>
                        <p id="menu-item-paragraph">
                            Our Traveller Room 2 is a perfect choice for any occasion,
                            whether it's a quick stay or a romantic getaway with your
                            significant other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 99.99</span>
                            <button class="cart-btn-popular-trav2">Book Now!</button>
                            <button class="cart-btn-travellers" onclick="openModal('#myModalTravellers')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item-rooms-popular">
                    <img src="./images/home1.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Traveller Room 3</h4>
                        <p id="menu-item-paragraph">
                            Our Traveller Room 3 is a perfect choice for any occasion,
                            whether it's a quick stay or a romantic getaway with your
                            significant other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 150.50</span>
                            <button class="cart-btn-popular-trav3">Book Now!</button>
                            <button class="cart-btn-travellers" onclick="openModal('#myModalTravellers')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <hr />
                <!-----------standard room popular-->
                <div class="section-title-popular-rooms">
                    <h2 id="menu-subtitle-popular">Popular Rooms</h2>
                    <p id="menu-paragraph-popular">
                        Imagine a hotel that offers a variety of standard rooms designed
                        for comfort and convenience. Each room is thoughtfully decorated
                        and equipped with modern amenities to ensure a pleasant stay for
                        our guests.
                    </p>
                </div>
                <div class="item-rooms-popular">
                    <img src="./images/home2.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Standard Room 1</h4>
                        <p id="menu-item-paragraph">
                            Our Standard Room 1 is a perfect choice for any occasion,
                            whether it's a quick stay or a romantic getaway with your
                            significant other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 105.25</span>
                            <button class="cart-btn-popular-standard1">Book Now!</button>
                            <button class="cart-btn-standard" onclick="openModal('.myModalStandard')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item-rooms-popular">
                    <img src="./images/home2.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Standard Room 2</h4>
                        <p id="menu-item-paragraph">
                            Our Standard Room 2 is a perfect choice for any occasion,
                            whether it's a quick stay or a romantic getaway with your
                            significant other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 99.99</span>
                            <button class="cart-btn-popular-standard2">Book Now!</button>
                            <button class="cart-btn-standard" onclick="openModal('.myModalStandard')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item-rooms-popular">
                    <img src="./images/home2.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Standard Room 3</h4>
                        <p id="menu-item-paragraph">
                            Our Standard Room 3 is a perfect choice for any occasion,
                            whether it's a quick stay or a romantic getaway with your
                            significant other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 150.50</span>
                            <button class="cart-btn-popular-standard3">Book Now!</button>
                            <button class="cart-btn-standard" onclick="openModal('.myModalStandard')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <hr />
                <!-----------vip room popular-->
                <div class="section-title-popular-rooms">
                    <!-- <h3 id="menu-title-popular">Menu</h3> -->
                    <h2 id="menu-subtitle-popular">Vip Rooms</h2>
                    <p id="menu-paragraph-popular">
                        Imagine a hotel that offers a variety of VIP rooms designed to
                        provide the ultimate luxury experience for our esteemed guests.
                        Each room is meticulously decorated with opulent furnishings and
                        equipped with state-of-the-art amenities to ensure an
                        unforgettable stay.
                    </p>
                </div>
                <div class="item-rooms-popular">
                    <img src="./images/home3.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Vip Room 1</h4>
                        <p id="menu-item-paragraph">
                            Our Vip Room 1 is a perfect choice for any occasion, whether
                            it's a quick stay or a romantic getaway with your significant
                            other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 105.25</span>
                            <button class="cart-btn-popular-vip1">Book Now!</button>
                            <button class="cart-btn-vip" onclick="openModal('#myModalVip')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item-rooms-popular">
                    <img src="./images/home3.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Vip Room 2</h4>
                        <p id="menu-item-paragraph">
                            Our Vip Room 2 is a perfect choice for any occasion, whether
                            it's a quick stay or a romantic getaway with your significant
                            other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 99.99</span>
                            <button class="cart-btn-popular-vip2">Book Now!</button>
                            <button class="cart-btn-vip" onclick="openModal('#myModalVip')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item-rooms-popular">
                    <img src="./images/home3.jpg" alt="Item Image" />
                    <div class="item-content-popular">
                        <h4 id="menu-item">Vip Room 3</h4>
                        <p id="menu-item-paragraph">
                            Our Vip Room 3 is a perfect choice for any occasion, whether
                            it's a quick stay or a romantic getaway with your significant
                            other.
                        </p>
                        <div class="action-rooms-popular">
                            <span class="price-rooms-popular">Php 150.50</span>
                            <button class="cart-btn-popular-vip3">Book Now!</button>
                            <button class="cart-btn-vip" onclick="openModal('#myModalVip')">
                                Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------travellers, standard, vip rooms modal------------->
    <section id="travellers-modal">
        <div class="container">
            <div id="myModalTravellers" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>Travellers Room</h2>
                    <h3>Travellers</h3>
                    <p>
                        The Travellers Room Hotel offers a unique offer designed for the
                        adventurous souls. Guests can enjoy comfortable and cozy
                        accommodations with a touch of wanderlust. As part of the package,
                        guests are treated to complimentary amenities and special perks.
                        <span class="travellers-room-span">
                            This includes free WiFi to stay connected, daily breakfast to
                            fuel their adventures, lunch, and dinner at their choice of
                            restaurants, and access to a refreshing swimming pool to relax
                            after a day of exploring.</span>
                        Whether it's embarking on local excursions or discovering hidden
                        gems, the Travellers Room Hotel ensures an unforgettable stay with
                        a range of complimentary offerings.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="standard-modal">
        <div class="container">
            <div class="myModalStandard" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>Standard Room</h2>
                    <h3>Standard</h3>
                    <p>
                        The Standard Room Hotel offers a unique offer that sets it apart
                        from others. Guests can enjoy comfortable accommodations and
                        attentive service. As part of the package, guests are treated to
                        complimentary amenities and added perks.
                        <span class="standard-room-span">
                            This includes free WiFi, daily breakfast, lunch, and dinner at
                            their choice of restaurants, and access to a refreshing swimming
                            pool.</span>
                        Whether it's unwinding with a spa treatment or exploring the local
                        area, the Standard Room Hotel ensures a memorable stay with an
                        array of complimentary offerings.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="vip-modal">
        <div class="container">
            <div id="myModalVip" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>Vip Room</h2>
                    <h3>Vip</h3>
                    <p>
                        The VIP Room Hotel offers a one-of-a-kind experience with its
                        unique offer. Guests can enjoy luxurious accommodations and
                        exceptional service. As part of the package, guests are treated to
                        exclusive amenities and personalized attention.
                        <span class="vip-room-span">
                            This includes complimentary high-speed WiFi, daily breakfast,
                            lunch, and dinner at their choice of restaurants, and access to
                            a private swimming pool. </span>Whether it's indulging in a spa treatment or enjoying VIP
                        access
                        to events, the VIP Room Hotel ensures an unforgettable stay with
                        an array of freebies.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-----------sign in && sign up form-------------->
    <section id="sign-form">
        <div class="container">
            <div id="modal-form" class="modal-form">
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


   

    <!------------footer--------------->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/rooms.js"></script>
    <script src="js/about.js"></script>

    <script src="js/rooms/rooms.js"></script>
</body>

</html>