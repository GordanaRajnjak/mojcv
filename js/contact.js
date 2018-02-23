

$('#submit-contact').on('click', function() {

$.get("send.php", function(data){
    $('#success_message h3').html(data);
});

})

