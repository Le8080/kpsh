<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110542988-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-110542988-1');
        </script>
        <meta charset="utf-8">
        <title>Kapeshare - Powered by Kapemug</title>
        <meta name="description" content="Kapeshare, easily upload and share your files" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="<?php echo assets();?>css/style.css" />
        <link rel="stylesheet" href="<?php echo assets();?>css/login_signup.css" />
    </head>

    <body>
        <!--header-->
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top sticky-navigation">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-grid icon-sm"></span>
            </button>
            <a class="navbar-brand hero-heading" href="#">KAPEMUG</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link page-scroll" href="#signin">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--main section-->
        <section class="bg-texture hero" id="main">
            <div class="container">
                <div class="row d-md-flex brand">
                    <div class="col-md-6 hidden-sm-down wow fadeIn">
                        <img class="img-fluid mx-auto d-block" src="img/share.png" />
                    </div>
                    <div class="col-md-6 col-sm-12 text-white wow fadeIn">
                        <h2 class="pt-4">Secure <b class="text-primary-light">Share </b> with Kapeshare</h2>
                        <p class="mt-5">
                            Manage your files and share it to your trusted users.
                        </p>
                        <p class="mt-5">
                            <a href="#signin" class="btn btn-primary mr-2 mb-2 page-scroll">Sign Up</a>
                            <a href="#features" class="btn btn-white mb-2 page-scroll">Features</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--features-->
        <section class="bg-faded" id="features">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center wow fadeIn">
                        <h2 class="text-primary">Amazing Features</h2>
                        <p class="lead mt-4">
                            Easily share your resources <br/>to restricted people.
                        </p>
                    </div>
                </div>
                <div class="row mt-5 text-center">
                    <div class="col-md-4 wow fadeIn">
                        <div class="card">
                            <div class="card-block">
                                <div class="icon-box">
                                    <em class="ion-social-google -b-outline icon-md"></em>
                                </div>
                                <h6>Google Social</h6>
                                <p>
                                    Allow Google users to view and or manage your files
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn">
                        <div class="card">
                            <div class="card-block">
                                <div class="icon-box">
                                    <em class="ion-social-facebook icon-md"></em>
                                </div>
                                <h6>Facebook Community</h6>
                                <p>
                                    Let facebook authenticate your viewers and form a group.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn">
                        <div class="card">
                            <div class="card-block">
                                <div class="icon-box">
                                    <em class="ion-ios-settings icon-md"></em>
                                </div>
                                <h6>Advanced Rate Control</h6>
                                <p>
                                    Control you file based on advance configuration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn">
                        <div class="card">
                            <div class="card-block">
                                <div class="icon-box">
                                    <em class="ion-ios-cloud-upload-outline icon-md"></em>
                                </div>
                                <h6>Unlimited Cloud Storage</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn">
                        <div class="card">
                            <div class="card-block">
                                <div class="icon-box">
                                    <em class="ion-ios-locked-outline icon-md"></em>
                                </div>
                                <h6>Highly Secure</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn">
                        <div class="card">
                            <div class="card-block">
                                <div class="icon-box">
                                    <em class="ion-android-notifications icon-md"></em>
                                </div>
                                <h6>Get Notified</h6>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-alt p-0">
            <div class="container-fluid">
                <div class="row d-md-flex mt-5">
                    <div class="col-sm-6 p-0 wow fadeInLeft">
                        <img class="img-fluid" src="img/sharinicons.png" alt="Gallery">
                    </div>
                    <div class="col-sm-6 pl-5 pr-5 pt-5 pb-4 wow fadeInRight">
                        <h3><a href="#">What makes Kapeshare Different?</a></h3>
                        <p class="lead pt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <ul class="pt-4 pb-3 list-default">
                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li>Aenean commodo ligula eget dolor.</li>
                            <li>Aenean massa.</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li>Aenean commodo ligula eget dolor.</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                        </ul>
                        <a href="#signin" class="btn btn-primary mr-2 page-scroll">Get Started with Kapeshare</a>
                    </div>
                </div>
            </div>
        </section>

        <!--pricing-->
        <section class="bg-faded" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center">
                        <h2 class="text-primary">Pricing</h2>
                        <p class="lead pt-3">
                            <em class="ion-heart"></em> Enjoy kapeshare till it's free <em class="ion-heart"></em>
                        </p>
                    </div>
                </div>
                <div class="row d-md-flex mt-4 text-center">
                    <div class="col-sm-4 mt-4 wow fadeIn">
                        <div class="card">
                            <div class="card-block">
                                <h5 class="card-title pt-4 text-orange">Basic</h5>
                                <h3 class="card-title text-primary pt-4">FREE</h3>
                                <p class="card-text text-muted pb-3 border-bottom">per month</p>
                                <ul class="list-unstyled pricing-list">
                                    <li>Free setup</li>
                                    <li>100MB storage</li>
                                    <li>Basic support</li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-radius">Sign up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-0 wow fadeIn">
                        <div class="card pt-4 pb-4">
                            <div class="card-block">
                                <h5 class="card-title pt-4 text-orange">Standard
                                    <!--<small class="badge bg-primary small-xs">Popular</small>--></h5>
                                <h3 class="card-title text-primary pt-4"><sup>$</sup> <em class="ion-happy"></em> </h3>
                                <p class="card-text text-muted pb-3 border-bottom">per month</p>
                                <ul class="list-unstyled pricing-list">
                                    <li>Free setup</li>
                                    <li>5GB storage</li>
                                    <li>Priority support</li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-radius">Sign up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4 wow fadeIn">
                        <div class="card">
                            <div class="card-block">
                                <h5 class="card-title pt-4 text-orange">Advanced</h5>
                                <h3 class="card-title text-primary pt-4"><sup>$</sup> <em class="ion-happy"></em></h3>
                                <p class="card-text text-muted pb-3 border-bottom">per month</p>
                                <ul class="list-unstyled pricing-list">
                                    <li>Free setup</li>
                                    <li>Unlimited storage</li>
                                    <li>24/7 support</li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-radius">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--download-->
        <section class="bg-orange pt-0" id="download">
            <div class="container">
                <div class="row d-md-flex text-center wow fadeIn">
                    <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1 col-xs-12">
                        <h5 class="text-primary">SOON ON </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet.
                        </p>
                        <p class="mt-5">
                            <a href="#" class="mr-2"><img src="img/google-play.png" class="store-img" /></a>
                            <a href="#"><img src="img/apple_store.png" class="store-img" /> </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--Sign in-->
        <?php $this->view('login/form'); ?>


        <!--contact-->
        <section class="bg-texture-collage p-0" id="contact">
            <div class="container">
                <div class="row d-md-flex text-white text-center wow fadeIn">
                    <!-- <div class="col-sm-4 p-5">
                        <p><em class="ion-ios-telephone-outline icon-md"></em></p>
                        <p class="lead">+1 5456 87595</p>
                    </div> -->
                    <div class="col-sm-6 p-5">
                        <p><em class="ion-ios-email-outline icon-md"></em></p>
                        <p class="lead">info@kapemug.com</p>
                    </div>
                    <div class="col-sm-6 p-5">
                        <p><em class="ion-ios-location-outline icon-md"></em></p>
                        <p class="lead">Clark, Philippines</p>
                    </div>
                </div>
            </div>
        </section>

        <!--footer-->
        <section class="bg-footer" id="connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center wow fadeIn">
                        <h1>Kapeshare</h1>
                        <p class="mt-4">
                            <a href="https://twitter.com/" target="_blank"><em class="ion-social-twitter text-twitter-alt icon-sm mr-3"></em></a>
                            <a href="https://facebook.com/" target="_blank"><em class="ion-social-github text-facebook-alt icon-sm mr-3"></em></a>
                            <a href="https://www.linkedin.com/" target="_blank"><em class="ion-social-linkedin text-linkedin-alt icon-sm mr-3"></em></a>
                            <a href="https://plus.google.com/" target="_blank"><em class="ion-social-googleplus text-google-alt icon-sm mr-3"></em></a>
                        </p>
                        <p class="pt-2 text-muted">
                            &copy;
                            <?php echo date('Y');?> Kapemug
                            <a href="https://kapemug.com">your solutions</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="<?php echo assets();?>js/scripts.js"></script>
        <script src="<?php echo assets();?>js/login_signup.js"></script>
    </body>

</html>