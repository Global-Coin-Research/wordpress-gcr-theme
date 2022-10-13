jQuery(document).ready(function($){
    
    $('#slider-content').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    
    $('#slider-landing').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
    });
    
    $('.prev').click(function(){$('.slick-prev').click();});
    $('.next').click(function(){$('.slick-next').click();});
    
    $('body').on( 'click', '#menu', function () {
        
        $('#navigation').toggleClass('active');
        
        $(this).toggleClass('selected').toggleClass('cross');
        
    });
    
    $('body').on( 'click', '.dropdown > a, .menu-item-has-children > a', function(e){
        
        if( $(window).width() < 900 ){
            
            e.stopPropagation();
            e.preventDefault();
            
            // console.log( "Clicked: ", $(this).text() );
            
            jQuery('.menu-item-has-children.active').removeClass("active");
            
            $(this).parent().toggleClass('active');  
        
        }
        
    });
    // Search button start
    // jQuery("#search_trigger").click(function () {
        
    // });
    document.onclick = function(e){
        if(e.target.id == 'search_trigger' || e.target.id=='wp-block-search__input-1'){
            
            jQuery(".searchbar").slideDown(500);
            jQuery(".searcharea").addClass("active");
        }else{
            jQuery(".searchbar").slideUp(500);
            jQuery(".searcharea.active").removeClass("active");
            
        }
    };
    if (jQuery(window).width() < 769) {
        // get gcr button
        jQuery('#get_gcr').removeAttr('href');
        jQuery('#get_gcr').click(function(){
            jQuery('.sub_gcr').slideToggle(300);
        })
    }
    
    // color mode switcher
    jQuery('#mode_switch').click(function(){
        jQuery('html').toggleClass('dark'); 
        jQuery('#mode_switch .icon').toggleClass('dark'); 
        
        // change favicon
        var link = document.querySelector("link[rel~='icon']");   
        if(link.href.indexOf( "day" ) ===-1){
            link.href = 'https://dev.globalcoinresearch.com/wp-content/themes/wordpress-gcr-theme/img/favicon-day.ico';
        }else if(link.href.indexOf( "night" ) ===-1){
            link.href = 'https://dev.globalcoinresearch.com/wp-content/themes/wordpress-gcr-theme/img/favicon-night.ico';
        }
    });
    
});

