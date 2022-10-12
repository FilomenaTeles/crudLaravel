<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.players.player-form-edit', [
    'player' => $player,
    'countries' => $countries
    ]); ?>
    <?php if (isset($__componentOriginal06c6a0cec94a3517b4b0419f5d2edfe884096897)): ?>
<?php $component = $__componentOriginal06c6a0cec94a3517b4b0419f5d2edfe884096897; ?>
<?php unset($__componentOriginal06c6a0cec94a3517b4b0419f5d2edfe884096897); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/pages/players/edit.blade.php ENDPATH**/ ?>