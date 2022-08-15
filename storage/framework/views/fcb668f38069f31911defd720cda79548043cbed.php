<!DOCTYPE html>
<html class="h-full bg-gray-200">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(mix('js/manifest.js')); ?>" defer></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>" defer></script>
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
</head>

<body class="font-sans antialiased leading-none text-gray-800">

    <div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div>

</body>

</html>
<?php /**PATH C:\Users\AIDAN\OneDrive\Desktop\laravel\pingcrm-react\resources\views/app.blade.php ENDPATH**/ ?>