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

    <!-- Header -->
    <header id="top" class="header">
        <div class="row">
            <div class="col-sm-6">
                <h3>Harris &amp; Coffey, PLLC.</h3>
                <h4>(405) 123-4567</h4>
            </div>
        </div>
        <!-- Navigation -->
        <a id="menu-toggle" href="<?php  bloginfo('template_url');  ?>/#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="<?php  bloginfo('template_url');  ?>/#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="/harrisCoffey/">Home</a>
                </li>
               <li>
                    <a href="<?php  bloginfo('template_url');  ?>/in-the-news">In The News</a>
                </li>
                <li>
                    <a href="<?php  bloginfo('template_url');  ?>/practices">Practices</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="videoBackground">
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
    </div>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Trusted Partners</h2>
                    <p class="lead"><?php echo the_field('value_proposition_text'); ?></p>
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
                        <p class="lead"><?php echo the_field('practice_copy'); ?></p>

                            <!-- check if the repeater field has rows of data -->
                            <?php  if( have_rows('practice_area') ): ?>
                            <!-- loop through the rows of data -->
                            <?php  while ( have_rows('practice_area') ) : the_row(); ?>        
                                    <!-- display a sub field value -->
                            <div class="col-md-4 col-sm-6">
                                <div class="service-item">
                                    <img src="<?php echo the_sub_field('practice_image'); ?>" alt="">
                                    <h4>
                                        <strong><?php echo the_sub_field('practice_type_name'); ?></strong>
                                    </h4>
                                </div>
                            </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                
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
                    <p class="lead"><?php echo the_field('in_the_news_copy'); ?></p>
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
                <div class="col-sm-12">
                    <h3>Paul Harris</h3>
                    <p>Paul Harris started practicing law in 1997 and in 2002 formed a private law firm with Kevin Coffey. The private law firm was created for the sole purpose of representing wronged and injured Oklahomans and their families. Paul is a proven and accomplished trial attorney. Having successfully tried cases and won multi-million-dollar jury verdicts for his Clients. Ready and willing take his clients&rsquo; cases to trial for resolution if prudent. Unless an attorney has extensive experience trying cases and consistently winning large jury verdicts, it&rsquo;s very unlikely that case will settle for its maximum value. Because of their proven track-record, Harris works to effectively settle cases always in the best interest of their clients.</p>
                    <hr />

                    <h3>Kevin Coffey</h3>
                    <p>Kevin Coffey started practicing law in 1997 and in 2002 formed a private law firm with Paul Harris. The private law firm was created for the sole purpose of representing wronged and injured Oklahomans and their families. Kevin is a proven and accomplished trial attorney. Having successfully tried cases and won multi-million-dollar jury verdicts for his Clients. Ready and willing take his clients&rsquo; cases to trial for resolution if prudent. Unless an attorney has extensive experience trying cases and consistently winning large jury verdicts, it&rsquo;s very unlikely that case will settle for its maximum value</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="600" src="https://www.maps.ie/create-google-map/map.php?width=100%&amp;height=600&amp;hl=en&amp;coord=35.471801,-97.5216567&amp;q=435%20N%20Walker%20Ave%20%23202%20%09%09Oklahoma%20City%2C%20OK%2073102+(Harris%20%26%20Coffey%2C%20LLC)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/fr/mesurer-distance-surface-google-maps.html">Mesurer distance avec Google Maps</a></iframe><br />
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Harris &amp; Coffey</strong></h4>
                    <p>435 N Walker Ave #202  Oklahoma City, OK 73102</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (405)606-7444</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:inquiry@harrisandcoffey.com">inquiry@harrisandcoffey.com</a></li>
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
