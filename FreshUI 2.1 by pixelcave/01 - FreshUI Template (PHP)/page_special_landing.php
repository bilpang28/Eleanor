<?php include 'inc/config.php'; // Configuration php file ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $template['title'] ?></title>

        <meta name="description" content="<?php echo $template['description'] ?>">
        <meta name="author" content="<?php echo $template['author'] ?>">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various icon packs and javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
        <?php if ($template['theme']) { ?>
        <link id="theme-link" rel="stylesheet" href="css/themes/<?php echo $template['theme']; ?>.css">
        <?php } ?>

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-respond.min.js"></script>
    </head>
    <body>
        <!-- Header -->
        <header class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Toggle Menu (visible only on small screens) -->
                <ul class="nav header-nav pull-right visible-xs">
                    <li>
                        <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-menu-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Toggle Menu -->

                <!-- Navbar Header -->
                <div class="navbar-header">
                    <a href="page_special_landing.php" class="navbar-brand">
                        <img src="img/template/drop.png" alt="FreshUI">
                        <span><?php echo $template['name']; ?></span>
                    </a>
                </div>
                <!-- END Navbar Header -->

                <!-- Main Menu -->
                <div class="collapse navbar-collapse navbar-right navbar-menu-collapse">
                    <ul id="landing-menu-links" class="nav navbar-nav">
                        <li>
                            <a href="#">Welcome</a>
                        </li>
                        <li>
                            <a href="#features">Features</a>
                        </li>
                        <li>
                            <a href="#pricing">Pricing</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                    </ul>
                </div>
                <!-- END Main Menu -->
            </div>
        </header>
        <!-- END Header -->

        <!-- Intro -->
        <div class="landing-intro">
            <div class="container">
                <div class="jumbotron">
                    <h1 class="animation-pullDown">Fresh<strong>UI</strong></h1>
                    <p class="animation-fadeIn">A professional & flexible admin template!</p>
                    <p class="animation-fadeIn">
                        <a href="index.php" class="btn btn-primary btn-lg">Live Preview</a>
                        <a href="https://1.envato.market/qbN" class="btn btn-success btn-lg">Purchase $19</a>
                    </p>
                </div>
                <p>
                    <i class="fa fa-angle-double-down fa-3x animation-floating"></i>
                </p>
            </div>
        </div>
        <!-- END Intro -->

        <!-- Features -->
        <div id="features" class="landing-section">
            <div class="container">
                <!-- Features Rows -->
                <div class="row gutter30 landing-features">
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="gi gi-fire animation-fadeIn"></i></p>
                        <h3 class="features-title">Bootstrap Powered</h3>
                        <p class="features-text"><a href="http://getbootstrap.com/">Bootstrap</a> is a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. <?php echo $template['name']; ?> was built on top, extending it to a large degree.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="gi gi-iphone_shake animation-fadeIn"></i></p>
                        <h3 class="features-title">Fully Responsive</h3>
                        <p class="features-text">The User Interface will adjust to any screen size. It will look great on mobile devices and on desktops at the same time. No need to worry about the UI, just stay focused on the development.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="fa fa-check-circle-o animation-fadeIn"></i></p>
                        <h3 class="features-title">Retina Ready</h3>
                        <p class="features-text">It will look crispy clear on high resolution screens and at the same time it will serve your high quality images as required.</p>
                    </div>
                </div>
                <div class="row gutter30 landing-features">
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="gi gi-globe_af animation-fadeIn"></i></p>
                        <h3 class="features-title">Cross Browser Support</h3>
                        <p class="features-text"><?php echo $template['name']; ?> will play nice with all modern browsers such as Chrome, Firefox, Safari, Opera and the latest versions of Internet Explorer. In fact, it supports even IE8, so don't worry about losing any customers who stuck with it.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="gi gi-flash animation-fadeIn"></i></p>
                        <h3 class="features-title">Fast & Lightweight</h3>
                        <p class="features-text"><?php echo $template['name']; ?> is not bloated with Jquery plugins and created to be as fast and lightweight as possible. Also, striping out the features you won't use, it is just a matter of seconds.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="gi gi-clock animation-fadeIn"></i></p>
                        <h3 class="features-title">Saves you time</h3>
                        <p class="features-text">Time is of vital importance. <?php echo $template['name']; ?> will save you hundreds of hours of extra development. Start right away coding your functionality and see your project come to life months sooner.</p>
                    </div>
                </div>
                <div class="row gutter30 landing-features">
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="gi gi-claw_hammer animation-fadeIn"></i></p>
                        <h3 class="features-title">PHP &amp; HTML Versions</h3>
                        <p class="features-text">You will get 2 versions, so you can choose the one that fits you best. If you don't prefer PHP and work with other server-side scripting languages such as Ruby, ASP or Python, the HTML version is the best fit.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="gi gi-log_book animation-fadeIn"></i></p>
                        <h3 class="features-title">Documentation Included</h3>
                        <p class="features-text"><?php echo $template['name']; ?> comes packed with a great documentation which covers all the basics to get you familiar with template's structure and files. It is the best way to get started.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="features-icon"><i class="fa fa-code animation-fadeIn"></i></p>
                        <h3 class="features-title">Clean &amp; Commented Code</h3>
                        <p class="features-text">The code is created with the developer in mind. It is clean, easy to follow, easy to replicate and at the same time well commented, so that you never feel lost.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Features -->

        <!-- Blockquote -->
        <div class="landing-blockquote">
            <div class="container">
                <blockquote>
                    <p>Fully Responsive and Retina Ready!</p>
                    <footer>pixelcave</footer>
                </blockquote>
            </div>
        </div>
        <!-- END Blockquote -->

        <!-- Pricing -->
        <div id="pricing" class="landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <table class="table table-borderless table-pricing">
                            <thead>
                                <tr>
                                    <th>Indie</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>1</strong> active project</td>
                                </tr>
                                <tr>
                                    <td><strong>5GB</strong> File Storage</td>
                                </tr>
                                <tr>
                                    <td><strong>20</strong> Clients</td>
                                </tr>
                                <tr>
                                    <td><strong>Forum</strong> Support</td>
                                </tr>
                                <tr>
                                    <td class="table-price">
                                        <h1>$19<br><small>per month</small></h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary">30-Day Free Trial</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">
                        <table class="table table-borderless table-pricing table-featured">
                            <thead>
                                <tr>
                                    <th>Small Team</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>10</strong> active projects</td>
                                </tr>
                                <tr>
                                    <td><strong>20GB</strong> File Storage</td>
                                </tr>
                                <tr>
                                    <td><strong>100</strong> Clients</td>
                                </tr>
                                <tr>
                                    <td><strong>Email</strong> Support</td>
                                </tr>
                                <tr>
                                    <td class="table-price">
                                        <h1>$39<br><small>per month</small></h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-danger">30-Day Free Trial</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">
                        <table class="table table-borderless table-pricing">
                            <thead>
                                <tr>
                                    <th>Business</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>50</strong> active projects</td>
                                </tr>
                                <tr>
                                    <td><strong>100GB</strong> File Storage</td>
                                </tr>
                                <tr>
                                    <td><strong>500</strong> Clients</td>
                                </tr>
                                <tr>
                                    <td><strong>FULL</strong> Support</td>
                                </tr>
                                <tr>
                                    <td class="table-price">
                                        <h1>$99<br><small>per month</small></h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary">30-Day Free Trial</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">
                        <table class="table table-borderless table-pricing">
                            <thead>
                                <tr>
                                    <th>Premium</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>200</strong> active projects</td>
                                </tr>
                                <tr>
                                    <td><strong>500GB</strong> File Storage</td>
                                </tr>
                                <tr>
                                    <td><strong>1000</strong> Clients</td>
                                </tr>
                                <tr>
                                    <td><strong>FULL</strong> Support</td>
                                </tr>
                                <tr>
                                    <td class="table-price">
                                        <h1>$199<br><small>per month</small></h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary">30-Day Free Trial</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pricing -->

        <!-- Blockquote -->
        <div class="landing-blockquote">
            <div class="container">
                <blockquote>
                    <p>PHP &amp; HTML versions are included!</p>
                    <footer>pixelcave</footer>
                </blockquote>
            </div>
        </div>
        <!-- END Blockquote -->

        <!-- About -->
        <div id="about" class="landing-section landing-section-dark">
            <div class="container">
                <div class="row gutter30">
                    <div class="col-sm-6">
                        <h3 class="push">About</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat.</p>
                    </div>
                    <div class="col-sm-3">
                        <h3 class="push">Useful Links</h3>
                        <ul class="fa-ul landing-links">
                            <li><i class="fa fa-users fa-li"></i><a href="javascript:void(0)">The People</a></li>
                            <li><i class="fa fa-building-o fa-li"></i><a href="javascript:void(0)">The Company</a></li>
                            <li><i class="fa fa-briefcase fa-li"></i><a href="javascript:void(0)">Our Projects</a></li>
                            <li><i class="fa fa-envelope-o fa-li"></i><a href="javascript:void(0)">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3 class="push">Members</h3>
                        <ul class="fa-ul landing-links">
                            <li><i class="fa fa-user fa-li"></i><a href="javascript:void(0)">Login</a></li>
                            <li><i class="fa fa-plus fa-li"></i><a href="javascript:void(0)">Register</a></li>
                            <li><i class="fa fa-money fa-li"></i><a href="javascript:void(0)">Affiliate Program</a></li>
                            <li><i class="fa fa-check fa-li"></i><a href="javascript:void(0)">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END About -->

        <!-- Footer -->
        <div class="landing-section">
            <div class="container clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> &copy; <a href="https://1.envato.market/qbN" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a>
                </div>
            </div>
        </div>
        <!-- END Footer -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="javascript:void(0)" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and custom Javascript code -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function(){
                var menuLinks       = $('#landing-menu-links a');
                var animateSpeed    = 350;
                var hashTag         = '';

                menuLinks.on('click', function(){
                    // Get the hash url
                    hashTag = $(this).attr('href');

                    // Animate to the element
                    if (hashTag === '#') {
                        $('html, body').animate({scrollTop: 0}, animateSpeed, function(){ location.hash = ''; });
                    } else {
                        $('html,body').animate({ scrollTop: $(hashTag).offset().top - 50 }, animateSpeed, function(){ location.hash = hashTag; });
                    }

                    return false;
                });
            });
        </script>
    </body>
</html>