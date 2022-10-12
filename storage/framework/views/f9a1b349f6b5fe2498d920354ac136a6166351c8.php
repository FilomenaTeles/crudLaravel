
<div class="container pt-3">
<form method="POST" action="<?php echo e(url('players/import')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>   <!--Metodo de segurança para envio de forms-->
    <div class="form-group">
        <label for="import-form">File</label>
        <input
            type="file"
            id="import-form"
            name="import-form"
            autocomplete="import-form"
            class="form-control
            <?php $__errorArgs = ['import-form'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            value= "<?php echo e(old('import-form')); ?>"
            required>
        <?php $__errorArgs = ['import-form'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?> </strong>
        </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <button type="submit" class="btn btn-primary mb-2">Submit</button>

</form>
</div>
<?php /**PATH /Users/Filomena/Desktop/Laravel/crud/resources/views/components/players/player-form-import.blade.php ENDPATH**/ ?>