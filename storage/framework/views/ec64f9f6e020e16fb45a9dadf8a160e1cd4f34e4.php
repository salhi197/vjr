<?php $__env->startSection('content'); ?>

<div class="row layout-top-spacing" id="cancel-row">

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <a class="btn btn-danger mb-2" href="<?php echo e(route('reglement.create')); ?>">+ Ajouter</a>

    <div class="widget-content widget-content-area br-6">

        <table class="multi-table table table-hover" style="width:100%">
        <thead class="text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>type</th>
                                                        <th>contenu</th>
                                                        <th>titre</th>
                                                        <th>ladate</th>
                                                        <th>organisme</th>
                                                        <th>secteur</th>
                                                        <th>contenu</th>                                                  
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $reglements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reglement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($reglement->id ?? ''); ?> </td>
                                                            <td><?php echo e($reglement->type ?? ''); ?> </td>
                                                            <td><?php echo e($reglement->contenu ?? ''); ?> </td>
                                                            <td><?php echo e($reglement->titre ?? ''); ?> </td>
                                                            <td><?php echo e($reglement->ladate ?? ''); ?> </td>
                                                            <td><?php echo e($reglement->organisme ?? ''); ?> </td>
                                                            <td><?php echo e($reglement->secteur ?? ''); ?> </td>
                                                            <td><?php echo e($reglement->contenu ?? ''); ?> </td>
                                                                                                                    
                                                            <td >
                                                                <div class="table-action">  
                                                                    <a class="btn btn-outline-primary btn-sm" href="<?php echo e(route('reglement.edit',['reglement'=>$reglement->id])); ?>">
                                                                        Voir
                                                                    </a>                                                                    
                                                                    <a class="btn btn-outline-danger btn-sm" href="<?php echo e(route('reglement.destroy',['reglement'=>$reglement->id])); ?>">
                                                                        Supprimer
                                                                    </a>


                                                                    

                                                                </div>
                                                            </td>
                                                        </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>


        </table>

    </div>
</div>

</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ui', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>