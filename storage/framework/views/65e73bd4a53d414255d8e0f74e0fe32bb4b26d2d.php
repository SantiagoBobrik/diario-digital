<?php $__env->startSection('container'); ?>



<div class="row">



    <div class="col-12">
        <div class=" px-2 py-2 pt-md-5 pb-md-1 mx-auto text-start cc_cursor f">
            <h4 class="text-center cc_cursor">Tendencia </h4>

        </div>

    </div>
    
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Tendecia</th>

                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $postTrend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <th class="post_id" scope="row"><?php echo e($post->id); ?></th>
                    <td><?php echo e($post->tittle); ?></td>
                    <td><?php echo e($post->getCategory->name); ?></td>
                    <td>#<?php echo e($post->trend); ?></td>

                    <td>

                        <a href="<?php echo e(url('noticia/'.$post->id)); ?>" type="button" class=" view btn btn-primary"><i
                                class="far fa-eye"></i></a>


                        <a href="<?php echo e(url('dashboard/noticias/editar/'.$post->id)); ?>" type="button"
                            class="edit btn btn-success"><i class="fas fa-edit"></i></a>
                        <button onclick="deletePost(<?php echo e($post->id); ?>)" type="button" class=" delete btn btn-danger"><i
                                class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

    </div>
    
    <div class="col-12 ">
        <div class=" text-center cc_cursor f">
            <h4 class=" cc_cursor">Noticias</h4>

        </div>

    </div>

    <a href="<?php echo e(url('dashboard/noticias/agregar')); ?>"> <button class="kc_fab_main_btn">+</button></a>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Categoria</th>

                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($post->trend == 0): ?>


                <tr>
                    <th class="post_id" scope="row"><?php echo e($post->id); ?></th>
                    <td class=""><?php echo e($post->tittle); ?></td>
                    <td><?php echo e($post->getCategory->name); ?></td>

                    <td>

                        <a href="<?php echo e(url('noticia/'.$post->id)); ?>" type="button" class=" view btn btn-primary"><i
                                class="far fa-eye"></i></a>


                        <a href="<?php echo e(url('dashboard/noticias/editar/'.$post->id)); ?>" type="button"
                            class="edit btn btn-success"><i class="fas fa-edit"></i></a>
                        <button onclick="deletePost(<?php echo e($post->id); ?>)" type="button" class=" delete btn btn-danger"><i
                                class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

        <div class="col-12 text-center">

            <?php echo e($posts->links()); ?>

        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>


<script>
    function deletePost(post_id) {
    var token = "<?php echo e(csrf_token()); ?>"; // ó $("#token").val() si lo tienes en una etiqueta html.
    var data = { id: post_id, _token: token };
    $.ajax({
        type: "post",
        url: "noticias/eliminar",
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/santiago/Documents/Proyectos/diario-la-informacion/resources/views/adm-post.blade.php ENDPATH**/ ?>