@extends('layouts.app')

@section('content')
                    <div class="page-header">
						<h4 class="page-title">
                            Notifications
                        </h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page">Notifications</li>
						</ol>                        
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12">
                            <div class="card">
								<div class="card-body">
									<div class="table-responsive">
                                    @foreach($notifications as $notification)
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg bg-danger-transparent">
													<i class="fa fa-cogs text-danger"></i>
												</div>
												<div>
													<strong>{{$notification->message}}</strong>
													<strong>{{$notification->created_at->format('Y-m-d')}}</strong>
												</div>
											</a>
										@endforeach



									</div>
								</div>
							</div>
						</div>
					</div>
@endsection

@section('modals')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Joindre fichier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="" method="post" enctype="multipart/form-data">
			@csrf
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="example-file-input-custom">
                <label class="custom-file-label">Choisir fichier</label>
                <br>
            <br>

            </div>
            <button type="submit" class="btn btn-primary">Importer</button>

		</form>
      </div>
    </div>
  </div>
</div>



@endsection
@section('styles')
<!-- TIME PICKER CSS -->


@endsection

@section('scripts')
</script>
@endsection
