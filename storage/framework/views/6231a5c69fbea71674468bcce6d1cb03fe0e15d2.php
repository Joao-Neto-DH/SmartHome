<div class="acess">
    <input type="checkbox" name="acess" id="<?php echo e(Str::lower($title)); ?>" class="acess-input" checked>
    <label for="<?php echo e(Str::lower($title)); ?>" class="acess-input-text"></label>
    <div class="acess-body">
        <img src="/asset/img<?php echo e($img); ?>" class="acess-icon" alt="Acess Icon">
        <div class="acess-info">
            <h4 class="acess-title"><?php echo e($title); ?></h4>
            <p class="acess-description">Activo desde<br/><?php echo e($since); ?></p>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\web\smarthome\initial-laravel\resources\views/components/acess-menu-item.blade.php ENDPATH**/ ?>