<?php $__env->startSection('title', 'Pagina de Inserir'); ?>
<?php $__env->startSection('h1', 'Insira seu post no blog'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-4">
        
        <form method="post" action="<?php echo e(route('blog.gravar')); ?>" enctype="multipart/form-data">

            
            <?php echo csrf_field(); ?>

            
            <div class="mb-3">
                <label for="nome" class="form-label">Título</label>
                <input type="text" class="form-control" id="nome" name="titulo">
            </div>

            
            <div class="mb-3">
                <label for="comentario" class="form-label">Descricao</label>
                <textarea class="form-control" id="comentario" name="descricao" rows="3"></textarea>
            </div>

            
            <div class="mb-3">
                <p>Associar imagem: <input type="file" name="imagem"></p>
            </div>

            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alanf\Downloads\prog3vitor-main\resources\views/blog/create.blade.php ENDPATH**/ ?>