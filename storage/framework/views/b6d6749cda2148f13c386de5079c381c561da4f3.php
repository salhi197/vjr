<?php $__env->startSection('content'); ?>

					<div class="page-header">
                        <h4 class="page-title"><?php echo e(trans('main.liste_partenaires')); ?></h4>
                        <h4 class="page-title"><?php echo e(trans('main.sponsor')); ?> : <?php echo e(Auth::user()->parrain()['nom'] ?? ""); ?> <?php echo e(Auth::user()->parrain()['name'] ?? ""); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('partenaire')); ?></li>
						</ol>
					</div>


                    <!-- <div class="row">

                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Utilisateur</th>
                                                        <th>Date Entré</th>
                                                        <th>identité</th>
                                                        
                                                        <th>Solde Actif</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($user->id ?? ''); ?></td>
                                                            <td>
                                                                <?php if(auth()->guard('admin')->check()): ?>
                                                                    <a href="<?php echo e(route('user.detail',['user'=>$user['id']])); ?>">
                                                                        <?php echo e($user['name']); ?> <?php echo e($user['nom']); ?>

                                                                        
                                                                    </a>
                                                                <?php endif; ?>
                                                                <?php if(auth()->guard()->check()): ?>
                                                                    <a href="#">
                                                                        <?php echo e($user['name']); ?> <?php echo e($user['nom']); ?>                                                                    
                                                                    </a>
                                                                <?php endif; ?>
                                                                <br>
                                                                <a href="#">                                                                                                                                        <br>
                                                                    <?php echo e($user['email']); ?>

                                                                </a>

                                                            </td>

                                                            <td>
                                                                <?php echo e($user->created_at ?? ''); ?>

                                                            </td>
                                                            <td class="">
                                                                <?php if($user->verified == 1): ?>
                                                                    <i class="fa fa-check"></i>
                                                                <?php else: ?>
                                                                    <i class="fa fa-close"> </i>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->solde_actif ?? ''); ?>

                                                            </td>
                                                        </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                    </div> -->


                    <div class="row">
						<div class="col-lg-12">
							
							<div class="card">
								<div class="card-header">
                                    <h4 class="page-title"><?php echo e(trans('main.liste_partenaires')); ?>   : </h4>
								</div>
								<div class="card-body"> 
									<div class="panel-group1" id="accordion1">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading1">
                                                    <h4 class="panel-title1">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive<?php echo e($user->id); ?>" aria-expanded="false"><?php echo e($user->nom); ?> <?php echo e($user->name); ?> <?php echo e($user->solde_actif); ?> $  </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive<?php echo e($user->id); ?>" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body">
                                                        <h4 class="page-title">
                                                        <?php echo e(trans('main.partenaires_niveau')); ?>  </h4>
                                                            
                                                        <ul>
                                                            <?php $__currentLoopData = $user->partenaires(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partenaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                    <a href="#">
                                                                        <?php echo e($partenaire['name']); ?> <?php echo e($partenaire['nom']); ?>                                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <?php echo e($partenaire['email']); ?>

                                                                </li>
                                                                <li>
                                                                    Inscrit le : <?php echo e($partenaire->created_at ?? ''); ?>

                                                                </li>
                                                                <li>
                                                                    Solde Actif : <?php echo e($partenaire->solde_actif ?? ''); ?> $ 
                                                                </li>
                                                                <ul>
                                                                    <?php $__currentLoopData = $partenaire->partenaires(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partenaire2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li>
                                                                            <a href="#">
                                                                                <?php echo e($partenaire2['name']); ?> <?php echo e($partenaire2['nom']); ?>                                                                        
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <?php echo e($partenaire2['email']); ?>

                                                                        </li>
                                                                        <li>
                                                                        Inscrit le :<?php echo e($partenaire2->created_at ?? ''); ?>

                                                                        </li>
                                                                        <li>
                                                                            Solde Actif : <?php echo e($partenaire2->solde_actif ?? ''); ?>

                                                                        </li>                                                                   
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>