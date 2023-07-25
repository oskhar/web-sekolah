$(function () {
  $("#example1").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "language": {
        "info": ''
    }
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
})
function readURL(input) {
  if (input.files && input.files[0]) {
    $('#icon-upload-foto').remove();
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#imagePreview img').attr('src', e.target.result);
      $('#imagePreview').show();
    }

    reader.readAsDataURL(input.files[0]);
  }
}

// Ketika input file dipilih, panggil fungsi readURL
$('#inputFoto').change(function() {
  readURL(this);
});