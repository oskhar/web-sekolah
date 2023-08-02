{{-- Notifikasi berhasil --}}
@if(Session::has('success_message'))
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '{{ Session::get('success_message') }}',
        showConfirmButton: false,
        timer: 1300,
    });
</script>
@endif

{{-- Notifikasi error --}}
@if(Session::has('error_message'))
<script>
    // Menampilkan pesan error AJAX
    Swal.fire({
        title: 'Login gagal!',
        text: "{{ Session::get('error_message') }}",
        icon: 'error',
        confirmButtonText: 'OK',
    });
</script>
@endif

{{-- Notifikasi warning --}}
@if(Session::has('warning_message'))
<script>
    // Menampilkan pesan warning AJAX
    Swal.fire({
        title: 'Login gagal!',
        text: "{{ Session::get('warning_message') }}",
        icon: 'info',
        confirmButtonText: 'OK',
        backdrop: false,
    });
</script>
@endif