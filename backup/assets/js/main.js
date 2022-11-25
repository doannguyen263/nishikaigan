jQuery(function($) {

	var wow = new WOW(
	{
	    boxClass:     'wow',
	    animateClass: 'animated',
	    offset:       0,
	    mobile:       true,
	    live:         true
	}
	);
	wow.init();


	// Page Scroll
    $(document).ready(function () {
        //smoothscroll
        $('.js-click-idscroll a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');

            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top+2
            });
        });
    });


    $('.js-fixed-item-toggle').on("click",function(e){
    	e.preventDefault()

    	let item_width = $(this).find('.fixed-contact__item--hide').outerWidth()
    	let item_height = $(this).find('.fixed-contact__item--hide').outerHeight()

    	$(this).css({'--content-width':item_width+'px', '--content-height':item_height+'px'})

    	if( !$(e.target).hasClass('fixed-contact__item--hide')){
    		console.log(e)
    		$('.js-fixed-item-toggle').toggleClass('active')
    	}

    })

	var back_to_top=$(".back-to-top"),offset=220,duration=500;$(window).scroll(function(){$(this).scrollTop()>offset?back_to_top.addClass("active"):back_to_top.removeClass("active")}),$(document).on("click",".back-to-top",function(o){return o.preventDefault(),$("html, body").animate({scrollTop:0},duration),!1});


	/*---- Stick menu mobie---*/
    var headermb__mb=$(".headermb__mb"),offset=1;
    $(window).scroll(function(){$(this).scrollTop()>offset?headermb__mb.addClass("active"):headermb__mb.removeClass("active")})

	/*----Back to top---*/
    var back_to_top=$(".back-to-top"),offset=220,duration=500;$(window).scroll(function(){$(this).scrollTop()>offset?back_to_top.addClass("active"):back_to_top.removeClass("active")}),$(document).on("click",".back-to-top",function(o){return o.preventDefault(),$("html, body").animate({scrollTop:0},duration),!1});


	// Sticky navbar
    // =========================

    // Custom function which toggles between sticky class (is-sticky)
    var stickyToggle = function (sticky, stickyWrapper, scrollElement,stickyHeight) {
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop && scrollElement.scrollTop() > 0 ) {
            // stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        }
        else {
            sticky.removeClass("is-sticky");
            // stickyWrapper.height('auto');
        }
    };
    $('[data-toggle="sticky-onscroll"]').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');
        var stickyHeight = sticky.outerHeight();
        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            stickyToggle(sticky, stickyWrapper, $(this),stickyHeight);
        });

        // On page load
        stickyToggle(sticky, stickyWrapper, $(window),stickyHeight);
        // Check scroll top
        var winSt_t = 0;
        $(window).scroll(function() {
            var winSt = $(window).scrollTop();
            if (winSt >= winSt_t) {
                sticky.removeClass("top_show")
            } else {
                sticky.addClass("top_show")
            }
            winSt_t = winSt
        });
    });

	//-------------------------------------------------
	// Menu
	//-------------------------------------------------
	$.fn.dnmenu = function( options ) {

	    let thiz = this
	    let menu = $(this).attr('id')
	    let menu_id = '#'+menu
	    var button = $('a[href="#'+menu+'"]')

	    // Default options
	    var settings = $.extend({
	        name: 'John Doe'
	    }, options );

	    // get ScrollBar Width
	    function getScrollBarWidth () {
	        var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
	            widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
	        $outer.remove();
	        return 100 - widthWithScroll;
	    };
	    let ScrollBarWidth = getScrollBarWidth() + 'px';

	    // Button click
	    button.click(function(e){
	        e.preventDefault()
	        console.log(button)
	        if(button.hasClass('active')){
	            $('body').removeClass('modal-open').css("padding-right","")
	            button.removeClass('active')
	            $(menu_id).removeClass('active')

	        } else {
	            // $('body').addClass('modal-open').css("padding-right",ScrollBarWidth)
	            $('body').addClass('modal-open').css("overflow:hidden")
	            button.addClass('active')
	            $(menu_id).addClass('active')

	        }
	    });

	    // Menu
	    var el= $(thiz).find(".nav__mobile--ul");
	    el.find(".menu-item-has-children>a").after('<button class="nav__mobile__btn"><i></i></button>'),

	    el.find(".nav__mobile__btn").on("click",function(e){
	        e.stopPropagation(),
	        $(this).parent().find('.sub-menu').first().is(":visible")?$(this).parent().removeClass("sub-active"):
	        $(this).parent().addClass("sub-active"),
	        $(this).parent().find('.sub-menu').first().slideToggle()
	    })

	    // Apply options
	    return;
	};
	$('#menu__mobile').dnmenu()


	// google analitics
	$('.js-tap').on('click', function(){
	  if($(this).hasClass('is-tel')){
	    // telタップ
	    gtag('event','tel-tap',{'event_category': 'click','event_label': 'label'});
	  }else if ($(this).hasClass('is-web')) {
	    // 予約タップ
	    gtag('event','yoyaku-tap',{'event_category': 'click1','event_label': 'label'});
	  } else if ($(this).hasClass('is-line')) {
	    // lineタップ
	    gtag('event','line-tap',{'event_category': 'click2','event_label': 'label'});
	  }
	});

	var fixed_contact=$(".fixed-contact")
    $(window).scroll(function(){

        if( $(this).scrollTop()>300 ){
        	fixed_contact.addClass("fixed")
        }else{
        	fixed_contact.removeClass("fixed")
        	$('.js-fixed-item-toggle').removeClass('active')
        }

    })

    // Js Tab
	$('ul.nav-tabs .nav-link').click(function(){
		var $this = $(this);
		var $theTab = $(this).attr('id');
		console.log($theTab);
		if($this.hasClass('active')){
		  // do nothing
		} else{
		  $this.closest('.tabs_wrapper').find('ul.nav-tabs .nav-link, .tab-content .tab-pane').removeClass('active show');
		  $('.tab-content .tab-pane[data-tab="'+$theTab+'"], ul.nav-tabs .nav-link[id="'+$theTab+'"]').addClass('active show');
		}

	});

});


