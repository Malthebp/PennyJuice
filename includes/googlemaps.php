<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAHeCR8wRFXnZLJatgHBt6YXnQcJrI6Nj8'></script>
<div style='overflow:hidden;height:300px;width:400px;'>
    <div id='gmap_canvas' style='height:300px;width:400px;'></div>
    <style>
        #gmap_canvas img {
            max-width: none!important;
            background: none!important
        }
    </style>
</div> <a href='https://mapshomepage.com/'>mapshomepage.com</a>
<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d63a48a8bcc8a8046bdbc84822db3b975428e837'></script>
<script type='text/javascript'>
    function init_map() {
        var myOptions = {
            zoom: 11
            , center: new google.maps.LatLng(41.6100065, -90.51633119999997)
            , mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({
            map: map
            , position: new google.maps.LatLng(41.6100065, -90.51633119999997)
        });
        infowindow = new google.maps.InfoWindow({
            content: '<strong></strong><br>Davenport, IA 52807<br> <br>'
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
</script>