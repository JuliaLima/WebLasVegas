

$('body').load(function(){
	var id = '#m';
    $(id).css('height', $($(id).children()[0]).css('height'));
});