<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Document Title -->
    <title>Contact us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">

    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVollkorn:400,400i,700" rel="stylesheet">


    <?php include 'includes/links.php'; ?>
</head>
<body>
    <!-- Preloader -->
    <?php include 'includes/preloader.php'; ?>
    <!-- End of Preloader -->

        <!-- Header -->
        <?php include 'includes/headerSection.php'; ?>
          <!-- End of Header -->
    <!-- Header -->

    <!-- End of Header -->

    <!-- Page Title -->
    <div class="bizagn--page-title" style="background:url('assets/svg/sent_messages_.svg');background-repeat:no-repeat;background-size:cover;">
        <h2 class="text-dark">Contact Us</h2>
        <p class="text-dark">We are always ready to help us.</p>
        <div class="bizagn--page-bc">
            <ul>
                <li><a href="#">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <!-- End of Page Title -->


    <!-- Contact Info -->
    <section class="pt-120 pb-80">
        <div class="container">
            <div class="row">

                <!-- Contact Info Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="bizagn--contact-info mb-30">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="data">
                            <h3>Email Address</h3>
                            <p>info@eaglesworldschools.com/p>
                            <p>www.eaglesworldglobalschools.com</p>
                        </div>
                    </div>
                </div>
                <!-- End of Contact Info Item -->

                <!-- Contact Info Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="bizagn--contact-info mb-30">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="data">
                            <h3>Phone Number</h3>
                            <p>office: 08029282607</p>
                            <p>mobile: 09092470958</p>
                        </div>
                    </div>
                </div>
                <!-- End of Contact Info Item -->

                <!-- Contact Info Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="bizagn--contact-info mb-30">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="data">
                            <h3>Office Location</h3>
                            <p>
                              Administrative Wing,Eaglesworld <br>
                              Global School,1 Eaglesworld Close,<br>
                              Bashorun Estate, Opposite Fara Park,<br>
                              Majek, Off Lekki-Epe Expressway Ajah, Lagos.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End of Contact Info Item -->

            </div>
        </div>
    </section>
    <!-- End of Contact Info -->

    <!-- Contact form & map -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <!-- Section Title -->
                    <div class="bizagn--section-title">
                        <p>Write To Us</p>
                        <h2>Ask Us Anything <br> We Are Ready...</h2>
                    </div>
                    <!-- End of Section Title -->
                    <!-- Contact Form -->
                    <div class="bizagn--contact-form">
                        <form action="sendmail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="E-mail" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="subject" placeholder="Subject" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Message" class="form-control" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn bizagn--base-btn">
                                        <img src="assets/images/btn-right-arrow.svg" alt="" class="svg left"> Subscribe
                                        <img src="assets/images/btn-right-arrow.svg" alt="" class="svg right">
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="form-response"></div>
                    </div>
                    <!-- End of Contact Form -->
                </div>
                <div class="col-md-6">
                    <!-- Google Map -->
                    <div class="map" data-trigger="map"
                        data-map-options='{"latitude": "40.712776", "longitude": "-74.005974", "zoom": "13"}'>
                    </div>
                    <!-- End of Google Map -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact form & map -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End of Footer -->

    <!-- End of Footer -->

    <!-- Back to Top Button -->
    <div class="back-to-top d-flex align-items-center justify-content-center">
        <span><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- End of Back to Top Button -->

    <!-- JS Files -->
    <?php include 'includes/scripts.php'; ?>

</body>
</html>
