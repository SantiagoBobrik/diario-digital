{{-- /* ------------------------------------ x ----------------------------------- */ --}}

{{-- ANCHOR GESTION DE NOTICIAS--}}




@extends('layouts.admin')


@section('container')



<div class="row">



    <div class="col-12">
        <div class=" px-2 py-2 pt-md-5 pb-md-1 mx-auto text-start cc_cursor f">
            <h4 class="text-center cc_cursor">Tendencia </h4>

        </div>

    </div>
    {{-- TREND POST --}}
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Tendecia</th>

                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postTrend as $post)

                <tr>
                    <th class="post_id" scope="row">{{$post->id}}</th>
                    <td>{{$post->tittle}}</td>
                    <td>{{$post->getCategory->name}}</td>
                    <td>#{{$post->trend}}</td>

                    <td>

                        <a href="{{url('noticia/'.$post->id)}}" type="button" class=" view btn btn-primary"><i
                                class="far fa-eye"></i></a>


                        <a href="{{url('dashboard/noticias/editar/'.$post->id)}}" type="button"
                            class="edit btn btn-success"><i class="fas fa-edit"></i></a>
                        <button onclick="deletePost({{$post->id}})" type="button" class=" delete btn btn-danger"><i
                                class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach

        </table>

    </div>
    {{-- TABLE --}}
    <div class="col-12 ">
        <div class=" text-center cc_cursor f">
            <h4 class=" cc_cursor">Noticias</h4>

        </div>

    </div>

    <a href="{{url('dashboard/noticias/agregar')}}"> <button class="kc_fab_main_btn">+</button></a>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Categoria</th>

                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                @if ($post->trend == 0)


                <tr>
                    <th class="post_id" scope="row">{{$post->id}}</th>
                    <td class="">{{$post->tittle}}</td>
                    <td>{{$post->getCategory->name}}</td>

                    <td>

                        <a href="{{url('noticia/'.$post->id)}}" type="button" class=" view btn btn-primary"><i
                                class="far fa-eye"></i></a>


                        <a href="{{url('dashboard/noticias/editar/'.$post->id)}}" type="button"
                            class="edit btn btn-success"><i class="fas fa-edit"></i></a>
                        <button onclick="deletePost({{$post->id}})" type="button" class=" delete btn btn-danger"><i
                                class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endif
                @endforeach

        </table>

        <div class="col-12 text-center">

            {{$posts->links()}}
        </div>
    </div>
</div>



@endsection


<script>
    function deletePost(post_id) {
    var token = "{{csrf_token()}}"; // ó $("#token").val() si lo tienes en una etiqueta html.
    var data = { id: post_id, _token: token };
    $.ajax({
        type: "post",
        url: "noticias/eliminar",
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