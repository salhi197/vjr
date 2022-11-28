<?php $__env->startSection('content'); ?>

					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('liste des utilisateurs')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('users')); ?></li>
						</ol>

					</div>


                    <div class="row">

                            <div class="card-header">
                                <a class="btn btn-primary text-white" href="<?php echo e(route('user.show.create')); ?>">
                                    <i class="fa fa-plus">

                                    </i>
                                    Ajouter utilisateur
                                </a>

                            </div>
                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
    										<table id="datatable-5" class="table card-table table-striped table-bordered text-nowrap w-100">
                                                <thead class="text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Nom Penom</th>
                                                        <?php if(Auth::guard('admin')->user()->agent == 0): ?>
                                                            <th>Etat</th>
                                                        <?php endif; ?>                                                        
                                                        <th>Email</th>
                                                        <?php if(Auth::guard('admin')->user()->agent == 0): ?>
                                                        <th><?php echo e(trans('main.password')); ?></th>
                                                        
                                                        <th>telephone</th>
                                                        <th> Actif</th>

                                                        <?php endif; ?>
                                                        <th>Date Entré</th>
                                                        <?php if(Auth::guard('admin')->user()->agent == 0): ?>
                                                        <th>Action</th>
                                                        <?php endif; ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                        <td>
                                                            <?php echo e($user->id ?? ''); ?>

                                                            </td>
                                                            
                                                            <td>
                                                                <a href="<?php echo e(route('user.detail',['user'=>$user->id])); ?>">
                                                                <?php echo e($user->name ?? ''); ?>

                                                                <?php echo e($user->nom ?? ''); ?>

                                                                </a>
                                                            </td>                                                            
                                                            <?php if(Auth::guard('admin')->user()->agent == 0): ?>
                                                            <td>
                                                            <?php if($user->type == 0): ?>
                                                                <span class="badge badge-danger">Déactivé</span>
                                                            <?php else: ?>
                                                                <span class="badge badge-primary">Activé</span>
                                                            <?php endif; ?>

                                                            </td>
                                                            <?php endif; ?>
                                                            <td>
                                                                <?php echo e($user->email ?? ''); ?>                                                            
                                                            </td>
                                                            <?php if(Auth::guard('admin')->user()->agent == 0): ?>
                                                            <td>
                                                                <?php echo e($user->password_text ?? ''); ?>                                                            
                                                            </td>
                                                            
                                                            <td>
                                                                <?php echo e($user->telephone ?? ''); ?>                                                            
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->solde_actif ?? ''); ?> $
                                                            </td>

                                                            <?php endif; ?>


                                                            <td>
                                                                <?php echo e($user->created_at ?? ''); ?>

                                                            </td>
                                                            <?php if(Auth::guard('admin')->user()->agent == 0): ?>
                                                            <td >
                                                                <div class="table-action">  
                                                                    <a class="btn btn-primary text-white" href="<?php echo e(route('user.edit',['user'=>$user->id])); ?>">
                                                                        Edit
                                                                    </a>
                                                                    <a class="btn btn-danger text-white" onclick="return confirm('Etes vous sure ?')" href="<?php echo e(route('user.delete',['user'=>$user->id])); ?>">
                                                                        Supprimer
                                                                    </a>

                                                            <?php if($user->type == 0): ?>
                                                                    <a class="btn btn-success text-white" href="<?php echo e(route('user.ActiverDesactiver',['user'=>$user->id])); ?>">
                                                                        Activer
                                                                    </a>
                                                            <?php else: ?>
                                                                    <a class="btn btn-warning text-white" href="<?php echo e(route('user.ActiverDesactiver',['user'=>$user->id])); ?>">
                                                                        Désactiver
                                                                    </a>

                                                            <?php endif; ?>
                                                                    

                                                                </div>
                                                            </td>
                                                            <?php endif; ?>
                                                        </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                    </div>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>