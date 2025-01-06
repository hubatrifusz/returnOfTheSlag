<!-- resources/views/slag/edit.blade.php -->

 <!-- Adjust this based on your layout -->

<?php $__env->startSection('content'); ?>
    <h1>Slag Edit</h1>

    <form action="<?php echo e(route('slag.update', $slag->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label for="nev">Name:</label>
            <input type="text" id="nev" name="nev" value="<?php echo e(old('nev', $slag->nev)); ?>">
        </div>

        <div>
            <label for="hossz">Length:</label>
            <input type="text" id="hossz" name="hossz" value="<?php echo e(old('hossz', $slag->hossz)); ?>">
        </div>

        <div>
            <label for="anyaga">Material:</label>
            <input type="text" id="anyaga" name="anyaga" value="<?php echo e(old('anyaga', $slag->anyaga)); ?>">
        </div>

        <div>
            <label for="nyomasallo">Pressure:</label>
            <input type="text" id="nyomasallo" name="nyomasallo" value="<?php echo e(old('nyomasallo', $slag->nyomasallo)); ?>">
        </div>

        <div>
            <label for="csatlakozo_meret">Connector Size:</label>
            <input type="text" id="csatlakozo_meret" name="csatlakozo_meret" value="<?php echo e(old('csatlakozo_meret', $slag->csatlakozo_meret)); ?>">
        </div>

        <div>
            <label for="ar">Price:</label>
            <input type="number" id="ar" name="ar" value="<?php echo e(old('ar', $slag->ar)); ?>">
        </div>

        <div>
            <label for="kep">Image URL:</label>
            <input type="text" id="kep" name="kep" value="<?php echo e(old('kep', $slag->kep)); ?>">
        </div>

        <button type="submit">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hubat\Desktop\Projects\ReturnOfTheSlag\resources\views/slag/edit.blade.php ENDPATH**/ ?>