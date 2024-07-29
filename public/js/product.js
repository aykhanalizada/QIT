
    let dgx = document.querySelector('#dgx')
    let dvxTopdan = document.querySelector('#dvxTopdan')
    let dvxPer = document.querySelector('#dvxPer')

    let dgxTable = document.querySelector('#dgxTable')
    let dvxTopdanTable = document.querySelector('#dvxTopdanTable')
    let dvxPerTable = document.querySelector('#dvxPerTable')

    dgx.addEventListener('click', function () {
    if (dgxTable.classList.contains('hidden')) {
    dgxTable.classList.remove('hidden');
}
    if (!dvxTopdanTable.classList.contains('hidden')) {
    dvxTopdanTable.classList.add('hidden')
}
    if (!dvxPerTable.classList.contains('hidden')) {
    dvxPerTable.classList.add('hidden');
}

})

    dvxTopdan.addEventListener('click', function () {
    if (!dgxTable.classList.contains('hidden')) {
    dgxTable.classList.add('hidden');
}
    if (!dvxPerTable.classList.contains('hidden')) {
    dvxPerTable.classList.add('hidden');
}
    if (dvxTopdanTable.classList.contains('hidden')) {
    dvxTopdanTable.classList.remove('hidden')
}
})

    dvxPer.addEventListener('click', function () {
    if (!dgxTable.classList.contains('hidden')) {
    dgxTable.classList.add('hidden');
}
    if (!dvxTopdanTable.classList.contains('hidden')) {
    dvxTopdanTable.classList.add('hidden')
}
    if (dvxPerTable.classList.contains('hidden')) {
    dvxPerTable.classList.remove('hidden');
}

})


