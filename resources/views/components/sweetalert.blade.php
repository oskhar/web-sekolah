{{-- Notifikasi berhasil --}}
@if(Session::has('success_message'))
<script>
    Swal.fire({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        color: 'white',
        background: 'var(--success)',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        icon: 'success',
        title: '{{ Session::get('success_message') }}',
    });
</script>
@endif

{{-- Notifikasi error --}}
@if(Session::has('error_message'))
<script>
    // Menampilkan pesan error AJAX
    Swal.fire({
        title: "{{ Session::get('error_message') }}",
        text: "",
        icon: 'error',
        confirmButtonText: 'CONFIRM',
    });
</script>
@endif

{{-- Notifikasi warning --}}
@if(Session::has('warning_message'))
<script>
    // Menampilkan pesan warning AJAX
    Toast.fire({
        title: 'PERINGATAN!',
        text: "{{ Session::get('warning_message') }}",
        icon: 'info',
        confirmButtonText: 'CONFIRM',
        backdrop: false,
    });
</script>
@endif