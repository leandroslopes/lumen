$(function() {

	$('#myCarousel').carousel({
		interval: 4000
	});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id;
  
  if (id_selector.length <= 19)
	  id = id_selector.substring(id_selector.length - 1);
  else
	  id = id_selector.substring(id_selector.length - 2);
  
  id = parseInt(id);
  id = id - 1;
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slide.bs.carousel', function (e) {
  var id = $('.item.active').attr('data-slide-number');
  id = parseInt(id);
  id = id + 1;
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+ id +']').addClass('selected');
});

});
