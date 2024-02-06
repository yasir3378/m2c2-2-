<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <base target="_top">

        <title>Redirecting...</title>

        <script src="https://unpkg.com/@shopify/app-bridge<?php echo $appBridgeVersion; ?>"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                var redirectUrl = "<?php echo $authUrl; ?>";
                var normalizedLink;
                if (window.top === window.self) {
                    // If the current window is the 'parent', change the URL by setting location.href
                    window.top.location.href = redirectUrl;
                } else {
                    // If the current window is the 'child', change the parent's URL with postMessage
                    normalizedLink = document.createElement('a');
                    normalizedLink.href = redirectUrl;

                    var AppBridge = window['app-bridge'];
                    var createApp = AppBridge.default;
                    var Redirect = AppBridge.actions.Redirect;
                    var app = createApp({
                        apiKey: "<?php echo e($apiKey); ?>",
                        host: "<?php echo e($host); ?>",
                    });

                    var redirect = Redirect.create(app);
                    redirect.dispatch(Redirect.Action.REMOTE, normalizedLink.href);
                }
            });
        </script>
    </head>
    <body>
    </body>
</html>
<?php /**PATH /Users/hello/m2c2/vendor/kyon147/laravel-shopify/src/resources/views/auth/fullpage_redirect.blade.php ENDPATH**/ ?>