<?php $__env->startSection('title', 'Usuários'); ?>
<?php $__env->startSection('h1', 'Página de Usuários'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de usuários</p>

        <a class="btn btn-primary" href="<?php echo e(route('usuarios.inserir')); ?>" role="button">Cadastrar usuário</a>

    </div>
</div>

<div class="row">
    <table class="table">
        <tr>
            <th>ID</th>
            <th width="50%">Nome</th>
            <th>E-mail</th>
        </tr>

        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($usuario->id); ?></td>
            <td><?php echo e($usuario->nome); ?></td>
            <td><?php echo e($usuario->email); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alanf\Downloads\prog3vitor-main\resources\views/usuarios/index.blade.php ENDPATH**/ ?>