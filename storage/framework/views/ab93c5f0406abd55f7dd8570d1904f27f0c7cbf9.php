<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/useriai.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
Redaguoti
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h2>Redaguoti produktą: <?php echo e($preke->pavadinimas); ?></h2>

<div class='users_row row'>

    <form action="<?php echo e(route('prekes.update', $preke->id)); ?>" enctype="multipart/form-data" method="POST">
        <?php echo e(method_field('PUT')); ?>

        <?php echo e(csrf_field()); ?>


        <div class="form-group col-md-12">
            <label for="pavadinimas">Pavadinimas:</label>
            <input type="text" class="form-control" name="pavadinimas" value="<?php echo e($preke->pavadinimas); ?>" required>

            <label for="tipas">Tipas:</label>
            <select name="tipas" class="form-control">
                <option value="apyranke"
                <?php if($preke->prekesTipas == 'apyranke'): ?>
                    selected
                <?php endif; ?>
                >Apyrankė</option>
                <option value="auskarai"
                <?php if($preke->prekesTipas == 'auskarai'): ?>
                    selected
                <?php endif; ?>
                >Auskarai</option>
            </select>

            <label for="nuotrauka">Nuotrauka:</label>
            <input type="file" name="nuotrauka" class="form-control" id="nuotrauka">
            <input type="hidden" value='<?php echo e(csrf_token()); ?>'>

            <label for="kiekis">Kiekis:</label>
            <input type="number" class="form-control" name="kiekis" value="<?php echo e($preke->kiekis); ?>">

            <label for="kaina">Kaina:</label>
            <input type="number" class="form-control" name="kaina" value="<?php echo e($preke->kaina); ?>">

            <label for="aprasymas" >Aprasymas:</label>
            <textarea name="aprasymas" class="form-control" rows="3" cols="16" style="width:100%"><?php echo e($preke->aprasymas); ?></textarea>
        </div>

            <button type="submit" class="btn btn-primary">Atnaujinti</button>

        </div>
    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.administratorMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>