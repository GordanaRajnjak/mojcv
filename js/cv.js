

$(document).ready(function() {

$('.skill').on('click', function() {

   $(this).toggleClass('active');
   var liid = $(this).attr('id');
console.log(liid)
   $('#target').load('skillNotes.html #' + liid);
})
})