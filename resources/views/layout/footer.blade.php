<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
<script>
    window.addEventListener('closeModal', event => {
        $('.modal').modal('hide');
    });
    $('.modal').on('hide.bs.modal', function(event) {
        livewire.emit('close');
    });
</script>
@stack('script')
