function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(49.8422096,-99.949999),
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);