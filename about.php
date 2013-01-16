<?php

/*
Template Name: About
*/
?>


<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 



<div class="hidden-phone">
    <!-- Carousel
    ================================================== -->
    <div class="headerpics">
        <div class="itempic">
	         <a class="accordion-toggle" data-toggle="collapse" data-parent="#secondnav" href="#aboutOne">
	          	<img   src="<?php echo get_template_directory_uri(); ?>/img/about1.jpg" alt="">
	          	<h4 class="labels"> About Us</h4>
		     </a>        
	    </div>
	    
        <div class="itempic">
	        <a class="accordion-toggle" data-toggle="collapse" data-parent="#secondnav" href="#aboutTwo">
	          <img   src="<?php echo get_template_directory_uri(); ?>/img/about4.jpg" alt="">
	          <h4 class="labels">Our Staff</h4>
	        </a>
        </div>
        
        <div class="itempic">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#secondnav" href="#aboutThree">
	        	<img   src="<?php echo get_template_directory_uri(); ?>/img/about3.jpg" alt="">
	        	<h4 class="labels">Our Partners</h4>
	        </a>
        </div>
        
        <div class="itempic">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#secondnav" href="#aboutFour">
          	<img   src="<?php echo get_template_directory_uri(); ?>/img/about4.jpg" alt="">
          	<h4 class="labels">Surfing</h4>
          </a>
        </div>
        
    </div><!-- /.head pic -->


     <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container" id="about">
    <div class="row">
    <div class="span10 offset1">
      <!-- main content of the about page  -->
      
      <div class="accordion" id="secondnav">
	      <div class="accordion-group">
				<div id="aboutOne" class="accordion-body collapse in">
					<div class="accordion-inner">
					
						<h2>About Us</h2>
						<p>Surfrider Foundation Ericeira is a voluntary chapter of Surfrider Europe. </p>

<p>We are an associated collective that shares the same goals of protecting and providing sustainable growth through education and positive activity in our local environment. Surfing is our passion. We want to protect our coastline’s beautiful resources that we so often take for granted. </p>

<p>Surfrider Foundation Ericeira is a nonprofit organization based in Ericeira, Portugal and dedicated to the protection and enjoyment of the world’s oceans, waves and beaches for all people through conservation, activism, research and education. It is a voluntary chapter of Surfrider Foundation Europe. </p>

<ul><li>C – Conservation through efforts like sand bagging, dune protection and water monitoring.</li>

<li>A – Activism through lobbying, letters to the community, and peaceful protests. </li>

<li>R – Research of new products as alternatives to pollutants, water testing results and effects on how construction on coastlines affects local ecosystems and foodchains.</li>

<li>E – Education through school programs, promotional materials and new market products. </li>
</ul>
<p>Our mission is to create awareness and unity around the idea of maintaining Ericeira as one of the last paradises on earth. We want to create a bridge to new ideas and sustainable growth that benefits everyone in the Ericeira community, travelers and residents alike.</p>

						<h2> Our Mission</h2>
						<p>Our mission is to create awareness and unity around the idea of maintaining Ericeira as one of the last paradises on earth. We want to create a bridge to new ideas and sustainable growth that benefits everyone in the Ericeira community, travelers and residents alike. </p>
					</div>
				</div>
	      </div>	
		
			<div class="accordion-group">
				<div id="aboutTwo" class="accordion-body collapse">
					<div class="accordion-inner">
						<h2> Our Staff</h2>
						
						
		 <div class="container">
	  <div class="row">
		  <div class="span10">

<p>NEED A PARAGRAPH ABOUT WHAT IT MEANS TO BE PART OF SURFRIDER </p>
  <img src="<?php echo get_template_directory_uri(); ?>/img/corecircle.png" class="span2">
<!--  begining of accordian --> 
  <div class="accordion span7" id="accordion3">
  <!-- begining of accordian group --> 
	  <div class="accordion-group">
		  <div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Core Members</a>
			</div>

				<div id="collapseOne" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/richard.png" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Richard O'Sullivan</li>
							<li id="membertitle">Responsible</li>
							<li id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</li>
	
						</ul>
						</div>
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/Osario.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Gonçalo Osario</li>
							<li id="membertitle">Co-Responsible</li>
							<li id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</li>
	
						</ul>
						</div>


						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Bruno Andrade </li>
							<li id="membertitle">Treasurer</li>
							<li id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</li>
	
						</ul>
						</div>
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/hugo.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Hugo Pereira Rocha </li>
							<li id="membertitle">Secretary</li>
							<li id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</li>
	
						</ul>
						</div>
						
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Bruno Lisboa</li>
							<li id="membertitle">Volunteer Services Head </li>
							<li id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</li>
	
						</ul>
						</div>						
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/davide.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Davide Troiani </li>
							<li id="membertitle">Administrator</li>
							<li id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</li>
	
						</ul>
						</div>

					</div>
				</div>
		</div>
		<!-- end of accordian group --> 
		
  <!-- begining of accordian group --> 		
		<div class="accordion-group">
		<div class="accordion-heading">
		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Representatives</a>
		</div>
			<div id="collapseTwo" class="accordion-body collapse">
				<div class="accordion-inner">
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
				</div>
			</div>
		</div>

  <!-- end of accordian group --> 

  			</div><!-- end of accordian --> 
  		</div><!-- /.span10 offset1 -->
  	</div><!-- /.row -->
  </div> <!-- /.container -->
				
	
  					</div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div id="aboutThree" class="accordion-body collapse">
					<div class="accordion-inner">
						<h2> Our Partners</h2>
						<p>Surfrider works with a number of different groups in the Ericeira community to help achieve its mission. Without their help, protecting the local coastlines would certainly be a more difficult task to tackle. </p>

<p>Ericeira City Hall grants Surfrider Ericerira the permission we need to be active in the community. It also aids in funding and collects taxes.
Coastwatch Portugal researches and presents findings on wildlife, coast erosion and statistics for the area. 
</p>

					</div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div id="aboutFour" class="accordion-body collapse">
					<div class="accordion-inner">
						<h2>Sustainable Surfing</h2>
						<p>Though the action of riding a wave is environmentally friendly, there are ways the lifestyle and industry associated with it can be improved to have less negative impact on the environment. Here are some of Surfrider’s quick tips to surfing sustainably. </p>

						<ul>
							<li>Purchase your equipment from companies that localize production. Despite how well a product may be made by a certain brand, the petroleum involved in transport can pose a significant threat to the health of the environment. </li>
							<li>Choose to purchase from brands who place emphasis on using materials that are good for the environment. Manufacturers can reduce the toxicity of surfboard and wetsuit production by using alternative materials instead. By opting to support companies that do with your purchase, you help spur a small amount of change in the industry. </li>
							<li>Shop locally from retailers who deal with waste and energy use responsibly. It’s great if a surfing business caries great products, but if it’s reckless in how it disposes of the waste that comes with those materials, you’re just contributing to more toxic waste from the surfing industry. </li>
							<li>Make less surf trips and drive less. If you have the option to surf a full day once a week versus one hour five days a week, you can significantly reduce the amount of fuel you use in travel. </li>
							<li>Seek out more ways to create less waste on your own. Be as wary of the impact you have on the environment as you can. </li>
						</ul>
						<p>By following these tips, you can help make sure the waters you choose to surf in are clean and healthy for you, your friends and the rest of the surfing community. </p>
					</div>
				</div>
			</div>



	
		</div> <!-- /.end of accordian -->
		
    </div><!-- /.span10 offset1 -->
    </div><!-- /.row -->
	</div><!-- /.container -->
	
</div><!-- ******************end of hidden phone *************************************** -->

<div class="visible-phone">

  <div class="container">
	  <div class="row">
		  <div class="span10 offset1">

  
<!--  begining of accordian --> 
  <div class="accordion" id="accordion5">
  <!-- begining of accordian group --> 
	  <div class="accordion-group">
		  <div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5">
				  	About Us
			</a>
			</div>

				<div id="collapseOne5" class="accordion-body collapse">
					<div class="accordion-inner">
<p>Surfrider Foundation Ericeira is a voluntary chapter of Surfrider Europe. </p>

<p>We are an associated collective that shares the same goals of protecting and providing sustainable growth through education and positive activity in our local environment. Surfing is our passion. We want to protect our coastline’s beautiful resources that we so often take for granted. </p>

<p>Surfrider Foundation Ericeira is a nonprofit organization based in Ericeira, Portugal and dedicated to the protection and enjoyment of the world’s oceans, waves and beaches for all people through conservation, activism, research and education. It is a voluntary chapter of Surfrider Foundation Europe. </p>

<ul><li>C – Conservation through efforts like sand bagging, dune protection and water monitoring.</li>

<li>A – Activism through lobbying, letters to the community, and peaceful protests. </li>

<li>R – Research of new products as alternatives to pollutants, water testing results and effects on how construction on coastlines affects local ecosystems and foodchains.</li>

<li>E – Education through school programs, promotional materials and new market products. </li>
</ul>
<p>Our mission is to create awareness and unity around the idea of maintaining Ericeira as one of the last paradises on earth. We want to create a bridge to new ideas and sustainable growth that benefits everyone in the Ericeira community, travelers and residents alike.</p>

						<h2> Our Mission</h2>
						<p>Our mission is to create awareness and unity around the idea of maintaining Ericeira as one of the last paradises on earth. We want to create a bridge to new ideas and sustainable growth that benefits everyone in the Ericeira community, travelers and residents alike. </p>		
				</div>
				</div>
		</div>
		<!-- end of accordian group --> 
		
  <!-- begining of accordian group --> 		
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseTwo5">
Our Staff
</a>
</div>
<div id="collapseTwo5" class="accordion-body collapse">
<div class="accordion-inner">
  
   <img src="<?php echo get_template_directory_uri(); ?>/img/corecircle.png" class="span2">
   <h2>Core Members</h2>
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/richard.png" id="corepic">
					<span id="membername">Richard O'Sullivan - Responsible</span>

							<p id="memberp" class="span6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</p>
						</div>
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/Osario.jpg" class="span1" id="corepic">
						<span id="membername">Gonçalo Osario - Co-Responsible</span>
							<p id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</p>

						</div>


						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" class="span1" id="corepic">
						<ul class="span4">
						<span id="membername">Bruno Andrade - Treasurer</span>
						
							<p id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</p>
							</div>
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/hugo.jpg" class="span2" id="corepic">
						<ul class="span4">
							<span id="membername">Hugo Pereira Rocha - Secretary</span>
							
							<p id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</p>
	
						</div>
						
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" class="span2" id="corepic">
						<ul class="span4">
							<span id="membername">Bruno Lisboa - Volunteer Services Head</span>

							<p id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</p>
	
						</div>						
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/davide.jpg" class="span2" id="corepic">
						<ul class="span4">
							<span id="membername">Davide Troiani  - Administrator</span>

							<p id="memberp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum dolor gravida neque condimentum euismod. Nulla velit odio, tempus et suscipit eget, blandit quis nibh. Maecenas in neque et magna auctor lacinia. Nulla facilisis congue porta. Vivamus fermentum, turpis eget laoreet mattis, odio lectus consectetur justo, id mattis nisl libero.</p>
	
						</ul>
						</div>
 <h2> Representatives</h2>
 <p>organized by beach</p>
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
				 </div>
</div>
</div>

  <!-- end of accordian group --> 

  
  
   <!-- begining of accordian group --> 		
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseThree5">
Partners
</a>
</div>
<div id="collapseThree5" class="accordion-body collapse">
<div class="accordion-inner">
<p>Surfrider works with a number of different groups in the Ericeira community to help achieve its mission. Without their help, protecting the local coastlines would certainly be a more difficult task to tackle. </p>

<p>Ericeira City Hall grants Surfrider Ericerira the permission we need to be active in the community. It also aids in funding and collects taxes.
Coastwatch Portugal researches and presents findings on wildlife, coast erosion and statistics for the area. 
</p>

</div>
</div>
</div>

  <!-- end of accordian group --> 

  
  
   <!-- begining of accordian group --> 		
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseFour5">
Sustainable Surfing
</a>
</div>
<div id="collapseFour5" class="accordion-body collapse">
<div class="accordion-inner">
<p>Though the action of riding a wave is environmentally friendly, there are ways the lifestyle and industry associated with it can be improved to have less negative impact on the environment. Here are some of Surfrider’s quick tips to surfing sustainably. </p>

						<ul>
							<li>Purchase your equipment from companies that localize production. Despite how well a product may be made by a certain brand, the petroleum involved in transport can pose a significant threat to the health of the environment. </li>
							<li>Choose to purchase from brands who place emphasis on using materials that are good for the environment. Manufacturers can reduce the toxicity of surfboard and wetsuit production by using alternative materials instead. By opting to support companies that do with your purchase, you help spur a small amount of change in the industry. </li>
							<li>Shop locally from retailers who deal with waste and energy use responsibly. It’s great if a surfing business caries great products, but if it’s reckless in how it disposes of the waste that comes with those materials, you’re just contributing to more toxic waste from the surfing industry. </li>
							<li>Make less surf trips and drive less. If you have the option to surf a full day once a week versus one hour five days a week, you can significantly reduce the amount of fuel you use in travel. </li>
							<li>Seek out more ways to create less waste on your own. Be as wary of the impact you have on the environment as you can. </li>
						</ul>
						<p>By following these tips, you can help make sure the waters you choose to surf in are clean and healthy for you, your friends and the rest of the surfing community. </p>
</div>
</div>
</div>

  <!-- end of accordian group --> 

  </div><!-- end of accordian --> 
  </div><!-- /.span10 offset1 -->
  </div><!-- /.row -->
  </div> <!-- /.container -->






</div>	<!-- end of visible phone -->
	
	

<?php get_footer(); ?>