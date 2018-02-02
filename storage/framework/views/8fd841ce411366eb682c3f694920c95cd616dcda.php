<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/useriai.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
Redaguoti
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h2>Redaguoti vartotoją: <?php echo e($user->name); ?></h2>

<div class='users_row row'>

    <form action="<?php echo e(route('vartotojai.update', $user->id)); ?>" method="POST">
        <?php echo e(method_field('PUT')); ?>

        <?php echo e(csrf_field()); ?>


        <div class="form-group">

            <div class='vardas'>
            <label for="1">Vardas: </label>
            <input type='text' id='1' name='name' class="form-control" value='<?php echo e($user->name); ?>'></input>
            </div>

            <div class='elpastas'>
            <label for="2">El. Paštas: </label>
            <input type='text' id='2' name='email' class="form-control" value='<?php echo e($user->email); ?>'></input>
            </div>

            <div class='privilegijos'>
            <label for="3">Privilegijos: </label>
            <select id='3' name="privilege" class="form-control">

                <option value="superUser"
                <?php if( $user->privilegija == 'superUser'): ?>
                    selected
                <?php endif; ?>
                >Super User</option>

                <option value="admin" 
                <?php if( $user->privilegija == 'admin'): ?>
                    selected
                <?php endif; ?>
                >Admin</option>

                <option value="member"
                 <?php if( $user->privilegija == 'member' || $user->privilegija == ''): ?>
                    selected
                <?php endif; ?>>Member</option>
            </select>

            Dabartinė privilegija: 
            <?php if( $user->privilegija == 'superUser'): ?>
                Super User
            <?php elseif( $user->privilegija  == 'admin'): ?>
                Admin
            <?php else: ?>
                Member
            <?php endif; ?>

            </div>

            <button type="submit" class="btn btn-primary">Atnaujinti</button>

        </div>
    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.administratorMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>