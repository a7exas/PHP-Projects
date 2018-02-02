<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/useriai.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
Vartotojai
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h2>Vartotojų redagavimas</h2>

<div class='users_row row users_row_border'>

    <div class='users_id col-xs-1'>
        <b>ID</b>
    </div>
    <div class='users_name col-xs-3'>
        <b>Vardas</b>
    </div>
    <div class='users_email col-xs-3'>
        <b>El. paštas</b>
    </div>
    <div class='users_privilege col-xs-3'>
        <b>Privilegija</b>
    </div>
    <div class='users_edit col-xs-2'>
        <b>Redagavimas</b>
    </div>
</div>

<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class='users_row row is-flex'>

        <div class='users_id col-xs-1 light_border'>
            <?php echo e($user->id); ?>

        </div>
        <div class='users_name col-xs-3 light_border'>
            <?php echo e($user->name); ?>

        </div>
        <div class='users_email col-xs-3 light_border'>
            <?php echo e($user->email); ?>

        </div>
        <div class='users_privilege col-xs-3 light_border'>
            <?php if(isset($user->privilegija )): ?>
                <?php echo e($user->privilegija); ?>

            <?php else: ?>
                Member
            <?php endif; ?>
        </div>

        <div class='users_edit col-xs-2 light_border'>
            <div class='col-sm-6'>
                <a href="<?php echo e(route('vartotojai.edit', $user->id)); ?>" class='btn btn-default'>Keisti</a>
            </div>
            <div class='col-sm-6'>
                <form action="<?php echo e(route('vartotojai.destroy', $user->id)); ?>" method="POST">
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