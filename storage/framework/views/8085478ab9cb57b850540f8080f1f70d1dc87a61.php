<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

    <header class="p-3 bg-dark text-white mb-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?php echo e(route('home')); ?>" class="nav-link px-2 <?php if($pagina == 'home'): ?> text-secondary <?php else: ?> text-white <?php endif; ?>">Inicial</a></li>
          <li><a href="<?php echo e(route('produtos')); ?>" class="nav-link px-2 <?php if($pagina == 'produtos'): ?> text-secondary <?php else: ?> text-white <?php endif; ?>">Produtos</a></li>
          
          <li><a href="<?php echo e(route('recados')); ?>" class="nav-link px-2 <?php if($pagina == 'recados'): ?> text-secondary <?php else: ?> text-white <?php endif; ?>">Recados</a></li>
          <li><a href="/usuarios" class="nav-link px-2 <?php if($pagina == 'usuarios'): ?> text-secondary <?php else: ?> text-white <?php endif; ?>">Usuários</a></li>
          <li><a href="<?php echo e(route('blog')); ?>" class="nav-link px-2 <?php if($pagina == 'blog'): ?> text-secondary <?php else: ?> text-white <?php endif; ?>">Blog</a></li>
          </ul>

        <div class="text-end">
          <?php if(session('usuario')): ?>
            Olá, <?php echo e(session('usuario.nome')); ?>!
            <a href="<?php echo e(route('logout')); ?>" role="button" class="btn btn-outline-danger">Sair</a>
          <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" role="button" class="btn btn-outline-light me-2">Login</a>
            <a href="<?php echo e(route('usuarios.inserir')); ?>" role="button" class="btn btn-warning">Cadastro</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </header>

    <div class="container">
        <div class="row">
            <h1><?php echo $__env->yieldContent('h1'); ?></h1>
            <hr>
        </div>

        <!-- Conteúdo -->
        <?php echo $__env->yieldContent('content'); ?>

    </div>
</body>
</html>
<?php /**PATH C:\Users\alanf\Downloads\prog3vitor-main\resources\views/templates/base.blade.php ENDPATH**/ ?>