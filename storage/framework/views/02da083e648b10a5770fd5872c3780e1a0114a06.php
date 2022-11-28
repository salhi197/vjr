<?php $__env->startSection('content'); ?>


                    <div class="page-header">
						<h4 class="page-title text-white">liste Recharger : </h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
									<form class="card-header" method="post" action="<?php echo e(route('payment.filter')); ?>">
											<div class="col-md-3">
                                                <div class="form-group overflow-hidden">
													<label>Séléctionner Interval :</label>
													<select class="form-control" name="interval">
														<option value=""> Séléctionner L'interval </option>
														<option <?php if($interval==1): ?> selected <?php endif; ?> value="1"> Entre le 1-10 </option>
														<option <?php if($interval==2): ?> selected <?php endif; ?> value="2"> Entre le 11-20 </option>
														<option <?php if($interval==3): ?> selected <?php endif; ?> value="3"> Entre le 21-31 </option>
													</select>
                                                </div>
                                            </div>

											<div class="col-md-3">
                                                <div class="form-group overflow-hidden">
													<label><?php echo e(trans('main.periode_accumulation')); ?>:</label>
													<select class="form-control select2 w-100" id="duree" >
														<option value="all">All</option>
														<option value="1" selected="selected">1 <?php echo e(trans('main.mois')); ?></option>
														<option value="3">3 <?php echo e(trans('main.mois')); ?>s</option>
														<option value="6">6 <?php echo e(trans('main.mois')); ?>s</option>
														<option value="12">12 <?php echo e(trans('main.mois')); ?>s</option>
													</select>
                                                </div>
                                            </div>


											<div class="col-md-2">
                                                <div class="form-group overflow-hidden">
													<button class="btn btn-primary btn-lg" type="submit">
														Filtrer
													</button>													
                                                </div>
											</div>
											<div class="col-md-2" >
												<div class="form-check">
													<input type="checkbox" class="form-check-input" id="checkAll">
													<label class="form-check-label" for="checkAll">séléctionner tout</label>
												</div>
											</div>


											<div class="col-md-2">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalGroupe">
													Payer Groupe
												</button>
											</div>											



									</form>

								<div class="card-body">
									<div class="table-responsive">
										<table id="datable-1" class="table  card-table table-striped table-bordered text-nowrap w-100">
											<thead >
												<tr>
													<th>ID</th>
													<th>User</th>
													<th>Montant</th>
													<th>Etat</th>
													<th>Crée le </th>
													<th>Validé le </th>
													<th>Prochain Date de Paiment</th>
													<?php if(auth()->guard('admin')->check()): ?>
													<th>Action</th>
													<?php endif; ?>

												</tr>
											</thead>
											<tbody>
												<?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td>
														<?php echo e($operation->id); ?><br>
														<input type="checkbox" id="horns"  value="<?php echo e($operation->id); ?>" class="form-check-input all operation-checkbox">
													</td>
													<td>
														<a href="<?php echo e(route('user.detail',['user'=>$operation->user()['id'] ?? ''])); ?>">
														<?php echo e($operation->user()['name'] ?? ''); ?> <?php echo e($operation->user()['nom'] ?? ''); ?>

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
													<td><?php echo e($operation->validated_date); ?></td>
													<td><?php echo e($operation->next_payment_date); ?></td>
													
													<?php if(auth()->guard('admin')->check()): ?>
																<td >
																	<div class="table-action">  
																		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo e($operation->id); ?>">
																			Payer
																		</button>

																		<div class="modal fade" id="exampleModal<?php echo e($operation->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																			<div class="modal-dialog" role="document">
																				<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title" id="exampleModalLabel">Payer</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				<div class="modal-body">
																					<form method="post" action="<?php echo e(route('payment.store',['operation'=>$operation->id])); ?>">
																						<div class="col-md-12">
																							<div class="form-group overflow-hidden">
																								<label>Entrez le pourcentage :</label>
																								<input  required name="pourcentage" class="form-control" max="100" min="10" id="montant" min="0"/>
																							</div>
																						</div>
																						<div class="col-md-4">
																							<div class="form-group overflow-hidden">
																							</div>
																						</div>

																					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																					<button type="submit" class="btn btn-primary">Enregistrer</button>

																					</form>
																				</div>
																				</div>
																			</div>
																		</div>

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



																		<div class="modal fade" id="exampleModalGroupe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																			<div class="modal-dialog" role="document">
																				<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title" id="exampleModalLabel">Payer Groupe </h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				<div class="modal-body">
																					
																						<div class="col-md-12">
																							<div class="form-group overflow-hidden">
																								<label>Entrez le pourcentage :</label>
																								<input  required name="pourcentage_groupe" id="pourcentage_groupe" required="" class="form-control" max="100" min="10" id="montant" min="0"/>
																							</div>
																						</div>
																						<div class="col-md-4">
																							<div class="form-group overflow-hidden">
																							</div>
																						</div>

																						<button class="btn btn-primary btn-lg text-white" id="payerGroupe">
																							Payer Groupe
																						</button>														

																					
																				</div>
																				</div>
																			</div>
																		</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<script>


		$("#checkAll").click(function(){
			$('input:checkbox').not(this).prop('checked', this.checked);
			var checks = $(".commande-checkbox:checked"); // returns object of checkeds.

			var hrefPayment = "/galaxy/payment/groupe?id=";
			for(var i=0; i<checks.length; i++){
				hrefPayment =hrefPayment +$(checks[i]).val()+",";
				$('#hrefPayment').attr('href',hrefPayment)
			}

		});       


	$('.operation-checkbox').change(function(){
		var checks = $(".operation-checkbox:checked"); // returns object of checkeds
		var hrefPayment = "/galaxy/payment/groupe?id=";
		for(var i=0; i<checks.length; i++){
			hrefPayment =hrefPayment +$(checks[i]).val()+",";
			$('#hrefPayment').attr('href',hrefPayment)

		}
	})

	$('#payerGroupe').on('click',function(){
		var pourcentage_groupe = $('#pourcentage_groupe').val()
		if(pourcentage_groupe.length >0){
			var checks = $(".operation-checkbox:checked"); // returns object of checkeds
			var hrefPayment = "/galaxy/payment/groupe?prc="+pourcentage_groupe+"&id=";
			for(var i=0; i<checks.length; i++){
				hrefPayment =hrefPayment +$(checks[i]).val()+",";
				$('#hrefPayment').attr('href',hrefPayment)

			}			
			window.location.href = hrefPayment;
		}		

	})
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>