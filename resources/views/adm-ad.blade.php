{{-- /* ------------------------------------ x ----------------------------------- */ --}}

{{-- ANCHOR GESTION DE NOTICIAS--}}




@extends('layouts.admin')


@section('container')



<div class="row">



    {{-- TABLE --}}
    <div class="col-12 ">
        <div class=" text-center cc_cursor f">
            <h4 class=" cc_cursor mt-5"> Anuncios Normales</h4>

        </div>

    </div>
    <a href="{{url('dashboard/anuncios/agregar')}}"> <button class="kc_fab_main_btn">+</button></a>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th scope="col">Nombre</th>


                    <th scope="col">Tipo</th>
                    <th scope="col">Posicion</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ads as $ad)
                @if ($ad->type == 'normal')


                <tr>

                    <td class="text-truncate">{{$ad->name}}</td>
                    <td class="text-truncate">{{$ad->type}}</td>
                    <td class="text-truncate">{{$ad->position}}</td>



                    <td>
                        <a href="{{url('dashboard/anuncios/editar/'.$ad->id)}}" type="button"
                            class="edit btn btn-success"><i class="fas fa-edit"></i></a>
                        <button onclick="deleteAd({{$ad->id}})" type="button" class=" delete btn btn-danger"><i
                                class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endif
                @endforeach

        </table>

        <div class="col-12 text-center">


        </div>
    </div>




    {{-- TABLE --}}
    <div class="col-12 ">
        <div class=" text-center cc_cursor f">
            <h4 class=" cc_cursor mt-3"> Anuncios Horizontales</h4>

        </div>

    </div>
    <a href="{{url('dashboard/anuncios/agregar')}}"> <button class="kc_fab_main_btn">+</button></a>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th scope="col">Nombre</th>


                    <th scope="col">Tipo</th>
                    <th scope="col">Posicion</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ads as $ad)
                @if ($ad->type == 'horizontal')


                <tr>

                    <td class="text-truncate">{{$ad->name}}</td>
                    <td class="text-truncate">{{$ad->type}}</td>
                    <td class="text-truncate">{{$ad->position}}</td>



                    <td>
                        <a href="{{url('dashboard/anuncios/editar/'.$ad->id)}}" type="button"
                            class="edit btn btn-success"><i class="fas fa-edit"></i></a>
                        <button onclick="deleteAd({{$ad->id}})" type="button" class=" delete btn btn-danger"><i
                                class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endif
                @endforeach

        </table>

        <div class="col-12 text-center">


        </div>
    </div>
</div>



@endsection


<script>
    function deleteAd(post_id) {
    var token = "{{csrf_token()}}"; 
    var data = { id: post_id, _token: token };
    $.ajax({
        type: "post",
        url: "anuncios/eliminar",
        data: data,
        success: function (msg) {
            alert(msg);
            location.reload();
        },
    });
}

function viewPost(post_id) {
    alert(post_id);
}





</script>