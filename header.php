<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<meta name="description" content="">
	<meta name="author" content="Dan Arpoika">

	<title><?php echo get_bloginfo('title') . ' - ' . get_bloginfo('description'); ?></title>	
	<link href="<?php bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<link rel="icon" type="image/svg+xml" href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/logo-blue.svg">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/logo-blue.svg">
  	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
<style>
#sembit-loader {
background-color: #FFFFFF;
background-size: cover;
position: fixed;
left: 0px;
top: 0px;
width: 100%;
height: 100vh;
min-height: 100%;
max-width: 100%;
height: 100%;
z-index: 9999;  
display: block;
}
#sembit-loader .content  {
	background: url('<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/loader.svg') no-repeat;
	max-width: 120px;
	height: 140px;
	margin: auto;
	position: relative;
	top: calc(50% - 100px);
	display: block;
}
.st0 {
  animation: kaboom 5s ease alternate infinite;
}
@keyframes kaboom {
  90% {
    transform: scale(1.0);
  }
  100% {
    transform: scale(1.1);
  }
}
@keyframes hideshow {
  0% { opacity: 1; }
  10% { opacity: 1; }
  15% { opacity: 0; }
  100% { opacity: 0; }
} 
</style>
<script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script>
	$(window).on('load', function() {
		$('#sembit-loader').fadeOut('slow');
	});
</script>
</head>

<body>
<div id="sembit-loader"><div class="content"></div>

</div>


<!-- Navigation -->
<div id="nav" clas="add_shadow">
	<div class="container">
    	<div class="row no-margin">
	        <div class="large-2 columns left">
	        	<img class="svg logo-header" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/logo-header.svg">
	        </div>
	        <div class="large-10 columns">
	        	<ul class="nav-links">
          			<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s')); ?>
          		</ul>
        	</div>
      	</div>
    </div>
</div>

<!-- Mobile Navigation -->
<div id="mobile-nav-bar" class="add_shadow">
  <div class="row">
    <div class="small-6 medium-6 columns">
      <a href="#"><img class="svg logo-header" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/logo-header.svg"></a>
    </div>
    <div class="small-6 medium-6 columns right">
      <a id="show-mobile-nav" href="#">
        <i class="fa fa-bars"></i> 
      </a>
    </div>
  </div>
</div>


<!-- Slide In Nav -->
<div class="mobile-nav" id="mobile-nav">
   <div class="row">
      <div class="large-12 columns">
        <a id="show-mobile-nav" href="#">
          <i class="fa fa-bars"></i> 
        </a>
      </div>
   </div>
   
   <div class="row">
      <div class="large-12 columns">
         <ul class="mobile-nav-links">
            <li class="header">Navigation</li>
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s')); ?>
        </ul>
      </div>
   </div>
</div>