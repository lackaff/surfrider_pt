<?php

/*
Template Name: WhyGive
*/
?>
 

<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 



 <!-- Carousel
    ================================================== -->
    <div class="headerpics">
        <div class="fullpic">
	          	<img   src="<?php echo get_template_directory_uri(); ?>/img/whygive.jpg" alt="">
	    </div>
	    
    </div><!-- /.head pic -->

<div class="container">
	<div class="row">
		  <div class="span10 offset1">
          
          <div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						
					
					</article> <!-- end article -->
					
					
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
                        
                        
		</div> <!-- end of span 10 offset 1 -->
	</div> <!-- end of row -->
</div> <!-- end of container -->




<?php get_footer(); ?>