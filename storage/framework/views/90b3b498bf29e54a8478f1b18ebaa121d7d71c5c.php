<?php $__env->startSection('title', 'Blog Principal'); ?>
<?php $__env->startSection('h1', 'Página Principal do Blog'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <p>Bem-Vindo ao blog, insira seu post abaixo</p>

        <a class="btn btn-primary" href="<?php echo e(route('blog.inserir')); ?>" role="button">Inserir Post</a>
    </div>
</div>

<div class="col">

    
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">       
            <div class="card w-100" style="margin: 9px; width: 15rem">
                <div class="card-body">
                    <a href="<?php echo e(route('blog.show', $post)); ?>">
                        
                        <h5 class="card-title"><?php echo e($post->titulo); ?></h5>                    
                    </a>
                    
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($post->created_at); ?></h6>
                    
                    <p class="card-text"><?php echo e($post->descricao); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alanf\Downloads\prog3vitor-main\resources\views/blog/index.blade.php ENDPATH**/ ?>