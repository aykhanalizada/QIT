$(document).ready(function () {
    $('#editForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission
        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX request
        $.ajax({
            url: $(this).attr('action'), // Form action URL
            type: 'POST', // Form method
            data: formData, // Form data
            success: function (response) {
                console.log("Success", response)
                toastr.options = {
                    "progressBar": true,
                    "positionClass": "toast-top-center",
                    "timeOut":"2000"
                }
                toastr["info"]("Succesfully Updated")


                setTimeout(function () {
                    location.reload()
                }, 2000)
            },
            error: function (xhr, status, error) {
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


    $('#createForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission
        // Serialize the form data
        var formData = $(this).serialize();
        // Send an AJAX request
        $.ajax({
            url: $(this).attr('action'), // Form action URL
            type: 'POST', // Form method
            data: formData, // Form data
            success: function (response) {
                // Handle success response
                console.log(response);
                toastr.options = {
                    "progressBar": true,
                    "positionClass": "toast-top-center",
                    "timeOut":"2000"
                }
                toastr["success"]("Succesfully Created")


                setTimeout(function () {
                    location.reload()
                }, 2000)
            },
            error: function (xhr, status, error) {
                // Handle error response'
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

function deleteMeasure(id,deleteUrl) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        confirmButtonText: 'Yes, delete it!',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        showClass: {
            popup: `fadeInDown`
        },
        hideClass: {
            popup: `fadeOutUp `
        }

    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                method: 'POST',
                url: deleteUrl,
                data: id,
                success: function (response) {
                    console.log("Success", response)
                    Swal.fire(
                        'Deleted!',
                        'Your item has been deleted.',
                        'success'
                    ).then(function (){
                        location.reload();
                    });

                },
                error: function (error) {
                    console.log("Error", error)
                    Swal.fire("Cannot Delete!",error.responseJSON.message,"error")
                }

            });
        }
    });
}



