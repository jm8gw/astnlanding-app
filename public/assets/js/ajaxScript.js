$(document).ready(function(){
    $('#contact-form').submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        
        $.ajax({
            type: 'POST',
            url: 'forms/sendEmail.php',
            data: formData,
            success: function(response){
                $('#form-message').html(response);
                $('#contact-form')[0].reset();
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
                $('#form-message').html('<p class="error">An error occurred. Please try again later.</p>');
            }
        });
    });
});
