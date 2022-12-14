@extends('layouts.ui')

@section('styles')
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('vjr/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('vjr/assets/css/structure.css')}}" rel="stylesheet" type="text/css" class="structure" />
<!-- END GLOBAL MANDATORY STYLES -->

<link href="{{asset('vjr/assets/css/pages/helpdesk.css')}}" rel="stylesheet" type="text/css" />
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{asset('vjr/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('vjr/assets/css/widgets/modules-widgets.css')}}">
@endsection
@section('content')


<div class="helpdesk">

    <div class="helpdesk layout-spacing container">

        <div class="hd-header-wrapper">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="">Forum</h4>
                    <p class="">Q/A </p>

                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-11 col-11 mx-auto">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Let's find your question in fast way" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hd-tab-section">
            <div class="row">
                <div class="col-md-12 mb-5 mt-5">

                    <div class="accordion" id="hd-statistics">
                        <div class="card">
                            <div class="card-header" id="hd-statistics-1">
                                <div class="mb-0">
                                    <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-statistics-1" aria-expanded="false" aria-controls="collapse-hd-statistics-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Popular articles
                                    </div>
                                </div>
                            </div>

                            <div id="collapse-hd-statistics-1" class="collapse" aria-labelledby="hd-statistics-1" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="hd-statistics-2">
                                <div class="mb-0">
                                    <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-statistics-2" aria-expanded="true" aria-controls="collapse-hd-statistics-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Get started with CORK
                                    </div>
                                </div>
                            </div>
                            <div id="collapse-hd-statistics-2" class="collapse show" aria-labelledby="hd-statistics-2" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="hd-statistics-3">
                                <div class="mb-0">
                                    <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-statistics-3" aria-expanded="false" aria-controls="collapse-hd-statistics-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Browse the web
                                    </div>
                                </div>
                            </div>
                            <div id="collapse-hd-statistics-3" class="collapse" aria-labelledby="hd-statistics-3" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="hd-performance-1">
                                <div class="mb-0">
                                    <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-performance-1" aria-expanded="false" aria-controls="collapse-hd-performance-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Customize data easily
                                    </div>
                                </div>
                            </div>

                            <div id="collapse-hd-performance-1" class="collapse" aria-labelledby="hd-performance-1" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="hd-performance-2">
                                <div class="mb-0">
                                    <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-performance-2" aria-expanded="false" aria-controls="collapse-hd-performance-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Let CORK do tasks for you
                                    </div>
                                </div>
                            </div>
                            <div id="collapse-hd-performance-2" class="collapse" aria-labelledby="hd-performance-2" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="hd-performance-3">
                                <div class="mb-0">
                                    <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-performance-3" aria-expanded="false" aria-controls="collapse-hd-performance-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Track your Todo list
                                    </div>
                                </div>
                            </div>
                            <div id="collapse-hd-performance-3" class="collapse" aria-labelledby="hd-performance-3" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="hd-reports-1">
                                <div class="mb-0">
                                    <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-reports-1" aria-expanded="false" aria-controls="collapse-hd-reports-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Secure chat and mail system
                                    </div>
                                </div>
                            </div>

                            <div id="collapse-hd-reports-1" class="collapse" aria-labelledby="hd-reports-1" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="hd-backup-1">
                                <div class="mb-0">
                                    <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-backup-1" aria-expanded="false" aria-controls="collapse-hd-backup-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Schedule your days
                                    </div>
                                </div>
                            </div>

                            <div id="collapse-hd-backup-1" class="collapse" aria-labelledby="hd-backup-1" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="hd-reports-2">
                                <div class="mb-0">
                                    <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-reports-2" aria-expanded="false" aria-controls="collapse-hd-reports-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Use CORK with any programming language
                                    </div>
                                </div>
                            </div>
                            <div id="collapse-hd-reports-2" class="collapse" aria-labelledby="hd-reports-2" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="hd-reports-3">
                                <div class="mb-0">
                                    <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-reports-3" aria-expanded="false" aria-controls="collapse-hd-reports-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12" y2="17"></line></svg>                                                                        Change CORK settings
                                    </div>
                                </div>
                            </div>
                            <div id="collapse-hd-reports-3" class="collapse" aria-labelledby="hd-reports-3" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                        haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <div class="hd-contact-section">
            <div class="hd-slider">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active community-help">
                                    <div class="carousel-item-content">
                                        <h4 class="hd-slide-header">Get help by community.</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                    <div class="media-body">
                                                        <h5>CORK Forum</h5>
                                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                                    <div class="media-body">
                                                        <h5>How to Code</h5>
                                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item news-updates ">
                                    <div class="carousel-item-content">
                                        <h4 class="hd-slide-header">Latest news and updates</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                                    <div class="media-body">
                                                        <h5>CORK Blog</h5>
                                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
@section('scripts')
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('vjr/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('vjr/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('vjr/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vjr/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('vjr/assets/js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('vjr/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('vjr/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('vjr/assets/js/widgets/modules-widgets.js')}}"></script>
@endsection
