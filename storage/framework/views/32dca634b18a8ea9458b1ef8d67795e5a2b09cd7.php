<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Country</th>
        <th scope="col">Address</th>
        <th scope="col">Retired</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>

        <th scope="row"> <?php echo e($player->id); ?> </th>
        <td>
            <?php if($player->image): ?>
                <img class="w-100 img-responsive" src="<?php echo e(asset('storage/'.$player->image)); ?>" alt="" title=""></a>
            <?php else: ?>
                <p>
                    No Image
                </p>
            <?php endif; ?>
        </td>

        <th scope="row"><?php echo e($player -> id); ?></th>
        <td><?php echo e($player -> name); ?></td>

        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(($country -> id) == ($player ->country_id)): ?>
                <td><?php echo e($country -> name); ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <td><?php echo e($player -> address); ?></td>
        <?php if($player -> retired==1): ?>
        <td><i class="bi bi-emoji-frown text-danger"></i></td>

        <?php else: ?>
        <td><i class="bi bi-emoji-laughing text-primary"></i></td>
        <?php endif; ?>
        <td>
            <?php if(auth()->guard()->check()): ?>
            <div class="pr-1">
                <a href="<?php echo e(url('players/' . $player->id)); ?>" type="button"class="btn btn-success">Show</a>
            </div>
            <?php endif; ?>
            <?php if (Auth::user() && Auth::user()-> is_admin==1): ?>
            <div class="pr-1">
                <a href="<?php echo e(url('players/' . $player->id. '/edit')); ?>" type="button"class="btn btn-primary">Edit</a>
            </div>
            <form action="<?php echo e(url('players/' . $player->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <?php endif; ?>

        </td>


    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>

<?php echo e($players -> links()); ?>

<?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/components/players/players-list.blade.php ENDPATH**/ ?>