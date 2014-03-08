Gumby.ready(function() {
	console.log('Gumby is ready to go...', Gumby.debug());

	// placeholder polyfil
	if(Gumby.isOldie || Gumby.$dom.find('html').hasClass('ie9')) {
		$('input, textarea').placeholder();
	}
});

// Oldie document loaded
Gumby.oldie(function() {
	console.log("This is an oldie browser...");
});

Gumby.touch(function() {
	console.log("This is a touch enabled device...");
});


function detectBrowser() {
	var useragent = navigator.userAgent;
	var mapdiv = document.getElementById("map");

	if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
		mapdiv.style.width = '100%';
		mapdiv.style.height = '100%';
	} else {
		mapdiv.style.width = '600px';
		mapdiv.style.height = '800px';
	}
}

function appendMenuItem(ul,item,id){
	$(ul).append('<li><a class="menu-item"><img src="img/'+item[5]+'"><h4 class="text-shadowed">Asking: '+item[6]+'</h4><h5 class="text-shadowed">'+item[0]+'</h5><input type="hidden" class="lat" value="'+item[1]+'"><input type="hidden" class="long" value="'+item[2]+'"><input type="hidden" class="itemid" value="'+id+'"></a></li>');
}



// Document ready
$(function() {
	for(var i = 0; i < locations.length; i++){
		appendMenuItem('#menu-body ul',locations[i], i);
	}
	
	$('.menu-item').click(function(e){
		e.preventDefault();
		var latitude = $(this).children('.lat').val();
		var longitude = $(this).children('.long').val();
		var item = $(this).children('.itemid').val();
		var center =  new google.maps.LatLng(latitude,longitude);
		googleMap.setCenter(center);
		openMessage(item);
	});
	
	$(".fancybox").fancybox();
});

