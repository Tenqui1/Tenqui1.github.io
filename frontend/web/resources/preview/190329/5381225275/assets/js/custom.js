var appMaster = {
	/*----------------------------------------------
	 -----------sticky Header  Function  --------------------
	 -------------------------------------------------*/
	headerJs: function(){
	function header() {
		$(window).height();
		$(window).width() > 767;
	}

	var header_fix = $(".header");
	var inner_header = $(".inner-inro");
	$(window).scroll(function() {
		$(this).scrollTop() > 1 ? (header_fix.addClass("sticky"), inner_header.css("z-index", "-1")) : (header_fix.removeClass("sticky"), inner_header.css("z-index", "auto"));
	}), header(), $(window).resize(function() {
		header();
	});
},
	/*----------------------------------------------
	 -----------Submenu Function -------
	 -------------------------------------------------*/
	mobileMenuJs: function(){
	 $('.sub-menu >a').on('click', function() { 
        if ($(window).width() <= 767) {
            $('.sub-menu').removeClass('on');
            $('.sub-menu> ul').slideUp('normal');
            if ($(this).next().next('ul').is(':hidden') == true) {
                $(this).parent('li').addClass('on');
                $(this).next().next('ul').slideDown('normal');
            }
        }
    });
    
    /*----------------------------------------------
	 -----------Dropdown Function Submenu Function For Index Corporate  --------
	 -------------------------------------------------*/
   $('.mobile-menu> li >a').on('click', function() { 
        if ($(window).width() <= 991) {
            $('.mobile-menu> li').removeClass('on');
            $('.mobile-menu> li> ul').slideUp('normal');
            if ($(this).next().next('ul').is(':hidden') == true) {
                $(this).parent('li').addClass('on');
                $(this).next().next('ul').slideDown('normal');
            }
        }
    });
    
    /*----------------------------------------------
	 -----------Search Input  --------------------
	 -------------------------------------------------*/
    var searchDropdown = $("#searchDropdown");
    var dropdownInput = $('.dropdown-input')
     searchDropdown.on('click', function() {
     	dropdownInput.show(); 
     });
     var closeInput = $(".close-input");
     closeInput.on('click', function() {
     	dropdownInput.hide(); 
     });
	},
	/*----------------------------------------------
	 -----------Masonry Function  --------------------
	 -------------------------------------------------*/
	masonryJs: function(){
	var container_masonry = $(".container-masonry");
	container_masonry.imagesLoaded(function() {
		container_masonry.isotope({
			itemSelector : ".nf-item",
			layoutMode : "masonry",
			masonry : {
				columnWidth : 0,
				gutter : 0
			}
		});
	});

	/*----------------------------------------------
	 -----------Masonry filter Function  --------------------
	 -------------------------------------------------*/
	var container_filter = $(".container-filter");
	container_filter.on("click", ".categories", function() {
		var a = $(this).attr("data-filter");
		container_masonry.isotope({
			filter : a
		});

	});
	/*----------------------------------------------
	 -----------Masonry filter Active Function  --------------------
	 -------------------------------------------------*/
	container_filter.each(function(e, a) {
		var i = $(a);
		i.on("click", ".categories", function() {
			i.find(".active").removeClass("active"), $(this).addClass("active");
		});
	});

	/*----------------------------------------------
	 -----------Masonry Grid view Function  --------------------
	 -------------------------------------------------*/
	var container_grid = $(".container-grid");
	container_grid.imagesLoaded(function() {
		container_grid.isotope({
			itemSelector : ".nf-item",
			layoutMode : "fitRows"
		});
	});

	/*----------------------------------------------
	 -----------Masonry Grid Filter Function  --------------------
	 -------------------------------------------------*/
	container_filter.on("click", ".categories", function() {
		var e = $(this).attr("data-filter");
		container_grid.isotope({
			filter : e
		});
	});
	},
	
	/*----------------------------------------------
	 -----------Light Function  --------------------
	 -------------------------------------------------*/
	fancyboxJs: function(){
	var fLight = $(".fancylight");
	if (fLight.length) {
		fLight.fancybox({
			openEffect : 'elastic',
			closeEffect : 'elastic',
			helpers : {
				media : {}
			}
		});
	}
},
	/*----------------------------------------------
	 -----------Counter Function  --------------------
	 -------------------------------------------------*/
	counterJs: function(){
	var counter = $('.counter');
	if (counter.length) {
		$('.counter').appear(function() {
			counter.each(function() {
				var e = $(this),
				    a = e.attr("data-count");
				$({
					countNum : e.text()
				}).animate({
					countNum : a
				}, {
					duration : 8e3,
					easing : "linear",
					step : function() {
						e.text(Math.floor(this.countNum));
					},
					complete : function() {
						e.text(this.countNum);
					}
				});
			});
		});
	}
},
	/*----------------------------------------------
	 -----------Slider Function  --------------------
	 -------------------------------------------------*/
	owlCarouselJs: function(){
	var testimonial_slider = $("#testimonial");
	testimonial_slider.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		autoplay : true,
		autoplayTimeout : 2000,
		autoplayHoverPause : true,
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1

			},
			1000 : {
				items : 1

			}
		},
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

	});

	//Blog Slider
	var itemCarousel_1 = $(".item1-carousel");
	itemCarousel_1.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		autoplay : true,
		autoplayTimeout : 2000,
		autoplayHoverPause : true,
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1

			},
			1000 : {
				items : 1

			}
		},
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

	});

	//	Releted Project slider
	var relatedProject = $("#related-project");
	relatedProject.owlCarousel({
		loop : true,
		nav : true,
		dots : false,
		margin : 30,
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 2
			},
			1200 : {
				items : 3
			}
		},
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

	});

	//	Testimonial-2 Carousel
	var testimonial_2 = $('#testimonial-2');
	testimonial_2.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 1
			},
			992 : {
				items : 1
			},
			1200 : {
				items : 1
			}
		}
	});
	//	.team-carousel
	var teamCarousel = $('.team-carousel');
	teamCarousel.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 3
			},
			1200 : {
				items : 3
			}
		}
	});
	//	.team-carousel
	var partenrCarousel = $('.partenr-carousel');
	partenrCarousel.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 2
			},
			767 : {
				items : 3
			},
			992 : {
				items : 4
			},
			1200 : {
				items : 5
			}
		}
	});
	//Carousel
	var carouselSlider = $('.carousel-slider');
	carouselSlider.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 3
			},
			1200 : {
				items : 3
			}
		}
	});
	//services-items
	var servicesItems = $('.services-items');
	servicesItems.owlCarousel({
		loop : true,
		margin :0,
		nav : true,
		dots : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 1
			},
			992 : {
				items : 2
			},
			1200 : {
				items : 3
			}
		}
	});
	
	//services-items
	var historyBlock = $('.history-block');
	historyBlock.owlCarousel({
		loop : true,
		margin :30,
		nav : true,
		dots : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 3
			},
			1200 : {
				items : 4
			}
		}
	});
	},
	/*----------------------------------------------
	 ----------- video  --------------------
	 -------------------------------------------------*/
	videoJs: function(){
	var videoBg = $(".bg-video");
	if(videoBg.length){
	videoBg.mediaelementplayer({
            loop: !0,
            enableKeyboard: !1,
            iPadUseNativeControls: !1,
            pauseOtherPlayers: !1,
            iPhoneUseNativeControls: !1,
            AndroidUseNativeControls: !1,
            enableAutosize: !0,
            alwaysShowControls: !1
       });
      }
       $(window).height(function() {
        function e() {
            var e = $(window).innerHeight();
            $(".slider-hero, .full-screen-intro").css("height", e);
        }
        e(), $(window).resize(function() {
            e();
        });
    });
  },
	/*----------------------------------------------
	 ----------- parallax Function  --------------------
	 -------------------------------------------------*/
	parallaxJs: function(){
	var parallaxs = $(".parallax");
	parallaxs.parallax("50%", 0.02);
	var parallaxs = $("#overlay_block");
	parallaxs.parallax("50%", 0.2);
	},

	/*----------------------------------------------
	 ----------- Loader Function  --------------------
	 -------------------------------------------------*/
	preloaderJs: function(){
	var preloader = $("#preloader");
	preloader.delay(500).fadeOut();
	},

	/*----------------------------------------------
	 ----------- Map Function  --------------------
	 -------------------------------------------------*/
	mapJs: function(){
	var mapWrap = $('#map');
	if (mapWrap.length) {
		google.maps.event.addDomListener(window, 'load', initialize);

	}
	},
	prettyPhoto: function(){
		(function($) {
			"use strict";
			if( $("a[rel^='prettyPhoto'], a[data-rel^='prettyPhoto']").length != 0 ) { 
			 $("a[rel^='prettyPhoto'], a[data-rel^='prettyPhoto']").prettyPhoto({hook: 'data-rel', theme: "dark_square", social_tools: false, deeplinking: false});
			}
		 })(jQuery);
	},
	
	/* --------------------------------------------
	Price Range Slier 
	-------------------------------------------- */	
	 priceRange: function() {
		if( $(".range").length != 0 ) { 
			$('.range').nstSlider({
				"left_grip_selector": ".leftGrip",
				"right_grip_selector": ".rightGrip",
				"value_bar_selector": ".bar",
				"value_changed_callback": function(cause, leftValue, rightValue) {
					var $container = $(this).parent();
					$container.find('.leftLabel').text(leftValue);
					$container.find('.rightLabel').text(rightValue);
				},
				"highlight": {
					"grip_class": "gripHighlighted",
					"panel_selector": ".highlightPanel"
				}
			});
			$('#highlightRangeButton').click(function() {
				var highlightMin = Math.random() * 20,
					highlightMax = highlightMin + Math.random() * 80;
				$('.nstSlider').nstSlider('highlight_range', highlightMin, highlightMax);
			});
		}
	},
	/* ---------------------	
		Owl Slider
	/* --------------------- */
	owlCarousel: function(){	
		(function($) {
			"use strict";
			if ($('.owl-carousel').length) {		    
				  $(".owl-carousel").each(function (index) {
					var effect_mode = $(this).data('effect');
					var autoplay = $(this).data('autoplay');
					var loop = $(this).data('loop');
					var margin = $(this).data('margin');
					var center = $(this).data('center');
					var autoplay = $(this).data('autoplay');
					var autoplayTimeout = $(this).data('autoplayTimeout');
					var autoplayHoverPause = $(this).data('autoplayHoverPause');
					var navigation = $(this).data('navigation');
					var pagination = $(this).data('pagination');
					var singleitem = $(this).data('singleitem');
					var items = $(this).data('items');
					var itemsdesktop = $(this).data('desktop');
					var itemsdesktopsmall = $(this).data('desktopsmall');
					var itemstablet = $(this).data('tablet');
					var itemsmobile = $(this).data('mobile');
					
					$(this).owlCarousel({ 						
						loop : loop,
						margin : margin,
						center : center,
						nav : navigation,
						dots : pagination,
						autoplay : autoplay,
						autoplayTimeout : 2000,
						autoplayHoverPause : autoplayHoverPause, 
						responsive : {
						0 : { items :itemsmobile
						},
						767 : { items :itemstablet
						},
						992 : { items :itemsdesktopsmall
						},
						1200 : { items :itemsdesktop
						}
					},

						navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]						
					});
				});
			}  
		 })(jQuery);
	},
	/* --------------------------------------------
	Product Zoom
	-------------------------------------------- */	
	productZoom: function(){	
		if ( $( ".single-product" ).length !== 0 ) {
			var zoomWindowWidth;
			var zoomWindowHeight;
			
			 zoomWindowWidth    : 400;
			 zoomWindowHeight   : 470;	
			 zoomType   = 'window';
			 
			if ($(window).width() < 992) {
				 zoomWindowWidth    : 0;
				 zoomWindowHeight   : 0;	
				 zoomType   = 'inner';
			}
			
			$("#zoom-product").elevateZoom({				
			gallery:'zoom-product-thumb', 
			cursor: 'pointer', 
			galleryActiveClass: 'active', 
			imageCrossfade: true,
			responsive: true,
			scrollZoom: false,
			zoomWindowWidth    : zoomWindowWidth,
			zoomWindowHeight   : zoomWindowHeight,
			zoomType		: zoomType	
			}); 

			$("#zoom-product").bind("click", function(e) {  
			  var ez =   $('#zoom-product').data('elevateZoom');	
				$.fancybox(ez.getGalleryList());
			  return false;
			});
			
		}
		
		$('.plus').click(function() {
				$(this).parent('.product-regulator').find('.output').html(function(i, val) { return val*1+1 });
			});
			$('.minus').click(function() {
				var ab = $(this).parent('.product-regulator').find('.output').html();
				if(1 <= ab){
					$(this).parent('.product-regulator').find('.output').html(function(i, val) { return val*1-1 });
				}
				
			});	
	}
};

$(document).ready(function() {
	"use strict";
	appMaster.headerJs();
	appMaster.mobileMenuJs();
	appMaster.masonryJs();
	appMaster.fancyboxJs();
	appMaster.counterJs();
	appMaster.owlCarouselJs();
	appMaster.videoJs();
	appMaster.parallaxJs();
	appMaster.preloaderJs();
	appMaster.mapJs();
	appMaster.prettyPhoto();
	appMaster.owlCarousel();
	appMaster.priceRange();
	appMaster.productZoom();
	
/*-----------------------------------------------
 -----------  style-switcher  --------------------
 -------------------------------------------------*/		
$("body").append('<div id="style-switcher"></div>');
$("#style-switcher").load("theme-option/swicher.html");	
	
}); 

/*----------------------------------------------
 ----------- Map color Function  --------------------
 -------------------------------------------------*/
if ($('#map').length) {
	var myCenter = new google.maps.LatLng(51.538308, -0.3817765);
	function initialize() {
		var mapProp = {
			center : myCenter,
			zoom : 15,
			mapTypeId : google.maps.MapTypeId.ROADMAP,
			scrollwheel : false,
			styles : [{
				elementType : 'geometry',
				stylers : [{
					color : '#242f3e'
				}]
			}, {
				elementType : 'labels.text.stroke',
				stylers : [{
					color : '#242f3e'
				}]
			}, {
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#746855'
				}]
			}, {
				featureType : 'administrative.locality',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#d59563'
				}]
			}, {
				featureType : 'poi',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#d59563'
				}]
			}, {
				featureType : 'poi.park',
				elementType : 'geometry',
				stylers : [{
					color : '#263c3f'
				}]
			}, {
				featureType : 'poi.park',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#6b9a76'
				}]
			}, {
				featureType : 'road',
				elementType : 'geometry',
				stylers : [{
					color : '#38414e'
				}]
			}, {
				featureType : 'road',
				elementType : 'geometry.stroke',
				stylers : [{
					color : '#212a37'
				}]
			}, {
				featureType : 'road',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#9ca5b3'
				}]
			}, {
				featureType : 'road.highway',
				elementType : 'geometry',
				stylers : [{
					color : '#746855'
				}]
			}, {
				featureType : 'road.highway',
				elementType : 'geometry.stroke',
				stylers : [{
					color : '#1f2835'
				}]
			}, {
				featureType : 'road.highway',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#f3d19c'
				}]
			}, {
				featureType : 'transit',
				elementType : 'geometry',
				stylers : [{
					color : '#2f3948'
				}]
			}, {
				featureType : 'transit.station',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#d59563'
				}]
			}, {
				featureType : 'water',
				elementType : 'geometry',
				stylers : [{
					color : '#17263c'
				}]
			}, {
				featureType : 'water',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#515c6d'
				}]
			}, {
				featureType : 'water',
				elementType : 'labels.text.stroke',
				stylers : [{
					color : '#17263c'
				}]
			}]
		};
		var map = new google.maps.Map(document.getElementById("map"), mapProp);

		var marker = new google.maps.Marker({
			position : myCenter,
			icon : {
				url : 'assets/images/map-pin.png',
				size : new google.maps.Size(90, 111), //marker image size
				origin : new google.maps.Point(0, 0), // marker origin
				anchor : new google.maps.Point(35, 86) // X-axis value (35, half of marker width) and 86 is Y-axis value (height of the marker).
			}
		});

		marker.setMap(map);

	}

	function reloadStylesheets() {
		var queryString = 'reload=' + new Date().getTime();
		$('link[rel="stylesheet"]').each(function() {
			if (this.href.indexOf('?') !== -1) {
				this.href = this.href + '&' + queryString;
			} else {
				this.href = this.href + '?' + queryString;
			}
		});
	}

}	