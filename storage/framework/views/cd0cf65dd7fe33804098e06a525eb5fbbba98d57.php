<?php $__env->startSection('container'); ?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>

<div class="row">
    <div class="col-12">
        <div class="pricing-header text-center mt-3">
            <h1 class="display-4 cc_cursor">Agregar Anuncio</h1>

        </div>
    </div>

    <div class="col 12">
        <form method="POST" action="/dashboard/anuncios/agregar" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>




            <div class="row d-flex justify-content-center">

                
                <div class="col-10">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Nombre</label>
                        <input value="<?php echo e(old("name")); ?>" name="name" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                </div>


                <div class="col-10">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Url</label>
                        <input value="<?php echo e(old("url")); ?>" name="url" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                </div>

                
                <div class="col-10">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo</label>
                        <select name="type" class="form-control" id="exampleFormControlSelect1">

                            <option value="normal">Normal</option>
                            <option value="horizontal">Horizontal</option>

                        </select>
                    </div>
                </div>



                
                <div class="col-10">

                    <div class="form-group ">
                        <label for="exampleFormControlFile1">Foto</label>
                        <input value="<?php echo e(old("image")); ?>" name="image" type="file" class="form-control-file"
                            id="exampleFormControlFile1">
                    </div>
                </div>



                
                <div class="col-10">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Posicion</label>

                        <input value="<?php echo e(old("position")); ?>" name="position" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                </div>

                

                <div class="col-10">
                    <button id="agregar" type="submit" class="btn btn-success btn-lg btn-block mb-5">Agregar</button>





                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($item); ?>


                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>

            </div>

        </form>



    </div>


</div>


<script>
    $("#summernote").summernote({
    placeholder: "Hello Bootstrap 4",
    tabsize: 2,
    height: 300,
    toolbar: [
        // [groupName, [list of button]]
        ["style", ["bold", "italic", "underline", "clear"]],
        ["font", ["strikethrough", "superscript", "subscript"]],
        
        ["color", ["color"]],
        ["para", ["ul", "ol", "paragraph"]]
    ]
});

$("#description").summernote({
    placeholder: "Hello Bootstrap 4",
    tabsize: 2,
    height: 300,
    toolbar: [
        // [groupName, [list of button]]
        ["style", ["bold", "italic", "underline", "clear"]],
        ["font", ["strikethrough", "superscript", "subscript"]],
        
        ["color", ["color"]],
        ["para", ["ul", "ol", "paragraph"]]
    ],
    lineHeights: [ '6.0']
});

$('#summernote').summernote('fontSize', 50);


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/santiago/Documents/Proyectos/diario-la-informacion/resources/views/adm-ad-add.blade.php ENDPATH**/ ?>