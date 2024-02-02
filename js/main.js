//Waiting for images to be loaded 
jQuery( document ).ready(function($) {
    $(window).on("load", function() {
        $('#loading').slideUp();
        $('#slides').fadeIn('slow');
        //Prevent having no "active" slide
        var $el = $('.toggle.active');
        if (!$el.length) {
        $('.toggle').first().addClass('active');
        }
    });
    
    $('#previous').click(function() {
        var $el = $('.active').prev('.toggle');
        if (!$el.length) //If no previous, s$elect last
        {
        $el = $('.toggle').last();;
        }
        $('.active').removeClass('active');
        $el.addClass('active');
    });
    
    $('#next').click(function() {
        var $el = $('.active').next('.toggle');
        if (!$el.length) //If no next, s$elect first
        {
        $el = $('.toggle').first();
        }
        $('.active').removeClass('active');
        $el.addClass('active');
    });
});