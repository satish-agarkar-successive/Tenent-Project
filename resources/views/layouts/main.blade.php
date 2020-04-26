<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Simple And Powerfull Tenant Management System">
    <meta name="keywords" content="tenant, tenant management, management system, system tenant, management tenant, tms , flats , p.g, crm, paying guest, room , rent room rent , lease">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Start CSS -->

    @yield('style')

    @include('layouts.partials.headerLink')
    <!-- End CSS -->
</head>

<body class="horizontal-layout">
    {{-- Start InfobBr Setting Sidebar --}}

    @include('layouts.partials.leftSettingSideBar')

    <div class="infobar-settings-sidebar-overlay"></div>

    {{-- End Infobar Setting Sidebar }}

    {{-- Start ContainerBar --}}
    <div id="containerbar" class="container-fluid" style="width:100%; margin-bottom: 10%;">

        {{-- Start RightBar --}}

        @include('layouts.rightbar')

        @yield('content')

        {{-- End RightBar --}}
    </div>
    {{-- End ContainerBar --}}

    @yield('script')

</body>

</html>