jQuery(window).load(function ($) {
	jQuery('.logo, .teaser, .scroll, .section-start-img').addClass('active');
});

jQuery(function ($) {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 50) {
			$('.scroll').removeClass('active');
			$('.back-to-top').addClass('active');
		}else{
			$('.back-to-top').removeClass('active');
		}
	});
});

jQuery(function ($) {
	
	$('.btn-contact').click(function(){
		ga('send', 'event', 'Interaktion', 'Kontaktbutton geklickt');
	});
	$('.btn-download').click(function(){
		ga('send', 'event', 'Interaktion', 'Infoflyer angezeigt');
	});
	$('.acc-trigger').click(function () {
		var clickedAcc = $(this).parents('.acc-wrap');
		var openAccs = $(this).parents('section').find('.acc-open');
		$(this).parents('.acc-wrap').toggleClass('acc-open');
		$(this).next('.acc-content').stop().slideToggle();

		/*$.each(openAccs, function (index, value) {
			if (clickedAcc !== $(this)) {
				$(this).removeClass('acc-open');
				$(this).find('.acc-content').slideUp();
			}
		});*/

	});
});

jQuery(document).on('ready', function ($) {
	var winHeight = jQuery(window).height(),
		docHeight = jQuery(document).height(),
		progressBar = jQuery('progress'),
		max, value;

	max = docHeight - winHeight;
	progressBar.attr('max', max);

	jQuery(document).on('scroll', function () {
		value = jQuery(window).scrollTop();

		progressBar.attr('value', value);
	});
});

jQuery(window).on('resize', function () {
	progressBar = jQuery('progress');
	winHeight = jQuery(window).height(),
		docHeight = jQuery(document).height();

	max = docHeight - winHeight;
	progressBar.attr('max', max);

	value = jQuery(window).scrollTop();
	progressBar.attr('value', value);
});

/*smoothscroll*/
var keys = [37, 38, 39, 40];
function preventDefault(e) {
	e = e || window.event;
	if (e.preventDefault)
		e.preventDefault();
	e.returnValue = false;
}
function keydown(e) {
	for (var i = keys.length; i--;) {
		if (e.keyCode === keys[i]) {
			preventDefault(e);
			return;
		}
	}
}

function wheel(e) {
	preventDefault(e);
}

function disable_scroll() {
	if (window.addEventListener) {
		window.addEventListener('DOMMouseScroll', wheel, false);
	}
	window.onmousewheel = document.onmousewheel = wheel;
	document.onkeydown = keydown;
}
function enable_scroll() {
	if (window.removeEventListener) {
		window.removeEventListener('DOMMouseScroll', wheel, false);
	}
	window.onmousewheel = document.onmousewheel = document.onkeydown = null;
}

jQuery(function ($) {
	$('a[href*="#"]').not('a[data-vc-container]').not('#closemodal').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				disable_scroll();
				$('html, body').animate({
					scrollTop: target.offset().top - 50
				}, 1000, function () {
					enable_scroll();
				});
				return false;
			}
		}
	});
});

jQuery(function ($) {
	$('.nav-button').click(function () {
		$('.main-navigation').toggleClass('active');
		$(this).toggleClass('active');
		$(this).find('.stripe').delay(300).toggleClass('inactive');
		$(this).find('.stripe').delay(300).toggleClass('active');
		if ($(window).width() < 768 - getScrollbarWidth()) {
			$('body').toggleClass('overflow-hidden');
		}
	});
	$('.nav-link').click(function(){
		console.log(1)
		if ($(window).width() < 768 - getScrollbarWidth()) {
			$('.main-navigation').removeClass('active');
			$('body').removeClass('overflow-hidden');
			$('.nav-button').removeClass('active');
			$('.nav-button').find('.stripe').delay(300).removeClass('active');
			$('.nav-button').find('.stripe').delay(300).addClass('inactive');
		}
	});
});


function getScrollbarWidth() {
	var outer = document.createElement("div");
	outer.style.visibility = "hidden";
	outer.style.width = "100px";
	document.body.appendChild(outer);

	var widthNoScroll = outer.offsetWidth;
	// force scrollbars
	outer.style.overflow = "scroll";

	// add innerdiv
	var inner = document.createElement("div");
	inner.style.width = "100%";
	outer.appendChild(inner);

	var widthWithScroll = inner.offsetWidth;

	// remove divs
	outer.parentNode.removeChild(outer);

	return widthNoScroll - widthWithScroll;
}