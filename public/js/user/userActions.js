$(document).ready(function() {

    $('#updateUserForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX request
        $.ajax({
            url: $(this).attr('action'), // Form action URL
            type: 'POST', // Form method
            data: formData, // Form data
            success: function(response) {
                // Handle success response
                location.reload()
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle error response
                $('#errorEdit').removeClass('hidden')
                $('#errorMessageEdit').empty()
                let errors = xhr.responseJSON.errors
                $.each(errors, function (key, value) {
                    $('#errorMessageEdit').append('<li>' + value + '</li>')
                })
                console.error(xhr.responseText);
            }
        });
    });


    $('#createUserForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX request
        $.ajax({
            url: $(this).attr('action'), // Form action URL
            type: 'POST', // Form method
            data: formData, // Form data
            success: function(response) {
                // Handle success response
                console.log(response);
                location.reload();
            },
            error: function(xhr, status, error) {
                // Handle error response
                $('#errorCreate').removeClass('hidden')
                $('#errorMessageCreate').empty()
                let errors = xhr.responseJSON.errors
                $.each(errors, function (key, value) {
                    $('#errorMessageCreate').append('<li>' + value + '</li>')
                })
                console.error(xhr.responseText);
            }
        });
    });
});

