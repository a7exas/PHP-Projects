<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/administrator.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3>Naujausios prekės</h3>

    <div class='row' style="border-bottom-style:solid">
            <div class="id col-sm-1 invis">
                <b>ID</b>
            </div>
            <div class="pavadinimas col-sm-3">
                <b>Pavadinimas</b>
            </div>
            <div class="prekes-kodas col-md-5 invis">
                <b>Prekės kodas</b>
            </div>
            <div class="prekes-tipas col-sm-3 invis">
                <b>Tipas</b>
            </div>
        </div>

    <?php $__currentLoopData = $prekes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class='row'>
            <div class="id col-sm-1 invis">
                <?php echo e($preke->id); ?>

            </div>
            <div class="pavadinimas col-sm-3">
                <?php echo e($preke->pavadinimas); ?>

            </div>
            <div class="prekes-kodas col-md-5 invis">
                <?php echo e($preke->prekesKodas); ?>

            </div>
            <div class="prekes-tipas col-sm-3 invis">
                <?php echo e($preke->prekesTipas); ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="/prekes" class='btn btn-default'>Visos prekės</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.administratorMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>