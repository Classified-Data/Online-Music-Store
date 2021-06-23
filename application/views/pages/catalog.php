<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Catalog</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<index>
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
        </div>

        <div id="product-grid">
	        
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

            <div class="instrument">
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
    </div>
</index>

<p><a href="#top" class="to-top">Back to Top</a></p>

</body>
</html>