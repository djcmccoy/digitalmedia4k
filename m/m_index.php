<?php
function isMobileDevice() {
    return preg_match('/mobile|android|touch|samsung|blackberry|iphone|ipad|ipod|opera mini|iemobile|wpdesktop/', strtolower($_SERVER['HTTP_USER_AGENT']));
}

if (isMobileDevice()) {
    header("Location: ../m/m_index.php"); // Redirect to the mobile-specific page
    exit;
}
// Continue with the rest of your index.php code for desktop version
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DM DIGITAL MEDIA</title>

	<!-- Meta Data -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>
    <meta name="author" content="ArtStyles" />
    <meta name="description" content="A trendy, minimalistic and ultra modern HTML5 template for digital agency." />

    <!-- Twitter data 
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ArtTemplates">
    <meta name="twitter:title" content="DM4K">
    <meta name="twitter:description" content="A trendy, minimalistic and ultra modern HTML5 template for digital agency.">
    <meta name="twitter:image" content="assets/images/social.jpg">

    <!-- Open Graph data
    <meta property="og:title" content="ArtTemplate" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="your url website" />
    <meta property="og:image" content="assets/images/social.jpg" />
    <meta property="og:description" content="A trendy, minimalistic and ultra modern HTML5 template for digital agency." />
    <meta property="og:site_name" content="DM4K" />

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="192x192" href="../assets/favicons/android-chrome-192x192.png">
	<link rel="apple-touch-icon" sizes="512x512" href="../assets/favicons/android-chrome-512x512.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
	<link rel="shortcut icon" href="../assets/favicons/favicon-16x16.png" type="image/png">
	<link rel="shortcut icon" href="../assets/favicons/favicon-32x32.png" type="image/png">
	<link rel="icon" href="../assets/favicons/favicon.ico" type="image/x-icon">

    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css"/>

    <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q0T3M5CP45"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
 	 function gtag(){dataLayer.push(arguments);}
 	 gtag('js', new Date());
 	 gtag('config', 'G-Q0T3M5CP45');
	</script>	
</head>
	
<body>
    <!-- Preloader -->
    <div class="preloader">
	    <div class="preloader__wrap">
	        <img class="preloader__logo" src="assets/images/logo_white.svg" alt="DM4K">
		    <div class="preloader__progress"><span></span></div>
		</div>
	</div>

    <!-- Top -->
	<nav class="navbar">
	         <div class="mr-auto logo-container">
	     <a class="logo-link" href="index.html">
		<!-- Dark logo -->
    		<img class="logotype logotype__front dark-logo theme-invert" src="../assets/images/logo.svg" alt="Logo" />
  		<!-- Light logo -->
  		<img class="logotype logotype__back light-logo theme-invert" src="../assets/images/logo_white.svg" alt="Logo" />
</a>

	    </div>
		<div class="ml-sm-auto">
			 <!-- Theme Toggle -->
       			 <button id="themeToggle" style="cursor: pointer; margin-right: 10px; margin-left:20px; background: none; border: none; padding: 0;">
   			 <!-- Light Theme SVG (Visible by default) -->
   			 <img id="lightThemeSVG" src="assets/images/toggle_moon.svg" alt="Light Theme Icon" width="20">
   			 <!-- Dark Theme SVG (Hidden by default) -->
			<img id="darkThemeSVG" src="assets/images/toggle_sun.svg" alt="Dark Theme Icon" width="20">
			 </button>
			
			 <!-- Theme Toggle using Hamburger -->
	        <button class="hamburger zoom-cursor" type="button">
	            <span class="hamburger__inner"></span>
	        </button>
	    </div>
	</nav>
	<!-- /Top -->

    <!-- Hero -->
    <header class="hero">
	    <div class="slider slider-horizontal">
		    <div class="slider__caption swiper-container">
                <div class="swiper-wrapper">
			
			        <!-- Caption 1 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
						    <h6 class="title title--overhead"><span class="down-up"><span>DM4K</span></span></h6>
			                <h1 class="title title--display-1 js-text-wave">GO BEYOND // MOBILE TEST</h1>
						    <div class="section-underline"></div>
				            <p class="description"><span class="down-up"><span>I'm Phoenix, and I live for creating, learning, and sharing creative visuals with the world.</span></span></p>
                            <a class="btn-link btn-link--circle-right theme-invert" href="about_image.html"><span class="down-up"><span>ABOUT ME<i class="circle circle--right icon-right-open"></i></span></span></a>
						</div>
					</div>
			        <!-- /Caption 1 -->
					
			        <!-- Caption 2 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
		                    <h6 class="title title--overhead"><span class="down-up"><span>FRAME PERFECT</span></span></h6>
			                <h1 class="title title--display-1 js-text-wave">CAMERAWORK</h1>
						    <div class="section-underline"></div>
				            <p class="description"><span class="down-up"><span>A Decade of Experience in Technical Production and Editing with Premiere and After Effects.</span></span></p>
                            <a class="btn-link btn-link--circle-right theme-invert" href="cam_news_liquid.html"><span class="down-up"><span>SEE VIDEOS<i class="circle circle--right icon-right-open"></i></span></span></a>
						</div>
					</div>
			        <!-- /Caption 2 -->
					
			        <!-- Caption 3 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
		                    <h6 class="title title--overhead"><span class="down-up"><span>IDEAS TO SCALE</span></span></h6>
			                <h1 class="title title--display-1 js-text-wave">CADD</h1>
						    <div class="section-underline"></div>
				            <p class="description"><span class="down-up"><span>Architectural Design using AutoCAD and Revit, with Illustration Expertise in Photoshop.</span></span></p>
                            <a class="btn-link btn-link--circle-right theme-invert" href="cad_news_liquid.html"><span class="down-up"><span>SEE DRAWINGS<i class="circle circle--right icon-right-open"></i></span></span></a>
						</div>
					</div>
			        <!-- /Caption 3 -->
			
			 <!-- Caption 4 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
		                    <h6 class="title title--overhead"><span class="down-up"><span>POLYGON TO PIXEL</span></span></h6>
			                <h1 class="title title--display-1 js-text-wave">3D DESIGN</h1>
						    <div class="section-underline"></div>
				            <p class="description"><span class="down-up"><span>Texture Crafting in Substance Suite, and All-Around 3D Creation in Blender and Maya </span></span></p>
                            <a class="btn-link btn-link--circle-right theme-invert" href="3D_news_liquid.html"><span class="down-up"><span>SEE RENDERS<i class="circle circle--right icon-right-open"></i></span></span></a>
						</div>
					</div>
			        <!-- /Caption 4 -->
			
			<!-- Caption 5 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
		                    <h6 class="title title--overhead"><span class="down-up"><span>GET IN TOUCH</span></span></h6>
			                <h1 class="title title--display-1 js-text-wave">CONTACT</h1>
						    <div class="section-underline"></div>
				            <p class="description"><span class="down-up"><span>Primary: info@digitalmedia4k.com </span></span></p>
                            <!-- <a class="btn-link btn-link--circle-right" href=""><span class="down-up"><span>SEE RENDERS<i class="circle circle--right icon-right-open"></i></span></span></a> -->
						</div>
					</div>
			        <!-- /Caption 5 -->
		        </div>
			</div>

		       <div class="slider__image swiper-container reveal">
                <div class="swiper-wrapper">
			       <!-- Autoplay Video 1 -->
				<div class="swiper-slide">
				    <div class="cover-slider lazyload overlay--45" style="position: relative; overflow: hidden;">
				       <video id="autoplay-video" autoplay loop muted style="width: 100%; height: 100%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;">
				            <source src="../index-header/mp4.mp4" type="video/mp4">
				            Your browser does not support the video tag.
				        </video>
				        <a class="swiper-slide__link" href="about_image.html"></a>
				    </div>
				</div>
				<!-- /Autoplay Video 1 -->

			     <!-- Autoplay Video 2 -->
				<div class="swiper-slide">
				    <div class="cover-slider lazyload overlay--45" style="position: relative; overflow: hidden;">
				       <video id="autoplay-video" autoplay loop muted style="width: 100%; height: 100%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;">
				            <source src="../index-header/mp4.mp4" type="video/mp4">
				            Your browser does not support the video tag.
				        </video>
				        <a class="swiper-slide__link" href="../cam_news_liquid.html"></a>
				    </div>
				</div>
				<!-- /Autoplay Video 2 -->

				       <!-- Autoplay Video 3 -->
				<div class="swiper-slide">
				    <div class="cover-slider lazyload overlay--45" style="position: relative; overflow: hidden;">
				       <video id="autoplay-video" autoplay loop muted style="width: 100%; height: 100%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;">
				            <source src="../index-header/mp4.mp4" type="video/mp4">
				            Your browser does not support the video tag.
				        </video>
				        <a class="swiper-slide__link" href="../cad_news_liquid.html"></a>
				    </div>
				</div>
				<!-- /Autoplay Video 3 -->

			     <!-- Autoplay Video 4 -->
				<div class="swiper-slide">
				    <div class="cover-slider lazyload overlay--45" style="position: relative; overflow: hidden;">
				       <video id="autoplay-video" autoplay loop muted style="width: 100%; height: 100%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;">
				            <source src="../index-header/3d.mp4" type="video/mp4">
				            Your browser does not support the video tag.
				        </video>
				        <a class="swiper-slide__link" href="../3d_news_liquid.html"></a>
				    </div>
				</div>
				<!-- /Autoplay Video 4 -->
			
				<!-- Autoplay Video 5 -->
				<div class="swiper-slide">
				    <div class="cover-slider lazyload overlay--45" style="position: relative; overflow: hidden;">
				       <video id="autoplay-video" autoplay loop muted style="width: 100%; height: 100%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;">
				            <source src="../index-header/mp4.mp4" type="video/mp4">
				            Your browser does not support the video tag.
				        </video>
				        <a class="swiper-slide__link" href="about_image.html"></a>
				    </div>
				</div>
				<!-- /Autoplay Video 5 -->
		        </div>
			</div>

		    <!-- Control -->
			<div class="control-slider control-slider--vertical swiper-control">
			    <div></div>
				<div class="swiper-pagination"></div>
				<div>
				    <div class="swiper-button-next zoom-cursor">
					    <svg class="slider-nav slider-nav--progress" viewBox="0 0 46 46">
                            <g class="slider-nav__path-progress slider-nav__path-progress--gray">
                                <path d="M0.5,23a22.5,22.5 0 1,0 45,0a22.5,22.5 0 1,0 -45,0" />
                            </g>
                        </svg>
                        <svg class="slider-nav slider-nav--gray" viewBox="0 0 46 46">
                            <circle class="slider-nav__path--gray theme-invert" cx="23" cy="23" r="22.5"/>
                            <path class="slider-nav__arrow theme-invert" d="M26.45 22.45l-4.91-4.91a.7707464.7707464 0 0 0-1.09 1.09L24.82 23l-4.36 4.36a.7707464.7707464 0 0 0 1.09 1.09l4.91-4.91a.77.77 0 0 0-.01-1.09z"/>
                        </svg>
					</div>
				    <div class="swiper-button-prev zoom-cursor">
                        <svg class="slider-nav slider-nav--gray" viewBox="0 0 46 46">
                            <circle class="slider-nav__path--gray theme-invert" cx="23" cy="23" r="22.5"/>
                            <path class="slider-nav__arrow theme-invert" d="M18.5 23.55l4.91 4.91a.7707464.7707464 0 1 0 1.09-1.09L20.14 23l4.36-4.36a.7707464.7707464 0 0 0-1.09-1.09l-4.91 4.9a.77.77 0 0 0 0 1.1z"/>
                        </svg>
					</div>
				</div>
			</div>
			<!-- /Control -->
			
			<div class="social social--floating">
			<a class="social__link" href="https://www.youtube.com/channel/UCHYDYKA1Sj9hO9BcyC_BJHQ">YOUTUBE</a>
		    </div>
		</div>
    </header>
    <!-- /Hero -->

	<!-- Menu -->
	<div class="menu">
        <div class="menu-inner">
		    <ul class="menu-list">
                <li><a class="menu-list__item" href="../index.html"><span>HOME</span></a></li>
			    <li><a class="menu-list__item" href="../about_image.html"><span>ABOUT</span></a></li>
			    <li><a class="menu-list__item" href="../cam_news_liquid.html"><span>CAMERA</span></a></li>
			    <li><a class="menu-list__item" href="../cad_news_liquid.html"><span>CADD</span></a></li>
			    <!-- Menu
			    <li><a class="menu-list__item" href="../3d_news_liquid.html"><span>3D</span></a></li>
			     -->
			</ul>
		</div>
		<div class="social social--white">
		<a class="social__link" href="https://www.youtube.com/channel/UCHYDYKA1Sj9hO9BcyC_BJHQ">YOUTUBE</a>
			
		</div>
	</div>
	<div class="ef-background"></div>
    <!-- /Menu -->
	
    <div class="cursor"></div>

	<!-- JavaScripts -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/plugins.js"></script>
   	<script src="assets/js/common.js"></script>
	<script src ="assets/js/themeToggle.js"></script>
	

</body>
</html>
