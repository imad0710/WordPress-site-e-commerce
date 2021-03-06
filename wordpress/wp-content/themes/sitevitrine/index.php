<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/sitevitrine/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">

    <link rel="shortcut icon" href="http://localhost/wordpress/wp-content/themes/sitevitrine/image/512px-VR_Logo_Virtual_Reality_Logo.svg-removebg-preview - Copie.png">
    <!--light-slider.css------------->
    <link rel="stylesheet" type="text/css" href="lightslider.css">
    <!--Jquery-------------------->
    <script type="text/javascript" src="js/Jquery.js"></script>
    <!--lightslider.js--------------->
    <script type="text/javascript" src="js/lightslider.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="js/three.min.js"></script>
    <script src="js/panolens.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"> </script>


    <title>Vr Company</title>
</head>

<body>

    <header>
        <video loop autoplay muted>
            <source src="http://localhost/wordpress/wp-content/themes/sitevitrine/http://localhost/wordpress/wp-content/themes/sitevitrine/image/video_clipped.MP4" type="video/mp4">
        </video>
        <div class="container">
            <nav class="flex items-center justify-between">

                <div class="left flex items-center justify-between">

                    <div class="branding">
                        <img src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/512px-VR_Logo_Virtual_Reality_Logo.svg-removebg-preview - Copie.png" style="width:70px ;">
                    </div>

                    <div>
                        <a href="#Home">Home</a>
                        <a href="#about">Company</a>
                        <a href="#services">service</a>
                        <a href="#Products">Products</a>

                    </div>


                </div>

                <div id="Home" class="right">
                    <button class="submit">Contact Us</button>
                </div>


            </nav>
            <div class="hero flex ">

                <div class="left">
                    <img src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/girl.png">
                </div>


                <div class="right justify-between " style="margin-top: 70px;">
                    <h1 class="ml15">
                        <div>I <span class="typing"></span></div>
                    </h1>
                    </br>
                    <h3>For a Different life Experience You can see the magic </h3>

                    <br>
                    <p>
                        Virtual reality is now more realistic than ever, not just the games you can play at home. Plug into alternate worlds where you duck fire-breathing dragons on a rollercoaster, soar like a bird through NYC and more</p>
                    <br>
                    <div><button class="submit" class="submit" data-toggle="modal" data-target="#exampleModal">Get Touch</button>

                    </div>



                </div>
            </div>


        </div>
    </header>





    <section id="about" class="about">
        <div class="container flex items-center">

            <div>
                <h1>Our <span>Company</span></h1>
                <p>Our company was founded
                    by ambitious friends, and
                    our choice of this product is to keep up
                    with the future and its requirements, and
                    we want to give you the best experience
                    about the virtual world. You can start a journey.</p>
            </div>
            <div>
                <img class="about-me-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/ezgif.com-video-to-gif__1_.gif" style="width:500PX; ">
            </div>


        </div>
    </section>


    <!-- product -->
    <center>
        <h1 style="margin-left:20px ;">Popular <span>product</span></h1>
    </center>
    <hr style="width: 300px;  margin-left: 600px;">
    <br><br>

    <section id="Products" class="slider">
        <ul id="autoWidth" class="cs-hidden">
            <!--1------------------------------------>
            <li class="item-a">
                <!--box-slider--------------->
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement.jpg">
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>


                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">VIVE Pro
                            </a>
                            <span>Professional-Grade VR Plus 2 Pro
                            </span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">???1,490.00</a>


                    </div>

                </div>
            </li>
            <!--2------------------------------------>
            <li class="item-b">
                <!--box-slider--------------->
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="2" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (1).webp">
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#"> VIVE Cosmos
                            </a>
                            <span>Versatile VR for Enterprise
                            </span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">???1,100.00</a>


                    </div>

                </div>
            </li>
            <!--3------------------------------------>
            <li class="item-c">
                <!--box-slider--------------->
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="3" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/Capture d?????cran (64).png">
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">VIVE Focus Plus
                            </a>
                            <span>Advanced All-In-One VR
                            </span>


                            <!--price-------->
                            <a href="#" class="price">???160.00</a>

                        </div>

                    </div>
            </li>

            <!--4------------------------------------>
            <li class="item-e">
                <!--box-slider--------------->
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="5" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/Capture d?????cran (65).png">
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">VIVE Pro Eye Office
                            </a>
                            <span>Pro-Grade VR with Eye Tracking
                            </span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">???800.00 </a>

                    </div>

                </div>
            </li>


        </ul>
    </section>


    <div class=" content2 flex justify-between items-center  ">
        <center>
            <h1> Gear up for your VIVE adventures NOW
            </h1>
        </center>
    </div>

    <!-- ACCESSOIRE -->
    <section class="Accssoir section bd-container flex justify-between items-center " id="Accessoir">



        <div class="Accssoir__container  bd-grid">
            <center>
                <h2 class="section-title"><span>ACCESSOIRE</span> </h2>
            </center>
            <hr style="width: 300px;  margin-left: 600px;">
            <center>
                <h1>Cosmos Series</h1>
            </center>
            <br>
            <div style="margin-left: 160px;" class="Accssoir__content2">
                <img class="accesoir-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (5).webp">
                <h3 class="services__title">VIVE Cosmos Cool Gasket</h3>
                <br>
                <h6 class="services__title"><span>???69.00</span></h6>


            </div>

            <div style="margin-left: 100px;" class="Accssoir__content2">
                <img class="accesoir-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (6).webp">

                <h3 class="services__title">VIVE Cosmos External Tracking Faceplate</h3>
                <br>
                <h6 class="services__title"><span>???219.00</span></h6>

            </div>

            <div style="margin-left: 100px;" class="Accssoir__content2" style="	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);">
                <img class="accesoir-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (7).webp">

                <h3 class="services__title">VIVE Cosmos Controller (R)</h3>
                <br>
                <h6 class="services__title"><span>???119.00</span></h6>

            </div>

            <div style="margin-left: 160px;" class="Accssoir__content2" style="	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);">
                <img class="accesoir-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (8).webp">

                <h3 class="services__title">Cosmos Motion Faceplate</h3>
                <br>
                <h6 class="services__title"><span>???219.00</span></h6>
            </div>

            <div style="margin-left: 100px;" class="Accssoir__content2" style="	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);">
                <img class="accesoir-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (9).webp">

                <h3 class="services__title">Power Bank (21W)</h3>
                <br>
                <h6 class="services__title"><span>???59.00</span></h6>

            </div>

            <div style="margin-left: 100px;" class="Accssoir__content2" style="	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);">
                <img class="accesoir-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (10).webp">


                <h3 class="services__title">Tracker </h3>
                <br>
                <h6 class="services__title"><span>???199.00</span></h6>


            </div>


            <div style="margin-left: 160px;" class="Accssoir__content2" style="	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);">
                <img class="accesoir-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (11).webp">

                <h3 class="services__title">Controller (2018)</h3>
                <br>
                <h6 class="services__title"><span>???218.00</span></h6>

            </div>


            <div style="margin-left: 100px;" class="Accssoir__content2" style="	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);">
                <img class="accesoir-img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/t??l??chargement (12).webp">

                <h3 class="services__title">Wireless Adapter Full Pack</h3>
                <br>
                <h6 class="services__title"><span>???409.00</span></h6>

            </div>

        </div>
    </section>


    <div class=" content flex justify-between ">
        <h1>Enjoy with your friend</h1>
    </div>

    <!-- SERVICES -->

    <section class="services section bd-container " id="services" style="margin-top: 0px;">


        <br>

        <div class="services__container  bd-grid">
            <center>
                <h2 class="section-title">Our <span>services</span> </h2>
            </center>
            <hr style="width: 300px;  margin-left: 600px;">
            <div class="services__content">

                <img class="services__img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/output-onlinepngtools (14).png">
                <h3 class="services__title">PREMIUM SERVICE</h3>
            </div>

            <div class="services__content">
                <img class="services__img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/output-onlinepngtools (15).png">

                <h3 class="services__title">EXPEDITED REPAIR AND RETURN</h3>

            </div>

            <div class="services__content" style="	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);">
                <img class="services__img" src="http://localhost/wordpress/wp-content/themes/sitevitrine/image/output-onlinepngtools (17).png">


                <h3 class="services__title">TWO-YEAR COMMERCIAL WARRANTYy</h3>

            </div>
        </div>

    </section>


    <!-- contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-heading">
                <h3>Contact <span>us</span></h3>

                <hr style="width: 300px;  margin-left: 500px;">

            </div>
            <div class="contact-grids">
                <div class=" col-md-6 contact-form">
                    <form action="#" method="post">
                        <input type="text" placeholder="Subject" required="" />
                        <input type="text" placeholder="Your name" required="" />
                        <input type="email" placeholder="Your mail" required="" />
                        <textarea placeholder="Message" required=""></textarea>
                        <br> <br><br>
                        <div class="submit1"><button type="submit" class="submit" onclick="sendEmail()" value="submit"> Get Touch</button></div>
                    </form>
                </div>
                <div class=" col-md-6 map">
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/d/embed?mid=1m2z1uU3Uu3diEo1d0vS47k114s8&msa=0&hl=fr&ie=UTF8&t=m&ll=35.460670000000015%2C-5.646972999999998&spn=3.131789%2C4.669189&z=7&output=embed" allowfullscreen></iframe>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>


    <!-- footer -->
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Our company was founded
                        by ambitious friends, and
                        our choice of this product is to keep up
                        with the future and its requirements, and
                        we want to give you the best experience
                        about the virtual world. You can start a journey.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6> New Products</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">Viva pro</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">VIVE Cosmos 2</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">VIVE Pro plus 2</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">ViVa pro plus 1</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6> Links Content</h6>
                    <ul class="footer-links">
                        <nav>


                            <a href="#Home">Home</a>
                            <a href="#about">Company</a>
                            <a href="#services">service</a>
                            <a href="#Products">Products</a>
                    </ul>
                    </nav>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                        <a href="#">IZIMD</a>.
                    </p>
                </div>


            </div>
        </div>
    </footer>





    <!--script-link----------->
    <script type="text/javascript" src="js/script.js">



    </script>

    <!-- send mail -->
    <script type="text/javascript">
        function sendEmail() {
            Email.send({
                    Host: "smtp.gmail.com",
                    Username: "izikaoutar@gmail.com",
                    Password: "",
                    To: 'izikawthar@gmail.com',
                    From: "izikaoutar@gmail.com",
                    Subject: "Sending Email using javascript",
                    Body: "Well that was easy!!",
                })
                .then(function(message) {
                    alert("mail sent successfully")
                });
        }
    </script>


    <script>
        var typed = new Typed(".typing", {
            strings: ["ZI MD", ],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
        });
    </script>

</body>

</html>
<?php get_footer() ?>