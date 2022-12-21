<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panic Button">
    <title>Panic Button</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/logo.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/style.min.css') }}" rel="stylesheet">
    <script src="{{ url('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header" data-logobg="skin6">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="/">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <img width="80px" width="40px" src="{{ asset('/assets/images/logo.png') }}" alt="homepage" class="dark-logo" />
                    </b>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="mdi mdi-menu"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-start me-auto">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                            href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                class="hide-menu">Dashboard</span></a></li>
                    <li class="text-center p-40 upgrade-btn">
                        {{-- button logout post --}}
                        {{-- <form action="{{ route('logout') }}" method="POST"> --}}
                            @csrf
                            <a href="/logout" class="btn d-block w-100 btn-danger text-white">Logout</a>
                        {{-- </form> --}}
                    </li>
                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Lokasi Panic Button</h4>
                </div>
                <div class="text-end upgrade-btn mb-2 me-2">
                    <a href="/create" class="btn btn-primary text-white">Tambah Data +</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lokasi</th>
                                <th scope="col">Email</th>
                                <th scope="col">Penanggung Jawab</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th scope="row">{{ $item->name }}</th>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->penanggung_jawab }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td class="d-flex gap-2">
                                    <a href="/edit/{{ $item->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/delete/{{ $item->id }}" class="btn btn-danger text-white delete" data-id="{{ $item->id }}" data-nama="{{ $item->name }}">Delete</a>
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>

<footer class="footer text-center">
    © 2022, made with 💙 by <a href="{{ url('https://can.co.id') }}"> Can Creative</a> . All rights reserved
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@include('components.alert')

<script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/dist/js/app-style-switcher.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('/dist/js/custom.js') }}"></script>
