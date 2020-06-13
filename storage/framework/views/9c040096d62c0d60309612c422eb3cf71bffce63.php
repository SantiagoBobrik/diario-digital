<?php $__env->startSection('container'); ?>



<div class="row">



    
    <div class="col-12 ">
        <div class=" text-center cc_cursor f">
            <h4 class=" cc_cursor mt-5"> Anuncios Normales</h4>

        </div>

    </div>
    <a href="<?php echo e(url('dashboard/anuncios/agregar')); ?>"> <button class="kc_fab_main_btn">+</button></a>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th scope="col">Nombre</th>


                    <th scope="col">Tipo</th>
                    <th scope="col">Posicion</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($ad->type == 'normal'): ?>


                <tr>

                    <td class="text-truncate"><?php echo e($ad->name); ?></td>
                    <td class="text-truncate"><?php echo e($ad->type); ?></td>
                    <td class="text-truncate"><?php echo e($ad->position); ?></td>



                    <td>
                        <a href="<?php echo e(url('dashboard/anuncios/editar/'.$ad->id)); ?>" type="button"
                            class="edit btn btn-success"><i class="fas fa-edit"></i></a>
                        <button onclick="deleteAd(<?php echo e($ad->id); ?>)" type="button" class=" delete btn btn-danger"><i
                                class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        <div class="col-12 text-center">


        </div>
    </div>




    
    <div class="col-12 ">
        <div class=" text-center cc_cursor f">
            <h4 class=" cc_cursor mt-3"> Anuncios Horizontales</h4>

        </div>

    </div>
    <a href="<?php echo e(url('dashboard/anuncios/agregar')); ?>"> <button class="kc_fab_main_btn">+</button></a>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th scope="col">Nombre</th>


                    <th scope="col">Tipo</th>
                    <th scope="col">Posicion</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($ad->type == 'horizontal'): ?>


                <tr>

                    <td class="text-truncate"><?php echo e($ad->name); ?></td>
                    <td class="text-truncate"><?php echo e($ad->type); ?></td>
                    <td class="text-truncate"><?php echo e($ad->position); ?></td>



                    <td>
                        <a href="<?php echo e(url('dashboard/anuncios/editar/'.$ad->id)); ?>" type="button"
                            class="edit btn btn-success"><i class="fas fa-edit"></i></a>
                        <button onclick="deleteAd(<?php echo e($ad->id); ?>)" type="button" class=" delete btn btn-danger"><i
                                class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        <div class="col-12 text-center">


        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>


<script>
    function deleteAd(post_id) {
    var token = "<?php echo e(csrf_token()); ?>"; 
    var data = { id: post_id, _token: token };
    $.ajax({
        type: "post",
        url: "anuncios/eliminar",
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/santiago/Documents/Proyectos/diario-la-informacion/resources/views/adm-ad.blade.php ENDPATH**/ ?>