jQuery( document ).ready(function() {

    //Hover for post preview image (hover both when floating over image and floating over preview text)
    jQuery('.blog_row').hover(function(){
    	jQuery(this).find('.photo-hover-content').addClass('hover');
    },function(){
    	jQuery(this).find('.photo-hover-content').removeClass('hover')}
    );
});

/* smooth scrolling for nav sections */
!function ($) {
    jQuery(function(){

        var $root = $('html, body');

        $('a').click(function() {
            var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top
            }, 500, function () {
                window.location.hash = href;
            });
            return false;
        });
    })
}(window.jQuery)