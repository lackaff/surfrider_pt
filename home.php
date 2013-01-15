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
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/slide-01.jpg">alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a class="btn btn-large btn-primary" href="#">Slide 1</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a class="btn btn-large btn-primary" href="#">Slide 2</a>
            </div>
          </div>
        </div>
        <div class="item active">
          <img src="<?php echo get_template_directory_uri(); ?>/images/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a class="btn btn-large btn-primary" href="#">Slide 3</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="index.html#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="index.html#myCarousel" data-slide="next">›</a>
    </div><!-- /.carousel -->

     <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">
      <!-- Three columns of text below the carousel -->
      <div class="row">
      
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Calendar</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis 
euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi 
leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
 cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="file:///Users/madelinechapin/Desktop/carousel.html#">View details »</a></p>
        </div><!-- /.span4 -->
        
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Blog</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor 
ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus 
sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor 
mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="file:///Users/madelinechapin/Desktop/carousel.html#">View details »</a></p>
        </div><!-- /.span4 -->
        
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Take Action</h2>
          <div class="row">
          <img class="span2" src="<?php echo get_template_directory_uri(); ?>/images/ta1.jpg" />
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis 
in, egestas eget quam.</p>
          </div>
          <div class="row">
 <img class="span2" src="<?php echo get_template_directory_uri(); ?>/images/ta1.jpg" />
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis 
in, egestas eget quam.</p>
          </div>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
    
    </div><!-- /.container -->

<?php get_footer(); ?>