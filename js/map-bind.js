var map = L.map('clom_map');
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6IjZjNmRjNzk3ZmE2MTcwOTEwMGY0MzU3YjUzOWFmNWZhIn0.Y8bhBaUMqFiPrDRW9hieoQ', {
	maxZoom: 18,	
	id: 'mapbox.streets'
}).addTo(map);

function onLocationFound(e) {
	var radius = e.accuracy / 2;

	L.marker(e.latlng).addTo(map)
		.bindPopup("You are within " + radius + " meters from this point").openPopup();

	L.circle(e.latlng, radius).addTo(map);
}

function onLocationError(e) {
	alert(e.message);
}

map.on('locationfound', onLocationFound);
map.on('locationerror', onLocationError);

map.locate({setView: true, maxZoom: 16});
