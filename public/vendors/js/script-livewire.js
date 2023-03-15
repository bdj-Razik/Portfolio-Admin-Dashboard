window.addEventListener('closeModal', event => {
    $('.modal').modal('hide');
});
$('.modal').on('hide.bs.modal', function (event) {
    livewire.emit('close');
    console.log(event);
});
