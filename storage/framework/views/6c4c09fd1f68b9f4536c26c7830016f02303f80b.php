<?php $__env->startSection('content'); ?>


                    <div class="page-header">
						<h4 class="page-title"><?php echo e(trans('main.liste_rechargement')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<form class="card-header" method="post" action="<?php echo e(route('operation.filter')); ?>">
									<div class="col-md-3">
										<div class="form-group overflow-hidden">
											<label>Date Début :</label>
											<input type="date" class="form-control" name="date_debut" />
										</div>
									</div>


									<div class="col-md-3">
										<div class="form-group overflow-hidden">
											<label>Date Fin :</label>
											<input type="date" class="form-control" name="date_fin"  />
										</div>
									</div>

									<div class="col-md-3">
										<button class="btn btn-primary">Filter</button>
									</div>									

								</form>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><?php echo e(trans('main.liste_rechargement')); ?> : </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="datable-1" class="table  card-table table-striped table-bordered text-nowrap w-100">
											<thead >
												<tr>
													<th>ID</th>
													<th><?php echo e(trans('main.user')); ?></th>
													<th><?php echo e(trans('main.montant')); ?></th>
													<th><?php echo e(trans('main.etat')); ?></th>													
													<th><?php echo e(trans('main.created_at')); ?></th>
													<th><?php echo e(trans('main.certificat')); ?></th>
													<?php if(auth()->guard('admin')->check()): ?>
													<th>Action</th>
													<?php endif; ?>
												</tr>
											</thead>
											<tbody>
												<?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><?php echo e($operation->id); ?></td>
													<td>
														<a href="<?php echo e(route('user.detail',['user'=>$operation->user()['id'] ?? ''])); ?>">
															<?php echo e($operation->user()['name'] ?? ''); ?>

														</a>
													</td>
													<td class="text-center"><?php echo e($operation->montant); ?> $ </td>
													<?php if($operation->etat == 1): ?>
													<td>
														Confirmé
													</td>
													<?php endif; ?>
													<?php if($operation->etat == -1): ?>
													<td >
														Annulé
													</td>
													<?php endif; ?>
													
													<?php if($operation->etat == 0): ?>
													<td >
														Non Confirmé (en attente)
													</td>
													<?php endif; ?>
													<td><?php echo e($operation->created_at); ?></td>
													<td>
														<a href="<?php echo e(route('operation.certificat',['operation'=>$operation])); ?>" class="btn btn-primary">
															Télécharger
														</a>
													</td>
													<?php if(auth()->guard('admin')->check()): ?>
																<td >
																	<div class="table-action">  
																			<?php if($operation->confirmed == 0 and $operation->etat == 0): ?>
																				<a class="btn btn-outline btn-danger px-3 mb-0" 
																				href="<?php echo e(route('operation.recharger.valider',['operation'=>$operation->id])); ?>"
																				onclick="return confirm('etes vous sure  ?')" >
																					<i class="fe fe-check"></i>																				
																				</a>
																			<?php endif; ?>

																			<a class="btn btn-outline btn-danger px-3 mb-0" 
																			href="<?php echo e(route('operation.recharger.annuler',['operation'=>$operation->id])); ?>"
																			onclick="return confirm('etes vous sure  ?')" >
																				<i class="fe fe-trash"></i>
																				
																			</a>

																	</div>
																</td>

													<?php endif; ?>


												</tr>                                            
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</tbody>
										</table>
									</div>

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