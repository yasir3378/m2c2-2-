<?php $__env->startSection('content'); ?>
    <!-- You are: (shop domain name) -->
    <p>You are: <?php echo e($shopDomain ?? Auth::user()->name); ?></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shopify-app::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hello/m2c2/resources/views/welcome.blade.php ENDPATH**/ ?>