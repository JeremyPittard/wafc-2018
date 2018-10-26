// Initialize and add the map

function initMap() {
  // The location of wafc
  var wafc = { lat: -31.80399, lng: 115.757 };
  // The map, centered at wafc
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: wafc
  });

  // The marker, positioned at wafc
  var marker = new google.maps.Marker({
    draggable: false,
    animation: google.maps.Animation.DROP,
    position: wafc,
    map: map,
    icon: "wp-content/themes/badfunkstripe/img/icons/logo.svg",
    mapTypeControl: false
  });
}
