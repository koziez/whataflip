<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Food</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="humans.txt">

  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon" />

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
       However, there is a blank style.css in the css directory should you prefer -->
  <link rel="stylesheet" href="../../css/gumby.css">
  <link rel="stylesheet" href="../../css/style.css">

  <script src="../../js/libs/modernizr-2.6.2.min.js"></script>
</head>

<style>
  .btn,.drawer { margin-bottom:10px; }
  .drawer { text-align: center; }
  h1.lead {  margin-bottom: 0; }
  p.lead { padding-bottom:21px; margin-bottom:14px;border-bottom: 1px dotted #ccc; }
  #icon_map ul li { font-size: 16px; }
  .smallify { font-size: 13px; }
  .modal h2, .modal .btn { margin: 5% 0 20px; }
  
</style>

<body>
<div>
  <div class="navbar" id="topbar">
	<div class="row shaded">
		<div class="ten columns">
			<span class="active">English</span>&nbsp;&nbsp;&nbsp;<a href="../../tl/food/">Tagalog</a>
		</div>
		<a href="../rss" style="float:right;">RSS</a>x
	</div>
  </div>
  
  <div class="pretty navbar row" id="nav3" style="margin-bottom:0;">
      <a class="toggle" gumby-trigger="#nav3 > .row > ul" href="../#"><i class="icon-menu"></i></a>
      <h1 class="four columns logo">
        <a href="../">
          <img src="../../img/logo.png" gumby-retina />
        </a>
      </h1>
      <ul class="sixteen columns">
        <li><a href="../about/">About</a></li>
        <li><a href="../food/">Food</a></li>
        <li><a href="../entertainment/">Entertainment</a></li>
		<li><a href="../social/">Social</a></li>
		<li><a href="../sports/">Sports</a></li>
		<li><a href="../news/">News</a></li>
		<li><a href="../neighborhoods/">Neighborhoods</a></li>
        <li class="field"><input class="search input" type="search" placeholder="Search" /></li>
      </ul>
  </div>
  
	<div class="container sixteen colgrid" >
		<div class="row shaded" id="content">
			<div class="ten columns" id="maincontent">
				<h1 class="lead">Pinoy DFW</h1>
				<p class="lead">Tambayan ng Lahing Pilipino!</p>
				<div class="row article">
					
					<h2>Welcome!</h2>
					<p style="margin-top:21px;">PinoyDFW.com is your best online resource committed to keeping you current on Philippine and Filipino-American news and affairs. We bring everything Pinoy closer to you!</p>
					<p>Based in the Dallas/Fort Worth area, we aim to connect Filipinos to their rich heritage. We foster Pinoy pride through upcoming social and business events, promote real estate opportunities, and initiate discussions on relevant news topics. We also compose feature articles on individual Filipinos and Filipino-owned businesses based in DFW.</p>
					<p style="margin-bottom:21px;">Our logo represents the unity of the Filipino community here in the DFW area with our homeland, The Philippines. Like those of the Philippine flag, the eight rays of our sun represent the eight provinces that first raised arms against Spain during the 1896 Revolution of Independence. The three birds flying over the sun represent our native country's three major geographical divisions:  Luzon, Visayas and Mindanao. The red, white and blue colors of the birds which represent equality, peace, justice and valor for The Philippines, correspond with the Texas flag's symbols of loyalty, purity and bravery. Texas, the Lone Star State, is proudly represented by a star on one of the birds. Our logo honors our roots, and exhibits our thankfulness for the blessed opportunities that the DFW community has to offer us.</p>
					<div style="width:100%;height:auto;margin:34px 0;">
						<a href="http://www.republictitle.com/" target="_blank"><img src="http://i940.photobucket.com/albums/ad243/PinoyDFW/Untitled-1.png" style=" margin:0 auto;"></a>
						Advertisement
					</div>
					
					<h2>Whats new?</h2>
					<p style="margin:21px 0;">We have amped up PinoyDFW.com and added a few more sections, namely:
						<ul class="circle">
							<li>Food - listing and reviews for local eateries as well as food related events</li>
							<li>Entertainment - listing and reviews for movies, local music, local nightlife and more</li>
							<li>Sports - sports highlights as well as interviews with local athletes</li>
							<li>Social - connection hub for christians, singles, clubs, and friends</li>
							<li>News - up-to-date local and worldwide news</li>
							<li>Neighborhoods - listing and reviews for local neighborhoods with area specific listings for food, entertainment, and social gatherings</li>
						</ul>
					</p>
				</div>
			</div>
			<div class="six columns" style="padding-top:20px;">
			  <h4 class="lead">Follow us</h4>

<?php include_once('../backend/social.html'); ?>
			  
			  <hr>
			  <h4 class="lead">Weather</h4>

<?php include_once('../backend/weather.php'); ?>

			  <hr>
			  <h4 class="lead">Verse of the Day</h4>

<?php include_once('../backend/verse.php'); ?>

			  <hr>
			  <h4 class="lead">Philippine News</h4>

<?php include_once('../backend/flip-news.php'); ?>
			  
			  <hr>
			  <h4 class="lead">DFW Churches</h4>

<?php include_once('../backend/churches.php'); ?>

			  <hr>
			  <h4 class="lead">Advertise on Pinoy DFW</h4>

<?php include_once('../backend/advertise.php'); ?>

			</div>
		</div>
	</div>
	
<?php include_once('../backend/footer.php'); ?>
	
  </div>

 </div>  

  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="../js/libs/gumby.js"></script>
  <script src="../js/libs/ui/gumby.retina.js"></script>
  <script src="../js/libs/ui/gumby.fixed.js"></script>
  <script src="../js/libs/ui/gumby.skiplink.js"></script>
  <script src="../js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="../js/libs/ui/gumby.checkbox.js"></script>
  <script src="../js/libs/ui/gumby.radiobtn.js"></script>
  <script src="../js/libs/ui/gumby.tabs.js"></script>
  <script src="../js/libs/ui/gumby.navbar.js"></script>
  <script src="../js/libs/ui/jquery.validation.js"></script>
  <script src="../js/libs/gumby.init.js"></script>-->
  
  <script src="../../js/libs/gumby.min.js"></script>
  <script src="../../js/libs/jquery.backstretch.min.js"></script>
  <script src="../../js/libs/jquery.simpleWeather.min.js"></script>
  <script src="../../js/plugins.js"></script>
  <script src="../../js/main.js"></script>

  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="..///ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  </body>
</html>
