<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php echo $__env->yieldContent('scripts'); ?>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
<div id="app">
    <?php $__env->startComponent('components.master.header'); ?>
    <?php if (isset($__componentOriginal0d35aa065d799d70f79966ebb940119c5cba865b)): ?>
<?php $component = $__componentOriginal0d35aa065d799d70f79966ebb940119c5cba865b; ?>
<?php unset($__componentOriginal0d35aa065d799d70f79966ebb940119c5cba865b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php $__env->startComponent('components.master.footer'); ?>
    <?php if (isset($__componentOriginal77f92c9ac6ce4795112a9a82078f2a603e10b163)): ?>
<?php $component = $__componentOriginal77f92c9ac6ce4795112a9a82078f2a603e10b163; ?>
<?php unset($__componentOriginal77f92c9ac6ce4795112a9a82078f2a603e10b163); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

</div>


</body>
</html>
<?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/components/master/main.blade.php ENDPATH**/ ?>