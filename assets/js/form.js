$('#orderForm').on("submit", function(e){
    e.preventDefault();
    var form = $('#orderForm');
    $.ajax({
        url: 'assets/scripts/form.php',
        type: 'POST',
        data: form.serialize()
    }).done(function(response){
        console.log(response);
        $('#response').addClass('success').text(response).fadeIn(500);
    }).fail(function(data){
        console.log(data);
        // Set the message text.
        if (data.responseText !== '') {
            $('#response').addClass('fail').text(data.responseText).fadeIn(500);
        } else {
            $('#response').addClass('fail').text('Oops! An error occured and your message could not be sent.').fadeIn(500);
        }
    });
});