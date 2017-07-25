!(function($){
	"use strict";
	jQuery(document).ready(function($) {
		/* Show menu desktop/mobile */
		function DoyleShowMenuType() {
			var screen_width = $(window).width();
			
			if(screen_width <= option_ob.enable_mobile){
				$('.bt-header .bt-header-desktop, .bt-header .bt-header-stick').hide();
				$('.bt-header .bt-header-mobile').show();
			}else{
				$('.bt-header .bt-header-desktop, .bt-header .bt-header-stick').show();
				$('.bt-header .bt-header-mobile').hide();
			}
		}
		DoyleShowMenuType();
		
		/* Toggle menu mobile */
		function DoyleToggleMenuMobile() {
			$('.bt-header .bt-menu-toggle').on('click', function() {
				$(this).toggleClass('active');
				$('.bt-header .bt-menu-mobile').toggle('slow');
			});
		}
		DoyleToggleMenuMobile();
		
		/* Toggle sub menu mobile */
		function DoyleToggleSubMenuMobile() {
			var hasChildren = $('.bt-header .bt-header-mobile ul li.menu-item-has-children');
			
			hasChildren.each( function() {
				var $btnToggle = $('<span class="menu-toggle"></span>');
				$( this ).append($btnToggle);
				$btnToggle.on( 'click', function(e) {
					e.preventDefault();
					$( this ).toggleClass('active');
					$( this ).parent().children('ul').toggle('slow'); 
				} );
			} );
		}
		DoyleToggleSubMenuMobile();
		
		/* Header Stick */
		function DoyleHeaderStick() {
			if($( '.bt-header' ).hasClass( 'bt-stick' )) {
				var h_menu = $('.bt-header .bt-header-desktop .bt-subheader.bt-bottom'),
					h_menu_info = {top: h_menu.offset().top, height: h_menu.innerHeight()};
				
				if ($(window).scrollTop() > (h_menu_info.top + h_menu_info.height)){
					$( '.bt-header .bt-header-stick' ).addClass('active');
				}
				if($(window).scrollTop() < (h_menu_info.top + h_menu_info.height + 90)){
					$( '.bt-header .bt-header-stick' ).removeClass('active');
				}
				
			}
			
			
		}
		DoyleHeaderStick();
		
		/* Menu Canvas */
		function DoyleMenuCanvas() {
			$('.bt-header .bt-menu-canvas-toggle').on('click', function() {
				$('#bt_menu_canvas').toggleClass('active');
			});
			$('#bt_menu_canvas').on('click', function() {
				$('#bt_menu_canvas').toggleClass('active');
			});
		}
		DoyleMenuCanvas();
		
		/* Masonry */
		function DoyleMasonry() {
			if($('.bt-grid-masonry').length > 0) {
				$('.bt-grid-masonry .row').isotope({
					// options
				});
			}
		}
		DoyleMasonry();
		
		/* Callback function when resize screen */
		$(window).on('resize', function() {
			DoyleShowMenuType();
			DoyleMasonry();
		});
		
		$(window).on('scroll', function() {
			DoyleHeaderStick();
			DoyleMasonry();
		});
		
		
		/* Compatible Ess Grid and VC Animation */
		$('body').on('click', '.esg-filterbutton', function() {
			setTimeout(function(){
				$(window).trigger('resize');
			}, 500);
		});
		
		
		//useful var
		var $window = $(window);
		var mainMenuHeight = $('#bt-main-menu').height();
		/* Make easing scroll when click a link in page */
		function BearsthemesEasingMoving() {
			var $root = $('html, body');
			$('.bt-header-onepage .bt-menu-list ul > li > a').on('click', function() {
				var href = $.attr(this, 'href');
				$root.animate({
					scrollTop: ($(href).offset().top - mainMenuHeight)
				}, 700, function() {
					window.location.hash = href;
				});
				return false;
			});
		}
		BearsthemesEasingMoving();
		
		/* Dynamic animation */
		var btAnimation = {};
		btAnimation.slideUp = function( elem, timer ) {
				
				dynamics.css(
					elem,
					{ translateX: 20, opacity: 0, scale: .3 }
				)
				
				dynamics.animate( 
					elem, 
					{ translateX: 0, opacity: 1, scale: 1 }, 
					{ 
						type: dynamics.spring, 
						duration: 656, 
						frequency: 166, 
						friction: 155, 
						delay: timer,
						complete: function() {
							$( elem ).css( 'transform', 'none' )
						} 
					} 
				);
			}
		
		btAnimation.slideDown = function( elem, timer ) {
				dynamics.css(
					elem,
					{ translateX: 0, opacity: 1 } 
				)
				
				dynamics.animate( 
					elem, 
					{ translateX: 20, opacity: 0 }, 
					{ 
						type: dynamics.spring, 
						duration: 656, 
						frequency: 166, 
						friction: 155, 
						delay: timer,
						complete: function() {
							$( elem ).css( 'transform', 'none' )
						} 
					} 
				);
			}
		
		/* Open the hide menu */
		function BearsthemesOpenTheHideMenu() {
			if ($('.bt-header-v3 .bt-toggle-menu').length) {
				$('.bt-header-v3 .bt-toggle-menu').on('click', function() {
					var $menu = $('#doyle_header .bt-menu-list');
					
					$(this).toggleClass('active');
					$menu.toggleClass('active');
					
					$menu.on( {
						'menu.open': function( e ) {
							var $li_items = $( this ).find( '> ul > li' );
							$li_items.each( function() {
								var index = $( this ).index();
								btAnimation.slideUp( this, index * 80 );
							} )
						},
						'menu.hidden': function( e ) {
							var $li_items = $( this ).find( '> ul > li' );
							$li_items.each( function() {
								var index = $( this ).index();
								btAnimation.slideDown( this, index * 80 );
							} )
						}
					} )
					
					if( $menu.hasClass('active') )
						$menu.trigger( 'menu.open' )
					else 
						$menu.trigger( 'menu.hidden' )
				});
			}
		}
		BearsthemesOpenTheHideMenu();
		/* Open the hide newsletter */
		function BearsthemesOpenNewsletterSidebar() {
			$('.bt-newsletter-popup').on('click', function(event) {
				event.preventDefault();
				$('#doyle_newsletter_global').addClass('active');
			});
			$('#doyle_newsletter_global .bt-close').on('click', function(event) {
				event.preventDefault();
				$('#doyle_newsletter_global').removeClass('active');
			});
			
		}
		BearsthemesOpenNewsletterSidebar();
		
		/* Open the hide mini search */
		function DoyleOpenMiniSearchSidebar() {
			$('.bt-mini-search > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').hasClass('active')){
					$('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-mini-search .bt-search-form').toggleClass('active');
			});
		}
		DoyleOpenMiniSearchSidebar();
		
		/* Open the hide mini cart */
		function DoyleOpenMiniCartSidebar() {
			$('.bt-mini-cart > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-mini-search .bt-search-form, .bt-mini-search > a').hasClass('active')){
					$('.bt-mini-search .bt-search-form, .bt-mini-search > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-mini-cart .bt-cart-content').toggleClass('active');
			});
		}
		DoyleOpenMiniCartSidebar();
		
		/* Open the hide menu canvas */
		function BearsthemesOpenMenuSidebar() {
			$('.bt-menu-sidebar > a').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
			$('.bt-menu-canvas-overlay').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
		}
		BearsthemesOpenMenuSidebar();
		/* Open the hide menu */
		function BearsthemesOpenMenu() {
			$('#bt-hamburger').on('click', function() {
				$(this).toggleClass('active');
				$('.bt-menu-list').toggleClass('hidden-xs');
				$('.bt-menu-list').toggleClass('hidden-sm'); 
			});
		}
		BearsthemesOpenMenu();
		/* Mobile Menu Dropdown Icon Header V1, V2, V3, V4, v6, v7 */
		function BearsthemesMobileMenuDropdown() {
			var hasChildren = $('.bt-header-v1 .bt-menu-list ul li.menu-item-has-children, .bt-header-v2 .bt-menu-list ul li.menu-item-has-children, .bt-header-v3 .bt-menu-list ul li.menu-item-has-children, .bt-header-v4 .bt-menu-list ul li.menu-item-has-children, .bt-header-v5 .bt-menu-list ul li.menu-item-has-children, .bt-header-v6 .bt-menu-list ul li.menu-item-has-children, .bt-header-v7 .bt-menu-list ul li.menu-item-has-children');
			
			hasChildren.each( function() {
				var $btnToggle = $('<a class="mb-dropdown-icon hidden-lg hidden-md" href="#"></a>');
				$( this ).append($btnToggle);
				$btnToggle.on( 'click', function(e) {
					e.preventDefault();
					$( this ).toggleClass('open');
					$( this ).parent().children('ul').toggle('slow'); 
				} );
			} );
		}
		BearsthemesMobileMenuDropdown();
		/* Menu Dropdown Icon Header Canvas, Header Canvas Border */
		function BearsthemesMenuCanvasDropdown() {
			var hasChildren = $('.bt-header-canvas .bt-menu-list ul li.menu-item-has-children, .bt-header-canvas-border .bt-menu-list ul li.menu-item-has-children');
			
			hasChildren.each( function() {
				var $btnToggle = $('<a class="mb-dropdown-icon" href="#"></a>');
				$( this ).append($btnToggle);
				$btnToggle.on( 'click', function(e) {
					e.preventDefault();
					$( this ).toggleClass('open');
					$( this ).parent().children('ul').toggle('slow'); 
				} );
			} );
		}
		BearsthemesMenuCanvasDropdown();
		/* Header Stick */
		function BearsthemesHeaderStick() {
			
			/**
			 * fix_header_stick_smooth_scroll
			 * @param [element] elem
			 * @param [boolean] is_stick
			 */
			window.fix_header_stick_smooth_scroll = function(elem_space, is_stick) {
				if(is_stick == true) {
					elem_space.css('display', 'block');
				} else {
					elem_space.css('display', 'none');
				}
			}
			
			if($( '.bt-header-v1, .bt-header-v2, .bt-header-v3, .bt-header-v4, .bt-header-v5, .bt-header-v6, .bt-header-v7' ).hasClass( 'bt-header-stick' )) {
				var header 			= $('#doyle_header');
				var header_stick 	= $('#doyle_header .bt-header-menu');
				var header_info 	= {top: header_stick.offset().top, height: header_stick.innerHeight()};
				var body 			= $('body');
				var space_elem 		= $('<div class="js-space-element-header-stick" style="height:'+header_info.height+'px; display: none;"></div>');
				
				
				// add element space header fixed
				if(!header.hasClass('bt-header-fixed')) 
					header_stick.parent('#doyle_header').append(space_elem);
				
				// add event scroll
				$(window).on('scroll.HeaderSitck', function() {
					if ($(window).scrollTop() > (header_info.top + (header_info.height*3))) {
						// add stick menu
						if(!body.hasClass('bt-stick-active')){
							body.addClass('bt-stick-active');
							
							// smooth stick scroll
							if(!header.hasClass('bt-header-fixed'))
								window.fix_header_stick_smooth_scroll(space_elem, true);
						}
					} else {
						// remove stick menu
						if(body.hasClass('bt-stick-active')){
							body.removeClass('bt-stick-active');
							
							// smooth stick scroll
							if(!header.hasClass('bt-header-fixed'))
								window.fix_header_stick_smooth_scroll(space_elem, false);
						}
					}
				}).trigger('scroll.HeaderSitck');
				
				// 
				$(window).on('load resize', function() {
					$(this).trigger('scroll.HeaderSitck');
				}) 
			}
		}
		BearsthemesHeaderStick();
		
		/*OWL Carousel*/
		function BearsthemesOwlCaousel($elem) {
			$elem.owlCarousel({
				items:$elem.data( "col_lg" ),
				margin:$elem.data( "item_space" ),
				loop:$elem.data( "loop" ),
				autoplay: $elem.data( "autoplay" ),
				autoplayHoverPause: true,
				smartSpeed: $elem.data( "smartspeed" ),
				nav:$elem.data( "nav" ),
				navText:['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
				dots:$elem.data( "dots" ),
				responsive:{
					0:{
						items:$elem.data( "col_xs" ),
						nav:false,
						dots:false,
					},
					768:{
						items:$elem.data( "col_sm" ),
						nav:false,
						dots:false,
					},
					992:{
						items:$elem.data( "col_md" ),
					},
					1200:{
						items:$elem.data( "col_lg" ),
					}
				}
			});
		}
		
		/* Active portfolio carousel */
		if ($('.bt-portfolio-carousel .owl-carousel').length) {
			$('.bt-portfolio-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active portfolio related carousel */
		if ($('.bt-portfolio-related-carousel .owl-carousel').length) {
			$('.bt-portfolio-related-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active team related carousel */
		if ($('.bt-team-related-carousel .owl-carousel').length) {
			$('.bt-team-related-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active team carousel */
		if ($('.bt-team-carousel .owl-carousel').length) {
			$('.bt-team-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active testimonial carousel */
		if ($('.bt-testimonial-carousel .owl-carousel').length) {
			$('.bt-testimonial-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active product carousel */
		if ($('.bt-product-carousel .owl-carousel').length) {
			$('.bt-product-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active images carousel */
		if ($('.bt-image-carousel-wrap .owl-carousel').length) {
			$('.bt-image-carousel-wrap .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active recent work */
		if ($('.bt-recent-work .owl-carousel').length) {
			$('.bt-recent-work .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active news slider */
		if ($('.bt-news-slider .owl-carousel').length) {
			$('.bt-news-slider .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		/* Active contact slider */
		if ($('.bt-contact-slider .owl-carousel').length) {
			$('.bt-contact-slider .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active demo item carousel */
		if ($('.bt-demo-item .owl-carousel').length) {
			$('.bt-demo-item .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		function BearsthemesCountDownClock() {
			$('.bt-countdown-clock').each(function() {
				var countdownTime = $(this).attr('data-countdown');
				var countdownFormat = $(this).attr('data-format');
				var countdownLabels = $(this).attr('data-labels').split(',');
				var countdownLabels1 = $(this).attr('data-labels1').split(',');
				$(this).countdown({
					until: countdownTime,
					format: countdownFormat,
					labels: countdownLabels,
					labels1: countdownLabels1,
					padZeroes: true
				});
			});
		}
		BearsthemesCountDownClock();
		
		/*Count up*/
		function BearsthemesCountUp() {
			if($( ".bs-counter .bs-number" ).length > 0) {
				$('.bs-counter .bs-number').counterUp({
					delay: 10,
					time: 1000
				});
			}
		}
		BearsthemesCountUp();
		
		/* Disable scrolling zoom on maps */
		$('#map').addClass('scrolloff');
		$('.overlay_map').on("mouseup",function(){
			$('#map').addClass('scrolloff'); 
		});
		$('.overlay_map').on("mousedown",function(){
			$('#map').removeClass('scrolloff');
		});
		$("#map").mouseleave(function () { 
			$('#map').addClass('scrolloff');
		});
		/* Shop */
		$('.woocommerce-info .ro-checkout-title > a').on('click', function(event) {
			$( event.target ).closest('.woocommerce-info').toggleClass('ro-active');
		});
		/* Single image gallery */
		if($('.bt-slick-slider').length > 0) {
			$('.bt-slick-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				fade: true,
				centerMode: true,
				focusOnSelect: true,
				prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
				nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
				asNavFor: '.bt-slick-slider-nav'
			});
		}
		if($('.bt-slick-slider-nav').length > 0) {
			$('.bt-slick-slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				vertical: true,
				verticalSwiping: true,
				arrows: false,
				dots: false,
				centerMode: true,
				focusOnSelect: true,
				asNavFor: '.bt-slick-slider',
			});
		}
		/*Catwalk video*/
		$(document).on('click', '.bt-catwalk-btn', function(e) {
			e.preventDefault();
			if($(this).hasClass('active')) {
				$('.bt-catwalk-video').fadeOut();
				if ($('.bt-catwalk-video video').get(0).play) {
					$('.bt-catwalk-video video').get(0).pause();
				}
			} else {
				$('.bt-catwalk-video').fadeIn();
				if ($('.bt-catwalk-video video').get(0).pause) {
					$('.bt-catwalk-video video').get(0).play();
				}
			}
			$(this).toggleClass('active');
        });
		$(document).on('click', '.bt-slick-slider-nav', function() {
            $('.bt-catwalk-video').fadeOut();
			if ($('.bt-catwalk-video video').get(0).play) {
				$('.bt-catwalk-video video').get(0).pause();
			}
			$('.bt-catwalk-btn').removeClass('active');
        });
		/* Add Product Quantity Up Down icon */
        $('form.cart .quantity, .product-quantity .quantity').each(function() {
            $(this).prepend('<span class="qty-minus"><i class="fa fa-minus"></i></span>');
            $(this).append('<span class="qty-plus"><i class="fa fa-plus"></i></span>');
        });
        /* Plus Qty */
        $(document).on('click', '.qty-plus', function() {
            var parent = $(this).parent();
            $('input.qty', parent).val( parseInt($('input.qty', parent).val()) + 1);
        });
        /* Minus Qty */
        $(document).on('click', '.qty-minus', function() {
            var parent = $(this).parent();
            if( parseInt($('input.qty', parent).val()) > 1) {
                $('input.qty', parent).val( parseInt($('input.qty', parent).val()) - 1);
            }
        });
	});
})(jQuery);