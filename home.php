<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<style>
  



    .custom-bg {
        background-color: #2a201c;
    }

    .custom-bg:hover {
        background-color: rgb(114, 89, 78);
    }

    .container {
        padding: 40px 0;
    }

    .row.justify-content-evenly {
        gap: 20px;
    }

    .col-lg-2 {
        transition: transform 0.3s ease-in-out;
    }

    .col-lg-2:hover {
        transform: scale(1.05);
    }

    .bg-white {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .bg-white img {
        border-radius: 50%;
    }

    .h3 {
        font-size: 18px;
        margin-top: 15px;
    }

    .btn-custom {
        background-color: #007bff;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }
</style>

<body>




    <header class="header1">

        <a href="index.php" class="logo">
            <img src="images/scissors.png" alt="">
        </a>

        <nav class="navbar">
            <div id="close" class="fas fa-times"></div>


            <a href="haircare.php" class="nav_item">Our Services</a>
            <a href="contact8.php" class="nav_item">ContactUs</a>
            <a href="aboutus.php" class="nav_item">About</a>
            <a href="index.php" class="nav_item">Log Out</a>
            <a href="adminlogin.php" class="nav_item">Admin Login</a>


        </nav>

        <div id="menu" class="fas fa-bars"></div>

    </header>






    <section class="home">

        <div class="content">
            <h1 class="title">ONLINE <br><span>SALON</span> <span>BOOKING</span> </h1>

            <p class="description">Elevate Your Style, Tap to Book.
                Unisex Beauty, Seamless Look.</p>
            <a href="bookform.php" class="btn">Book Now</a>
        </div>

        <div class="image">
            <img src="images/barber-shop.png" alt="" data-speed="-3" class="move">
        </div>

    </section>




    <section class="heading">
        <h1>About Us</h1>
        <p> Transforming Beauty with Seamless Online Booking and Exceptional Services.</p>
    </section>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="images/pic1.png" alt="">
            </div>

            <div class="content">
                <h2> Unleashing Beauty, One Click at a Time </h2>
                <p>Welcome to our online unisex salon! At Omkar's Salon, we believe in making beauty easy and enjoyable
                    for everyone. With a click, you can book your preferred services and pamper yourself at your
                    convenience.</p>
                <a href="aboutus.php" class="read-more">Read More</a>
            </div>
        </section>
    </div>
    </section>
    </section>



    <section>
        <div class="px-4">
            <div class="heading1">
                <h1 class="text-center mt-5 display-3 fw-bold"><span class="theme-text">Booking </span>
                    <span class="theme-text">Availability</span>
                </h1>
            </div>
        </div>
        <br><br><br><br><br><br>


        <div class="container3">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h2 class="mb-4">Check Booking Availability</h2>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">
                                    <h3>Check-in</h3>
                                </label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">
                                    <h3>Check-out</h3>
                                </label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">
                                    <h3>Men</h3>
                                </label>
                                <select class="form-select shadow-none">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight: 500;">
                                    <h3>Women</h3>
                                </label>
                                <select class="form-select shadow-none">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-white custom-bg">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid">
            <div class="heading1">
                <h1 class="text-center mt-5 display-3 fw-bold"><span class="theme-text">Our</span> <span
                        class="theme-text">Services</span></h1>
            </div>
            <hr class="mx-auto mb-5 w-25">
            <br><br><br><br><br><br>
            <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <div class="card shadow">
                        <img src="images/pic7.png" alt="" class="card-img">
                        <div class="card-body">
                            <h3 class="text-center">Hair Care</h3>
                            <hr class="mx-auto w-80">
                            <p>Welcome to our online unisex salon, where you can effortlessly book your next hair care
                                experience! At our salon, we celebrate diversity and provide a welcoming space for all
                                genders.Join us for a seamless and enjoyable experience</p>

                            <a href="haircare.php" class="btn">View More</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <div class="card shadow">
                        <img src="images/pic8.png" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="text-center">Skin Care</h3>
                            <hr class="mx-auto w-80">
                            <p>Welcome to our online unisex salon, where glowing skin is just a click away! Discover the
                                ease of booking your next skincare session with us. Our skilled team is here to pamper
                                your skin with rejuvenating treatments for all genders.</p>

                            <a href="skincare.php" class="btn">View More</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <div class="card shadow">
                        <img src="images/pic5.png" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="text-center">Body Care</h3>
                            <hr class="mx-auto w-80">
                            <p>Welcome to our online unisex salon, where self-care meets simplicity! Embrace a pampering
                                experience for your body with our easy booking system. Our dedicated team offers a range
                                of rejuvenating body care services suitable.</p>

                            <a href="bodycare.php" class="btn">View More</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="heading1">
            <h1 class="text-center mt-5 display-3 fw-bold"><span class="theme-text">Our</span> <span
                    class="theme-text">Facilities</span></h1>
        </div>
        <br><br><br><br><br><br>

        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/pic30.png" width="100px">
                    <h3 class="mt-3">Facial Steamer</h3>
                    <a type="submit" href="facility8.php" class="btn text-white custom-bg me-4">View More</a>
                </div>

                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/pic31.png" width="100px">
                    <h3 class="mt-3">Skin Scanner</h3>
                    <a type="submit" href="facility8.php" class="btn text-white custom-bg me-4">View More</a>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/pic32.png" width="100px">
                    <h3 class="mt-3"> Beauty Beds</h3>
                    <a type="submit" href="facility8.php" class="btn text-white custom-bg me-4">View More</a>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/pic33.png" width="100px">
                    <h3 class="mt-3">Hair Steamers</h3>
                    <a type="submit" href="facility8.php" class="btn text-white custom-bg me-4">View More</a>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/pic34.png" width="100px">
                    <h3 class="mt-3">Beauty Salon Chair</h3>
                    <a type="submit" href="facility8.php" class="btn text-white custom-bg me-4">View More</a>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br>


    <section>
        <div class="my-5 px-4">
            <div class="heading1">
                <h1 class="text-center mt-5 display-3 fw-bold"><span class="theme-text">Reach</span> <span
                        class="theme-text">Us</span></h1>
            </div>
        </div>
        <br><br><br><br><br><br>

        <div class="container5">
            <div class="row">
                <div class="col-lg-5 col-md-5 mb-5 me-3 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <iframe class="w-100 rounded mb-4" height="320px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30141.41094653141!2d73.07898235282278!3d19.209332649442747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7958ef72d8707%3A0x84bf6ab96e280b08!2sDombivli%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1705308675880!5m2!1sen!2sin"></iframe>
                        <h5>Address</h5>
                        <a href="https://maps.app.goo.gl/jAAXtYR6cjLGBgPU8" target="_blank"
                            class="d-inline-block text-decoration-none text-dark mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg> XYZ, Omlar Salon, Dombivli
                        </a>

                        <h5 class="mt-2">Call Us</h5>
                        <a href="tel: +8355806452" class="d-inline-block text-decoration-none text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg> +8355806452
                        </a>
                        <br>
                        <a href="tel: +8355806452" class="d-inline-block text-decoration-none text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg> +9324120499
                        </a>

                        <h5 class="mt-4">Email</h5>
                        <a href="mailto: sawantomkar033@gmail.com"
                            class="d-inline-block text-decoration-none text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                                <path
                                    d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                            </svg> sawantomkar033@gmail.com
                        </a>

                        <h5 class="mt-4">Follow Us</h5>
                        <a href="https://twitter.com/" target="_blank" class="d-inline-block text-dark fs-5 me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg>

                        </a>

                        <a href="https://facebook.com/" target="_blank" class="d-inline-block  text-dark fs-5 me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </a>

                        <a href="https://instagram.com/" target="_blank" class="d-inline-block text-dark fs-5 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <h5 class="text-center">Send a message</h5>
                    <div class="content mt-5">
                        <h2> Unleashing Beauty, One Click at a Time </h2>
                        <p class="mt-4">If, you want to give a feedback....</p>
                        <a href="contact8.php" class="read-more">Click Here</a>
                    </div>
                </div>
            </div>


    </section>






    <footer>
        <div class="footercontainer">
            <div class="socialicons">
                <a href="https://facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://google.com/" target="_blank"><i class="fa-brands fa-google"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footernav">
                <ul>
                    <li><a href="">Quick Links</a></li>
                    <li><a href="">Our Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="index.php">Login</a></li>

                </ul>
            </div>
        </div>
        <div class="footerbottom">
            <p>copyright &copy;2023; Designed by <span class="designer">Omkar Sawant</span></p>
        </div>

    </footer>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <script src="script.js"></script>



</body>

</html>