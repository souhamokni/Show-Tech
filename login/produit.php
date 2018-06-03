<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Produits</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2062 Clothing 
http://www.tooplate.com/view/2062-clothing
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>


<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:false,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
    
</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

</head>
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<div id="header_top">
        	<div id="site_title"><a href="index.php">ShowTech</a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="produit.php" class="selected">Produits</a>
                        <ul>
                            <li><a href="ord.php">Ordinateurs</a></li>
                            <li><a href="tel.php">Téléphones</a></li>
                            <li><a href="acc.php">Accessoires</a></li>
                      	</ul>
                    </li>
                    <li><a href="about.html">A Propos</a></li>
                    <li><a href="contact.html" class="last">Contact</a></li>
                    <li><a href="./logout.php" >Deconnexion</a></li>

                </ul>
                <br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->
        
        <div id="header_bottom">
            
             <div id="tooplate_search">
                <form action="#" method="get">
                  <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
        </div> <!-- END of header bottom -->
    </div> <!-- END of header -->
    

    <!-- houni bech n7otou les produits mta3na  -->

    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    	<div class="product">
        	<h1>Produits</h1>
            <?php
                $conn = new mysqli("localhost", "root", "123456789a", "DAW");
                $sql = "SELECT id,nameP,images FROM produits";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())     {
                    echo "<div class='product_box'>
                    	<div class='img_box'><span></span>
	                        <a href='productdetail.php?id=".$row["id"]."'><img width='144px' hight='144px' src='../images/product/".$row["images"]."' alt='image' /></a>
			        	</div>
                        <h2> <a href='productdetail.php?id=".$row["id"]."'>".$row["nameP"]."</a></h2>
                    </div>";
                }
            ?>
		</div>
        
        <hr />
        
           
        
            
        <div class="clear"></div>
    </div> <!-- END of main -->
    
</div> <!-- END of wrapper -->

<div id="tooplate_bottom_wrapper">
	<div id="tooplate_bottom">
    	<div class="col col_4">
        	<h4>Information</h4>
      		 <ul class="list_bullet">
                <li><a href="#">Consectetur adipiscing eli</a></li>
                <li><a href="#">Nullam vulputate est</a></li>
                <li><a href="#">Duis porta velit</a></li>
                <li><a href="#">Pretium suscipit</a></li>
                <li><a href="#">Nullam eu diam</a></li>
                <li><a href="#">Duis in libero est</a></li>
            </ul>
        </div>
        <div class="col col_4">
        	<h4>Services &amp; Support</h4>
      		<ul class="list_bullet">
                <li><a href="#">Duis porta velit</a></li>
                <li><a href="#">Pretium suscipit</a></li>
                <li><a href="#">Nullam eu diam</a></li>
                <li><a href="#">Duis in libero est</a></li>
                <li><a href="#">Aenean tincidunt</a></li>
                <li><a href="#">Morbi tempus iaculis</a></li>
            </ul>
        </div>
        <div class="col col_4 twitter">
        	<h4>Pages</h4>
      		<ul class="list_bullet">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="about.html" class="selected">About</a></li>
                <li><a href="faqs.html">FAQs</a></li>
                <li><a href="contact.html" class="last">Contact</a></li>
            </ul>     
            
            
        </div>
        <div class="col col_4">
        	<h4>Newsletter</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      		<div id="tooplate_newsletter">
                <form action="#" method="get">
                  <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            <div class="clear h30"></div>
            <a href="#"><img src="images/facebook.png" alt="Facebook" /></a>
            <a href="#"><img src="images/google.png" alt="Google" /></a>
            <a href="#"><img src="images/skype.png" alt="Skype" /></a>
            <a href="#"><img src="images/twitter2.png" alt="Twitter" /></a>
        </div>
        <div class="clear"></div>
    </div> <!-- END of bottom -->
</div> <!-- END of bottom wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	Copyright © 2048 Your Company Name
        
        - Designed by <a href="http://www.tooplate.com">Tooplate</a>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->

</body>
</html>