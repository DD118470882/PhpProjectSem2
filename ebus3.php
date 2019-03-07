<html>
    <head>
        
          
        <meta charset="utf-8" />
        <title>Shop</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
      

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        
       <style>
           
           html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
           
                body {
                    background-image: url("purplebackground.jpg");
                    background-size: 100% 150%;
                        }
                                             
                                th, td {
                                        padding: 5px;
                                        }     
            </style>

            <header class="header_area">
            
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="home.html">Home</a></li>  
								<li class="nav-item"><a class="nav-link" href="Interests.html">Interests</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="Shop.html">Shop</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
     
    <link rel="stylesheet" href="../css/demo.css">
    <script src="../js/demo.js"></script>

        </header> 
            
    </head>
    </head>
    <body>
        <!--  //Starting the session to get the session variable from last page-->
        <?php
        
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is : ",$fullNameValue.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue.".";
        ?>
    </body>
</html>


