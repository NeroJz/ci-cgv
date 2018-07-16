//global var
var screenWidth = $(window).width(),
	screenHeight = $(window).height(),
	iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform)  //detect iOS
	;




//update screen dimension
$(window).on('resize', function () {
	screenWidth = $(window).width();
	screenHeight = $(window).height();
	set_body_top()
});





//validate email
function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}





//detect iOS
if (iOS) {
	document.querySelector("html").classList.add('iOS');
}





//detect ie
function detectIE() {
	var ua = window.navigator.userAgent;
	// Test values; Uncomment to check result …
	// IE 10: ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';
	// IE 11: ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';
	// Edge 12 (Spartan): ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';
	// Edge 13: ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';
	var msie = ua.indexOf('MSIE ');
	if (msie > 0) {
		// IE 10 or older => return version number
		return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
	}

	var trident = ua.indexOf('Trident/');
	if (trident > 0) {
		// IE 11 => return version number
		var rv = ua.indexOf('rv:');
		return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
	}

	var edge = ua.indexOf('Edge/');
	if (edge > 0) {
		// Edge (IE 12+) => return version number
		return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
	}

	// other browser
	return false;
}
var version = detectIE();
$(document).ready(function () {
	//if browser is ie, add ie class to html, and link additional ie stylesheet
	if (version !== false) {
		$('html').addClass('ie ie-' + version);
		//$('body').append('<link type="text/css" rel="stylesheet" href="assets/css/style-ie.css" />');
	}
});





//set body padding top based on ads's height
function set_body_top() {

	$('body').css('padding-top', '');

	var topAds = $('#ads-top'),
		body_padTop = parseInt($('body').css('padding-top'), 10)
		;
	if (topAds.is(":visible")) {
		var adsHeight = topAds.height();
		$('body').css('padding-top', (body_padTop + adsHeight));
	}
}





//pop up
function popUp() {
	var wrapper = document.getElementById('wrapper'),
		body = wrapper.parentNode,
		pop = document.createElement("div"),
		content = document.createElement("div"),
		overlay = document.createElement("div"),
		close = document.createElement("button")
		;

	pop.id = 'popup';
	content.className = 'pop-content';
	overlay.className = 'overlay';
	close.setAttribute('type', 'button');
	close.className = 'closeBtn';

	$(body).prepend(pop);
	$(body).prepend(overlay);
	pop.appendChild(close);
	pop.appendChild(content);

	$(overlay).velocity('fadeIn');

	//close fn
	$(close).one('click', function () {
		$(pop).remove();
		$(overlay).remove();
	})
}
//popup create slide
function popup_set_slide(arr) {
	var pop = document.getElementById('popup'),
		popContent = document.querySelector('.pop-content'),
		slide = document.createElement('div'),
		imgWrap = document.createElement('div'),
		img = document.createElement('img')
		;

	//append content wrap and image
	slide.className = 'popSlide';
	imgWrap.className = 'imgWrap';
	img.setAttribute('src', arr[0]);
	popContent.appendChild(slide);
	slide.appendChild(imgWrap);
	imgWrap.appendChild(img);


	//add image only class, else apend title and msg
	if (!arr[1]) {
		pop.classList.add('imgOnly');
	} else {
		var title = document.createElement('p'),
			title_txt = document.createTextNode(arr[1]),
			msg = document.createElement('p'),
			msg_txt = document.createTextNode(arr[2])
			;

		//append title
		title.className = 'title';
		title.appendChild(title_txt);
		slide.appendChild(title);

		//append msg
		msg.className = 'msg';
		msg.appendChild(msg_txt);
		slide.appendChild(msg);

	}
}
//
function popup_init_slide() {

	var pop = document.getElementById('popup'),
		popContent = document.querySelector('.pop-content');

	//init slider if more then 1 slide
	if ($('.popSlide').length > 1) {
		popContent.classList.add('owl-carousel');
		$(popContent).owlCarousel({
			items: 1,
			loop: false,
			nav: true,
			rewind: false,
			navText: '',
			autoWidth: false,
			autoHeight: true,
			autoplay: true,
			autoplayHoverPause: true
		});
	}



}





//language
function toggle_lang(e) {
	var html = document.querySelector("html"),
		isEN = html.classList.contains('en')
		;

	//if current language is eng, language button's text will be "中文"
	//so change current language, and change the language button's text to "ENGLISH"
	if (isEN) {
		e.target.textContent = 'ENGLISH';
		html.classList.remove('en');
	} else {
		e.target.textContent = '中文';
		html.classList.add('en');
	}

}





//menu
function menu_toggle() {
	var hamburger = $('.hamburger'),
		nav = $('#main-nav'),
		isOpened = hamburger.hasClass('opened');
	;

	if (isOpened) {
		hamburger.removeClass('opened');
		$('.overlay').velocity('fadeOut', function () {
			$(this).remove();
		});
		nav.velocity({
			left: '-75%'
		}, function () {

		});
	} else {
		hamburger.addClass('opened');
		$('<div class="overlay"></div>').insertAfter(nav).velocity('fadeIn');
		nav.velocity({
			left: '0'
		});
		$('.overlay').one('click', menu_toggle);
	}

}





//footer 
function footer_toggle() {

	//if screen = 768 or higher, do nothing
	if (screenWidth > 767) {
		return false;
	}

	var footer = $('footer'),
		targ_grp = $(this).parent(),
		hasOpened = footer.find('.opened').length > 0;
	;

	if (targ_grp.is('.opened')) {
		targ_grp.children('.links-wrap').velocity('slideUp', function () {
			targ_grp.removeClass('opened');
			return false;
		});
	} else if (hasOpened) {

		//close currently opened group
		footer.find('.opened').children('.links-wrap').velocity('slideUp', function () {
			$(this).closest('.opened').removeClass('opened');
			//open selected group
			targ_grp.children('.links-wrap').velocity('slideDown', function () {
				targ_grp.addClass('opened');
			});
		});

	} else {
		//open selected group
		targ_grp.children('.links-wrap').velocity('slideDown', function () {
			targ_grp.addClass('opened');
		});
	}

}





//search init
function search_toggle() {
	var wrap = $('.search-wrap'),
		hot = $('.hotSearch-wrap')
		;

	//append overlay
	$('<div class="overlay"></div>').insertAfter(wrap).velocity('fadeIn');

	//append hot search poster into the hotsearch wrap
	hot.find('.hotSearch').append('<a href="movie.php"><img src="images/poster9.jpg" /><p>勇敢傳說</p></a>');
	hot.find('.hotSearch').append('<a href="movie.php"><img src="images/poster10.jpg" /><p>妖獸大蛛王</p></a>');
	hot.find('.hotSearch').append('<a href="movie.php"><img src="images/poster11.jpg" /><p>異星戰場：約翰·卡特傳奇</p></a>');
	hot.find('.hotSearch').append('<a href="movie.php"><img src="images/poster12.jpg" /><p>普羅米修斯</p></a>');

	wrap.css('display', 'block');
	wrap.velocity({
		top: 0
	}, function () {
		hot.velocity('fadeIn');
	});
}

//search end
function search_end() {
	var wrap = $('.search-wrap'),
		hot = $('.hotSearch-wrap')
		;
	$('.overlay').velocity('fadeOut', function () {
		$(this).remove();
	});
	hot.velocity('fadeOut', function () {
		hot.find('a').remove();
		wrap.velocity({
			top: -44
		}, function () {
			wrap.removeAttr('style');
		});
	});
}





//seat plan expandable
function journey_expand() {

	var w = $('.selected-movie'),
		exp = $('.expandable'),
		j = $('.journey')
		;

	//expandable is forced open in 980 width, so do nth if the screen width is greater then 979
	if (screenWidth > 979) {
		return false;
	}

	if (!w.hasClass('opened')) {
		w.addClass('opened');
		exp.velocity("slideDown");
		$('<div class="overlay"><div>').insertAfter(w).velocity('fadeIn', function () {
			$(this).one('click', journey_expand);
		});
	} else {
		exp.velocity("slideUp", function () {
			w.removeClass('opened');
			$('.overlay').velocity('fadeOut', function () { $(this).remove(); });
		});
	}

}





//tabs move right
function tab_right() {
	var wrap = $('.tab-wrap'),
		tab = wrap.find('.etabs'),
		nextTab = wrap.find('.tab.active').next(),
		nextTab_left = Math.round(nextTab.position().left),
		nextTab_width = Math.round(nextTab.outerWidth(true)),
		nextTab_total = nextTab_left + nextTab_width,
		move_range = 0
		;

	//enabled left button
	wrap.find('.left').prop('disabled', false);

	if (nextTab_total >= 910) {  //910 = contentWidth(980) - etabs margin right(70)
		move_range = Math.round(nextTab_total - 840); //910 = 910 - etabs margin left(70)
		//animate move left
	}

	tab.find('.tab').first().velocity({
		marginLeft: "-=" + move_range
	}, function () {
		wrap.find('.right').one('click', tab_right);
	});

	//change tab
	nextTab.find('a').trigger('click');

	//disable next button if adtive last tab
	if (nextTab.is(':last-child')) {
		wrap.find('.right').prop('disabled', true);
	}
}


function tab_left() {
	var wrap = $('.tab-wrap'),
		tab = wrap.find('.etabs'),
		prevTab = wrap.find('.tab.active').prev(),
		prevTab_left = Math.round(prevTab.position().left),
		prevTab_width = Math.round(prevTab.outerWidth(true)),
		prevTab_total = 0,
		move_range = 0
		;

	//enabled right button
	wrap.find('.right').prop('disabled', false);

	//animate move left
	if (prevTab_left < 0) {  //70 =  etabs margin left(70)
		if (prevTab_left < 0) {
			prevTab_total = prevTab_left * -1;
		} else {
			prevTab_total = prevTab_left;
		}
		move_range = Math.round((prevTab_total)); //convert to positive number
	}

	tab.find('.tab').first().velocity({
		marginLeft: "+=" + move_range
	}, function () {
		wrap.find('.left').one('click', tab_left);
	});

	//change tab
	prevTab.find('a').trigger('click');

	//disable next button if adtive last tab
	if (prevTab.is(':first-child')) {
		wrap.find('.left').prop('disabled', true);
		prevTab.velocity({
			marginLeft: 0
		});
	}
}




//document ready
$(document).ready(function () {

	//find tab class, and init tab
	if ($('.tab-wrap').length > 0) {

		var wrap = $('.tab-wrap'),
			tab = wrap.find('.etabs'),
			tabs_width = 0
			;
		//get the total width of tabs
		tab.css('display', 'inline-block');
		tabs_width = tab.outerWidth(true)
		tab.removeAttr('style');

		//init easytabs
		wrap.easytabs({
			updateHash: false
		});

		//if screen width is 980 or bigger, assume using desktop
		//check total tab's width exceeding 980, and add left & right icon
		if (screenWidth >= 980 && tabs_width > 980) {
			wrap.addClass('arrow-tab');
			wrap.prepend('<button type="button" class="arrow left" disabled></button><button type="button" class="arrow right"></button>');

			//when click right
			wrap.find('.right').one('click', tab_right);

			//when click left
			wrap.find('.left').one('click', tab_left);
		}
	}
});





//when user pick a seat
function pick_seat(e) {
	var isPick = e.target.classList.contains('picked'),
		name = e.target.dataset.name
		;
	console.log(name);
	if (isPick) {
		e.target.classList.remove('picked');
		if ($('#zoom .picked').length < 1) {
			$('html').removeClass('hasSeat');
			$('#selected-seat').remove();
		} else {
			$('#selected-seat span[data-name=' + name + ']').remove();
		}
	} else {
		e.target.classList.add('picked');
		if (!$('html').hasClass('hasSeat')) {
			$('html').addClass('hasSeat');
		}
		if ($('#selected-seat').length > 0) {
			$('#selected-seat').append('<span data-name="' + name + '">' + name + '</span>');
		} else {
			$('<p id="selected-seat">已選座位：</p>').insertAfter($('h4'));
			$('#selected-seat').append('<span data-name="' + name + '">' + name + '</span>');
		}
	}
}





//trailer popout
function trailer_popup() {
	var d = document,
		body = document.body,
		overlay = document.createElement("div"),
		wrap = document.createElement("div"),
		play = document.createElement("div"),
		img = document.createElement("img"),
		h = $(window).width() * 9 / 16,
		id = 'QwievZ1Tx-8'  //youtube video id
		;

	//building & manipulate DOM
	overlay.classList.add('trailer');
	overlay.classList.add('overlay');
	wrap.classList.add('trailer-wrap');
	$(body).prepend(overlay);
	$(body).prepend(wrap);
	wrap.style.height = h + 'px';

	//set dimension
	if (h > $(window).height()) {
		var w = $(window).height() * 16 / 9;
		h = w * 9 / 16;
		wrap.style.width = w + 'px';
		wrap.style.height = h + 'px';
	} else {
		wrap.style.height = h + 'px';
	}

	//resize
	window.onresize = function (event) {
		h = $(window).width() * 9 / 16;
		if (h > $(window).height()) {
			var w = $(window).height() * 16 / 9;
			h = w * 9 / 16;
			wrap.style.width = w + 'px';
			wrap.style.height = h + 'px';
		} else {
			wrap.style.height = h + 'px';
		}
	};

	//animate & handler
	overlay = document.querySelector('.overlay');
	$(overlay).velocity('fadeIn').one('click', function () {
		$('.trailer-wrap').remove();
		$(this).remove();
	});
	$(wrap).html('<iframe width="1280" height="720" src="https://www.youtube.com/embed/' + id + '?autoplay=1" frameborder="0" allowfullscreen>Your browser cannot display this video, please use a updated browser. Such as Chrome</iframe>');
	$(document).on('keyup', function (e) {
		if (e.keyCode == 27) { // escape key maps to keycode `27`
			$('.trailer-wrap').remove();
			$(overlay).remove();
			$(document).off('keyup');
		}
	});
}





//when user click more btn
function expand_synopsis(e) {
	var more = e.target,
		slide = more.parentNode.parentNode,
		sHeight = slide.offsetHeight,
		title = slide.querySelector('.centerContent').getElementsByTagName('h4'),
		tHeight = title[0].offsetHeight,
		synopsis = slide.querySelector('.synopsis'),
		usedSpace = 349  //ocupy space by other element
		;

	//
	if (synopsis.classList.contains('expanded')) {
		//console.log('already expanded');
		synopsis.style.removeProperty('max-height');
		synopsis.classList.remove('expanded');
		more.textContent = '更多';
	} else {
		//console.log('not yet expanded');
		var expandHeight = sHeight - tHeight - usedSpace;
		synopsis.style.maxHeight = expandHeight + 'px';
		synopsis.classList.add('expanded');
		more.textContent = '簡短';
	}
}





//when user click more btn in movie details page
function expand_synopsis_md(e) {
	var more = e.target,
		synopsis = document.querySelector('.syn-txt')
		;

	if (synopsis.classList.contains('expanded')) {
		synopsis.classList.remove('expanded');
		more.value = "關於更多";
	} else {
		synopsis.classList.add('expanded');
		more.value = "更少";
	}


}





//when user click + / - in payment page
function tic_change(e) {
	var btn = e.target,
		wrap = btn.parentNode.parentNode,
		max = 3, //max ticket
		tar_input = wrap.querySelector('.btn').querySelector('.tic-num'),
		isPlus = btn.classList.contains('tic-plus')
		;

	if (isPlus) {
		tar_input.value++;
		wrap.querySelector('.btn').querySelector('.tic-minus').disabled = false;
	} else {
		tar_input.value--;
		if (tar_input.value < 1) {
			btn.disabled = true;
		}
	}

	var input = document.getElementsByClassName('tic-num'),
		assigned_tic = 0
		;

	for (var i = 0; i < input.length; i++) {
		if (parseInt(input[i].value)) {
			assigned_tic += parseInt(input[i].value);
		}
	}

	if (assigned_tic == max) {
		$('.tic-plus').prop('disabled', true);
	} else {
		$('.tic-plus').prop('disabled', false);
	}
}





//when user click payment option
function payment_option(e) {
	var btn = e.target,
		wrap = btn.parentNode
		;

	if (btn.classList.contains('active')) {
		return false;
	} else {
		wrap.querySelector('.active').classList.remove('active');
		btn.classList.add('active');
	}

}





//when user click on the faq questions
function faq_expand(e) {

	var item = e.target.parentNode,
		open_item = document.querySelector('.faq-item.opened')
		;

	if (item.classList.contains('opened')) {
		item.classList.remove('opened');
		$(item).children('.ans').velocity('slideUp');
	} else if (open_item) {
		$(open_item).children('.ans').velocity('slideUp', function () {
			open_item.classList.remove('opened');
			item.classList.add('opened');
			$(item).children('.ans').velocity('slideDown');
		});
	} else {
		item.classList.add('opened');
		$(item).children('.ans').velocity('slideDown');
	}

}





//append error message
function form_error(el, err) {
	var wrap = el.closest('.input-wrap'),
		error_msg = document.createElement("p"),
		txt = document.createTextNode(err)
		;
	wrap.classList.add('error');
	error_msg.className = 'error-msg';
	wrap.appendChild(error_msg);
	error_msg.appendChild(txt);
}





//when user submit feedback form
function feedback_submit(e) {

	var form = e.target,
		name = document.getElementById('ff-name'),
		mail = document.getElementById('ff-mail'),
		msg = document.getElementById('ff-msg'),
		error_count = 0
		;

	//remove all error style and error message
	$(form).find('.error').removeClass('error');
	$(form).find('.error-msg').remove();

	//validate name
	if (!name.value) {
		error_count++;
		name.parentNode.classList.add('error');
		var error_msg = document.createElement("p"),
			txt = document.createTextNode("名字無法使用")
			;
		error_msg.className = 'error-msg';
		name.parentNode.appendChild(error_msg);
		error_msg.appendChild(txt);
	}

	//validate mail
	if (!mail.value || !IsEmail(mail.value)) {
		error_count++;
		mail.parentNode.classList.add('error');
		var error_msg = document.createElement("p"),
			txt = document.createTextNode("電郵無法使用")
			;
		error_msg.className = 'error-msg';
		mail.parentNode.appendChild(error_msg);
		error_msg.appendChild(txt);
	}

	//validate textarea
	if (!msg.value) {
		error_count++;
		msg.parentNode.classList.add('error');
		var error_msg = document.createElement("p"),
			txt = document.createTextNode("留言不能空白")
			;
		error_msg.className = 'error-msg';
		msg.parentNode.appendChild(error_msg);
		error_msg.appendChild(txt);
	}

	//prevent form to submit if error is more then 0
	if (error_count > 0) {
		return false;
	}
}





//when user submit lounge form
function lounge_submit(e) {
	var form = e.target,
		honorific = document.getElementById('lf-hono'),
		name = document.getElementById('lf-name'),
		number = document.getElementById('lf-number'),
		mail = document.getElementById('lf-mail'),
		event = document.getElementById('lf-event')
		;

	//remove all error style and error message
	$(form).find('.error').removeClass('error');
	$(form).find('.error-msg').remove();

	//validate honorific
	if (!honorific.value) {
		form_error(honorific, '請選擇稱呼');
	}

	//validate name
	if (!name.value) {
		form_error(name, '名字無法使用');
	}

	//validate number
	if (!number.value || !$.isNumeric(number.value)) {
		form_error(number, '聯絡號碼不正確');
	}

	//validate mail
	if (!mail.value || !IsEmail(mail.value)) {
		form_error(mail, '電郵無法使用');
	}

	//validate event
	if (!event.value) {
		form_error(event, '活動目的不正確');
	}

	//prevent form to submit if error is more then 0
	if ($('.error').length > 0) {
		//scroll page to 1st error
		$('.error').first().velocity("scroll", { offset: -80 });
		return false;
	}

}





//clear all input error style when focus
function clear_error(e) {

	var parent = e.target.parentNode;

	if (parent.classList.contains('error')) {
		parent.classList.remove('error');
		$(parent).find('.error-msg').remove();
	}

}





//toggle sidebar in mobile mode
function sidebar_toggle() {
	var sidebar = document.getElementById('sideBar'),
		wrapper = document.getElementById('wrapper'),
		overlay = document.createElement("div"),
		body = wrapper.parentNode
		;

	//set class
	overlay.className = 'overlay';

	//insert content
	body.insertBefore(overlay, wrapper);
	$(overlay).velocity('fadeIn');
	sidebar.classList.add('opened');
	$(overlay).one('click', function () {
		sidebar.classList.remove('opened');
		$(overlay).velocity('fadeOut', function () {
			$(this).remove();
		});
	});

}





//
function ads_top_close() {
	var banner = document.getElementById('ads-top');

	$(banner).velocity('slideUp', function () {
		$(this).remove();
		set_body_top();
		$(document).trigger('adsClose');
	});

}





//expand and collapse the transaction history 
function trans_history_toggle(e) {
	var target_trans = $(this).parent();

	if (target_trans.is('.opened')) {
		target_trans.find('.details').velocity('slideUp', function () {
			target_trans.removeClass('opened');
			target_trans.addClass('closed');
		});
	} else {
		target_trans.find('.details').velocity('slideDown', function () {
			target_trans.removeClass('closed');
			target_trans.addClass('opened');
		});
	}
}





//expand user menu
function userMenu_expand() {
	var wrap = $(this).parent(),
		menu_wrap = wrap.find('.options-wrap')
		;

	if (wrap.hasClass('opened')) {
		menu_wrap.velocity('slideUp', function () {
			wrap.removeClass('opened');
		});
	} else {
		menu_wrap.velocity('slideDown', function () {
			wrap.addClass('opened');
		});
	}
}





//edit profile
function edit_profile() {
	var form = $('#form-profile-overview'),
		btn_wrap = form.find('.btn-wrap')
		;

	form.addClass('editing');
	form.find('input, select').prop('disabled', false);
	form.find('.newsletter-rad').parent('.hide').removeClass('hide');

	btn_wrap.find('#edit').hide();
	btn_wrap.append('<input type="button" id="confirm" class="solidBtn" value="確定" />');
	btn_wrap.append('<input type="button" id="cancel" class="strokeBtn red" value="取消" />');
}





//custom alert box
function cust_alert() {
	var body = $('body')
		;
}





//when user change dropdown select, enable the confirm button
function seatPlan_select_change() {
	$('.selected-movie').find('.solidBtn').prop('disabled', false);
}




//hide top ads when scroll
function hide_top_ads() {
	var ads = $('#ads-top'),
		ads_height = ads.height()
		;

	$(document).on('adsClose', function () {
		ads_height = 0;
	})

	$(window).on('resize', function () {
		ads_height = ads.height();
		if ($('header').hasClass('hideAds')) {
			$('header').css('top', '-' + ads_height + 'px');
		}
	});

	if ($(ads).height() > 1) {
		var hidePoss = 150;
		window.onscroll = function () {
			if ($(document).scrollTop() > hidePoss) {
				$('header').css('top', '-' + ads_height + 'px');
				$('header').addClass('hideAds');
			} else {
				$('header').css('top', '0');
				$('header').removeClass('hideAds');
			}
		};
	}
}





//when user click footer's more
function footer_more() {
	var sitemap = $('.sitemap'),
		more = sitemap.find('.more')
		;

	if (sitemap.hasClass('opened')) {
		sitemap.find('.show').velocity('fadeOut').removeClass('show');
		sitemap.removeClass('opened')
		more.html('更多');
	} else {
		sitemap.find('a:hidden').velocity('fadeIn', { display: "block" }).addClass('show');
		sitemap.addClass('opened')
		more.html('簡短');
	}

}





//handler
$(document).ready(function () {
	hide_top_ads();
});
$(window).on('load', function () {
	set_body_top();
});
$(document)
	.on('click', '#lang', toggle_lang)
	.on('click', '.hamburger', menu_toggle)
	.on('click', '.btn-group .trigger', footer_toggle)
	.on('click', '.ic-search', search_toggle)
	.on('click', '#seach-cancel', search_end)
	.on('click', '.journey-trigger', journey_expand)
	.on('click', '#zoom .avai', pick_seat)
	.on('click', '.strokeBtn.trailer', trailer_popup)
	.on('click', '.slide .more', expand_synopsis)
	.on('click', '#movie-details .read-more', expand_synopsis_md)
	.on('click', '.tic-type button', tic_change)
	.on('click', '.option-wrap .option', payment_option)
	.on('click', '.faq-item .qn', faq_expand)
	.on('submit', '#feedback_form', feedback_submit)
	.on('submit', '#lounge_form', lounge_submit)
	.on('focus', 'input, textarea, select', clear_error)
	.on('click', '.ic-tic', sidebar_toggle)
	.on('click', '.ads-close', ads_top_close)
	.on('click', '.time-item .bubble', trans_history_toggle)
	.on('click', '.username', userMenu_expand)
	.on('click', '#form-profile-overview #edit', edit_profile)
	.on('change', '.selected-movie select', seatPlan_select_change)
	.on('click', '.sitemap .more', footer_more)

	.on('click', '#seat .back', function () { window.history.back(); })
	// .on('click', '.detail', function () { window.location.href = 'movie.php' })
	.on('click', '#payment .back', function () { window.location.href = 'seat.php' })
	.on('click', '#payment .next', function () { window.location.href = 'thanks-purchase.php' })
	.on('click', '.logout', function () { window.location.href = 'login.php' })
	.on('click', '.forgot-pwd-gotIt', function () { window.location.href = 'reset-pwd.php' })
	;