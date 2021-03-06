<?php
/*
	Template Name: in-the-news
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

    <title><?php  wp_title( '|', true, 'right' );  ?></title>

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
</head>
<body id="in-the-news">
	<!-- Navigation -->
    <!-- Header -->
    <header id="top" class="itn-header">
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
                    <a href="<?php  bloginfo('template_url');  ?>/">Home</a>
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

    <div class="container">
    	<div class="row">
    		<div class="col-sm-12 text-center">
    			<h1>IN THE NEWS</h1>
    		</div>
    	</div>

    <!-- custom field here // section1 -->
        <!-- check if the repeater field has rows of data -->
        <?php  if( have_rows('itn_section1') ): ?>
        <!-- loop through the rows of data -->
            <?php  while ( have_rows('itn_section1') ) : the_row(); ?>        
                <!-- display a sub field value -->
                <div class="content-section row text-center section">
                    <div class="col-sm-12 col-md-6">
                        <img src="<?php echo the_sub_field('image'); ?>" alt="" />
                    </div>
                    <div class="content-section col-sm-12 col-md-6">
                        <div class="col-sm-12 text-center">
                            <h3><?php echo the_sub_field('header'); ?></h3>
                        </div>
                        <p><?php echo the_sub_field('copy'); ?></p>
                        <a href="<?php echo the_sub_field('button_url'); ?>" class="btn btn-primary"><?php echo the_sub_field('button_text'); ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        

    <!-- custom field #2 here // section2 -->
        <!-- check if the repeater field has rows of data -->
        <?php  if( have_rows('itn_section2') ): ?>
        <!-- loop through the rows of data -->
            <?php  while ( have_rows('itn_section2') ) : the_row(); ?>        
                <!-- display a sub field value -->
                <div class="content-section row text-center section">
                    <div class="content-section col-sm-12 col-md-6">
                        <div class="col-sm-12 text-center">
                            <h3><?php echo the_sub_field('header'); ?></h3>
                        </div>
                        <p><?php echo the_sub_field('copy'); ?></p>
                        <a href="<?php echo the_sub_field('button_url'); ?>" class="btn btn-primary"><?php echo the_sub_field('button_text'); ?></a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img src="<?php echo the_sub_field('image'); ?>" alt="" />
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    <!-- custom field #3 here // section3 -->
        <!-- check if the repeater field has rows of data -->
        <?php  if( have_rows('itn_section3') ): ?>
        <!-- loop through the rows of data -->
            <?php  while ( have_rows('itn_section3') ) : the_row(); ?>        
                <!-- display a sub field value -->
                <div class="content-section row text-center section">
                    <div class="col-sm-12 col-md-6">
                        <img src="<?php echo the_sub_field('image'); ?>" alt="" />
                    </div>
                    <div class="content-section col-sm-12 col-md-6">
                        <div class="col-sm-12 text-center">
                            <h3><?php echo the_sub_field('header'); ?></h3>
                        </div>
                        <p><?php echo the_sub_field('copy'); ?></p>
                        <a href="<?php echo the_sub_field('button_url'); ?>" class="btn btn-primary"><?php echo the_sub_field('button_text'); ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    <!-- custom field #4 here // section4 -->
        <!-- check if the repeater field has rows of data -->
        <?php  if( have_rows('itn_section4') ): ?>
        <!-- loop through the rows of data -->
            <?php  while ( have_rows('itn_section4') ) : the_row(); ?>        
                <!-- display a sub field value -->
                <div class="content-section row text-center section">
                    <div class="content-section col-sm-12 col-md-6">
                        <div class="col-sm-12 text-center">
                            <h3><?php echo the_sub_field('header'); ?></h3>
                        </div>
                        <p><?php echo the_sub_field('copy'); ?></p>
                        <a href="<?php echo the_sub_field('button_url'); ?>" class="btn btn-primary"><?php echo the_sub_field('button_text'); ?></a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img src="<?php echo the_sub_field('image'); ?>" alt="" />
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
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
    </script>
</body>	
</html>