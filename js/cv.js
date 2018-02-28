
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

$('.carousel').bcSwipe({ threshold: 50 });