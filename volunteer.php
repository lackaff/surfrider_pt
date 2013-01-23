<?php

/*
Template Name: Volunteer
*/
?>
 

<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 

 <!-- Carousel
    ================================================== -->
    <div class="headerpics">
        <div class="fullpic">
	          	<img   src="<?php echo get_template_directory_uri(); ?>/img/volunteer.jpg" alt="">
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
           
         <div class="span5 quotes offset1 clearfix">
							<img src="<?php echo get_template_directory_uri(); ?>/img/bruno.jpg" class="quotepic">
							<p>"A maioria das pessoas vivem do turismo ou pesca, e de certa forma todos nós dependemos desses recursos naturais que temos aqui, especialmente o oceano."</p>
							<small class="pull-right"><cite class="pull-right" title="Source Title">-Bruno Lisboa</cite></small></br>
							<a class="pull-right" href="#">Watch the interview</a>
					</div>
					
<div class="span5 quotes clearfix">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ricardo.jpg" class="quotepic">	
							
							<p>"Todos os dias temos de sair da escola de surf da água e eu digo, pegue a placa em uma das mãos, pegue um pedaço de lixo no outro. É uma peça, mas se todo mundo faz isso, ele vai ajudar."</p>
							<small class="pull-right"><cite  class="pull-right" title="Source Title" >-Ricardo Cosme</cite> <br/><a href="http://www.pocean.pt/" target="_blank">Pocean Surf Academy</a></small></br>
							<a class="pull-right" href="#">Watch the interview</a>					
							</div>

            
		</div> <!-- end of row -->  
	
</div> <!-- end of container -->

                




<?php get_footer(); ?>