'use strict';

/**
 *  Variables & Functions
 * -------------------------------------------------------------------
 */

var jed_variable = {
	'jed_1':{
	    'contact': {
	        'address': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
	        'marker': '/url image'
	    },
	    'validate': {
            'form': {
                'SUBMIT': 'Submit',
                'SENDING': 'Sending...'
            },
            'name': {
                'REQUIRED': 'Please enter your name',
                'MINLENGTH': 'At least {0} characters required'
            },
            'email': {
                'REQUIRED': 'Please enter your email',
                'EMAIL': 'Please enter a valid email'
            },
            'url': {
                'REQUIRED': 'Please enter your url',
                'URL': 'Please enter a valid url'
            },
            'message': {
                'REQUIRED': 'Please enter a message',
                'MINLENGTH': 'At least {0} characters required'
            }
        },
        'tweets': {
            'failed': 'Sorry, twitter is currently unavailable for this user.',
            'loading': 'Loading tweets...'
        }
	}
};



/**
 * Code
 * -------------------------------------------------------------------
 */


jQuery(document).ready(function() {

/*__________________ Get Value Dropdown _____________________*/

if(jQuery(".dropdown").length){
   
    jQuery(this).find('.kopa-dropdown-menu li a').on('click',function(){
        var vl_1 = jQuery(this).html();
        var par_1 = jQuery(this).parentsUntil("div");
        par_1.parent().find(".kopa-btn span").html(vl_1 + "<i class='fa fa-angle-down'></i>");
    });

};

if(jQuery(".kopa-dropdown-1").length){
   
    jQuery(this).find('.kopa-dropdown-menu li a').on('click',function(){
        var vl_2 = jQuery(this).html();
        var par_2 = jQuery(this).parentsUntil("div");
        par_2.parent().find(".kopa-btn").html(vl_2 + "<i class='fa fa-angle-down'></i>");
    });

};


/*_________________ Show / Hide Form Search ________________*/

if(jQuery(".kopa-search").length){
    jQuery(this).find('.kopa-btn').each(function(){
        jQuery(this).on('click',function(){
            var get_data = jQuery(this).attr("data-target");
            jQuery("form[data-form=" + get_data + "]").toggle('slow');
        });
    });
}

/*____________________ Show/Hide Tooltip Account ______________________*/

if(jQuery(".kopa-tooltip").length){
    jQuery(".kopa-account-item").find('.kopa-btn').each(function(){
        jQuery(this).on('mouseover',function(){
            jQuery(this).find('.kopa-tooltip').fadeIn();
            jQuery(this).find('.kopa-tooltip').delay(1000).fadeOut();
        });
    });
}


/*__________________ Show/Hide List Item Cart __________________*/

if(jQuery(".kopa-list-item-cart").length){

    jQuery(".kopa-info-cart").find(".kopa-open-list-item-cart").each(function(){
        jQuery(this).on('click',function(){
            jQuery(this).parent().find(".kopa-list-item-cart").slideToggle();
        });
    });

    jQuery(".kopa-info-cart").find(".kopa-list-item-cart").each(function(){
        jQuery(this).find(".kopa-close").each(function(){
            jQuery(this).on('click',function(){
                jQuery(this).parentsUntil('.entry-item').parent().hide();
            });
        });
    });
}


/*______________ Js Module Slider 2 _____________*/

if(jQuery('.module-slider-2').length){
    jQuery(".module-slider-2 .kopa-slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.module-slider-2 .kopa-slider-nav'
    });

    jQuery(".module-slider-2 .kopa-slider-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.module-slider-2 .kopa-slider-for',
        prevArrow:"<span class='slick-prev'><i class='fa fa-long-arrow-left'></i> Prev</span>",
        nextArrow:"<span class='slick-next'>Next <i class='fa fa-long-arrow-right'></i></span>",
        centerMode: true,
        centerPadding:'0px',
        focusOnSelect: true,
        responsive:[
            {
              breakpoint: 359,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
        ],
    });
}

/*________________ Js Module Slider 3 _________________*/

var slick_1 = jQuery('.module-slider-3 .kopa-slider');
    if(slick_1.length){
        slick_1.slick({
            infinite: true,
            slidesToShow:2,
            slidesToScroll:2,
            prevArrow:"<span class='slick-prev'><i class='fa fa-long-arrow-left'></i> Prev</span>",
            nextArrow:"<span class='slick-next'>Next <i class='fa fa-long-arrow-right'></i></span>",
            responsive:[
                {
                  breakpoint: 979,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                  }
                }
            ],
        });

        slick_1.on('afterChange',function(event,slick,currentSlide){
            var ct_bg_1 = jQuery('.module-slider-3 .entry-item');
            if(ct_bg_1.length){
                ct_bg_1.each(function(){
                    var bg_1 = jQuery(this).data('bg');
                    jQuery(this).css('background-image', 'url('+ bg_1 + ')');
                 })
            }
        })
    }

/*______________ Js Module Slider 4 ________________*/

if(jQuery('.module-slider-4').length){
    jQuery(".module-slider-4 .kopa-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        centerPadding:'0px',
        autoplay:false,
        responsive:[
                {
                  breakpoint: 639,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                  }
                }
            ],
    });
}

/*__________________ Js Module Slider 5 ______________*/

if(jQuery('.module-slider-5').length){
    jQuery(".module-slider-5 .kopa-slider").slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow:"<span class='slick-prev fa fa-chevron-left'></span>",
        nextArrow:"<span class='slick-next fa fa-chevron-right'></span>",
        responsive:[
            {
              breakpoint: 979,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
        ],
    });
}

/*__________________ Js Module Slider 6 ______________*/

if(jQuery('.module-slider-6').length){
    jQuery(".module-slider-6 .kopa-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows:false,
        centerMode: true,
        centerPadding:'0px',
        dots:true,
        autoplay:false,
        responsive:[
            {
              breakpoint: 979,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },

            {
              breakpoint: 479,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
        ],
    });
}


/*___________________ Js Module Slider 7 ________________*/

if(jQuery('.module-slider-7').length){
    jQuery(".module-slider-7 .kopa-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows:true,
        autoplay:false,
        prevArrow:"<span class='slick-prev fa fa-chevron-left'>&nbsp; | </span>",
        nextArrow:"<span class='slick-next fa fa-chevron-right'></span>",
        responsive:[
            {
              breakpoint: 799,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },

            {
              breakpoint: 479,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
        ],
    }); 
}

/*_______________ js Module Slider 8 ___________________*/

if(jQuery('.module-slider-8').length){
    jQuery(".module-slider-8").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:false,
        arrows:true,
        prevArrow:"<span class='slick-prev fa fa-chevron-left'></span>",
        nextArrow:"<span class='slick-next fa fa-chevron-right'></span>",
    }); 
}

/*_______________ js Module Slider 9 ___________________*/

if(jQuery('.module-slider-9').length){
    jQuery(".module-slider-9 .kopa-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:false,
        arrows:true,
        prevArrow:"<span class='slick-prev'><i class='fa fa-chevron-left'></i> prev</span>",
        nextArrow:"<span class='slick-next'>next <i class='fa fa-chevron-right'></i></span>",
    }); 
}

/*_______________ js Module Slider 10 ___________________*/

if(jQuery('.module-slider-10').length){
    jQuery(".module-slider-10 ul").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay:false,
        arrows:true,
        prevArrow:"<span class='slick-prev fa fa-chevron-left'></span>",
        nextArrow:"<span class='slick-next fa fa-chevron-right'></span>",
        responsive:[
            {
              breakpoint: 799,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },

            {
              breakpoint: 479,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
        ],
    }); 
}


/*_____________ 1. Header _____________*/

    /*--- main-menu ---*/

    var mmenu_ul   = jQuery('.main-nav').find('.main-menu'),
        mmenu_li   = mmenu_ul.find('> li'),
        sfmmenu_ul = jQuery('.main-nav').find('.sf-menu');


    if(sfmmenu_ul.length){
        sfmmenu_ul.superfish({
            speed: 'normal',
            delay: '600'
        });
    }

    var smenu = jQuery('.main-nav .main-menu li .sub-menu li .sf-with-ul');
    smenu.addClass("kopa-with-after");


    /*--- responsive menu ---*/

    jQuery(".kopa-humberger-menu .kopa-btn").on('click',function(){
        var par = jQuery(this).parent();
        par.find('.kopa-responsive-menu').slideToggle();
    });



    /*--- search-box ---*/

    var dropdown_1 = jQuery('.kopa-dropdown');
    if(dropdown_1.length) {
        jQuery(dropdown_1).each(function() {
            var dropdown_btn_1 = jQuery(this).find('.kopa-dropdown-btn');
            var dropdown_content_1 = jQuery(this).find('.kopa-dropdown-content');
            dropdown_btn_1.on('click', function(){
                dropdown_content_1.toggleClass('active');
            });
            jQuery("html").mouseup(function (e){
                if (!dropdown_1.is(e.target) && dropdown_1.has(e.target).length === 0){
                    dropdown_content_1.removeClass('active');
                }
            });
        });
    }

    var search_box_1 = jQuery('.kopa-search-box-1');
    if(search_box_1.length) {
        var search_btn_1 = jQuery(this).find('.kopa-dropdown-btn');
        search_btn_1.on('click', function(){
            jQuery(this).closest(search_box_1).find('.search-text').focus();
        });
    }
    
    /*--- cart ---*/

    var rm_item_1 = jQuery('.rm-item');
    if(rm_item_1.length) {
        jQuery(rm_item_1).each(function() {
            var rm_btn_1 = jQuery(this).find('.rm-btn');
            rm_btn_1.on('click', function(){
                jQuery(this).closest(rm_item_1).remove();
            });
        });
    }


 
/*_____________ Slide Area _____________*/  

    //scroll-bar
    var h_window = jQuery(window).height();
    if(jQuery('.slide-area').length) {
        jQuery('.slide-area').find('.slide-container').height(h_window).mCustomScrollbar();
    }
    if(jQuery('.kopa-area-23').length) {
        jQuery('.kopa-area-23').css('min-height',h_window);
    }
    
    var hb_menu    = jQuery('.hamburger-menu');
    var hb_area    = jQuery('.slide-area');
    var hb_overlay = jQuery('.body-overlay');
    var hb_main_ct = jQuery('.main-container');
    var hb_close   = hb_area.find('.close-btn');

    if(hb_menu.length) {
        hb_menu.on('click',function(event) {
            event.preventDefault();
            hb_area.toggleClass('active');
            hb_overlay.toggleClass('active');
            hb_main_ct.toggleClass('scale-down');
        });
    }
    hb_close.on('click',function(event) {
        event.preventDefault();
        hb_area.removeClass('active');
        hb_overlay.removeClass('active');
        hb_main_ct.removeClass('scale-down');
    });
    hb_overlay.on('click',function(event) {
        hb_close.click();
    });

 
/*_____________ Slide Menu _____________*/   
    
    if(jQuery('.kopa-responsive-menu').length) {
        jQuery('.kopa-responsive-menu').navgoco({
            accordion: true
        });
    }

 
/*_____________ Custom Menu _____________*/   
    
    if(jQuery('.ct-menu-1').length) {
        jQuery('.ct-menu-1').children('li').has('ul').addClass('wu');
        jQuery('.ct-menu-1').navgoco({
            accordion: true
        });
        jQuery('.caret').removeClass('caret');
    }

 
/*_____________ Product Categories Menu _____________*/   

    if(jQuery('.widget_product_categories').length) {
        jQuery(this).find('.product-categories').navgoco({
            accordion: true
        });
        jQuery('.caret').removeClass('caret');
    }

/*_____________ Mobile Menu _____________*/   
    
    if(jQuery('.mobile-menu').length) {
        jQuery('.mobile-menu').navgoco({
            accordion: true
        });
        jQuery('.caret').removeClass('caret');
    }


/*_____________ Scroll top Top _____________*/   
    
    if(jQuery('.kopa-scroll-up').length){
        jQuery(window).scroll(function(event){
            var x = jQuery(window).scrollTop();
            if(x > 200){
                jQuery(".kopa-scroll-up").fadeIn("slow");
            }
            else{
                jQuery(".kopa-scroll-up").fadeOut();
            }
        });
        jQuery(".kopa-scroll-up").on('click',function(event){
            jQuery("html,body").animate({scrollTop:0},800);
        })
    }

    
/*_____________ Grid Item _____________*/

    var filter_1 = jQuery('.kopa-widget-filter');

    if (jQuery(filter_1).length) {

        jQuery(filter_1).each(function(){

            var container_1 = jQuery(this).find('.masonry-container'),
                m_filters_1 = jQuery(this).find('.masonry-filter').children('li');
            var masonryOptions = {
                columnWidth: 1,
                itemSelector : '.ms-item-01.show'
            };
            container_1.imagesLoaded(function(){

                var m_grid = container_1.masonry( masonryOptions);

                m_filters_1.click(function(event){

                    event.preventDefault();
                    m_filters_1.removeClass('active');
                    jQuery(this).addClass('active');
                    var m_filter_val = jQuery(this).data('val');

                    container_1.find('.ms-item-01').each(function(){
                        var m_item_val = jQuery(this).data('val').toString().split(',');                
                        var a = m_item_val.indexOf(m_filter_val.toString()) > -1;

                        if (m_filter_val == "*") {
                            jQuery(this).removeClass('hide');
                            jQuery(this).addClass('show');
                        } else {
                            if ( a == true) {
                                jQuery(this).removeClass('hide');
                                jQuery(this).addClass('show');  
                            } else {
                                jQuery(this).removeClass('show');
                                jQuery(this).addClass('hide');
                            }
                        }                               
                    });

                    container_1.masonry('layout');

                });

            });

        });
    }

/*_____________ mCustomScrollbar _____________*/

    
    if(jQuery(".reading-module-scroll").length){

        jQuery('.reading-module-scroll').each(function(){
            jQuery(".reading-module-scroll").find('.widget-content').mCustomScrollbar({
                axis:"x",
                advanced:{
                    autoExpandHorizontalScroll:true
                }
            });
        })
    }

/*_____________ Owl Carousel _____________*/


    var owl_2 = jQuery('.owl-carousel-2');
    if(owl_2.length){
        owl_2.owlCarousel({
            items: 5,
            itemsDesktop: [1160,5],
            itemsTablet: [799,5],
            itemsTabletSmall: [639,3],
            itemsMobile: [479,3],
            slideSpeed: 1000,
            autoPlay: true,
            navigation: false,
            pagination: true,
            navigationText: false
        });
    }

    var owl_3 = jQuery('.owl-carousel-3');
    if(owl_3.length){
        owl_3.each(function(){
            owl_3.owlCarousel({
                items: 3,
                itemsDesktop: [1160,3],
                itemsTablet: [799,3],
                itemsTabletSmall: [639,1],
                slideSpeed: 1000,
                autoPlay: false,
                navigation: true,
                pagination: false,
                navigationText: false
            });
        });
    }

    var owl_4 = jQuery('.owl-carousel-4');
    if(owl_4.length){
        owl_4.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            autoPlay: true,
            navigation: true,
            pagination: false,
            navigationText: false
        });
    }

    var owl_5 = jQuery('.owl-carousel-5');
    if(owl_5.length){
        owl_5.owlCarousel({
            items: 2,
            itemsDesktop: [1160,2],
            slideSpeed: 1000,
            navigation: false,
            pagination: true,
            navigationText: false
        });
    }

    var owl_6 = jQuery('.owl-carousel-6');
    if(owl_6.length){
        owl_6.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            autoPlay: true,
            navigation: true,
            pagination: false,
            navigationText: false
        });
    }

/*_____________ Slider Pro _____________*/


    if(('.module-slider-1').length){
        $('.module-slider-1 .slider-pro').sliderPro({
            width: 1920,
            height:1080,
            fade: true,
            arrows: false,
            buttons: true,
            shuffle: false,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 3000,
            autoplay: false,
            autoScaleLayers: true,
            forceSize:'fullWidth',
            init: function(event){
               jQuery(".module-slider-1 .loading").hide();   
               jQuery('.module-slider-1 .slider-pro').show();
            }
        });
    }

    if(('.module-slider-main-2').length){
        $('.module-slider-main-2 .slider-pro').sliderPro({
            width: 1920,
            height:1080,
            fade: true,
            arrows: true,
            buttons: true,
            shuffle: false,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 3000,
            autoplay: false,
            autoScaleLayers: true,
            forceSize:'fullWidth',
            init: function(event){
               jQuery(".module-slider-main-2 .loading").hide();   
               jQuery('.module-slider-main-2 .slider-pro').show();   
            }
        });
        $('.module-slider-main-2 .slider-pro').each(function(){
            $(this).find(".sp-previous-arrow").html("<i class='fa fa-long-arrow-left'></i> prev");
            $(this).find(".sp-next-arrow").html("next <i class='fa fa-long-arrow-right'></i>");
        })

    }

    if(('.module-slider-main-3').length){
        $('.module-slider-main-3 .slider-pro').sliderPro({
            width: 1920,
            height:1080,
            fade: true,
            arrows: false,
            buttons: true,
            shuffle: false,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 3000,
            autoplay: false,
            autoScaleLayers: true,
            forceSize:'fullWidth',
            init: function(event){
               jQuery(".module-slider-main-3 .loading").hide();   
               jQuery('.module-slider-main-3 .slider-pro').show();   
            }
        });
    }

    if(('.module-slider-main-4').length){
        $('.module-slider-main-4 .slider-pro').sliderPro({
            width: 1920,
            height:700,
            fade: true,
            arrows: true,
            buttons: false,
            shuffle: false,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 3000,
            autoplay: false,
            autoScaleLayers: true,
            forceSize:'fullWidth',
            init: function(event){
               jQuery(".module-slider-main-4 .loading").hide();   
               jQuery('.module-slider-main-4 .slider-pro').show();   
            }
        });
        $('.module-slider-main-4 .slider-pro').each(function(){
            $(this).find(".sp-previous-arrow").html("<i class='fa fa-chevron-left'></i> prev");
            $(this).find(".sp-next-arrow").html("next <i class='fa fa-chevron-right'></i>");
        })

    }

/*_____________ Scroll top Top _____________*/   


    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 200) {
            jQuery('.scroll-up').fadeIn();
        } else {
            jQuery('.scroll-up').fadeOut();
        }
    }); 
    jQuery('.scroll-up').click(function(){
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

/*_____________ Custom Background ___________*/

    var ct_bg_1 = jQuery('.module-slider-3 .entry-item');
    if(ct_bg_1.length){
        ct_bg_1.each(function(){
            var bg_1 = jQuery(this).data('bg');
            jQuery(this).css('background-image', 'url('+ bg_1 + ')');
         })
    }

    var ct_bg_2 = jQuery('.kopa-blockquote-3');
    if(ct_bg_2.length){
        ct_bg_2.each(function(){
            var bg_2 = jQuery(this).data('bg');
            jQuery(this).css('background-image', 'url('+ bg_2 + ')');
         })
    }

    var ct_bg_3 = jQuery('.kopa-blockquote-1');
    if(ct_bg_3.length){
        ct_bg_3.each(function(){
            var bg_3 = jQuery(this).data('bg');
            jQuery(this).css('background-image', 'url('+ bg_3 + ')');
         })
    }


/*_____________ Accordion _____________*/

    

    var i1 = 0;
    if(jQuery('.kopa-accordion').length){    
        jQuery('.kopa-accordion').each(function() {
            var ct_acc_1 = jQuery(this).find('.panel-group');
            ct_acc_1.each(function() {
                var item_index_1 = 'accordion' + i1,
                    item_index_11 = '#' + item_index_1;

                jQuery(this).attr('id',item_index_1);
                jQuery(this).find('.panel-default').each(function() {
                    jQuery(this).find('.panel-title').children('a').attr('data-parent', item_index_11);
                    jQuery(this).find('.panel-title').children('a').attr('href', item_index_11 + + jQuery(this).index());
                    jQuery(this).find('.panel-collapse').attr('id', item_index_11 + + jQuery(this).index());
                });
            });
            ++i1;
        }); 
    }

    var panel_titles = jQuery('.kopa-accordion .panel-title a');
    panel_titles.addClass("collapsed");
    jQuery('.panel-heading.active').find(panel_titles).removeClass("collapsed");

    panel_titles.on('click',function(){

        jQuery(this).closest('.kopa-accordion').find('.panel-heading').removeClass('active');
        jQuery(this).closest('.kopa-accordion-1').find('.collapse').collapse('hide');
        jQuery(this).closest('.panel-heading').next().collapse('toggle');

        var pn_heading = jQuery(this).parents('.panel-heading');
        if (jQuery(this).hasClass('collapsed')) {
            pn_heading.addClass('active');
        } else {
            pn_heading.removeClass('active');
        }
    });


/*_____________ google maps _____________*/

    if (jQuery('.kopa-map').length > 0) {

        var id_map = jQuery('.kopa-map').attr('id');
        var lat = parseFloat(jQuery('.kopa-map').attr('data-latitude'));
        var lng = parseFloat(jQuery('.kopa-map').attr('data-longitude'));
        var place = jQuery('.kopa-map').attr('data-place');
        var iconBase = 'images/img-icon-map-1.png';

        var map = new GMaps({
            el: '#'+id_map,
            lat: lat,
            lng: lng,
            zoom: 12,
            zoomControl : true,
            zoomControlOpt: {
              style : 'SMALL',
              position: 'TOP_RIGHT'
            },
            panControl : false,
            streetViewControl : false,
            mapTypeControl: false,
            overviewMapControl: false,
            scrollwheel: false,
            styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#e9e4e1"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels.text","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"labels.text.fill","stylers":[{"color":"#f9a027"}]},{"featureType":"landscape","elementType":"labels.text.stroke","stylers":[{"color":"#f9a027"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#f9a027"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway.controlled_access","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.station","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#a4c9fd"},{"visibility":"on"}]}]
        });
        map.addMarker({
            lat: lat,
            lng: lng,
            title: place,
            icon: iconBase 
        });

    }


/*______________ switch style grid/list _____________*/

if(jQuery('.kopa-select-view').length){

    jQuery('.kopa-select-view .kopa-view-list').on('click',function(){
        jQuery(this).addClass('active');
        jQuery('.kopa-select-view .kopa-view-grid').removeClass('active');
        jQuery('.kopa-art-list ul .kopa-wrap-item').removeClass('kopa-grid-style');
        jQuery('.kopa-art-list ul .kopa-wrap-item').addClass('kopa-list-style');
    });

    jQuery('.kopa-select-view .kopa-view-grid').on('click',function(){
        jQuery(this).addClass('active');
        jQuery('.kopa-select-view .kopa-view-list').removeClass('active');
        jQuery('.kopa-art-list ul .kopa-wrap-item').removeClass('kopa-list-style');
        jQuery('.kopa-art-list ul .kopa-wrap-item').addClass('kopa-grid-style');
    });
}


/*_____________ Validate Form _____________*/

    /*--- form subcribe ---*/

    var scr_form_1 = jQuery('.subcribe-form');
    if(scr_form_1.length) {
        jQuery(scr_form_1).each(function(){
            jQuery(scr_form_1).validate({
                // Add requirements to each of the fields
                rules: {
                   
                    email_subcribe: {
                        required: true,
                        email: true
                    }
                },
                // Specify what error messages to display
                // when the user does something horrid
                messages: {
                   
                    email: {
                        required: "Please enter your email.",
                        email: "Please enter a valid email."
                    }
                   
                },
              
            });
        });
    }

    /*--- form comment ---*/

    var cmt_form_1 = jQuery('.comment-form');

    if(cmt_form_1.length) {
        jQuery(cmt_form_1).each(function(){
            jQuery(cmt_form_1).validate({
                // Add requirements to each of the fields
                rules: {
                   
                    email: {
                        required: true,
                        email: true
                    }
                },

                // Specify what error messages to display
                // when the user does something horrid
                messages: {
                   
                    email: {
                        required: "Please enter your email.",
                        email: "Please enter a valid email."
                    }
                   
                },
              
            });
        });
    }

    var cmt_form_2 = jQuery('.kopa-comment-form-1');

    if(cmt_form_2.length) {
        jQuery(cmt_form_2).each(function(){
            jQuery(cmt_form_2).validate({
                // Add requirements to each of the fields
                rules: {
                   
                    your_name: {
                        required:true,
                        minlength:5
                    },

                    your_website: {
                        required:true
                    },

                    your_message: {
                        required:true
                    },

                    your_email: {
                        required: true,
                        email: true
                    }
                },

                // Specify what error messages to display
                // when the user does something horrid
                messages: {
                   
                    your_email: {
                        required: "Please enter your email.",
                        email: "Please enter a valid email."
                    },

                    your_website: {
                        required: "Please enter your website link.",
                    },

                    your_message: {
                        required: "Please enter your messages.",
                        
                    },

                    your_name: {
                        required: "Please enter your name.",
                        minlength: "This name had to more than 5 char"
                    }
                   
                },
              
            });
        });
    }

    /*--- contact form ---*/
    
    var ct_form_1 = jQuery('.kopa-contact-form');
    if(ct_form_1.length) {
        jQuery(ct_form_1).each(function(){
            jQuery(ct_form_1).validate({
                // Add requirements to each of the fields
                rules: {
                    first_name: {
                        required: true,
                    },

                    last_name: {
                        required: true,
                    },

                    email: {
                        required: true,
                        email: true
                    },

                    your_phone: {
                        required: true,
                        digits:true
                    },

                    your_message: {
                        required: true,
                        minlength: 15
                    }
                },
                // Specify what error messages to display
                // when the user does something horrid
                messages: {
                    first_name: {
                        required: "Please enter your first name.",
                        minlength: jQuery.format("At least {0} characters required.")
                    },

                    your_phone: {
                        required: "Please enter your phone.",
                        digits: "Please enter number"
                    },

                    email: {
                        required: "Please enter your email.",
                        email: "Please enter a valid email."
                    },

                    your_message: {
                        required: "Please enter a message.",
                        minlength: jQuery.format("At least {0} characters required.")
                    }
                }
            });
        });
    }

    /*--- ct-form-2 ---*/

    var ct_form_2 = jQuery('.ct-form-2');
    if(ct_form_2.length) {
        jQuery(ct_form_2).validate({
            // Add requirements to each of the fields
            rules: {
                name: {
                    required: true,
                    minlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 15
                }
            },
            // Specify what error messages to display
            // when the user does something horrid
            messages: {
                name: {
                    required: "Please enter your name.",
                    minlength: jQuery.format("Min {0} characters.")
                },
                email: {
                    required: "Please enter your email.",
                    email: "Please enter a valid email."
                },
                message: {
                    required: "Please enter a message.",
                    minlength: jQuery.format("Min {0} characters.")
                }
            },
            // Use Ajax to send everything to processForm.php
            submitHandler: function(form) {
                jQuery(".ct-submit-2").attr("value", "Sending...");
                jQuery(form).ajaxSubmit({
                    success: function(responseText, statusText, xhr, jQueryform) {
                        jQuery("#response-2").html(responseText).hide().slideDown("fast");
                        jQuery(".ct-submit-2").attr("value", "Submit");
                    }
                });
                return false;
            }
        });
    }


/*_____________ FAQs list _____________*/

    
    
    function order_list_1(){
        var order_li = jQuery('.faq-list').find('li');
        order_li.each(function() {
            var item_index_2 = jQuery(this).index() + 1 + ".";
            jQuery(this).find('.order-num').html(item_index_2);
        });
    }

    order_list_1();
    


/*_____________ Loadmore _____________*/


    var link_to_github_1 = "https://gist.githubusercontent.com/Stormie/a1021e4a6fe808372f0abf653a9cb62b/raw/9b236a5ef05dfa5a00222cec3dd03204406e56d6/gistfile1.txt";
    jQuery('#lm-btn-1').on('click',function(){
        var button_1 = jQuery(this);
        jQuery.ajax({
            url:link_to_github_1,
            beforeSend: function( xhr ) {
            },
        })
        .done(function(data) {

            jQuery(data).imagesLoaded(function() {

                var pos_ins_data_1 =  button_1.parent().prev();
                var items = jQuery(data).find('> li');
                if(items.length){
                    jQuery.each(items, function(items, index){
                        pos_ins_data_1.append(jQuery(this));
                    });
                }
                order_list_1();

            });
        });
    });

    var link_to_github_2 = "https://gist.githubusercontent.com/Stormie/f764941ea5eb734636b71abc8af0a219/raw/7c8015285039da112e2dd0094e21767a9881160c/reading-2";
    jQuery('#lm-btn-2').on('click',function(){
        var button_2 = jQuery(this);
        jQuery.ajax({
            url:link_to_github_2,
            beforeSend: function( xhr ) {
            },
        })
        .done(function(data) {

            jQuery(data).imagesLoaded(function() {

                var pos_ins_data_2 =  button_2.parent().prev();
                var items = jQuery(data).find('> li');
                if(items.length){
                    jQuery.each(items, function(items, index){
                        pos_ins_data_2.append(jQuery(this));
                    });
                }

            });
        });
    });


/*_____________ UI Slider _____________*/   

    if(jQuery('.widget_price_filter').length){

        var uislider_1 = jQuery(this).find('.slider-range-1'),
            uimin_1    = jQuery(this).find('.from'),
            uimax_1    = jQuery(this).find('.to');

        uislider_1.slider({
            range: true,
            min: 0,
            max: 9000,
            values: [ 500, 9000 ],
            slide: function( event, ui ) {
                uimin_1.text("$" + ui.values[ 0 ]);
                uimax_1.text("$" + ui.values[ 1 ]);
            }
        });

        uimin_1.text( "$" + uislider_1.slider( "values", 0 ));
        uimax_1.text( "$" + uislider_1.slider( "values", 1 ));
    }


/*_____________ custom product list _____________*/

    if(jQuery('.ct-ul-2').length) {
        var ct_li_2 = jQuery('.ct-ul-2').find('li');
        ct_li_2.on('click', function(){
            jQuery(this).closest('.ct-ul-2').find('li').removeClass('active');
            jQuery(this).addClass('active');
        });
    }


    jQuery('.list-view').on('click', function(){
        jQuery(this).closest('.woocommerce-main-header').next().addClass('style-01');
        mh_1();
    });

    jQuery('.grid-view').on('click', function(){
        jQuery(this).closest('.woocommerce-main-header').next().removeClass('style-01');
        mh_1();
    });

/*_____________ Countdown _____________*/

    if (jQuery('.kopa-countdown-1').length){

        var ct_cd_1      = jQuery('.kopa-countdown-1'),
            ct_cd_time_1 = ct_cd_1.data('year') + 
                            '/' + ct_cd_1.data('month') + 
                            '/' + ct_cd_1.data('day') + 
                            " " + ct_cd_1.data('time');

        ct_cd_1.find('.ct-chart-1').each(function() {
            var color = jQuery(this).data('color'),
                width = jQuery(this).data('width'),
                size  = jQuery(this).data('size'),
                time  = jQuery(this).data('time');

            
        });

        ct_cd_1.countdown(ct_cd_time_1).on('update.countdown', function(event) {
            var chart_seconds_1 = (event.offset.seconds / 60 *100),
                chart_minutes_1 = (event.offset.minutes / 60 *100),
                chart_hours_1   = (event.offset.hours / 60 *100),
                chart_days_1    = (event.offset.totalDays / 24 *100);

                jQuery('.kopa-day-ct-1').text(event.offset.totalDays);
                jQuery('.kopa-hour-ct-1').text(event.offset.hours);
                jQuery('.kopa-minute-ct-1').text(event.offset.minutes);
                jQuery('.kopa-second-ct-1').text(event.offset.seconds);

            
        });

    }

/*_____________ Woocommerce _____________*/

    if(jQuery('.cart_item').length) {
        jQuery('.cart_item').find('.remove').on('click', function(event){
            event.preventDefault();
            jQuery(this).closest('.cart_item').hide();
        });
    }

    if(jQuery('.woocommerce-area-1').length){
        jQuery('.woocommerce-area-1').find("a[data-rel ^='prettyPhoto']").prettyPhoto(); 
    }

    if(jQuery('.woocommerce-tabs').length) {
        var ct_li_3 = jQuery('.wc-tabs').find('li');
        ct_li_3.on('click', function(event){
            event.preventDefault();
            jQuery(this).closest('.wc-tabs').find('li').removeClass('active');
            jQuery(this).addClass('active');
        });
    }

    jQuery('.description_tab').on('click', function(){
        jQuery('#tab-description').addClass('active');
        jQuery('#tab-reviews').removeClass('active');
        jQuery('#tab-info').removeClass('active');
    });

    jQuery('.reviews_tab').on('click', function(){
        jQuery('#tab-description').removeClass('active');
        jQuery('#tab-reviews').addClass('active');
        jQuery('#tab-info').removeClass('active');
    });

    jQuery('.info_tab').on('click', function(){
        jQuery('#tab-description').removeClass('active');
        jQuery('#tab-reviews').removeClass('active');
        jQuery('#tab-info').addClass('active');
    });

    var md_woo_pf = jQuery('.widget_price_filter');

    if(md_woo_pf.length){

        var uislider_1 = md_woo_pf.find('.slider-range-1'),
            uihandle_1 = md_woo_pf.find('.ui-slider-handle'),
            uimin_2    = uihandle_1.first(),
            uimax_2    = uihandle_1.last();

        uislider_1.slider({

            range: true,
            min: 0,
            max: 2000,
            values: [ 100, 1000 ],
            slide: function( event, ui ) {
               
                uimin_2.html("<span class='from'>$" + ui.values[ 0 ] +"</span>");
                uimax_2.html("<span class='to'>$" + ui.values[ 1 ] +"</span>");
            }

        });

    }

    var rm_item_1 = jQuery('.rm-item');
    if(rm_item_1.length) {
        jQuery(rm_item_1).each(function() {
            var rm_btn_1 = jQuery(this).find('.remove');
            rm_btn_1.on('click', function(event){
                event.preventDefault();
                jQuery(this).closest(rm_item_1).remove();
            });
        });
    }

 /*____________________ Clear Event Link __________________*/
 
    if (('.clear-href').length) {
        jQuery('a.clear-href').on('click', function(event) {
            event.preventDefault();
            //code
        });
    }

/*_____________ MatchHeight _____________*/

    function mh_1(){
        jQuery('.ul-mh').children().matchHeight();
    }
    if(jQuery('.ul-mh').length){
        mh_1();
    }

/*_____________ Scroll Animation _____________*/

    var wow = new WOW({mobile: false,offset: 10});
    wow.init();


/*_____________ JS WISHLISH SHOW HIDE _______________*/

    jQuery('.yith-wcwl-add-button').each(function(){
        jQuery(this).on('click',function(){
            jQuery(this).find('img').css('visibility','visible');
            jQuery(this).find('img').delay(3000).fadeOut();
        });
    });
    jQuery('.yith-wcwl-add-to-wishlist').each(function(){
        jQuery(this).on('click',function(){
            jQuery(this).find('.yith-wcwl-wishlistexistsbrowse ').delay(2000).fadeIn('slow');
            jQuery(this).find('.yith-wcwl-wishlistexistsbrowse ').delay(3000).fadeOut();
            jQuery(this).find('.yith-wcwl-wishlistaddedbrowse').delay(3000).fadeIn();
        });
    });
});