<div class="container align-self-center pt-5 col-6">
    <h1>Show Player</h1>

    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            value="<?php echo e($player -> name); ?>"
            readonly
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
            value="<?php echo e($player -> address); ?>"
            readonly>
    </div>

    <div class="form-group">
        <label for="country">Choose a Country:</label>

        <select name="country_id" id="countrys">
            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(($country -> id) == ($player ->country_id)): ?>
                <option selected disabled><?php echo e($country -> name); ?></option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea
            id="description"
            name="description"
            class="form-control"
            placeholder="<?php echo e($player -> description); ?>"
            rows="6"
            readonly>
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
                    disabled
                    checked>
                <label for="retired1">Yes</label>
            </div>
            <div class="form-group col-2 ml-0" >
                <input
                    type="radio"
                    id="retired2"
                    name="retired"
                    value="2"
                    disabled>
                <label for="retired1">No</label>
            </div>
            <?php else: ?>
                <div class="form-group col-2 mr-0">
                    <input
                        type="radio"
                        id="retired1"
                        name="retired"
                        value="1"
                        disabled>
                    <label for="retired1">Yes</label>
                </div>
                <div class="form-group col-2 ml-0" >
                    <input
                        type="radio"
                        id="retired2"
                        name="retired"
                        value="2"
                        disabled
                        checked>
                    <label for="retired1">No</label>
                </div>
            <?php endif; ?>
        </div>

    </div>
    <a href="<?php echo e(url('players')); ?>" type="button" class="btn btn-primary mb-2">Back</a>

</div>
<?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/components/players/player-form-show.blade.php ENDPATH**/ ?>