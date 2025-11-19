<?php
// Database connection parameters
$host = 'localhost'; // your database host
$username = 'u235525263_med';  // your database username
$password = '3&RvJLgh&z';      // your database password
$dbname = 'u235525263_med'; // your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the current visit count from the database
$sql = "SELECT count FROM visitor_count WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $count = $row['count'];
    
    // Increment the count
    $count++;

    // Update the visit count in the database
    $update_sql = "UPDATE visitor_count SET count = $count WHERE id = 1";
    $conn->query($update_sql);
} else {
    // If the count does not exist, initialize it
    $insert_sql = "INSERT INTO visitor_count (count) VALUES (1)";
    $conn->query($insert_sql);
    $count = 1; // Initialize count to 1
}

$conn->close();
?>


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IABAMRR - The International Association for Bacteriophage and AMR (Antimicrobial Resistance) Research</title>
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="IABAMRR, biomedical research, antimicrobial research, microbiology, bacteriophages, AMR solutions, scientific innovation">
 <meta name="description" content="The International Association for Bacteriophage and AMR (Antimicrobial Resistance) Research is dedicated to advancing bacteriophage therapy and combating antimicrobial resistance through scientific research, innovation, and global collaboration." />

    <meta name="author" content="IABAMRR">
    <meta name='copyright' content='IABAMRR © 2024'>
    <meta name="robots" content="index, follow">  <!-- Allows search engines to index and follow links -->

    <!-- Mobile Responsive Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Canonical Tag (Prevents Duplicate URL Issues) -->
    <link rel="canonical" href="https://iabamrr.com">
    
    <!-- Open Graph Meta Tags (For Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:title" content="IABAMRR - The International Association for Bacteriophage and AMR (Antimicrobial Resistance) Research">
    <meta property="og:description" content="Join IABAMRR.">
    <meta property="og:image" content="https://iabamrr.com/static/images/logo.png"> <!-- Update with your logo -->
    <meta property="og:url" content="https://iabamrr.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags (For Twitter Sharing) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IABAMRR - International Association for Biomedical and Antimicrobial Research">
    <meta name="twitter:description" content="Fostering innovation in biomedical and antimicrobial research globally.">
    <meta name="twitter:image" content="https://iabamrr.com/static/images/logo.png"> <!-- Update with your logo -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://iabamrr.com/static/images/favicon.png"> <!-- Update favicon link -->
		<!-- Title -->
        <title>The International Association for Bacteriophage and AMR (Antimicrobial Resistance) Research</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/med-logo.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="team.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/card.css">
		<link rel="stylesheet" href="card1.css">
		<link rel="stylesheet" href="about.css">
		<link rel="stylesheet" href="mini-gallery.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=DM+Serif+Display:ital@0;1&family=Roboto+Slab:wght@100..900&family=Signika+Negative:wght@300..700&family=Signika:wght@300..700&display=swap" rel="stylesheet">
		<!-- Importing Fontawesome Icons👇 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Importing Poppins Font From Google Fonts👇 -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet" />
		
		<style>
			 .info-box {
        background: #f9f9f9;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: #333;
        margin-bottom: 20px;
		height:100%;
    }

    .info-title {
        font-size: 20px;
        margin-bottom: 15px;
        color: #333;
        font-weight: bold;
    }

    .list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .list li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
		font-size: 18px;
    }

    .list li i {
        margin-right: 10px;
        color: #4CAF50;
    }

    @media (max-width: 768px) {
        .info-box {
            text-align: center;
        }
    }
	
	.counter-container {
    text-align: center;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#visitCount {
    font-size: 24px;
    font-weight: bold;
    color: #2a9d8f;
}
 /* Flip card container */
  .flip-card {
  perspective: 1500px;
  width: 100%;
  max-width: 700px; /* or desired max width */
  height: 400px; /* fixed height ensures container height */
  margin: 0 auto; /* center horizontally */
}

  /* Inner container wrapping front and back */
  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    padding-top: 56.25%; /* 16:9 Aspect ratio */
    transition: transform 0.8s ease;
    transform-style: preserve-3d;
    cursor: pointer;
  }

  /* Flip on hover */
  .flip-card:hover .flip-card-inner,
  .flip-card:focus-within .flip-card-inner {
    transform: rotateY(180deg);
  }

  /* Front side */
  .flip-card-front,
  .flip-card-back {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    backface-visibility: hidden;
    border-radius: 0.5rem;
     overflow: hidden; /* crop overflow */
  }
  
  .flip-card-front img {
    border-radius: 0.5rem;
    height: 100%;
    width: 100%;
    object-fit: cover;
  }

  /* Back side */
.flip-card-back {
  background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
  color: white;
  transform: rotateY(180deg);
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

  /* Responsive adjustments */
  @media (max-width: 576px) {
    .flip-card-inner {
      padding-top: 75%; /* taller for narrow screens */
    }
  }
  
	</style>
    </head>
    <body>
		<div class="sidebar">
			<a id="sideb"  href="apply_membership.php" class="icon-link" id="membership-icon">
				<i class="fa fa-users" aria-hidden="true"></i> Apply for Membership
			</a>
		</div>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

		<!-- Get Pro Button -->
		<!-- <ul class="pro-features">
			<a class="get-pro" href="#">Get Pro</a>
			<li class="big-title">Pro Version Available on Themeforest</li>
			<li class="title">Pro Version Features</li>
			<li>2+ premade home pages</li>
			<li>20+ html pages</li>
			<li>Color Plate With 12+ Colors</li>
			<li>Sticky Header / Sticky Filters</li>
			<li>Working Contact Form With Google Map</li>
			<div class="button">
				<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
				<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
			</div>
		</ul> -->
	


		
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-7 col-12 d-flex justify-content-md-end justify-content-center">
							<!-- Contact -->
							<ul class="top-link">
								<li style="color: white;"><i class="fa fa-envelope" style="color:white"></i> <a href="mailto:iabamrrss.com">iabamrrss@gmail.com</a></li>
								<li style="color: white;"><i class="fa fa-phone" style="color:white;"></i>+91 99644 02525</li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								
								<li style="color:white;"><a href="admin/login.php">Admin Login</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.php"><img src="img/med-logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-9 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="index.php">Home</a>
											</li>
											<li><a href="about.html">Editorial Message</a></li>
											<li><a href="officials.html">Officials </a></li>
											<li><a href="#">Events <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="event.html"> - National Conference on One Health, One Solution - Bacteriophages Against AMR – 17 January, 2026, India</a></li>
													 <li><a href="event1.html"> - International Conference on AMR & Bacteriophages: A One Health Approach - 3-5 September 2026, India</a></li>
												</ul>
											</li>
											<li><a href="member.html">Membership</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="collaborators.html">Collaborators</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<!-- <div class="single-slider">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Welcome to <span>IABAMRRS</span> Services That You Can <span>Trust!</span></h1>
									<p>The International Association for Bacteriophage and AMR (Antimicrobial Resistance) Research  </p>
									<!-- <div class="button">
										<a href="#" class="btn">Apply for Membership </a>
										<a href="#" class="btn primary">Learn More</a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div> 
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Welcome to <span>The International Association for Bacteriophage and AMR Research (IABAMRRS)</span> <span></span></h1>
									<p>  </p>
									<br>
										<a href="apply_membership.php" class="btn">Apply for Membership </a>
										<a href="about.html" class="btn primary">Learn More</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
			
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->

		
		<section class="about-us-section">
			<div class="about-container">
				<svg class="background-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
					<path fill="#dff6ff" fill-opacity="0.1" d="M0,96L48,128C96,160,192,224,288,245.3C384,267,480,245,576,208C672,171,768,117,864,117.3C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
				  </svg>
			  <!-- Section Title -->
			  <div class="section-title">
				
				
				
			  </div>

				
				
			 
			  <div class="about-description hidden animate-fade">
				<h3 class="about-heading">About IABAMRR</h3>
				<div class="header-underline">
					<div class="header-underline"></div>
					
				</div>
				<p class="about-text">
				  The International Association for Bacteriophage and AMR (Antimicrobial Resistance) Research aims to address the global challenge of antimicrobial resistance through the promotion and advancement of bacteriophage research. Its Aim and vision typically includes the following elements:
				</p>
			  </div>
			
		

	  <!-- Vision and Mission Section -->
	  <div class="vision-mission-container">
		<!-- Aim Box -->
		<div class="about-box hidden animate-left">
		  <h3 class="about-heading">Aim</h3>
		  
		  <ul class="box-list">
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Promote Bacteriophage Research:</b> Encourage and support research on bacteriophages (viruses that infect bacteria) as potential alternatives or complements to antibiotics.

			</li>
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Combat Antimicrobial Resistance:</b> Develop innovative strategies to tackle antimicrobial resistance, using bacteriophages as a key tool in reducing the reliance on traditional antibiotics.

			</li>
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Foster Collaboration:</b> Create a platform for collaboration among researchers, clinicians, policymakers, and industry stakeholders to advance bacteriophage research and its applications.

			</li>
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Disseminate Knowledge:</b> Share knowledge and research findings through conferences, publications, and educational programs to increase awareness and understanding of bacteriophage therapy.

			</li>
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Policy Advocacy:</b> Advocate for policies and regulations that support bacteriophage research, development, and integration into healthcare practices.

			</li>
		  </ul>
		</div>
  
		<!-- Vision Box -->
		<div class="about-box hidden animate-right">
		  <h3 class="about-heading">Vision</h3>
		  <ul class="box-list">
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Global Leadership:</b> Become a leading global organization in the field of bacteriophage research and antimicrobial resistance solutions.
			</li>
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Sustainable Healthcare Solutions:</b> Promote sustainable and effective healthcare solutions that incorporate bacteriophage therapy to reduce the burden of drug-resistant infections.

			</li>
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Innovation and Development:</b> Drive innovation in the development of bacteriophage-based therapies, diagnostics, and preventive measures.
			</li>
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Educational Impact:</b> Enhance the global scientific community’s understanding of bacteriophages and their role in addressing AMR, contributing to better public health outcomes.

			</li>
			<li><i class="fa fa-check-circle"></i><b style="color: maroon;">Collaborative Network:</b> Build a robust international network of researchers, healthcare professionals, and organizations working together to combat AMR through bacteriophage research.

			</li>
		  </ul>
		</div>
	  </div>
	</div>
  </section>
  

		



	<!-- Start Fun-facts -->
	<div id="fun-facts" class="fun-facts section overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Fun -->
					<div class="single-fun">
						<i class="icofont icofont-home"></i>
						<div class="content">
							<span class="counter">225</span>
							<p>Lifetime Members</p>
						</div>
					</div>
					<!-- End Single Fun -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Fun -->
					<div class="single-fun">
						<i class="icofont icofont-user-alt-3"></i>
						<div class="content">
							<span class="counter"></span>
							<p>Annual Members</p>
						</div>
					</div>
					<!-- End Single Fun -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Fun -->
					<div class="single-fun">
						<i class="icofont-simple-smile"></i>
						<div class="content">
							<span class="counter"></span>
							<p>Institutional Members</p>
						</div>
					</div>
					<!-- End Single Fun -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Fun -->
					<div class="single-fun">
						<i class="icofont icofont-table"></i>
						<div class="content">
							<span class="counter">3</span>
							<p>Honurary Members</p>
						</div>
					</div>
					<!-- End Single Fun -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Fun-facts -->





	<section class="team-section">
		<!-- Background SVG Decorations -->
		<div class="svg-bg-top">
		  <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
			<path fill="#003865" opacity="10" d="M0,200 C250,350 450,0 500,100 L500,0 L0,0 Z"></path>
		  </svg>
		</div>
		<div class="svg-bg-bottom">
		  <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
			<path fill="#f9b233" opacity="10" d="M0,400 C150,300 350,500 500,400 L500,500 L0,500 Z"></path>
		  </svg>
		</div>
	  
		<!-- Team Section Content -->
		<div class="team-header">
		  <h2 style="color: maroon; font-size: 28px;"><b>Our Leadership</b></h2>
		<p>  Our dedicated leadership remains fully committed to serving the association, fostering collaboration among members, and working tirelessly to rebuild a stronger, outstanding, and litigation-free IABAMRR.</p>
		</div>
		<div>

		</div>
		<div class="team-grid">
		  <!-- First Row -->
		  <div class="team-member">
			<img src="img/vinod1.png" alt="Dr. C.S Vinod Kumar">
			<h3>Dr. C.S Vinod Kumar</h3>
			<p style="color: maroon;"><b>President</b></p>
		  </div>
		  <div class="team-member">
			<img src="Dr. Balaji.jpg" alt="Dr. C.S Vinod Kumar">
			<h3>Dr. Balaji V</h3>
			<p style="color: maroon;"><b>Vice-President</b></p>
		  </div>
		  <div class="team-member">
			<img src="Dr. Frenk Smrekar.jpg" alt="Dr. C.S Vinod Kumar">
			<h3>Dr. Frenk Semreker</h3>
			<p style="color: maroon;"><b>Vice-President</b></p>
		  </div>
		  <div class="team-member">
			<img src="img/Dr.Bruno.jpg" alt="Dr. C.S Vinod Kumar">
			<h3>Dr. Bruno Silvester L</h3>
			<p style="color: maroon;"><b>Vice-President</b></p>
		  </div>
		  <div class="team-member">
			<img src="img/Dr.khatuna Makalatia.jpg" alt="Dr. C.S Vinod Kumar">
			<h3>Dr. Khatuva Makalatia</h3>
			<p style="color: maroon;"><b>Vice-President</b></p>
		  </div>
		  <div class="team-member">
			<img src="Dr.palani.jpg" alt="Dr. C.S Vinod Kumar">
			<h3>Dr. P Palani</h3>
			<p style="color: maroon;"><b>Vice-President</b></p>
		  </div>
		  <div class="team-member">
			<img src="Dr.Ramesh.jpg" alt="Dr. Ramesh N">
			<h3>Dr. Ramesh N</h3>
			<p style="color: maroon;"><b>Secretary</b></p>
		  </div>
		  <div class="team-member">
			<img src="Dr.Suresh A.jpg" alt="Dr. Ramesh N">
			<h3>Dr. Suresh A </h3>
			<p style="color: maroon;"><b>Joint-Secretary</b></p>
		  </div>
		  <div class="team-member">
			<img src="koushik.jpg" alt="Dr. Pradeep A N">
			<h3>Dr. Kaushik Rajaram.</h3>
			<p style="color: maroon;"><b>Joint-Secretary </b></p>
		  </div>
		  <div class="team-member">
			<img src="Dr.Prashanth Manohar.jpg" alt="Dr. Pradeep A N">
			<h3>Dr. Prasanth Manohar</h3>
			<p style="color: maroon;"><b>Joint-Secretary </b></p>
		  </div>
		  <div class="team-member">
			<img src="Dr.Veni.jpg" alt="Dr.Veni Emilda J.K. ">
			<h3>Dr. Veni Emilda J.K.</h3>
			<p style="color: maroon;"><b>Treasurer </b></p>
		  </div>
		

		 
		  <div class="team-member">
			<img src="Dr.nithin Bandekar.jpg" alt="Dr. Nithin B ">
			<h3>Dr. Nithin Bandekar</h3>
			<p style="color: maroon;"><b>E.C.Member</b></p>
		  </div>
		  <!-- Second Row -->
		  <div class="team-member">
			<img src="Dr. sunitha (1).jpg" alt="Dr. Suneeta Kalasuramath">
			<h3>Dr. Suneeta K</h3>
			<p style="color: maroon;"><b>E.C.Member </b></p>
		  </div>
		  <div class="team-member">
			<img src="Dr.Malabika.jpg" alt="Dr. Malabika Biswas">
			<h3>Dr. Malabika Biswas</h3>
			<p style="color: maroon;"><b>E.C.Member</b></p>
		  </div>
		 
		  <div class="team-member">
			<img src="Dr.Pradeep.jpg" alt="Dr. Pradeep A N">
			<h3>`Dr. Pradeep A N`</h3>
			<p style="color: maroon;"><b>E.C.Member</b></p>
		  </div>
		</div>
		
	  </section>
	  




	  














		
		<!-- Start Why choose -->
				<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need Any Information <br> Call +91 99644 02525</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p> -->
							<br>
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Start portfolio -->
		
		
	<section class="notification-section container my-5">
  <h2 class="mb-4 text-center">Notifications & Events</h2>
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/med1.jpg" alt="Conference Image" class="img-fluid rounded shadow-lg" />
          </div>
          <div class="flip-card-back d-flex flex-column justify-content-center align-items-center p-4 rounded shadow-lg">
            <h3 class="card-title mb-3 text-white">Annual Medical Conference 2025</h3>
            <p class="card-date mb-3 text-white-50">September 20-22, 2025</p>
            <p class="card-description mb-4 text-white">Join leading experts in medicine for insightful sessions and networking.</p>
            <a href="#" class="btn btn-light btn-sm px-4">See More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>	
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About IABAMRR</h2>
								<p>The International Association for Bacteriophage and AMR (Antimicrobial Resistance) Research aims to address the global challenge of antimicrobial resistance through the promotion and advancement of bacteriophage research.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="about.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Editorial Message</a></li>
											<li><a href="officials.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Officials</a></li>
											<li><a href="event.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Events</a></li>
											<li><a href="contact.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us </a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Gallery</a></li>
											<!-- <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	 -->
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						
						<!-- <div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div> -->
						<div class="col-lg-6 col-md-6 col-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.8789044300784!2d75.94146599665761!3d14.430683248041303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bba2588e61bcc27%3A0xc633ebb07f5867e2!2z4LKO4LK44LONIOCyjuCyuOCzjSDgsrXgs4jgsqbgs43gsq_gspXgs4Dgsq8g4LK14LK_4LKc4LON4LKe4LK-4LKo4LKX4LKzIOCyuOCyguCyuOCzjeCypeCzhg!5e0!3m2!1skn!2sin!4v1737880657432!5m2!1skn!2sin" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<!-- <div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div> -->
						</div>
						<div class="counter-container">
        
        <p>visitors: <span id="visitCount"><?php echo $count; ?></span></p>
    </div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>Copyright © 2024 The International Association for Bacteriophage and AMR (Antimicrobial Resistance) Research - Designed by <a href="lktechnologies.in" target="lktechnologies.in">L K Technologies</a> </p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		<script src="script-count.js"></script>
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<script src="js/about.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
		<script>
		function openModal(id) {
			document.getElementById(`modal${id}`).style.display = 'flex';
		  }
		  
		  function closeModal(id) {
			document.getElementById(`modal${id}`).style.display = 'none';
		  }
		  function openModal(modalId) {
  			document.getElementById(`modal${modalId}`).classList.add("active");
		}

		function closeModal(modalId) {
  			document.getElementById(`modal${modalId}`).classList.remove("active");
		}

		</script>
		<script>
	document.addEventListener("DOMContentLoaded", function () {
  const teamMembers = document.querySelectorAll(".team-member");

  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add("show");
              observer.unobserve(entry.target); // Stop observing once animated
          }
      });
  }, { threshold: 0.3 }); // Trigger when 30% of the element is visible

  teamMembers.forEach(member => {
      observer.observe(member);
  });
});

		</script>
		<script>
			let visitorCount = 0;
		
			function incrementVisitorCount() {
			  visitorCount++;
			  document.getElementById('visitorCount').textContent = visitorCount;
			}
		
			window.onload = function() {
			  incrementVisitorCount();
			};
		  </script>
		
    </body>
</html>