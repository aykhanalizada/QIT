function handleCloseModal(modalTarget, container, page) {
    container.classList.remove('fadeInDown');
    container.classList.add('fadeOutUp');
    setTimeout(function () {
        page.classList.add('hidden');
        container.classList.remove('fadeOutUp');
    }, 700);
}

$('.closeModal').each(function () {
    $(this).on('click', function () {
        let modalTarget = $(this).data('modal-target')
        switch (modalTarget) {
            case 'createPage':
                handleCloseModal(modalTarget, $('#createContainer')[0], $('#createPage')[0]);
                break;
            case 'showPage' :
                handleCloseModal(modalTarget, $('#showContainer')[0], $('#showPage')[0]);
                break;
            case 'editPage' :
                handleCloseModal(modalTarget, $('#editContainer')[0], $('#editPage')[0]);
                break;
        }
    })

})


function createCompany() {
    $('#createPage').removeClass("hidden")
    $('#createContainer').addClass("fadeInDown")
}

function showCompany(company) {
    $('#showPage').removeClass("hidden")
    $('#showContainer').addClass("fadeInDown")

    $('input[name="name"]').val(company.name)
    $('input[name="VOEN"]').val(company.VOEN)
}

function editCompany(company) {
    $('#editPage').removeClass("hidden")
    $('#editContainer').addClass("fadeInDown")

    $('input[name="id"]').val(company.id)
    $('input[name="name"]').val(company.name)
    $('input[name="VOEN"]').val(company.VOEN)

}

