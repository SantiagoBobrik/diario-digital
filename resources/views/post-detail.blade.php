@extends('layouts.navbar')


@section('top')



<!-- PAGE HEADER -->
{{-- <div id="post-header" class="page-header">
    <div class="page-header-bg" style="background-image: url({{url('storage/'.$post->image)}});"
data-stellar-background-ratio="0.5"></div>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="post-category">
                <a href="category.html">{{$post->getcategory->name}}</a>
            </div>
            <h1>{{$post->tittle}}</h1>
            <ul class="post-meta">

                <ul class="post-meta">
                    <li>{{$post->created_at->format('d/m/y') }}</li>



                </ul>

            </ul>
        </div>
    </div>
</div>
</div> --}}
<div id="post-header" class="page-header">
    <div class="page-header-bg" data-stellar-background-ratio="0.5">
        <img class="" height="100%" width="100%" src="{{url('storage/'.$post->image)}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="post-category">
                    <a href="category.html">{{$post->getcategory->name}}</a>
                </div>
                <h1>{{$post->tittle}}</h1>
                <ul class="post-meta">

                    <ul class="post-meta">
                        <li>{{$post->created_at->format('d/m/y') }}</li>



                    </ul>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->

<!-- /HEADER -->


@if (isset($horizontalAds[0]) == 1)


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-row text-center">
                <a target="_blank" href="{{$horizontalAds[0]->url}}" style="display: inline-block;margin: auto;">
                    <img style="width: 728px; height: 90px" class="img-responsive"
                        src="{{url('storage/'.$horizontalAds[0]->image)}}" alt="">
                </a>
            </div>

        </div>
    </div>
</div>

@endif

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">


                <!-- post content -->
                <!-- post content -->
                <div class=" d-flex justify-content-between ">

                    <div class="col-lg-8">


                        {!!$post->description!!}




                        {!!$post->content!!}

                    </div>

                    {{-- anuncios cuadrados --}}
                    <div class="col-md-4">


                        @foreach ($normalAds as $ad)

                        <div class="aside-widget text-center col-12">

                            <a target="_blank" href="{{$ad->url}}" style="display: inline-block;margin: auto;">
                                <img class="img-responsive" src="{{url('storage/'.$ad->image)}}" alt="">

                            </a>
                        </div>
                        @endforeach


                    </div>


                </div>
                <!-- /post content -->






                <!-- /related post -->






            </div>


        </div>
    </div>


</div>
@if (isset($horizontalAds[1]) == 1)


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-row text-center">
                <a target="_blank" href="{{$horizontalAds[1]->url}}" style="display: inline-block;margin: auto;">
                    <img style="width: 728px; height: 90px" class="img-responsive"
                        src="{{url('storage/'.$horizontalAds[1]->image)}}" alt="">
                </a>
            </div>

        </div>
    </div>
</div>

@endif

@endsection