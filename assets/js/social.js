(function($){
	$('.sharepostbox a').click(function(event){
		event.preventDefault();
        //popup 
        var width  = 575,
        height = 520,
        left   = ($(window).width()  - width)  / 2,
        top    = 0,
        opts   = 'status=1' +
        ',width='  + width  +
        ',height=' + height +
        ',top='    + top    +
        ',left='   + left;
        window.open($(this).attr("href"), 'share', opts); 
	});
})(jQuery);