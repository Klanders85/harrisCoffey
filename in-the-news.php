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
    <a id="menu-toggle" href="<?php  bloginfo('template_url');  ?>/#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="<?php  bloginfo('template_url');  ?>/#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/in-the-news">In The News</a>
            </li>
            <li>
                <a href="/practices">Practices</a>
            </li>
        </ul>
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="col-sm-12 text-center">
    			<h1>In The News</h1>
    		</div>
    	</div>
    	<div class="content-section row text-center">
    		<div class="col-sm-12 col-md-6">
    			<img src="http://placehold.it/300x300" alt="" />
    		</div>
    		<div class="content-section col-sm-12 col-md-6">
	    		<div class="col-sm-12 text-center">
	    			<h3>Google It!</h3>
	    		</div>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error a rem inventore magnam odio dolorem et accusamus cum earum nisi, iure obcaecati, reiciendis odit eligendi dolorum animi asperiores praesentium adipisci.</p>
    			<a href="#" class="btn btn-primary">Read More</a>
    		</div>
    	</div>
		<div class="content-section row text-center">
			<div class="col-sm-12 col-md-6">
				<div class="col-sm-12 text-center">
	    			<h3>Holy Cow!</h3>
	    		</div>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error a rem inventore magnam odio dolorem et accusamus cum earum nisi, iure obcaecati, reiciendis odit eligendi dolorum animi asperiores praesentium adipisci.</p>
    			<a href="#" class="btn btn-primary">Read More</a>
    		</div>
    		<div class="content-section col-sm-12 col-md-6">
    			<img src="http://placehold.it/300x300" alt="" />
    		</div>
    	</div>
    	<div class="content-section row text-center">
    		<div class="col-sm-12 col-md-6">
    			<img src="http://placehold.it/300x300" alt="" />
    		</div>
    		<div class="col-sm-12 col-md-6">
	    		<div class="col-sm-12 text-center">
	    			<h3>Roe vs Wade</h3>
	    		</div>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error a rem inventore magnam odio dolorem et accusamus cum earum nisi, iure obcaecati, reiciendis odit eligendi dolorum animi asperiores praesentium adipisci.</p>
    			<a href="#" class="btn btn-primary">Read More</a>
    		</div>
    	</div>
    </div>

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