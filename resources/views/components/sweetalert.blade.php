{{-- Notifikasi berhasil --}}
@if(Session::has('success_message'))
<script>
    Swal.fire('{{ Session::get('success_message') }}', '', 'success');
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