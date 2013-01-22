<?php

/*
Template Name: Contact
*/
?>


<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	function initialize() {
		var latlng = new google.maps.LatLng(38.987897, -9.419393);
		var settings = {
			zoom: 12,
			center: latlng,
			mapTypeControl: true,
			mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
			navigationControl: true,
			navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
			mapTypeId: google.maps.MapTypeId.TERRAIN
    };
    
      var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
    
    var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h2 id="firstHeading" class="firstHeading">Uluru</h2>'+
    '<div id="bodyContent">'+
    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
    'sandstone rock formation in the southern part of the '+
    'Northern Territory, central Australia. It lies 335 km (208 mi) '+
    'south west of the nearest large town, Alice Springs; 450 km '+
    '(280 mi) by road. Kata Tjuta and Uluru are the two major '+
    'features of the Uluru - Kata Tjuta National Park. Uluru is '+
    'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
    'Aboriginal people of the area. It has many springs, waterholes, '+
    'rock caves and ancient paintings. Uluru is listed as a World '+
    'Heritage Site.</p>'+
    '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
    'http://en.wikipedia.org/w/index.php?title=Uluru</a> (last visited June 22, 2009).</p>'+
    '</div>'+
    '</div>';
    
    var infowindow = new google.maps.InfoWindow({
    content: contentString
});

  
var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker11.png',
	new google.maps.Size(100,50),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,50),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var companyPos = new google.maps.LatLng(38.963999, -9.418749);
var companyMarker = new google.maps.Marker({
	position: companyPos,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Pescadores"
});  


    
   var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker1.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach1 = new google.maps.LatLng(39.032811, -9.418690);
var companyMarker = new google.maps.Marker({
	position: beach1,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Calada"
});
   
    var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker2.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach2 = new google.maps.LatLng(39.012023, -9.421727);
var companyMarker = new google.maps.Marker({
	position: beach2,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"São Lourenço"
});
  
     var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker3.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach3 = new google.maps.LatLng(39.004466, -9.425696);
var companyMarker = new google.maps.Marker({
	position: beach3,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Coxos"
});


  
    var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker4.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach4 = new google.maps.LatLng(38.987897, -9.419393);
var companyMarker = new google.maps.Marker({
	position: beach4,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Ribeira d'Ilhas"
});
    
  var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker5.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach5 = new google.maps.LatLng(38.980959, -9.421957);
var companyMarker = new google.maps.Marker({
	position: beach5,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Empa"
});
  
   
var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker6.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach6 = new google.maps.LatLng(38.978411, -9.421658);
var companyMarker = new google.maps.Marker({
	position: beach6,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Matadouro"
});   
  
 
 var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker7.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach7 = new google.maps.LatLng(38.971955, -9.420499);
var companyMarker = new google.maps.Marker({
	position: beach7,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"São Sebastião"
});  
  
   var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker8.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach8 = new google.maps.LatLng(38.967367, -9.419866);
var companyMarker = new google.maps.Marker({
	position: beach8,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Praia Norte"
});  
  
    
  var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker9.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach9 = new google.maps.LatLng(38.958760, -9.415874);
var companyMarker = new google.maps.Marker({
	position: beach9,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Praia Sul"
});  
  
	var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
	var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
	var beach10 = new google.maps.LatLng(38.942972, -9.416209);
	var companyMarker = new google.maps.Marker({
	position: beach10,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"Foz de Lizandro"
});  
  
    
var companyLogo = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker9.png',
	new google.maps.Size(100,35),
	new google.maps.Point(0,0),
	new google.maps.Point(50,50)
);
var companyShadow = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker_shadow.png',
	new google.maps.Size(130,35),
	new google.maps.Point(0,0),
	new google.maps.Point(65, 50)
);
var beach11 = new google.maps.LatLng(38.931539, -9.419882);
var companyMarker = new google.maps.Marker({
	position: beach11,
	map: map,
	icon: companyLogo,
	shadow: companyShadow,
	title:"São Julião"
});  
  
  
  google.maps.event.addListener(companyMarker, 'click', function() {
  infowindow.open(map,companyMarker);
}); 

 }
</script>
 

    <!-- Carousel
    ================================================== -->
    <div class="headerpics">
        <div class="fullpic">
	          	<img   src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="">
	    </div>
	    
    </div><!-- /.head pic -->


	
	  <div class="container" onload="initialize()">
	  <div class="row">
		  <div class="span10 offset1">
<h2>Contact Us</h2>
		<div class="span4">
		<div class="row">
			<p>surfriderericeira@gmail.com</p>
			<p>00351 918667358</p>
			<p>261867182</p>

		</div><!-- row --> 
		
		
		<div class="row">
		
					<a href="https://www.facebook.com/pages/Surfrider-Foundation-Ericeira/422379127821164?fref=ts" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" class="socialthumb" ></a>
					<a href="https://twitter.com/surfridericeira" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" class="socialthumb"></a>
					<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" class="socialthumb">
					<img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" class="socialthumb">
				
		</div><!-- row --> 
		  
		 </div><!-- close span 4 left -->  
		  
		<div class="span5">
		<h4>Find your local representative</h4>
				  <div id="map_canvas" style="height:500px; border:1px solid black;"></div>
		</div><!-- close span 6 rightt --> 
		  
		  
		  
		  
		  </div></div></div>


<?php get_footer(); ?>