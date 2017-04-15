<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>AgroMarket</title>
		<meta name="description" content="premier marché agro-pastorale africain" />
		<meta name="keywords" content="premier agricole ,marché ,agro-pastorale ,africain" />
		<meta name="author" content="Codrops" />
    <link rel="icon" type="image/png" href="{{ asset('../asset/favicon.ico') }}" />
		<link rel="stylesheet" type="text/css" href="asset2/css/default.css" />
		  <link rel="stylesheet" type="text/css" href="{{ asset('../asset/fonts/font-awesome/css/font-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="asset2/css/component.css" />
		<script src="asset2/js/modernizr.custom.js"></script>
	</head>
	<body class="">
		<div class="container ">	
			<!-- Codrops top bar -->
			<!-- <div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/PageTransitions/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=14991"><span>Back to the Codrops Article</span></a></span>
			</div> -->
			<header>
				<h1 style="color:white;">AgroMarket <span style="color:white;">Premier marché Agro-Pastorale Africain</span></h1>	
			</header>
			<div class="main clearfix content">
				<nav id="menu" class="nav">					
					<ul>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-leaf"></i>
								</span>
								<span>Agriculture</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"> 
									<i aria-hidden="true" class="fa fa-pied-piper-alt"></i>
								</span>
								<span>Elevage</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-ship"></i>
								</span>
								<span>Pêche</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-tty"></i>
								</span>
								<span>Aide</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-phone"></i>
								</span>
								<span>Contacts</span>
							</a>
						</li>
						<li>
							<a href="{{ route('home') }}">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-desktop"></i>
								</span>
								<span>Retour au Site </span>
							</a>
						</li>
						
					</ul>
				</nav>
			</div>
		</div><!-- /container -->
		<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
	</body>
</html>