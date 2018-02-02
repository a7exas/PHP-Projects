<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/produktai.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
Katalogas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Prekių katalogas</h1><br>

    <div class="visos-prekes">

    <?php $__currentLoopData = $prekes->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prekiu_eile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="row produktu-eile display-flex">

            <?php $__currentLoopData = $prekiu_eile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="produktas col-md-4">

                <div class="nuotrauka">
                <a href="<?php echo e(route('katalogas.show', $preke->prekesKodas)); ?>">
                    <img src="<?php echo e(Storage::url($preke->nuotrauka)); ?>" alt='<?php echo e($preke->pavadinimas); ?>'>
                </a>
                </div>

                <div class="row trumpas-aprasas">
                    <div class="pavadinimas col-md-9">
                    <a href="<?php echo e(route('katalogas.show', $preke->prekesKodas)); ?>">
                        <h3><?php echo e($preke->pavadinimas); ?></h3>
                    </a>
                    </div>

                    <div class="kaina col-md-3">
                        <h3><?php echo e($preke->kaina); ?>€</h3>
                    </div>
                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>