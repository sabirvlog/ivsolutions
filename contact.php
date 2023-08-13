<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
		<meta name="author" content="Sabir Khan">
		<meta name="keywords" content="graphics, web design,web development,website">
		<meta name="description" content="A website about a digital marketing,website design and development">
		<title>IV Solutions</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/resp.css">
		<!-- fontawesome icons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fav-icon for domain -->
    <link rel="shortcut icon" href="logo/Bitmap.PNG">
    <!-- aos-css-animate -->
    <link rel="stylesheet" type="text/css" href="css/aos.css">
		<!-- aos-js-animate -->
    <script type="text/javascript" src="aos.js"></script>
    	<!-- JQuery-cdn Link -->
		<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
		<script>
		$(document).ready(function() {
			$('.icon').click(function(){
			$('.nav,.button').toggleClass('show');
			});
		});
	</script>
</head>
<body>
	  <!-- header section -->
		<header>
			<a href="#" class="logo">
				<img src="logo/Bitmap4.png">
			</a>
			<div class="nav">
			<ul data-aos="fade-right">
			<li><a href="index.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="services.php">services</a></li>
				<li><a href="contact.php">contact us</a></li>
			</ul>
			</div>
			<!-- burger for navigation -->
			<div class="icon">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<div class="button">
		<button type="button" class="btn" data-aos="fade-up"><a href="contact.php">Request Quote</a></button>

		</div>
		</header>

		<!-- main body of content -->
		<div class="hero" id="services">
			<div class="container" data-aos="fade-up">
				<h1>Contact Us</h1>
				<span>Contact For Premium Business <br> services</span>
				<p> 
					Are you still thinking to go digital or confused about wheater you can further grow your business? Its normal and you are not alone because IV solution is always with you.We Provide A Wide Range Of services, let us know what you need and leave the rest to our professionals.
				</p>
			</div>
	</div>

	<!-- contact section -->
	<section class="contact-sec">
		<div class="contact-main">
		<div class="cnt-form">
			<h1>Request Free Consultation</h1>
			<form action="email.php" method="post">
				<h3>Contact Us</h3>
				<label for="name">Name
				<input type="text" name="name" placeholder="Enter Your Name" required>
				</label>
				<label for="email">Email address
				<input type="email" name="email" placeholder="Enter Your Email"required>
				</label>
				<label for="number">Phone Number<font>(Optional)</font>
				<input type="number" name="number" placeholder="Enter Your Phone#">
				</label>
				<label for="message" class="message">Message
				<textarea type="text" name="message" placeholder="Enter Your Message Here....." required></textarea>
				</label>
				<!-- Form-button Input -->
				<input type="submit" value="Send message" class="form-btn">
			</form>
		</div>
		 <div class="social-details">
     <h1>Get in Touch</h1>
     <div class="details">
     <div class="aside">
     <i class="fas fa-map-marker-alt"></i>
  		<address class="aside-common">Vacation lane, Arlington <br> VA 22207,USA</address> 
  		</div>
  		<div class="aside">
  		<i class="fas fa-envelope"></i>
     	<a  class="aside-common" href="gmail.com">support@ivsolutions.llc</a> </div>
     	<div class="aside">
     	<i class="fas fa-phone-volume"></i>
     	<span class="aside-common"><b>+15714571780</b></span>
  	</div>
		</div>
	</div>
	</section>
	<section class="shadow">
		<!-- shadow section -->
		<div class="flex">
		<div class="left">
			<h1>Would You Like To Start A Project With Us!</h1>
			<p>
				Share With Us Your Details & Leave The Rest On Our Experts. 
			</p>
		</div>
		<div class="right">
			<button type="button">+15714571780</button>
		</div>
	</div> 
		<!-- doted lines -->
		<div class="sec-botom" data-aos="fade-up">
		<img src="about-images/dot.png">
		</div>
	</section>

	<!-- footer section -->
	<footer class="footer" data-aos="fade-up" style="position: relative;
    background-color: #f3f3f3;
    padding: 7rem 4rem 1rem;z-index: 0;">
	
  <div class="contact">
    <div class="col">
       <a href="#"><img src="logo/Bitmap.png"></a>
    </div>
    <div class="col">
      <h1>Company</h1>
      <ul>
	  <li><a href="index.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="services.php">services</a></li>
				<li><a href="contact.php">contact us</a></li>
      </ul>
     </div>
    <div class="col">
      <h1>Business</h1>
       <ul>
      	<li><a href="#">projects</a></li>
      	<li><a href="#">Our team</a></li>
      	<li><a href="#">facts</a></li>
      	<li><a href="#">Costumers</a></li>
      </ul>
    </div>
    <div class="social">
     <h1>Get in Touch</h1>
     <address class="common">Vacation lane, Arlington <br> VA 22207,USA</address> <br>
     <a  class="common" href="gmail.com">support@ivsolutions.llc</a> <br>
     <span class="common">+1 5714571780</span>
  </div>
  </div>
  <div class="copyright">
    <span>Copyright &copy;2022 <strong> IV Solutions </strong>| Powered by IV Solutions</span>
  </div>
 </footer>

<!-- JS-code for Animation scrolling -->
<script>
  AOS.init();
</script>

</body>
</html>