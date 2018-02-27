
// LOAD SKILLS ON CLICK

$(document).ready(function() {

$('.skill').on('click', function() {

   $(this).toggleClass('active');
   var liid = $(this).attr('id');
console.log(liid)
   $('#target').load('skillNotes.html #' + liid);
})
})



// CAROUSEL SWIPE

$(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});