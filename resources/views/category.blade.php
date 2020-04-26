@extends('layouts.navbar')



@section('top')





<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">

                            @if (!$posts->isEmpty())
                            <h2 class="title">{{$posts[0]->getCategory->name}}</h2>
                            @endif
                        </div>
                    </div>
                    <!-- SECTION TOP 0 -->


                    {{-- @if ($post->trend == 0) --}}

                    <div class="col-12  d-flex flex-wrap">
                        @if (!$posts->isEmpty())
                        @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="post">
                                <a style="heigth:100px" class="post-img" href="blog-post.html"><img class="pepe"
                                        src="/storage/{{$post->image}}" alt=""></a>


                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">{{$post->getCategory->name}}</a>
                                    </div>
                                    <h3 class="post-title"><a href="/noticia/{{$post->id}}">{{$post->tittle}}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">{{$post->author}}</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->
                        {{-- @endif --}}
                        @endforeach

                        @else
                        <div class="col-md-12 text-center">
                            <p class="mt-5">No se encontraron resultados.</p>

                        </div>

                        @endif





                    </div>

                    <div class="clearfix visible-md visible-lg"></div>



                </div>

            </div>
        </div>
    </div>

</div>


@endsection