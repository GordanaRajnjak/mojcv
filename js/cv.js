
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

$(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if( Math.floor(xClick - xMove) > 5 ){
            $(this).carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -5 ){
            $(this).carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});