

<?php $__env->startSection("content"); ?>
    <h1>
        Smarthome Security 
        <?php if(session("nome")): ?>
            <br>
            O nome <?php echo e(session("nome")); ?> não é válido. Por favor tenta outro
        <?php endif; ?>    
    </h1>
    <a href="#"><?php echo e(session("de")); ?></a>
    <p>
        Você não está permitido a ir a aí sem estar identificado<br>
        Se quiseres prosseguir aí deves estar bem identificado. Clique abaixo isso
    </p>
    <form action="/" method="get">
        <?php echo csrf_field(); ?>
        <input type="text" name="nome" id="nome" style="color: black" required autofocus>
        <button type="submit">Seguir adiante</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web\smarthome\initial-laravel\resources\views/test.blade.php ENDPATH**/ ?>