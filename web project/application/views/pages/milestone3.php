<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!--Lecture example-->
<body onload="getLocation()">
<script>
    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }else{
            alert("Geolocation is not supported");
        }
    }
    //function showPosition(position){
    //    alert("Latitude: " + position.coords.latitude + "\nLongitude: " + position.coords.longitude);
    //}
</script>


<index>
    <div class="content">

        <div class="contact-form">
            <ul>Find us at the location below!</ul>
            <div id="map"></div>

            <script type="text/javascript">
            var map;
            function initMap() {
                var store = {lat: -27.550, lng: 153.101};

                var mapLayer = document.getElementById("map");
                
                var myOptions = {
                    center: store,
                    zoom: 10}
                
                map = new google.maps.Map(mapLayer, myOptions);
            }

            function locate(){
                if ("geolocation" in navigator){
                    navigator.geolocation.getCurrentPosition(function(position){ 
                        
                        var UserLocation = "Latitude: " + position.coords.latitude + "<br> Longitude: " + position.coords.longitude;
                        var infoWindow = new google.maps.InfoWindow({map: map, content: UserLocation});
                        var currentLocation = { lat: position.coords.latitude, lng: position.coords.longitude};
                        infoWindow.setPosition(currentLocation);
                        
                    });
                }
            }

            function findstore(){
                
                var storeLocation = {lat: -27.550, lng: 153.101};
                var infoWindow = new google.maps.InfoWindow({map: map, content: storeLocation});

                var marker = new google.maps.Marker({
                    position: storeLocation, 
                    map: map,
                    title:"Our Store!"
                });

                infoWindow.setPosition(marker);       
            }
            

            </script>
            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAghr6t321mnxZ3AXPRt9hjK79xNGIbnQY&callback=initMap">
            </script>

            <ul><br>Use the button below to see your current location!</ul>  
            <div><button id="search-button" onClick="locate()"><i class="fa fa-search"></i> My Location</button></div> 

            <ul><br>Use the button below to find our store!</ul> 
            <div><button id="search-button" onClick="findstore()"><i class="fa fa-search"></i> Our Store</button></div> 

            <ul><br>Drag and drop your image below!</ul>
        </div>



        <div class="homepage-grid-2">
   
            <?php echo form_open_multipart('upload/do_upload');?>

            <div class="row justify-content-center">
                <div class="col-md-4 col-md-offset-6 centered">
                    <div class="form-group">
                        <input class="dropzone" type="file" name="userfile[]" multiple/> 
                    </div>
                    <div class="form-group">
                        <input id="search-button" type="submit" name="submit" value="upload"/>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <h3></h3>
            <div class="main"></div>
        </div>

    </div>


    <div class="content">

        <div class="catalog-title">
            <h3>Please browse our selection!</h3>
        </div>

        <div id="product-grid">

            <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/eclipse.png'); ?>"/>
                </div>
                <div class="product-description">
                    <div class="product-title">ESP Eclipse</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$6,000.00</div>
                </div>

                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>

            <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/original_e2.png'); ?>"/>
                </div>
                <div class="product-description">

                    <div class="product-title">ESP E-II Eclipse</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$3,400.00</div>
                </div>
                    
                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>
        </div>

        <div id="product-grid">

            <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/ec1000.png'); ?>"/>
                </div>
                <div class="product-description">

                    <div class="product-title">LTD EC-1000</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$1,650.00</div>
                </div>

                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>

            
            <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/american.jpg'); ?>"/>
                </div>
                <div class="product-description">
                    <div class="product-title">Fender American Stratocaster</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$3,600.00</div>
                </div>
                    
                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>
        </div>

        <div id="product-grid">

            <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/classic.png'); ?>"/>
                </div>
                <div class="product-description">
                    <div class="product-title">Les Paul Classic</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$4,000.00</div>
                </div>
                    
                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>

            <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/jaguar.jpg'); ?>"/>
                </div>
                <div class="product-description">

                    <div class="product-title">Fender Player Jaguar</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$1,200.00</div>
                </div>

                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>
        </div>

        <div id="product-grid">

            
            <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/lespaul.png'); ?>"/>
                </div>
                <div class="product-description">
                    <div class="product-title">Gibson Les Paul Custom</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$8,500.00</div>
                </div>
                
                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>

            <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/epi1.png'); ?>"/>
                </div>
                <div class="product-description">

                    <div class="product-title">Epiphone Les Paul Custom</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$1,350.00</div>
                </div>

                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>
        </div>


        <div id="product-grid">
        
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/epi2.png'); ?>"/>
                </div>
                <div class="product-description">

                    <div class="product-title">Epiphone Les Paul Special</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$330.00</div>
                </div>

                    <div class="cart-action"><input type="text" class="quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to Basket" class="basket-button"></div>
            </div>
    </div>

    <p><a href="#top" class="to-top">Back to Top</a></p>
</index>

</body>
</html>
