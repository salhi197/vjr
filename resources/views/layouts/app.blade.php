<?php 
	use Carbon\Carbon;
	use App\Notification;

	if (Auth::check()) {
		$notifications = Notification::where('user',Auth::user()->id)->orderBy('created_at','desc')->paginate(5);            
	}
?>
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="In a world that is constantly changing,we are the best and the most reliable partners.you are a person or company Galaxy is the privileged place for great achievements our specilized team focuses on using the best technology to achieve your dreqms and make them a reality." name="description">

		<link rel="icon" href="{{asset('img/logos.ico')}}" type="image/x-icon"/>
		<link rel="shortcut icon" href="{{asset('img/logos.ico')}}" type="image/x-icon"/>
		<!-- TITLE -->
		<title>Galaxy App</title>

		<!-- DASHBOARD CSS -->
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/css/style-modes.css')}}" rel="stylesheet"/>
		<!-- LEFT-MENU CSS -->
		<link href="{{asset('assets/css/sidemenu/closed-sidemenu.css')}}" rel="stylesheet">
		<!--C3.JS CHARTS PLUGIN -->

		<!-- TABS CSS -->
		<link href="{{asset('assets/plugins/tabs/style-2.css')}}" rel="stylesheet" type="text/css">

		<!-- PERFECT SCROLL BAR CSS-->
		<link href="{{asset('assets/plugins/pscrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- Skin css-->
		<link href="{{asset('assets/skins/skins-modes/color22.css')}}"  id="theme" rel="stylesheet" type="text/css" media="all" />
		<link href="{{asset('assets/skins/skins-modes/color19.css')}}"  id="theme" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/css/dashboard-dark.css')}}" rel="stylesheet">		
		@yield('styles')
	</head>

	<body class="app sidebar-mini dark-mode default-header">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!-- HEADER -->
				<div class="header app-header" style="background-color:#41413f;">
					<div class="container-fluid">
						<div class="d-flex">
						   <a class="header-brand" href="{{route('home')}}">
								<img src="{{asset('img/logos/logo.png')}}" class="header-brand-img desktop-logo" />
							   <img src="{{asset('img/logos/logo2.png')}}" class="header-brand-img mobile-view-logo" height="100px" alt="Galaxy logo">							   
							</a>
							
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
							    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"></a>
								<div class="header-brand-img desktop-logo">
								</div>

								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="fa fa-usd"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 ">
												{{trans('main.balance')}}: {{Auth::user()->solde ?? ''}}$												</h5>
											</div>
										</div>
									</div>
								</div>


								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="fa fa-money"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 ">
												{{trans('main.solde_actif')}} : {{Auth::user()->solde_actif ?? ''}}$
												</h5>
											</div>
										</div>
									</div>
								</div>

								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="fe fe-pie-chart "></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 ">
												{{trans('main.monthly_revenue')}} : {{Auth::user()->solde_retrait ?? ''}}$												</h5>
											</div>
										</div>
									</div>
								</div>

							
								<div class="dropdown d-md-flex">
								</div>
								@auth
								<div class="dropdown d-md-flex notifications">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="pulse bg-warning"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 text-dark">Notifications</h5>
												<span class="badge badge-danger ml-auto  brround">{{count($notifications)}}</span>
											</div>
										</div>
										@foreach($notifications as $notification)
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg bg-danger-transparent">
													<i class="fa fa-cogs text-danger"></i>
												</div>
												<div>
													<strong>{{$notification->message}}</strong>
													<div class="small text-muted">45 mintues ago</div>
												</div>
											</a>
										@endforeach
										<div class="dropdown-divider mb-0"></div>
										<div class=" text-center p-2">
											<a href="{{route('notifications')}}" class="text-dark pt-0">View All Notifications</a>
										</div>
									</div>
								</div>	
								@endif
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										@auth
											@if(strlen(Auth::user()->photo)>0)
											<span><img src="{{asset('storage/app/'.Auth::user()->photo)}}" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
											@else
											<span><img src="{{asset('assets/images/users/male/32.png')}}" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
											@endif
										@endif
										@auth('admin')
											<span><img src="{{asset('assets/images/users/male/32.png')}}" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
										@endif
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											@auth('admin')
											<h5 class="text-dark mb-1">Admin</h5>
											@endif
											@auth
											<h5 class="text-dark mb-1">{{Auth::user()->nom ?? ''}} {{Auth::user()->name ?? ''}}   </h5>
											@endif

											
											<small class="text-muted">
												@auth
													{{Auth::user()->rangName()}}
												@endif
											</small>
										</div>
										<div class="drop-heading  border-bottom row text-muted row">
											@auth
											<div class="row align-center">
												<div class="col-4">
													<a href="{{route('lang',['lang'=>'fr'])}}">
														<img src="{{asset('assets/images/flags/fr.svg')}}" class="w-5 h-5  d-block"/>
													</a>
												</div>

												<div class="col-4">
													<a href="{{route('lang',['lang'=>'en'])}}">
														<img src="{{asset('assets/images/flags/us.svg')}}" class="w-5 h-5 d-block"/>
													</a>
												</div>

												<div class="col-4">
													<a href="{{route('lang',['lang'=>'ar'])}}">
														<img src="{{asset('assets/images/flags/sa.svg')}}" class="w-5 h-5  d-block"/>
													</a>
												</div>
											</div>
											@endif
										</div>
										

										<a class="dropdown-item" href="{{route('user.profile')}}"><i class="mdi mdi-account-outline mr-2"></i> <span>Profile</span></a>
										<!-- <a class="dropdown-item" href="{{route('setting')}}"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a> -->
										<a class="dropdown-item" href="{{route('operation.recharger.index.actif')}}"><i class="fe fe-list mr-2"></i> <span>Actif</span></a>
										<a class="dropdown-item" href="{{route('support')}}"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
										<a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Déconexion</span></a>
										<a class="dropdown-item" >
											{{trans('main.mode_sombre')}}
											<div class="material-switch pull-right">
												<input id="someSwitchOptionDefault" onchange="DarkMode()" name="someSwitchOption001" type="checkbox">
												<label for="someSwitchOptionDefault" class="label-default"></label>
											</div>
										</a>
										<a class="dropdown-item" >
											{{trans('main.mode_claire')}}
											<div class="material-switch pull-right">
												<input id="someSwitchOptionDefault2" onchange="LightMode()" name="someSwitchOption002" type="checkbox">
												<label for="someSwitchOptionDefault2" class="label-default"></label>
											</div>
										</a>

									</div>
								</div>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										<span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											@auth('admin')
											<h5 class="text-dark mb-1">Admin</h5>
											@endif
											@auth
											<h5 class="text-dark mb-1">{{Auth::user()->nom ?? ''}} {{Auth::user()->name ?? ''}}   </h5>
											@endif

											<small class="text-muted">Investor</small>
										</div>
										<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
										<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
										<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
										<a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<!-- HEADER END -->

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar left-menu2">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body text-center">
							<br>
							<div class="user-pic">
										@auth
											@if(strlen(Auth::user()->photo)>0)
											<img src="{{asset('storage/app/'.Auth::user()->photo)}}" alt="user-img" class="avatar avatar-lg brround">
											@else
											<img src="{{asset('assets/images/users/male/32.png')}}" alt="user-img" class="avatar avatar-lg brround">
											@endif


										@endif

							</div>
							

							<div class="user-info">
								<h2>{{Auth::user()->name ?? ''}} {{Auth::user()->nom ?? ''}}    </h2>
							
								@auth
								<img src="{{asset('assets/images/flags/'.strtolower(Auth::user()->pays).'.svg')}}" class="w-5 h-5 text-center mx-auto d-block"/>
								@endif
								<!-- <span>{{Auth::user()->telephone ?? 'Investor'}}<span> -->
							</div>
							<br>
							<div class="sidebar-navs text-center">
								@auth
								<ul class="nav nav-pills nav-pills-circle text-center"
								style="justify-content: center;"
								id="tabs_2" role="tablist">
									<li class="nav-item">
										<a class="nav-link border text-center m-2">
											<i class="fa fa-facebook" style="color:blue;"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link border  m-2">
											<i class="fa fa-telegram"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link border text-center m-2">
											<i class="fa fa-linkedin" style="color:#0072b1;"></i>
										</a>
									</li>

								</ul>
								@endif
							</div>

						</div>
					</div>
					<ul class="side-menu">
						@auth('admin')
						<li>
							<a class="side-menu__item" href="{{route('admin')}}"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">{{trans('Admin')}}</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">{{trans('Utilisateur')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('user.index')}}" class="slide-item">{{trans('Tous les utilisateur')}} </a>
								</li>
								@if(Auth::guard('admin')->user()->agent == 0)
								<li>
									<a href="{{route('user.actif')}}" class="slide-item">{{trans('Comptes')}} </a>
								</li>

								
								<li>
									<a href="{{route('user.pending')}}" class="slide-item">{{trans('En Attente de vérification')}} </a>
								</li>
								@endif

							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">{{trans('main.finance')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('operation.recharger.index')}}" class="slide-item">{{trans('main.rechargements')}} </a>
								</li>
								<li>
									<a href="{{route('operation.recharger.show.agent')}}" class="slide-item">Ajouter Rechargement </a>
								</li>


								

								@if(Auth::guard('admin')->user()->agent == 0)
									<li>
										<a href="{{route('operation.actif.index')}}" class="slide-item">Investissment </a>
									</li>

									<li>
										<a href="{{route('operation.retrait.index')}}" class="slide-item">{{trans('main.retrait')}} </a>
									</li>
									@endif
									<li>
										<a href="{{route('operation.index')}}" class="slide-item">{{trans('main.operations')}} </a>
									</li>


							</ul>
						</li>
						@if(Auth::guard('admin')->user()->agent == 0)
							<li class="slide">
								<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-list"></i><span class="side-menu__label">Payment</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="{{route('payment.rechargements.month')}}" class="slide-item">Payments </a>
									</li>

									<!-- <li>
										<a href="{{route('payment.rechargements')}}" class="slide-item">Paiment Prochain Payments </a>
									</li> -->
									<li>
										<a href="{{route('payment.rechargements.paye')}}" class="slide-item">Journal de Paiments </a>
									</li>
								</ul>
							</li>


						<!-- <li>
							<a class="side-menu__item" href="{{route('payment.rechargements')}}"><i class="side-menu__icon fa fa-cash"></i><span class="side-menu__label">{{trans('paiements')}}</span></a>
						</li> -->
						<li>
							<a class="side-menu__item" href="{{route('operation.index')}}"><i class="side-menu__icon fe fe-list"></i><span class="side-menu__label">{{trans('Transactions')}}</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label">{{trans('main.setting')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('methode.index')}}" class="slide-item">{{trans('methode de paiment')}} </a>
								</li>	

							</ul>
						</li>
						@endif


						@endif

						@auth
						<li>
							<a class="side-menu__item" href="{{route('home')}}"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">{{trans('main.dashboard')}}</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">{{trans('main.finance')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('operation.recharger.show')}}" class="slide-item">{{trans('main.recharger')}} </a>
								</li>
								<li>
									<a href="{{route('operation.retirer.show')}}" class="slide-item">{{trans('main.retirer')}} </a>
								</li>

								<li>
									<a href="{{route('operation.activer.show')}}" class="slide-item">Investisement </a>
								</li>

								<li>
									<a href="{{route('operation.transferer.show')}}" class="slide-item">{{trans('main.transferer')}} </a>
								</li>
								<li>
									<a href="{{route('operation.index')}}" class="slide-item">{{trans('main.operations')}} </a>
								</li>
								<li>
									<a href="{{route('operation.recharger.index')}}" class="slide-item">{{trans('main.rechargements')}} </a>
								</li>
								
								<li>
									<a href="{{route('user.methodes')}}" class="slide-item">{{trans('main.methode_paiment')}} </a>
								</li>

								<li>
									<a href="{{route('operation.transferer.balance')}}" class="slide-item">
										{{trans('main.transferer_balance')}}
									</a>
								</li>
								
							</ul>
						</li>


						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label">{{trans('main.partenaires')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('user.partenaire')}}" class="slide-item">{{trans('main.partenaires')}} </a>
								</li>	

								<li>
									<a href="{{route('user.partenaire.table')}}" class="slide-item"> Table Partenaire </a>
								</li>	

							</ul>
						</li>


						<li>
							<a class="side-menu__item" href="{{route('operation.actif.index')}}"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Investissment</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="{{route('user.profile')}}"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">{{trans('main.profile')}}</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label">{{trans('main.acedemie')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('comingsoon')}}" class="slide-item">{{trans('main.video')}} </a>
								</li>	
								<li>
									<a href="{{route('comingsoon')}}" class="slide-item">{{trans('main.livre')}} </a>
								</li>	
								<li>
									<a href="{{route('comingsoon')}}" class="slide-item">{{trans('main.documentation')}} </a>
								</li>	
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-dollar"></i><span class="side-menu__label"> Exchange P2P</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="https://t.me/+hLFAaDTE49M5NDQx" class="slide-item">Telegram </a>
								</li>	
								<li>
									<a href="https://chat.whatsapp.com/GHlHT0uuqOvEFD4iuf8Iia" class="slide-item">What's App </a>
								</li>	
							</ul>
						</li>
						

						<li>
							<a class="side-menu__item" href="{{route('faq')}}"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">{{trans('main.faq')}}</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="{{route('support')}}"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">{{trans('main.support')}}</span></a>
						</li>
						@endif

						<li>
							<a class="side-menu__item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="side-menu__icon fe fe-lock"></i><span class="side-menu__label">{{trans('main.deconnexion')}}</span></a>
						</li>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
                        
                    </ul>
				</aside>

				<!-- CONTAINER -->
				<div class="app-content">
					@auth
						@if(Auth::user()->email_verified==0)
						<div class="page-header">
							<div class="col-md-12">
								<div class="alert alert-success" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									{{trans('main.email_confirm_msg')}}
								</div>
							</div>
						</div>
						@endif

					@endif
					<br>

                    @yield('content')
					<!-- PAGE-HEADER -->

				</div>
				<!-- CONTAINER END -->
            </div>

			<!-- SIDE-BAR -->
			<!-- SIDE-BAR CLOSED -->

			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 text-center">
							Copyright © {{date('Y')}} | Galaxy Investissement  
							<span id="date-part"></span>
						</div>
						<div class="col-md-6 col-sm-6 text-center">
							<a href="https://t.me/GALAXY_Invest_Support" target="_blank"><i class="fa fa-telegram" style="font-size:20px;"></i></a>
						</div>

					</div>
				</div>
			</footer>
			<!-- FOOTER END -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

		<!-- JQUERY SCRIPTS -->
		<script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>

		<!-- SPARKLINE -->
		<script src="{{asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE -->
		<script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script>

		<!-- RATING STAR -->
		<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- SELECT2 JS -->
		<!-- <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script> -->
		<!-- <script src="{{asset('assets/js/select2.js')}}"></script> -->



		<!-- CHARTJS CHART -->

		<!-- PIETY CHART -->
		<!-- LEFT-MENU -->
		<script src="{{asset('assets/plugins/sidemenu-toggle/sidemenu-toggle.js')}}"></script>

		<!-- PERFECT SCROLL BAR JS-->

		<!-- SIDEBAR JS -->
		<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- APEX-CHARTS JS -->

		<!-- INDEX-SCRIPTS  -->
		<script src="{{asset('assets/js/index.js')}}"></script>

		
		<!-- CUSTOM JS -->
		<script src="{{asset('js/chart.min.js')}}"></script>
		<script src="{{asset('js/moment.min.js')}}"></script>
				
		<script src="{{asset('assets/js/custom.js')}}"></script>
        <script src="{{asset('js/toastr.min.js')}}"></script>	
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/js/sweet-alert.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/datatable.js') }}"></script>

        <script>
        @if(session('error'))
        	$(function(){
                toastr.error('{{Session::get("error")}}')
            })

        @endif
        @if(session('success'))
            toastr.success('{{Session::get("success")}}')
        @endif
            

        </script>

	<script>	
		$(document).ready(function() {
    		// $('.select2').select2();

			var theme = localStorage.getItem('theme');
			if(theme==null){
				localStorage.setItem('theme', 'dark');
			}
			if(theme=="dark"){
				$('#someSwitchOptionDefault').prop( "checked", true );
				$('#someSwitchOptionDefault2').prop( "checked", false );
				$("body").removeClass("light-mode");
				$("body").addClass("dark-mode");
			}
			if(theme=="light"){

				$('#someSwitchOptionDefault2').prop( "checked", true );
				$('#someSwitchOptionDefault').prop( "checked", false );

				$("body").addClass("light-mode");
				$("body").removeClass("dark-mode");
			}
			var interval = setInterval(function() {
				var momentNow = moment();
				$('#date-part').html(moment().format('MMMM Do YYYY, h:mm:ss a'));
				$('#time-part').html(momentNow.format('A hh:mm:ss'));
			}, 100);
		});

		function DarkMode()
		{
			localStorage.setItem('theme', 'dark');
			$("body").addClass("dark-mode");
			window.location.reload();

		}
		function LightMode()
		{
			localStorage.setItem('theme', 'light');
			$("body").removeClass("dark-mode");
			window.location.reload();

		}


	</script>
	@yield('scripts')
	</body>
</html>