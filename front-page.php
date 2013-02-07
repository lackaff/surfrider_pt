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
              <h1 >Retribui!</h1>
             <p class="lead">Retribui aquilo que o oceano te dá.</p>
              <a class="btn btn-large btn-success" href="<?php bloginfo('url'); ?>/problem/">Fica a saber mais</a>
            </div>
          </div>
        </div>
      
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sliderBeachClean.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Envolvimento comunitário</h1>
              <p class="lead">Alunos da escola secundária varrem a costa em busca de lixo.</p>
              <a class="btn btn-large btn-success" href="#">Lê o blogue</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sliderConnect.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Liga-te a nós</h1>
              <p class="lead">Segue-nos nas redes sociais e mantém-te a par das novidades sobre a nossa costa.</p>
              <a class="btn btn-large btn-success" href="<?php bloginfo('url'); ?>/contact/">Conectar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sliderVolunteer.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Torna-te voluntário.</h1>
              <p class="lead">Participa na nossa próxima limpeza de praia. </p>
              <a class="btn btn-large btn-success" href="<?php bloginfo('url'); ?>/contact/">Voluntário.</a>
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
          <h2>Próximos eventos</h2>
				<?php echo do_shortcode('[eo_events numberposts="3"]<a href="%event_url%">%event_title%</a> <br />%start{jS M Y}{ g:i:a}%<br /><br />[/eo_events]'); ?>

        </div><!-- /.span4 -->
         
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 class="fpcenter">Blogue</h2>
           <?php $args = array( 'numberposts' => 5, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date"); $postslist = get_posts( $args ); foreach ($postslist as $post) : setup_postdata($post); ?> <div class="events"><p><?php the_title(); ?><a id="blogindex" href="<?php the_permalink(); ?>" title="<?php the_title();  ?>"> Read More</a></p> </div><?php endforeach; ?> 
           
            
        </div><!-- /.span4 -->
        
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 class="fpcenter">Age</h2>
          <div class="row">
 <img class="span2" src="<?php echo get_template_directory_uri(); ?>/img/ta1.jpg" />
          <p class="span2">A Surfrider apoia o oceano, as ondas e as pessoas que deles desfrutam.</p> <a href="<?php bloginfo('url'); ?>/membership/" class="btn btn-success span1">Inscreve-te</a>
          </div>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
    
    </div><!-- /.container -->
    
     <div class="container hidden-desktop" id="fp">
      <!-- Three columns of text below the carousel -->
      <div class="row">
      
        <div class="span6">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 class="fpcenter">Próximos eventos</h2>
         		<?php echo do_shortcode('[eo_events numberposts="3"]<a href="%event_url%">%event_title%</a> <br />%start{jS M Y}{ g:i:a}%<br /><br />[/eo_events]'); ?>
        </div><!-- /.span4 -->
        
        <div class="span6">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Blogue</h2>
           <?php $args = array( 'numberposts' => 6, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date"); $postslist = get_posts( $args ); foreach ($postslist as $post) : setup_postdata($post); ?> <div class="events"><p><?php the_title(); ?><a id="blogindex" href="<?php the_permalink(); ?>" title="<?php the_title();  ?>"> Read More</a></p> </div><?php endforeach; ?>
        </div><!-- /.span4 -->
      </div><!-- end of row -->
      <div class="row">
        <div class="span8 offset2">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Age</h2>
        
          <img class="span2" src="<?php echo get_template_directory_uri(); ?>/img/ta1.jpg" />
          <p class="span3">A Surfrider apoia o oceano, as ondas e as pessoas que deles desfrutam.</p> 
          <a href="<?php bloginfo('url'); ?>/membership/" class="btn btn-large btn-success span2">Inscreve-te</a>       
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