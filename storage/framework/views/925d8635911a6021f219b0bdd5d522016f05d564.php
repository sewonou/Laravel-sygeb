<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 15/09/2018
 * Time: 18:03
 */
?>
<!doctype html>
<html lang="fr">
<head>
    <?php echo $__env->make('layout.partials._meta', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <title>SYGEB</title>
    <?php echo $__env->make('layout.partials._stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
    <?php echo $__env->make('layout.partials._loader', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrapper">
        <?php echo $__env->make('layout.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layout.partials._asideBar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section id="content" class="seipkon-content-wrapper">
            <div class="page-content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>

            <?php echo $__env->make('layout.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </section>
        <!-- End Right Side Content -->
    </div>

    <?php echo $__env->make('layout.partials._jsfiles', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
