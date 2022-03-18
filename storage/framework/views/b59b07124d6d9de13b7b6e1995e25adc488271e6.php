

<?php $__env->startSection('title', 'SmartHome'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
        <p>estou autenticado</p>
        <h1><?php echo e(session("user")); ?></h1>
        <a href="/logout">Sair</a>
    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
        <p>não estás autenticado<br>Para autenticar <a href="/login">clique aqui</a></p>
    <?php endif; ?>
    
    <div class="board-header" style="margin-bottom: 20px">
        <h1>Casa</h1>
        <button class="btn">Settings</button>
    </div>
    <div class="board-column">
        <div class="board-row">
            <section class="board-body">
                <div class="board-header">
                    <h2 class="h6">Camera</h2>
                    <div class="camera">
                        <button class="camera-room active">C1</button>
                        <button class="camera-room">C2</button>
                        <button class="camera-room">C3</button>
                        <button class="camera-room">C4</button>
                    </div>
                    <button class="btn">
                        <img src="/asset/img/more-icon.svg" alt="more icon">
                    </button>
                </div>
                <div class="camera-view">
                    <div class="camera-view-header board-header">
                        <div class="datetime-camera">
                            <div class="date">
                                24/02/2022
                            </div>
                            <div class="time">
                                11:46
                            </div>
                        </div>
                        <div class="camera-recording board-header" style="column-gap: 0">
                            <div class="circ circ-1">
                                <div class="circ circ-2">
                                    <div class="circ circ-3">
                                    </div>
                                </div>
                            </div>
                            Gravando
                        </div>
                    </div>
                    <img src="/asset/img/room.svg" alt="Sample camera view" class="camera-video">
                </div>
            </section>
            
            <div class="board-column">
                
                <?php if (isset($component)) { $__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GraphicBoard::class, ['title' => 'Consumo por quarto'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('graphic-board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GraphicBoard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div class="consumo board-row">
                        <div class="consumo-compartimento">
                            <div class="chart-pane">
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                            </div>
                            <div class="chart-value">
                                <span class="value">304.5</span>
                                <span class="unity">Watts</span>
                            </div>
                        </div>
                        <div class="consumo-compartimento-descricao">
                            <ul>
                                <li><span class="room">Sala de Estar</span><span class="percent">4.9%</span></li>
                                <li><span class="room">Estudio</span><span class="percent">6.1%</span></li>
                                <li><span class="room">Quarto do João</span><span class="percent">20%</span></li>
                                <li><span class="room">Garagem</span><span class="percent">27%</span></li>
                                <li><span class="room">Cozinha</span><span class="percent">42%</span></li>
                            </ul>
                        </div>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9)): ?>
<?php $component = $__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9; ?>
<?php unset($__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9); ?>
<?php endif; ?>

                <div class="board-row">
                    
                    <?php if (isset($component)) { $__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GraphicBoard::class, ['title' => 'Consumo por dia'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('graphic-board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GraphicBoard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <div class="consumo consumo-diario">
                            <div class="chart-pane">
                                <div class="consumo-chart">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Seg</span>
                                </div>
                                <div class="consumo-chart active">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Ter</span>
                                </div>
                                <div class="consumo-chart active">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Qua</span>
                                </div>
                                <div class="consumo-chart active">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Qui</span>
                                </div>
                                <div class="consumo-chart">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Sex</span>
                                </div>
                                <div class="consumo-chart active">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Sab</span>
                                </div>
                                <div class="consumo-chart">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Dom</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-see">Ver Mais</a>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9)): ?>
<?php $component = $__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9; ?>
<?php unset($__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9); ?>
<?php endif; ?>

                    
                    <?php if (isset($component)) { $__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GraphicBoard::class, ['title' => 'Limite de dispositivos'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('graphic-board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GraphicBoard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <div class="limit-device">
                            <div class="limit-device-chart">
                                
                                <div class="limit-chart">
                                </div>
                                <div class="limit-chart">
                                </div>
                                <div class="limit-chart">
                                </div>
                                <div class="limit-chart">
                                </div>
                                

                                <div class="limit-device-count">
                                    <div class="limit-device-count-value">
                                        10
                                    </div>
                                </div>
                                <div class="device-online">
                                    5
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-see">Ver Mais</a>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9)): ?>
<?php $component = $__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9; ?>
<?php unset($__componentOriginal7828160d9ce2118bb2a1166e9db877005f7953f9); ?>
<?php endif; ?>
                </div>
            </div>
            
        </div>

        
        <div class="board-row">
            <section class="board-body" style="width: 100%;">
                <div class="board-header">
                    <h2 class="h6">Estatus por Unidade</h2>
                    <button class="btn">
                        <img src="/asset/img/more-icon.svg" alt="more icon">
                    </button>
                </div>
                <ul class="status-bar">
                    <?php if (isset($component)) { $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\StatusBar::class, ['place' => 'Sala de Estar','value' => '745','unity' => 'W','grow' => '&DownArrow;'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\StatusBar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191)): ?>
<?php $component = $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191; ?>
<?php unset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191); ?>
<?php endif; ?>
                    <li class="divider"></li>
                    <?php if (isset($component)) { $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\StatusBar::class, ['place' => 'Fora','value' => '20.0','unity' => 'ºC','grow' => '&UpArrow;'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\StatusBar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191)): ?>
<?php $component = $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191; ?>
<?php unset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191); ?>
<?php endif; ?>
                    <li class="divider"></li>
                    <?php if (isset($component)) { $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\StatusBar::class, ['place' => 'Dentro','value' => '15.3','unity' => 'ºC','grow' => '&UpArrow;'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\StatusBar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191)): ?>
<?php $component = $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191; ?>
<?php unset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191); ?>
<?php endif; ?>
                    <li class="divider"></li>
                    <?php if (isset($component)) { $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\StatusBar::class, ['place' => 'Água','value' => '495','unity' => 'CF','grow' => '&DownArrow;'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\StatusBar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191)): ?>
<?php $component = $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191; ?>
<?php unset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191); ?>
<?php endif; ?>
                    <li class="divider"></li>
                    <?php if (isset($component)) { $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\StatusBar::class, ['place' => 'Internet','value' => '45.3','unity' => 'MBPS','grow' => '&UpArrow;'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\StatusBar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191)): ?>
<?php $component = $__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191; ?>
<?php unset($__componentOriginaled0ab8aae3b819d95a9e158e9e9cd3e8e3bfb191); ?>
<?php endif; ?>
                </ul>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('quick-acess'); ?>
    <input type="checkbox" name="hide-acess" id="hide-acess">

    <div class="separator">
        <label for="hide-acess" class="btn">
        </label>
    </div>

    <div class="main-quick">
        <div class="add-quick-acess">
            <button type="button" class="btn">+</button>
        </div>
        <div class="quick-acess">
            <?php if (isset($component)) { $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcessMenuItem::class, ['title' => 'Outlet1','img' => '/home-icon.svg','since' => '09 de Março de 2022'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('acess-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AcessMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978)): ?>
<?php $component = $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978; ?>
<?php unset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcessMenuItem::class, ['title' => 'Outlet2','img' => '/home-icon.svg','since' => '09 de Março de 2022'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('acess-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AcessMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978)): ?>
<?php $component = $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978; ?>
<?php unset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcessMenuItem::class, ['title' => 'Outlet3','img' => '/home-icon.svg','since' => '09 de Março de 2022'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('acess-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AcessMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978)): ?>
<?php $component = $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978; ?>
<?php unset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcessMenuItem::class, ['title' => 'Outlet4','img' => '/home-icon.svg','since' => '09 de Março de 2022'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('acess-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AcessMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978)): ?>
<?php $component = $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978; ?>
<?php unset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcessMenuItem::class, ['title' => 'Outlet5','img' => '/home-icon.svg','since' => '09 de Março de 2022'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('acess-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AcessMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978)): ?>
<?php $component = $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978; ?>
<?php unset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AcessMenuItem::class, ['title' => 'Outlet6','img' => '/home-icon.svg','since' => '09 de Março de 2022'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('acess-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AcessMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978)): ?>
<?php $component = $__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978; ?>
<?php unset($__componentOriginal372f4759bf68c66bb9e3e1afdfa17db7693f1978); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web\smarthome\initial-laravel\resources\views/overview.blade.php ENDPATH**/ ?>