<?php $__env->startSection('title', 'Parte de Show do Post'); ?>

<?php $__env->startSection('content'); ?>
<h2><?php echo e($post->titulo); ?></h2>
<p><img src="<?php echo e(asset('img/' . $post->imagem)); ?>"></p>
<label>Descrição:</label>
<p><?php echo e($post->descricao); ?></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alanf\Downloads\prog3vitor-main\resources\views/blog/show.blade.php ENDPATH**/ ?>