

<?php $__env->startSection("title", "Login"); ?>

<?php $__env->startSection("content"); ?>
    <?php if(session("loginFailed")): ?>
        <p>
            <?php echo e(session("loginFailed", "Falha de login")); ?>

        </p>
    <?php endif; ?>
    <form action="/login" method="post">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" id="email" required placeholder="Email"><br>
        <input type="password" name="password" id="password" required placeholder="Palavra-Passe"><br>
        <input type="submit" value="Cadastrar">
        <a href="/create/account">Não tenho uma conta</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web\smarthome\initial-laravel\resources\views/login.blade.php ENDPATH**/ ?>