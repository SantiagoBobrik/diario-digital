<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="<?php echo e(asset('/images/logo.png')); ?>">
    <link rel="icon" href="logo2.svg">
    <meta property="og:url" content="http://lainformacioncanuelas.com/">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>La Informacion</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/css/bootstrap.min.css')); ?>" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('css/css/font-awesome.min.css')); ?>">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/css/style.css')); ?>" />


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
                    <div class="">
                        <a href="/" class="logo"><img class="img-fluid mt-4" width="40%"
                                src="<?php echo e(asset('/images/logo.png')); ?>" alt=""></a>
                    </div>
                    <!-- /logo -->


                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div id="nav-search">
                            <form method="POST" action="/busqueda" class="form-search" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

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


                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li><a href="/seccion/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a></li>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                    <!-- /nav -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <ul class="nav-aside-menu">

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><a href="/seccion/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a></li>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                        <a href="/" class="logo-fix img-fluid"><img src="<?php echo e(asset('/images/logo.png')); ?>" height="40px"
                                alt=""></a>
                    </div>

                    <!-- search & aside toggle -->
                    <div class="nav-btns mr-4">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div id="nav-search">
                            <form method="POST" action="/busqueda" class="form-search" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

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


    <?php echo $__env->yieldContent('top'); ?>


    <!-- FOOTER -->
    <footer id="footer">
        <!-- container -->
        <div class="container">

            <div class="footer-bottom row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li><a href="/seccion/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a></li>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados Diario La Informacion Cañuelas

                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="footer-copyright text-center" style="width: 100%">
            Desarrolado por <a href="mailto:santiago.bobrik@gmail.com"> <strong>Santiago Bobrik </strong> </a>
        </div>
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="<?php echo e(asset('js/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/js/jquery.stellar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('js/action-post.js')); ?>"></script>
    <script src="<?php echo e(asset('js/index.js')); ?>"></script>



</body><?php /**PATH /Users/santiago/Documents/Proyectos/diario-la-informacion/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>