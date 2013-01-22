<?php
/*
Template Name: navbar
*/ 
?>
<div id="langSwitch"><a href="#"> Switch to Portugese</a></div> 
<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      

        <div class="navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" id="menubtn" data-toggle="collapse" data-target=".nav-collapse">Menu</a>
            <a class="brand" href="<?php bloginfo('url'); ?>">
	            
	            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt"surfrider foundation Europe logo" id="logoimg"/>
	            
            </a>
            <a href="<?php bloginfo('url'); ?>/"><h1>Ericeira</h1></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
           
           
           
            <div class="nav-collapse collapse"> 
              <ul class="nav pull-right">
              
              
              
              
               <li><a href="<?php bloginfo('url'); ?>/about/">About Us</a></li>
		
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learn<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?php bloginfo('url'); ?>/problem/">The Problem</a></li>
				<li><a href="<?php bloginfo('url'); ?>/resources/">Resources</a></li>
				<li><a href="<?php bloginfo('url'); ?>/psa/">PSA's</a></li>
			</ul>
		</li>
		
			
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Take Action<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?php bloginfo('url'); ?>/why-give/">Why Give?</a></li>
				<li><a href="<?php bloginfo('url'); ?>/volunteer/">Volunteer</a></li>
				<li><a href="<?php bloginfo('url'); ?>/membership/">Become a Member</a></li>
				<li><a href="<?php bloginfo('url'); ?>/calendar/">Events Calendar</a> </li>
			</ul>
		</li>	
		
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<span class="caret"></span></a>
			<ul class="dropdown-menu">
            	<li><a href="<?php bloginfo('url'); ?>/surfrider-blog/">Blog</a></li>
				<li><a href="<?php bloginfo('url'); ?>/photos/">Photos</a></li>
				<li><a href="<?php bloginfo('url'); ?>/video/">Videos</a></li>
			</ul>
		</li>
		

		<li> <a href="<?php bloginfo('url'); ?>/contact/">Contact Us</a></li>	

		<li> <a href="<?php bloginfo('url'); ?>/kid-zone/" ><img src="<?php echo get_template_directory_uri(); ?>/img/kidzone.png" class="visible-desktop" id="kidzonepic"><span class="hidden-desktop" id="kidzonemobile">Kid Zone </span></a></li>	
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

     
    </div><!-- /.navbar-wrapper -->
