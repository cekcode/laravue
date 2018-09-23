<!DOCTYPE html>
<html lang="id" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="For Backend Development Rumah Sakit Brayat Minulya">
    <meta name="keywords" content="rumah sakit solo, rumah sakit swasta,rumah sakit modern">
    <meta name="author" content="STIMIK SINUS SURAKARTA">
    <title>Dashboard Admin</title>
    <link rel="apple-touch-icon" href="{{ asset('assets_admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_admin/images/ico/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
    rel="stylesheet">
    <link href="{{ asset('assets_admin/fonts/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- BEGIN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/vendors/css/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/style.css') }}">
    <!-- END CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
	<div id="app">
		<Mynav></Mynav>
        <Mymenu></Mymenu>
			<router-view></router-view>
		<Myfooter></Myfooter>
	</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets_admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_admin/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_admin/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_admin/js/scripts/customizer.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_admin/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
</body>
</html>