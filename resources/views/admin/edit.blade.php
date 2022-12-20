<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Pendaftaran Panic Button</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/logo.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/style.min.css') }}" rel="stylesheet">
    <script src="{{ url('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
    <!-- Load Leaflet from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@3.0.0/dist/esri-leaflet.js"></script>
    <script src="https://unpkg.com/esri-leaflet-vector@3.0.0/dist/esri-leaflet-vector.js"></script>


    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.css">
    <script src="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.js"></script>


    <style type="text/css">

    .pointer{
    position:absolute;
    top:90px;
    right:60px;
    z-index:99999;
    display: none;
    }
    </style>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        {{-- <img src="{{ asset('/assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{ asset('/assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" /> --}}
                        <img width="80px" width="40px" src="{{ asset('/assets/images/logo.png') }}" alt="homepage" class="dark-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    {{-- <span class="logo-text">
                        <!-- dark Logo text -->
                        <!-- Light Logo text -->
                        <img src="{{ asset('/assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                    </span> --}}
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
                            href="/admin/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                class="hide-menu">Dashboard</span></a></li>
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

        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                          <li class="breadcrumb-item"><a href="/admin/dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                          <li class="breadcrumb-item active" aria-current="page">Registration</li>
                        </ol>
                      </nav>
                    <h1 class="mb-0 fw-bold">Registration Data</h1> 
                </div>
                <div class="col-6">
                    <div class="text-end upgrade-btn">
                        <a href="/" class="btn btn-primary text-white">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{ url('edit/update/'. $item->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="name">Nama Lokasi</label>
                                        <input type="text" placeholder="Nama Lokasi Anda" name="name" id="name" class="form-control" value="{{ $item->name }}" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" placeholder="email address" name="email" id="email" value="{{ $item->email }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="penanggung_jawab">Nama Penanggung Jawab</label>
                                        <input type="text" placeholder="penanggung jawab lokasi" name="penanggung_jawab" id="penanggung_jawab" value="{{ $item->penanggung_jawab }}" class="form-control" required></textarea>
                                    </div>
                
                                    <div class="form-group">
                                        <label for="phone">No Hp</label>
                                        <input type="number" placeholder="Nomor Hp anda" name="phone" id="phone" class="form-control" value="{{ $item->phone }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Alamat Panic Button</label>
                                        <textarea class="form-control mb-2" name="address" id="address"  cols="30" rows="4" required="">{{ $item->address }}</textarea>
                                        <div id="map" style="height: 400px"></div>
                                    </div>
                                    <input type="text" class="form-control mb-2" required="" id="latitude" name="lat" value="{{ $item->lat }}">
                                    <input type="text" class="form-control mb-4" required="" name="long" id="longitude" value="{{ $item->long }}">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </form>
                            </div>
                        </div>
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
    {{-- <script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script> --}}
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

        <script type="text/javascript">
        let latitude = -6.9819590695809906;
        let longitude = 110.43680350698655;
        

        function cek_titik_lokasi(){ 

            var form_lng =  $('#latitude').val();
            if (form_lng.length < 3) {

            Swal.fire('Gagal menyimpan','silakan melengkapi titik lokasi bank sampah terlebih dahulu','info');

            }

        }
        



        
            const apiKey = "AAPKb22a3f2a79c44e7faf92f7c2175410835pyhwZf9KZfY4WtfUz8bLzwmHltYsHcsY2QYuJz_JPvBfKeddWZmRc1Ecfmo4DeT";

            const basemapEnum = "ArcGIS:Navigation";

            const map = L.map("map", {
            minZoom: 2

            }).setView([latitude, longitude], 14); 

            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
                maxZoom: 18
            }).addTo(map);



            const searchControl = L.esri.Geocoding.geosearch({
            position: "topright",
            placeholder: "Cari Lokasi anda",
            useMapBounds: false,
            providers: [L.esri.Geocoding.arcgisOnlineProvider({
                apikey: apiKey,
                nearby: {
                lat: latitude,
                lng: longitude
                },
            })]
            }).addTo(map);



            var marker = L.marker([latitude,longitude],{
            draggable: true
            }).addTo(map);



            const results = L.layerGroup().addTo(map);

            searchControl.on("results", (data) => {
            map.removeLayer(marker)
            results.clearLayers();
            for (let i = data.results.length - 1; i >= 0; i--) {
                const lngLatString = `${Math.round(data.results[i].latlng.lng * 100000)/100000}, ${Math.round(data.results[i].latlng.lat * 100000)/100000}`;


                const marker = L.marker(data.results[i].latlng,{draggable: true});
                marker.bindPopup(`<b>${lngLatString}</b><p>${data.results[i].properties.LongLabel}</p>`)
                results.addLayer(marker);
                marker.openPopup();

                marker.on('dragend', function (e) {
                    document.getElementById('latitude').value = e.target._latlng.lat;
                    document.getElementById('longitude').value =e.target._latlng.lng;
                    });

            
                document.getElementById('latitude').value = data.results[i].latlng.lat;
                document.getElementById('longitude').value = data.results[i].latlng.lng;
            }
            });

        marker.on('dragend', function (e) {
            
        document.getElementById('latitude').value = e.target._latlng.lat;
        document.getElementById('longitude').value =e.target._latlng.lng;
        });




        $(document).ready(function(){  

        $('.pointer').show();

        setTimeout(function(){$('.pointer').fadeOut('slow');},3400);   

            });
        </script>
    <!--This page JavaScript -->
   
</body>

</html>