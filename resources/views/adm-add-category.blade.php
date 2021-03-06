{{-- ANCHOR GESTION DE NOTICIAS --}}

@extends('layouts.admin')


@section('container')



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>

<div class="row">
    <div class="col-12">
        <div class="pricing-header text-center mt-3">
            <h1 class="display-4 cc_cursor">Agregar Categoria </h1>

        </div>
    </div>

    <div class="col 12">
        <form method="POST" action="/dashboard/categoria/agregar" enctype="multipart/form-data">
            {{csrf_field()}}



            <div class="row d-flex justify-content-center">

                {{-- SECTION TITULO --}}
                <div class="col-10">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Nombre</label>
                        <input value="{{old("name")}}" name="name" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                </div>
                <div class="col-10">
                    <button id="agregar" type="submit" class="btn btn-success btn-lg btn-block mb-5">Agregar</button>





                    @foreach ($errors->all() as $item)
                    <div class="alert alert-danger" role="alert">
                        {{$item}}

                    </div>
                    @endforeach


                </div>

            </div>

        </form>



    </div>


</div>



@endsection