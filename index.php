<?php get_header(); ?>

<!-- Header -->
<div id="header" class="full">
	<div id="header-content" class="container">
    	<div class="row">
	        <div class="large-4 small-12 medium-8 columns end left">
	        	<?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('headersection'); ?>
        	</div>        	
      	</div>
    </div>

    <!-- Animate -->
    <div id="animate-front">
    	<div class="flake flake-1"></div>
    	<div class="flake flake-2"></div>
    	<div class="flake flake-3"></div>
    	<div class="node node-1"></div>
    	<div class="node node-2"></div>
    	<div class="node node-3"></div>
    	<div class="node node-4"></div>
    	<div class="node node-5"></div>
    	<div class="node node-6"></div>
    	<div class="node node-7"></div>
    	<div class="node node-8"></div>
    	<div class="node node-9"></div>
    </div>
</div>


<!-- Intro -->
<div id="intro">
    <div class="container">
        <div class="row no-margin">
            <div class="large-4 medium-4 small-12 columns">
                <h2 id="section-heading-m">Why Sembit</h2>
                <div class="intro-block outside">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/intro-better-business.svg">
                    <?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('introleft'); ?>
                </div>
            </div>          

            <div class="large-4 medium-4 small-12 columns">
                <h2 id="section-heading">Why Sembit</h2>
                <div class="intro-block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/intro-minutes-matter.svg">
                    <?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('introcenter'); ?>
                </div>
            </div>          

            <div class="large-4 medium-4 small-12 columns">
                <div class="intro-block outside">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/intro-great-people.svg">
                    <?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('introright'); ?>
                </div>
            </div>          
        </div>
    </div>
</div>

<!-- What to Expect -->
<div id="expect">
    <div class="container">
        <h2 id="section-heading" class="no-flake white">What to Expect</h2>
        <div id="build" class="row">    
            <div class="row">
                <div class="large-4 medium-4 small-12 columns push">
                    <div class="expect-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/img-plan.png">
                        <h1>Plan</h1>
                        <div class="widget_container">
                            <span>01</span>
                            <?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('expectleft'); ?>
                        </div>
                    </div>
                </div>
                <div class="large-4 medium-4 small-12 columns">
                    <div class="expect-block build center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/img-build.png">
                        <h1>Build</h1>
                        <div class="widget_container">
                            <span>02</span>
                            <?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('expectcenter'); ?>
                        </div>
                    </div>
                </div>
                <div class="large-4 medium-4 small-12 columns push">
                    <div class="expect-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/img-launch.png">
                        <h1>Launch</h1>
                        <div class="widget_container">
                            <span>03</span>
                            <?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('expectright'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Technology -->
<div id="technology">
    <div class="container">
        <div class="row">
            <h2 id="section-heading" class="no-flake">TECHNOLOGY</h2>
            <div class="large-2 large-offset-1 medium-2 medium-offset-1 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo1.png"></div>
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo2.png"></div>
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo3.png"></div>            
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo4.png"></div>            
            </div>
            <div class="large-2 medium-2 small-12 columns end">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo5.jpg"></div>            
            </div>  
        </div>  

        <div class="row">
            <div class="large-2 large-offset-1 medium-2 medium-offset-1 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo6.png"></div>
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo7.png"></div>
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo8.png"></div>            
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo9.png"></div>            
            </div>
            <div class="large-2 medium-2 small-12 columns end">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo10.png"></div>           
            </div>  
        </div>  

        <div class="row">
            <div class="large-2 large-offset-1 medium-2 medium-offset-1 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo11.png"></div>
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo12.png"></div>
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo13.png"></div>           
            </div>
            <div class="large-2 medium-2 small-6 columns">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo14.png"></div>               
            </div>
            <div class="large-2 medium-2 small-12 columns end">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo15.png"></div>               
            </div>  
        </div>  

        <div class="row">
            <div class="large-2 large-offset-1 medium-2 medium-offset-1 small-6 columns last">
                <div class="logo-block first"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo16.png"></div>
            </div>
            <div class="large-2 medium-2 small-6 columns last">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo17.png"></div>
            </div>
            <div class="large-2 medium-2 small-6 columns last">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo18.png"></div>               
            </div>
            <div class="large-2 medium-2 small-6 columns last">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo19.png"></div>               
            </div>
            <div class="large-2 medium-2 small-12 columns end last">
                <div class="logo-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logos/logo20.png"></div>               
            </div>  
        </div>  
    </div>
</div>


<!-- Join Sembot -->
<div id="join">
    <div class="full">
        <div class="row no-margin full">
            <div class="large-5 medium-6 small-12 columns no-padding">
                <?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('joinsection'); ?>
            </div>
            <div class="large-7 medium-6 small-12 columns no-padding">
                <div class="join-img-container">
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>