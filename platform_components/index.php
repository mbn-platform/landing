<? require_once('../header.php');?>
<script>
	$(document).ready(function() {
		if($(window).width() > 768){
			if(window.location.hash == '#investors'){
				$('.second_section_tabs_item').css('display', 'none');
				$('.tabs_pagination_btn').removeClass('selected');
				$('.tabs_pagination_btn1').addClass('selected');
				$('.tab1').fadeIn(1500);
			}
			if(window.location.hash == '#traders'){
				$('.second_section_tabs_item').css('display', 'none');
				$('.tabs_pagination_btn').removeClass('selected');
				$('.tabs_pagination_btn2').addClass('selected');
				$('.tab2').fadeIn(1500);
			}
			if(window.location.hash == '#funds'){
				$('.second_section_tabs_item').css('display', 'none');
				$('.tabs_pagination_btn').removeClass('selected');
				$('.tabs_pagination_btn3').addClass('selected');
				$('.tab3').fadeIn(1500);
			}
			$(document.body).animate({
		    'scrollTop': 0}, 100);
		}
		else{
			$(document.body).animate({
		    'scrollTop': $(window.location.hash).offset().top - 20
			}, 1000);
		}
	});
</script>
<link type="text/css" rel="stylesheet" href="/css/roadmap.css?t=<?php echo(microtime(true)); ?>">
<div class="second_pages_wrapper">
	<div class="pattern_cycrle_contacts1"></div>
	<div class="pattern_cycrle_contacts2"></div>
	<div class="second_pages_content content_container2">
		<div class="second_pages_title_wrapper2">
			<div class="second_pages_title">platform components</div>
		</div>
		<div class="second_section_tabs_wrapper tabs_js">
				<div class="second_section_tabs_items">
					<div class="second_section_tabs_item tab1 selected clearfix" id="investors">
						<div class="second_section_tab_right_col">
							<img class="platform_img" src="/img/platform_img_big1.png" alt="Membrana platform for investors" title="">
						</div>
					</div>
					<div class="second_section_tabs_item tab2 clearfix" id="traders">
						<div class="second_section_tab_right_col">
							<img class="platform_img" src="/img/platform_img_big2.png" alt="Membrana platform for traders" title="">
						</div>
					</div>
					<div class="second_section_tabs_item tab3 clearfix" id="funds">
						<div class="second_section_tab_right_col">
							<img class="platform_img" src="/img/platform_img_big3.png" alt="Membrana platform for funds" title="">
						</div>
					</div>
				</div>
				<div class="tabs_pagination_wrapper">
					<div class="tabs_pagination">
						<div class="tabs_pagination_btn1 tabs_pagination_btn selected" data-index="1"><div class="tabs_pagination_btn_text">for investors</div></div>
						<div class="tabs_pagination_btn2 tabs_pagination_btn" data-index="2"><div class="tabs_pagination_btn_text">for traders</div></div>
						<div class="tabs_pagination_btn3 tabs_pagination_btn" data-index="3"><div class="tabs_pagination_btn_text">for funds</div></div>
					</div>	
				</div>
			</div>
		
	</div>
	<? require_once('../join_us_form.php');?>
</div>


<? require_once('../footer.php');?>
