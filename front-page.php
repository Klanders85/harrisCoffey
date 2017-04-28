<?php
			/*
				Template Name: html2wp-front-page
			*/

			?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php  wp_title( '|', true, 'right' );  ?>
</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php  bloginfo('template_url');  ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php  bloginfo('template_url');  ?>/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php  bloginfo('template_url');  ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php  wp_head();  ?>
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="<?php  bloginfo('template_url');  ?>/#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="<?php  bloginfo('template_url');  ?>/#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="<?php  bloginfo('template_url');  ?>/#top" onclick='$("#menu-close").click();'>Start Bootstrap</a>
            </li>
            <li>
                <a href="<?php  bloginfo('template_url');  ?>/#top" onclick='$("#menu-close").click();'>Home</a>
            </li>
            <li>
                <a href="<?php  bloginfo('template_url');  ?>/#about" onclick='$("#menu-close").click();'>About</a>
            </li>
            <li>
                <a href="<?php  bloginfo('template_url');  ?>/#services" onclick='$("#menu-close").click();'>Services</a>
            </li>
            <li>
                <a href="<?php  bloginfo('template_url');  ?>/#portfolio" onclick='$("#menu-close").click();'>Portfolio</a>
            </li>
            <li>
                <a href="<?php  bloginfo('template_url');  ?>/#contact" onclick='$("#menu-close").click();'>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <video autoplay playsinline muted loop>
              <source src="<?php  bloginfo('template_url'); ?>/img/droneVideo.mp4" type="video/mp4">
              <source src="<?php  bloginfo('template_url'); ?>/img/droneVideo.webm" type="video/ogg">
            Your browser does not support the video tag.
        </video> 
        <div class="text-vertical-center">
            <h1>HARRIS &amp; COFFEY, PLLC</h1>
            <h3>Oklahoma&rsquo;s Trusted &amp; Proven Legal Partner</h3>
            <br>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Trusted Partners</h2>
                    <p class="lead">As proven and accomplished trial attorneys, Harris & Coffey take a relationship-driven approach to assure our Clients receive the best legal counsel and the best result possible.  Whether it is a settlement or trial, they do whatever it takes in the best interest of their clients</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="practices" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Practice Areas</h2>
                    <hr class="small">
                    <div class="row">
                        <p class="lead"> Harris &amp; Coffey practices in the area of nursing home abuse and negligence, DHS negligence, group-home and intermediate-care-facility negligence, medical malpractice and hospital negligence, bad-faith insurance claims, and automobile and trucking negligence cases.</p>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <img src="<?php  bloginfo('template_url'); ?>/img/Medical.png" alt="">
                                <h4>
                                    <strong>Nursing Home Abuse &amp; Medical Malpractice</strong>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <img src="<?php  bloginfo('template_url'); ?>/img/Insurance.png" alt="">
                                <h4>
                                    <strong>Insurance Claims</strong>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <img src="<?php  bloginfo('template_url'); ?>/img/Trucking.png" alt="">
                                <h4>
                                    <strong>Car &amp; Truck Accidents</strong>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section id="inTheNews" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>In The News</h2>
                    <p class="lead">Harris & Coffey have a track record of proven success. For more than 50-years collectively, they have won multi-million dollar cases time after time. We invite you to <a href="#">learn more and read about</a> some of our recent cases won.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section id="shotCallers">
        <h2>Meet Harris &amp; Coffey</h2>
        <img src="<?php  bloginfo('template_url'); ?>/img/shotCallers.jpg" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h3>Paul Harris</h3>
                    <p>Paul Harris started practicing law in 1997 and in 2002 formed a private law firm with Kevin Coffey. The private law firm was created for the sole purpose of representing wronged and injured Oklahomans and their families. Paul is a proven and accomplished trial attorney. Having successfully tried cases and won multi-million-dollar jury verdicts for his Clients. Ready and willing take his clients&rsquo; cases to trial for resolution if prudent. Unless an attorney has extensive experience trying cases and consistently winning large jury verdicts, it&rsquo;s very unlikely that case will settle for its maximum value. Because of their proven track-record, Harris works to effectively settle cases always in the best interest of their clients.</p>
                    <hr />
                    <h4>Education</h4>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h3>Kevin Coffey</h3>
                    <p>Kevin Coffey started practicing law in 1997 and in 2002 formed a private law firm with Paul Harris. The private law firm was created for the sole purpose of representing wronged and injured Oklahomans and their families. Kevin is a proven and accomplished trial attorney. Having successfully tried cases and won multi-million-dollar jury verdicts for his Clients. Ready and willing take his clients&rsquo; cases to trial for resolution if prudent. Unless an attorney has extensive experience trying cases and consistently winning large jury verdicts, it&rsquo;s very unlikely that case will settle for its maximum value</p>
                    <hr />
                    <h4>Education</h4>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br>
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Harris &amp; Coffey</strong></h4>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li>
<i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li>
<i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="<?php  bloginfo('template_url');  ?>/#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="<?php  bloginfo('template_url');  ?>/#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="<?php  bloginfo('template_url');  ?>/#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a id="to-top" href="<?php  bloginfo('template_url');  ?>/#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="<?php  bloginfo('template_url');  ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php  bloginfo('template_url');  ?>/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

<?php  wp_footer();  ?>
</body>

</html>
