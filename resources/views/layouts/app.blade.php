<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adm/dist/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('adm/dist/assets/vendors/iconly/bold.css')}}">
    <link rel="stylesheet" href="{{asset('adm/dist/assets/vendors/sweetalert2/sweetalert2.min.css')}}">

    <link rel="stylesheet" href="{{asset('adm/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('adm/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('adm/dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('adm/dist/assets/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('sweetalert::alert')


        @include('inc.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('title')</h3>
            </div>

            @yield('content')



        </div>
    </div>
    <script src="{{asset('adm/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('adm/dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('adm/dist/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('adm/dist/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('adm/dist/assets/js/extensions/sweetalert2.js')}}"></script>
    <script src="{{asset('adm/dist/assets/vendors/sweetalert2/sweetalert2.all.min.js')}}"></script>

    <script src="{{asset('adm/dist/assets/js/main.js')}}"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>
