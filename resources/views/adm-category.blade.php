{{-- /* ------------------------------------ x ----------------------------------- */ --}}

{{-- ANCHOR GESTION DE NOTICIAS--}}




@extends('layouts.admin')


@section('container')



<div class="row">



    {{-- TABLE --}}
    <div class="col-12  mt-5">
        <div class=" text-center cc_cursor f">
            <h4 class=" cc_cursor">Categorias</h4>

        </div>

    </div>

    <a href="{{url('dashboard/categoria/agregar')}}"> <button class="kc_fab_main_btn">+</button></a>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">Nombre</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th class="post_id" scope="row">{{$category->id}}</th>
                    <td class="">{{$category->name}}</td>
                </tr>

                @endforeach

        </table>


    </div>
</div>



@endsection