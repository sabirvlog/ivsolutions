<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
		<meta name="author" content="Sabir Khan">
		<meta name="keywords" content="graphics, web design,web development,website">
		<meta name="description" content="A website about a digital marketing,website design and development">
		<title>IV Solutions</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/resp.css">
		<!-- Slider-Swiper-Animation Css link -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
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
				<h1>By The Innovators, <br> For The Creators</h1>
				<p>Our team at IV solutions strive to produce quality content. We believe in making this virtual era more fun, inventive, and pleasing for our client.
				</p>
				<button type="button" class="btn-main"><a href="contact.php">Get Started</a></button>
			</div>
	</div>
	<!-- container section -->
	<section class="sec-one" data-aos="fade-up">
		<!-- heading -->
		<h1>Our Services</h1>
		<p>Our Purpose to make it happen is really a great believe</p>
		<!-- boxes -->
		<div class="box-main">
			<div class="box" data-aos="fade-down">
				  <i class="fas fa-globe-americas"></i>
				<h2>Social Media</h2>
				<p>Our team will provide right boost to your social media accounts.</p>
			</div>
			<div class="box" data-aos="fade-left">
				  <i class="fas fa-credit-card"></i>
				<h2>E-Commerce</h2>
				<p>Let us create your dream store and get quality in abundance</p>
			</div>
			<div class="box" data-aos="fade-left">
				  <i class="fas fa-chart-line"></i>
				<h2>Direct Sale</h2>
				<p>Our team of sales professionals generate high qualify leads for you.</p>
			</div>
			<div class="box" data-aos="fade-down">
				  <i class="fas fa-edit"></i>
				<h2>Designe</h2>
				<p>We want to maximize the value of your projects by providing you best designs.</p>
			</div>
			<div class="box" data-aos="fade-left">
				<i class="fas fa-window-restore"></i>
				<h2>Development</h2>
				<p>We Will give you a standout presence in world of development for your projects.</p>
			</div>
			<div class="box" data-aos="fade-left">
				<i class="fas fa-envelope-open-text"></i>
				<h2>Content Marketing</h2>
				<p>We will make your brand world’s most beloved by our team’s creative skills.</p>
			</div>
			<div class="box" data-aos="fade-down">
				 <i class="fas fa-bullhorn"></i>
				<h2>Leads Generation</h2>
				<p>We provide the best inbound customer services, sales solution 24/7inbound outbound and multi-channel support.</p>
			</div>
			<div class="box" data-aos="fade-left">
				  <i class="fas fa-headset"></i>
				<h2>Inbound Services</h2>
				<p>We are premier providers of high qualify inbound customer services</p>
			</div>
			<div class="box" data-aos="fade-left">
				  <i class="fas fa-question-circle"></i>
				<h2>Help And Support</h2>
				<p>We would love you hinder all your problems. Feel free to ask
				</p>
			</div>
		</div>
	</section>
	<!-- Slider section -->
	<section class="slider">
		<div class="main">
		<h2>Some Projects</h2>
		<a href="#">VIEW ALL PROJECTS</a>
		</div>
		<!-- slider-starts -->
		<!-- slider-starts -->
		<div class="swiper mySwiper containers">
		<div class="swiper-wrapper slide">
			<div class="swiper-slide content-slide">
				<img src="projects/p1.png">
				<span>Globedispatch</span>
		</div>
		<div class="swiper-slide content-slide">
				<img src="projects/p2.png">
				<span>Usaeconomical</span>
		</div>
		<div class="swiper-slide content-slide">
				<img src="projects/p4.png">
				<span>Content Marketing</span>
			</div>
		<div class="swiper-slide content-slide">
				<img src="projects/p3.png">
				<span>Ivsolutions</span>
		</div>
		<div class="swiper-slide content-slide">
				<img src="projects/p5.png">
				<span>Alaqsainstitute</span>
		</div>
		<div class="swiper-slide content-slide">
				<img src="projects/p6.png">
				<span>Social Media</span>
		</div>
		</div>
	</div>	
		<div class="swiper-button-next"></div>
      	<div class="swiper-button-prev"></div>
      	<div class="swiper-pagination"></div>
	</section>
	<!-- content section -->
	<section class="sec-two" data-aos="fade-left">
		<!-- heading -->
		<h1>Our Clients</h1>
		<p>We have worked with great clients for what we are very proud.</p>
		<!-- boxes -->
		<div class="content-bx" data-aos="fade-up">
			<div class="bx" data-aos="fade-up">
				<img src="icons/icon1.png">
			</div>
			<div class="bx" data-aos="fade-up">
				<img src="icons/icon2.png">
			</div>
			<div class="bx" data-aos="fade-up">
				<img src="icons/icon3.png">
			</div>
			<div class="bx" data-aos="fade-up">
				<img src="icons/icon4.png">
			</div>
		</div>
	</section>
	<!-- 3rd- section -->
	<section class="sec-third">
		<div class="center">
			<h1>"Amazing Designs And Quality Work!"</h1>
			<p>
			Our organization is specialized to maximize your business yield and target your audience effectively. Every day, we are committed to help and giving our client a pathway to be successful in this growing digital era. 
			</p>
		</div>
		<!-- shadow section -->
		<div class="flex">
		<div class="left">
			<h1>Would You Like To Start A Project With Us!</h1>
			<p>
				Share With Us Your Details & Leave The Rest On Our Experts. 
			</p>
		</div>
		<div class="right">
			<button type="button"><a href="contact.php">Contact Us</a> </button>
		</div>
	</div>
	<!-- bottom line below the shadow section -->
	<div class="bt-line">
		<div class="left-line">
			<h3>Sum Numbers</h3>
			<p>Clients We Deal With</p>
		</div>
		<div class="right-line">
			<p><strong>159</strong>Satisfied <br> Clients</p>
			<p><strong>190</strong>Projects <br> Completed</p>
			<p><strong>21</strong>Accolades <br> Earned</p>
			<p><strong>9600</strong>Lines Of <br> Codes</p>
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
    padding: 2rem 4rem;z-index: 0;">
	
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
		<!-- Swiper JS code -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        grabCursor:true,

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
        0: {
        		slidesPerView: 3,
        	},
        1000: {
        		slidesPerView: 3,
        	},
        1300: {
        		slidesPerView: 3,
        	},
        },
      });
    </script>
</body>
</html>