<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Font Awesome";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["ui_elements"]["sub"]["icons"]["sub"]["fa"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["UI Elements"] = "";
		$breadcrumbs["Icons"] = "http://fortawesome.github.io/Font-Awesome/";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-desktop fa-fw "></i> 
					UI Elements 
					<span>>
					 Icons > Font Awesome
					</span>
				</h1>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				<ul id="sparks" class="">
					<li class="sparks-info">
						<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
						<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
							1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
						<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
						<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<!-- widget grid -->
		<section id="widget-grid" class="">
		
			<div class="well well-sm">
				<div class="input-group">
					<input class="form-control input-lg" type="text" id="fa-icon-search" placeholder="Search for an icon...">
					<span class="input-group-addon"><i class="fa fa-fw fa-lg fa-search"></i></span>
				</div>
			</div>
		
			<!-- row -->
			<div class="row">
		
				<!-- NEW WIDGET START -->
				<article class="col-sm-12">
		
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-sortable="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
							<h2>Font Awesome</h2>

						</header>

						<!-- widget div-->
						<div>

							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->

							</div>
							<!-- end widget edit box -->

							<!-- widget content -->
							<div class="widget-body" id="all-icons-demo">

							
									<div class="alert alert-info">
										<i class="fa fa-exclamation"></i> Please note: As of the of Font Awesome version 4.0. All icons now require a base class of <code>
											fa</code> as well as individual icon classes. For example <code> fa fa-adjust</code>
											<br>
											<div class="margin-top-5">View the full icon list by going to <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">//fortawesome.github.io/Font-Awesome/icons/</a></div>
									</div>

									<div class="alert alert-warning"> <strong>NOTE</strong>: FontAwesome version 4.2 is blurry on some resolutions, therefore we did not upgrade (the included FontAwesome version is 4.1). Hopefully this issue will be resolved in later versions of FontAwesome and will be safer to upgrade</div>
									
									<!--<h2>40 NEW icons with 4.2</h2>
									
									<div class="row">

										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-angellist"></i> fa-angellist
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-area-chart"></i> fa-area-chart
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-at"></i> fa-at
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-bell-slash"></i> fa-bell-slash
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-bell-slash-o"></i> fa-bell-slash-o
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-bicycle"></i> fa-bicycle
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-binoculars"></i> fa-binoculars
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-birthday-cake"></i> fa-birthday-cake
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-bus"></i> fa-bus
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-calculator"></i> fa-calculator
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-cc"></i> fa-cc
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-cc-amex"></i> fa-cc-amex
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-cc-discover"></i> fa-cc-discover
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-cc-mastercard"></i> fa-cc-mastercard
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-cc-paypal"></i> fa-cc-paypal
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-cc-stripe"></i> fa-cc-stripe
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-cc-visa"></i> fa-cc-visa
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-copyright"></i> fa-copyright
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-eyedropper"></i> fa-eyedropper
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-futbol-o"></i> fa-futbol-o
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-google-wallet"></i> fa-google-wallet
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-ils"></i> fa-ils
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-ioxhost"></i> fa-ioxhost
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-lastfm"></i> fa-lastfm
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-lastfm-square"></i> fa-lastfm-square
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-line-chart"></i> fa-line-chart
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-meanpath"></i> fa-meanpath
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-newspaper-o"></i> fa-newspaper-o
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-paint-brush"></i> fa-paint-brush
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-paypal"></i> fa-paypal
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-pie-chart"></i> fa-pie-chart
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-plug"></i> fa-plug
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-shekel"></i> fa-shekel <span class="text-muted">(alias)</span>
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-sheqel"></i> fa-sheqel <span class="text-muted">(alias)</span>
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-slideshare"></i> fa-slideshare
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-soccer-ball-o"></i> fa-soccer-ball-o <span class="text-muted">(alias)</span>
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-toggle-off"></i> fa-toggle-off
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-toggle-on"></i> fa-toggle-on
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-trash"></i> fa-trash
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-tty"></i> fa-tty
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-twitch"></i> fa-twitch
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-wifi"></i> fa-wifi
										</div>
			
										<div class="col-xs-6 col-md-3 col-sm-4 demo-icon-font">
											<i class="fa fa-yelp"></i> fa-yelp
										</div>
			
									</div>-->
																
									<h2>70 new icons was introduced in 4.1</h2>

									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-address-book'></i><span class='text-muted'> address-book</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-address-book-o'></i><span class='text-muted'> address-book-o</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-address-card'></i><span class='text-muted'> address-card</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-address-card-o'></i><span class='text-muted'> address-card-o</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bandcamp'></i><span class='text-muted'> bandcamp</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bath'></i><span class='text-muted'> bath</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bathtub'></i><span class='text-muted'> bathtub (<code>alias</code>)</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-drivers-license'></i><span class='text-muted'> drivers-license (<code>alias</code>)</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-drivers-license-o'></i><span class='text-muted'> drivers-license-o (<code>alias</code>)</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eercast'></i><span class='text-muted'> eercast</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-envelope-open'></i><span class='text-muted'> envelope-open</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-envelope-open-o'></i><span class='text-muted'> envelope-open-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-etsy'></i><span class='text-muted'> etsy</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-free-code-camp'></i><span class='text-muted'> free-code-camp</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-grav'></i><span class='text-muted'> grav</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-handshake-o'></i><span class='text-muted'> handshake-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-id-badge'></i><span class='text-muted'> id-badge</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-id-card'></i><span class='text-muted'> id-card</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-id-card-o'></i><span class='text-muted'> id-card-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-imdb'></i><span class='text-muted'> imdb</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-linode'></i><span class='text-muted'> linode</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-meetup'></i><span class='text-muted'> meetup</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-microchip'></i><span class='text-muted'> microchip</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-podcast'></i><span class='text-muted'> podcast</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-quora'></i><span class='text-muted'> quora</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ravelry'></i><span class='text-muted'> ravelry</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-s15'></i><span class='text-muted'> s15 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-shower'></i><span class='text-muted'> shower</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-snowflake-o'></i><span class='text-muted'> snowflake-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-superpowers'></i><span class='text-muted'> superpowers</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-telegram'></i><span class='text-muted'> telegram</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer'></i><span class='text-muted'> thermometer (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-0'></i><span class='text-muted'> thermometer-0 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-1'></i><span class='text-muted'> thermometer-1 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-2'></i><span class='text-muted'> thermometer-2 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-3'></i><span class='text-muted'> thermometer-3 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-4'></i><span class='text-muted'> thermometer-4 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-empty'></i><span class='text-muted'> thermometer-empty</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-full'></i><span class='text-muted'> thermometer-full</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-half'></i><span class='text-muted'> thermometer-half</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-quarter'></i><span class='text-muted'> thermometer-quarter</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-three-quarters'></i><span class='text-muted'> thermometer-three-quarters</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-times-rectangle'></i><span class='text-muted'> times-rectangle (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-times-rectangle-o'></i><span class='text-muted'> times-rectangle-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-circle'></i><span class='text-muted'> user-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-circle-o'></i><span class='text-muted'> user-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-o'></i><span class='text-muted'> user-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-vcard'></i><span class='text-muted'> vcard (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-vcard-o'></i><span class='text-muted'> vcard-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-close'></i><span class='text-muted'> window-close</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-close-o'></i><span class='text-muted'> window-close-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-maximize'></i><span class='text-muted'> window-maximize</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-minimize'></i><span class='text-muted'> window-minimize</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-restore'></i><span class='text-muted'> window-restore</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wpexplorer'></i><span class='text-muted'> wpexplorer</div>
									</div>
									<h2 class='page-header'>Web Application Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-address-book'></i><span class='text-muted'> address-book</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-address-book-o'></i><span class='text-muted'> address-book-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-address-card'></i><span class='text-muted'> address-card</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-address-card-o'></i><span class='text-muted'> address-card-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-adjust'></i><span class='text-muted'> adjust</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-american-sign-language-interpreting'></i><span class='text-muted'> american-sign-language-interpreting</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-anchor'></i><span class='text-muted'> anchor</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-archive'></i><span class='text-muted'> archive</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-area-chart'></i><span class='text-muted'> area-chart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrows'></i><span class='text-muted'> arrows</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrows-h'></i><span class='text-muted'> arrows-h</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrows-v'></i><span class='text-muted'> arrows-v</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-asl-interpreting'></i><span class='text-muted'> asl-interpreting (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-assistive-listening-systems'></i><span class='text-muted'> assistive-listening-systems</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-asterisk'></i><span class='text-muted'> asterisk</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-at'></i><span class='text-muted'> at</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-audio-description'></i><span class='text-muted'> audio-description</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-automobile'></i><span class='text-muted'> automobile (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-balance-scale'></i><span class='text-muted'> balance-scale</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ban'></i><span class='text-muted'> ban</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bank'></i><span class='text-muted'> bank (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bar-chart'></i><span class='text-muted'> bar-chart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bar-chart-o'></i><span class='text-muted'> bar-chart-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-barcode'></i><span class='text-muted'> barcode</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bars'></i><span class='text-muted'> bars</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bath'></i><span class='text-muted'> bath</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bathtub'></i><span class='text-muted'> bathtub (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery'></i><span class='text-muted'> battery (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-0'></i><span class='text-muted'> battery-0 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-1'></i><span class='text-muted'> battery-1 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-2'></i><span class='text-muted'> battery-2 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-3'></i><span class='text-muted'> battery-3 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-4'></i><span class='text-muted'> battery-4 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-empty'></i><span class='text-muted'> battery-empty</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-full'></i><span class='text-muted'> battery-full</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-half'></i><span class='text-muted'> battery-half</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-quarter'></i><span class='text-muted'> battery-quarter</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-battery-three-quarters'></i><span class='text-muted'> battery-three-quarters</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bed'></i><span class='text-muted'> bed</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-beer'></i><span class='text-muted'> beer</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bell'></i><span class='text-muted'> bell</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bell-o'></i><span class='text-muted'> bell-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bell-slash'></i><span class='text-muted'> bell-slash</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bell-slash-o'></i><span class='text-muted'> bell-slash-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bicycle'></i><span class='text-muted'> bicycle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-binoculars'></i><span class='text-muted'> binoculars</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-birthday-cake'></i><span class='text-muted'> birthday-cake</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-blind'></i><span class='text-muted'> blind</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bluetooth'></i><span class='text-muted'> bluetooth</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bluetooth-b'></i><span class='text-muted'> bluetooth-b</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bolt'></i><span class='text-muted'> bolt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bomb'></i><span class='text-muted'> bomb</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-book'></i><span class='text-muted'> book</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bookmark'></i><span class='text-muted'> bookmark</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bookmark-o'></i><span class='text-muted'> bookmark-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-braille'></i><span class='text-muted'> braille</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-briefcase'></i><span class='text-muted'> briefcase</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bug'></i><span class='text-muted'> bug</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-building'></i><span class='text-muted'> building</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-building-o'></i><span class='text-muted'> building-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bullhorn'></i><span class='text-muted'> bullhorn</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bullseye'></i><span class='text-muted'> bullseye</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bus'></i><span class='text-muted'> bus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cab'></i><span class='text-muted'> cab (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-calculator'></i><span class='text-muted'> calculator</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-calendar'></i><span class='text-muted'> calendar</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-calendar-check-o'></i><span class='text-muted'> calendar-check-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-calendar-minus-o'></i><span class='text-muted'> calendar-minus-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-calendar-o'></i><span class='text-muted'> calendar-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-calendar-plus-o'></i><span class='text-muted'> calendar-plus-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-calendar-times-o'></i><span class='text-muted'> calendar-times-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-camera'></i><span class='text-muted'> camera</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-camera-retro'></i><span class='text-muted'> camera-retro</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-car'></i><span class='text-muted'> car</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-square-o-down'></i><span class='text-muted'> caret-square-o-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-square-o-left'></i><span class='text-muted'> caret-square-o-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-square-o-right'></i><span class='text-muted'> caret-square-o-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-square-o-up'></i><span class='text-muted'> caret-square-o-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cart-arrow-down'></i><span class='text-muted'> cart-arrow-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cart-plus'></i><span class='text-muted'> cart-plus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc'></i><span class='text-muted'> cc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-certificate'></i><span class='text-muted'> certificate</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-check'></i><span class='text-muted'> check</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-check-circle'></i><span class='text-muted'> check-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-check-circle-o'></i><span class='text-muted'> check-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-check-square'></i><span class='text-muted'> check-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-check-square-o'></i><span class='text-muted'> check-square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-child'></i><span class='text-muted'> child</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-circle'></i><span class='text-muted'> circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-circle-o'></i><span class='text-muted'> circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-circle-o-notch'></i><span class='text-muted'> circle-o-notch</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-circle-thin'></i><span class='text-muted'> circle-thin</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-clock-o'></i><span class='text-muted'> clock-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-clone'></i><span class='text-muted'> clone</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-close'></i><span class='text-muted'> close (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cloud'></i><span class='text-muted'> cloud</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cloud-download'></i><span class='text-muted'> cloud-download</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cloud-upload'></i><span class='text-muted'> cloud-upload</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-code'></i><span class='text-muted'> code</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-code-fork'></i><span class='text-muted'> code-fork</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-coffee'></i><span class='text-muted'> coffee</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cog'></i><span class='text-muted'> cog</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cogs'></i><span class='text-muted'> cogs</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-comment'></i><span class='text-muted'> comment</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-comment-o'></i><span class='text-muted'> comment-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-commenting'></i><span class='text-muted'> commenting</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-commenting-o'></i><span class='text-muted'> commenting-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-comments'></i><span class='text-muted'> comments</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-comments-o'></i><span class='text-muted'> comments-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-compass'></i><span class='text-muted'> compass</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-copyright'></i><span class='text-muted'> copyright</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-creative-commons'></i><span class='text-muted'> creative-commons</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-credit-card'></i><span class='text-muted'> credit-card</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-credit-card-alt'></i><span class='text-muted'> credit-card-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-crop'></i><span class='text-muted'> crop</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-crosshairs'></i><span class='text-muted'> crosshairs</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cube'></i><span class='text-muted'> cube</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cubes'></i><span class='text-muted'> cubes</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cutlery'></i><span class='text-muted'> cutlery</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-dashboard'></i><span class='text-muted'> dashboard (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-database'></i><span class='text-muted'> database</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-deaf'></i><span class='text-muted'> deaf</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-deafness'></i><span class='text-muted'> deafness (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-desktop'></i><span class='text-muted'> desktop</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-diamond'></i><span class='text-muted'> diamond</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-dot-circle-o'></i><span class='text-muted'> dot-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-download'></i><span class='text-muted'> download</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-drivers-license'></i><span class='text-muted'> drivers-license (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-drivers-license-o'></i><span class='text-muted'> drivers-license-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-edit'></i><span class='text-muted'> edit (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ellipsis-h'></i><span class='text-muted'> ellipsis-h</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ellipsis-v'></i><span class='text-muted'> ellipsis-v</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-envelope'></i><span class='text-muted'> envelope</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-envelope-o'></i><span class='text-muted'> envelope-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-envelope-open'></i><span class='text-muted'> envelope-open</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-envelope-open-o'></i><span class='text-muted'> envelope-open-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-envelope-square'></i><span class='text-muted'> envelope-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eraser'></i><span class='text-muted'> eraser</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-exchange'></i><span class='text-muted'> exchange</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-exclamation'></i><span class='text-muted'> exclamation</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-exclamation-circle'></i><span class='text-muted'> exclamation-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-exclamation-triangle'></i><span class='text-muted'> exclamation-triangle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-external-link'></i><span class='text-muted'> external-link</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-external-link-square'></i><span class='text-muted'> external-link-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eye'></i><span class='text-muted'> eye</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eye-slash'></i><span class='text-muted'> eye-slash</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eyedropper'></i><span class='text-muted'> eyedropper</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fax'></i><span class='text-muted'> fax</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-feed'></i><span class='text-muted'> feed (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-female'></i><span class='text-muted'> female</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fighter-jet'></i><span class='text-muted'> fighter-jet</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-archive-o'></i><span class='text-muted'> file-archive-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-audio-o'></i><span class='text-muted'> file-audio-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-code-o'></i><span class='text-muted'> file-code-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-excel-o'></i><span class='text-muted'> file-excel-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-image-o'></i><span class='text-muted'> file-image-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-movie-o'></i><span class='text-muted'> file-movie-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-pdf-o'></i><span class='text-muted'> file-pdf-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-photo-o'></i><span class='text-muted'> file-photo-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-picture-o'></i><span class='text-muted'> file-picture-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-powerpoint-o'></i><span class='text-muted'> file-powerpoint-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-sound-o'></i><span class='text-muted'> file-sound-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-video-o'></i><span class='text-muted'> file-video-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-word-o'></i><span class='text-muted'> file-word-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-zip-o'></i><span class='text-muted'> file-zip-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-film'></i><span class='text-muted'> film</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-filter'></i><span class='text-muted'> filter</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fire'></i><span class='text-muted'> fire</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fire-extinguisher'></i><span class='text-muted'> fire-extinguisher</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-flag'></i><span class='text-muted'> flag</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-flag-checkered'></i><span class='text-muted'> flag-checkered</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-flag-o'></i><span class='text-muted'> flag-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-flash'></i><span class='text-muted'> flash (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-flask'></i><span class='text-muted'> flask</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-folder'></i><span class='text-muted'> folder</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-folder-o'></i><span class='text-muted'> folder-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-folder-open'></i><span class='text-muted'> folder-open</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-folder-open-o'></i><span class='text-muted'> folder-open-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-frown-o'></i><span class='text-muted'> frown-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-futbol-o'></i><span class='text-muted'> futbol-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gamepad'></i><span class='text-muted'> gamepad</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gavel'></i><span class='text-muted'> gavel</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gear'></i><span class='text-muted'> gear (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gears'></i><span class='text-muted'> gears (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gift'></i><span class='text-muted'> gift</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-glass'></i><span class='text-muted'> glass</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-globe'></i><span class='text-muted'> globe</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-graduation-cap'></i><span class='text-muted'> graduation-cap</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-group'></i><span class='text-muted'> group (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-grab-o'></i><span class='text-muted'> hand-grab-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-lizard-o'></i><span class='text-muted'> hand-lizard-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-paper-o'></i><span class='text-muted'> hand-paper-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-peace-o'></i><span class='text-muted'> hand-peace-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-pointer-o'></i><span class='text-muted'> hand-pointer-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-rock-o'></i><span class='text-muted'> hand-rock-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-scissors-o'></i><span class='text-muted'> hand-scissors-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-spock-o'></i><span class='text-muted'> hand-spock-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-stop-o'></i><span class='text-muted'> hand-stop-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-handshake-o'></i><span class='text-muted'> handshake-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hard-of-hearing'></i><span class='text-muted'> hard-of-hearing (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hashtag'></i><span class='text-muted'> hashtag</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hdd-o'></i><span class='text-muted'> hdd-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-headphones'></i><span class='text-muted'> headphones</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-heart'></i><span class='text-muted'> heart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-heart-o'></i><span class='text-muted'> heart-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-heartbeat'></i><span class='text-muted'> heartbeat</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-history'></i><span class='text-muted'> history</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-home'></i><span class='text-muted'> home</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hotel'></i><span class='text-muted'> hotel (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hourglass'></i><span class='text-muted'> hourglass</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hourglass-1'></i><span class='text-muted'> hourglass-1 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hourglass-2'></i><span class='text-muted'> hourglass-2 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hourglass-3'></i><span class='text-muted'> hourglass-3 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hourglass-end'></i><span class='text-muted'> hourglass-end</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hourglass-half'></i><span class='text-muted'> hourglass-half</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hourglass-o'></i><span class='text-muted'> hourglass-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hourglass-start'></i><span class='text-muted'> hourglass-start</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-i-cursor'></i><span class='text-muted'> i-cursor</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-id-badge'></i><span class='text-muted'> id-badge</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-id-card'></i><span class='text-muted'> id-card</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-id-card-o'></i><span class='text-muted'> id-card-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-image'></i><span class='text-muted'> image (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-inbox'></i><span class='text-muted'> inbox</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-industry'></i><span class='text-muted'> industry</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-info'></i><span class='text-muted'> info</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-info-circle'></i><span class='text-muted'> info-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-institution'></i><span class='text-muted'> institution (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-key'></i><span class='text-muted'> key</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-keyboard-o'></i><span class='text-muted'> keyboard-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-language'></i><span class='text-muted'> language</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-laptop'></i><span class='text-muted'> laptop</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-leaf'></i><span class='text-muted'> leaf</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-legal'></i><span class='text-muted'> legal (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-lemon-o'></i><span class='text-muted'> lemon-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-level-down'></i><span class='text-muted'> level-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-level-up'></i><span class='text-muted'> level-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-life-bouy'></i><span class='text-muted'> life-bouy (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-life-buoy'></i><span class='text-muted'> life-buoy (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-life-ring'></i><span class='text-muted'> life-ring</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-life-saver'></i><span class='text-muted'> life-saver (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-lightbulb-o'></i><span class='text-muted'> lightbulb-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-line-chart'></i><span class='text-muted'> line-chart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-location-arrow'></i><span class='text-muted'> location-arrow</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-lock'></i><span class='text-muted'> lock</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-low-vision'></i><span class='text-muted'> low-vision</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-magic'></i><span class='text-muted'> magic</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-magnet'></i><span class='text-muted'> magnet</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mail-forward'></i><span class='text-muted'> mail-forward (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mail-reply'></i><span class='text-muted'> mail-reply (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mail-reply-all'></i><span class='text-muted'> mail-reply-all (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-male'></i><span class='text-muted'> male</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-map'></i><span class='text-muted'> map</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-map-marker'></i><span class='text-muted'> map-marker</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-map-o'></i><span class='text-muted'> map-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-map-pin'></i><span class='text-muted'> map-pin</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-map-signs'></i><span class='text-muted'> map-signs</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-meh-o'></i><span class='text-muted'> meh-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-microchip'></i><span class='text-muted'> microchip</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-microphone'></i><span class='text-muted'> microphone</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-microphone-slash'></i><span class='text-muted'> microphone-slash</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-minus'></i><span class='text-muted'> minus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-minus-circle'></i><span class='text-muted'> minus-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-minus-square'></i><span class='text-muted'> minus-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-minus-square-o'></i><span class='text-muted'> minus-square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mobile'></i><span class='text-muted'> mobile</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mobile-phone'></i><span class='text-muted'> mobile-phone (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-money'></i><span class='text-muted'> money</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-moon-o'></i><span class='text-muted'> moon-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mortar-board'></i><span class='text-muted'> mortar-board (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-motorcycle'></i><span class='text-muted'> motorcycle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mouse-pointer'></i><span class='text-muted'> mouse-pointer</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-music'></i><span class='text-muted'> music</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-navicon'></i><span class='text-muted'> navicon (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-newspaper-o'></i><span class='text-muted'> newspaper-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-object-group'></i><span class='text-muted'> object-group</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-object-ungroup'></i><span class='text-muted'> object-ungroup</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paint-brush'></i><span class='text-muted'> paint-brush</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paper-plane'></i><span class='text-muted'> paper-plane</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paper-plane-o'></i><span class='text-muted'> paper-plane-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paw'></i><span class='text-muted'> paw</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pencil'></i><span class='text-muted'> pencil</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pencil-square'></i><span class='text-muted'> pencil-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pencil-square-o'></i><span class='text-muted'> pencil-square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-percent'></i><span class='text-muted'> percent</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-phone'></i><span class='text-muted'> phone</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-phone-square'></i><span class='text-muted'> phone-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-photo'></i><span class='text-muted'> photo (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-picture-o'></i><span class='text-muted'> picture-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pie-chart'></i><span class='text-muted'> pie-chart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plane'></i><span class='text-muted'> plane</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plug'></i><span class='text-muted'> plug</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plus'></i><span class='text-muted'> plus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plus-circle'></i><span class='text-muted'> plus-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plus-square'></i><span class='text-muted'> plus-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plus-square-o'></i><span class='text-muted'> plus-square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-podcast'></i><span class='text-muted'> podcast</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-power-off'></i><span class='text-muted'> power-off</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-print'></i><span class='text-muted'> print</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-puzzle-piece'></i><span class='text-muted'> puzzle-piece</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-qrcode'></i><span class='text-muted'> qrcode</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-question'></i><span class='text-muted'> question</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-question-circle'></i><span class='text-muted'> question-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-question-circle-o'></i><span class='text-muted'> question-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-quote-left'></i><span class='text-muted'> quote-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-quote-right'></i><span class='text-muted'> quote-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-random'></i><span class='text-muted'> random</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-recycle'></i><span class='text-muted'> recycle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-refresh'></i><span class='text-muted'> refresh</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-registered'></i><span class='text-muted'> registered</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-remove'></i><span class='text-muted'> remove (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-reorder'></i><span class='text-muted'> reorder (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-reply'></i><span class='text-muted'> reply</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-reply-all'></i><span class='text-muted'> reply-all</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-retweet'></i><span class='text-muted'> retweet</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-road'></i><span class='text-muted'> road</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rocket'></i><span class='text-muted'> rocket</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rss'></i><span class='text-muted'> rss</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rss-square'></i><span class='text-muted'> rss-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-s15'></i><span class='text-muted'> s15 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-search'></i><span class='text-muted'> search</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-search-minus'></i><span class='text-muted'> search-minus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-search-plus'></i><span class='text-muted'> search-plus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-send'></i><span class='text-muted'> send (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-send-o'></i><span class='text-muted'> send-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-server'></i><span class='text-muted'> server</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-share'></i><span class='text-muted'> share</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-share-alt'></i><span class='text-muted'> share-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-share-alt-square'></i><span class='text-muted'> share-alt-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-share-square'></i><span class='text-muted'> share-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-share-square-o'></i><span class='text-muted'> share-square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-shield'></i><span class='text-muted'> shield</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ship'></i><span class='text-muted'> ship</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-shopping-bag'></i><span class='text-muted'> shopping-bag</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-shopping-basket'></i><span class='text-muted'> shopping-basket</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-shopping-cart'></i><span class='text-muted'> shopping-cart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-shower'></i><span class='text-muted'> shower</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sign-in'></i><span class='text-muted'> sign-in</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sign-language'></i><span class='text-muted'> sign-language</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sign-out'></i><span class='text-muted'> sign-out</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-signal'></i><span class='text-muted'> signal</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-signing'></i><span class='text-muted'> signing (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sitemap'></i><span class='text-muted'> sitemap</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sliders'></i><span class='text-muted'> sliders</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-smile-o'></i><span class='text-muted'> smile-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-snowflake-o'></i><span class='text-muted'> snowflake-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-soccer-ball-o'></i><span class='text-muted'> soccer-ball-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort'></i><span class='text-muted'> sort</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-alpha-asc'></i><span class='text-muted'> sort-alpha-asc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-alpha-desc'></i><span class='text-muted'> sort-alpha-desc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-amount-asc'></i><span class='text-muted'> sort-amount-asc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-amount-desc'></i><span class='text-muted'> sort-amount-desc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-asc'></i><span class='text-muted'> sort-asc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-desc'></i><span class='text-muted'> sort-desc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-down'></i><span class='text-muted'> sort-down (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-numeric-asc'></i><span class='text-muted'> sort-numeric-asc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-numeric-desc'></i><span class='text-muted'> sort-numeric-desc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sort-up'></i><span class='text-muted'> sort-up (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-space-shuttle'></i><span class='text-muted'> space-shuttle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-spinner'></i><span class='text-muted'> spinner</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-spoon'></i><span class='text-muted'> spoon</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-square'></i><span class='text-muted'> square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-square-o'></i><span class='text-muted'> square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-star'></i><span class='text-muted'> star</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-star-half'></i><span class='text-muted'> star-half</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-star-half-empty'></i><span class='text-muted'> star-half-empty (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-star-half-full'></i><span class='text-muted'> star-half-full (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-star-half-o'></i><span class='text-muted'> star-half-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-star-o'></i><span class='text-muted'> star-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sticky-note'></i><span class='text-muted'> sticky-note</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sticky-note-o'></i><span class='text-muted'> sticky-note-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-street-view'></i><span class='text-muted'> street-view</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-suitcase'></i><span class='text-muted'> suitcase</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sun-o'></i><span class='text-muted'> sun-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-support'></i><span class='text-muted'> support (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tablet'></i><span class='text-muted'> tablet</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tachometer'></i><span class='text-muted'> tachometer</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tag'></i><span class='text-muted'> tag</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tags'></i><span class='text-muted'> tags</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tasks'></i><span class='text-muted'> tasks</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-taxi'></i><span class='text-muted'> taxi</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-television'></i><span class='text-muted'> television</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-terminal'></i><span class='text-muted'> terminal</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer'></i><span class='text-muted'> thermometer (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-0'></i><span class='text-muted'> thermometer-0 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-1'></i><span class='text-muted'> thermometer-1 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-2'></i><span class='text-muted'> thermometer-2 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-3'></i><span class='text-muted'> thermometer-3 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-4'></i><span class='text-muted'> thermometer-4 (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-empty'></i><span class='text-muted'> thermometer-empty</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-full'></i><span class='text-muted'> thermometer-full</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-half'></i><span class='text-muted'> thermometer-half</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-quarter'></i><span class='text-muted'> thermometer-quarter</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thermometer-three-quarters'></i><span class='text-muted'> thermometer-three-quarters</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumb-tack'></i><span class='text-muted'> thumb-tack</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumbs-down'></i><span class='text-muted'> thumbs-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumbs-o-down'></i><span class='text-muted'> thumbs-o-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumbs-o-up'></i><span class='text-muted'> thumbs-o-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumbs-up'></i><span class='text-muted'> thumbs-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ticket'></i><span class='text-muted'> ticket</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-times'></i><span class='text-muted'> times</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-times-circle'></i><span class='text-muted'> times-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-times-circle-o'></i><span class='text-muted'> times-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-times-rectangle'></i><span class='text-muted'> times-rectangle (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-times-rectangle-o'></i><span class='text-muted'> times-rectangle-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tint'></i><span class='text-muted'> tint</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-down'></i><span class='text-muted'> toggle-down (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-left'></i><span class='text-muted'> toggle-left (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-off'></i><span class='text-muted'> toggle-off</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-on'></i><span class='text-muted'> toggle-on</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-right'></i><span class='text-muted'> toggle-right (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-up'></i><span class='text-muted'> toggle-up (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-trademark'></i><span class='text-muted'> trademark</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-trash'></i><span class='text-muted'> trash</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-trash-o'></i><span class='text-muted'> trash-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tree'></i><span class='text-muted'> tree</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-trophy'></i><span class='text-muted'> trophy</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-truck'></i><span class='text-muted'> truck</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tty'></i><span class='text-muted'> tty</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tv'></i><span class='text-muted'> tv (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-umbrella'></i><span class='text-muted'> umbrella</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-universal-access'></i><span class='text-muted'> universal-access</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-university'></i><span class='text-muted'> university</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-unlock'></i><span class='text-muted'> unlock</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-unlock-alt'></i><span class='text-muted'> unlock-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-unsorted'></i><span class='text-muted'> unsorted (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-upload'></i><span class='text-muted'> upload</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user'></i><span class='text-muted'> user</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-circle'></i><span class='text-muted'> user-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-circle-o'></i><span class='text-muted'> user-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-o'></i><span class='text-muted'> user-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-plus'></i><span class='text-muted'> user-plus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-secret'></i><span class='text-muted'> user-secret</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-times'></i><span class='text-muted'> user-times</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-users'></i><span class='text-muted'> users</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-vcard'></i><span class='text-muted'> vcard (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-vcard-o'></i><span class='text-muted'> vcard-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-video-camera'></i><span class='text-muted'> video-camera</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-volume-control-phone'></i><span class='text-muted'> volume-control-phone</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-volume-down'></i><span class='text-muted'> volume-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-volume-off'></i><span class='text-muted'> volume-off</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-volume-up'></i><span class='text-muted'> volume-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-warning'></i><span class='text-muted'> warning (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wheelchair'></i><span class='text-muted'> wheelchair</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wheelchair-alt'></i><span class='text-muted'> wheelchair-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wifi'></i><span class='text-muted'> wifi</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-close'></i><span class='text-muted'> window-close</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-close-o'></i><span class='text-muted'> window-close-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-maximize'></i><span class='text-muted'> window-maximize</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-minimize'></i><span class='text-muted'> window-minimize</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-window-restore'></i><span class='text-muted'> window-restore</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wrench'></i><span class='text-muted'> wrench</div>
									</div>
									<h2 class='page-header'>Accessibility Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-american-sign-language-interpreting'></i><span class='text-muted'> american-sign-language-interpreting</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-asl-interpreting'></i><span class='text-muted'> asl-interpreting (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-assistive-listening-systems'></i><span class='text-muted'> assistive-listening-systems</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-audio-description'></i><span class='text-muted'> audio-description</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-blind'></i><span class='text-muted'> blind</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-braille'></i><span class='text-muted'> braille</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc'></i><span class='text-muted'> cc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-deaf'></i><span class='text-muted'> deaf</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-deafness'></i><span class='text-muted'> deafness (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hard-of-hearing'></i><span class='text-muted'> hard-of-hearing (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-low-vision'></i><span class='text-muted'> low-vision</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-question-circle-o'></i><span class='text-muted'> question-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sign-language'></i><span class='text-muted'> sign-language</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-signing'></i><span class='text-muted'> signing (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tty'></i><span class='text-muted'> tty</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-universal-access'></i><span class='text-muted'> universal-access</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-volume-control-phone'></i><span class='text-muted'> volume-control-phone</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wheelchair'></i><span class='text-muted'> wheelchair</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wheelchair-alt'></i><span class='text-muted'> wheelchair-alt</div>
									</div>
									<h2 class='page-header'>Hand Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-grab-o'></i><span class='text-muted'> hand-grab-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-lizard-o'></i><span class='text-muted'> hand-lizard-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-o-down'></i><span class='text-muted'> hand-o-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-o-left'></i><span class='text-muted'> hand-o-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-o-right'></i><span class='text-muted'> hand-o-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-o-up'></i><span class='text-muted'> hand-o-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-paper-o'></i><span class='text-muted'> hand-paper-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-peace-o'></i><span class='text-muted'> hand-peace-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-pointer-o'></i><span class='text-muted'> hand-pointer-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-rock-o'></i><span class='text-muted'> hand-rock-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-scissors-o'></i><span class='text-muted'> hand-scissors-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-spock-o'></i><span class='text-muted'> hand-spock-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-stop-o'></i><span class='text-muted'> hand-stop-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumbs-down'></i><span class='text-muted'> thumbs-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumbs-o-down'></i><span class='text-muted'> thumbs-o-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumbs-o-up'></i><span class='text-muted'> thumbs-o-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-thumbs-up'></i><span class='text-muted'> thumbs-up</div>
									</div>
									<h2 class='page-header'>Transportation Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ambulance'></i><span class='text-muted'> ambulance</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-automobile'></i><span class='text-muted'> automobile (<code>alias</code>)</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bicycle'></i><span class='text-muted'> bicycle</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bus'></i><span class='text-muted'> bus</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cab'></i><span class='text-muted'> cab (<code>alias</code>)</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-car'></i><span class='text-muted'> car</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fighter-jet'></i><span class='text-muted'> fighter-jet</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-motorcycle'></i><span class='text-muted'> motorcycle</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plane'></i><span class='text-muted'> plane</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rocket'></i><span class='text-muted'> rocket</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ship'></i><span class='text-muted'> ship</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-space-shuttle'></i><span class='text-muted'> space-shuttle</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-subway'></i><span class='text-muted'> subway</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-taxi'></i><span class='text-muted'> taxi</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-train'></i><span class='text-muted'> train</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-truck'></i><span class='text-muted'> truck</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wheelchair'></i><span class='text-muted'> wheelchair</a></div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wheelchair-alt'></i><span class='text-muted'> wheelchair-alt</a></div>  
									</div>
									<h2 class='page-header'>Gender Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-genderless'></i><span class='text-muted'> genderless</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-intersex'></i><span class='text-muted'> intersex (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mars'></i><span class='text-muted'> mars</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mars-double'></i><span class='text-muted'> mars-double</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mars-stroke'></i><span class='text-muted'> mars-stroke</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mars-stroke-h'></i><span class='text-muted'> mars-stroke-h</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mars-stroke-v'></i><span class='text-muted'> mars-stroke-v</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mercury'></i><span class='text-muted'> mercury</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-neuter'></i><span class='text-muted'> neuter</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-transgender'></i><span class='text-muted'> transgender</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-transgender-alt'></i><span class='text-muted'> transgender-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-venus'></i><span class='text-muted'> venus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-venus-double'></i><span class='text-muted'> venus-double</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-venus-mars'></i><span class='text-muted'> venus-mars</div>
									</div>
									<h2 class='page-header'>File Type Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file'></i><span class='text-muted'> file</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-archive-o'></i><span class='text-muted'> file-archive-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-audio-o'></i><span class='text-muted'> file-audio-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-code-o'></i><span class='text-muted'> file-code-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-excel-o'></i><span class='text-muted'> file-excel-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-image-o'></i><span class='text-muted'> file-image-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-movie-o'></i><span class='text-muted'> file-movie-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-o'></i><span class='text-muted'> file-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-pdf-o'></i><span class='text-muted'> file-pdf-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-photo-o'></i><span class='text-muted'> file-photo-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-picture-o'></i><span class='text-muted'> file-picture-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-powerpoint-o'></i><span class='text-muted'> file-powerpoint-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-sound-o'></i><span class='text-muted'> file-sound-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-text'></i><span class='text-muted'> file-text</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-text-o'></i><span class='text-muted'> file-text-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-video-o'></i><span class='text-muted'> file-video-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-word-o'></i><span class='text-muted'> file-word-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-zip-o'></i><span class='text-muted'> file-zip-o (<code>alias</code>)</div>
									</div>
									<h2 class='page-header'>Spinner Icons</h2>
									<div class='row'>
										<div class='alert alert-success'>
											<h4><i class='fa txt-color-blue fa-info-circle txt-color-blue' aria-hidden='true'></i><span class='text-muted'>Note:</h4>
											These icons work great with the <code>fa-spin</code> class. Check out the <a href='../examples/#animated' class='alert-link'>spinning icons example</a>.
										</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-spin fa-circle-o-notch'></i><span class='text-muted'> circle-o-notch</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-spin fa-cog'></i><span class='text-muted'> cog</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-spin fa-gear'></i><span class='text-muted'> gear (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-spin fa-refresh'></i><span class='text-muted'> refresh</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-spin fa-spinner'></i><span class='text-muted'> spinner</div>
									</div>
									<h2 class='page-header'>Form Control Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-check-square'></i><span class='text-muted'> check-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-check-square-o'></i><span class='text-muted'> check-square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-circle'></i><span class='text-muted'> circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-circle-o'></i><span class='text-muted'> circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-dot-circle-o'></i><span class='text-muted'> dot-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-minus-square'></i><span class='text-muted'> minus-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-minus-square-o'></i><span class='text-muted'> minus-square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plus-square'></i><span class='text-muted'> plus-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plus-square-o'></i><span class='text-muted'> plus-square-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-square'></i><span class='text-muted'> square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-square-o'></i><span class='text-muted'> square-o</div>
									</div>
									<h2 class='page-header'>Payment Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-amex'></i><span class='text-muted'> cc-amex</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-diners-club'></i><span class='text-muted'> cc-diners-club</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-discover'></i><span class='text-muted'> cc-discover</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-jcb'></i><span class='text-muted'> cc-jcb</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-mastercard'></i><span class='text-muted'> cc-mastercard</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-paypal'></i><span class='text-muted'> cc-paypal</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-stripe'></i><span class='text-muted'> cc-stripe</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-visa'></i><span class='text-muted'> cc-visa</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-credit-card'></i><span class='text-muted'> credit-card</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-credit-card-alt'></i><span class='text-muted'> credit-card-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-google-wallet'></i><span class='text-muted'> google-wallet</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paypal'></i><span class='text-muted'> paypal</div>
									</div>
									<h2 class='page-header'>Chart Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-area-chart'></i><span class='text-muted'> area-chart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bar-chart'></i><span class='text-muted'> bar-chart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bar-chart-o'></i><span class='text-muted'> bar-chart-o (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-line-chart'></i><span class='text-muted'> line-chart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pie-chart'></i><span class='text-muted'> pie-chart</div>
									</div>
									<h2 class='page-header'>Currency Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bitcoin'></i><span class='text-muted'> bitcoin (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-btc'></i><span class='text-muted'> btc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cny'></i><span class='text-muted'> cny (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-dollar'></i><span class='text-muted'> dollar (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eur'></i><span class='text-muted'> eur</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-euro'></i><span class='text-muted'> euro (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gbp'></i><span class='text-muted'> gbp</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gg'></i><span class='text-muted'> gg</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gg-circle'></i><span class='text-muted'> gg-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ils'></i><span class='text-muted'> ils</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-inr'></i><span class='text-muted'> inr</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-jpy'></i><span class='text-muted'> jpy</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-krw'></i><span class='text-muted'> krw</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-money'></i><span class='text-muted'> money</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rmb'></i><span class='text-muted'> rmb (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rouble'></i><span class='text-muted'> rouble (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rub'></i><span class='text-muted'> rub</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ruble'></i><span class='text-muted'> ruble (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rupee'></i><span class='text-muted'> rupee (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-shekel'></i><span class='text-muted'> shekel (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sheqel'></i><span class='text-muted'> sheqel (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-try'></i><span class='text-muted'> try</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-turkish-lira'></i><span class='text-muted'> turkish-lira (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-usd'></i><span class='text-muted'> usd</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-viacoin'></i><span class='text-muted'> viacoin</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-won'></i><span class='text-muted'> won (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-yen'></i><span class='text-muted'> yen (<code>alias</code>)</div>
									</div>
									<h2 class='page-header'>Text Editor Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-align-center'></i><span class='text-muted'> align-center</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-align-justify'></i><span class='text-muted'> align-justify</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-align-left'></i><span class='text-muted'> align-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-align-right'></i><span class='text-muted'> align-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bold'></i><span class='text-muted'> bold</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chain'></i><span class='text-muted'> chain (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chain-broken'></i><span class='text-muted'> chain-broken</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-clipboard'></i><span class='text-muted'> clipboard</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-columns'></i><span class='text-muted'> columns</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-copy'></i><span class='text-muted'> copy (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cut'></i><span class='text-muted'> cut (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-dedent'></i><span class='text-muted'> dedent (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eraser'></i><span class='text-muted'> eraser</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file'></i><span class='text-muted'> file</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-o'></i><span class='text-muted'> file-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-text'></i><span class='text-muted'> file-text</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-file-text-o'></i><span class='text-muted'> file-text-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-files-o'></i><span class='text-muted'> files-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-floppy-o'></i><span class='text-muted'> floppy-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-font'></i><span class='text-muted'> font</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-header'></i><span class='text-muted'> header</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-indent'></i><span class='text-muted'> indent</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-italic'></i><span class='text-muted'> italic</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-link'></i><span class='text-muted'> link</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-list'></i><span class='text-muted'> list</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-list-alt'></i><span class='text-muted'> list-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-list-ol'></i><span class='text-muted'> list-ol</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-list-ul'></i><span class='text-muted'> list-ul</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-outdent'></i><span class='text-muted'> outdent</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paperclip'></i><span class='text-muted'> paperclip</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paragraph'></i><span class='text-muted'> paragraph</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paste'></i><span class='text-muted'> paste (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-repeat'></i><span class='text-muted'> repeat</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rotate-left'></i><span class='text-muted'> rotate-left (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rotate-right'></i><span class='text-muted'> rotate-right (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-save'></i><span class='text-muted'> save (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-scissors'></i><span class='text-muted'> scissors</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-strikethrough'></i><span class='text-muted'> strikethrough</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-subscript'></i><span class='text-muted'> subscript</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-superscript'></i><span class='text-muted'> superscript</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-table'></i><span class='text-muted'> table</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-text-height'></i><span class='text-muted'> text-height</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-text-width'></i><span class='text-muted'> text-width</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-th'></i><span class='text-muted'> th</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-th-large'></i><span class='text-muted'> th-large</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-th-list'></i><span class='text-muted'> th-list</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-underline'></i><span class='text-muted'> underline</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-undo'></i><span class='text-muted'> undo</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-unlink'></i><span class='text-muted'> unlink (<code>alias</code>)</div>
									</div>
									<h2 class='page-header'>Directional Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angle-double-down'></i><span class='text-muted'> angle-double-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angle-double-left'></i><span class='text-muted'> angle-double-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angle-double-right'></i><span class='text-muted'> angle-double-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angle-double-up'></i><span class='text-muted'> angle-double-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angle-down'></i><span class='text-muted'> angle-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angle-left'></i><span class='text-muted'> angle-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angle-right'></i><span class='text-muted'> angle-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angle-up'></i><span class='text-muted'> angle-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-circle-down'></i><span class='text-muted'> arrow-circle-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-circle-left'></i><span class='text-muted'> arrow-circle-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-circle-o-down'></i><span class='text-muted'> arrow-circle-o-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-circle-o-left'></i><span class='text-muted'> arrow-circle-o-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-circle-o-right'></i><span class='text-muted'> arrow-circle-o-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-circle-o-up'></i><span class='text-muted'> arrow-circle-o-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-circle-right'></i><span class='text-muted'> arrow-circle-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-circle-up'></i><span class='text-muted'> arrow-circle-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-down'></i><span class='text-muted'> arrow-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-left'></i><span class='text-muted'> arrow-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-right'></i><span class='text-muted'> arrow-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrow-up'></i><span class='text-muted'> arrow-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrows'></i><span class='text-muted'> arrows</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrows-alt'></i><span class='text-muted'> arrows-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrows-h'></i><span class='text-muted'> arrows-h</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrows-v'></i><span class='text-muted'> arrows-v</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-down'></i><span class='text-muted'> caret-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-left'></i><span class='text-muted'> caret-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-right'></i><span class='text-muted'> caret-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-square-o-down'></i><span class='text-muted'> caret-square-o-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-square-o-left'></i><span class='text-muted'> caret-square-o-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-square-o-right'></i><span class='text-muted'> caret-square-o-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-square-o-up'></i><span class='text-muted'> caret-square-o-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-caret-up'></i><span class='text-muted'> caret-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chevron-circle-down'></i><span class='text-muted'> chevron-circle-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chevron-circle-left'></i><span class='text-muted'> chevron-circle-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chevron-circle-right'></i><span class='text-muted'> chevron-circle-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chevron-circle-up'></i><span class='text-muted'> chevron-circle-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chevron-down'></i><span class='text-muted'> chevron-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chevron-left'></i><span class='text-muted'> chevron-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chevron-right'></i><span class='text-muted'> chevron-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chevron-up'></i><span class='text-muted'> chevron-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-exchange'></i><span class='text-muted'> exchange</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-o-down'></i><span class='text-muted'> hand-o-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-o-left'></i><span class='text-muted'> hand-o-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-o-right'></i><span class='text-muted'> hand-o-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hand-o-up'></i><span class='text-muted'> hand-o-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-long-arrow-down'></i><span class='text-muted'> long-arrow-down</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-long-arrow-left'></i><span class='text-muted'> long-arrow-left</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-long-arrow-right'></i><span class='text-muted'> long-arrow-right</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-long-arrow-up'></i><span class='text-muted'> long-arrow-up</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-down'></i><span class='text-muted'> toggle-down (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-left'></i><span class='text-muted'> toggle-left (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-right'></i><span class='text-muted'> toggle-right (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-toggle-up'></i><span class='text-muted'> toggle-up (<code>alias</code>)</div>
									</div>
									<h2 class='page-header'>Video Player Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-arrows-alt'></i><span class='text-muted'> arrows-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-backward'></i><span class='text-muted'> backward</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-compress'></i><span class='text-muted'> compress</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eject'></i><span class='text-muted'> eject</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-expand'></i><span class='text-muted'> expand</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fast-backward'></i><span class='text-muted'> fast-backward</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fast-forward'></i><span class='text-muted'> fast-forward</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-forward'></i><span class='text-muted'> forward</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pause'></i><span class='text-muted'> pause</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pause-circle'></i><span class='text-muted'> pause-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pause-circle-o'></i><span class='text-muted'> pause-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-play'></i><span class='text-muted'> play</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-play-circle'></i><span class='text-muted'> play-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-play-circle-o'></i><span class='text-muted'> play-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-random'></i><span class='text-muted'> random</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-step-backward'></i><span class='text-muted'> step-backward</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-step-forward'></i><span class='text-muted'> step-forward</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-stop'></i><span class='text-muted'> stop</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-stop-circle'></i><span class='text-muted'> stop-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-stop-circle-o'></i><span class='text-muted'> stop-circle-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-youtube-play'></i><span class='text-muted'> youtube-play</div>
									</div>
									<h2 class='page-header'>Brand Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-500px'></i><span class='text-muted'> 500px</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-adn'></i><span class='text-muted'> adn</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-amazon'></i><span class='text-muted'> amazon</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-android'></i><span class='text-muted'> android</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-angellist'></i><span class='text-muted'> angellist</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-apple'></i><span class='text-muted'> apple</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bandcamp'></i><span class='text-muted'> bandcamp</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-behance'></i><span class='text-muted'> behance</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-behance-square'></i><span class='text-muted'> behance-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bitbucket'></i><span class='text-muted'> bitbucket</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bitbucket-square'></i><span class='text-muted'> bitbucket-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bitcoin'></i><span class='text-muted'> bitcoin (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-black-tie'></i><span class='text-muted'> black-tie</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bluetooth'></i><span class='text-muted'> bluetooth</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-bluetooth-b'></i><span class='text-muted'> bluetooth-b</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-btc'></i><span class='text-muted'> btc</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-buysellads'></i><span class='text-muted'> buysellads</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-amex'></i><span class='text-muted'> cc-amex</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-diners-club'></i><span class='text-muted'> cc-diners-club</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-discover'></i><span class='text-muted'> cc-discover</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-jcb'></i><span class='text-muted'> cc-jcb</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-mastercard'></i><span class='text-muted'> cc-mastercard</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-paypal'></i><span class='text-muted'> cc-paypal</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-stripe'></i><span class='text-muted'> cc-stripe</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-cc-visa'></i><span class='text-muted'> cc-visa</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-chrome'></i><span class='text-muted'> chrome</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-codepen'></i><span class='text-muted'> codepen</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-codiepie'></i><span class='text-muted'> codiepie</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-connectdevelop'></i><span class='text-muted'> connectdevelop</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-contao'></i><span class='text-muted'> contao</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-css3'></i><span class='text-muted'> css3</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-dashcube'></i><span class='text-muted'> dashcube</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-delicious'></i><span class='text-muted'> delicious</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-deviantart'></i><span class='text-muted'> deviantart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-digg'></i><span class='text-muted'> digg</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-dribbble'></i><span class='text-muted'> dribbble</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-dropbox'></i><span class='text-muted'> dropbox</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-drupal'></i><span class='text-muted'> drupal</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-edge'></i><span class='text-muted'> edge</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-eercast'></i><span class='text-muted'> eercast</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-empire'></i><span class='text-muted'> empire</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-envira'></i><span class='text-muted'> envira</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-etsy'></i><span class='text-muted'> etsy</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-expeditedssl'></i><span class='text-muted'> expeditedssl</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fa'></i><span class='text-muted'> fa (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-facebook'></i><span class='text-muted'> facebook</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-facebook-f'></i><span class='text-muted'> facebook-f (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-facebook-official'></i><span class='text-muted'> facebook-official</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-facebook-square'></i><span class='text-muted'> facebook-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-firefox'></i><span class='text-muted'> firefox</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-first-order'></i><span class='text-muted'> first-order</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-flickr'></i><span class='text-muted'> flickr</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-font-awesome'></i><span class='text-muted'> font-awesome</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fonticons'></i><span class='text-muted'> fonticons</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-fort-awesome'></i><span class='text-muted'> fort-awesome</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-forumbee'></i><span class='text-muted'> forumbee</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-foursquare'></i><span class='text-muted'> foursquare</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-free-code-camp'></i><span class='text-muted'> free-code-camp</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ge'></i><span class='text-muted'> ge (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-get-pocket'></i><span class='text-muted'> get-pocket</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gg'></i><span class='text-muted'> gg</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gg-circle'></i><span class='text-muted'> gg-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-git'></i><span class='text-muted'> git</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-git-square'></i><span class='text-muted'> git-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-github'></i><span class='text-muted'> github</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-github-alt'></i><span class='text-muted'> github-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-github-square'></i><span class='text-muted'> github-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gitlab'></i><span class='text-muted'> gitlab</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gittip'></i><span class='text-muted'> gittip (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-glide'></i><span class='text-muted'> glide</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-glide-g'></i><span class='text-muted'> glide-g</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-google'></i><span class='text-muted'> google</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-google-plus'></i><span class='text-muted'> google-plus</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-google-plus-circle'></i><span class='text-muted'> google-plus-circle (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-google-plus-official'></i><span class='text-muted'> google-plus-official</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-google-plus-square'></i><span class='text-muted'> google-plus-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-google-wallet'></i><span class='text-muted'> google-wallet</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-gratipay'></i><span class='text-muted'> gratipay</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-grav'></i><span class='text-muted'> grav</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hacker-news'></i><span class='text-muted'> hacker-news</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-houzz'></i><span class='text-muted'> houzz</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-html5'></i><span class='text-muted'> html5</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-imdb'></i><span class='text-muted'> imdb</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-instagram'></i><span class='text-muted'> instagram</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-internet-explorer'></i><span class='text-muted'> internet-explorer</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ioxhost'></i><span class='text-muted'> ioxhost</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-joomla'></i><span class='text-muted'> joomla</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-jsfiddle'></i><span class='text-muted'> jsfiddle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-lastfm'></i><span class='text-muted'> lastfm</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-lastfm-square'></i><span class='text-muted'> lastfm-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-leanpub'></i><span class='text-muted'> leanpub</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-linkedin'></i><span class='text-muted'> linkedin</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-linkedin-square'></i><span class='text-muted'> linkedin-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-linode'></i><span class='text-muted'> linode</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-linux'></i><span class='text-muted'> linux</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-maxcdn'></i><span class='text-muted'> maxcdn</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-meanpath'></i><span class='text-muted'> meanpath</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-medium'></i><span class='text-muted'> medium</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-meetup'></i><span class='text-muted'> meetup</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-mixcloud'></i><span class='text-muted'> mixcloud</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-modx'></i><span class='text-muted'> modx</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-odnoklassniki'></i><span class='text-muted'> odnoklassniki</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-odnoklassniki-square'></i><span class='text-muted'> odnoklassniki-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-opencart'></i><span class='text-muted'> opencart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-openid'></i><span class='text-muted'> openid</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-opera'></i><span class='text-muted'> opera</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-optin-monster'></i><span class='text-muted'> optin-monster</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pagelines'></i><span class='text-muted'> pagelines</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-paypal'></i><span class='text-muted'> paypal</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pied-piper'></i><span class='text-muted'> pied-piper</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pied-piper-alt'></i><span class='text-muted'> pied-piper-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pied-piper-pp'></i><span class='text-muted'> pied-piper-pp</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pinterest'></i><span class='text-muted'> pinterest</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pinterest-p'></i><span class='text-muted'> pinterest-p</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-pinterest-square'></i><span class='text-muted'> pinterest-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-product-hunt'></i><span class='text-muted'> product-hunt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-qq'></i><span class='text-muted'> qq</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-quora'></i><span class='text-muted'> quora</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ra'></i><span class='text-muted'> ra (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ravelry'></i><span class='text-muted'> ravelry</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-rebel'></i><span class='text-muted'> rebel</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-reddit'></i><span class='text-muted'> reddit</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-reddit-alien'></i><span class='text-muted'> reddit-alien</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-reddit-square'></i><span class='text-muted'> reddit-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-renren'></i><span class='text-muted'> renren</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-resistance'></i><span class='text-muted'> resistance (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-safari'></i><span class='text-muted'> safari</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-scribd'></i><span class='text-muted'> scribd</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-sellsy'></i><span class='text-muted'> sellsy</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-share-alt'></i><span class='text-muted'> share-alt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-share-alt-square'></i><span class='text-muted'> share-alt-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-shirtsinbulk'></i><span class='text-muted'> shirtsinbulk</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-simplybuilt'></i><span class='text-muted'> simplybuilt</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-skyatlas'></i><span class='text-muted'> skyatlas</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-skype'></i><span class='text-muted'> skype</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-slack'></i><span class='text-muted'> slack</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-slideshare'></i><span class='text-muted'> slideshare</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-snapchat'></i><span class='text-muted'> snapchat</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-snapchat-ghost'></i><span class='text-muted'> snapchat-ghost</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-snapchat-square'></i><span class='text-muted'> snapchat-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-soundcloud'></i><span class='text-muted'> soundcloud</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-spotify'></i><span class='text-muted'> spotify</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-stack-exchange'></i><span class='text-muted'> stack-exchange</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-stack-overflow'></i><span class='text-muted'> stack-overflow</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-steam'></i><span class='text-muted'> steam</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-steam-square'></i><span class='text-muted'> steam-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-stumbleupon'></i><span class='text-muted'> stumbleupon</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-stumbleupon-circle'></i><span class='text-muted'> stumbleupon-circle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-superpowers'></i><span class='text-muted'> superpowers</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-telegram'></i><span class='text-muted'> telegram</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tencent-weibo'></i><span class='text-muted'> tencent-weibo</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-themeisle'></i><span class='text-muted'> themeisle</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-trello'></i><span class='text-muted'> trello</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tripadvisor'></i><span class='text-muted'> tripadvisor</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tumblr'></i><span class='text-muted'> tumblr</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-tumblr-square'></i><span class='text-muted'> tumblr-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-twitch'></i><span class='text-muted'> twitch</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-twitter'></i><span class='text-muted'> twitter</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-twitter-square'></i><span class='text-muted'> twitter-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-usb'></i><span class='text-muted'> usb</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-viacoin'></i><span class='text-muted'> viacoin</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-viadeo'></i><span class='text-muted'> viadeo</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-viadeo-square'></i><span class='text-muted'> viadeo-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-vimeo'></i><span class='text-muted'> vimeo</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-vimeo-square'></i><span class='text-muted'> vimeo-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-vine'></i><span class='text-muted'> vine</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-vk'></i><span class='text-muted'> vk</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wechat'></i><span class='text-muted'> wechat (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-weibo'></i><span class='text-muted'> weibo</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-weixin'></i><span class='text-muted'> weixin</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-whatsapp'></i><span class='text-muted'> whatsapp</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wikipedia-w'></i><span class='text-muted'> wikipedia-w</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-windows'></i><span class='text-muted'> windows</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wordpress'></i><span class='text-muted'> wordpress</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wpbeginner'></i><span class='text-muted'> wpbeginner</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wpexplorer'></i><span class='text-muted'> wpexplorer</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wpforms'></i><span class='text-muted'> wpforms</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-xing'></i><span class='text-muted'> xing</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-xing-square'></i><span class='text-muted'> xing-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-y-combinator'></i><span class='text-muted'> y-combinator</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-y-combinator-square'></i><span class='text-muted'> y-combinator-square (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-yahoo'></i><span class='text-muted'> yahoo</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-yc'></i><span class='text-muted'> yc (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-yc-square'></i><span class='text-muted'> yc-square (<code>alias</code>)</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-yelp'></i><span class='text-muted'> yelp</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-yoast'></i><span class='text-muted'> yoast</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-youtube'></i><span class='text-muted'> youtube</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-youtube-play'></i><span class='text-muted'> youtube-play</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-youtube-square'></i><span class='text-muted'> youtube-square</div>
									</div>
									<h2 class='page-header'>Warning</h2>				
									<div class='row'>
										<div class='alert alert-warning'>
											<h4><i class='fa fa-warning' aria-hidden'true'></i>Warning!</h4>
											Apparently, Adblock Plus can remove Font Awesome brand icons with their 'Remove Social Media Buttons' setting. We will not use hacks to force them to display. Please <a href='https://adblockplus.org/en/bugs' class='alert-link'>report an issue with Adblock Plus</a> if you believe this to be an error. To work around this, you'll need to modify the social icon class names.
										</div>

										<div class='alert alert-success'>
											<ul class='margin-bottom-none padding-left-lg' style='margin-left:-25px;'>
												<li>All brand icons are trademarks of their respective owners.</li>
												<li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
												<li>Brand icons should only be used to represent the company or product to which they refer.</li>
												<li class='strong'>Please do not use brand logos for any purpose except to represent that particular brand or service.</li>
											</ul>
										</div>
									</div>
									<h2 class='page-header'>Medical Icons</h2>
									<div class='row'>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-ambulance'></i><span class='text-muted'> ambulance</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-h-square'></i><span class='text-muted'> h-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-heart'></i><span class='text-muted'> heart</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-heart-o'></i><span class='text-muted'> heart-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-heartbeat'></i><span class='text-muted'> heartbeat</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-hospital-o'></i><span class='text-muted'> hospital-o</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-medkit'></i><span class='text-muted'> medkit</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-plus-square'></i><span class='text-muted'> plus-square</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-stethoscope'></i><span class='text-muted'> stethoscope</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-user-md'></i><span class='text-muted'> user-md</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wheelchair'></i><span class='text-muted'> wheelchair</div>
										<div class='col-xs-6 col-md-3 col-sm-4 demo-icon-font'><i class='fa txt-color-blue fa-wheelchair-alt'></i><span class='text-muted'> wheelchair-alt</div>
									</div>
								
									<!-- END sets -->
							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
					<!-- end widget -->
		
				</article>
				<!-- WIDGET END -->
		
			</div>
		
			<!-- end row -->
		
			<!-- row -->
		
			<div class="row">
		
			</div>
		
			<!-- end row -->
		
		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->

<script type="text/javascript">

	$(document).ready(function() {
		
		// PAGE RELATED SCRIPTS
		
		function hide_divs(search) {
		    $(".demo-icon-font").hide(); // hide all divs
		    $("#all-icons-demo h2").hide();
		    $("#all-icons-demo .alert").hide();
			$('.demo-icon-font > i[class*="'+search+'"]').parent().show(); // show the ones that match
		}
		
		function show_all() {
		    $(".demo-icon-font").show()
		    $("#all-icons-demo h2").show();
		    $("#all-icons-demo .alert").show();
		}
		
		
		$("#fa-icon-search").keyup(function() {
			var search = $.trim(this.value);
			if (search === "") {
				show_all();
			}
			else {
				hide_divs(search);
			}
		});			
	
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>