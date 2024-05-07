let createUser = document.querySelector('#createUser')
let closePopup = document.querySelectorAll('.closePopup')

let createUserPage = document.querySelector('#createUserPage')
let showUserPage = document.querySelector('#showUserPage')
let editUserPage = document.querySelector('#editUserPage')
let successModal = document.querySelector('#successModal')

let showUserContainer = document.querySelector('#showUserContainer')

closePopup.forEach(function (closePopup) {
    closePopup.addEventListener("click", function () {
        let modalTarget = closePopup.getAttribute('data-modal-target')

        if (modalTarget == 'successModal') {
            successModal.classList.remove('fadeInDown');
            successModal.classList.add('fadeOutUp');

            setTimeout(function () {
                successModal.classList.add('hidden');
                successModal.classList.remove('fadeOutUp');
                location.reload();
            }, 1000);
        }
        if (modalTarget == 'editUserPage') {
            editUserContainer.classList.remove('fadeInDown');
            editUserContainer.classList.add('fadeOutUp');

            setTimeout(function () {
                editUserPage.classList.add('hidden');
                editUserContainer.classList.remove('fadeOutUp');
            }, 700);
        }

        if (modalTarget == 'createUserPage') {
            createUserContainer.classList.remove('fadeInDown');
            createUserContainer.classList.add('fadeOutUp');

            setTimeout(function () {
                createUserPage.classList.add('hidden');
                createUserContainer.classList.remove('fadeOutUp');
            }, 700);
        }


        if (modalTarget == 'showUserPage') {
            showUserContainer.classList.remove('fadeInDown');
            showUserContainer.classList.add('fadeOutUp');
            setTimeout(function () {
                showUserPage.classList.add('hidden');
                showUserContainer.classList.remove('fadeOutUp');
            }, 700);
        }


    })
})


let createUserContainer = document.querySelector('#createUserContainer')
createUser.addEventListener('click', function () {
    createUserPage.classList.remove('hidden')
    createUserContainer.classList.add('fadeInDown')
})


function showUser($user) {
    showUserPage.classList.remove('hidden')
    showUserContainer.classList.add('fadeInDown')
    let userData = $user
    showUserPage.querySelector('input[name="id"]').value = userData.id

    showUserContainer.querySelector('input[name="name"]').value = userData.name
    showUserContainer.querySelector('input[name="surname"]').value = userData.surname
    showUserContainer.querySelector('input[name="username"]').value = userData.username
    showUserContainer.querySelector('#company').innerHTML = userData.company.name
}


let editUserContainer = document.querySelector('#editUserContainer')

function editUser($user) {
    editUserPage.classList.remove('hidden')
    editUserContainer.classList.add('fadeInDown')
    let userData = $user

    editUserPage.querySelector('input[name="id"]').value = userData.id

    editUserPage.querySelector('input[name="name"]').value = userData.name
    editUserPage.querySelector('input[name="surname"]').value = userData.surname
    editUserPage.querySelector('input[name="username"]').value = userData.username
    editUserPage.querySelector('select[name="company"]').value = userData.company.id
    editUserPage.querySelector('select[name="rol"]').value = userData.roles

}


function deleteUser(id) {

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
                url: "http://qit.test/deleteUser/"+id,
                headers: {
                    'X-CSRF-TOKEN':$('input[name="csrf-token"]').val()
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


function togglePasswordVisibility() {
    let passwordInput = document.querySelector('#password');
    let toggleButton = document.querySelector('#toggleEye')

    if (passwordInput.type == 'password') {
        passwordInput.type = 'text'
        toggleButton.classList.remove("far", "fa-eye")
        toggleButton.classList.add("fa", "fa-eye-slash")
    } else {
        passwordInput.type = "password"
        toggleButton.classList.add("far", "fa-eye")
        toggleButton.classList.remove("fa", "fa-eye-slash")
    }

}

function submitUpdateForm() {

    let formData = $('#updateUserForm').serializeArray()

    $.ajax({
        method: 'POST',
        url: "http://qit.test/updateUser",
        data: formData,
        success: function (response) {
            console.log("Success", response)
            editUserPage.classList.add('hidden')
            setTimeout(() => {
                successModal.classList.remove('hidden')
            }, 700)
        },
        error: function (response) {
            console.log("Error", response)

        }

    })

}
