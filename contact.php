<?php
if(isset($_POST['submit'])) 
{
	$cur_data=file_get_contents('data.json');
	$arr_data=json_decode($cur_data,true);
    $arr = array(
        'name'     => $_POST['name'],
        'email'    => $_POST['email'],
        'message'  => $_POST['message']
    );
	$arr_data[]=$arr;
	$json_string = json_encode($arr_data);
	file_put_contents("data.json", $json_string);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact-Make It Happen.</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
 
</head>
<script async>(function(w, d) { w.CollectId = "5e5927f7585815595dcb6a64"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
<body>
<div id="wrapper"> 
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="index1.html"><i class="icon-info-blocks material-icons">exit_to_app</i>Makeithappen
					<div class="logoCaption">Interior Designs</div></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="index1.html">Home</a></li> 
						 <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="about.html">Company</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Our Team</a></li>
							<li><a class="waves-effect waves-dark" href="#">News</a></li>
							 
                            <!--<li><a class="waves-effect waves-dark" href="#">Investors</a></li>-->
                        </ul>
                    </li> 
						<li><a class="waves-effect waves-dark" href="services.html">Services</a></li>
                        <li><a class="waves-effect waves-dark" href="portfolio.html">Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="pricing.html">Pricing</a></li>
						<li class="active"><a href="contact.html" class="waves-effect waves-dark">Contact</a></li>
						<li><a class="waves-effect waves-dark" href="index.html">Log Out</a></li>
						<body>
                            <head>
                                <link rel="stylesheet" href="style4.css">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                            </head>
                            <body>
                                <div id="head"></div>
                                <form action="search.php" method="GET" class="login">
                                    <input type="text" placeholder="Search" name="username" id="uname"/>       
                                   <!--<input type="submit" value ="" style="float: right;"/>-->
                                   
                                </form>
                            </body>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Get<span class="color"> in Touch</span></h3>
									<p>Email us with any questions or enquiries or call +91-9876543210.</p>
                                    	<p>We would be happy to answer your questions and set up an appointment</p>
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
									<p> </p>
								  	
		   <!-- Form itself -->
          <form name="sentMessage" id="contactForm"  novalidate method="post" action="phpmailer.php">
			
			<div class="input-field"> 
			<input type="text" name="name" class="form-control" id="name" required
			           data-validation-required-message="Please enter your name" />
					   <label for="name" class="">   Name </label> 
			  <p class="help-block"></p>
			</div> 	
			
            <div class="input-field"> 
			<input type="email" class="form-control" id="email"  name="email" required
			   		   data-validation-required-message="Please enter your email" /> 
					   <label for="email" class="">   Email </label> 
	        </div> 	
			  
            <div class="input-field"> 
			<input type="text" class="form-control" id="message"  name="message" required
			   		   data-validation-required-message="Please enter your message" /> 
						 <label for="message" class="">   Message </label> 
			</div> 	
				 
			<input type="submit" name="submit" id="submit" value="Submit" >
			
			
          </form>
								</div>
								<div class="col-md-6">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30452.778342739726!2d78.39226183100904!3d17.431103330406945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb96cc62a87613%3A0xa8317fa22362be49!2sJubilee%20Hills%2C%20Hyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1582877349151!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							    </div>
	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
						<strong>Make It Happen.</strong><br>
						JC Main Road, Near Jubliee Hills<br>
						 Pin-50006 Hyderabad Telangana.</address>
						<p>
							<i class="icon-phone"></i> +91-9876543210 <br>
							<i class="icon-envelope-alt"></i> makeithappen@gmail.com
						</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="http://localhost/int_des/portfolio.html">Checkout our new posts of artwork from the Gallery!</a></li>
						<li><a class="waves-effect waves-dark" href="http://localhost/int_des/about.html">Click here to know more about our satisfied customers!!</a></li>
						<li><a class="waves-effect waves-dark" href="http://localhost/int_des/pricing.html">End of season Sale!! See the pricing section to know more!</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
					<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="https://www.forbes.com/sites/amandalauren/2019/12/23/twelve-interior-design-trends-well-see-in-2020/">Tired of seeing the same styles over and over again?!</a></li>
						<li><a class="waves-effect waves-dark" href="https://www.forbes.com/sites/amandalauren/2019/12/23/twelve-interior-design-trends-well-see-in-2020/">Colours are now the new neutrals!</a></li>
						<li><a class="waves-effect waves-dark" href="https://www.smalldesignideas.com/vintage-interior-design-style.html">Vintage accents are never out of fashion!</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							&copy; 2020 Make it Happen. 
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a class="waves-effect waves-dark" href="https://twitter.com/Rakshapai5?s=03" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a class="waves-effect waves-dark" href="https://www.linkedin.com/in/raksha-naravi-pai-5589a1198" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script> 
<script src="js/custom.js"></script>

 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
</body>
</html>