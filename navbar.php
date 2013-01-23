<?php
/*
Template Name: navbar
*/
?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Language Switcher') ) : ?><?php endif; ?>

<!-- NAVBAR -->
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
              
              
              
              
               <li><a href="<?php bloginfo('url'); ?>/about/">Quem Somos</a></li>
		
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aprender<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?php bloginfo('url'); ?>/problem/">O Problema</a></li>
				<li><a href="<?php bloginfo('url'); ?>/resources/">Recursos</a></li>
				<li><a href="<?php bloginfo('url'); ?>/psa/">PSAs</a></li>
			</ul>
		</li>
		
			
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agir<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?php bloginfo('url'); ?>/why-give/">Por que dar?</a></li>
				<li><a href="<?php bloginfo('url'); ?>/volunteer/">Voluntário</a></li>
				<li><a href="<?php bloginfo('url'); ?>/membership/">Torne-se um membro</a></li>
				<li><a href="<?php bloginfo('url'); ?>/calendar/">Agenda de Eventos</a> </li>
			</ul>
		</li>	
		
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<span class="caret"></span></a>
			<ul class="dropdown-menu">
            	<li><a href="<?php bloginfo('url'); ?>/surfrider-blog/">Blog</a></li>
				<li><a href="<?php bloginfo('url'); ?>/photos/">Fotos</a></li>
				<li><a href="<?php bloginfo('url'); ?>/video/">Vídeos</a></li>
			</ul>
		</li>
		

		<li> <a href="<?php bloginfo('url'); ?>/contact/">Contato</a></li>	

		<li> <a href="<?php bloginfo('url'); ?>/kid-zone/" ><img src="<?php echo get_template_directory_uri(); ?>/img/kidzone.png" class="visible-desktop" id="kidzonepic"><span class="hidden-desktop" id="kidzonemobile">Kid Zona</span></a></li>	
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

     
    </div><!-- /.navbar-wrapper -->
