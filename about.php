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
	          	<img   src="<?php echo get_template_directory_uri(); ?>/img/aboutus.jpg" alt="">
	          	<h4 class="labels"> About Us</h4>
		     </a>        
	    </div>
	    
        <div class="itempic">
	        <a class="accordion-toggle" data-toggle="collapse" data-parent="#secondnav" href="#aboutTwo">
	          <img   src="<?php echo get_template_directory_uri(); ?>/img/ourstaff.jpg" alt="">
	          <h4 class="labels">Our Staff</h4>
	        </a>
        </div>
        
        <div class="itempic">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#secondnav" href="#aboutThree">
	        	<img   src="<?php echo get_template_directory_uri(); ?>/img/ourpartners.jpg" alt="">
	        	<h4 class="labels">Our Partners</h4>
	        </a>
        </div>
        
        <div class="itempic">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#secondnav" href="#aboutFour">
          	<img   src="<?php echo get_template_directory_uri(); ?>/img/surfrelated.jpg" alt="">
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
					
						<h3>About Us</h3>
						
                        
<div class="row">
<div class="span5">
<p>Surfrider Foundation Ericeira is a nonprofit organization based in Ericeira, Portugal and dedicated to the protection and enjoyment of the world’s oceans, waves and beaches for all people through CARE (conservation, activism, research and education).  
</p>
<p>It is an associated collective of passionate surfers that shares the same goals of protecting and providing sustainable growth through education and positive activity in the local environment. The organization seeks to protect the Ericeira coastline’s beautiful resources that are so often taken for granted. </p>


<h3> Our Mission</h3>
						<p>Surfrider’s mission is to create awareness and unity around the idea of maintaining Ericeira as one of the last paradises on earth. Surfrider seeks to create a bridge to new ideas and sustainable growth that benefits everyone in the Ericeira community, travelers and residents alike.</p>
</div>
<div class="span4">



<table class="table">
<tr>
    <td><h1>C</h1></td>
    <td>Conservation through efforts like sand bagging, dune protection and water monitoring.</td>
</tr>
<tr>
    <td><h1>A</h1></td>
    <td>Activism through lobbying, letters to the community, and peaceful protests.</td>
</tr>
<tr>
    <td><h1 id="h1r">R</h1></td>
    <td>Research of new products as alternatives to pollutants, water testing results and effects on how construction on coastlines affects local ecosystems and foodchains.</td>
</tr>
<tr>
    <td><h1>E</h1></td>
    <td>Education through school programs, promotional materials and new market products.</td>
</tr>
</table> 


</div>
</div>
					</div>
				</div>
	      </div>	
		
			<div class="accordion-group">
				<div id="aboutTwo" class="accordion-body collapse">
					<div class="accordion-inner">
				<h3> Our Staff</h3>
					<p>While each of our staff members have a job outside of Surfrider, we take our jobs very seriously as keepers of one of Portugal’s greatest treasures. We love the Ericeira community and surfing. With the combined help of our staff, representatives and members and volunteers like you, we can help combat pollution of Ericeira’s beaches and waters. </p>

<p>Click through each of the sections below to learn more about the staff  and representatives that make up Surfrider. If you have a beach issue you would like to report, find a representative for the beach you are referring to and let them know what’s going on with the contact information provided. </p>
	
						
		 <div class="container">
	  <div class="row">
		  <div class="span10">
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
							<li id="memberp">Richard O’Sullivan studied Business Information Systems at the University of West England and like most staff at Surfrider, does a little bit of everything in the Ericeira community. He’s a project manager, operations director, personal trainer and surf coach. Richard loves all things surfing and is passionate about keeping the water he surfs in clean. His favorite surf spots are São Lourenço, Pedra Branca, and Ribeira d'Ilhas. </li>
	
						</ul>
						</div>
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/Osario.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Gonçalo Osario</li>
							<li id="membertitle">Co-Responsible</li>
							<li id="memberp">Gonçalo Osario is known for being incredibly creative, and has done all kinds of work ranging from jewelry making to film directing and production. He loves to surf, skate and dabbles in photography as well. His favorite surf spot in Ericeira is a secret, but you can sometimes catch him at Ribeira d'Ilhas.</li>
	
						</ul>
						</div>


						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/bruno.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Bruno Andrade </li>
							<li id="membertitle">Treasurer</li>
							<li id="memberp">Bruno opened his own business and became manager of Ericeira’s own <a href="http://www.amarhostel.com" target="_blank">Amar Hostel and Suites</a>. Bruno loves to surf at popular areas such as Sao Juliao and Pedra Branca.</li>
	
						</ul>
						</div>
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/hugo.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Hugo Pereira Rocha </li>
							<li id="membertitle">Secretary</li>
							<li id="memberp">Hugo studied Urban and Environmental Law and worked as a lawyer for some time before moving on to become a writer. He currently writes for <a href="http://surfportugal.sapo.pt" target="_blank">Surf Portugal</a> and recently released his second novel titled “In the End,” with action that unfolds in Ericeira. </li>
	
						</ul>
						</div>
						
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/brunolisboa.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Bruno Lisboa</li>
							<li id="membertitle">Volunteer Services Head </li>
							<li id="memberp">Bruno was born in the heart of Portugal, Lisboa, and studied journalism. Today he works as a logistics officer for Despomar, a local sports shop in Ericeira. He can usually be found at his favorite surf spots of São Julião and Pedra Branca. </li>
	
						</ul>
						</div>						
						
						<div class="row">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/davide.jpg" class="span2" id="corepic">
						<ul class="span4">
							<li id="membername">Davide Troiani </li>
							<li id="membertitle">Administrator</li>
							<li id="memberp">Davide is Surfrider’s resident tech geek. He has a background in Computer Science and works as an IT Supervisor in his dayjob. When he’s not at work or surfing, he loves to work on his 1985 Volkswagen Caravelle.  His top surf spot is Ribeira d’Illhas.</li>
	
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
<!-- begining of accordian group --> 		
		<div class="accordion-group">
		<div class="accordion-heading">
		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Volunteers</a>
		</div>
			<div id="collapseThree" class="accordion-body collapse">
				<div class="accordion-inner">
				<p> Volunteers are the backbone of what Surfrider represents. Their giving spirit and willingness to work for the betterment of the community are essential to Surfrider carrying out its mission. Give back to Ericeira by becoming a member today!

</p>
			<a class="btn btn-large btn-success" href="<?php bloginfo('url'); ?>/volunteer/">Volunteer</a>

				</div>
			</div>
		</div>

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
					<h3> Our Partners</h3>
						<p>Surfrider works with a number of different groups in the Ericeira community to help achieve its mission. Without their help, protecting the local coastlines would certainly be a more difficult task to tackle.</p>

<p><strong>Ericeira City Hall</strong> grants Surfrider Ericerira the permission needed to be active in the community. It also aids in funding and collects taxes.</p>
<p><strong>Coastwatch Portugal</strong> researches and presents findings on wildlife, coast erosion and statistics for the area. </p>
<p>Surfrider also works with a number of sponsors, which can be found listed below:</p>
<ul><li>Camera Municipal de Mafra</li>
<li>Patagonia</li>
<li>Cligeral LDA</li>
</ul><ul>
<li>Amar Hostel</li>
<li>AKI </li>
</ul><ul>
<li>Riviera Restaurant </li>
<li>Tik Tak</li>
<li>Prim </li></ul>


					</div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div id="aboutFour" class="accordion-body collapse">
					<div class="accordion-inner">
						<h3>Sustainable Surfing</h3>
						<div class="span8">
						<p>Though the action of riding a wave is environmentally friendly, there are ways the lifestyle and industry associated with it can be improved to have less negative impact on the environment. Here are some of Surfrider’s quick tips to surfing sustainably. </p>

						<ul>
							<li><strong>Purchase your equipment from companies that localize production.</strong> Despite how well a product may be made by a certain brand, the petroleum involved in transport can pose a significant threat to the health of the environment. </li>
							<li><strong>Choose to purchase from brands who place emphasis on using materials that are good for the environment.</strong> Manufacturers can reduce the toxicity of surfboard and wetsuit production by using alternative materials instead. By opting to support companies that do with your purchase, you help spur a small amount of change in the industry. </li>
							<li><strong>Shop locally from retailers who deal with waste and energy use responsibly.</strong> It’s great if a surfing business carries great products, but if it’s reckless in how it disposes of the waste that comes with those materials, you’re just contributing to more toxic waste from the surfing industry. </li>
							<li><strong>Seek out more ways to create less waste on your own.</strong> Be as wary of the impact you have on the environment as you can. </li>
						</ul>
						<p>By following these tips, you can help make sure the waters you choose to surf in are clean and healthy for you, your friends and the rest of the surfing community. </p>
						</div>
						<div id="surfboard"><img src="<?php echo get_template_directory_uri(); ?>/img/surfboard2.png" id="surfboard" alt="" class="hidden-phone"/></div>
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
	 
<!--  begining of accordian --> 
  <div class="accordion" id="accordion5">
  <!-- begining of accordian group --> 
	  <div class="accordion-group">
		  <div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5">
				  	<img   src="<?php echo get_template_directory_uri(); ?>/img/mobileAbout.gif" alt="">
				  	<h4 class="labels"> About Us</h4>
			</a>
			</div>

				<div id="collapseOne5" class="accordion-body collapse">
					<div class="accordion-inner">
<div class="row">
    <div class="span10 offset1">
<div class="span5">
<p>Surfrider Foundation Ericeira is a nonprofit organization based in Ericeira, Portugal and dedicated to the protection and enjoyment of the world’s oceans, waves and beaches for all people through CARE (conservation, activism, research and education).  
</p>
<p>It is an associated collective of passionate surfers that shares the same goals of protecting and providing sustainable growth through education and positive activity in the local environment. The organization seeks to protect the Ericeira coastline’s beautiful resources that are so often taken for granted. </p>

<table class="table">
<tr>
    <td><h1>C</h1></td>
    <td>Conservation through efforts like sand bagging, dune protection and water monitoring.</td>
</tr>
<tr>
    <td><h1>A</h1></td>
    <td>Activism through lobbying, letters to the community, and peaceful protests.</td>
</tr>
<tr>
    <td><h1 id="h1r">R</h1></td>
    <td>Research of new products as alternatives to pollutants, water testing results and effects on how construction on coastlines affects local ecosystems and foodchains.</td>
</tr>
<tr>
    <td><h1>E</h1></td>
    <td>Education through school programs, promotional materials and new market products.</td>
</tr>
</table> 



<h3> Our Mission</h3>
						<p>Surfrider’s mission is to create awareness and unity around the idea of maintaining Ericeira as one of the last paradises on earth. Surfrider seeks to create a bridge to new ideas and sustainable growth that benefits everyone in the Ericeira community, travelers and residents alike.</p>

</div>

</div></div>
				</div>
				</div>
		</div>
		<!-- end of accordian group --> 
		
  <!-- begining of accordian group --> 		
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseTwo5">
<img   src="<?php echo get_template_directory_uri(); ?>/img/mobileStaff.gif" alt="">
<h4 class="labels">Our Staff</h4></a>
</div>
<div id="collapseTwo5" class="accordion-body collapse">
<div class="accordion-inner">
  <div class="row">
    <div class="span10 offset1">
    <p>While each of our staff members have a job outside of Surfrider, we take our jobs very seriously as keepers of one of Portugal’s greatest treasures. We love the Ericeira community and surfing. With the combined help of our staff, representatives and members and volunteers like you, we can help combat pollution of Ericeira’s beaches and waters.</p> 

<p>Click through each of the sections below to learn more about the staff  and representatives that make up Surfrider. If you have a beach issue you would like to report, find a representative for the beach you are referring to and let them know what’s going on with the contact information provided.</p>
   <img src="<?php echo get_template_directory_uri(); ?>/img/corecircle.png" class="span2" />
   <h2>Core Members</h2>
   
						<div>	
					<img src="<?php echo get_template_directory_uri(); ?>/img/richard.png"  id="corepic" />
						<span id="membername">Richard O'Sullivan - Responsible</span>
							<p id="memberp" class="span6">Richard O’Sullivan studied Business Information Systems at the University of West England and like most staff at Surfrider, does a little bit of everything in the Ericeira community. He’s a project manager, operations director, personal trainer and surf coach. Richard loves all things surfing and is passionate about keeping the water he surfs in clean. His favorite surf spots are São Lourenço, Pedra Branca, and Ribeira d'Ilhas.</p>						</div>
						
						<div>	
					<img src="<?php echo get_template_directory_uri(); ?>/img/Osario.jpg" id="corepic" />
						<span id="membername">Gonçalo Osario - Co- Responsible</span>
							<p id="memberp" class="span6">Gonçalo Osario is known for being incredibly creative, and has done all kinds of work ranging from jewelry making to film directing and production. He loves to surf, skate and dabbles in photography as well. His favorite surf spot in Ericeira is a secret, but you can sometimes catch him at Ribeira d'Ilhas.</p>
						</div>
					


						<div>	
					<img src="<?php echo get_template_directory_uri(); ?>/img/bruno.jpg"  id="corepic" />
						<span id="membername">Bruno Andrade - Treasurer</span>
							<p id="memberp" class="span6">Bruno opened his own business and became manager of Ericeira’s own <a href="http://www.amarhostel.com" target="_blank">Amar Hostel and Suites</a>. Bruno loves to surf at popular areas such as Sao Juliao and Pedra Branca.</p>
						</div>
						
						<div>	
					<img src="<?php echo get_template_directory_uri(); ?>/img/hugo.jpg"  id="corepic" />
						<span id="membername">Hugo Pereira Rocha - Secretary</span>
							<p id="memberp" class="span6">Hugo studied Urban and Environmental Law and worked as a lawyer for some time before moving on to become a writer. He currently writes for <a href="http://surfportugal.sapo.pt" target="_blank">Surf Portugal</a> and recently released his second novel titled “In the End,” with action that unfolds in Ericeira.</p>						</div>
						
						
						<div>	
					<img src="<?php echo get_template_directory_uri(); ?>/img/brunolisboa.jpg" id="corepic" />
						<span id="membername">Bruno Lisboa - Volunteer Services Head</span>
							<p id="memberp" class="span6">Bruno was born in the heart of Portugal, Lisboa, and studied journalism. Today he works as a logistics officer for Despomar, a local sports shop in Ericeira. He can usually be found at his favorite surf spots of São Julião and Pedra Branca.</p>
						</div>						
						
						<div>	
					<img src="<?php echo get_template_directory_uri(); ?>/img/davide.jpg" id="corepic" />
					<span id="membername">Davide Troiani - Administrator</span>
							<p id="memberp" class="span6">Davide is Surfrider’s resident tech geek. He has a background in Computer Science and works as an IT Supervisor in his dayjob. When he’s not at work or surfing, he loves to work on his 1985 Volkswagen Caravelle.  His top surf spot is Ribeira d’Illhas.</p>
						</div>

						
 <h2> Representatives</h2>
		<div id="content" class="clearfix row">
			
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
</div>
</div>
  <!-- end of accordian group --> 

  
  
   <!-- begining of accordian group --> 		
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseThree5">
<img   src="<?php echo get_template_directory_uri(); ?>/img/mobilePartners.gif" alt="">
<h4 class="labels">Our Partners</h4>
</a>
</div>
<div id="collapseThree5" class="accordion-body collapse">
<div class="accordion-inner">
<div class="row">
    <div class="span10 offset1">
						<p>Surfrider works with a number of different groups in the Ericeira community to help achieve its mission. Without their help, protecting the local coastlines would certainly be a more difficult task to tackle.</p>

<p><strong>Ericeira City Hall</strong> grants Surfrider Ericerira the permission needed to be active in the community. It also aids in funding and collects taxes.</p>
<p><strong>Coastwatch Portugal</strong> researches and presents findings on wildlife, coast erosion and statistics for the area. </p>
<p>Surfrider also works with a number of sponsors, which can be found listed below:</p>
<ul><li>Camera Municipal de Mafra</li>
<li>Patagonia</li>
<li>Cligeral LDA</li>
</ul><ul>
<li>Amar Hostel</li>
<li>AKI </li>
</ul><ul>
<li>Riviera Restaurant </li>
<li>Tik Tak</li>
<li>Prim </li></ul>

</div>
</div>
</div>
</div>
</div>
  <!-- end of accordian group --> 

  
  
   <!-- begining of accordian group --> 		
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseFour5">
<img   src="<?php echo get_template_directory_uri(); ?>/img/mobileSurf.gif" alt=""></a>
<h4 class="labels">Sustainable Surfing</h4>
</div>
<div id="collapseFour5" class="accordion-body collapse">
<div class="accordion-inner">
<p>Though the action of riding a wave is environmentally friendly, there are ways the lifestyle and industry associated with it can be improved to have less negative impact on the environment. Here are some of Surfrider’s quick tips to surfing sustainably. </p>

						<ul>
							<li><strong>Purchase your equipment from companies that localize production.</strong> Despite how well a product may be made by a certain brand, the petroleum involved in transport can pose a significant threat to the health of the environment. </li>
							<li><strong>Choose to purchase from brands who place emphasis on using materials that are good for the environment.</strong> Manufacturers can reduce the toxicity of surfboard and wetsuit production by using alternative materials instead. By opting to support companies that do with your purchase, you help spur a small amount of change in the industry. </li>
							<li><strong>Shop locally from retailers who deal with waste and energy use responsibly.</strong> It’s great if a surfing business carries great products, but if it’s reckless in how it disposes of the waste that comes with those materials, you’re just contributing to more toxic waste from the surfing industry. </li>
							<li><strong>Seek out more ways to create less waste on your own.</strong> Be as wary of the impact you have on the environment as you can. </li>
						</ul>
						<p>By following these tips, you can help make sure the waters you choose to surf in are clean and healthy for you, your friends and the rest of the surfing community. </p>
</div>
</div>
</div>

  <!-- end of accordian group --> 

  </div><!-- end of accordian --> 
</div>
  </div> <!-- /.container -->






</div>	<!-- end of visible phone -->
	
	

<?php get_footer(); ?>