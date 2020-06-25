



<?php $__env->startSection('top'); ?>




<?php if(isset($horizontalAds[0]) == 1): ?>


<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-row text-center">
				<a target="_blank" href="<?php echo e($horizontalAds[0]->url); ?>" style="display: inline-block;margin: auto;">
					<img style="width: 728px; height: 90px" class="img-responsive"
						src="<?php echo e(url('storage/'.$horizontalAds[0]->image)); ?>" alt="">
				</a>
			</div>

		</div>
	</div>
</div>

<?php endif; ?>




<!-- SECTION POST TOP  -->

<div class="section">

	<div class="container">

		<div class="row hot-post">
			<?php $__currentLoopData = $postsTrend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($post->trend == 1): ?>
			<div class="col-md-8 hot-post-left mt-3">

				<div class="post post-thumb">
					<a href="/noticia/<?php echo e($post->id); ?>" class="post-img trend-left"><img
							src="<?php echo e(asset('storage/'.$post->image)); ?>" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="seccion/<?php echo e($post->getCategory->slug); ?>"><?php echo e($post->getCategory->name); ?></a>
						</div>
						<h3 class="post-title title-trend"><a href="/noticia/<?php echo e($post->id); ?>"><?php echo e($post->tittle); ?></a></h3>

					</div>
				</div>
			</div>
			<?php endif; ?>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



			<div class="col-md-4 hot-post-right">
				<?php $__currentLoopData = $postsTrend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($post->trend == 2): ?>

				<div class="post post-thumb">
					<a class="post-img trend-right" href="/noticia/<?php echo e($post->id); ?>"><img class="img-fluid"
							src="<?php echo e(asset('storage/'.$post->image)); ?>" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="seccion/<?php echo e($post->getCategory->slug); ?>"><?php echo e($post->getCategory->name); ?></a>
						</div>
						<h3 class="post-title"><a href="/noticia/<?php echo e($post->id); ?>"><?php echo e($post->tittle); ?></a></h3>
					</div>
				</div>
				<?php endif; ?>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



				<?php $__currentLoopData = $postsTrend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($post->trend == 3): ?>


				<div class="post post-thumb">
					<a class="post-img trend-right" href="/noticia/<?php echo e($post->id); ?>"><img
							src="<?php echo e(asset('storage/'.$post->image)); ?>" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="seccion/<?php echo e($post->getCategory->slug); ?>"><?php echo e($post->getCategory->name); ?></a>

						</div>
						<h3 class="post-title"><a href="/noticia/<?php echo e($post->id); ?>"><?php echo e($post->tittle); ?></a></h3>
					</div>
				</div>

				<?php endif; ?>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>

	</div>

</div>

<!-- ---------------------------- END TOP SECTION  --------------------------- -->



<?php if(isset($horizontalAds[1]) == 1): ?>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-row text-center">
				<a target="_blank" href="<?php echo e($horizontalAds[1]->url); ?>" style="display: inline-block;margin: auto;">
					<img style="width: 728px; height: 90px" class="img-responsive"
						src="<?php echo e(url('storage/'.$horizontalAds[1]->image)); ?>" alt="">
				</a>
			</div>

		</div>
	</div>
</div>

<?php endif; ?>



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
					<?php $__currentLoopData = $recents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-6">
						<div class="post">

							<a style="heigth:100px" class="post-img" href="/noticia/<?php echo e($recent->id); ?>"><img class="pepe"
									src="storage/<?php echo e($recent->image); ?>" alt=""></a>


							<div class="post-body">
								<div class="post-category">
									<a href="/seccion/<?php echo e($recent->getCategory->slug); ?>"><?php echo e($recent->getCategory->name); ?></a>
								</div>
								<h3 class="post-title"><a href="/noticia/<?php echo e($recent->id); ?>"><?php echo e($recent->tittle); ?></a></h3>

							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>


				<div class="row">
					<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title"><?php echo e($category->name); ?></h2>
						</div>
					</div>
					<!-- post -->


					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($post->category_id == $category->id): ?>

					<div class="col-md-6">

						<div class="post post-sm">
							<a class="post-img" href="/noticia/<?php echo e($post->id); ?>"><img src="storage/<?php echo e($post->image); ?>"
									alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="seccion/<?php echo e($category->slug); ?>"><?php echo e($post->getCategory->name); ?></a>
								</div>
								<h3 class="post-title title-sm"><a href="/noticia/<?php echo e($post->id); ?>"><?php echo e($post->tittle); ?></a>
								</h3>
							</div>
						</div>
					</div>
					<?php endif; ?>






					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




				</div>

			</div>

			
			<div class="col-md-4">


				<?php $__currentLoopData = $normalAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<div class="aside-widget text-center col-12">

					<a target="_blank" href="<?php echo e($ad->url); ?>" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="storage/<?php echo e($ad->image); ?>" alt="">

					</a>
				</div>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


			</div>

		</div>
	</div>
	<!-- /row -->
</div>
<!-- /container -->
</div>





<?php if(isset($horizontalAds[2]) == 1): ?>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-row text-center">
				<a target="_blank" href="<?php echo e($horizontalAds[2]->url); ?>" style="display: inline-block;margin: auto;">
					<img style="width: 728px; height: 90px" class="img-responsive"
						src="<?php echo e(url('storage/'.$horizontalAds[2]->image)); ?>" alt="">
				</a>
			</div>

		</div>
	</div>
</div>

<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/index.blade.php ENDPATH**/ ?>