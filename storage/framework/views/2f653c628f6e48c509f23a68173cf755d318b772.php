<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Veille juridique & Réglementaires</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('vjr/assets/img/favicon.ico')); ?>" />
    <link href="<?php echo e(asset('vjr/assets/css/loader.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(asset('vjr/assets/js/loader.js')); ?>"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('vjr/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('vjr/assets/css/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('vjr/assets/css/structure.css')); ?>" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vjr/assets/css/dashboard/dash_1.css')); ?>" rel="stylesheet" type="text/css" class="dashboard-analytics" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="dashboard-analytics admin-header">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <div class="theme-logo">
                <a href="index.html">
                    <img src="<?php echo e(asset('vjr/assets/img/90x90.jpg')); ?>" class="navbar-logo" alt="logo">
                    <span class="admin-logo">V.J.R<span>
                </a>
            </div>

            <div class="sidebarCollapseFixed">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-left">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </div>

            <nav id="compactSidebar">
            <ul class="menu-categories">
                    <li class="menu menu menu-single">
                        <a href="<?php echo e(route('admin')); ?>" data-active="false"  class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                                <span>Acceuil</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu menu-single">
                        <a href="<?php echo e(route('reglement.index')); ?>" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="<?php echo e(asset('vjr/assets/img/re.png')); ?>" width="29px">
                                </div>
                                <span>Réglements</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#uiKit" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="<?php echo e(asset('vjr/assets/img/code.png')); ?>" width="29px">
                                </div>
                                <span>Codes</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-single">
                        <a href="./Utilisateurs.html" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="<?php echo e(asset('vjr/assets/img/us.png')); ?>" width="29px">
                                </div>
                                <span>Utilisateurs</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-single">
                        <a href="./forum.html" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="<?php echo e(asset('vjr/assets/img/forum.png')); ?>" width="29px">
                                </div>
                                <span>Forum</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#tables" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="<?php echo e(asset('vjr/assets/img/options.png')); ?>" width="29px">
                                </div>
                                <span>Options</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="<?php echo e(asset('vjr/assets/img/book.png')); ?>" width="29px">
                                </div>
                                <span>Archives</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu menu-single">
                        <a href="widgets.html" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="<?php echo e(asset('vjr/assets/img/chart.png')); ?>" width="29px">
                                </div>
                                <span>Rapports</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="<?php echo e(asset('vjr/assets/img/log-out.png')); ?>" width="29px">
                                </div>
                                <span class="">Déconnexion</span>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>                                

                            </div>
                        </a>
                    </li>
                </ul>

            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">

                <div class="submenu" id="dashboard">
                    <ul class="submenu-list menu-block-submenu" data-parent-element="#dashboard">
                        <li class="active menu-block">
                            <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg> Analytics </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="app">
                    <ul class="submenu-list menu-block-submenu" data-parent-element="#app">
                        <li class="menu-block">
                            <a href="apps_chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-message-square">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg> Chat </a>
                        </li>
                        <li class="menu-block">
                            <a href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg> Mailbox </a>
                        </li>
                        <li class="menu-block">
                            <a href="apps_todoList.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg> Todo List </a>
                        </li>
                        <li class="menu-block">
                            <a href="apps_notes.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg> Notes</a>
                        </li>
                        <li class="menu-block">
                            <a href="apps_scrumboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="12" y1="18" x2="12" y2="12"></line>
                                    <line x1="9" y1="15" x2="15" y2="15"></line>
                                </svg> Scrumboard</a>
                        </li>
                        <li class="menu-block">
                            <a href="apps_contacts.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg> Contacts</a>
                        </li>
                        <li class="menu-block">
                            <a href="apps_invoice-list.html"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg> Invoice </a>
                        </li>
                        <li class="menu-block">
                            <a href="apps_calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg> Calendar</a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="uiKit">
                    <ul class="submenu-list" data-parent-element="#uiKit">
                        <li>
                            <a href="ui_alerts.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Alerts </a>
                        </li>
                        <li>
                            <a href="ui_avatar.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Avatar </a>
                        </li>
                        <li>
                            <a href="ui_badges.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Badges </a>
                        </li>
                        <li>
                            <a href="ui_breadcrumbs.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Breadcrumbs </a>
                        </li>
                        <li>
                            <a href="ui_buttons.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Buttons </a>
                        </li>
                        <li>
                            <a href="ui_buttons_group.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Button Groups </a>
                        </li>
                        <li>
                            <a href="ui_color_library.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Color Library </a>
                        </li>
                        <li>
                            <a href="ui_dropdown.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Dropdown </a>
                        </li>
                        <li>
                            <a href="ui_infobox.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Infobox </a>
                        </li>
                        <li>
                            <a href="ui_jumbotron.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Jumbotron </a>
                        </li>
                        <li>
                            <a href="ui_loader.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Loader </a>
                        </li>
                        <li>
                            <a href="ui_pagination.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Pagination </a>
                        </li>
                        <li>
                            <a href="ui_popovers.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Popovers </a>
                        </li>
                        <li>
                            <a href="ui_progress_bar.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Progress Bar </a>
                        </li>
                        <li>
                            <a href="ui_search.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Search </a>
                        </li>
                        <li>
                            <a href="ui_tooltips.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Tooltips </a>
                        </li>
                        <li>
                            <a href="ui_treeview.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Treeview </a>
                        </li>
                        <li>
                            <a href="ui_typography.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Typography </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="components">
                    <ul class="submenu-list" data-parent-element="#components">
                        <li>
                            <a href="component_tabs.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Tabs </a>
                        </li>
                        <li>
                            <a href="component_accordion.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Accordions </a>
                        </li>
                        <li>
                            <a href="component_modal.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Modals </a>
                        </li>
                        <li>
                            <a href="component_cards.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Cards </a>
                        </li>
                        <li>
                            <a href="component_bootstrap_carousel.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Carousel</a>
                        </li>
                        <li>
                            <a href="component_blockui.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Block UI </a>
                        </li>
                        <li>
                            <a href="component_countdown.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Countdown </a>
                        </li>
                        <li>
                            <a href="component_counter.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Counter </a>
                        </li>
                        <li>
                            <a href="component_sweetalert.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Sweet Alerts </a>
                        </li>
                        <li>
                            <a href="component_timeline.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Timeline </a>
                        </li>
                        <li>
                            <a href="component_snackbar.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Notifications </a>
                        </li>
                        <li>
                            <a href="component_session_timeout.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Session Timeout </a>
                        </li>
                        <li>
                            <a href="component_media_object.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Media Object </a>
                        </li>
                        <li>
                            <a href="component_list_group.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> List Group </a>
                        </li>
                        <li>
                            <a href="component_pricing_table.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Pricing Tables </a>
                        </li>
                        <li>
                            <a href="component_lightbox.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Lightbox </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="forms">
                    <ul class="submenu-list" data-parent-element="#forms">
                        <li>
                            <a href="form_bootstrap_basic.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Basic </a>
                        </li>
                        <li>
                            <a href="form_input_group_basic.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Input Group </a>
                        </li>
                        <li>
                            <a href="form_layouts.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Layouts </a>
                        </li>
                        <li>
                            <a href="form_validation.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Validation </a>
                        </li>
                        <li>
                            <a href="form_input_mask.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Input Mask </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_select.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Bootstrap Select </a>
                        </li>
                        <li>
                            <a href="form_select2.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Select2 </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_touchspin.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> TouchSpin </a>
                        </li>
                        <li>
                            <a href="form_maxlength.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Maxlength </a>
                        </li>
                        <li>
                            <a href="form_checkbox_radio.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Checkbox &amp; Radio </a>
                        </li>
                        <li>
                            <a href="form_switches.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Switches </a>
                        </li>
                        <li>
                            <a href="form_wizard.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Wizards </a>
                        </li>
                        <li>
                            <a href="form_fileupload.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> File Upload </a>
                        </li>
                        <li>
                            <a href="form_quill.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Quill Editor </a>
                        </li>
                        <li>
                            <a href="form_markdown.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Markdown Editor </a>
                        </li>
                        <li>
                            <a href="form_date_range_picker.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Date &amp; Range Picker </a>
                        </li>
                        <li>
                            <a href="form_clipboard.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Clipboard </a>
                        </li>
                        <li>
                            <a href="form_typeahead.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Typeahead </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="tables">
                    <ul class="submenu-list" data-parent-element="#tables">
                        <li>
                            <a href="table_basic.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Basic Tables</a>
                        </li>
                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#datatables"
                                aria-expanded="true">
                                <div><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-folder">
                                            <path
                                                d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                            </path>
                                        </svg></span> Datatables</div> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                            <ul id="datatables" class="collapse show" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="table_dt_basic.html"> Basic </a>
                                </li>
                                <li>
                                    <a href="table_dt_striped_table.html"> Striped Table </a>
                                </li>
                                <li>
                                    <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                </li>
                                <li>
                                    <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                </li>
                                <li>
                                    <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                </li>
                                <li>
                                    <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                                </li>
                                <li>
                                    <a href="table_dt_custom.html"> Custom </a>
                                </li>
                                <li>
                                    <a href="table_dt_range_search.html"> Range Search </a>
                                </li>
                                <li>
                                    <a href="table_dt_html5.html"> HTML5 Export </a>
                                </li>
                                <li>
                                    <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                </li>
                                <li>
                                    <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="pages">
                    <ul class="submenu-list" data-parent-element="#pages">
                        <li>
                            <a href="pages_helpdesk.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Helpdesk </a>
                        </li>
                        <li>
                            <a href="pages_contact_us.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Contact Form </a>
                        </li>
                        <li>
                            <a href="pages_faq.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> FAQ </a>
                        </li>
                        <li>
                            <a href="pages_faq2.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> FAQ 2 </a>
                        </li>
                        <li>
                            <a href="pages_privacy.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Privacy Policy </a>
                        </li>
                        <li>
                            <a href="pages_coming_soon.html" target="_blank"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Coming Soon </a>
                        </li>
                        <li>
                            <a href="user_profile.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Profile </a>
                        </li>
                        <li>
                            <a href="user_account_setting.html"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Account Settings </a>
                        </li>
                        <li>
                            <a href="fonticons.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Font Icons </a>
                        </li>

                        <li>
                            <a href="pages_error404.html" target="_blank"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Error 404 </a>
                        </li>
                        <li>
                            <a href="pages_error500.html" target="_blank"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Error 500 </a>
                        </li>

                        <li>
                            <a href="pages_error503.html" target="_blank"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Error 503 </a>
                        </li>
                        <li>
                            <a href="pages_maintenence.html" target="_blank"><span class="icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Maintanence </a>
                        </li>

                    </ul>
                </div>

                <div class="submenu" id="more">
                    <ul class="submenu-list" data-parent-element="#more">

                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#auth"
                                aria-expanded="false">
                                <div> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-folder">
                                            <path
                                                d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                            </path>
                                        </svg></span> Authentication</div> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                            <ul id="auth" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="auth_login.html" target="_blank"> Login </a>
                                </li>
                                <li>
                                    <a href="auth_login_boxed.html" target="_blank"> Login Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_register.html" target="_blank"> Register </a>
                                </li>
                                <li>
                                    <a href="auth_register_boxed.html" target="_blank"> Register Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_lockscreen.html" target="_blank"> Unlock </a>
                                </li>
                                <li>
                                    <a href="auth_lockscreen_boxed.html" target="_blank"> Unlock Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_pass_recovery.html" target="_blank"> Recover ID </a>
                                </li>
                                <li>
                                    <a href="auth_pass_recovery_boxed.html" target="_blank"> Recover ID Boxed </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="dragndrop_dragula.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Drag and Drop </a>
                        </li>
                        <li>
                            <a href="charts_apex.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Charts </a>
                        </li>
                        <li>
                            <a href="map_jvector.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-git-commit">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                        <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                                    </svg></span> Maps </a>
                        </li>
                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#starter-kit"
                                aria-expanded="true">
                                <div><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-folder">
                                            <path
                                                d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                            </path>
                                        </svg></span> Starter Kit</div> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                            <ul id="starter-kit" class="collapse show" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="starter_kit_blank_page.html"> Blank Page </a>
                                </li>
                                <li>
                                    <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                                </li>
                                <li>
                                    <a href="starter_kit_alt_menu.html"> Alternate Menu </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="content-container">

                    <div class="col-left layout-top-spacing">
                        <div class="col-left-content">

                            <div class="header-container">
                                <header class="header navbar navbar-expand-sm">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        <div class="page-header">
                                            <div class="page-title">
                                                <h3>Tableau de Bord</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="header-actions">
                                        <div class="nav-item dropdown language-dropdown more-dropdown">
                                            <div class="dropdown custom-dropdown-icon">
                                                <a class="dropdown-toggle btn" href="#" role="button"
                                                    id="customDropdown" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><img src="<?php echo e(asset('vjr/assets/img/flag-fr3.svg')); ?>"
                                                        class="flag-width" alt="flag"><span>Français</span> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg></a>

                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="customDropdown">
                                                    <a class="dropdown-item" data-img-value="flag-de3"
                                                        data-value="German" href="javascript:void(0);"><img
                                                            src="<?php echo e(asset('vjr/assets/img/flag-de3.svg')); ?>" class="flag-width" alt="flag">
                                                        Arabe</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="toggle-notification-bar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-bell">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </header>
                            </div>

                            <div class="admin-data-content layout-top-spacing">
                                <?php echo $__env->yieldContent('content'); ?>
                                <!-- <div class="row">
                                    
                                    <div class="footer-wrapper col-xl-12">
                                        <div class="footer-section f-section-1">
                                            <p class="">© 2022 <a target="_blank"
                                                    href="https://designreset.com">Médiataire de la République</a></p>
                                        </div>
                                        <div class="footer-section f-section-2">
                                            <p class="">Veille Juridique et Réglementairs</p>
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                            </path>
                                            </svg>
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-right">
                                <div class="col-right-content">
                                    <div class="navbar-item flex-row search-ul navbar-dropdown">
                                        <div class="nav-item align-self-center search-animated">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search toggle-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                            <form class="form-inline search-full form-inline search" role="search">
                                                <div class="search-bar">
                                                    <input type="text"
                                                        class="form-control search-form-control  ml-lg-auto"
                                                        placeholder="Recherche">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-right-content-container">

                                        <div class="activity-section">

                                            <div class="widget-profile">

                                                <div class="w-profile-view">
                                                    <img src="<?php echo e(asset('vjr/assets/img/90x90.jpg')); ?>" alt="admin-profile"
                                                        class="img-fluid">
                                                    <div class="w-profile-content">
                                                        <h6>Médiateire de la République</h6>
                                                        <p>Lahwazi Youcef</p>
                                                    </div>
                                                </div>

                                                <div class="w-profile-links">
                                                    <a href="user_profile.html" class="w-p-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-user">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg>
                                                        <p>Profil</p>
                                                    </a>

                                                    <a href="apps_mailbox.html" class="w-p-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-inbox">
                                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12">
                                                            </polyline>
                                                            <path
                                                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                                            </path>
                                                        </svg>
                                                        <p>Messages</p>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="widget-todo">
                                                <div class="todo-content">
                                                    <div class="todo-title">
                                                        <h6><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-edit">
                                                                    <path
                                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                    </path>
                                                                    <path
                                                                        d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                    </path>
                                                                </svg></span>
                                                            <span class="align-self-center">Ajouter</span></h6>
                                                    </div>
                                                    <div class="todo-text">
                                                        <a href="apps_todoList.html">
                                                            <p>Réglements</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="widget-message">
                                                <div class="widget-title">
                                                    <h5>Forum</h5>
                                                    <a href="apps_chat.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-message-circle">
                                                            <path
                                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>

                                                <div class="widget-messages">
                                                    <a href="apps_chat.html" class="w-message">
                                                        <img src="<?php echo e(asset('vjr/assets/img/90x90.jpg')); ?>" alt="" class="img-fluid">
                                                        <div class="msg-content">
                                                            <h5 class="w-msg-username">Andy King</h5>
                                                            <p class="w-msg-text">Work is delayed</p>
                                                        </div>
                                                    </a>

                                                    <a href="apps_chat.html" class="w-message">
                                                        <img src="<?php echo e(asset('vjr/assets/img/90x90.jpg')); ?>" alt="" class="img-fluid">
                                                        <div class="msg-content">
                                                            <h5 class="w-msg-username">Alma Clark</h5>
                                                            <p class="w-msg-text">It was a bit dramatic.</p>
                                                        </div>
                                                    </a>

                                                    <a href="apps_chat.html" class="w-message">
                                                        <img src="<?php echo e(asset('vjr/assets/img/90x90.jpg')); ?>" alt="" class="img-fluid">
                                                        <div class="msg-content">
                                                            <h5 class="w-msg-username">Vincent</h5>
                                                            <p class="w-msg-text">Coffee?</p>
                                                        </div>
                                                    </a>

                                                    <a href="apps_chat.html" class="w-message">
                                                        <img src="<?php echo e(asset('vjr/assets/img/90x90.jpg')); ?>" alt="" class="img-fluid">
                                                        <div class="msg-content">
                                                            <h5 class="w-msg-username">Iris Hofman</h5>
                                                            <p class="w-msg-text">Not comming to office today.</p>
                                                        </div>
                                                    </a>

                                                    <a href="apps_chat.html" class="w-message">
                                                        <img src="<?php echo e(asset('vjr/assets/img/90x90.jpg')); ?>" alt="" class="img-fluid">
                                                        <div class="msg-content">
                                                            <h5 class="w-msg-username">Linda Nelson</h5>
                                                            <p class="w-msg-text">Uploaded files to server.</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="widget-invoice">
                                                <div class="widget-title">
                                                    <h5>Derniers Réglements</h5>
                                                    <a href="apps_invoice.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-shopping-bag">
                                                            <path
                                                                d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z">
                                                            </path>
                                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                        </svg>
                                                    </a>
                                                </div>

                                                <div class="widget-invoice-lists">
                                                    <div class="w-invoice">
                                                        <p class="w-inv-text"><a href="apps_invoice.html"><span
                                                                    class="inv-number">#002658</span></a> is generated
                                                            for <span class="usr-name">Laurie Fox</span></p>
                                                    </div>

                                                    <div class="w-invoice">
                                                        <p class="w-inv-text"><a href="apps_invoice.html"><span
                                                                    class="inv-number">#0036489</span></a> is generated
                                                            for <span class="usr-name">Ernest Reeves</span></p>
                                                    </div>

                                                    <div class="w-invoice">
                                                        <p class="w-inv-text"><a href="apps_invoice.html"><span
                                                                    class="inv-number">#014778</span></a> is generated
                                                            for <span class="usr-name">Sean Freeman</span></p>
                                                    </div>

                                                    <div class="w-invoice">
                                                        <p class="w-inv-text"><a href="apps_invoice.html"><span
                                                                    class="inv-number">#0165987</span></a> is generated
                                                            for <span class="usr-name">Nia Hillyer</span></p>
                                                    </div>

                                                    <div class="w-invoice">
                                                        <p class="w-inv-text"><a href="apps_invoice.html"><span
                                                                    class="inv-number">#0265998</span></a> is generated
                                                            for <span class="usr-name">Dale Butler</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
        <script src="<?php echo e(asset('vjr/assets/js/libs/jquery-3.1.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vjr/bootstrap/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vjr/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vjr/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vjr/assets/js/app.js')); ?>"></script>
        <script>
            $(document).ready(function () {
                App.init();
            });
        </script>
        <script src="<?php echo e(asset('vjr/assets/js/custom.js')); ?>"></script>
        

       
        <script src="<?php echo e(asset('vjr/plugins/apex/apexcharts.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vjr/assets/js/dashboard/dash_1.js')); ?>"></script>
                                        

</body>

</html>