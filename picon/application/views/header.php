<HTML>
<HEAD>
	<META charset="UTF-8" />
	
	<TITLE>Juguemos un picon</TITLE>
	
	<?php /*
	<script src="http://maps.googleapis.com/maps/api/js">
	</script>
	
	<script>
	function initialize() {
		var mapProp = {
		  center:new google.maps.LatLng(-40.811885, -62.996184),
		  zoom:13,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
		
		google.maps.event.addListener(map, 'click', function(e){
			placeMarker(e.latLng, map);
		});

		}

	function placeMarker(position, map) {
		  var marker = new google.maps.Marker({
		    position: position,
		    map: map
		  });
		  map.panTo(position);
		}
				
		google.maps.event.addDomListener(window, 'load', initialize);

	</script>
	*/?>
	
	<script>
          function check()
          {
             if (document.frm.uploadfile.value == '')
                {
                 alerta('Debe elegir un archivo');
                }
         
          }
        </script>

	
	<link rel="stylesheet" href="<?php base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php base_url();?>assets/bootstrap/css/bootstrap-theme.min.css">

	<script src="<?php base_url();?>assets/bootstrap/js/jquery-1.10.1.min.js"></script>
	<script src="<?php base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</HEAD>
	
	