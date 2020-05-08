@extends('layouts.navbar')


@section('top')

<style>
    .titulo {
        font-size: 45px
    }


    .image {
        width: 60%
    }



    .divider:after {
        content: "";
        display: inline-block;
        height: 2px;
        background-color: #e8eaed;
        position: absolute;
        left: 0px;
        right: 0px;
        bottom: -10px;
        z-index: 10;

    }

    @media only screen and (max-width: 767px) {
        #post-header {
            padding-top: 50px;
            padding-bottom: 80px;
        }

        .titulo {
            font-size: 30px
        }

        .image {
            width: 100%
        }

    }
</style>



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

                <div class="col-md-12 col-lg-12 col-sm-12 col-12 tittle mb-2 mt-4 ">

                    <h1 class=" titulo ">{{$post->tittle}}</h1>

                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 col-12 tittle mb-5 ">
                    <p class="divider p-0 mt-0">{!!$post->description!!}</p>
                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 col-12 tittle mt-4 mb-5 text-center ">

                    <img class="image img-fluid" src="{{url('storage/'.$post->image)}}" alt="">

                </div>



                <div class="col-md-8 col-lg-8 col-sm-12 col-12 mt-4 ">
                    {!!$post->content!!}
                </div>

                {{-- anuncios cuadrados --}}
                <div class="col-md-4 col-lg-4 col-sm-12  col-12">


                    @foreach ($normalAds as $ad)

                    <div class="aside-widget text-center col-12">

                        <a target="_blank" href="{{$ad->url}}" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="{{url('storage/'.$ad->image)}}" alt="">

                        </a>
                    </div>
                    @endforeach





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