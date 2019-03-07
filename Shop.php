
<!-- Creating a session variable and assigning it to txtTotal-->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE>
<html lang="en" xmlns="http.//ww.w3.org/1999/xhtml">
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
                                                                <li class="nav-item"><a class="nav-link" href="consultingscroller.html">Shop</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
     
    <link rel="stylesheet" href="../css/demo.css">
    <script src="../js/demo.js"></script>

        </header> 
            
    </head>
    
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="ebus2.php">
                <h1> Shop Calculator</h1>
                <hr />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Select a Consulting Services</b></td>
                        </tr>
                        <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things(Robots)@ $2000</td>
                            <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" /></td>
                        </tr>
                            <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center><table cellspacing="10">
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr><td>-Discount @10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly/>   </td>
                        </tr>
                        <tr>
                            <td>+VAT @20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly</td>
                        </tr>
                        </table>
                </center>
           
            <center>
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate"/>
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            </center>
            
            </form>
        </div>
        <script type="text/javascript">
            function calcSub() {
                //Assigning variablesto the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var Autonomous = parseFloat(document.getElementById('Autonomous').value);
                var Immersive = parseFloat(document.getElementById('Immersive').value);
                
                // If radio buttons are clicked, values are assigned
                if (document.getElementById("Blockchain").checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById("Autonomous").checked) {
                    document.intCalc.txtSubTot.value = Autonomous;
                    subAmount = Autonomous;
                    calculation(subAmount);
                }
                else if (document.getElementById("Immersive").checked) {
                    document.intCalc.txtSubTot.value = Immersive;
                    subAmount = Immersive;
                    calculation(subAmount);
                }
            }
            //function for calculating the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * 0.10);
                var disctotal = parseFloat(subTotal - discCalc);
                var vatCalc = parseFloat(disctotal * 0.20);
                var total = parseFloat(disctotal + vatCalc);
                
                //Instering them into the correct feilds 
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
            function AmountClear() {
                document.getElementById("txtSubTot").value="";
                document.getElementById("txtDisc").value="";
                document.getElementById("txtVat").value="";
                document.getElementById("txtTotal").value="";
            }
            </script>
    </body>
</html>


