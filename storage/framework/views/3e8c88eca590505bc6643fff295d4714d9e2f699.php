<?php $__env->startSection('content'); ?>


                    <div class="page-header">
						<h4 class="page-title"><?php echo e(trans('liste des activations')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Liste Rechargements : </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="datable-1" class="table  card-table table-striped table-bordered text-nowrap w-100">
											<thead >
												<tr>
													<th>ID</th>
													<th>User</th>
													<th>Montant</th>
													<th>Payé</th>
													<th>Etat</th>
													<th>Crée le </th>

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
													<td>
														<?php echo e($operation->created_at->format('m')-date('m')); ?>/12 <br>	
														Prochain Payment : <?php echo e($operation->next_payment_date); ?>

													</td>
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