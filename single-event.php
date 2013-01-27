<?php

/*
Template Name: Single Event
*/
?> 


<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 

 <!-- Carousel
    ================================================== -->
    <div class="headerpics">
        <div class="fullpic">
	          	<img   src="<?php echo get_template_directory_uri(); ?>/img/calendar.jpg" alt="">
	    </div>
	    
    </div><!-- /.head pic -->

 
	
<div class="container">
	<div class="row">
		  <div class="span10 offset1">

<?php
/* 
 * Remember that this file is only used if you have chosen to override event pages with formats in your event settings!
 * You can also override the single event page completely in any case (e.g. at a level where you can control sidebars etc.), as described here - http://codex.wordpress.org/Post_Types#Template_Files
 * Your file would be named single-event.php
 */
/*
 * This page displays a single event, called during the the_content filter if this is an event page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output() 
 */
global $EM_Event;
/* @var $EM_Event EM_Event */
echo $EM_Event->output_single();

?>





		</div> <!-- end of span 10 offset 1 -->
	</div> <!-- end of row -->
</div> <!-- end of container -->


<?php get_footer(); ?>