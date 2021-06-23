<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en"><head>

<div class="basket-title">
    <h3>Your Wishlist</h3>
</div>

  
<div id="product-grid-2">
    <div class="instrument">
                <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/original_e2.png'); ?>"/>
                </div>
                <div class="product-description">

                    <div class="product-title">ESP E-II Eclipse</div>
                    <div class="Availability">In-Stock</div>
                    <div class="product-price">$3,400.00</div>
                </div>
                <input type="submit" value="Add to basket" class="basket-button">
        </div>
    </div>

    <div class="instrument">
            <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/eclipse.png'); ?>"/>
            </div>
            <div class="product-description">
                <div class="product-title">ESP Eclipse</div>
                <div class="Availability">In-Stock</div>
                <div class="product-price">$6,000.00</div>
            </div>
            <input type="submit" value="Add to basket" class="basket-button">
    </div>
</div>

    <div id="product-grid-3">
        <input id='id-clear' type="submit" value="Clear Basket" class="basket-button">
    </div>

<p><a href="#top" class="to-top">Back to Top</a></p>

</html>