var campany_ = "watch";   
var addr_ = "경기도 고양시 일산동구 장항2동 무궁화로 20-11";
var lat_ = "37.6615701";
var lng_ = "126.7657738";

function initMap() {
    var myLocal = new google.maps.LatLng(lat_, lng_);

    var map = new google.maps.Map(document.getElementById('section_gmap'), {
      center: myLocal,
      zoom: 15
    });

    // 마커 생성부분
    var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
    './img/bottom.png';
    var marker = new google.maps.Marker({
    position: myLocal,
    map: map,
    animation: google.maps.Animation.DROP,
    icon: image
    });
    // 라벨 부분
    var infowindow = new google.maps.InfoWindow({
    content: campany_ + '<br>' + addr_ + '<br>'
     });
    marker.addListener('mouseover', function() {
        infowindow.open(map, marker);
    });
    marker.setMap(map);
}  