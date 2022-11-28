<?php $__env->startSection('content'); ?>


<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('transferer_comtpe')); ?></h4>
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
									<h3 class="card-title">TRANSFERT</h3>
								</div>
								<div class="card-body">

                                    <form action="<?php echo e(route('operation.recharger.action')); ?>" method="post">
    									<div class="row">
                                            <div class="col-md-12">
                                                <h4>
                                                    Vous Ne Pouvez pas effectuer des transferts
                                                </h4>
                                            </div>
	    								</div>
                                        <button class="btn btn-primary btn-lg" onclick="history.back()">
                                            Retour
                                        </button>

                                    </form>


								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Instruction :</h3>
								</div>
							</div>
						</div>
					</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>