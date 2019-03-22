<?php
session_start() ;
$fullNameValue = "";
$totalValue2 = "";
/*
 * Session Created for the mobile number
 */
$totalValue = $_POST['txtTotal'] ;
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        
            <head>
        <meta charset="utf-8" />
        <title>Shop 1</title>
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
  background-image: url("img/photobackground.jpg");
  background-size: 110%, 110%;
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
                                                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>  
								<li class="nav-item"><a class="nav-link" href="Interests.html">Interests</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="Shop.php">Shop</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
     
    <link rel="stylesheet" href="../css/demo.css">
    <script src="../js/demo.js"></script>

        </header> 
            
    </head>
        
        <title>Page 2</title>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                 <center>
                     <table cellspacing="10">
                         <tr>
                             <td><b></b></td>
                             <td><b>Enter in your details below</b></td>
                         </tr>
                         <tr>
                             <td>Name</td>
                             <td><input type="text" id="txtName" name="txtName" value=""/></td>
                         </tr>
                         <tr>
                             <td>Phone Number</td>
                             <td><input type="number" id="txtNum" name="txtNum"  pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"
                                        title="Must enter a valid ten digit phone number." required/>
                             </td>
                         </tr>
                         
                         <tr>
                             <td>Password</td>
                             <td><input type="password" id="psw" name="psw" pattern="[0-9][0-9][0-9][0-9]" 
                                        title="Must enter a four digit pin." required/>
                             </td>
                         </tr>
                         
                           <tr>
                             <td>Email</td>
                             <td><input type="email" id="email" name="email" 
                                        title="Must enter a valid email." required/>
                             </td>
                         </tr>
                         
                         <tr>
                            
                             <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue?>"/></td>
                         </tr>     
                     </table>
                 </center>
                 
                 <center>
                     
                     
                     <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                 </center>
            </form>
            </div>        
    </body>
</html>