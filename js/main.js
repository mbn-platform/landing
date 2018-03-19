$(document).ready(function() {
	$('.header_menu_mobile_btn, .mobile_menu_mask, .close_mobile_menu').click(function(e){
		if($('.mobile_menu_mask').hasClass('opened')){
			$('.mobile_menu_mask').removeClass('opened');
			$('.mobile_menu_wrapper').removeClass('opened');
		}
		else{
			$('.mobile_menu_mask').addClass('opened');
			$('.mobile_menu_wrapper').addClass('opened');
		}
	})
	// function toggleVideo(state) {
 //    // if state == 'hide', hide. Else: show video
 //    var div = document.getElementById("play");
	//     var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
	//     div.style.display = state == 'hide' ? 'none' : '';
	//     func = state == 'hide' ? 'pauseVideo' : 'playVideo';
	//     iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
	// }
	function showSubscribe(){
		$('.first_section_video_btn').css('display', 'none');
		$('.join_us_form_first').css('display', 'inline-block');
	}
	// $('.video_btn_js, .video_mask, .video_wrapper').click(function(e){
	// 	if($('.video_mask').hasClass('opened')){
	// 		$('.video_mask').removeClass('opened');
	// 		$('.video_wrapper').removeClass('opened');
	// 		toggleVideo('hide');
	// 		showSubscribe();
	// 	}
	// 	else{
	// 		$('.video_mask').addClass('opened');
	// 		$('.video_wrapper').addClass('opened');
	// 		toggleVideo();
	// 	}
	// })

	$('.page_wrapper').css('min-height', $(window).height());


	$('.tabs_pagination_btn').click(function(e){
		// $('.second_section_tabs_item').removeClass('selected');
		$('.second_section_tabs_item').css('display', 'none');
		$('.second_section_tabs_item').fadeOut(1500);
		$('.tabs_pagination_btn').removeClass('selected');
		// $('.tab'+$(this).attr('data-index')).addClass('selected');
		$('.tab'+$(this).attr('data-index')).fadeIn(1500);
		$(this).addClass('selected');
	})
	$('.read_more_btn').click(function(e){
		var titlePosition = $(this).closest('.roadmap_item_string').find('.roadmap_quarter_date').offset();
		var titlePositionTop = titlePosition.top;
		var scroll = $(window).scrollTop();
		var scrollDifference = titlePositionTop - scroll;
		if(scrollDifference > 30){
			$('html,body').stop().animate({ scrollTop: scroll}, 800);
		}
		else{
			$('html,body').stop().animate({ scrollTop: titlePositionTop - 30}, 800);
		}
		
		if($(this).closest('.roadmap_text_wr').hasClass('opened')){
			$(this).closest('.roadmap_text_wr').removeClass('opened');
			$(this).closest('.roadmap_text_wr').addClass('closed');
			$(this).closest('.roadmap_text_wr').addClass('closed');
			$(this).closest('.roadmap_quarter_text').css('max-height','80px');
		}
		else{
			$(this).closest('.roadmap_text_wr').addClass('opened');
			$(this).closest('.roadmap_text_wr').removeClass('closed');
			$(this).closest('.roadmap_text_wr').addClass('opened');
			$(this).closest('.roadmap_text_wr').removeClass('closed');
			$(this).closest('.roadmap_quarter_text').css('max-height','100%');
		}
	})
	$('.feedback_form_js').on('submit',function(e){
		e.preventDefault();
		var form = $(this);
		var email = form.find('.email_field_js').val();
		if(email == ''){
			$(this).find('.form_error').css('opacity', '1');
			$(this).find('.email_field_js').focus();
		}
		else{
			$.ajax({
				url: "../mail-sender.php",
				type: "POST",
				dataType: "json",
				data: {
					email: email
				},
				success: function(data){
					if(data && data.result) {
						$('.email_field_js').val('');
						location.hash = 'success';
						successSendResult();
						$('.header_modal_ok_text_js').html(data.result);
					} else {
						successSendResult();
						$('.header_modal_ok_text_js').html(data && data.error);
					}
				}
			});
		}
	});
	function successSendResult(){
		$.arcticmodal('close');
		$('.header_modal_ok_js').arcticmodal();
	}
	$('.detail_table_show').click(function(e){
		if($('.detail_table_overflow').hasClass('opened')){
			$('.detail_table_overflow').removeClass('opened');
		}
		else{
			$('.detail_table_overflow').addClass('opened');
		}
	});

	$(document).on('click','.js_readfaq',function(even){
		even.preventDefault();
		var href = $(this).attr('href');
		$(href).slideToggle();
		return false;
	});

	$('.js-checer input').change(function(){
		var count = $('.js-checer input').length,
			checkcount = 0;
        $('.js-checer input').each(function(){
			if ($(this).prop('checked')) {
                checkcount++;
			}
		});
        if (checkcount == count) {
        	$('.js-next').css('visibility','visible');
		}
	});
    $('.js-next').click(function(){
        $('#tab-first').hide();
    	$('#tab-second').show();
    	$('.tab-top-inner').removeClass('active');
        $('#tabtwo').addClass('active');
	});
    $('#copytocli').click(function(){
        var copyText = document.getElementById("copyurl");
        copyText.select();
        document.execCommand("Copy");
        console.log("Copied the text: " + copyText.value);
	});

    function getTimeRemaining(endtime){
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor( (t/1000) % 60 );
        var minutes = Math.floor( (t/1000/60) % 60 );
        var hours = Math.floor( (t/(1000*60*60)) % 24 );
        var days = Math.floor( t/(1000*60*60*24) );
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime){
        var clock = document.getElementById(id);
        var timeinterval = setInterval(function(){
            var t = getTimeRemaining(endtime);
            // clock.innerHTML = 'days: ' + t.days + ' ' + t.hours + ':' + t.minutes + ':' + t.seconds;
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
            if(t.total<=0){
                clearInterval(timeinterval);
            }
        },1000);
    }
    if ($('#clockdiv').length > 0) {
        var deadline =  $('#clockdiv').data('deadline');
        //'02/10/2017 20:59:59 GMT+02:00';
        initializeClock('clockdiv', deadline);
    }
    function openInNewTab(url) {
        var win = window.open(url, '_blank');
        win.focus();
    }
    $('#join_us_submit').click(function(even){
        even.preventDefault();
    	$('#form_join_us').submit();
    });
    $('#form_join_us').submit(function(even){
        even.preventDefault();
        var from = $('#form_join_us'),
            url = from.attr('action');
        $.ajax({
            type:'POST',
            data: {'email':$('#join_us_email').val()},
            url: url,
            success: function(result){
                console.log(result);
                console.log(JSON.parse(result));
                res = JSON.parse(result);
                if (res['error'] != 1) {
                	if (res['status'] != 0) {
                        $('#join_us_status').text(res['text']);
					}
                    if (res['status'] == 3) {
                        openInNewTab(res['url']);
                    }
				} else {
                    $('#join_us_status').html(res['text']);
				}
            }
        });
        return false;
	});

});
$(window).on('load', function () {
	var $roadMapStrings = $('.roadmap_item_string');
	var hold = 400;

	$.each($roadMapStrings,function(i,t){
	     var $this = $(t);
	     setTimeout(function(){ $this.slideDown(800).css('opacity','1'); },i*hold);
	});
	if($("div").is('.third_section_wrapper')){
		/* Layers Animation */
		var animationSectionPosition = $(".third_section_wrapper");
		var position = animationSectionPosition.position();
		function startAnimation(){
		    var scroll = $(window).scrollTop();
		    var screenHeight = $(window).height()/2;
		    if($(window).width() > 768){
		    var screenHeight = $(window).height()/2;
			}
		    else{
		    var screenHeight = $(window).height()/3;
			}
		    if(scroll >= position.top+screenHeight){
		    	$('.layer_animation_left_col').addClass('finished');
		    	$('.layer_animation_right_col').addClass('finished');
		    }
		}
		function startAnimationArrow(){
			if($("div").is('.section_arrow_first')){
		   		var scroll = $(window).scrollTop();
		   		var firstSectionHeight = $('.first_section_wrapper').height();
		   		if(scroll > firstSectionHeight){
		   			$('.section_arrow_first').css('bottom', '20px');
		   			$('.section_arrow_first').css('transform', 'rotate(0deg)');
		   		}
		   		else{
		   			$('.section_arrow_first').css('bottom', '1400px');
		   			$('.section_arrow_first').css('transform', 'rotate(180deg)');
		   		}
		   		var hideArrow = $('.ninth_section_wrapper').offset();
		   		if(scroll > hideArrow.top - $('.ninth_section_wrapper').height()*2){
		   			$('.section_arrow_first').css('opacity', '0');
		   		}
		   		else{
		   			$('.section_arrow_first').css('opacity', '1');
		   		}
		    	/*var firstArrowPoint = $('.section_arrow_point');
		    	var firstArrowPointPosition = firstArrowPoint.offset();
				if(scroll > firstArrowPointPosition.top){
					var sectionWrappers = $('.section_wrapper_js');
					var prevElementTop = 0;
					sectionWrappers.each(function(index, element){
					var elementPosition = $(element).offset();
					var currentPositionElement = 0;
					var currentPositionArrow = 0;
					if(scroll > elementPosition.top && elementPosition.top != 0){
					var currentArrow = $(element).find('.section_arrow');
					var currentArrowPosition = currentArrow.offset();
					if(currentArrowPosition.top > scroll){
					$('.section_arrow_first').css('top', currentArrowPosition.top);
					}
					}
					});	
				}*/
		
		    	
			}
		}
		$(window).scroll(function () {
			startAnimation();
			startAnimationArrow();
		});
		startAnimation();
		startAnimationArrow();
		if ($(window).width() > 1200){
			$(".layer_animation_img_wrapper, .right_animation_string").hover(
				function (e) {
					if($(".layer_animation_img_wrapper"+$(this).attr('data-hover')).hasClass('layer_animation_img_wr_transparent')){
						$(this).css('z-index', '0');
					}else{
						$(this).css('z-index', '8');
						$(".layer_animation_img_wrapper"+$(this).attr('data-hover')).addClass("hover");
					}
					$('.layer_animation_img_wrapper').addClass('nonhover');
					$('.right_animation_string').addClass('nonhover');
					$(".layer_animation_img_wrapper"+$(this).attr('data-hover')).addClass("hover");
					$(".right_animation_string"+$(this).attr('data-hover')).addClass("hover");
					$(".layer_animation_img_wrapper"+$(this).attr('data-hover')).removeClass("nonhover");
					$(".right_animation_string"+$(this).attr('data-hover')).removeClass("nonhover");
				},
				function () {
					$(".layer_animation_img_wrapper"+$(this).attr('data-hover')).removeClass("hover");
					$(".right_animation_string"+$(this).attr('data-hover')).removeClass("hover");
					$('.layer_animation_img_wrapper').removeClass('nonhover');
					$('.right_animation_string').removeClass('nonhover');
				}
			)
		}
	}
});


$(window).on('load', function () {
	var ethlink = $('#polosa').data('eht');
    $.ajax({
        type:'POST',
		data: {'link':ethlink},
        url: "/pars/pars.php",
        success: function(result){
        	var that = $('#polosa'),
                avgproc = 0,
                tekproc = 0,
				min = that.data('min'),
                avg = that.data('avg'),
            	max = that.data('max');

            console.log(JSON.parse(result));
            res = JSON.parse(result);
            if (res['error'] == 0) {
            	tekproc = (100*res['usd'])/max;
            	avgproc = (100*avg)/max;
            	console.log(avgproc);
                $('.first_section_ether_polosa_max').html(max+' USD<span>hard cap</span>');
                $('.first_section_ether_polosa_min').html(min);
                $('.first_section_ether_polosa_avg').html(avg+' USD<span>soft cap</span>');
                $('.first_section_ether_polosa_inner').text(res['usd']);
                $('.first_section_ether_polosa_inner').css('min-width',tekproc+'%');
                $('.first_section_ether_polosa_avg').css('left',avgproc+'%');
            }
        }
    });
});