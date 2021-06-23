<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en"><head>

<div class="basket-title">
    <h3>Checkout</h3>
</div>

    <div id="product-grid-2">
        <a>Thank you for your order!</a>
    </div>

    <div id="product-grid-2">
        <div class="instrument">
            <div class="product-image"><img class="product-image2" src="<?php echo base_url('assets/img/original_e2.png'); ?>"/>
            </div>
            <div class="product-title">ESP E-II Eclipse</div>
            <div class="Availability">Order Confirmed!</div>
            <div class="product-price">$3,400.00</div>
        </div>
    </div>

    <div id="product-grid-3">
        <a href="<?php echo base_url(); ?>Pages/view/wishlist" type="text">
        <input id='id-clear' type="submit" value="Return to Wishlist" class="basket-button">
        </a>
    </div>

</html>