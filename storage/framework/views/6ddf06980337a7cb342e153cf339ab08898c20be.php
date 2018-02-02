<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/preke.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
<?php echo e($preke->pavadinimas); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class='row'>
        <div class="nuotrauka col-lg-8">
            <img src='<?php echo e(Storage::url($preke->nuotrauka)); ?>' alt='<?php echo e($preke->pavadinimas); ?>' class='main-nuotrauka'>
        </div>

        <div class='col-md-4'>
            <h3><?php echo e($preke->pavadinimas); ?></h3>
            <div class="row mini-aprasymas">
                <div class='mini-kaire col-sm-8'>
                    <p class='kaina'><?php echo e($preke->kaina); ?>€</p>
                    <p>Sandelyje: 
                        <?php if($preke->kiekis < 1): ?>
                            <font color='red'>Šiuo metu neturime</font>
                        <?php else: ?>
                            <?php echo e($preke->kiekis); ?>

                        <?php endif; ?></p>
                </div>
                <div class='mini-desine col-sm-4'>
                    <p>Like</p>
                    <p>Į krepšelį</p>
                </div>
            </div>
            <div class='ismatavimai'>
                <p>Išmatavimai:</p>
            </div>
        </div>
    </div>

    <h4>Aprašymas</h4>
    <div class="main-aprasymas">
        <?php echo e($preke->aprasymas); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>