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
                        <td>{{substr($reglement->contenu,0,20) ?? ''}} </td>

                        <td>
                            <div class="table-action">
                                <a class="btn btn-outline-primary btn-sm"
                                    href="{{route('reglement.edit',['reglement'=>$reglement->id])}}">
                                    Voir
                                </a>
                                <a class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Etes Vous sure ?')"
                                    href="{{route('reglement.destroy',['reglement'=>$reglement->id])}}">
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

@section('scripts')
        <script src="{{asset('vjr/assets/js/custom.js')}}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('vjr/plugins/table/datatable/datatables.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('table.multi-table').DataTable({
                    "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                        "<'table-responsive'tr>" +
                        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                    "oLanguage": {
                        "oPaginate": {
                            "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                            "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                        },
                        "sInfo": "Page _PAGE_ sur _PAGES_ ",
                        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                        "sSearchPlaceholder": "Search...",
                        "sLengthMenu": "Résultats :  _MENU_",
                    },
                    "stripeClasses": [],
                    "lengthMenu": [7, 10, 20, 50],
                    "pageLength": 7,
                    drawCallback: function() {
                        $('.t-dot').tooltip({
                            template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        })
                        $('.dataTables_wrapper table').removeClass('table-striped');
                    }
                });
            });
        </script>

@endsection

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{asset('vjr/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vjr/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vjr/plugins/table/datatable/custom_dt_multiple_tables.css')}}">

@endsection
