<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>INFS3202 Project</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">  
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php 
        //auto logout after 20 sec
		$time = 20;
		if( !isset($_SESSION['time']) )
		$_SESSION['time'] = time() + $time; 

		$waiting_period = time() - $_SESSION['time'];

		if($waiting_period > $time)
		{
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('login');
		}
        ?>
        <script>
            //SAVE SCROLL POSITON
            window.onbeforeunload = function(event) 
            {
                localStorage.setItem('savedpositionX', window.scrollX);
                localStorage.setItem('savedpositionY', window.scrollY);
            };

            document.addEventListener("scroll", function(event) 
            { 
                var savedpositionX = localStorage.getItem('savedpositionX');
                var savedpositionY = localStorage.getItem('savedpositionY');

                if (savedposition) window.scrollTo(savedpositionX, savedpositionY);
            });
        </script>
    </head>

<body>
    <header>
        <div class="grid-container">

            <div class="item1">
                <h1><a href="<?php echo base_url(); ?>Pages/view/home" type="text">Welcome to online music store!</a></h1>
            </div>

            <div class="item2">
                <nav class="navbar navbar-expand-lg">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <ul class="navbar-nav my-lg-0">
                <?php if(!$this->session->userdata('logged_in')) : ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>login">Login</a>
                    </li>
                    <?php endif; ?>
                    <?php if($this->session->userdata('logged_in')) : ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>login/logout">Logout</a>
                    </li>
                    <?php endif; ?>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                <?php echo form_open('ajax'); ?>
                <input class="form-control mr-sm-2" type="search" placeholder="What are you looking for?" aria-label="Search">
                
                <button class="search-button" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Find It!</button>
                <?php echo form_close(); ?>
                </form>
                </nav>
            </div>

            <?php if($this->session->userdata('logged_in')) : ?>
                <div class="item3">
                    <div class="shopping-cart">
                        <a href="<?php echo base_url(); ?>Pages/view/wishlist">
                            <i class="fa fa-shopping-cart"></i> 
                        My Wishlist
                        </a> 
                    </div>
                </div>
            <?php endif; ?>

            <div class="item4">
                <div class="shopping-cart">
                    <a href="<?php echo base_url(); ?>Pages/view/basket" type="text">
                    <i class="fa fa-shopping-cart"></i> 
                        My Basket: 
                        <div class="price">
                            <b>
                                $3,400
                            </b>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </header>
</body>

<nav id="navigation_bar">
    <ul>
        <a href="<?php echo base_url(); ?>Pages/view/home" type="text">
            Homepage
        </a>
    </ul>
    <ul>
        <a href="<?php echo base_url(); ?>Pages/view/catalog" type="text">
            Catalog
        </a>
    </ul>
    <ul>
        <a href="<?php echo base_url(); ?>Pages/view/milestone3" type="text">
            Milestone 3
        </a>
    </ul>
    <ul>
        <a href="<?php echo base_url(); ?>login" type="text">
            Sign In / Register
        </a>
    </ul>
</nav>

<?php/*Lecture code for AJAX below - INFS3202 - SEMESTER 1, 2021*/?>
            
<div class="container">
<div class="collapse" id="collapseExample">
<div class="card card-body" id="result">

</div>
</div>

<script>
    $(document).ready(function(){
    load_data();
        function load_data(query){
            $.ajax({
            url:"<?php echo base_url(); ?>ajax/fatch",
            method:"GET",
            data:{query:query},
            success:function(response){
                $('#result').html("");
                if (response == "" ) {
                    $('#result').html(response);
                }else{
                    var obj = JSON.parse(response);
                    if(obj.length>0){
                        var items=[];
                        $.each(obj, function(i,val){
                            items.push($("<h4>").text(val.filename));
                            if (val.filename.includes("jpg")) {
                                items.push($('<img width="320" height="240" src="' +'<?php echo base_url(); ?>/uploads/' +val.filename + '" />'));
                            }else{
                                items.push($('<video width="320" height="240" controls><source  src="' +'<?php echo base_url(); ?>/uploads/' +val.filename + '" type="video/mp4"></video>'));
                            }
                    });
                    $('#result').append.apply($('#result'), items);         
                    }else{
                    $('#result').html("Not Found!");
                    }; 
                };
            }
        });
        }
        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != ''){
                load_data(search);
            }else{
                load_data();
            }
        });
    });
</script>
</div>
            



