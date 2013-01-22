<?php

/*
Template Name: Membership
*/
?>
 

<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 

  <!-- Carousel
    ================================================== -->
    <div class="headerpics">
        <div class="fullpic">
	          	<img src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="">
	    </div>
    </div><!-- /.head pic -->


	
	  <div class="container">
	  <div class="row">
		  <div class="span10 offset1">
		    <h2>Become a Member of Surfrider</h2>
		     <div class="span3 visible-desktop">
		  <p>Becoming a member of Surfrider is one of the best ways to contribute to the cause of keeping our beaches clean and spread awareness about the environmental issues the community faces. Once you’ve given provided your details and paid a small inscription fee, you will have the option to become a member at various levels. Each tier of membership comes with its own set of unique benefits, giving one more reason to join in on the action at Surfrider. </p>
</div>

		  <div class="span6 visible-desktop"><iframe width="560" height="315"src="http://www.youtube.com/embed/1moPcYWh_l0" frameborder="0" allowfullscreen></iframe></div>
		  
		  
		  <div class="visible-tablet">
		  <p>Becoming a member of Surfrider is one of the best ways to contribute to the cause of keeping our beaches clean and spread awareness about the environmental issues the community faces. Once you’ve given us your details and paid a small inscription fee, you will have the option to become a member at various level. Each tier of membership comes with its own set of unique benefits, giving one more reason to join in on the action at Surfrider. </p>
</div>

		  <div><iframe class="visible-tablet" width="560" height="315"src="http://www.youtube.com/embed/1moPcYWh_l0" frameborder="0" allowfullscreen></iframe></div>
		  
		  
		  <div class="visible-phone">
		  <p>Becoming a member of Surfrider is one of the best ways to contribute to the cause of keeping our beaches clean and spread awareness about the environmental issues the community faces. Once you’ve given us your details and paid a small inscription fee, you will have the option to become a member at various level. Each tier of membership comes with its own set of unique benefits, giving one more reason to join in on the action at Surfrider. </p>
</div>

		  <div><iframe class="visible-phone" src="http://www.youtube.com/embed/1moPcYWh_l0" frameborder="0" allowfullscreen></iframe></div>
  
		  
		<!--  begining of accordian --> 
  <div class="accordion span10" id="accordion2" >
  <!-- begining of accordian group --> 
	  <div class="accordion-group">
		  <div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
				  	Adults
			</a>
			</div>

				<div id="collapseOne" class="accordion-body collapse">
					<div class="accordion-inner">
							<p>Anyone over 16 can obtain membership for 20€.</p>
							
							<p>After the initial inscription fee, there are three different levels of memberships that can be obtained. </p>
							
							<p>A Surfrider card can be shown at participating partner businesses for discounts on merchandise and food.</p> 

							<table class="table span7">
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/img/bronze.png" /></td>
                                    <td><strong>Bronze (15€)</strong><ul><li>T-shirt</li><li>10% off Surfrider affiliated stores</li></ul></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/img/silver.png" /></td>
                                    <td><strong>Silver (25€)</strong><ul><li>T-shirt</li><li>20% off Surfrider affiliated stores and restaurants</li><li>PSFF free one-day pass</li></ul></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_template_directory_uri(); ?>/img/gold.png" /></td>
                                    <td><strong>Gold (50€)</strong>
                                        <ul><li>T-shirt</li><li>Hoodie</li><li>20% off Surfrider affiliated stores and restaurants</li><li>20% off a surf lesson with a Surfrider partner</li><li><a href="http://www.portuguesesurffilmfestival.com" target="_blank">PSFF</a> free one-day pass</li></ul></td>
                                </tr>
                                </table> 




				</div>
				</div>
		</div>
		<!-- end of accordian group --> 
		
  <!-- begining of accordian group --> 		
<div class="accordion-group">
	<div class="accordion-heading">
		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Children - Under 16 </a>
	</div>
<div id="collapseTwo" class="accordion-body collapse">

			<div class="accordion-inner">
		<p>A child under 16 can obtain membership for 10€ for year.</p>
		<p>After the initial inscription fee, there are three different levels of memberships that can be obtained. </p>
            <table class="table span7">
            <tr>
                <td><img src="<?php echo get_template_directory_uri(); ?>/img/bronze.png" /></td>
                <td><strong>Bronze (15€)</strong><ul><li>T-shirt</li><li>10% off Surfrider affiliated stores</li></ul></td>
            </tr>
            <tr>
                <td><img src="<?php echo get_template_directory_uri(); ?>/img/silver.png" /></td>
                <td><strong>Silver (25€)</strong><ul><li>T-shirt</li><li>20% off Surfrider affiliated stores and restaurants</li><li><a href="http://www.portuguesesurffilmfestival.com" target="_blank">PSFF</a> free one-day pass</li></ul></td>
            </tr>
            <tr>
                <td><img src="<?php echo get_template_directory_uri(); ?>/img/gold.png" /></td>
                <td><strong>Gold (50€)</strong>
                    <ul><li>T-shirt</li><li>Hoodie</li><li>20% off Surfrider affiliated stores and restaurants</li><li>20% off a surf lesson with a Surfrider partner</li><li><a href="http://www.portuguesesurffilmfestival.com" target="_blank">PSFF</a> free one-day pass</li></ul></td>
            </tr>
            </table> 

		
		
			</div>
</div>
</div>

  <!-- end of accordian group --> 

  
  
  </div><!-- end of accordian --> 
  </div><!-- /.span10 offset1 -->
  </div><!-- /.row -->
  </div> <!-- /.container -->


<?php get_footer(); ?>


