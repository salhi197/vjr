@extends('layouts.ui')

@section('content')


<div class="page-header">
    <h4 class="page-title">{{trans('Créer Réglement')}}</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Vjr</a></li>
        <li class="breadcrumb-item active" aria-current="page">Réglement</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{trans('main.instruction')}} :
                </h3>
            </div>
            <div class="card-body">
                <form class="login100-form validate-form" method="POST" action="{{route('reglement.store')}}"
                    aria-label="Login">
                    @csrf


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label>Titre: </label>
                        <input id="nom" type="text" class="form-control" value="{{old('nom')}}" name="nom" required>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label>Date : </label>
                        <input id="date" type="date" class="form-control" value="{{old('ladate')}}" name="ladate" required
                            >
                    </div>

                    
                    <br>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label>Type : </label>
                        <input id="type" name="type" class="form-control" type="text">
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <label>organisme : </label>
                        <input id="organisme" type="text" class="form-control" value="{{old('organisme')}}" name="organisme"
                            required >
                    </div>

                    <div class="wrap-input100 validate-input">
                        <label>Secteur: </label>
                        <input id="secteur" type="text" class="form-control" name="secteur" />
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label>Contenu: </label>
                        <input id="contenu" type="text" class="form-control" name="contenu" />
                    </div>

                    <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Ajouter </button></div>

                </form>
            </div>
        </div>








    </div>
</div>

@endsection

