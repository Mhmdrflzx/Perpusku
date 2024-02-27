@if (Session::has('success'))
<script>
    Swal.fire({
    text: "{{ session('success') }}",
    icon: "success"
  });
</script>
@endif

@if (Session::has('error'))
<script>
    Swal.fire({
    text: "{{ session('error') }}",
    icon: "error"
  });
</script>
@endif