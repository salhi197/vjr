@extends('layouts.app')

@section('content')

<div class="page-header">
						<h4 class="page-title">Profile</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Pages</a></li>
							<li class="breadcrumb-item active" aria-current="page">Profile</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

			        <!-- ROW-1 OPEN -->
					<div class="row" id="user-profile">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="wideget-user">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wideget-user-desc d-flex">
													<div class="wideget-user-img">
														<img class="" src="../../assets/images/users/male/32.jpg" alt="img">
													</div>
													<div class="user-wrap">
														<h4>{{$user->name}}</h4>
														<h6 class="text-muted mb-3">Member Since: {{$user->created_at->format('M')}} {{$user->created_at->format('Y')}}</h6>
														<a href="#" class="btn btn-primary mt-1 mb-1"><i class="fa fa-cash"></i> {{$user->solde}} $</a>
														@auth('admin')
														<button type="button"  class="btn btn-secondary mt-1 mb-1" id="confirm"><i class="fa fa-check"></i> Valider</button>
														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="border-top">
									<div class="wideget-user-tab">
										<div class="tab-menu-heading">
											<div class="tabs-menu1">
												<ul class="nav">
													<li class=""><a href="#tab-51" class="active show" data-toggle="tab">Profile</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->

					</div>

					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label class="form-label">Code Sponsor : </label>
										<input readonly type="text" value="{{$user->code}}" readonly class="form-control" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label class="form-label">Nom</label>
										<input readonly type="text" class="form-control" value="{{$user->nom}}" name="nom"  placeholder="Nom " >
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label class="form-label">Prénom</label>
										<input readonly type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Prénom" >
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="form-group">
										<label class="form-label">Email address</label>
										<input readonly type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="form-label">Country</label>
										<select id="country" value="{{old('pays')}}" value="{{$user->pays}}" name="pays" class="form-control" >
											@include('includes.pays',['value'=>$user->pays])
										</select>                                    
									</div>
								</div>

								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label class="form-label">Téléphone</label>
										<input readonly type="text" class="form-control" value="{{$user->telephone}}" name="telephone" placeholder="Téléphone">
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label class="form-label">Pièce d'identité / passport: </label>
										<span><img src="{{asset('storage/app/'.$user->identite)}}" alt="identite" width="80px"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group mb-0">
										<label class="form-label">Photo</label>
										<span><img src="{{asset('storage/app/'.$user->photo)}}" alt="profile-user" width="80px"></span>
									</div>
								</div>
							</div>



							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-label">Facebook</label>
										<input readonly type="text" class="form-control" value="{{$user->facebook}}" placeholder="Lien Vers Votre Profile facebook" name="facebook"   >
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="form-group">
										<label class="form-label">Telegram</label>
										<input readonly type="text" class="form-control" value="{{$user->telegram}}" placeholder="Lien Vers Votre Profile telegram" name="telegram"  >
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="form-group">
										<label class="form-label">Linkedin</label>
										<input readonly type="text" class="form-control" value="{{$user->linkedin}}" placeholder="Lien Vers Votre Profile linkedin" name="linkedin" >
									</div>
								</div>
							</div>
						</div>
					</div>
								


@endsection

@section('scripts')
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
				// console.log(document.getElementById('confirm').href)
				window.location.href = '{{route('user.valider',['user'=>$user->id])}}';
				swal.close()
					
			 } else {
			   swal("Cancelled", "Your imaginary file is safe :)", "error");
				  e.preventDefault();
			 }
		});		 
	});
})



</script>
@endsection
