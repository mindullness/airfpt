@extends('admin.layout.layout')
@section('title', 'Elequent Products Site')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 ></h1><img data-src="sun.svg" class="iconic iconic-md" alt="sun">
    <h1>THIS IS MAIN ADMIN PAGE</h1>
    <span class="iconic iconic-sun iconic-sm" title="sun" aria-hidden="true"></span>
<span class="iconic iconic-sun iconic-md" title="sun" aria-hidden="true"></span>
<span class="iconic iconic-sun iconic-lg" title="sun" aria-hidden="true"></span>
Foundation Icon Font
<span class="fi-sun iconic-sm" title="sun" aria-hidden="true"></span>
</body>
</html>
@endsection
@section('script-section')
<script>
    $(function() {
        $('#product').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection