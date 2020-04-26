@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-dark border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-light">Panel de acción</div>
    <div class="list-group list-group-flush">
      <a href="{{url('dashboard/noticias')}}"
        class=" active list-group-item list-group-item-action bg-dark text-light">Noticias</a>
      <a href="{{url('dashboard/anuncios')}}"
        class="list-group-item list-group-item-action bg-dark text-light">Anuncios</a>
      <a href="{{url('dashboard/categoria')}}"
        class="list-group-item list-group-item-action bg-dark text-light">Categorias</a>

    </div>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">

    <div class="container-fluid">

      @yield('container')

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


  @endsection