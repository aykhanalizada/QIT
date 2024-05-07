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



console.log('salam')
createProductbtnaaaaaaaaaaaaaaaaaa = document.querySelector('#createProdbtn')
console.log(createProductbtnaaaaaaaaaaaaaaaaaa)
function createProduct($product) {


    createProdPage.classList.remove('hidden')
    createProdContainer.classList.add('fadeInDown')
    let prodData = $product

    createProdPage.querySelector('input[name="id"]').value = prodData.id

    createProdPage.querySelector('input[name="name"]').value = prodData.name
    createProdPage.querySelector('div[id="category"]').innerHTML = prodData.category.name

}



function showProduct($product) {
    console.log('salam')
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

function submitUpdateProd() {

    let formData = $('#updateProdForm').serializeArray()
    console.log(formData)
    $.ajax({
        method: 'PUT',
        headers: {
            'X-CSRF-TOKEN': $('input[name="csrf-token"]').val()
        },
        url: "http://qit.test/updateProduct",
        data: formData,
        success: function (response) {
            console.log("Success", response)
            editProdPage.classList.add('hidden')
            setTimeout(() => {
                successModal.classList.remove('hidden')
            }, 700)
        },
        error: function (response) {
            console.log("Error", response)

        }

    })

}

function deleteProduct(id) {

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
                method: 'DELETE',
                url: "http://qit.test/deleteUser/" + id,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="csrf-token"]').val()
                },
                data: {
                    id,

                },
                success: function (response) {
                    console.log("Success", response)
                    $('#userRow_' + id).remove();
                    setTimeout(() => {
                        // successModal.classList.remove('hidden')
                    }, 700)
                },
                error: function (response) {
                    console.log("Error", response)

                }

            })
            Swal.fire(
                'Deleted!',
                'Your item has been deleted.',
                'success'
            )
        }
    });
}


