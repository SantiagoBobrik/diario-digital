<?php $__env->startSection('top'); ?>




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
                            <h2 class="title">Resultados de la busqueda</h2>

                        </div>
                    </div>
                    <!-- SECTION TOP 0 -->


                    <?php if($search->isEmpty()): ?>

                    <div class="col-md-12 text-center">
                        <p class="mt-5">No se encontraron resultados.</p>

                    </div>

                    <?php endif; ?>
                    <?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    

                    <div class="col-md-4">
                        <div class="post">



                            <a style="heigth:100px" class="post-img" href="blog-post.html"><img class="pepe"
                                    src="storage/<?php echo e($post->image); ?>" alt=""></a>


                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html"><?php echo e($post->getCategory->name); ?></a>
                                </div>
                                <h3 class="post-title"><a href="/noticia/<?php echo e($post->id); ?>"><?php echo e($post->tittle); ?></a></h3>
                                <ul class="post-meta">
                                    <li><a href="author.html"><?php echo e($post->author); ?></a></li>
                                    <li><?php echo e($post->created_at->format('d/m/y')); ?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    <div class="clearfix visible-md visible-lg"></div>

                    <?php echo e($search->links()); ?>


                </div>

            </div>
        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/santiago/Documents/Proyectos/diario-la-informacion/resources/views/search.blade.php ENDPATH**/ ?>