<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.players.player-form-show', [
    'player' => $player,
    'countries' => $countries
]); ?>
<?php if (isset($__componentOriginalc5ee4c55436b91a1a992c4b71f6c102f5144a3e5)): ?>
<?php $component = $__componentOriginalc5ee4c55436b91a1a992c4b71f6c102f5144a3e5; ?>
<?php unset($__componentOriginalc5ee4c55436b91a1a992c4b71f6c102f5144a3e5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/pages/players/show.blade.php ENDPATH**/ ?>