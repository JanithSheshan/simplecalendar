<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="TemplateMo">

        <title>Simple Calendar</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        
        <link href="css/magnific-popup.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="index.php" class="navbar-brand mx-5 lg-4">Simple Calendar</a>


                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Guide Lines</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=""></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=""></a>
                        </li>

                    </ul>

                    <div class="navbar-nav ms-lg-5">
                        <a class="custom-btn btn" href="login.php">
                            Login
                        </a>
                    </div>
                </div>

            </div>
        </nav>

        <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <div class="hero-text">
                                <div class="hero-title-wrap d-flex align-items-center mb-4">
                                    <img src="images/user.png" class="avatar-image avatar-image-large img-fluid" alt="">

                                    <h2 class="hero-title ms-3 mb-0">Hi Friends...</h2>
                                </div>

                                <h3 class="text-white mb-4">This is the Simple Calendar for Manage your Valuable TIME</h3>
                                <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Let's begin</a></p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 position-relative">
                            <div class="hero-image-wrap"></div>
                            <img src="images/calendar.gif" class="hero-image img-fluid" alt="">
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="images/desk-calendar.png" class="about-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h4 class="text-white me-0 mb-0">Simple Calendar</h4>
                                </div>

                                <h3 class="pt-2 mb-3">a little bit about Calendar</h3>

                                <p>The product must be open source under the GNU General Public License. It is a web-based system that implements the client-server model. The simple calendar system provides a simple mechanism for users to manage their time and events.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="profile-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Developers Information</h4>
                                </div>

                                <div class="profile-body">
                                    <p>
                                        <span class="profile-small-title">Project name</span> 
                                        <span>Simple Calendar Website</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Launch date</span> 
                                        <span>Dec 12, 2022</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Happy users</span> 
                                         <span>20+</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Contact Email</span> 
                                        <span><a href="">exaple@gmail.com</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <h5 class="">Janith Sheshan Aththanayaka</h5>

                                        <p class="featured-text">undergraduate @SLTC</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <h5 class="">K H Theeshya Dilshan</h5>

                                        <p class="featured-text">undergraduate @SLTC</p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <h5 class="">B B T Oshadhi Wickramasighe</h5>

                                        <p class="featured-text">undergraduate @SLTC</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5 class="">D G Samandika Rathna Kumara</h5>

                                        <p class="featured-text">undergraduate @SLTC</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                <img src="" class="" alt="">

                                <h4 class="text-white ms-4 mb-0">Guide Lines</h4>
                            </div>

                            <div class="row pt-lg-5">
                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Register & Login</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">1st Step</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>If you want to work on this calendar, you need to login to the system. If you don't have an account, you can register first.</p>

                                        <a href="login.php" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi bi-file-earmark-person"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Add Event</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">2nd Step</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>After login, fill the "add event" form correctly and you can add an event.</p>

                                        <a href="login.php" class="custom-btn custom-border-btn btn mt-3">1st Login</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi bi-calendar2-check"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Edit or Delete</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">3rd</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>After adding an event, you can edit or delete it with one click.</p>

                                        <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi bi-wrench"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Holidays</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">4th</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>You can manage your holidays manually, you cannot add an event to the holiday.</p>

                                        <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi bi-shield-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="contact section-padding" id="section_4">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-md-8 col-12">
                                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                    <h4 class="text-white ms-4 mb-0">Contact Us</h4>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                                <div class="contact-info contact-info-border-start d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">Check Guide Lines</strong>

                                    <ul class="footer-menu">
                                        <li class="footer-menu-item"><a href="#section_3" class="footer-menu-link">Login & Register</a></li>

                                        <li class="footer-menu-item"><a href="#section_3" class="footer-menu-link">Add Event</a></li>

                                        <li class="footer-menu-item"><a href="#section_3" class="footer-menu-link">Edit / Delete</a></li>

                                        <li class="footer-menu-item"><a href="#section_3" class="footer-menu-link">Holidays</a></li>
                                    </ul>

                                    
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                                <div class="contact-info d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">Address</strong>

                                    <p class="mb-2">
                                        Colombo, Sri Lanka.
                              </p>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                                    <p>
                                        <a href="">
                                            example@gmail.com
                                        </a>
                                    </p>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                                    <p class="mb-0">
                                        <a href="">
                                            +94 71 xxx xx xx
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                                <form action="#" method="get" class="custom-form contact-form" role="form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                                
                                                <label for="floatingInput">Name</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12"> 
                                            <div class="form-floating">
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                                
                                                <label for="floatingInput">Email address</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                                
                                                <label for="floatingTextarea">A small description of your ideas or problems</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-12 ms-auto">
                                            <button type="submit" class="form-control">Send</button>
                                        </div>

                                    </div>
                                </form>
                                <strong class="site-footer-title d-block ">Stay connected</strong>

                                    <ul class="social-icon">
                                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-twitter"></a></li>

                                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>

                                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-youtube"></a></li>
                                    </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">
                                <span class="copyright-text">Copyright © 2022 <a href="#"></a> All rights reserved.</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
