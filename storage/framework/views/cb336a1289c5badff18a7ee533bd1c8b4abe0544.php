<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/preke.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
Prekės
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h3>Prekių sąrašas</h3>

    <div class='row' style="border-bottom-style:solid">
            <div class="id col-sm-1">
                <b>ID</b>
            </div>
            <div class="pavadinimas col-sm-3">
                <b>Pavadinimas</b>
            </div>
            <div class="prekes-kodas col-md-4">
                <b>Prekės kodas</b>
            </div>
            <div class="prekes-tipas col-sm-2">
                <b>Tipas</b>
            </div>
            <div class="prekes-edit col-sm-2">
                <b>Taisyti</b>
            </div>
        </div>

    <?php $__currentLoopData = $prekes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class='row'>
            <div class="id col-sm-1">
                <?php echo e($preke->id); ?>

            </div>
            <div class="pavadinimas col-sm-3">
                <?php echo e($preke->pavadinimas); ?>

            </div>
            <div class="prekes-kodas col-md-4">
                <?php echo e($preke->prekesKodas); ?>

            </div>
            <div class="prekes-tipas col-sm-2">
                <?php echo e($preke->prekesTipas); ?>

            </div>
            <div class="prekes-edit col-sm-2">
                <div class='col-sm-6'>
                    <a href="<?php echo e(route('prekes.edit', $preke->id)); ?>" class='btn btn-default'>Keisti</a>
                </div>
                <div class='col-sm-6'>
                    <form action="<?php echo e(route('prekes.destroy', $preke->id)); ?>" method="POST">
                        <?php echo e(method_field('DELETE')); ?>

                        <?php echo e(csrf_field()); ?>

                        <button class="btn btn-default">Trinti</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.administratorMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>