<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--IF devia estar no plyers list, dentro do componente
        pode ser colocado aqui tb-->
    <?php if(session('status')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('status')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <?php $__env->startComponent('components.players.players-list',[
    'players' => $players,
    'countries' => $countries
    ]); ?>
    <?php if (isset($__componentOriginal7b4d754d1e47828f9a7daf2fb87d49e7f6ba29dc)): ?>
<?php $component = $__componentOriginal7b4d754d1e47828f9a7daf2fb87d49e7f6ba29dc; ?>
<?php unset($__componentOriginal7b4d754d1e47828f9a7daf2fb87d49e7f6ba29dc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/pages/players/index.blade.php ENDPATH**/ ?>