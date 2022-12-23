<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/style.css"/>
</head>
<body>
{{--------------------------------------------Header Section----------------------------------------------------}}
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top shadow">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="navbar-brand">Home</a></li>
                <li><a href="" class="navbar-brand">All Course</a></li>
                <li><a href="" class="navbar-brand">Login</a></li>
                <li><a href="" class="navbar-brand">Registraition</a></li>
            </ul>
        </div>
    </nav>
{{------------------------------------------- End Header Section-------------------------------------------------------------------------------}}
    @yield('body')

{{--    ----------------------------------   Footer Section --------------------------------------}}

    <footer class="pt-5 pb-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>About Institute</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis deserunt iusto nihil reiciendis. Accusamus, accusantium, amet at corporis distinctio dolores exercitationem nisi quaerat reiciendis repellat rerum tempora unde voluptate.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Populer Link</h3>
                        <hr/>
                        <ul>
                            <li><a href="">Populler Course One</a></li>
                            <li><a href="">Populler Course Two</a></li>
                            <li><a href="">Populler Course Three</a></li>
                            <li><a href="">Populler Course Four</a></li>
                            <li><a href="">Populler Course Five</a></li>
                            <li><a href="">Populler Course Six</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Fllow Us On</h3>
                        <hr/>
                        <ul class="nav">
{{--                            <li><a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a></li>--}}
{{--                            <li><a href="" class="nav-link"><i class="fa-brands fa-twitter"></i></a></li>--}}
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis deserunt iusto nihil reiciendis. Accusamus, accusantium, amet at corporis distinctio dolores exercitationem nisi quaerat reiciendis repellat rerum tempora unde voluptate.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="bg-white mt-5">
            <div class="row">
                <div class="col-12">
                    <p class="text-white text-center mb-0">Coppyright@2022 Allright Alibaba</p>
                </div>
            </div>
        </div>
    </footer>

{{--    ----------------------------------------End footer Section---------------------------------------------}}



<script src="{{asset('/')}}js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
