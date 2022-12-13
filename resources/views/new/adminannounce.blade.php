<!DOCTYPE html>
<!-- saved from url=(0053)https://coreui.io/demos/bootstrap/4.2/free/index.html -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--<base href="./">-->
    <base href=".">
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>E Modules</title>
    <link rel="manifest" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/Dashboard_files/simplebar.css">
    <link rel="stylesheet" href="/Dashboard_files/simplebar(1).css">

    <link href="/Dashboard_files/style.css" rel="stylesheet">

    <link rel="stylesheet" href="/Dashboard_files/prism.css">
    <link href="/Dashboard_files/examples.css" rel="stylesheet">
    <script type="text/javascript" async="" src="/Dashboard_files/js"></script>
    <script src="/Dashboard_files/667090843876081" async=""></script>
    <script src="/Dashboard_files/identity.js.download" async=""></script>
    <script type="text/javascript" async="" src="/Dashboard_files/fbevents.js.download"></script>
    <script type="text/javascript" async="" src="/Dashboard_files/analytics.js.download"></script>
    <script async="" src="/Dashboard_files/gtm.js.download"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KX4JH47');
    </script>
    <link href="/Dashboard_files/coreui-chartjs.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">

            <img class="sidebar-brand-full" src="/storage/images/favicon.ico" width="56" height="56"
                alt="" srcset="">
            <img class="sidebar-brand-narrow" src="/storage/images/favicon.ico"width="56" height="56"
                alt="" srcset="">

        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <li class="nav-item"><a class="nav-link" href="/">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-speedometer2"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                            <path fill-rule="evenodd"
                                                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                        </svg>Dashboard</a>
                                    {{-- <span class="badge badge-sm bg-info ms-auto">NEW</span> --}}
                                </li>
                                <li class="nav-title">Strand Mgt.</li>
                                <li class="nav-item"><a class="nav-link" href="/adminstrands">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-journal-text"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                            <path
                                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                        </svg> Subjects</a></li>
                                <li class="nav-title">Others</li>
                                <li class="nav-item"><a class="nav-link active" href="/announcements"
                                        target="_top">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-megaphone"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                                        </svg> Announcements</a></li>
                                <li class="nav-item"><a class="nav-link" href="/adminusers" target="_top">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-people"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                                        </svg> Users</a></li>
                                <li class="nav-item"><a class="nav-link" href="/reports" target="_top">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-graph-down"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M0 0h1v15h15v1H0V0Zm14.817 11.887a.5.5 0 0 0 .07-.704l-4.5-5.5a.5.5 0 0 0-.74-.037L7.06 8.233 3.404 3.206a.5.5 0 0 0-.808.588l4 5.5a.5.5 0 0 0 .758.06l2.609-2.61 4.15 5.073a.5.5 0 0 0 .704.07Z" />
                                        </svg> Reports</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about" target="_top">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-file-earmark-person-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z" />
                                        </svg> About</a></li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 256px; height: 841px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 247px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </ul>
        {{-- <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button> --}}
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector(&#39;#sidebar&#39;)).toggle()">
                    <svg id="ic_menu" class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button><a class="header-brand d-md-none" href="#">

                    <img src="/storage/images/favicon.ico"width="56" height="56" alt=""
                        srcset=""></a>
                {{-- <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="/strands">Home</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="https://coreui.io/demos/bootstrap/4.2/free/#">Users</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="https://coreui.io/demos/bootstrap/4.2/free/#">Settings</a></li>
                </ul> --}}
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                            href="https://coreui.io/demos/bootstrap/4.2/free/#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar avatar-md">
                                {{-- <img class="avatar-img" src="/Dashboard_files/8.jpg" alt="user@email.com"> --}}
                                @if ($pic == '')
                                    <img src="/images/user.png" alt="hugenerd"
                                        style="width: 46px !important; height: 46px !important;" class="avatar-img">
                                @else
                                    <img src="/storage/profiles/{{ $pic }}" alt="hugenerd"
                                        class="avatar-img" style="width: 46px !important; height: 46px !important;">
                                @endif
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">

                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div>
                            <a class="dropdown-item" href="/profile">
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg> Profile</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <a class="dropdown-item" data-coreui-toggle="modal" data-coreui-target="#logOutModal"
                                    style="cursor: pointer;">
                                    <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-box-arrow-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item active">
                            <span>Announcements</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <button class="btn btn-primary" data-coreui-toggle="modal"
                                    data-coreui-target="#addModuleModal" style="background-color: #ff589e">Add
                                    Announcement</button>
                            </div>
                            <div class="card-header">
                                <form action="/announcements" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Announcement"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="search">
                                        <button type="submit" class="input-group-text"
                                            id="basic-addon2">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <br>
                                <div class="table-responsive">
                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Card Picture
                                                </th>
                                                <th>
                                                    Subtext
                                                </th>
                                                <th>
                                                    Activated
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pageRes as $an)
                                                <tr>
                                                    <td>{{ $an['description'] }}</td>
                                                    <td>{{ $an['card'] }}</td>
                                                    <td>
                                                        {{ strlen($an['subtext']) > 60 ? substr($an['subtext'], 0, 60) . '...' : $an['subtext'] }}
                                                    </td>
                                                    <td>
                                                        @if ($an['activated'] == 0)
                                                            false
                                                        @else
                                                            true
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($an['activated'] == 0)
                                                            <button class="btn btn-primary" data-toggle="modal"
                                                                data-target="#activateModal{{ $an['announceID'] }}"
                                                                style="font-size: 12px;color:white">Activate</button>
                                                            <div class="modal fade"
                                                                id="activateModal{{ $an['announceID'] }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="activateModalLabel{{ $an['announceID'] }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <form
                                                                            action="{{ route('announcements.update', ['announcement' => $an['announceID']]) }}"
                                                                            method="POST">
                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <h5 class="modal-title"
                                                                                    id="activateModalLabel{{ $an['announceID'] }}">
                                                                                    Do
                                                                                    you want to proceed activating this
                                                                                    announcement
                                                                                    ?</h5>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary"
                                                                                    name="btnActivate"
                                                                                    value="true">Yes,
                                                                                    Proceed</button>
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <button class="btn btn-warning"
                                                                style="font-size: 12px;color:white;"
                                                                data-coreui-toggle="modal"
                                                                data-coreui-target="#deactivateModal{{ $an['announceID'] }}">Deactivate</button>
                                                            <div class="modal fade"
                                                                id="deactivateModal{{ $an['announceID'] }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="deactivateModalLabel{{ $an['announceID'] }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <form
                                                                            action="{{ route('announcements.update', ['announcement' => $an['announceID']]) }}"
                                                                            method="POST">
                                                                            @method('put')
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <h5 class="modal-title"
                                                                                    id="deactivateModalLabel{{ $an['announceID'] }}">
                                                                                    Do
                                                                                    you want to proceed deactivating
                                                                                    this
                                                                                    announcement
                                                                                    ?</h5>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary"
                                                                                    name="btnDeactivate"
                                                                                    value="true">Yes,
                                                                                    Proceed</button>
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-coreui-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif

                                                        <br>
                                                        <button class="btn btn-success"
                                                            style="font-size: 12px;color:white;"
                                                            data-coreui-toggle="modal"
                                                            data-coreui-target="#viewModuleModal{{ $an['announceID'] }}">View/Edit</button>
                                                        <div class="modal fade "
                                                            id="viewModuleModal{{ $an['announceID'] }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="viewModuleModalLabel{{ $an['announceID'] }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="viewModuleModalLabel{{ $an['announceID'] }}">
                                                                            View/Edit
                                                                            Announcement</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <form
                                                                                action="{{ route('announcements.update', ['announcement' => $an['announceID']]) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data"
                                                                                autocomplete="off">
                                                                                @method('put')
                                                                                @csrf
                                                                                <div class="form-group"
                                                                                    style="margin-left: 35px">
                                                                                    <label for="description"
                                                                                        class="for"><b>Description</b></label>
                                                                                    <br>
                                                                                    <input required type="text"
                                                                                        style="width:350px;"
                                                                                        name="description"
                                                                                        id="un"
                                                                                        value="{{ $an['description'] }}">
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 35px">
                                                                                    <label for="emodule"
                                                                                        class="emodule"><b>Card
                                                                                            Picture</b></label>
                                                                                    <br>
                                                                                    <input required type="file"
                                                                                        name="file" id=""
                                                                                        accept=".jpg, .png, .jpeg">
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 35px">
                                                                                    <label for="subtext"
                                                                                        class="for"><b>Subtext</b></label>
                                                                                    <br>
                                                                                    <input required type="text"
                                                                                        name="subtext"
                                                                                        style="width:350px;"
                                                                                        value="{{ $an['subtext'] }}">
                                                                                </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-coreui-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary"
                                                                            style="background-color: #ff589e"
                                                                            name="btnUpdate" value="true">Update
                                                                            Announcement</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <button class="btn btn-danger"
                                                            style="font-size: 12px;color:white;"
                                                            data-coreui-toggle="modal"
                                                            data-coreui-target="#deleteModal{{ $an['announceID'] }}">Delete</button>
                                                        <div class="modal fade"
                                                            id="deleteModal{{ $an['announceID'] }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="deleteModalLabel{{ $an['announceID'] }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form
                                                                        action="{{ route('announcements.destroy', ['announcement' => $an['announceID']]) }}"
                                                                        method="POST">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <h5 class="modal-title"
                                                                                id="deleteModalLabel{{ $an['announceID'] }}">
                                                                                Do
                                                                                you want to proceed deleting this
                                                                                announcement
                                                                                ?</h5>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit"
                                                                                class="btn btn-primary"
                                                                                name="btnDelete" value="true">Yes,
                                                                                Proceed</button>
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-coreui-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        @if ($startIndex > 1)
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="/adminstrands?page={{ $startIndex - 1 }}">Previous</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                        @endif

                                        @for ($i = 0; $i < $pageCount; $i++)
                                            {{-- @if ($startIndex == 5) --}}
                                            @if ($startIndex == $i + 1)
                                                <li class="page-item active"><a class="page-link" href="#"
                                                        style="background-color: #ff589e !important;">{{ $i + 1 }}</a>
                                                </li>
                                            @else
                                                <li class="page-item"><a class="page-link"
                                                        href="/adminstrands?page={{ $i + 1 }}">{{ $i + 1 }}</a>
                                                </li>
                                            @endif


                                            {{-- @endif --}}
                                        @endfor
                                        @if (count($announce) == 0)
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        @else
                                            @if ($pageCount - $startIndex <= 0)
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            @else
                                                <li class="page-item">
                                                    <a class="page-link"
                                                        href="/adminstrands?page={{ $startIndex + 1 }}">Next</a>
                                                </li>
                                            @endif

                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div><a href="https://coreui.io/">CoreUI </a><a href="https://coreui.io/">Bootstrap Admin Template</a> ©
                2022 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
        </footer>
    </div>

    <script src="/Dashboard_files/coreui.bundle.min.js.download"></script>
    <script src="/Dashboard_files/simplebar.min.js.download"></script>

    <script src="/Dashboard_files/chart.min.js.download"></script>
    <script src="/Dashboard_files/coreui-chartjs.js.download"></script>
    <script src="/Dashboard_files/coreui-utils.js.download"></script>
    <script src="/Dashboard_files/main.js.download"></script>
    <script></script>
    <div class="modal fade " id="addModuleModal" tabindex="-1" role="dialog"
        aria-labelledby="addModuleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModuleModalLabel">Add Announcement</h5>
                    <button type="button" class="close" data-coreui-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="{{ route('announcements.store') }}" method="POST"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group" style="margin-left: 35px">
                                <label for="description" class="for"><b>Description</b></label>
                                <br>
                                <input required type="text" style="width:350px;" name="description"
                                    id="un">
                            </div>
                            <div class="form-group" style="margin-left: 35px">
                                <label for="emodule" class="emodule"><b>Card Picture</b></label>
                                <br>
                                <input required type="file" name="file" id=""
                                    accept=".jpg, .png, .jpeg">
                            </div>
                            <div class="form-group" style="margin-left: 35px">
                                <label for="subtext" class="for"><b>Subtext</b></label>
                                <br>
                                <input required type="text" name="subtext" style="width:350px;">
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #ff589e" name="btnAdd"
                        value="true">Add
                        Announcement</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="logOutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/logout" method="GET">
                    <div class="modal-body">
                        <h5 class="modal-title" id="logOutModalLabel">Do you want to proceed logging out ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes, Proceed</button>
                        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-primary" id="btnToast" style="visibility: hidden" onclick="clickToast()"></button>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="/storage/images/favicon.ico" width="36px" height="36px" class="rounded me-2"
                    alt="...">
                <strong class="me-auto">E Modules New Announcement</strong>
                {{-- <small>11 mins ago</small> --}}
                <button type="button" class="btn-close" data-coreui-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="announceBody">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
    <script src="https://js.pusher.com/7.2.0/pusher.min.js"></script>
    <script src="js/push.js"></script>
    <script>
        function clickToast() {
            const toastLiveExample = document.getElementById('liveToast');
            const toast = new coreui.Toast(toastLiveExample);
            toast.show();
        }
    </script>
    @if (session()->pull('successUpdateAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Announcement',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successUpdateAnnounce') }}
    @endif
    @if (session()->pull('successDeleteAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Announcement',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successDeleteAnnounce') }}
    @endif
    @if (session()->pull('successAddingAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Announcement Record',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successAddingAnnounce') }}
    @endif
    @if (session()->pull('errorDeleteAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to delete announcement, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorDeleteAnnounce') }}
    @endif
    @if (session()->pull('errorUpdateAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to update announcement, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorUpdateAnnounce') }}
    @endif
    @if (session()->pull('errorAddingAnnounce'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add announcement, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorAddingAnnounce') }}
    @endif
    @if (session()->pull('errorExistingSequence'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add module, Existing Sequence, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorExistingSequence') }}
    @endif

</body>

</html>
