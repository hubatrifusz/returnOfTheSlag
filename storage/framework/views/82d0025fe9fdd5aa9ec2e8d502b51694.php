<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Slagok</title>
</head>
<body>
    <h1>Slagok</h1>
    <a href="<?php echo e(route('slag.create')); ?>">Új slag hozzáadása</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
                <th>Hossz</th>
                <th>Anyag</th>
                <th>Nyomásálló</th>
                <th>Csatlakozó Méret</th>
                <th>Ár</th>
                <th>Akciók</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $slagok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($slag->id); ?></td>
                    <td><?php echo e($slag->nev); ?></td>
                    <td><?php echo e($slag->hossz); ?></td>
                    <td><?php echo e($slag->anyaga); ?></td>
                    <td><?php echo e($slag->nyomasallo); ?></td>
                    <td><?php echo e($slag->csatlakozo_meret); ?></td>
                    <td><?php echo e($slag->ar); ?> Ft</td>
                    <td>
                        <a href="<?php echo e(route('slag.edit', $slag->id)); ?>">Szerkesztés</a>
                        <form action="<?php echo e(route('slag.destroy', $slag->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Törlés</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\hubat\Desktop\Projects\ReturnOfTheSlag\resources\views/slag/index.blade.php ENDPATH**/ ?>