closeModals = document.querySelectorAll('.closeModal')

editProdPage = document.querySelector('#editProdPage')
editProdContainer = document.querySelector('#editProdContainer')

showProdPage = document.querySelector('#showProdPage')
showProdContainer = document.querySelector('#showProdContainer')

createProdPage = document.querySelector('#createProdPage')
createProdContainer = document.querySelector('#createProdContainer')



closeModals.forEach(function (closeModal) {
    closeModal.addEventListener("click", function () {
        let modalTarget = closeModal.getAttribute('data-modal-target')

        if (modalTarget == 'successModal') {
            successModal.classList.remove('fadeInDown');
            successModal.classList.add('fadeOutUp');
            setTimeout(function () {
                successModal.classList.add('hidden');
                successModal.classList.remove('fadeOutUp');
                location.reload();
            }, 1000);
        }
        if (modalTarget == 'createProdPage') {
            createProdContainer.classList.remove('fadeInDown');
            createProdContainer.classList.add('fadeOutUp');

            setTimeout(function () {
                createProdPage.classList.add('hidden');
                createProdContainer.classList.remove('fadeOutUp');

            }, 700);
        }

        if (modalTarget == 'editProdPage') {
            editProdContainer.classList.remove('fadeInDown');
            editProdContainer.classList.add('fadeOutUp');

            setTimeout(function () {
                editProdPage.classList.add('hidden');
                editProdContainer.classList.remove('fadeOutUp');

            }, 700);
        }

    })
})



function createProduct() {


    createProdPage.classList.remove('hidden')
    createProdContainer.classList.add('fadeInDown')


}



function showProduct($product) {
    showProdPage.classList.remove('hidden')
    showProdContainer.classList.add('fadeInDown')
    let prodData = $product

    showProdPage.querySelector('input[name="id"]').value = prodData.id

    showProdPage.querySelector('input[name="name"]').value = prodData.name
    showProdPage.querySelector('div[id="category"]').innerHTML = prodData.category.name

}



function editProduct($product) {

    editProdPage.classList.remove('hidden')
    editProdContainer.classList.add('fadeInDown')
    let prodData = $product

    editProdPage.querySelector('input[name="id"]').value = prodData.id

    editProdPage.querySelector('input[name="name"]').value = prodData.name
    editProdPage.querySelector('select[name="category"]').value = prodData.category.id

}




$(document).ready(function() {
    $('#editForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission
        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX request
        $.ajax({
            url: $(this).attr('action'), // Form action URL
            type: 'POST', // Form method
            data: formData, // Form data
            success: function(response) {
                console.log("Success", response)
                editProdPage.classList.add('hidden')
                setTimeout(() => {
                    successModal.classList.remove('hidden')
                }, 700)
                location.reload()
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    });


    $('#createForm').on('submit', function(e) {
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
                location.reload()
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    });
});








function deleteProduct(id,deleteUrl) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        confirmButtonText: 'Yes, delete it!',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        showClass: {
            popup: `
      fadeInDown
    `
        },
        hideClass: {
            popup: `
      fadeOutUp
    `
        }

    }).then((result) => {
        if (result.isConfirmed) {
            /*  $.ajax({
                  method: 'DELETE',
                  url: '/items/' + itemId,
                  success: function (response) {
                      Swal.fire(
                          'Deleted!',
                          'Your item has been deleted.',
                          'success'
                      )
                  },
                  error: function (response) {
                      Swal.fire(
                          'Error!',
                          'Failed to delete the item.',
                          'error'
                      )
                  }
              });*/
            $.ajax({
                method: 'POST',
                url: deleteUrl,
                data: id,
                success: function (response) {
                    console.log("Success", response)
                    // $('#userRow_' + id).remove();
                    console.log('salam');

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


