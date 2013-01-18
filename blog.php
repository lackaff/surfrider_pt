<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?>


<!-- Carousel
    ================================================== -->
    <div class="headerpics">
        <div class="fullpic">
	          	<img src="<?php echo get_template_directory_uri(); ?>/img/problem.jpg" alt="">
	    </div>
    </div><!-- /.head pic -->


	
	  <div class="container">
	  <div class="row">
		<div class="span10 offset1">

  
  
  
  
<div id="container">
	<div id="content" role="main">

<?php $postslist = get_posts('&numberposts=10&order=DESC&orderby=post_date');
foreach ($postslist as $post) :
setup_postdata($post); ?>
<div class="post_item row">
 <h3 class="span10"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
    <div class="posthumbnail span2">
   
            <?php 
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail();
            } else { ?>
	<img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt="<?php the_title(); ?>" />	<?php }
            ?>
    </div>
<span class='side_date span7'><?php the_time('F j, Y'); ?></span>
<div class="span7"><?php the_excerpt(); ?></div>

</div>
<?php endforeach; ?>



	</div><!-- #content -->
</div><!-- #container -->

  </div><!-- /.span10 offset1 -->
  </div><!-- /.row -->
  </div> <!-- /.container -->




<?php get_footer(); ?>