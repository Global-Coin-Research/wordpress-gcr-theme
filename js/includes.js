jQuery(document).ready(function () {   
    jQuery('.header-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });
    jQuery('.prev').click(function(){jQuery('.slick-prev').click();});
    jQuery('.next').click(function(){jQuery('.slick-next').click();});
    
    
    
    // trigger jquery with the window width
    if (jQuery(window).width() < 769) {
        // Responsive menu start
        jQuery("#menu").click(function () {
            jQuery(".navigation").slideToggle(300).toggleClass("active");
            jQuery(this).toggleClass("selected").toggleClass('cross');
        });
        jQuery('.dropdown > a, .menu-item-has-children > a').removeAttr('href');
        jQuery('.dropdown, .menu-item-has-children').click(function(){
            jQuery(this).toggleClass('active');  
        });
        // Search button start
        jQuery("#search_trigger").click(function () {
            jQuery(".searchbar").toggleClass("active");
            jQuery(this).toggleClass("selected");
        });
    }
    
    jQuery('.fade-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
      });
});

