<?php $__env->startSection('styles'); ?>
    <?php echo $__env->make('shopify-app::partials.polaris_skeleton_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <div class="Polaris-SkeletonPage__Page" role="status" aria-label="Page loading">
            <div class="Polaris-SkeletonPage__Header">
                <div class="Polaris-SkeletonPage__TitleAndPrimaryAction">
                    <div class="Polaris-SkeletonPage__TitleWrapper">
                        <div class="Polaris-SkeletonPage__SkeletonTitle"></div>
                    </div>
                </div>
            </div>
            <div class="Polaris-SkeletonPage__Content">
                <div class="Polaris-Layout">
                    <div class="Polaris-Layout__Section">
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-SkeletonBodyText__SkeletonBodyTextContainer">
                                <div class="Polaris-SkeletonBodyText"></div>
                                <div class="Polaris-SkeletonBodyText"></div>
                                <div class="Polaris-SkeletonBodyText"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

    <?php if(config('shopify-app.appbridge_enabled')): ?>
        <script>
            const host = new URLSearchParams(location.search).get("host")
            utils.getSessionToken(app).then((token) => {
                window.location.href = `<?php echo $target; ?><?php echo Str::contains($target, '?') ? '&' : '?'; ?>token=${token}<?php echo e(Str::contains($target, 'host')? '' : '&host=${host}'); ?>`;
            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shopify-app::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hello/m2c2/vendor/kyon147/laravel-shopify/src/resources/views/auth/token.blade.php ENDPATH**/ ?>