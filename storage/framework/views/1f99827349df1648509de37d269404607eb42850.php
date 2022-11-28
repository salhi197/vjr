<?php $__env->startSection('content'); ?>


					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('main.recharger_comtpe')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>
                    <div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><?php echo e(trans('main.recharger_comtpe')); ?></h3>
								</div>
								<div class="card-body">

                                    <form action="<?php echo e(route('operation.recharger.action.agent')); ?>" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label><?php echo e(trans('main.montant_recharge')); ?> :</label>
                                                    <select name="user" class="form-control select2 w-100" >
                                                        <option value="">Séléctionner CLient</option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->nom); ?> <?php echo e($user->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

                                                </div>
                                                
                                            </div>
                                        </div>
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label><?php echo e(trans('main.montant_recharge')); ?> :</label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label><?php echo e(trans('main.methode_recharge')); ?>:</label>
                                                        <select name="methode" class="form-control select2 w-100" >
                                                            <option value="btc">BTC</option>
                                                            <option value="payeer">Payeer</option>
                                                            <option value="usdt_trc20">USDT TRC20</option>
                                                            <option value="usdt_erc20">USDT ERC20</option>
                                                            <option value="usdt_erc20">Transfert Bancaire</option>													
                                                        </select>
                                                </div>       
                                            </div>
	    								</div>
                                        <button class="btn btn-primary btn-lg" type="submit">
                                            <?php echo e(trans('main.continuer')); ?>

                                        </button>

                                    </form>


								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">
										<?php echo e(trans('main.instruction')); ?> :
									</h3>
								</div>
							</div>
						</div>
					</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>