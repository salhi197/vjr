@extends('layouts.app')



@section('content')

					<div class="page-header">
						<h4 class="page-title">{{trans('liste des utilisateurs')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('users')}}</li>
						</ol>

					</div>


                    <div class="row">

                            <div class="card-header">
                                <a class="btn btn-primary text-white" href="{{route('user.show.create')}}">
                                    <i class="fa fa-plus">

                                    </i>
                                    Ajouter utilisateur
                                </a>

                            </div>
                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
    										<table id="datatable-5" class="table card-table table-striped table-bordered text-nowrap w-100">
                                                <thead class="text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Nom Penom</th>
                                                        @if(Auth::guard('admin')->user()->agent == 0)
                                                            <th>Etat</th>
                                                        @endif                                                        
                                                        <th>Email</th>
                                                        @if(Auth::guard('admin')->user()->agent == 0)
                                                        <th>{{trans('main.password')}}</th>
                                                        
                                                        <th>telephone</th>
                                                        <th> Actif</th>

                                                        @endif
                                                        <th>Date Entré</th>
                                                        @if(Auth::guard('admin')->user()->agent == 0)
                                                        <th>Action</th>
                                                        @endif
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                        <td>
                                                            {{$user->id ?? ''}}
                                                            </td>
                                                            
                                                            <td>
                                                                <a href="{{route('user.detail',['user'=>$user->id])}}">
                                                                {{$user->name ?? ''}}
                                                                {{$user->nom ?? ''}}
                                                                </a>
                                                            </td>                                                            
                                                            @if(Auth::guard('admin')->user()->agent == 0)
                                                            <td>
                                                            @if($user->type == 0)
                                                                <span class="badge badge-danger">Déactivé</span>
                                                            @else
                                                                <span class="badge badge-primary">Activé</span>
                                                            @endif

                                                            </td>
                                                            @endif
                                                            <td>
                                                                {{$user->email ?? ''}}                                                            
                                                            </td>
                                                            @if(Auth::guard('admin')->user()->agent == 0)
                                                            <td>
                                                                {{$user->password_text ?? ''}}                                                            
                                                            </td>
                                                            
                                                            <td>
                                                                {{$user->telephone ?? ''}}                                                            
                                                            </td>
                                                            <td>
                                                                {{$user->solde_actif ?? ''}} $
                                                            </td>

                                                            @endif


                                                            <td>
                                                                {{$user->created_at ?? ''}}
                                                            </td>
                                                            @if(Auth::guard('admin')->user()->agent == 0)
                                                            <td >
                                                                <div class="table-action">  
                                                                    <a class="btn btn-primary text-white" href="{{route('user.edit',['user'=>$user->id])}}">
                                                                        Edit
                                                                    </a>
                                                                    <a class="btn btn-danger text-white" onclick="return confirm('Etes vous sure ?')" href="{{route('user.delete',['user'=>$user->id])}}">
                                                                        Supprimer
                                                                    </a>

                                                            @if($user->type == 0)
                                                                    <a class="btn btn-success text-white" href="{{route('user.ActiverDesactiver',['user'=>$user->id])}}">
                                                                        Activer
                                                                    </a>
                                                            @else
                                                                    <a class="btn btn-warning text-white" href="{{route('user.ActiverDesactiver',['user'=>$user->id])}}">
                                                                        Désactiver
                                                                    </a>

                                                            @endif
                                                                    

                                                                </div>
                                                            </td>
                                                            @endif
                                                        </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                    </div>





@endsection


@section('styles')
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
