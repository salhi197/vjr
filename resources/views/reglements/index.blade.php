@extends('layouts.ui')



@section('content')

<div class="row layout-top-spacing" id="cancel-row">

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <a class="btn btn-danger mb-2" href="{{route('reglement.create')}}">+ Ajouter</a>

    <div class="widget-content widget-content-area br-6">

        <table class="multi-table table table-hover" style="width:100%">
        <thead class="text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>type</th>
                                                        <th>titre</th>
                                                        <th>ladate</th>
                                                        <th>organisme</th>
                                                        <th>secteur</th>
                                                        <th>contenu</th>                                                  
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($reglements as $reglement)
                                                        <tr>
                                                            <td>{{$reglement->id ?? ''}} </td>
                                                            <td>{{$reglement->type ?? ''}} </td>
                                                            <td>{{$reglement->titre ?? ''}} </td>
                                                            <td>{{$reglement->ladate ?? ''}} </td>
                                                            <td>{{$reglement->organisme ?? ''}} </td>
                                                            <td>{{$reglement->secteur ?? ''}} </td>
                                                            <td>{{$reglement->contenu ?? ''}} </td>
                                                                                                                    
                                                            <td >
                                                                <div class="table-action">  
                                                                    <a class="btn btn-outline-primary btn-sm" href="{{route('reglement.edit',['reglement'=>$reglement->id])}}">
                                                                        Voir
                                                                    </a>                                                                    
                                                                    <a class="btn btn-outline-danger btn-sm" href="{{route('reglement.destroy',['reglement'=>$reglement->id])}}">
                                                                        Supprimer
                                                                    </a>


                                                                    

                                                                </div>
                                                            </td>
                                                        </tr>

                                                    @endforeach
                                                </tbody>


        </table>

    </div>
</div>

</div>


@endsection


@section('styles')
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
