
<!-- Footer -->
<div id="footer">
	<div class="container">
    	<div class="row no-margin full">

    		<!-- Footer Copyright -->
	        <div id="footer-copyright" class="large-4 medium-4 columns left no-padding">
	      		<img class="svg footer-logo-name" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/footer-logo-name.svg">
	      		<p class="copyright">©2017 Sembit, All Rights Reserved</p>
	        </div>

	        <!-- Footer Logo -->
	        <div id="footer-logo" class="large-4 medium-4 columns centered no-padding">
	      		<img class="svg footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/logo-blue.svg">
	        </div>

	        <div id="footer-mobile" class="small-12 columns centered">
	        	<img class="svg footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/logo-blue.svg"><br>
	        	<img class="svg footer-logo-name" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/svgs/footer-logo-name.svg">
	      		<p class="copyright">©2017 Sembit, All Rights Reserved</p>
	        </div>

	        <!-- Footer Links -->
	        <div id="footer-links" class="large-4 medium-4 small-12 columns no-padding">
	        	<div class="row">
	        		<div class="large-6 small-6 columns no-padding">
			      		<ul class="footer-links">
				      		<?php wp_nav_menu(array('theme_location' => 'footer-menu-l', 'container' => false, 'items_wrap' => '%3$s')); ?>
			      		</ul>
	        		</div>
	        		<div class="large-6 small-6 columns no-padding">
	        			<ul class="footer-links">	        			
	        				<?php wp_nav_menu(array('theme_location' => 'footer-menu-r', 'container' => false, 'items_wrap' => '%3$s')); ?>
			      		</ul>
	        		</div>
	        	</div>	      	
	        </div>

      	</div>
    </div>
</div>


	<?php wp_footer(); ?> 

	<!-- scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script>
	var mainNav = $('#nav'),
	    secondarymainNavPos= $('#nav').offset().top + 100;

    $(document).ready(function() {
    	$('body').scroll(function() {   
    	    if($('body').scrollTop() > secondarymainNavPos) {
    	        mainNav.addClass('fixed-bg');
                $('#mobile-nav-bar').addClass('fixed-bg');  
    	    } else {
    	        mainNav.removeClass('fixed-bg');
                $('#mobile-nav-bar').removeClass('fixed-bg');
    	    }
    	});

        $('body').scroll(function() {   
            if($('body').scrollTop() > $('#mobile-nav-bar').offset().top + 100) {
                $('#mobile-nav-bar').addClass('fixed-bg');
            } else {
                $('#mobile-nav-bar').removeClass('fixed-bg');
            }
        });

        $('body').scroll(function() {   
            if($('body').scrollTop() > $('#header').offset().top) {
                $('#animate-front').css('visibility', 'hidden');
            } else {
            	$('#animate-front').css('visibility', 'visible');
            }
        });

        var mobile_nav = document.getElementById('#mobile');


        $('a#show-mobile-nav').click(function (event) {
            $('a#show-mobile-nav').toggleClass('dark');
            $('.mobile-nav').toggleClass('mobile-nav-open');
            event.stopPropagation();
        });

        // click outside, close
        $(window).click(function() {
        	if($('a#show-mobile-nav').hasClass('dark')) {
                $('a#show-mobile-nav').toggleClass('dark');
                $('.mobile-nav').toggleClass('mobile-nav-open');
            }
        });

        // click inside, okay
        $('.mobile-nav').click(function(event){
            event.stopPropagation();
        });

        // png fallback
        if (!Modernizr.svg) {
		    $('img').each(function() {
		  		var src = $(this).attr('src');
		  		var new_src = src.replace(/\.png$/, '.svg');
		  			new_src = new_src.replace('svgs/', '');
		  		$(this).attr('src', new_src);
			});
		}
   
    });

	$(function () {
	    var timer = setInterval(function () {
		    $('.flake-1').fadeOut(600).delay(2400).fadeIn(850).fadeOut(722).delay(1043);
	        $('.flake-2').fadeOut(822).fadeIn(630).fadeOut(610).delay(1900);
	        $('.flake-3').fadeOut(665).delay(1200).fadeIn(730).fadeOut(670).delay(960);	  
	        $('.node-1').fadeOut(700).delay(1800).fadeIn(650).fadeOut(642).delay(1443);
	        $('.node-3').fadeOut(865).delay(1200).fadeIn(730).fadeOut(670).delay(960);	
	        $('.node-5').fadeOut(600).delay(900).fadeIn(750).fadeOut(732).delay(1243);
	        $('.node-2').fadeOut(1322).fadeIn(530).fadeOut(610).delay(1800);
	        $('.node-4').fadeOut(1200).delay(2400).fadeIn(850).fadeOut(722).delay(1700);
	        $('.node-6').fadeOut(722).fadeIn(530).fadeOut(510).delay(2300);    
	    }, 1);
    });
	</script>
  </body>
</html>