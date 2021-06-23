<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<index>
    <div class="content">
        
        <div class="contact-form">
            <ul>Find us at the location below!</ul>
            <div id="map"></div>
            <script>
                function initMap() {
                    let store = {lat: -27.550, lng: 153.101};
                    let map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 10,
                        center: store,
                    });
                    let market = new google.maps.Marker({
                        position: store,
                        map: map
                    });
                }
            </script>

            <script async defer 
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAghr6t321mnxZ3AXPRt9hjK79xNGIbnQY&callback=initMap&libraries=&v=weekly">
            </script>

            <ul>Drag and drop your image below!</ul>
        </div>

        <div class="homepage-grid-2">
        <?php echo form_open_multipart('upload/do_upload');?>
        <div class="row justify-content-center">
            <div class="col-md-4 col-md-offset-6 centered">
                <div class="form-group">
                    <input class="dropzone" type="file" name="userfile[]" size="20" multiple/> 
                </div>
                <div class="form-group">
                    <input type="submit" value="submit"/>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
        <h3></h3>
        <div class="main"> </div>
        </div>


    </div>
</index>

</body>
</html>