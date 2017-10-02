$(document).ready(function() {
    $('#overlay').css({opacity: 0.5}); 
    positionCenter($('#popup')); 
	
    $('#show_popup').click(function() { 
        $('#popup, #overlay').fadeIn(300);
    });
	
    $('#close_popup').click(function() { 
		$('#popup, #overlay').fadeOut(300);
    });
	
    function positionCenter(elem) { 
        elem.css({
            marginTop: '-' + elem.height() / 2 + 'px',
			marginLeft: '-' + elem.width() / 2 + 'px'
        });
    }
});