<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 
			
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sliderLearn.jpg" alt="">
          <div class="container  active">
            <div class="carousel-caption" id="headline1">
              <h1 >Give Back!</h1>
             <p class="lead">Give back what you take from the ocean.</p>
              <a class="btn btn-large btn-success" href="<?php bloginfo('url'); ?>/problem/">Learn more</a>
            </div>
          </div>
        </div>
      
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sliderBeachClean.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Community Involvement</h1>
              <p class="lead">Secondary school students sweep the shore for trash.</p>
              <a class="btn btn-large btn-success" href="#">Read the blog</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sliderConnect.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Connect</h1>
              <p class="lead">Follow us on social media for updates about our coast.</p>
              <a class="btn btn-large btn-success" href="<?php bloginfo('url'); ?>/contact/">Connect</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sliderVolunteer.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Volunteer.</h1>
              <p class="lead">Participate in our next beach cleanup.</p>
              <a class="btn btn-large btn-success" href="<?php bloginfo('url'); ?>/volunteer/">Volunteer.</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control hidden-phone" href="index.html#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control hidden-phone" href="index.html#myCarousel" data-slide="next">›</a>
    </div><!-- /.carousel -->



     <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container visible-desktop" id="fp">
      <!-- Three columns of text below the carousel -->
      <div class="row">
      
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Upcoming Events</h2>
				<?php echo do_shortcode('[events_list limit="5"]#_EVENTLINK - #_EVENTDATES<br /><br />[/events_list]'); ?>

        </div><!-- /.span4 -->
         
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 class="fpcenter">Blog</h2>
           <?php $args = array( 'numberposts' => 5, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date"); $postslist = get_posts( $args ); foreach ($postslist as $post) : setup_postdata($post); ?> <div class="events"><p><?php the_title(); ?><a id="blogindex" href="<?php the_permalink(); ?>" title="<?php the_title();  ?>"> Read More</a></p> </div><?php endforeach; ?> 
           
            
        </div><!-- /.span4 -->
        
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 class="fpcenter">Take Action</h2>
          <div class="row">
 <img class="span2" src="<?php echo get_template_directory_uri(); ?>/img/ta1.jpg" />
          <p class="span2">Surfrider supports the ocean, the waves, and the people who enjoy it.</p> <a href="<?php bloginfo('url'); ?>/membership/" class="btn btn-success span1">Sign Up!</a>
          </div>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
    
    </div><!-- /.container -->
    
    
    
    
    
    
     <div class="container hidden-desktop" id="fp">
      <!-- Three columns of text below the carousel -->
      <div class="row">
      
        <div class="span6">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 class="fpcenter">Upcoming Events</h2>
         		<?php echo do_shortcode('[events_list limit="5"]#_EVENTLINK - #_EVENTDATES<br /><br />[/events_list]'); ?>
        </div><!-- /.span4 -->
        
        <div class="span6">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Blog</h2>
           <?php $args = array( 'numberposts' => 6, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date"); $postslist = get_posts( $args ); foreach ($postslist as $post) : setup_postdata($post); ?> <div class="events"><p><?php the_title(); ?><a id="blogindex" href="<?php the_permalink(); ?>" title="<?php the_title();  ?>"> Read More</a></p> </div><?php endforeach; ?>
        </div><!-- /.span4 -->
      </div><!-- end of row -->
      <div class="row">
        <div class="span8 offset2">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Take Action</h2>
        
          <img class="span2" src="<?php echo get_template_directory_uri(); ?>/img/ta1.jpg" />
          <p class="span3">Surfrider supports the ocean, the waves, and the people who enjoy it.</p> 
          <a href="<?php bloginfo('url'); ?>/membership/" class="btn btn-large btn-success span2">Sign Up!</a>       
        </div><!-- /.span4 -->
      </div><!-- /.row -->
    
    </div><!-- /.container -->




    
<script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
</script>



<?php get_footer(); ?>