<?php $__env->startSection('top'); ?>

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

    @media  only screen and (max-width: 767px) {
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


<!-- /PAGE HEADER -->

<!-- /HEADER -->


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

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12 tittle mb-2 mt-4 ">

                    <h1 class=" titulo "><?php echo e($post->tittle); ?></h1>

                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 col-12 tittle mb-5 ">
                    <p class="divider p-0 mt-0"><?php echo $post->description; ?></p>
                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 col-12 tittle mt-4 mb-5 text-center ">

                    <img class="image img-fluid" src="<?php echo e(url('storage/'.$post->image)); ?>" alt="">

                </div>



                <div class="col-md-8 col-lg-8 col-sm-12 col-12 mt-4 ">
                    <?php echo $post->content; ?>

                </div>

                
                <div class="col-md-4 col-lg-4 col-sm-12  col-12">


                    <?php $__currentLoopData = $normalAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="aside-widget text-center col-12">

                        <a target="_blank" href="<?php echo e($ad->url); ?>" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="<?php echo e(url('storage/'.$ad->image)); ?>" alt="">

                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                </div>
                <!-- /post content -->






                <!-- /related post -->






            </div>


        </div>
    </div>


</div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/santiago/Documents/Proyectos/diario-la-informacion/resources/views/post-detail.blade.php ENDPATH**/ ?>