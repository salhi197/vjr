<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from laravel.spruko.com/solic/Horizontal-Light-ltr/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2020 16:37:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited"  name="author">
		<meta name="keywords" content="html5 template, admin panel html template,  html5 admin template, admin panel html, admin panel html template, html css admin templates, dashboard html5, html dashboard template, simple dashboard html template, html5 dashboard template, dashboard html5,  simple dashboard html, dashboard design template, bootstrap 4 admin template,  bootstrap admin template,  admin, premium admin templates, best bootstrap admin template, bootstrap dashboard template,   admin ui templates, modern admin template, admin panel template bootstrap 4 "  />
		<!--favicon -->
<link rel="icon" href="<?php echo e(asset('assets/images/brand/favicon.ico')); ?>" type="image/x-icon"/>
<link rel="shortcut icon" href="<?php echo e(asset('assets/images/brand/favicon.ico')); ?>" type="image/x-icon"/>
<!-- TITLE -->
<title>Galaxy App– Register </title>
<!-- DASHBOARD CSS -->
<link href="<?php echo e(asset('assets/css/dashboard.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('assets/css/dashboard-dark.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('assets/css/style-modes.css')); ?>" rel="stylesheet"/>
<!-- HORIZONTAL-MENU CSS -->
<link href="<?php echo e(asset('assets/plugins/horizontal-menu/dropdown-effects/fade-down.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/plugins/horizontal-menu/horizontal-menu.css')); ?>" rel="stylesheet">
<!--C3.JS CHARTS PLUGIN -->
<link href="<?php echo e(asset('assets/plugins/charts-c3/c3-chart.css')); ?>" rel="stylesheet"/>
<!-- SINGLE-PAGE CSS -->
<link href="<?php echo e(asset('assets/plugins/single-page/css/main.css')); ?>" rel="stylesheet" type="text/css">
<!-- PERFECT SCROLL BAR CSS-->
<link href="<?php echo e(asset('assets/plugins/pscrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" />
<!--- FONT-ICONS CSS -->
<link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet"/>
<!-- SELECT2 CSS -->
<link href="<?php echo e(asset('assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet"/>
<!-- Skin css-->
<link href="<?php echo e(asset('assets/skins/skins-modes/color22.css')); ?>"  id="theme" rel="stylesheet" type="text/css" media="all" />
<!-- SIDEBAR CSS -->
<link href="<?php echo e(asset('assets/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet">

<!-- Switcher CSS -->
<link href="<?php echo e(asset('assets/switcher/css/switcher.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/switcher/demo.css')); ?>" rel="stylesheet">	</head>
<link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet"/>

		
	<body class="default-header">	    
				<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
			</div>

			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
                            <img src="<?php echo e(asset('logo-galaxy.png')); ?>" width="120px"/>
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							
                            <form class="login100-form validate-form" method="POST" action="/register" aria-label="Login">
                                <?php echo csrf_field(); ?>
                                <span class="login100-form-title">
									Galaxay App Register
								</span>


								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <label>Prénom : </label>
                                <input id="prenom"  type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name"  required autofocus>
								</div>

								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <label>Pays : </label>

                                    
                                    <select id="country" value="<?php echo e(old('pays')); ?>" name="pays" class="form-control" >
                                        <option value="Algeria">Algeria</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="India">India</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>                                    

								</div>

								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <label>Téléphone : </label>
                                <input id="telephone"  type="text" class="form-control" value="<?php echo e(old('telephone')); ?>" name="telephone" required>
								</div>


								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <label>Email : </label>
                                <input id="email"  type="text" class="form-control" value="<?php echo e(old('email')); ?>" name="email"  required autofocus>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <label>Mot de passe: </label>
                                <input id="password" type="password" class="form-control"  name="password" required>
									</div>

								<div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <label>Confirmer Mot de passe: </label>
                                <input id="password" type="password" class="form-control" name="confirm_password" required>
									</div>                                

								<div class="container-login100-form-btn">
									<button type="submit" href="#" class="login100-form-btn btn-primary">
                                        <i class="fa fa-door-open"></i>Connexion
									</button>
								</div>
								<p>
									Vous avez encore un comtpe ?
									<a href="<?php echo e(route('login')); ?>"> Se Connecter .</a>

								</p>

							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
		
		<!-- JQUERY SCRIPTS -->
<script src="<?php echo e(asset('assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo e(asset('assets/js/vendors/bootstrap.bundle.min.js')); ?>"></script>
<!-- SPARKLINE -->
<script src="<?php echo e(asset('assets/js/vendors/jquery.sparkline.min.js')); ?>"></script>
<!-- CHART-CIRCLE -->
<script src="<?php echo e(asset('assets/js/vendors/circle-progress.min.js')); ?>"></script>
<!-- RATING STAR -->
<script src="<?php echo e(asset('assets/plugins/rating/jquery.rating-stars.js')); ?>"></script>
<!-- SELECT2 JS -->
<script src="<?php echo e(asset('assets/plugins/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2.js')); ?>"></script>
<!-- INPUT MASK PLUGIN-->
<script src="<?php echo e(asset('assets/plugins/input-mask/jquery.mask.min.js')); ?>"></script>
<!-- CUSTOM SCROLL BAR JS-->
<script src="<?php echo e(asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
<!-- CUSTOM JS-->
<script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>	

<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>	
<script>
        <?php if($errors->any()): ?>
        $(function(){
                toastr.error('<?php echo e($errors->first()); ?>')
            })

        <?php endif; ?>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(Session::get("success")); ?>')
        <?php endif; ?>
</script>

	</body>

</html>