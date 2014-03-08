<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>What A Flip!</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="humans.txt">

  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
       However, there is a blank style.css in the css directory should you prefer -->
  <link rel="stylesheet" href="css/gumby.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="screen" type="text/css" src="js/libs/fancybox/jquery.jquery.fancybox-1.3.4.css"></script>

  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?v=3.12&sensor=false&language=en&region=US"></script>

</head>

<body>
<script type="text/javascript">
	google.maps.visualRefresh = true;
	var googleMap;
	var infowindow = null;

	var test = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
	  '<a class="fancybox" rel="group" href="img/house.jpg"><img src="img/house.jpg" alt="" style="width:200px;"/></a>'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'Heritage Site.</p>'+
      '</div>'+
      '</div>';
	  
	var locations = [
		['Plano, Tx', 32.745756, -96.999644, 8, test, 'house.jpg', '$190,000'],
		['Plano, Tx', 32.744128, -96.825357, 7, test, 'house2.jpg', '$190,000'],
		['Plano, Tx', 32.891586, -96.471532, 6, test, 'house3.jpg', '$190,000'],
		['Plano, Tx', 32.865627, -96.788375, 5, test, 'house4.jpg', '$190,000'],
		['Plano, Tx', 32.838250, -96.864125, 4, test, 'house5.jpg', '$190,000'],
		['Plano, Tx', 32.834658, -96.703195, 3, test, 'house6.jpg', '$190,000'],
		['Plano, Tx', 32.954053, -96.822573, 2, test, 'house7.jpg', '$190,000'],
		['Plano, Tx', 32.944913, -96.621314, 1, test, 'house8.jpg', '$190,000']
    ];
	
	var markers = [];
	
	function initialize(){
	
		var mapOptions = {
			zoom: 10,
			center: new google.maps.LatLng(32.780140,-96.800451),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: true
		}
		
		var featureOpts = [
			{
				stylers: [
					{ gamma: 0.7 },
					{ weight:1.4 },
					{ hue: '#77CAA7'}
				]
			},
			{
				featureType: 'landscape',
				elementType: 'all',
				stylers: [
					{hue : '#C2DB99' }
				]
			},
			{
				featureType: 'water',
				stylers: [
					{ color: '#77CDD8' }
				]
			},
			{
				featureType: 'road.highway',
				elementType: 'geometry.fill',
				stylers: [
					{ color: '#ffffff' }
				]
			},
			{
				featureType: 'road.highway',
				elementType: 'geometry.stroke',
				stylers: [
					{ visibility: 'off' }
				]
			}
		];

		googleMap = new google.maps.Map(document.getElementById('map'), mapOptions);

		googleMap.setOptions({styles: featureOpts});
		
		setMarkers(googleMap, locations);
	    infowindow = new google.maps.InfoWindow({
			content: "loading..."
		});

	}
	
	function setMarkers(map, locations) {

        for (var i = 0; i < locations.length; i++) {
            var local = locations[i];
            var siteLatLng = new google.maps.LatLng(local[1], local[2]);
            var marker = new google.maps.Marker({
                position: siteLatLng,
                map: map,
                title: local[0],
                zIndex: local[3],
                html: local[4]
            });

            google.maps.event.addListener(marker, "click", function () {
                infowindow.setContent(this.html);
                infowindow.open(map, this);
				map.panBy(200, 300);
            });
			
			markers.push(marker);
        }
    }
	
	function AutoCenter() {
		//  Create a new viewpoint bound
		var bounds = new google.maps.LatLngBounds();
		//  Go through each...
		$.each(markers, function (index, marker) {
		bounds.extend(marker.position);
		});
		//  Fit these bounds to the map
		map.fitBounds(bounds);
	}
	
	function openMessage(i) {
		google.maps.event.trigger(markers[i],'click');
	};
	
	google.maps.event.addDomListener(window, 'load', initialize);
  </script>

	<div id="top-menu" class="shadowed">
		<div id="menu-title">
			<h3 style="color:#ffffff;margin-left:14px;margin-top:25px;">What A Flip</h3>
		</div>
		<div id="menu-body">
			<ul>	
			</ul>
		</div>
	</div>
	
	<div id="map">
	</div>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <script src="js/libs/gumby.min.js"></script>
  <script src="js/libs/jquery.backstretch.min.js"></script>
  <script type="text/javascript" src="js/libs/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="js/libs/fancybox/jquery.fancybox-1.3.4.js"></script>
  
  
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  </body>
</html>
