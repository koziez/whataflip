<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" style="width:100%;height:100%;">
<head>
	<meta charset="utf-8">
    <title>What A Flip!</title>
	
	<link rel="stylesheet" href="css/gumby.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/libs/modernizr-2.6.2.min.js"></script>
	<script src='http://code.jquery.com/jquery.min.js' type='text/javascript'></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		var infowindow = null;
		var map;

		function initialize() {

			var centerMap = new google.maps.LatLng(32.7946448614895, -96.7663372104079);

			var myOptions = {
				zoom: 10,
				center: centerMap,
				mapTypeId: google.maps.MapTypeId.ROADMAP
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

			map = new google.maps.Map(document.getElementById("map"), myOptions);
			map.setOptions({styles: featureOpts});
			
			setMarkers(map, markers);
			infowindow = new google.maps.InfoWindow({
				content: "loading..."
			});
		}

		var test = '<div id="content">'+
		  '<div id="siteNotice">'+
		  '</div>'+
		  '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
		  '<div id="bodyContent">'+
		  '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
		  'sandstone rock formation in the southern part of the '+
		  'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
		  'south west of the nearest large town, Alice Springs; 450&#160;km '+
		  '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
		  'features of the Uluru - Kata Tjuta National Park. Uluru is '+
		  'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
		  'Aboriginal people of the area. It has many springs, waterholes, '+
		  'rock caves and ancient paintings. Uluru is listed as a World '+
		  'Heritage Site.</p>'+
		  '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
		  'http://en.wikipedia.org/w/index.php?title=Uluru</a> '+
		  '(last visited June 22, 2009).</p>'+
		  '</div>'+
		  '</div>';
		  
		var markers = [
			['sadasdasdasd', 32.745756, -96.999644, 8, test],
			['qwewqeqweqwe', 32.744128, -96.825357, 7, test],
			['asdasdasdasd', 32.891586, -96.471532, 6, test],
			['Bondi Beach', 32.865627, -96.788375, 5, test],
			['Coogee Beach', 32.838250, -96.864125, 4, test],
			['Cronulla Beach', 32.834658, -96.703195, 3, test],
			['Manly Beach', 32.954053, -96.822573, 2, test],
			['Maroubra Beach', 32.944913, -96.621314, 1, test]
		];

		function setMarkers(map, markers) {

			for (var i = 0; i < markers.length; i++) {
				var sites = markers[i];
				var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);
				var marker = new google.maps.Marker({
					position: siteLatLng,
					map: map,
					title: sites[0],
					zIndex: sites[3],
					html: sites[4]
				});

				var contentString = "Some content";

				google.maps.event.addListener(marker, "click", function () {
					infowindow.setContent(this.html);
					infowindow.open(map, this);
				});
			}
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body style="width:100%;height:100%;padding:0;margin:0;">

	<div id="top-menu">
		<div id="menu-title">
			<h3 style="color:#ffffff;margin-left:14px;margin-top:25px;">What A Flip</h3>
		</div>
		<div id="menu-body">
			<ul>
				<li>
					<a class="menu-item">
						<img src="img/house.jpg">
						<h4 class="text-shadowed">Asking: $190,000</h4>
						<h5 class="text-shadowed">Plano, Tx</h5>
						<input type="hidden" class="lat" value="32.865627">
						<input type="hidden" class="long" value="-96.788375">
					</a>
				</li>
				<li>
					<a class="menu-item">
						<img src="img/house2.jpg">
						<h4 class="text-shadowed">Asking: $190,000</h4>
						<h5 class="text-shadowed">Plano, Tx</h5>
						<input type="hidden" class="lat" value="32.838250">
						<input type="hidden" class="long" value="-96.864125">
					</a>
				</li>
				<li>
					<a class="menu-item">
						<img src="img/house3.jpg">
						<h4 class="text-shadowed">Asking: $190,000</h4>
						<h5 class="text-shadowed">Plano, Tx</h5>
						<input type="hidden" class="lat" value="32.834658">
						<input type="hidden" class="long" value="-96.703195">
					</a>
				</li>
				<li>
					<a class="menu-item">
						<img src="img/house4.jpg">
						<h4 class="text-shadowed">Asking: $190,000</h4>
						<h5 class="text-shadowed">Plano, Tx</h5>
						<input type="hidden" class="lat" value="32.954053">
						<input type="hidden" class="long" value="-96.822573">
					</a>
				</li>
				<li>
					<a class="menu-item">
						<img src="img/house5.jpg">
						<h4 class="text-shadowed">Asking: $190,000</h4>
						<h5 class="text-shadowed">Plano, Tx</h5>
						<input type="hidden" class="lat" value="32.944913">
						<input type="hidden" class="long" value="-96.621314">
					</a>
				</li>
				<li>
					<a class="menu-item">
						<img src="img/house6.jpg">
						<h4 class="text-shadowed">Asking: $190,000</h4>
						<h5 class="text-shadowed">Plano, Tx</h5>
						<input type="hidden" class="lat" value="32.891586">
						<input type="hidden" class="long" value="-96.471532">
					</a>
				</li>
				<li>
					<a class="menu-item">
						<img src="img/house7.jpg">
						<h4 class="text-shadowed">Asking: $190,000</h4>
						<h5 class="text-shadowed">Plano, Tx</h5>
						<input type="hidden" class="lat" value="32.744128">
						<input type="hidden" class="long" value="-96.825357">
					</a>
				</li>
				<li>
					<a class="menu-item">
						<img src="img/house8.jpg">
						<h4 class="text-shadowed">Asking: $190,000</h4>
						<h5 class="text-shadowed">Plano, Tx</h5>
						<input type="hidden" class="lat" value="32.745756">
						<input type="hidden" class="long" value="-96.999644">
					</a>
				</li>
			</ul>
		</div>
	</div>

<div id="map" style="width: 100%; height: 100%;"></div>
</body>
</html>
