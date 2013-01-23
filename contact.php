<?php

/*
Template Name: Contact
*/
?>


<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 

 

    <!-- Carousel
    ================================================== -->
    <div class="headerpics">
        <div class="fullpic">
	          	<img   src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="">
	    </div>
	    
    </div><!-- /.head pic -->


	
	  <div class="container" onload="initialize()">
	  <div class="row">
		  <div class="span10 offset1">
<h2>Contact Us</h2>
		<div class="span4">
		<div class="row">
			<address>
<strong>Surfrider Ericeira</strong><br>
Escritorio No4<br>
Est. Nacional 247<br>
Edificio Jonobras, sala 4<br>
Ribamar<br>
2640-265 Santo Isidoro<br>
Portugal<br><br>
<abbr title="Phone">P:</abbr> +351 918667358<br>
<abbr title="Phone">P:</abbr> +351 261867182<br><br>
<abbr title="Email">Email:</abbr> surfriderericeira@gmail.com
</address>

		</div><!-- row --> 
		
		
		<div class="row">
		
					<a href="https://www.facebook.com/pages/Surfrider-Foundation-Ericeira/422379127821164?fref=ts" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" class="socialthumb" ></a>
					<a href="https://twitter.com/surfridericeira" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" class="socialthumb"></a>
					<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" class="socialthumb">
					<img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" class="socialthumb">
				
		</div><!-- row --> 
		  
		 </div><!-- close span 4 left -->  
		  
		<div class="span5">
		<h4>Find your local representative</h4>
				  <div id="map_canvas" style="height:500px; border:1px solid black;"></div>
		</div><!-- close span 6 rightt --> 
		  
		  
		  
		  
		  </div></div></div>


<?php get_footer(); ?>