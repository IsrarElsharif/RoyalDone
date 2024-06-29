<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <!--icon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/royal.png') }}" type="image/x-icon">

    <title>Royal Done~ @yield('titel') </title>
    {{-- <link rel="apple-touch-icon" href="{{ asset('images/ico/apple-icon-120.png') }}"> --}}
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/ico/favicon.ico') }}"> --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marhey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/calendars/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/extensions/dragula.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/extensions/jstree.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-chat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-chat-list.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/forms/form-quill-editor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-todo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-email.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-file-manager.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css-rtl/plugins/extensions/ext-component-tree.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="content-left-sidebar">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
        data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="navbar-brand"
                        href="{{ route('guest') }}"><span class="brand-logo">
                            <img src="{{ asset('assets/img/royal1.png') }}" alt="Royal Done logo">
                        </span>
                        <h2 class="brand-text mb-0">Royal Done</h2>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href=""><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('email') }}"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="البريد الإلكتروني"><i class="ficon"
                                data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href=" {{ route('chat') }}"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="الدردشة"><i class="ficon"
                                data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('calender') }}"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="التقويم"><i class="ficon"
                                data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('todo') }}"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="قائمة المهام"><i class="ficon"
                                data-feather="check-square"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                                data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle"
                        id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                            class="selected-language">عربي</span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                        <a class="dropdown-item" href="#" data-language="Ar">
                            <i class="flag-icon flag-icon-fr"></i> عربي</a> 
                        <a class="dropdown-item" href="#" data-language="en">
                            <i class="flag-icon flag-icon-us"></i> English</a>
                                                       
                            </div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="تصفح رويال ..."
                            tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>


                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                            class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">التنبيهات</h4>
                                <div class="badge rounded-pill badge-light-primary">6 جديدة</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="{{ asset('assets/img/logo.jpg') }}"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">تم اسناد مهمة إليك
                                                🎉</span>هل أنت مستعد!</p><small class="notification-text"> فلان
                                            الفلاني أسند مهة لك.</small>
                                    </div>
                                </div>
                            </a>

                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">تنبيهات النظام</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> </small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage
                                        </p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">قراءة كل التنبيهات</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">فلان الفلان</span>
                            <span class="user-status">مدير النظام</span>
                        </div>
                            <span class="avatar"><img class="round" src="{{ asset('assets/img/logo.jpg') }}" alt="avatar" height="40" width="40">
                                <span class="avatar-status-online"></span>
                            </span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ route('accountSettings') }}">
                            <i class="me-50" data-feather="user"></i> الملف الشخصي</a>
                            <a class="dropdown-item" href="{{ route('email') }}"><i class="me-50" data-feather="mail"></i> صندوق الوارد</a>
                            <a class="dropdown-item" href="{{ route('todo') }}">
                            <i class="me-50" data-feather="check-square"></i> المهام</a>
                            <a class="dropdown-item" href="{{ route('chat') }}">
                            <i class="me-50" data-feather="message-square"></i> الدردشة</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('accountSettings') }}"><i class="me-50" data-feather="settings"></i> الإعدادات</a>
                            {{-- <a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                                data-feather="credit-card"></i> Pricing</a> --}}
                                {{-- <a class="dropdown-item"
                            href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a> --}}
                        <a class="dropdown-item" href=""><i class="me-50" data-feather="power"></i> تسجيل الخروج</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="me-75" data-feather="alert-circle"></span><span>لا يوجد نتائج.
                    </span>
                </div>
            </a>
        </li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl"
            role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item me-auto"><a class="navbar-brand"
                            href="{{ route('guest') }}"><span class="brand-logo">
                                <img src="{{ asset('assets/img/royal.png') }}" alt="">
                                
                            </span>
                            <h2 class="brand-text mb-0">Royal Done</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                            data-bs-toggle="collapse"><i
                                class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                                data-feather="x"></i></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href=""
                            data-bs-toggle="dropdown"><i data-feather="home"></i><span
                                data-i18n="Dashboards">لوحة التحكم</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('dashboardAnalytics') }}" data-bs-toggle="" data-i18n="Analytics"><i
                                        data-feather="activity"></i><span data-i18n="Analytics">الاحصائيات</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href=""
                            data-bs-toggle="dropdown"><i data-feather="package"></i><span
                                data-i18n="Apps">التطبيقات</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('email') }}" data-bs-toggle="" data-i18n="Email"><i
                                        data-feather="mail"></i><span data-i18n="Email">البريد الإلكتروني</span></a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('chat') }}" data-bs-toggle="" data-i18n="Chat"><i data-feather="message-square"></i>
                                        <span data-i18n="Chat">الشات</span></a>
                            </li>
                            <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('todo') }}" data-bs-toggle="" data-i18n="Todo"><i
                                        data-feather="check-square"></i><span data-i18n="Todo">فائمة المهام</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('calender') }}" data-bs-toggle="" data-i18n="Calendar"><i
                                        data-feather="calendar"></i><span data-i18n="Calendar">التقويم</span></a>
                            </li>
                            
                            
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('fileManager') }}" data-bs-toggle="" data-i18n="File Manager"><i
                                        data-feather="save"></i><span data-i18n="File Manager">إدارة الملفات</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')





    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">جميع الحقوق  &copy;
                2024<a class="ms-25" href="https://israr.yallafaker.com/"
                    target="_blank"></a><span class="d-none d-sm-inline-block">, محفوظة
                    </span></span><span class="float-md-end d-none d-md-block">تم البرمجته بواسطة israr<i
                    data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/jstree.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/scripts/pages/app-todo.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/pages/app-calendar-events.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/pages/app-calendar.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/pages/app-chat.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/pages/app-email.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/pages/app-file-manager.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
