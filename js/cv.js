<<<<<<< HEAD
$(document).ready(function() {

$('.skill').on('click', function() {

   $(this).toggleClass('active');
   var liid = $(this).attr('id');
console.log(liid)
   $('#target').load('skillNotes.html #' + liid);
})
=======


$(document).ready(function() {

$('.skill').on('click', function() {

   $(this).toggleClass('active');
   var liid = $(this).attr('id');
console.log(liid)
   $('#target').load('skillNotes.html #' + liid);
})
>>>>>>> fcd9dac0394035aba0eeb32eaa7ac4cbba4aa161
})