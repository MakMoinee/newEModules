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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">

            <img class="sidebar-brand-full" src="/storage/images/favicon.ico" width="36" height="36"
                alt="" srcset="">
            <img class="sidebar-brand-narrow" src="/storage/images/favicon.ico"width="36" height="36"
                alt="" srcset="">

            <p class="sidebar-brand-full" style="font-size: 12px;padding-top: 15px;padding-left: 5px;">Merr-C Society
                Academy</p>
            <p class="sidebar-brand-narrow" style="font-size: 12px;padding-top: 15px;padding-left: 5px;">Merr-C Society
                Academy</p>

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
                                {{-- <li class="nav-item"><a class="nav-link active"
                                        href="https://coreui.io/demos/bootstrap/4.2/free/index.html">
                                        <svg class="nav-icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                        </svg> Home</a> --}}
                                {{-- <span class="badge badge-sm bg-info ms-auto">NEW</span> --}}
                                {{-- </li> --}}
                                <li class="nav-title">Strands</li>
                                <li class="nav-item"><a class="nav-link active" href="/course?category=CORE">
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
                                <li class="nav-item"><a class="nav-link" href="/studentannounce" target="_top">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-megaphone"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                                        </svg> Announcements</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about" target="_top">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-file-earmark-person-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z" />
                                        </svg> About</a></li>

                                <li class="nav-item"><a class="nav-link" href="/contactus" target="_top">
                                        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-chat-left-dots"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path
                                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg> Contact US</a></li>
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
                </button><a class="header-brand d-md-none" href="/">

                    <img src="/storage/images/favicon.ico"width="46" height="46" alt=""
                        srcset=""></a>
                <ul class="header-nav d-md-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="/" style="font-size: 12px;">Merr-C Society
                            Academy</a></li>
                </ul>
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
                            <span>Subjects</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            @if ($track == 'ABM')
                                <div class="card-header">ACCOUNTANCY, BUSINESS AND MANAGEMENT </div>
                            @endif

                            @if ($track == 'GAS')
                                <div class="card-header">GENERAL ACADEMIC STRAND</div>
                            @endif
                            @if ($track == 'TVL')
                                <div class="card-header">TECHNOLOGY, VOCATIONAL, LIVELIHOOD</div>
                            @endif
                            @if ($track == 'HUMSS')
                                <div class="card-header">HUMANITIES & SOCIAL SCIENCES</div>
                            @endif
                            @if ($track == 'STEM')
                                <div class="card-header">SCIENCE, TECHNOLOGY, ENGINEERING AND
                                    MATHEMATICS</div>
                            @endif

                            <div class="card-header">
                                <ul
                                    style="display: inline-block;list-style-type: none;margin-left: -30px;margin-bottom: -20px;">
                                    @if ($category == 'CORE')
                                        <li class="nav-item active" style="display: inline-block;">
                                            <a class="nav-link" href="/course?category=CORE"><b>CORE</b>
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item " style="display: inline-block;">
                                            <a class="nav-link" href="/course?category=CORE">CORE
                                            </a>
                                        </li>
                                    @endif
                                    @if ($category == 'APPLIED')
                                        <li class="nav-item active" style="display: inline-block;margin-left: 10px;">
                                            <a class="nav-link" href="/course?category=APPLIED"><b>APPLIED</b>
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item " style="display: inline-block;margin-left: 10px;">
                                            <a class="nav-link" href="/course?category=APPLIED">APPLIED
                                            </a>
                                        </li>
                                    @endif
                                    @if ($category == 'SPECIALIZED')
                                        <li class="nav-item active" style="display: inline-block;margin-left: 10px;">
                                            <a class="nav-link" href="/course?category=SPECIALIZED"><b>SPECIALIZED
                                                    {{ $track }}</b>
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item " style="display: inline-block;margin-left: 10px;">
                                            <a class="nav-link" href="/course?category=SPECIALIZED">SPECIALIZED
                                                {{ $track }}
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="card-header">
                                <form action="/course" method="get">
                                    <div class="input-group mb-3">
                                        <input type="hidden" name="category" value="{{ $category }}">
                                        <input type="text" class="form-control" placeholder="Search Subject"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="search">
                                        <button type="submit" class="input-group-text"
                                            id="basic-addon2">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="table-responsive">
                                        <table class="table border mb-0">
                                            <thead class="table-light fw-semibold">
                                                <tr class="align-middle">
                                                    <th>
                                                        Subject
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pageRes as $tr)
                                                    <tr>
                                                        <td>{{ $tr['description'] }}
                                                            <button style="float: right;" class="btn btn-btn-primary"
                                                                data-coreui-toggle="modal"
                                                                data-coreui-target="#viewModal{{ $tr['trackID'] }}">...</button>
                                                            <div class="modal fade" id="viewModal{{ $tr['trackID'] }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="viewModalLabel{{ $tr['trackID'] }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <center>
                                                                                <h5 class="modal-title"
                                                                                    id="viewModalLabel{{ $tr['trackID'] }}">
                                                                                    {{ $tr['description'] }}
                                                                                </h5>
                                                                            </center>
                                                                        </div>
                                                                        <form action="#" method="GET">
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="No. Of Hours"
                                                                                        class="for">No. Of
                                                                                        Hours:</label>
                                                                                    <br>
                                                                                    <input required readonly type="number"
                                                                                        name="hours" id=""
                                                                                        value="{{ $tr['hours'] }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="prerequisite"
                                                                                        class="for">Pre-requisite:</label>
                                                                                    <br>
                                                                                    <input readonly type="text"
                                                                                        name="prerequisite"
                                                                                        id=""
                                                                                        value="{{ $tr['prerequisite'] }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="emodules"
                                                                                        class="for">E
                                                                                        Modules:</label>
                                                                                    <div class="card">

                                                                                        @foreach ($moduleHelper as $mh)
                                                                                            @if ($mh['trackID'] == $tr['trackID'])
                                                                                                @if ($mh['isAvailable'])
                                                                                                    <div class="card-body"
                                                                                                        style="margin-left: -45px;">
                                                                                                        @foreach ($emodules as $em)
                                                                                                            <ul
                                                                                                                style="list-style-type: none">
                                                                                                                @if ($em['trackID'] == $mh['trackID'])
                                                                                                                    <li>
                                                                                                                        <p style="text-decoration: none;color: teal;cursor: pointer;"
                                                                                                                            onclick="openViewer('{{ $em['filePath'] }}')"
                                                                                                                            value="{{ $em['filePath'] }}"
                                                                                                                            data-coreui-dismiss="modal">
                                                                                                                            {{ $em['description'] }}
                                                                                                                        </p>
                                                                                                                        {{-- <a style="text-decoration: none"
                                                                                                                            href="{{ route('viewer.show', ['viewer' => $em['filePath']]) }}"
                                                                                                                            target="_blank">{{ $em['description'] }}</a> --}}
                                                                                                                    </li>
                                                                                                                    <hr>
                                                                                                                @endif
                                                                                                            </ul>
                                                                                                        @endforeach
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="card-body">
                                                                                                            <p> There
                                                                                                                are no
                                                                                                                available
                                                                                                                e
                                                                                                                modules.
                                                                                                            </p>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        {{-- <button type="submit"
                                                                                    class="btn btn-primary">Yes,
                                                                                    Proceed</button> --}}
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
                        </div>
                        <div class="card-footer">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    @if ($startIndex > 1)
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="/course?category={{ $category }}&page={{ $startIndex - 1 }}">Previous</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#">Previous</a>
                                        </li>
                                    @endif

                                    @for ($i = 0; $i < $pageCount; $i++)
                                        {{-- @if ($startIndex == 5) --}}
                                        @if ($startIndex == $i + 1)
                                            <li class="page-item active"><a class="page-link"
                                                    href="#">{{ $i + 1 }}</a></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                    href="/course?category={{ $category }}&page={{ $i + 1 }}">{{ $i + 1 }}</a>
                                            </li>
                                        @endif


                                        {{-- @endif --}}
                                    @endfor
                                    @if (count($trackRes) == 0)
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
                                                    href="/course?category={{ $category }}&page={{ $startIndex + 1 }}">Next</a>
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
    </div>
    <div>
        <button style="visibility: hidden" data-coreui-target="#previewModal" data-coreui-toggle="modal"
            id="btnShowPreview"></button>
    </div>

    <script src="/Dashboard_files/coreui.bundle.min.js.download"></script>
    <script src="/Dashboard_files/simplebar.min.js.download"></script>

    <script src="/Dashboard_files/chart.min.js.download"></script>
    <script src="/Dashboard_files/coreui-chartjs.js.download"></script>
    <script src="/Dashboard_files/coreui-utils.js.download"></script>
    <script src="/Dashboard_files/main.js.download"></script>
    <script></script>
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
    <div class="modal fade " id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Preview E Module</h5>
                    <button type="button" style="border:none;background:transparent;" class="close"
                        data-coreui-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        {{-- <div id="showCanvas"></div> --}}
                        <iframe  id="showCanvas" src="#" width="100%"
                            height="500px">
                        </iframe>
                        {{-- <embed src="" type="application/pdf" id="showCanvas" height="400px"> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        @if (session()->pull('successLogin'))
            <script>
                setTimeout(() => {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Successfully Login',
                        showConfirmButton: false,
                        timer: 500
                    });
                }, 1500);
            </script>
            {{ session()->forget('successLogin') }}
        @endif
        <div>
            <button class="btn btn-primary" id="btnToast" style="visibility: hidden"
                onclick="clickToast()"></button>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="/storage/images/favicon.ico" width="36px" height="36px" class="rounded me-2"
                        alt="...">
                    <strong class="me-auto">E Modules New Announcement</strong>
                    {{-- <small>11 mins ago</small> --}}
                    <button type="button" class="btn-close" data-coreui-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                <div class="toast-body" id="announceBody">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>
        <script src="https://js.pusher.com/7.2.0/pusher.min.js"></script>
        <script src="js/push.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.js"
            integrity="sha512-aqpxRD4NwJUXN742KSiIr4zARkh+WTeaWwx0DYuy+9eARX/glcCFtHSeETrIc6V+1BwYfMwvPz5KWlVtRyXikQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.1.81/pdf.min.js"
            integrity="sha512-RV+l/3iMDTmIt64ztJmriqLRZl2IwGHcG+655gFxUa20Uq9GljEsY3wibq5BZkGzRlMbYFHUPelVQvWvZxP38w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            function clickToast() {
                const toastLiveExample = document.getElementById('liveToast');
                const toast = new coreui.Toast(toastLiveExample);
                toast.show();
            }

            function openViewer(e) {

                // var month = {!! json_encode(public_path("\\storage\\emodules\\"), true) !!};
                // var options = {
                //     pdfOpenParams: {
                //         pagemode: "thumbs",
                //         navpanes: 0,
                //         toolbar: 0,
                //         statusbar: 0,
                //         view: "FitV"
                //     }
                // };
                // var loadingTask = pdfjsLib.getDocument("/storage/emodules/" + e + "#toolbar=0");
                // loadingTask.promise.then(function(pdf) {
                //     pdf.getPage(1).then(function(page) {
                //         var canvas = document.getElementById('showCanvas');
                //         var context = canvas.getContext('2d');
                //         var outputScale = window.devicePixelRatio || 1;
                //         var desiredWidth = 576;
                //         var viewport = page.getViewport({
                //             scale: 1,
                //         });
                //         var scale = desiredWidth / viewport.width;
                //         canvas.width = Math.floor(viewport.width * outputScale);
                //         canvas.height = Math.floor(viewport.height * outputScale);
                //         canvas.style.width = Math.floor(viewport.width) + "px";
                //         canvas.style.height = Math.floor(viewport.height) + "px";

                //         var transform = outputScale !== 1 ? [outputScale, 0, 0, outputScale, 0, 0] :
                //             null;

                //         var renderContext = {
                //             canvasContext: context,
                //             transform: transform,
                //             viewport: viewport
                //         };
                //         page.render(renderContext);
                //     });
                // }).catch(function(err) {
                //     console.log(err);
                // });

                // PDFObject.embed("http://localhost:8443/storage/emodules/" + e + "#toolbar=0", "#showCanvas", options);

                var showCanvas = document.getElementById('showCanvas');
                showCanvas.setAttribute("src", "http://localhost:8443/storage/emodules/" + e);
                setTimeout(function() {
                    var btnShowPreview = document.getElementById('btnShowPreview');
                    btnShowPreview.click();
                }, 100);
            }
        </script>
</body>

</html>
