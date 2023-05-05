if(localStorage.mode=="night"){
    jQuery('html').addClass('dark');
};


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
        speed: 600,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
    });
    $('#testimonial-slideshow').slick({
        dots: false,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
    });
    
    
    // tag cloud setting
    if( $(window).width() < 768 ){
        var wd = 400;
        var ht = 400;
    }else if($(window).width() > 768 && $(window).width() < 1200   ){
        var wd = 740;
        var ht = 700;
    }else{
        var wd = 1000;
        var ht = 1000; 
    }
    var settings = {
        entries: entries,
        width: wd,
        height: ht,
        radius: '65%',
        radiusMin: 75,
        bgDraw: true,
        bgColor: 'transparent',
        opacityOver: 1.00,
        opacityOut: 0.05,
        opacitySpeed: 6,
        fov: 800,
        speed: 0.1,
    };
    $('#tag-cloud').svg3DTagCloud(settings);
    
    
    $('.prev').click(function(){$('.slider .slick-prev').click();});
    $('.next').click(function(){$('.slider .slick-next').click();});
    
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
        // change favicon
        var link = document.querySelector("link[rel~='icon']");   
        if(link.href.indexOf( "day" ) ===-1){
            localStorage.setItem('mode', 'day');
            link.href = 'https://globalcoinresearch.com/wp-content/themes/gcr/img/favicon-day.ico';
        }else if(link.href.indexOf( "night" ) ===-1){
            localStorage.setItem('mode', 'night');
            link.href = 'https://globalcoinresearch.com/wp-content/themes/gcr/img/favicon-night.ico';
        }
    });
    
    // portfoli sorting
    jQuery('.portsort').click(function(){
        jQuery('.portsort, .item').removeClass('active');
        jQuery(this).addClass('active');
        var showTarget = jQuery(this).data('show');
        jQuery('.'+showTarget).addClass('active');
    });
    
    $('a[href^="#"]').on('click', function(e) { 
        e.preventDefault(); 
        var target = this.hash,
        $target = $(target); 
        var position_scroll = $target.offset().top - 80 + "px"; 
        $('html, body').stop().animate({ 'scrollTop': position_scroll }, 900, 'swing', function() { window.location.hash = target; }); });
    
    // scroll up
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) { $('.scroll-up').fadeIn(); } else { $('.scroll-up').fadeOut(); }
    });
    $('.scroll-up').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

