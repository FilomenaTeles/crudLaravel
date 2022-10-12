<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Players</a>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>-->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
                <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                <?php endif; ?>
            <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>

                </li>
            <?php endif; ?>

        </ul>
        <ul class="navbar-nav mr-auto">
            <?php if(auth()->guard()->check()): ?>
            <li class="nav-item <?php if(Request::is('players')): ?> active <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(url('players')); ?>"> Players List <span class="sr-only"> (current) </span></a>
            </li>
            <?php endif; ?>
            <?php if (Auth::user() && Auth::user()-> is_admin==1): ?>
            <li class="nav-item <?php if(Request::is('players/create')): ?> active <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(url('players/create')); ?>">Add Player</a>
            </li>
                <li class="nav-item <?php if(Request::is('players/export')): ?> active <?php endif; ?>">
                    <a class="btn btn-danger text-end" href="<?php echo e(url('players/export')); ?>">Export</a>
                </li>
                <li class="nav-item <?php if(Request::is('players/importForm')): ?> active <?php endif; ?>">
                    <a class="btn btn-light text-end" href="<?php echo e(url('players/importForm')); ?>">Import</a>
                </li>
            <?php endif; ?>
        </ul>


    </div>
</nav>

<?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/components/master/header.blade.php ENDPATH**/ ?>