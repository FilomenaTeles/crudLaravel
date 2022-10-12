<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.players.player-form-create',[
    'countries' => $countries
    ]); ?>
<?php if (isset($__componentOriginalbf527fd4766cc1230caa8151107eede2e052e1ec)): ?>
<?php $component = $__componentOriginalbf527fd4766cc1230caa8151107eede2e052e1ec; ?>
<?php unset($__componentOriginalbf527fd4766cc1230caa8151107eede2e052e1ec); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/pages/players/create.blade.php ENDPATH**/ ?>