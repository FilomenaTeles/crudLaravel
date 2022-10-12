<div class="container align-self-center pt-5 col-6">
    <h1>Show Player</h1>
<form method="POST" action="<?php echo e(url('players/' . $player->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            value="<?php echo e($player -> name); ?>"
            aria-describedby="nameHelp">
        <smal id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</smal>

    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input
            type="text"
            id="address"
            name="address"
            class="form-control"
            value="<?php echo e($player -> address); ?>">
    </div>

    <div class="form-group">
        <label for="country">Choose a Country:</label>

        <select name="country_id" id="countrys">
            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(($country -> id) == ($player ->country_id)): ?>
                <option selected><?php echo e($country -> name); ?></option>
            <?php endif; ?>
                <option value="<?php echo e($country ->id); ?>"><?php echo e($country -> name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea
            id="description"
            name="description"
            class="form-control"
            rows="6"><?php echo e($player -> description); ?>

        </textarea>

    </div>

    <div class="form-group">
        <label for="retired">Retired</label>
        <div class="row">
            <?php if(($player -> retired)==1): ?>
                <div class="form-group col-2 mr-0">
                    <input
                        type="radio"
                        id="retired1"
                        name="retired"
                        value="1"
                        checked>
                    <label for="retired1">Yes</label>
                </div>
                <div class="form-group col-2 ml-0" >
                    <input
                        type="radio"
                        id="retired2"
                        name="retired"
                        value="0">
                    <label for="retired1">No</label>
                </div>
            <?php else: ?>
                <div class="form-group col-2 mr-0">
                    <input
                        type="radio"
                        id="retired1"
                        name="retired"
                        value="1">
                    <label for="retired1">Yes</label>
                </div>
                <div class="form-group col-2 ml-0" >
                    <input
                        type="radio"
                        id="retired2"
                        name="retired"
                        value="0"
                        checked>
                    <label for="retired1">No</label>
                </div>
            <?php endif; ?>
        </div>

    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>

</form>
</div>
<?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/components/players/player-form-edit.blade.php ENDPATH**/ ?>