<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <link href="/css/dashboard.css " rel="stylesheet">

    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    
    

    <title>Dashboard</title>
</head>
<body class="text-gray-800 font-inter">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Гарчиг хэсэг эхлэх -->
               @yield('top-section')
                <!-- Гарчиг хэсэг дуусах -->
                <!-- Start Page Content -->
                @yield('body-section')
                <!-- ============================================================== -->
                <!-- <div class="heading"><h1>Marina Hotel Admin Tabled Tawtai Morilno uu</h1></div> -->
                <!-- End PAge Content -->              
            </div>
        </div>
    </div>

@include('admin-ui.layout.sidebar')
        <!-- Left Sidebar end -->

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="dist/js/script.js"></script>
</body>
</html>