<!-- PHP code for Contact -->
<?php
    if($_POST["submit"]) {
        $recipient="nimishagarwal.1997@gmail.com";
        $senderName=$_POST["name"];
        $senderEmail=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
    
        $mailBody="Name: $senderName \n Email: $senderEmail\n\n$message";
    
        mail($recipient, $subject, $mailBody, "From: $senderName <$senderEmail>");
    
        $thankYou="<p>Thank you! Your message has been sent.</p>";
    }
?>

<!-- Main HTML Code -->
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bharat Lohani</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font -->
		
		<link rel="shortcut icon" href="img/logo.png" />
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- Header Start -->
		<header id="home">
			
			<!-- Main Menu Start -->
			<div class="main-menu">
				<div class="navbar-wrapper">
					<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<!-- My Logo -->
								<a href="#home" class="navbar-brand"><img src="img/logo.png" alt="Logo" style="width: 50px; height: 50px; padding-bottom: 10px;"/></a>	
							</div>
							<!-- Navigation Buttons -->
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<!-- <li><a href="#home">Home</a></li> -->
									<li><a href="#about">About</a></li>
									<li><a href="#education">Education</a></li>
									<li><a href="#experience">Experience</a></li>
									<li><a href="#project">Projects</a></li>
									<li><a href="#research">Research</a></li>
									<li><a href="#features">Awards & Honors</a></li>
									<!-- <li><a href="#testimonials">Testimonials</a></li> -->
									<li><a href="#contact">Contact</a></li>
									<li><a href="blog.html">Research Blog</a></li>
									<li><a href="#links">Quick Links</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Menu End -->
			
			<!-- GENERALISED SLIDER CODE -->
			<!-- Sider Start -->
			<!-- <div class="slider">
				<div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators indicatior2">
						<li data-target="#fawesome-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#fawesome-carousel" data-slide-to="1"></li>
					</ol>
					
					<div class="carousel-inner" role="listbox">

						<div class="item active">
							
						</div>	

						<div class="item">
							
						</div>	

					</div>
				</div>
			</div> -->
			<!-- Sider End -->

			<!-- TOP SLIDERS SECTION -->
			<!-- <div class="slider">
				<div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators indicatior2">
						<li data-target="#fawesome-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#fawesome-carousel" data-slide-to="1"></li>
					</ol>
				 
					<div class="carousel-inner" role="listbox" style="height:500px; width:auto;"> -->
						<!-- First Active Slider -->
						<!-- <div class="item active">
							<img src="img/city.jpg" alt="Sider Big Image">
							<div class="carousel-caption">
								<h1 class="wow fadeInLeft">In any given moment we have two options: to step forward into growth or back into safety.</h1>
								<div class="slider-btn wow fadeIn">
									<a href="#" class="btn btn-learn">Learn More</a>
								</div>
							</div>
						</div> -->
						<!-- Next Slider -->
						<!-- <div class="item">
							<img src="img/geoinfo.jpg" alt="Sider Big Image">
							<div class="carousel-caption">
								<h1 class="wow fadeInLeft">The joy of engineering is to find a straight line on a double logarithmic diagram</h1>
								<div class="slider-btn wow fadeIn">
									<a href="#" class="btn btn-learn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- TOP SLIDERS SECTION -->
		</header>
		<!-- Header End -->
		
		<!-- ABOUT SECTION -->
		<section id="about" class="site-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="about-image wow fadeInLeft">
							<!-- My Picture -->
							<img src="img/blohani.jpg" alt="About Image" />
						</div>
					</div>
					<!-- Highlighted Details -->
					<div class="col-sm-6">
						<div class="about-text wow fadeInRight">
							<h3>Dr. BHARAT LOHANI</h3>
							<br>
							<h4>Professor</h4>
							<h4>Department of Civil Engineering</h4> 
							<h4>Indian Institute of Technology Kanpur - 208016, India</h4>
							<br>
							<h4>Executive Director</h4>
							<h4>Geokno India Pvt. Ltd.</h4>
							<a href="http://www.geokno.com/" target="_blank">
								<img src="img/geokno.png" width="150px" height="80px">
							</a>
							<br><br>
							<h4>Phone - +91-512-392 7413, +91 945346658</h4>
							<h4>Fax - +91-512-3927395</h4>
							<h4>Email - blohani@iitk.ac.in</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ABOUT SECTION -->
		
		<!-- EDUCATION SECTION -->

			<!-- Academic Education -->
			<section id="education" class="protfolio-padding">
				<!-- Heading -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="title">
								<h3> Academic <span> Record </span></h3>
							</div>
						</div>
					</div>
				</div>
				<!-- Academic Record -->				
				<div class="container">
					<div class="row">

						<div class="col-sm-4">
							<div class="progress-bar-custom wow fadeInLeft">
								<h5><strong>Doctor of Philosophy (1999)</strong></h5>
								<h5>The University of Reading, Reading, UK</h5>
								<h5>Remote Sensing and Environmental Sciences</h5>
							</div>
						</div>

						<div class="col-sm-4">	
							<div class="progress-bar-custom wow fadeInLeft">
								<h5><strong>Master of Engineering (1990)</strong></h5>
								<h5>The University of Roorkee, Roorkee, India</h5>
								<h5>Photogrammetric Engineering and Remote Sensing</h5>
							</div>
						</div>

						<div class="col-sm-4">	
							<div class="progress-bar-custom wow fadeInLeft">
									<h5><strong>Bachelor of Engineering (1988)</strong></h5>
									<h5>M.M.M. Engineering College, University of Gorakhpur, Gorakhpur, India</h5>
							</div>	
						</div>

					</div>
					<!-- Embedded Resume -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedEleven">
									<strong>Resume</strong>
								</a>
							</h4>
						</div>
						<div id="collapsedEleven" class="panel-collapse collapse">
							<div class="panel-body">
								<embed src="assets/resume.pdf" width="100%" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Area of Specialisation -->
			<section id="area-specialisation" class="site-padding">
			
				<!-- Heading -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="title">
								<h3 style="color:#fff;">Area of <span>Specialization</span></h3>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="row">
						<!-- Areas of interest in first Column -->
						<div class="col-sm-4">
							
							<div class="progress-bar-custom wow special-areas fadeInLeft">
								<h5><strong>Laser Scanning/LiDAR</strong></h5>
							</div>
							
							<div class="progress-bar-custom wow special-areas fadeInLeft">
								<h5><strong>Point cloud processing</strong></h5>
							</div>

							<div class="progress-bar-custom wow special-areas fadeInLeft">
								<h5><strong>Land Surveying</strong></h5>
							</div>

							<div class="progress-bar-custom wow special-areas fadeInLeft">
								<h5><strong>Optical spaceborne Remote Sensing</strong></h5>
							</div>
							
						</div>

						<!-- Areas of interest in Second Column -->						
						<div class="col-sm-4">
							
							<div class="progress-bar-custom wow special-areas fadeInLeft">
								<h5><strong>Global Positioning System (GPS)</strong></h5>
							</div>
							
							<div class="progress-bar-custom wow special-areas fadeInLeft">
								<h5><strong>Digital Image Processing</strong></h5>
							</div>

							<div class="progress-bar-custom wow special-areas fadeInLeft">
								<h5><strong>Photogrammetry</strong></h5>
							</div>

							<div class="progress-bar-custom wow special-areas fadeInLeft">
								<h5><strong>Geographical Information System (GIS)</strong></h5>
							</div>
							
						</div>
						
						<!-- Award Count -->
						<div class="col-sm-4">
							<div class="award-win wow fadeInRight">
								<a href="#features">
									<div class="trophy">
										<i class="fa fa-trophy"></i>
									</div>
									<h3>15+ Awards &<br/>30+ Recognitions</h3>
								</a>
							</div>
						</div>
					</div>
				</div>

			</section>
			
		<!-- EDUCATION SECTION -->

		<!--EXPERIENCE-->
		<section id="experience">

			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<!-- Dividing Long Headings into Two (Currently An Extra Space)-->
							<h3><span></span></h3>
						</div>
					</div>
				</div>
			</div>
			<!-- Heading -->			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3><span style="color: rgb(22, 2, 95)">Experience</span></h3>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<!-- First Column -->
					<div class="col-md-6">
						<div class="panel-group" id="accordion">

							<!-- Experience Field -->
							<div class="faqHeader"><h4>Research Experience</h4></div>
							
								<!-- Particular Panel  -->
								<div class="panel panel-default">
									<!-- panel heading -->
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<strong>Professor | IIT Kanpur</strong></strong>
											</a>
										</h4>
									</div>
									<!-- panel inner collapsed data -->
									<div id="collapseOne" class="panel-collapse collapse">
										<div class="panel-body">
											<strong>Research Areas:-</strong><br>
											- 3D laser imaging and LCS measurement<br>
											- Technology for motion correction and error analysis in laser scanning<br>
											- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
											- As built mapping using terrestrial laser scanning of complex structures<br>
											- Development of LiDAR simulator-airborne and spaceborne<br>
											- GIS for optimized land consolidation<br>
											- Landmark based next level of navigation under GIS environment 
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
												<strong>Associate Professor | IIT Kanpur</strong>
											</a>
										</h4>
									</div>
									<div id="collapseTen" class="panel-collapse collapse">
										<div class="panel-body">
												<strong>Research Areas:-</strong><br>
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment 
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
												<strong>Assistant Professor | IIT Kanpur</strong>
											</a>
										</h4>
									</div>
									<div id="collapseEleven" class="panel-collapse collapse">
										<div class="panel-body">
												<strong>Research Areas</strong>
												- Information (buildings / tidal channels) extraction from airborne altimetric LiDAR data<br>
												- Development of an airborne altimetric LiDAR simulator<br>
												- Development of return waveform and point cloud simulators for LLRI instrument onboard Chandrayan-1 <br>
												- Virtual visualisation of terrain using LiDAR and photographic data<br>
												- Propagation modelling using high resolution LiDAR data (sound and flood)<br>
												- Prediction of accuracy obtainable by GPS in urban environment for LBS applications
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
												<strong>Research officer | The University of Reading, UK</strong>
											</a>
										</h4>
									</div>
									<div id="collapseTwelve" class="panel-collapse collapse">
										<div class="panel-body">
											Worked on CORILA project which included development of a colour edge detector and further planning of the CORILA project.
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">
												<strong>Lecture and Sr. Lecture | IT-BHU</strong>
											</a>
										</h4>
									</div>
									<div id="collapseThirteen" class="panel-collapse collapse">
										<div class="panel-body">
												<strong>Research Area</strong>
												DEM and Image Processing 
										</div>
									</div>
								</div>

							<div class="faqHeader"><h4>Teaching Experience</h4></div>
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<strong>National Ilan University, Yilan Taiwan</strong>
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											<strong>Teaching Area</strong><br>
											- Surveying<br>
											- LiDAR Technology<br>
											- Photogrammetry<br>
											- Remote Sensing<br>
											- Thesis writing and presentation 
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<strong>IIT Kanpur</strong>
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
												<strong>Teaching Area</strong><br>
												- Surveying, <br>
												- Remote Sensing,<br> 
												- LiDAR/ laser scanning<br>
												- Point cloud processing techniques, <br>
												- GIS, <br>
												- Image Processing, <br>
												- Computational methods,<br>  
												- Engineering Graphics, <br>
												- Laser Technology 											
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
												<strong>Department of Civil Engineering, I.T B.H.U, Varanasi</strong>
											</a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
												<strong>Teaching Area</strong><br>
												- Surveying, <br>
												- Photogrammetry,<br> 
												- Remote Sensing, <br>
												- GIS, <br>
												- GPS, <br>
												- other Civil Engineering Subjects											
											<br />
										</div>
									</div>
								</div>

							<div class="faqHeader"><h4>Courses Taught</h4></div>
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
												<strong>Courses taught at IIT Kanpur (2003 - till date)</strong>
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">
											- CE-432A Geographical Information System<br>
											- CE-371  Geoinformatics <br>
											- More to be added...
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
												<strong>Courses taught at IT-BHU Varanasi (1990-2002)</strong>
											</a>
										</h4>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse">
										<div class="panel-body">
											- CE-223  Surveying I  <br>
											- CE-261  Surveying Practice I <br>
											- More to be Added...
										</div>
									</div>
								</div>

							<div class="faqHeader"><h4>Industrial Experience/Interaction</h4></div>
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedSix">
												<strong>GMR group company Geokno India Pvt. Ltd. </strong>
											</a>
										</h4>
									</div>
									<div id="collapsedSix" class="panel-collapse collapse">
										<div class="panel-body">
											<strong>Director</strong><br>
											Attending Board meetings and providing vision for further growth of company. 
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedSeven">
												<strong>Geokno India Pvt. Ltd. (An IITK incubate company)</strong>
											</a>
										</h4>
									</div>
									<div id="collapsedSeven" class="panel-collapse collapse">
										<div class="panel-body">
												<strong>Chairman</strong><br>
												- This company was founded by me along with others, under the <strong>Faculty Entrepreneurship Policy of IIT Kanpur.</strong>
												The company developed knowledge products and services in the domain of Geospatial Technology, especially Laser Scanning.<br>
												- In view of the innovative developments by company and the social impact made it was awarded the <strong>“Best Start up company in ICT in 2011” by ISBA.</strong>  <br>
												- My work involved guiding the vision of company, providing technical knowhow and supervising projects. <br>
												- Developed <strong> 4 products</strong> and <strong>completed 18 projects.</strong><br>
												- Company successfully graduated in May 2012 with majority equity acquisition by GMR. 										
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedEight">
												<strong>Genesys International Corporation</strong>
											</a>
										</h4>
									</div>
									<div id="collapsedEight" class="panel-collapse collapse">
										<div class="panel-body">
											Advisory services to for laser mobile system.
										</div>
									</div>
								</div>
							
						</div>
					</div>
					
					<!-- Second Column -->
					<div class="col-md-6">
						<div class="panel-group" id="accordion">
							<div class="faqHeader"><h4>Thesis (M.Tech. / Ph.D.) Supervision</h4></div>
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNew">
												<strong>Ph.D. thesis supervision at IIT Kanpur</strong>	
											</a>
										</h4>
									</div>
									<div id="collapseNew" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment 
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNewOne">
												<strong>M.Tech. thesis supervision at IIT Kanpur (Completed)</strong>
											</a>
										</h4>
									</div>
									<div id="collapseNewOne" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment 
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedOne">
												<strong>M.Tech. thesis supervision at IIT Kanpur (OnGoing)</strong>
											</a>
										</h4>
									</div>
									<div id="collapsedOne" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment 
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedTwo">
												<strong>M.Tech. thesis supervision at IT BHU (Completed)</strong>
											</a>
										</h4>
									</div>
									<div id="collapsedTwo" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment 
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedThree">
												<strong>B.Tech. Project supervision at IIT Kanpur</strong>
											</a>
										</h4>
									</div>
									<div id="collapsedThree" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment 
										</div>
									</div>
								</div>

							<div class="faqHeader"><h4>Sponsored Projects</h4></div>
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNewTwo">
												<strong>Sponsored Research projects at IIT Kanpur </strong>
											</a>
										</h4>
									</div>
									<div id="collapseNewTwo" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNewThree">
												<strong>Sponsored projects applied and expected this year</strong>
											</a>
										</h4>
									</div>
									<div id="collapseNewThree" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedFour">
												<strong>Sponsored projects at IT-BHU, Varanasi</strong>
											</a>
										</h4>
									</div>
									<div id="collapsedFour" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment
										</div>
									</div>
								</div>
							
							<div class="faqHeader"><h4>Consultancy</h4></div>
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNewFour">
												<strong>Consultancy projects at IIT Kanpur</strong>
											</a>
										</h4>
									</div>
									<div id="collapseNewFour" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedFive">
												<strong>Consultancy projects at IT BHU</strong>
											</a>
										</h4>
									</div>
									<div id="collapsedFive" class="panel-collapse collapse">
										<div class="panel-body">
												- 3D laser imaging and LCS measurement<br>
												- Technology for motion correction and error analysis in laser scanning<br>
												- Propagation modelling using high resolution LiDAR data (flood, sound, GPS signal)<br>
												- As built mapping using terrestrial laser scanning of complex structures<br>
												- Development of LiDAR simulator-airborne and spaceborne<br>
												- GIS for optimized land consolidation<br>
												- Landmark based next level of navigation under GIS environment
										</div>
									</div>
								</div>

						</div>
					</div>
					
					<!-- Embedded Publications -->
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="title">
									<h3><span style="color: rgb(22, 2, 95)">Publications</span></h3>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsedTen">
									<strong>Publications and Books (till date)</strong>
								</a>
							</h4>
						</div>
						<div id="collapsedTen" class="panel-collapse collapse">
							<div class="panel-body">
								<embed src="https://docs.google.com/document/d/1gGBYZnCOxA15vwwQjKFa9MyTfWw11Hndofjh8ZlM9ko/edit?usp=sharing" width="100%" height="600" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
							</div>
						</div>
					</div>
											
				</div>
			</div>
		</section>
		<!--EXPERIENCE-->

		<!-- PROJECTS -->
		<section id="project" class="protfolio-padding">
			<!-- Heading -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3 style="color:aliceblue;">Featured <span>Projects</span></h3>
						</div>
					</div>
				</div>
			</div>

			<!-- Projects Grid (with Slider) -->
			<div class="slider">
				<div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators indicatior2">
						<li data-target="#fawesome-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#fawesome-carousel" data-slide-to="1"></li>
					</ol>
					
					<div class="carousel-inner" role="listbox">
						<!-- First Grid -->
						<div class="item active">
							<div class="featured-list">
								<div id="grid" class="clearfix">
									
									<!-- Particular Project Thumbnail -->
									<div class="thumb">
										<!-- Project Image -->
										<a href="#">
											<img src="img/protfolio1.jpg" alt="Feature Image" />
										</a>
										<!-- Project Detail -->
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="1"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>	
									</div>
									
									<!-- Particular Project Thumbnail -->
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio2.jpg" alt="Feature Image" />
										</a>
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="2"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio3.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="3"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio4.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="4"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio5.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="5"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio6.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="6"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio7.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="7"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio8.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="8"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>	

						<!-- Second Grid -->
						<div class="item">
							<div class="featured-list">
								<div id="grid" class="clearfix">
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio1.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="9"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
										
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio2.jpg" alt="Feature Image" />
										</a>
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="10"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio3.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="11"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio4.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="12"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio5.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="13"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio6.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="14"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio7.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="15"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
									
									<div class="thumb">
										<a href="#">
											<img src="img/protfolio8.jpg" alt="Feature Image" />
										</a>
										
										<div class="thumb-rollover">
											<div class="project-title">
												<button id="myBtn" data-bid="16"><h4>Project Title</h4></button>
												<h5>Category: Web Design</h5>
											</div>
										</div>
									</div>
																		
								</div>
							</div>
						</div>	

						<!-- The Modal -->
						<div id="myModal" class="modal">
							<!-- Modal content -->
							<div class="modal-content" id="1">
								<span class="close">&times;</span>
								<p>Description of the selected Project 1</p>
							</div>
							<div class="modal-content" id="2">
								<span class="close">&times;</span>
								<p>Description of the selected Project 2</p>
							</div>
							<div class="modal-content" id="3">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="4">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="5">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="6">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="7">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="8">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="9">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="10">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="11">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="12">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="13">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="14">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="15">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="16">
								<span class="close">&times;</span>
								<p>Description of the selected Project</p>
							</div>
							<div class="modal-content" id="17">
								<span class="close">&times;</span>
								<p>Limulator 4.0 aims at generating airborne LiDAR data as per user-defined flight and scanner parameters. The user can import 3D models in OBJ file format or in the form of meshes, with the basic unit as a triangle or quadrilateral.  The generated ALS data can be saved in ASCII or LAS format. Both systematic and random errors can be induced in trajectory, attitude, and range values, or directly in the ALS data generated. The user can also save the generated flight trajectory. A tool for basic flight planning is available here. This simulator can be an ideal tool for research and education purposes in the field of LiDAR technology.</p>
							</div>
						</div>

					</div>

				</div>
			</div>
			
			<!-- Extra Padding -->			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3 style="color:aliceblue;"> <span></span></h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- PROJECTS -->

		<!-- SOFTWARE DOWNLOAD --->
		<section class="pricing" id="pricing">
	
			<!-- Heading -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3 style="color:#fff;">Softwares <span> Developed </span></h3>
						</div>
					</div>
				</div>
			</div>
		
			<div class="container">
				<div class="row">

					<!-- Particualr Software Download -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<!-- Software Card -->
						<div class="panel price panel-green">
							<div class="panel-heading arrow_box text-center">
							<h3 style="font-size:28px;">LIMULATOR</h3>
							</div>
							<!-- <div class="panel-body text-center">
								<p class="lead" style="font-size:30px"><strong>Category</strong></p>
							</div> -->
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><i class="icon-ok text-success"></i> AIRBORNE ALTIMETRIC LIDAR SIMULATOR</li>
								<li class="list-group-item"><i class="icon-ok text-success"></i> Developer: ABC</li>
								<button class="feedback"><li class="list-group-item"><i class="icon-ok text-success"></i> FEEDBACK</li></button>
							</ul>
							<div class="panel-footer">
								<a class="btn btn-lg btn-block btn-success" href="https://home.iitk.ac.in/~blohani/download/Limulator.zip">DOWNLOAD</a>
							</div>
						</div>
						<!-- /Software Card -->
					</div>	
						
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					
						<!-- PRICE ITEM -->
						<div class="panel price panel-green">
							<div class="panel-heading arrow_box text-center">
							<h3 style="font-size:28px;">LASUTILITY </h3>
							</div>
							<!-- <div class="panel-body text-center">
								<p class="lead" style="font-size:30px"><strong>Category</strong></p>
							</div> -->
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><i class="icon-ok text-success"></i>Provides a range of utilities to work with LiDAR LAS format files</li>
								<li class="list-group-item"><i class="icon-ok text-success"></i> Developer: XYZ</li>
								<button class="feedback"><li class="list-group-item"><i class="icon-ok text-success"></i> FEEDBACK</li></button>
							</ul>
							<div class="panel-footer">
								<a class="btn btn-lg btn-block btn-success" href="#">DOWNLOAD</a>
							</div>
						</div>
						<!-- /PRICE ITEM -->
									
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					
						<!-- PRICE ITEM -->
						<div class="panel price panel-green">
							<div class="panel-heading arrow_box text-center">
							<h3 style="font-size:28px;">LIMULATOR 4.0</h3>
							</div>
							<!-- <div class="panel-body text-center">
								<p class="lead" style="font-size:30px"><strong>Category</strong></p>
							</div> -->
							<ul class="list-group list-group-flush text-center">
								<button id="myBtn" data-bid="17">
								<li class="list-group-item"><i class="icon-ok text-success"></i>Aims at generating airborne LiDAR...</li></button>
								<li class="list-group-item"><i class="icon-ok text-success"></i>
									Developer: <a href="https://www.facebook.com/shikhar.dayal.96?jazoest=26510012284484581108758688107829911668566597113521146555731091029948115995212169111856567951119010757101112655865100121841105268881105487104112455695109697797103103841048210077838785981196810990881181027610089897412011381" target="_blank">
									Shikhar Dayal</a></li>
									<button class="feedback"><li class="list-group-item"><i class="icon-ok text-success"></i>FEEDBACK</li></button>
							</ul>
							<div class="panel-footer">
								<a class="btn btn-lg btn-block btn-success" href="./assets/Limulator4.zip">DOWNLOAD</a>
							</div>
						</div>
						<!-- /PRICE ITEM -->
						
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					
						<!-- PRICE ITEM -->
						<div class="panel price panel-grey">
							<div class="panel-heading arrow_box text-center">
							<h3  style="font-size:28px;">Upcoming</h3>
							</div>
							<!-- <div class="panel-body text-center">
								<p class="lead" style="font-size:30px"><strong>Category</strong></p>
							</div> -->
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><i class="icon-ok text-success"></i> Software <br>Description</li>
								<li class="list-group-item"><i class="icon-ok text-success"></i> Developer: XYZ</li>
								<button class="feedback"><li class="list-group-item"><i class="icon-ok text-success"></i> FEEDBACK</li></button>
							</ul>
							<div class="panel-footer">
								<a class="btn btn-lg btn-block btn-primary" href="#">DOWNLOAD</a>
							</div>
						</div>
						<!-- /PRICE ITEM -->

					</div>
				
				</div>
			</div>

		</section>
		<!-- SOFTWARE DOWNLOAD --->

		<!-- LATEST FROM RESEARCH-->
		<section id="research" class="site-padding">
			<div class="container">
				<!-- Heading -->
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Latest From <span>Research</span></h3>
						</div>
					</div>
				</div>
				
				<div class="row">
				
					<!-- Single Blog -->
					<div class="col-sm-4">
						<a href="blog.html">
							<div class="single-blog">
								<!-- Image -->
								<img src="img/TLS_at_Bhitar.jpg" height="300" width="100%"/>
								<!-- Post heading -->
								<h4><a href="blog.html">Laser scanning of Archaeological Monuments/Sites</a></h4>
								<!-- Post Content -->
								<p class="show-read-more">We are working with ASI for scanning and archiving the archaeological heritage. A recent example of this work is the first Hindu temple made by non-perishable material at Bhiaar Gaon. <a href="http://home.iitk.ac.in/~blohani/TLS_Arch/Bhitar_ppt.pdf">The process of data collection and model generation is briefly shown in the power point presentation</a>.  Currently, the final model is being readied as a shadow-less integrated mesh model.  Image texture is applied to the model using simultaneously taken photographs.  This model will be further improved using high resolution very close range photographs which capture the fine carving details.
									The high resolution 3D model thus generated can facilitate replication of important heritage sites by constructing similar structures in the vicinity or elsewhere.  A visitor can first go to the simulated site before going to actual one.  The simulated site can also be made available through audio-visual approach in immersive environment.  This will reduce exposure of site (in terms of time of exposure and number of visitors) thus helping in conservation of the site. 
									We would like to hear from interested people in this area for sharing the expertise and collaboration. </p>
								<a href="blog.html">Read More>></a>
							</div>
						</a>
					</div>
					
					<!-- Single Blog -->
					<div class="col-sm-4">
						<a href="blog.html">
							<div class="single-blog">
								<iframe width="353" height="250" src="https://www.youtube.com/embed/WtGdRuSuaMU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<h4><a href="blog.html">Laser scanning of Archaeological Monuments/Sites</a></h4>
								<p class="show-read-more">We are working with ASI for scanning and archiving the archaeological heritage. A recent example of this work is the first Hindu temple made by non-perishable material at Bhiaar Gaon. <a href="http://home.iitk.ac.in/~blohani/TLS_Arch/Bhitar_ppt.pdf">The process of data collection and model generation is briefly shown in the power point presentation</a>.  Currently, the final model is being readied as a shadow-less integrated mesh model.  Image texture is applied to the model using simultaneously taken photographs.  This model will be further improved using high resolution very close range photographs which capture the fine carving details.
									The high resolution 3D model thus generated can facilitate replication of important heritage sites by constructing similar structures in the vicinity or elsewhere.  A visitor can first go to the simulated site before going to actual one.  The simulated site can also be made available through audio-visual approach in immersive environment.  This will reduce exposure of site (in terms of time of exposure and number of visitors) thus helping in conservation of the site. 
									We would like to hear from interested people in this area for sharing the expertise and collaboration. </p>
								<a href="blog.html">Read More>></a>
							</div>
						</a>
					</div>
					
					<!-- Single Blog -->
					<div class="col-sm-4">
						<a href="blog.html">
							<div class="single-blog">
								<img src="img/Tree_Final.gif" height="300" width="100%"/>
								<h4><a href="blog.html">Laser scanning of Archaeological Monuments/Sites</a></h4>
								<p class="show-read-more">TLS is a revolutionary technology due the speed at which it can capture a large number of accurate measurements at high speed.
									The bottlenecks faced in problem solving using the conventional technologies are eliminated. This is the reason that this technology is finding use in several areas.
								</p>
								<a href="blog.html">Read More>></a>
							</div>
						</a>
					</div>
					
				</div>
				
			</div>
		</section>
		<!-- LATEST FROM RESEARCH -->

		<!-- AWARDS SECTION -->
		<section id="features" class="site-padding">
			<!-- Heading -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3 style="color:aliceblue;">Awards & <span>Recognition</span></h3>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<!-- First Row -->
				<div class="row">
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-trophy "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>ISRS National Award for Geospatial Excellence 2012</h4>
										<p>Presented on 4th December 2013 during ISG-ISRS Annual Symposium at Vishakhapatnam</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
		
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-trophy "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Silver award for Limulator 2.0</h4>
										<p>for standing second in CATCON-5 during XXI ISPRS Congress, Beijing 3-11 July 2008.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-trophy"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Best ISBA Start up in ICT category</h4>
										<p>in 2011 for Geokno India Pvt Ltd, being incubated at IIT Kanpur and founded and mentored by me.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->			
				</div>

				<!-- Second Row -->				
				<div class="row">
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-file-text-o "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Best Paper Publication Award 2015</h4>
										<p>Indian Society of Remote Sensing for paper titled "Developing Basic Design & Mathematical Framework for a Mobile Mapping System – A Case Study Using Available Sensors" JISRS Vol. 42 (2), June 2014 pp 301-310</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-envelope"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>letters of Appreciation</h4>
										<p>Received multiple <strong>letters of appreciation from the Chairman, Senate, IIT Kanpur for extraordinary teaching</strong> on the basis of student feedback for courses CE371, CE671, CE676. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-file-text-o "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>SRS Award for best paper published</h4>
										<p>in JISRS in year 2007 for  paper titled "GCP Collection for Corona Satellite Photograps:Issuses and Methodology"  published in JISRS Vol. 34, No. 2, 2006.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
				</div>

				<!-- Third Row -->
				<div class="row">				
					<!-- Single Feature -->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<!-- Award Logo -->
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-university"></i>
									</div>
								</div>
								<!-- Award Details -->
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Elected Fellow</h4>
										<p>Indian Society of Remote Sensing, 2015</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature -->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-file-text-o "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Best paper award at INCA Congress 2012</h4>
										<p>Dehradun for paper “Flash LiDAR based surveillance system”.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-university"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Fellow</h4>
										<p>Institution of Surveyors India, 2007</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

				</div>
				
				<!-- Fourth Row -->
				<div class="row">
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-trophy "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Best Poster presentation</h4>
										<p>Award at Map World Forum 2007 to paper 3D visualization of LiDAR data, Co-authored with Ghosh, S.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-certificate "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Poster rated in top TEN</h4>
										<p>at AGIT/GI Forum 2007, 3-6 July 2007, Salzburg.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-trophy"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Best Poster Award at ISPRS conference</h4>
										<p>On Optical 3D measurement techniques,  9 – 13 July 2007, ETH Zurich, Switzerland.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
				</div>

				<!-- Fifth Row -->
				<div class="row">
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-graduation-cap "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Commonwealth Scholarship</h4>
										<p>Received the Commonwealth Scholarship for pursuing Ph.D. programme in the UK on qualifying through a series of screenings.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-graduation-cap "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>National Scholarship</h4>
										<p>Received the National Scholarship for securing First (Hons.) at High School Examination of U.P. Board.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
				</div>

			</div>
			
		</section>
		<!-- AWARDS SECTION -->

		<!-- TESTIMONIALS -->
		<section id="testimonials">
			<div class="container">

				<!-- Extra Padding (Room for divided long heading) -->
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3> <span></span></h3>
						</div>
					</div>
				</div>
				<!-- Heading -->
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Client <span>Testimonials</span></h3>
						</div>
					</div>
				</div>
				
				<!-- Sliders for testimonials -->
				<div id="fawesome-carousel-two" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#fawesome-carousel-two" data-slide-to="0" class="active"></li>
						<li data-target="#fawesome-carousel-two" data-slide-to="1"></li>
					</ol>
					
					<div class="carousel-inner" role="listbox">
						<!-- Active Slide -->
						<div class="item active">
							<div class="row">
								<!-- One -->
								<div class="col-sm-6">
									<div class="single-testimonials">
										<!-- Content -->
										<div class="text">
											<p>People influence people. Nothing influences people more than a recommendation from a trusted friend. A trusted referral influences people more than the best broadcast message. A trusted referral is the Holy Grail of advertising.</p>
										</div>
										<!-- Client Details -->
										<div class="profile-image">
											<img src="img/client.jpg" alt="Author Image" />
											<h4>Mark Zuckerberg</h4>
											<p>CEO Facebook</p>
										</div>
									</div>
								</div>
								<!-- Two -->
								<div class="col-sm-6">
									<div class="single-testimonials">
										<div class="text">
											<p>People influence people. Nothing influences people more than a recommendation from a trusted friend. A trusted referral influences people more than the best broadcast message. A trusted referral is the Holy Grail of advertising.</p></p>
										</div>
										
										<div class="profile-image">
											<img src="img/client.jpg" alt="Author Image" />
											<h4>Mark Zuckerberg</h4>
											<p>CEO Facebook</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<!-- Next Slide -->
						<div class="item">
							<div class="row">
								<!-- Three -->
								<div class="col-sm-6">
									<div class="single-testimonials">
										<div class="text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
										
										<div class="profile-image">
											<img src="img/client.jpg" alt="Author Image" />
											<h4>Jason Cheng</h4>
											<p>Marketing Manager</p>
										</div>
										
									</div>
								</div>
								<!-- Four -->								
								<div class="col-sm-6">
									<div class="single-testimonials">
										<div class="text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
										
										<div class="profile-image">
											<img src="img/client.jpg" alt="Author Image" />
											<h4>Kim Cheng</h4>
											<p>Marketing Manager</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>
		</section>
		<!-- TESTIMONIALS -->
		
		<!-- CONTACT -->
		<section id="contact">
			<!-- Extra padding -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3> <span></span></h3>
						</div>
					</div>
				</div>
			</div>
			<!-- Heading -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3 style="color:#fff;">Contact <span>Me</span></h3>
						</div>
					</div>
				</div>
			</div>
		
			<!-- Embedded Map (Can be used to show a place)-->
			<!-- <div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.272959726353!2d90.38896245!3d23.744945849999997!3m2!1i1024!2i768!4f13.1!4m3!3e1!4m0!4m0!5e0!3m2!1sen!2sbd!4v1465238371126" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div> -->
			
			<!-- Contact Form -->
			<div class="contact">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h4 style="color:aqua;">Please Contact Me For Any Kind Of Information Over a Cup of Tea</strong></h4>
							<form id="contactform" action="mailto:nimishagarwal.1997@gmail.com" method="post" enctype="text/plain" target="_blank`	">
								<!-- Input Fields -->
								<div class="row">
									<!-- Name Field -->
									<div class="col-lg-4 field">
										<input type="text" name="name" placeholder="* Your Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation">
										</div>
									</div>
									<!-- Email Field -->
									<div class="col-lg-4 field">
										<input type="text" name="email" placeholder="* Your Email" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation">
										</div>
									</div>
									<!-- Subject Field -->
									<div class="col-lg-4 field">
										<input type="text" name="subject" placeholder="Subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation">
										</div>
									</div>
									<!-- Content/Message Field -->									
									<div class="col-lg-12 margintop10 field">
										<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
										<div class="validation">
										</div>
										<p>
											<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Thank you after form submissin-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3> <span><?=$thankYou ?></span></h3>
						</div>
					</div>
				</div>
			</div>
		</section>		
		<!-- CONTACT -->

		<!-- footer -->
		<footer>
			<section id="links">
				<div class="container">
					<div class="row">
					
						<!-- 1 Column Footer -->
						<div class="col-sm-3">
							<div class="single-footer">
								<div class="footer-logo">
									<h5>Dr. BHARAT LOHANI</h5>
									<p>DEPARTMENT OF CIVIL ENGINEERING</p>
									<p>IIT KANPUR</p>
								</div>
							</div>
						</div>
						
						<!-- 2 Column Footer -->
						<div class="col-sm-3">
							<div class="single-footer">
								<h5>KEEP IN TOUCH</h5>
								<p>Phone - +91-512-392 7413, +91 945346658 </p>
								<p>Fax - +91-512-3927395</p>
								<p>Email - blohani@iitk.ac.in</p>
							</div>
						</div>
						
						<!-- 3 Column Footer -->
						<div class="col-sm-3">
							<div class="single-footer">
								<h5 style="margin-bottom: 10px;">QUICK LINKS</h5>
								<ul class="projects">
									<a href="blog.html"><li><img src="img/blog.jpeg"/></li></a>
									<a href="https://iitk.ac.in/" target="_blank"><li><img src="img/iitk.png"/></li></a>
									<a href="http://www.iitk.ac.in/civil/" target="_blank"><li><img src="img/civil.png"/></li></a>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</section>
		</footer>

		<!-- Copyright -->
			<div class="copyright" style="background:rgb(3, 3, 3)";>
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="copy-text">
								<p>All Rights Reserved | © 2018 <strong><a href="">Dr. Bharat Lohani</a></strong></p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="copy-text">
								<p>Website Developed by <strong><a href="https://www.facebook.com/nimish.52" target="_blank">Nimish Agarwal</a></strong></p>
							</div>
						</div>
						<!-- Social links -->
						<div class="col-sm-3">
							<div class="social">
								<ul>
									<li><a href="https://www.facebook.com/bharat.lohani" target="_blank"><i class="fa fa-facebook" style="margin-right: 10px;"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter" style="margin-right: 10px;"></i></a></li>
									<li><a href="https://www.linkedin.com/in/bharatlohani/" target="_blank"><i class="fa fa-linkedin" style="margin-right: 10px;"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-google-plus" style="margin-right: 10px;"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- footer -->
		
		
		<!-- Mandatory JAVASCRIPT files -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="js/paralax.js"></script>
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						 'scrollTop': $target.offset().top
					}, 900, 'swing');
					});
			});
		</script>
		<script>
			$(document).ready(function(){
				var maxLength = 200;
				$(".show-read-more").each(function(){
					var myStr = $(this).text();
					if($.trim(myStr).length > maxLength){
						var newStr = myStr.substring(0, maxLength) + '...';
						$(this).empty().html(newStr);
					}
				});
			});
		</script>	
		<script>
			$(document).on('click','#myBtn',function(){
				var myTargetModal = '#' + $(this).data('bid');
				$('#myModal').hide();
				$('.modal-content').hide();
				
				$('#myModal').fadeIn();
				$(myTargetModal).fadeIn();
			});

			$("body").on( "click",".close", function() {
				$('#myModal').hide();
				$('.modal-content').hide();
			});
		</script>		
		<script src="js/custom.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
