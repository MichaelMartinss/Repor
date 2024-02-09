$(document).ready(function() {
    map = new GMaps({
        div: '#map',
        zoom: 4,
        lat: -15.614931,
        lng: -56.082643
      });

    map.addMarker({ lat: -15.614931, lng: -56.082643, title: 'Cuibá - MT' });
    map.addMarker({ lat: -23.544635, lng: -46.575444, title: 'São Paulo - SP' });
    map.addMarker({ lat: -12.898735, lng: -38.331168, title: 'Lauro de Freitas - BA' });
    map.addMarker({ lat: -20.500009, lng: -54.597236, title: 'Campo Grande - MS' });
});