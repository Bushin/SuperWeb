$(document).ready(function() {
	$('#help_button').hover(function(){
    $("#s_panel, #help_button").animate({left: "0px"},{queue:false,duration:500});
    $("#help_button").animate({left: "150px"},{queue:false,duration:500});
},function(){
    $("#s_panel").animate({left: "-300px"},{queue:false,duration:500});
    $("#help_button").animate({left: "0px"},{queue:false,duration:500});
});
});