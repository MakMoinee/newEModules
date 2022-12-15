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
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <a class="header-brand" href="/">
                    <img src="/storage/images/favicon.ico"width="56" height="56" alt=""
                        srcset=""></a>
                <ul class="header-nav d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="/">Merr-C Society Academy</a></li>
                    {{-- <li class="nav-item"><a class="nav-link"
                            href="https://coreui.io/demos/bootstrap/4.2/free/#">Users</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="https://coreui.io/demos/bootstrap/4.2/free/#">Settings</a></li> --}}
                </ul>
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
                                    <img src="/storage/profiles/{{ $pic }}" alt="hugenerd" class="avatar-img"
                                        style="width: 46px !important; height: 46px !important;">
                                @endif
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">

                            {{-- <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div> --}}
                            {{-- <a class="dropdown-item" href="/profile">
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg> Profile</a> --}}
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
                            <span>Users</span>
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
                                    data-coreui-target="#chooseRoleModal" style="background-color: #ff589e">Add
                                    User</button>
                                <button class="btn btn-primary" data-coreui-toggle="modal"
                                    data-coreui-target="#signUpByCSVModal" style="background-color: #ff589e">Add
                                    User By CSV</button>
                            </div>
                            <div class="card-header">
                                <form action="/superadmin" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search User"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"
                                            name="search" value="{{ $searchKey }}">
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
                                                    Username
                                                </th>
                                                <th>
                                                    First Name
                                                </th>
                                                <th>
                                                    Middle Name
                                                </th>
                                                <th>
                                                    Last Name
                                                </th>
                                                <th>
                                                    LRN
                                                </th>
                                                <th>
                                                    Track
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Grade Level
                                                </th>
                                                <th>
                                                    User Type
                                                </th>
                                                <th>
                                                    User Date Created
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pageRes as $item)
                                                <tr>
                                                    <td>{{ $item['username'] }}</td>
                                                    <td>{{ $item['firstname'] }}</td>
                                                    <td>{{ $item['middlename'] }}</td>
                                                    <td>{{ $item['lastname'] }}</td>
                                                    <td>{{ $item['lrn'] }}</td>
                                                    <td>{{ $item['track'] }}</td>
                                                    <td>{{ $item['email'] }}</td>
                                                    <td>{{ $item['gradelevel'] }}</td>
                                                    <td>
                                                        @if ($item['userType'] == 0)
                                                            Super Admin
                                                        @endif
                                                        @if ($item['userType'] == 1)
                                                            Admin
                                                        @endif
                                                        @if ($item['userType'] == 2)
                                                            User
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $item['created_at'] }}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success"
                                                            style="color:white; font-size: 12px;"
                                                            data-coreui-toggle="modal"
                                                            data-coreui-target="#viewModal{{ $item['userID'] }}">View/Edit</button>
                                                        <div class="modal fade" id="viewModal{{ $item['userID'] }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="viewModalLabel{{ $item['userID'] }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content" style="width: 450px;">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="viewModalLabel{{ $item['userID'] }}">
                                                                            View/Edit
                                                                            User
                                                                        </h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <form
                                                                                action="{{ route('superadmin.update', ['superadmin' => $item['userID']]) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data"
                                                                                autocomplete="off">
                                                                                @method('put')
                                                                                @csrf
                                                                                <div class="form-group"
                                                                                    style="margin-left: 40px;margin-bottom: 20px;">
                                                                                    <label for="Username"
                                                                                        class="for">Username<span
                                                                                            style="color:red">*</span></label>
                                                                                    <label for="Firstname"
                                                                                        class="for"
                                                                                        style="margin-left: 110px;">First
                                                                                        Name<span
                                                                                            style="color:red">*</span></label>
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 40px;margin-top: -20px;margin-bottom: 20px;">
                                                                                    <input required type="text"
                                                                                        name="username" id=""
                                                                                        style="width:150px;"
                                                                                        value="{{ $item['username'] }}">
                                                                                    <input required type="text"
                                                                                        name="firstname"
                                                                                        id=""
                                                                                        style="width:150px;margin-left: 33px;"
                                                                                        value="{{ $item['firstname'] }}">
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 40px;margin-top: -12px;margin-bottom: 20px;">
                                                                                    <label for="Middlename"
                                                                                        class="for">Middle Name<span
                                                                                            style="color:red">*</span></label>
                                                                                    <label for="Lastname"
                                                                                        class="for"
                                                                                        style="margin-left: 89px;">Last
                                                                                        Name<span
                                                                                            style="color:red">*</span></label>
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 40px;margin-top: -20px;margin-bottom: 20px;">
                                                                                    <input required type="text"
                                                                                        name="middlename"
                                                                                        id=""
                                                                                        style="width:150px;"
                                                                                        value="{{ $item['middlename'] }}">
                                                                                    <input required type="text"
                                                                                        name="lastname" id=""
                                                                                        style="width:150px;margin-left: 33px;"
                                                                                        value="{{ $item['lastname'] }}">
                                                                                </div>
                                                                                @if ($item['userType'] == 1)
                                                                                @else
                                                                                    <div class="form-group"
                                                                                        style="margin-left: 40px;margin-top: -12px;margin-bottom: 20px;">
                                                                                        <label for="lrn"
                                                                                            class="for">LRN</label>
                                                                                        <label for="Track"
                                                                                            class="for"
                                                                                            style="margin-left: 153px;">Track</label>
                                                                                    </div>
                                                                                @endif

                                                                                @if ($item['userType'] == 1)
                                                                                @else
                                                                                    <div class="form-group"
                                                                                        style="margin-left: 40px;margin-top: -20px;margin-bottom: 20px;">
                                                                                        <input type="text"
                                                                                            name="lrn"
                                                                                            id=""
                                                                                            style="width:150px;"
                                                                                            value="{{ $item['lrn'] }}">
                                                                                        <select name="track"
                                                                                            id="civilstat"
                                                                                            style="width:150px;margin-left: 33px;">
                                                                                            @if ($item['track'] == 'ABM')
                                                                                                <option value="ABM"
                                                                                                    selected>ABM
                                                                                                </option>
                                                                                            @else
                                                                                                <option value="ABM">
                                                                                                    ABM
                                                                                                </option>
                                                                                            @endif

                                                                                            @if ($item['track'] == 'GAS')
                                                                                                <option value="GAS"
                                                                                                    selected>GAS
                                                                                                </option>
                                                                                            @else
                                                                                                <option value="GAS">
                                                                                                    GAS
                                                                                                </option>
                                                                                            @endif

                                                                                            @if ($item['track'] == 'HUMSS')
                                                                                                <option value="HUMSS"
                                                                                                    selected>
                                                                                                    HUMSS
                                                                                                </option>
                                                                                            @else
                                                                                                <option value="HUMSS">
                                                                                                    HUMSS
                                                                                                </option>
                                                                                            @endif

                                                                                            @if ($item['track'] == 'STEM')
                                                                                                <option value="STEM"
                                                                                                    selected>
                                                                                                    STEM
                                                                                                </option>
                                                                                            @else
                                                                                                <option value="STEM">
                                                                                                    STEM
                                                                                                </option>
                                                                                            @endif

                                                                                            @if ($item['track'] == 'TVL')
                                                                                                <option value="TVL"
                                                                                                    selected>
                                                                                                    TVL
                                                                                                </option>
                                                                                            @else
                                                                                                <option value="TVL">
                                                                                                    TVL
                                                                                                </option>
                                                                                            @endif
                                                                                        </select>

                                                                                    </div>
                                                                                @endif

                                                                                <div class="form-group"
                                                                                    style="margin-left: 40px;margin-top: -12px;margin-bottom: 20px;">
                                                                                    <label for="password"
                                                                                        class="for">Password</label>
                                                                                    @if ($item['userType'] == 1)
                                                                                    @else
                                                                                        <label for="Email"
                                                                                            class="for"
                                                                                            style="margin-left: 111px;">Email</label>
                                                                                    @endif

                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 40px;margin-top: -20px;margin-bottom: 20px;">
                                                                                    <input type="password"
                                                                                        name="password" id="vpassword"
                                                                                        style="width:150px;">
                                                                                    @if ($item['userType'] == 1)
                                                                                    @else
                                                                                        <input type="email"
                                                                                            name="email"
                                                                                            id=""
                                                                                            style="width:150px;margin-left: 33px;"
                                                                                            value="{{ $item['email'] }}">
                                                                                    @endif


                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 40px;margin-top: -12px;margin-bottom: 20px;">
                                                                                    <label for="password"
                                                                                        class="for">Retype
                                                                                        Password</label>
                                                                                    <label for="gradelevel"
                                                                                        class="for"
                                                                                        style="margin-left: 55px;">Grade
                                                                                        Level<span
                                                                                            style="color:red">*</span></label>
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 40px;margin-top: -20px;margin-bottom: 20px;">
                                                                                    <input type="password"
                                                                                        name="repassword"
                                                                                        id="vrepassword"
                                                                                        style="width:150px;">
                                                                                    <input type="text"
                                                                                        name="gradelevel"
                                                                                        id=""
                                                                                        value="{{ $item['gradelevel'] }}"
                                                                                        style="width:150px;margin-left: 33px">
                                                                                </div>

                                                                                <div class="form-group"
                                                                                    style="margin-left: 5px;margin-top: -12px;margin-bottom: 20px;">
                                                                                    <label for="userrole"
                                                                                        class="for"
                                                                                        style="margin-left: 35px;">User
                                                                                        Role<span
                                                                                            style="color:red">*</span></label>
                                                                                </div>
                                                                                <div class="form-group"
                                                                                    style="margin-left: 5px;margin-top: -20px;margin-bottom: 20px;">
                                                                                    <select name="userrole"
                                                                                        id="userrole"
                                                                                        style="width:150px;margin-left: 33px;">
                                                                                        @if ($item['userType'] == 1)
                                                                                            <option value="1"
                                                                                                selected>
                                                                                                Admin
                                                                                            </option>
                                                                                        @else
                                                                                            <option value="1"
                                                                                                disabled>
                                                                                                Admin
                                                                                            </option>
                                                                                        @endif
                                                                                        @if ($item['userType'] == 2)
                                                                                            <option value="2"
                                                                                                selected>
                                                                                                User</option>
                                                                                        @else
                                                                                            <option value="2"
                                                                                                disabled>
                                                                                                User
                                                                                            </option>
                                                                                        @endif

                                                                                    </select>
                                                                                </div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-coreui-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary"
                                                                            name="btnUpdateUser"
                                                                            style="background-color: #ff589e"
                                                                            value="yes">Update User</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-danger"
                                                            style="color:white; font-size: 12px;"
                                                            data-coreui-toggle="modal"
                                                            data-coreui-target="#deleteUserModal{{ $item['userID'] }}">Delete</button>
                                                        <div class="modal fade"
                                                            id="deleteUserModal{{ $item['userID'] }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="deleteUserModalLabel{{ $item['userID'] }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form
                                                                        action="{{ route('superadmin.destroy', ['superadmin' => $item['userID']]) }}"
                                                                        method="POST">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <h5 class="modal-title"
                                                                                id="deleteUserModalLabel{{ $item['userID'] }}">
                                                                                Do
                                                                                you want to proceed deleting user ?</h5>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Yes,
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
                                                    href="/superadmin?page={{ $startIndex - 1 }}">Previous</a>
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
                                                        href="/superadmin?page={{ $i + 1 }}">{{ $i + 1 }}</a>
                                                </li>
                                            @endif


                                            {{-- @endif --}}
                                        @endfor
                                        @if (count($eusers) == 0)
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
                                                        href="/adminusers?page={{ $startIndex + 1 }}">Next</a>
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
    <div class="modal fade" id="chooseRoleModal" tabindex="-1" role="dialog"
        aria-labelledby="chooseRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 450px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="chooseRoleModalLabel">Choose Role</h5>
                    <button type="button" style="border:none;background:transparent;" class="close"
                        data-coreui-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="form-group" style="margin-left: 60px;margin-top: -20px;">
                            <br>
                            <select name="userrole" id="achooserole" style="width:150px;margin-left: 33px;">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" name="btnSignUpSuper"
                        style="background-color: #ff589e" value="yes" data-dismiss="modal"
                        onclick="chooseRole()">Choose Role</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signUpAdminModal" tabindex="-1" role="dialog"
        aria-labelledby="signUpAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 450px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpAdminModalLabel">Add Admin</h5>
                    <button type="button" style="border:none;background:transparent;" class="close"
                        data-coreui-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/signup" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;">
                                <label for="Username" class="for">Username<span style="color:red">*</span></label>
                                <label for="Firstname" class="for" style="margin-left: 106px;">First Name<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input required type="text" name="username" id="" style="width:150px;">
                                <input required type="text" name="firstname" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -12px;">
                                <label for="Middlename" class="for">Middle Name<span
                                        style="color:red">*</span></label>
                                <label for="Lastname" class="for" style="margin-left: 83px;">Last Name<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input required type="text" name="middlename" id=""
                                    style="width:150px;">
                                <input required type="text" name="lastname" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -12px;">
                                <label for="password" class="for">Password<span style="color:red">*</span></label>
                                <label for="password" class="for" style="margin-left: 107px;">Retype Password<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input required type="password" name="password" id="apassword" style="width:150px;">
                                <input required type="password" name="repassword" id="arepassword"
                                    style="width:150px;margin-left: 32px;">
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input type="hidden" name="userrole" id="auserrole">
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnSignUpSuper"
                        style="background-color: #ff589e" value="yes">Add Admin</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 450px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpModalLabel">Add User</h5>
                    <button type="button" style="border:none;background: transparent;" class="close"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/signup" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;">
                                <label for="Username" class="for">Username<span style="color:red">*</span></label>
                                <label for="Firstname" class="for" style="margin-left: 106px;">First Name<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input required type="text" name="username" id="" style="width:150px;">
                                <input required type="text" name="firstname" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -12px;">
                                <label for="Middlename" class="for">Middle Name<span
                                        style="color:red">*</span></label>
                                <label for="Lastname" class="for" style="margin-left: 83px;">Last Name<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input required type="text" name="middlename" id=""
                                    style="width:150px;">
                                <input required type="text" name="lastname" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -12px;">
                                <label for="lrn" class="for">LRN</label>
                                <label for="Track" class="for" style="margin-left: 153px;">Track</label>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input type="text" name="lrn" id="" style="width:150px;">
                                <select name="track" id="civilstat" style="width:150px;margin-left: 33px;">
                                    <option value="ABM" selected>ABM</option>
                                    <option value="GAS">GAS</option>
                                    <option value="HUMSS">HUMSS</option>
                                    <option value="STEM">STEM</option>
                                    <option value="TVL">TVL
                                    </option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -12px;">
                                <label for="password" class="for">Password<span style="color:red">*</span></label>
                                <label for="Email" class="for" style="margin-left: 107px;">Email</label>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input required type="password" name="password" id="apassword" style="width:150px;">
                                <input type="email" name="email" id=""
                                    style="width:150px;margin-left: 33px;">
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -12px;">
                                <label for="password" class="for">Retype Password<span
                                        style="color:red">*</span></label>
                                <label for="gradelevel" class="for" style="margin-left: 55px;">Grade Level<span
                                        style="color:red">*</span></label>
                            </div>
                            <div class="form-group" style="margin-left: 40px;margin-bottom: 20px;margin-top: -20px;">
                                <input required type="password" name="repassword" id="arepassword"
                                    style="width:150px;">
                                <input required type="text" name="gradelevel" id=""
                                    style="width:150px;margin-left: 33px;">
                                <input type="hidden" name="userrole" id="auserrole">
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnSignUpSuper"
                        style="background-color: #ff589e" value="yes">Add User</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div>
        <button class="btn" style="visibility: hidden" data-coreui-toggle="modal"
            data-coreui-target="#signUpModal" id="btnSignUpShow"></button>
        <button class="btn" style="visibility: hidden" data-coreui-toggle="modal"
            data-coreui-target="#signUpAdminModal" id="btnSignUpAdminShow"></button>
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

    <div class="modal fade" id="signUpByCSVModal" tabindex="-1" role="dialog"
        aria-labelledby="signUpByCSVModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 450px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpByCSVModalLabel">Add User</h5>
                    <button type="button" style="border:none;background: white;" class="close"
                        data-coreui-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/superadmin" method="POST" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group" style="margin-left: 30px;margin-bottom: 20px;">
                                <label for="browse" class="for">Browse CSV File<span
                                        style="color:red">*</span></label>
                                <input type="file" name="files" id="" accept=".csv">
                            </div>
                            <a href="/file/users.csv"
                                style="margin-left: 30px;list-style-type: none;color:teal;text-decoration: none;">
                                Get CSV Sample</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnSignup"
                        style="background-color: #ff589e" value="admin">Add User By CSV</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @if (session()->pull('successCreateUsersFromFile'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added User From CSV File',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>;
        {{ session()->forget('successCreateUsersFromFile') }}
    @endif
    @if (session()->pull('successUpdateUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated User',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successUpdateUser') }}
    @endif
    @if (session()->pull('successDeleteUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted User',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successDeleteUser') }}
    @endif
    @if (session()->pull('successCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added User',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('successCreate') }}
    @endif
    @if (session()->pull('errorDeleteUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to delete user, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorDeleteUser') }}
    @endif
    @if (session()->pull('errorExistingUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'User exisited, Please Contact Your Administrator for possible resetting of password!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorExistingUser') }}
    @endif
    @if (session()->pull('errorUpdateUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to update user, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorUpdateUser') }}
    @endif
    @if (session()->pull('errorCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed to add user, Please Try Again!',
                    showConfirmButton: false,
                    timer: 1300
                });
            }, 1500);
        </script>;
        {{ session()->forget('errorCreate') }}
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
    <script>
        var password = document.getElementById("apassword"),
            confirm_password = document.getElementById("arepassword");

        function validatePassword1() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword1;
        confirm_password.onkeyup = validatePassword1;

        var password2 = document.getElementById("vpassword"),
            confirm_password2 = document.getElementById("vrepassword");

        function validatePassword2() {
            if (password2.value != confirm_password2.value) {
                confirm_password2.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password2.setCustomValidity('');
            }
        }

        password2.onchange = validatePassword2;
        confirm_password2.onkeyup = validatePassword2;

        function chooseRole() {
            let chooserole = document.getElementById('achooserole');
            let userrole = document.getElementById('auserrole');
            userrole.setAttribute("value", chooserole.value);

            if (chooserole.value == 2) {
                let btnSignUpShow = document.getElementById('btnSignUpShow');
                btnSignUpShow.click();
            } else if (chooserole.value == 1) {
                let btnSignUpAdminShow = document.getElementById('btnSignUpAdminShow');
                btnSignUpAdminShow.click();
            }
        }
    </script>
</body>

</html>
