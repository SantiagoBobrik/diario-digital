@extends('layouts.navbar')



@section('top')



{{-- anuncio --}}

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




<!-- SECTION POST TOP  -->

<div class="section">

	<div class="container">

		<div class="row hot-post">
			@foreach ($postsTrend as $post)
			@if ($post->trend == 1)
			<div class="col-md-8 hot-post-left mt-3">

				<div class="post post-thumb">
					<a href="/noticia/{{$post->id}}" class="post-img trend-left"><img src="storage/{{$post->image}}"
							alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="seccion/{{$post->getCategory->slug}}">Prueba</a>
						</div>
						<h3 class="post-title title-trend"><a href="/noticia/{{$post->id}}">{{$post->tittle}}</a></h3>

					</div>
				</div>
			</div>
			@endif

			@endforeach



			<div class="col-md-4 hot-post-right">
				@foreach ($postsTrend as $post)
				@if ($post->trend == 2)

				<div class="post post-thumb">
					<a class="post-img trend-right" href="/noticia/{{$post->id}}"><img class="img-fluid"
							src="storage/{{$post->image}}" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="seccion/{{$post->getCategory->slug}}">{{$post->getCategory->name}}</a>
						</div>
						<h3 class="post-title"><a href="/noticia/{{$post->id}}">{{$post->tittle}}</a></h3>
					</div>
				</div>
				@endif

				@endforeach



				@foreach ($postsTrend as $post)
				@if ($post->trend == 3)


				<div class="post post-thumb">
					<a class="post-img trend-right" href="/noticia/{{$post->id}}"><img src=" storage/{{$post->image}}"
							alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="seccion/{{$post->getCategory->slug}}">{{$post->getCategory->name}}</a>

						</div>
						<h3 class="post-title"><a href="/noticia/{{$post->id}}">{{$post->tittle}}</a></h3>
					</div>
				</div>

				@endif

				@endforeach

			</div>
		</div>

	</div>

</div>

<!-- ---------------------------- END TOP SECTION  --------------------------- -->



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


{{-- noticias --}}
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Noticias Recientes</h2>

						</div>
					</div>
					@foreach ($recents as $recent)
					<div class="col-md-6">
						<div class="post">

							<a style="heigth:100px" class="post-img" href="/noticia/{{$post->id}}"><img class="pepe"
									src="storage/{{$recent->image}}" alt=""></a>


							<div class="post-body">
								<div class="post-category">
									<a href="/seccion/{{$recent->getCategory->slug}}">{{$recent->getCategory->name}}</a>
								</div>
								<h3 class="post-title"><a href="/noticia/{{$post->id}}">{{$recent->tittle}}</a></h3>

							</div>
						</div>
					</div>
					@endforeach
				</div>


				<div class="row">
					@foreach ($categories as $category)
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">{{$category->name}}</h2>
						</div>
					</div>
					<!-- post -->


					@foreach ($posts as $post)
					@if ($post->category_id == $category->id)

					<div class="col-md-4">

						<div class="post post-sm">
							<a class="post-img" href="/noticia/{{$post->id}}"><img src="storage/{{$post->image}}"
									alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="seccion/{{$category->slug}}">{{$post->getCategory->name}}</a>
								</div>
								<h3 class="post-title title-sm"><a href="/noticia/{{$post->id}}">{{$post->tittle}}</a>
								</h3>
							</div>
						</div>
					</div>
					@endif






					@endforeach

					@endforeach




				</div>

			</div>

			{{-- anuncios cuadrados --}}
			<div class="col-md-4">


				@foreach ($normalAds as $ad)

				<div class="aside-widget text-center col-12">

					<a target="_blank" href="{{$ad->url}}" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="storage/{{$ad->image}}" alt="">

					</a>
				</div>

				@endforeach


			</div>

		</div>
	</div>
	<!-- /row -->
</div>
<!-- /container -->
</div>





@if (isset($horizontalAds[2]) == 1)

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-row text-center">
				<a target="_blank" href="{{$horizontalAds[2]->url}}" style="display: inline-block;margin: auto;">
					<img style="width: 728px; height: 90px" class="img-responsive"
						src="{{url('storage/'.$horizontalAds[2]->image)}}" alt="">
				</a>
			</div>

		</div>
	</div>
</div>

@endif


@endsection