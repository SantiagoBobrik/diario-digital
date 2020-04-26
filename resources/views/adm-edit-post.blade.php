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
            <h1 class="display-4 cc_cursor">Agregar Noticia </h1>

        </div>
    </div>

    <div class="col 12">
        <form method="POST" action="/dashboard/noticias/editarNoticia" enctype="multipart/form-data">
            {{csrf_field()}}



            <div class="row d-flex justify-content-center">

                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">


                {{-- SECTION TITULO --}}
                <div class="col-10">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Titulo</label>
                        <input value="{{$post->tittle}}" name="tittle" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                </div>


                {{-- SECTION DESCRIPCION --}}
                <div class="col-10">

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripcion</label>
                        <textarea name="description" id="description">{{$post->description}}</textarea>
                    </div>
                </div>


                {{-- SECTION CONTENIDO --}}
                <div class="col-10">

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Contenido</label>
                        <textarea name="content" id="summernote">{{$post->content}}</textarea>

                    </div>
                </div>



                {{-- SECTION CATEGORIAS --}}
                <div class="col-10">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Categoria</label>
                        <select name="cateroy_id" class="form-control" id="exampleFormControlSelect1">
                            <option selected value="{{$post->getCategory->id}}">{{$post->getCategory->name}}</option>
                            <option value="1">Sociales</option>
                            <option value="2">Policial</option>
                            <option value="3">Deportes</option>
                            <option value="4">Interes General</option>
                            <option value="5">Politica</option>
                        </select>
                    </div>
                </div>



                {{-- SECTION FOTO --}}
                <div class="col-10">

                    <div class="form-group ">
                        <label for="exampleFormControlFile1">Foto</label>
                        <input type="hidden" name="image_name" value="{{$post->image}}">
                        <input value="" name="image" type="file" class="form-control-file" id="exampleFormControlFile1">


                    </div>
                </div>

                <div class="col-10 mt-2 mb-2">
                    <img src="/storage/{{$post->image}}" alt="" width="200" height="200">
                </div>

                {{-- SECTION TENDENCIA --}}
                <div class="col-10">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tendencia</label>
                        <select name="trend" class="form-control" id="exampleFormControlSelect1">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>

                        </select>
                    </div>

                </div>

                {{-- SECTION SUBMIT --}}



                <div class="col-10">

                    <div class="form-group">

                        <button id="agregar" type="submit"
                            class="btn btn-success btn-lg btn-block mb-5">Agregar</button>

                        </select>
                    </div>

                </div>

            </div>

        </form>



    </div>


</div>


<script>
    $("#summernote").summernote({
    
    tabsize: 1,
    height: 300,
    toolbar: [
        // [groupName, [list of button]]
        ["style", ["bold"]],
        ["para", ["ul", "ol"]]
    ],
    callbacks: {
        // callback for pasting text only (no formatting)
        onPaste: function (e) {
          var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
          e.preventDefault();
          bufferText = bufferText.replace(/\r?\n/g, '<br>');
    
          document.execCommand('insertHtml', false, bufferText);
        }
    }

});



$("#description").summernote({
   
    tabsize: 1,
    height: 300,
    toolbar: [
        // [groupName, [list of button]]
        ["style", ["bold"]],
        ["para", ["ul", "ol"]]
    ],
    callbacks: {
        // callback for pasting text only (no formatting)
        onPaste: function (e) {
          var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
          e.preventDefault();
          bufferText = bufferText.replace(/\r?\n/g, '<br>');

          document.execCommand('insertHtml', false, bufferText);
        }
    }

});



</script>

@endsection