<?php $__env->startSection('content'); ?>


					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('dashboard')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">GalaxyApp</a></li>
							<li class="breadcrumb-item active" aria-current="page">Acceuil</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->


                    <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="row">
									<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-3">Total des investisseurs : </h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#564ec1">
												<div class="chart-circle-value text-center "><h6 class="mb-0"></h6></div>
											</div>
											<h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark"><?php echo e($allUsers); ?></h2>
											
										</div>
									</div>
									<div class="col-xl-3 col-lg-6  col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-3">
											Total de Montant Investés
											</h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#04cad0">
												<div class="chart-circle-value text-center "><h6 class="mb-0"></h6></div>
											</div>
											<h2 class="mb-1 mt-3 display-4 font-weight-semibold text-dark"><?php echo e($sumSoldeActif); ?> $ </h2>
											
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-3"> 
												Total Des retraits
											</h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#f5334f">
												<div class="chart-circle-value text-center "><h6 class="mb-0"></h6></div>
											</div>
											<h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark"><?php echo e($sumSoldeRet); ?> $ </h2>
											<p class="mb-3 text-muted"> </p>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6  col-sm-6">
										<div class="card-body text-center">
											<h6 class="mb-3">Total Des Rechargement</h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#f7b731">
												<div class="chart-circle-value text-center "><h6 class="mb-0"></h6></div>
											</div>
											<h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark"><?php echo e($countUsersOfThisMonth); ?></h2>
											<p class="mb-3 text-muted"> For Last month</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Graphe des Inscriptions</h3>
								</div>
								<div class="card-body">
									<canvas id="myChart" width="600" height="250"  ></canvas>	
								</div>
							</div>
						</div>
					</div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
<script>
$('#duree ,#montant').on('change',function(){

	var selectedValue = $("#duree").val();
	var montant = $('#montant').val()
	console.log(montant,selectedValue)
	if(montant!=0){
		console.log("sa")
		if(selectedValue==1) {
			var gain1max = 0.2*montant 						
			var gain1min = 0.16*montant  						
			var gain12max = 2.4*montant 						
			var gain12min  = 1.92*montant
		}

		if(selectedValue==3){
				var gain1max = 0.2*montant 						
				var gain1min = 0.16*montant  						
			var gain12max = 2.4*montant 						
			var gain12min  = 1.92*montant
			console.log(gain1max,gain1min,gain12max,gain12min)

		}

		if(selectedValue==6){
			var gain1max = 0.2*montant 						
			var gain1min = 0.16*montant  						
			var gain12max = 2.4*montant 						
			var gain12min  = 1.92*montant
		}
		if(selectedValue==12){
			var gain1max = 0.2*montant 						
			var gain1min = 0.16*montant  						
			var gain12max = 2.4*montant 						
			var gain12min  = 1.92*montant
		}
		$('#gain1min').html(gain1min)
		$('#gain1max').html(gain1max)		
		$('#gain12min').html(gain12min)
		$('#gain12max').html(gain12max)

	}
			
})



var options = {
  type: 'line',

  data: {
	labels: ["Jan", "Fev", "Mars", "Avril", "Mail", "Juin","Juillet","Aout","Septembre","Octobre","Nov","Dec"],
	datasets: [
	    {
	      label: 'Nombre Des Inscrits Par Mois',
	      data: [
				<?php $__currentLoopData = $userArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php echo e($u); ?>,
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			  
		  ],
		borderColor: 'rgb(75, 192, 192)',		
      	borderWidth: 1
    	}
		]
  },
  options: {
  	scales: {
    	yAxes: [{
        ticks: {
					reverse: false
        }
      }]
    }
  }
}

var ctx = document.getElementById('myChart').getContext('2d');
new Chart(ctx, options);


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>