<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Emirates Graphic CMS</title>

    <link rel="stylesheet" type="text/css" href="{{url('css/build.min.css')}}">
    <link rel="stylesheet" href="{{url('v3 bootstrap/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('v3 bootstrap/bootstrap/dist/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin.min.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <style>
        /* Hide CKEditor security warnings */
        .cke_notifications_area,
        .cke_notification,
        .cke_notification_warning {
            display: none !important;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>

<body>
<div id="admin">

</div>

  <!-- Load libraries first -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{url('v3 bootstrap/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
  
  <!-- Initialize toastr globally -->
  <script>
    window.toastr = toastr;
    window.swal = swal;
  </script>
  
  <!-- Load app -->
  <script src="{{url('js/admin.js')}}"></script>


</body>