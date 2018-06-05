$('.active-anchor').click(function(){
	console.log('hello');
	window.location = $(this).attr('href');
});