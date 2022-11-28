<?php $__env->startSection('content'); ?>


                    <div class="page-header">
						<h4 class="page-title"><?php echo e(trans('liste_retirer')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('retirer')); ?></li>
						</ol>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Liste</h3>
								</div>
								<div class="table-responsive">
									<table id="datable-1" class="table card-table table-vcenter text-nowrap">
										<thead >
											<tr>
											<th>ID</th>
											<th>Etat</th>
												<th>User</th>
												<th>Montant</th>
												<th>Méthode</th>
												<th>Crée le </th>
												<?php if(auth()->guard('admin')->check()): ?>
												<th>Action</th>
												<?php endif; ?>

											</tr>
										</thead>
										<tbody>
                                            <?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td>
													<?php echo e($operation->id); ?>

												</td>	
												<td>
														<?php if($operation->etat == 1): ?>
															Confirmé
														<?php endif; ?>
														<?php if($operation->etat == -1): ?>
															Annulé
														<?php endif; ?>
														<?php if($operation->etat == 0): ?>
															Non Confirmé (en attente)
														<?php endif; ?>

												</td>
												<td>
													<a href="<?php echo e(route('user.detail',['user'=>$operation->user()['id']])); ?>">
													<?php echo e($operation->user()['name']); ?> <?php echo e($operation->user()['nom']); ?>

														
													</a>
												</td>
                                                <td><?php echo e($operation->montant); ?></td>
                                                <td><?php echo e($operation->methode); ?></td>
                                                <td><?php echo e($operation->created_at); ?></td>

												<?php if(auth()->guard('admin')->check()): ?>
													<?php if($operation->confirmed == 0 and $operation->etat == 0): ?>
                                                            <td >
                                                                <div class="table-action">  
                                                                        <a class="btn btn-outline btn-danger px-3 mb-0"  href="<?php echo e(route('operation.retirer.valider',['operation'=>$operation->id])); ?>" onclick="return confirm('etes vous sure  ?')" >
                                                                            Valider
																			<i class="fe fe-check"></i>           
                                                                        </a>
                                                                </div>
                                                            </td>

                                                            <td >
                                                                <div class="table-action">  
                                                                        <a class="btn btn-outline btn-danger px-3 mb-0"  href="<?php echo e(route('operation.retirer.annuler',['operation'=>$operation->id])); ?>" onclick="return confirm('etes vous sure  ?')" >
                                                                            Rejeter
																			<i class="fe fe-check"></i>           
                                                                        </a>
                                                                </div>
                                                            </td>
													<?php endif; ?>
												<?php endif; ?>


											</tr>                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
								<!-- table-responsive -->
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>