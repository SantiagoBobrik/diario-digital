<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>La Informacion</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('css/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/css/style.css')}}" />


</head>

<body>
    <!-- HEADER -->
    <header id="header" class="">
        <!-- NAV -->
        <div id="nav">
            <!-- Top Nav -->
            <div id="nav-top">
                <div class="container">
                    <!-- social -->

                    <!-- /social -->

                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="/" class="logo img-fluid"><img src="/storage/logo.png" alt=""></a>
                    </div>
                    <!-- /logo -->


                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div id="nav-search">
                            <form method="POST" action="/busqueda" class="form-search" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input class="input input-search" name="search" placeholder="Busque una noticia...">
                                <button type="submit" class="search-btn search-buttom"><i
                                        class="fa fa-search"></i></button>
                            </form>
                            <button class="nav-close search-close">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Top Nav -->

            <!-- Main Nav -->
            <div id="nav-bottom">
                <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">


                        @foreach ($categories as $category)

                        <li><a href="/seccion/{{$category->slug}}">{{$category->name}}</a></li>


                        @endforeach

                    </ul>
                    <!-- /nav -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <ul class="nav-aside-menu">

                    @foreach ($categories as $category)

                    <li><a href="/seccion/{{$category->slug}}">{{$category->name}}</a></li>


                    @endforeach

                </ul>
                <button class="nav-close nav-aside-close"><span></span></button>
            </div>
            <!-- /Aside Nav -->
        </div>
        <!-- /NAV -->
    </header>


    <header id="header-fix" class="header-fix">
        <!-- NAV -->
        <div id=" nav">
            <!-- Top Nav -->
            <div id="nav-top">
                <div class=" d-flex justify-content-between">


                    <div class="nav-logo-fix ml-4 nav-btns  ">
                        <a href="/" class="logo-fix img-fluid"><img src="/storage/logo.png" height="40px" alt=""></a>
                    </div>

                    <!-- search & aside toggle -->
                    <div class="nav-btns mr-4">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div id="nav-search">
                            <form method="POST" action="/busqueda" class="form-search" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input class="input input-search" name="search" placeholder="Busque una noticia...">
                                <button type="submit" class="search-btn search-buttom"><i
                                        class="fa fa-search"></i></button>
                            </form>
                            <button class="nav-close search-close">
                                <span></span>
                            </button>
                        </div>
                    </div>


                    <!-- /logo -->
                </div>
            </div>
            <!-- /Top Nav -->

        </div>
        <!-- /NAV -->
    </header>
    <!-- /HEADER -->


    @yield('top')


    <!-- FOOTER -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">



            </div>
            <!-- /row -->

            <!-- row -->
            <div class="footer-bottom row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        @foreach ($categories as $category)

                        <li><a href="/seccion/{{$category->slug}}">{{$category->name}}</a></li>


                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved by Diario la
                        informacion

                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{asset('js/js/jquery.min.js')}}"></script>
    <script src="{{asset('js/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/js/main.js')}}"></script>
    <script src="{{asset('js/action-post.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>



</body>