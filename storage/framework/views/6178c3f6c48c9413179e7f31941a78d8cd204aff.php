<?php $__env->startSection('title'); ?>
Sukurti preke
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form method="post" action="<?php echo e(route('sukurti.store')); ?>" method="POST" id="myForm">
<?php echo e(method_field('POST')); ?>

<?php echo e(csrf_field()); ?>


<div class="form-group col-md-12">
    <label for="pavadinimas">Pavadinimas:</label>
    <input type="text" class="form-control" name="pavadinimas" value="">
</div>

<div class="form-group col-md-12">
    <label for="kodas">Prekės kodas:</label>
    <input type="text" class="form-control" name="kodas" value="">
</div>

<div class="form-group col-md-12">
    <label for="tipas">Tipas:</label>
    <select name="tipas" class="form-control">
        <option value="apyranke">Apyrankė</option>
    </select>
</div>

<div class="form-group col-md-12">
    <label for="nuotrauka">Nuotrauka:</label>
    <input type="file" name="nuotrauka" class="form-control" id="nuotrauka">
</div>

<div class="form-group col-md-12">
    <label for="kiekis">Kiekis:</label>
    <input type="number" class="form-control" name="kiekis" value="0">
</div>

<div class="form-group col-md-12">
    <label for="kaina">Kaina:</label>
    <input type="number" class="form-control" name="kaina" value="0">
</div>

<div class="form-group col-md-12">
    <label for="aprasymas" >Aprasymas:</label>
    <textarea name="aprasymas" class="form-control" rows="3" cols="16" style="width:100%"></textarea>
</div>

<div class=text-right>
    <button class="btn btn-primary">Įkelti produktą</button>
</div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.administratorMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>