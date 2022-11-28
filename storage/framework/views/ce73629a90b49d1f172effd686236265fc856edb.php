<?php $__env->startSection('content'); ?>


<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('main.transferer_comtpe')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->



                    <div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><?php echo e(trans('main.compte_compte')); ?></h3>
								</div>
								<div class="card-body">

									<?php if($countOperations>0): ?>
									<div class="row">
										<div class="col-md-12">
											<h4>
												Vous Avez Déja une demende de retrait
											</h4>
										</div>
									</div>


									<?php endif; ?>
									<?php if(Auth::user()->solde_retrait == 0): ?>
									<div class="row">
										<div class="col-md-12">
											<div class="alert alert-success" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<?php echo e(trans('main.solde_zero')); ?>

											</div>
											
										</div>
									</div>
									<?php endif; ?>

									<?php if(Auth::user()->solde_retrait > 0 and $countOperations==0): ?>
                                    <form action="<?php echo e(route('operation.transferer.action')); ?>" method="post" id="transfer_form">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group d-none">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="identifiant"  value="email" checked="true"> <span class="custom-control-label">Email</span>
												</label>													

                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-group ">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="identifiant" value="telephone" checked=""> <span class="custom-control-label">Téléphone</span>
												</label>													

                                                </div>
                                            </div> -->

	    								</div>


										<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group overflow-hidden">
                                                    <label>Email:</label>
                                                    <input  required name="email_or_telephone" class="form-control" id="identifiant" min="0"/>
                                                </div>
                                            </div>

	    								</div>

    									<!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label> Entrez le montant :</label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>

	    								</div> -->
    									<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group overflow-hidden">
                                                    <label>Motif ( optional ) :</label>
													<textarea class="form-control">

													</textarea>
                                                    <!-- <input  required name="motif" class="form-control" min="500" id="motif" min="0"/> -->
                                                </div>
                                            </div>
	    								</div>


    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label><?php echo e(trans('main.montant_transfert')); ?> :
													</label>
													<i class="fa fa-cash"></i>
                                                    <input  type="number" required name="montant" class="form-control" min="0" placeholder="000.000" id="montant" min="0"/>
													<span>
														<?php echo e(trans('main.max_autorise')); ?> : <?php echo e(Auth::user()->solde_retrait ?? ''); ?> $ 
													</span>
                                                </div>
                                            </div>
	    								</div>
										<input type="button" class="btn btn-primary btn-block" value="Confirmer" id="confirm">
                                    </form>
									<?php endif; ?>


								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Instructions :  </h3>
								</div>
								<div class="card-header">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/S7F4zFwjqPs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>									
								</div>

							</div>
						</div>
					</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
$( document ).ready(function() {
		$("#confirm").on("click", function(e) {
		swal({
			title: "Etes Vous Sure ?",
			text: "Confirmer La demande de transfert ",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: '#DD6B55',
			confirmButtonText: 'Oui',
			cancelButtonText: "Annuler",
			closeOnConfirm: false,
			closeOnCancel: false		
		},
		function(isConfirm){
			if (isConfirm){
				console.log(document.getElementById('transfer_form'))
				document.getElementById('transfer_form').submit();
				swal.close()
					
			 } else {
			   swal("Cancelled", "Your imaginary file is safe :)", "error");
				  e.preventDefault();
			 }
		});		 
	});
})



</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>