<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>"> <!-- Link to your app's CSS -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo e(route('slag.index')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('slag.create')); ?>">Add Slag</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?> <!-- This is where individual page content will be injected -->
    </div>

    <footer>
        <p>© 2025 Your Company</p>
    </footer>

    <script src="<?php echo e(mix('js/app.js')); ?>"></script> <!-- Link to your app's JavaScript -->
</body>
</html>
<?php /**PATH C:\Users\hubat\Desktop\Projects\ReturnOfTheSlag\resources\views/layouts/app.blade.php ENDPATH**/ ?>