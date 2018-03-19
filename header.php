<?

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));

?>
<!DOCTYPE html>
<!--[if IE 7]> <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<html lang="en">
<!--[if lte IE 9]> <html class="ie9_all" lang="en"> <![endif]-->
<!--[if lte IE 8]> <html class="ie8_all" lang="en"> <![endif]-->
<!--[if lte IE 7]> <html class="ie7_all" lang="en"> <![endif]-->
<head>
	<?

	if($_SERVER['REQUEST_URI'] == '/contacts/'){
		$contactsSelected = 'selected';
		$title = 'Contacts | Membrana';
	}
	else if($_SERVER['REQUEST_URI'] == '/roadmap/'){
		$roadmapSelected = 'selected';
		$title = 'Roadmap | Membrana';
	}
	else if($_SERVER['REQUEST_URI'] == '/whitepaper_language/'){
		$whitepaperSelected = 'selected';
		$title = 'Whitepaper | Membrana';
	}
	else if($_SERVER['REQUEST_URI'] == '/business_overview_language/'){
		$businnesoverviewSelected = 'selected';
		$title = 'Overview | Membrana';
	}		
	else if($_SERVER['REQUEST_URI'] == '/'){
		$homeSelected = 'selected';
		$title = 'Membrana - trust management of digital assets.';
	}
	else if($_SERVER['REQUEST_URI'] == '/platform_components/'){
		$homeSelected = 'selected';
		$title = 'About platform | Membrana';
	}
	else if($_SERVER['REQUEST_URI'] == '/dev/'){
		$homeSelected = 'selected';
		$title = 'Page in process | Membrana';
	}
	else{
		$title = 'Page not found | 404 error';
	}
	?>
	<meta property="og:title" content="<?=$title;?>">
	<meta property="og:type" content="websites">
	<meta property="og:url" content="http://membrana.io">
	<meta property="og:description" content="The first trust management platform fully based on Ethereum smart contracts.">
	<meta property="og:email" content="info@membrana.io">
	<meta property="og:site_name" content="Membrana - trust management of digital assets">
	<meta property="og:image" content="/img/platform_img_big1.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The first trust management platform fully based on Ethereum smart contracts.">
	<link id="page_favicon" href="/img/favicon.ico" rel="icon" type="image/x-icon">
	<script type="text/javascript" src="/js/yandexcounter.js"></script>
	<noscript><div><img src="https://mc.yandex.ru/watch/47624572" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery.arcticmodal-0.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery.modal.js"></script>
	<script type="text/javascript" src="https://rawgit.com/alvarotrigo/fullPage.js/dev/vendors/scrolloverflow.js"></script>
	<!-- <script type="text/javascript" src="https://rawgit.com/alvarotrigo/fullPage.js/dev/jquery.fullPage.js"></script>	 -->
	
	<script type="text/javascript" src="/js/main.js?t=<?php echo(microtime(true)); ?>"></script>
	<!-- <link rel="stylesheet" type="text/css" href="https://rawgit.com/alvarotrigo/fullPage.js/master/jquery.fullPage.css" /> -->
	<link type="text/css" rel="stylesheet" href="/css/normalize.css">
	<link type="text/css" rel="stylesheet" href="/css/jquery.arcticmodal-0.3.css">
	<link type="text/css" rel="stylesheet" href="/css/main.css?t=<?php echo(microtime(true)); ?>">
	<meta http-equiv="Cache-Control" content="no-cache">
    <title><?=$title;?></title>
	<style>
		#page-preloader 
			{
				position: fixed;
				left: 0;
				top: 0;
				right: 0;
				bottom: 0;
				background: #27283a; /* Old browsers */
				background: -moz-linear-gradient(top, #27283a 0%, #282b3f 50%, #3d3f5a 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(top, #27283a 0%,#282b3f 50%,#3d3f5a 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to bottom, #27283a 0%,#282b3f 50%,#3d3f5a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#27283a', endColorstr='#3d3f5a',GradientType=0 );
				z-index: 100500;
			}
		@-webkit-keyframes uil-ring-anim 
			{
				0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
				}
				100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
				}
			}
		@-moz-keyframes uil-ring-anim 
			{
				0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
				}
				100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
				}
			}
		@-webkit-keyframes uil-ring-anim 
			{
				0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
				}
				100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
				}
			}
		@-o-keyframes uil-ring-anim 
			{
				0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
				}
				100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
				}
			}
		@keyframes uil-ring-anim 
			{
				0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
				}
				100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
				}
			}
		.uil-ring-css 
			{
				background: none;
			    position: absolute;
			    width: 200px;
			    height: 200px;
			    top: 50%;
			    left: 50%;
			    margin-top: -100px;
			    margin-left: -100px;
			    text-align: center;
			}
		.uil-ring-css-div 
			{
				position: absolute;
				display: block;
				width: 160px;
				height: 160px;
				top: 20px;
				left: 20px;
				border-radius: 80px;
				box-shadow: 0 3px 0 0 #32ba94;
				-webkit-transform-origin: 80px 81.5px;
				transform-origin: 80px 81.5px;
				-webkit-animation: uil-ring-anim 1s linear infinite;
				animation: uil-ring-anim 1s linear infinite;
			}
	</style>
    <script>
      function closePreloader(){
     	var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.uil-ring-css');
		$spinner.fadeOut();
		$preloader.delay(350).fadeOut('slow');
      }
      $(window).on('load', function () {
        closePreloader();
      });
      setTimeout(function() { closePreloader() }, 5000)
    </script>
</head>
<body>
<div id="page-preloader">
  <div class="uil-ring-css" style="transform:scale(0.95);"><div class="uil-ring-css-div"></div></div>
</div>
<div class="mobile_menu_wrapper">
	<div class="close_mobile_menu">×</div>
	<div class="mobile_menu_ul_wrapper">
		<ul class="mobile_menu_ul">
			<li class="mobile_menu_li"><a class="mobile_menu_a -btn" target="_blank" href="https://alpha.membrana.io/">Alpha version</a></li>
			<li class="mobile_menu_li"><a class="mobile_menu_a <?=$whitepaperSelected;?>" href="/whitepaper_language/">Whitepaper</a></li>
			<li class="mobile_menu_li"><a class="mobile_menu_a <?=$businnesoverviewSelected;?>" href="/business_overview_language/">Business overview</a></li>
			<li class="mobile_menu_li"><a class="mobile_menu_a <?=$roadmapSelected;?>" href="/roadmap/">Roadmap</a></li>
			<li class="mobile_menu_li"><a class="mobile_menu_a <?=$contactsSelected;?>" href="/contacts/">Contacts</a></li>
		</ul>
	</div>
</div>
<div style="display: none;">
	<div class="header_modal_ok_js">
		<div class="arcticmodal-close close_ok_modal">×</div>
		<span class="header_modal_ok_text_js">Your request is accepted.</span>
	</div>	
</div>

<div class="mobile_menu_mask"></div>
<div class="video_mask"></div>
<div class="video_wrapper">
	<div class="video_frame_wrapper">
		<div class="close_video">×</div>
		<div class="" id="play"><iframe width="1280" height="720" class="video_frame" src="https://www.youtube.com/embed/LX2KGxUVFUA?ecver=1&enablejsapi=1" frameborder="0" allowfullscreen></iframe></div>
	</div>

</div>
<div class="page_wrapper_full">
	
<div class="page_wrapper">
	<div class="header_wrapper">
		<div class="header_content content_container clearfix">
			<div class="header_logo_col">
				<div class="header_logo_wrapper">
					<a class="header_logo_a logo_js" href="/">
						<img class="header_logo logo_big" src="/img/header_logo_big.svg" onerror="this.onerror=null; this.src='/img/header_logo_big.png'" alt="Membrana - trust management of digital assets">
						<img class="header_logo logo_big_mobile" src="/img/header_logo_big_mobile.svg" onerror="this.onerror=null; this.src='/img/header_logo_big_mobile.png'" alt="Membrana - trust management of digital assets">
						<img class="header_logo logo_small" src="/img/header_logo_small.svg" onerror="this.onerror=null; this.src='/img/header_logo_small.png'" alt="Membrana - trust management of digital assets">	
					</a>
				</div>
			</div>
			<div class="header_menu_col">
				<div class="header_menu_wrapper">
					<ul class="header_menu_ul clearfix">
						<li class="header_menu_li"><a class="header_menu_a <?=$contactsSelected;?>" href="/contacts/">Contacts</a></li>
						<li class="header_menu_li"><a class="header_menu_a <?=$roadmapSelected;?>" href="/roadmap/">Roadmap</a></li>
						<li class="header_menu_li"><a class="header_menu_a <?=$businnesoverviewSelected;?>" href="/business_overview_language/">Business overview</a></li>
						<li class="header_menu_li"><a class="header_menu_a <?=$whitepaperSelected;?>" href="/whitepaper_language/">Whitepaper</a></li>
						<li class="header_menu_li"><a class="header_menu_a -btn" target="_blank" href="https://alpha.membrana.io/">Alpha version</a></li>
					</ul>
				</div>
			</div>
			<div class="header_menu_mobile_btn"></div>
		</div>
	</div>
