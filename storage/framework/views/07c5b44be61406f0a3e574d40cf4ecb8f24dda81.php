<?php $__env->startSection('container'); ?>



<div class="row">



    
    <div class="col-12  mt-5">
        <div class=" text-center cc_cursor f">
            <h4 class=" cc_cursor">Categorias</h4>

        </div>

    </div>

    <a href="<?php echo e(url('dashboard/categoria/agregar')); ?>"> <button class="kc_fab_main_btn">+</button></a>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">Nombre</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th class="post_id" scope="row"><?php echo e($category->id); ?></th>
                    <td class=""><?php echo e($category->name); ?></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>


    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/santiago/Documents/Proyectos/diario-la-informacion/resources/views/adm-category.blade.php ENDPATH**/ ?>