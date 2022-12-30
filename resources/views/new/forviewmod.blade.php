<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/storage/images/favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Printing</title>
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
</head>

<body style="padding:10px;">
    <img class="sidebar-brand-narrow" src="/storage/images/favicon.ico" width="80" height="80" alt=""
        srcset="">

    <p class="sidebar-brand-full" style="font-size: 12px;padding-top: 15px;padding-left: 5px;">Merr-C Society
        Academy</p>
    <table class="table border mb-0" id="moduleTable">
        <thead class="table-light fw-semibold">
            <tr class="align-middle">
                <th class="text-center">
                    Subject
                </th class="text-center">
                <th>
                    E Module Description
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listModules as $lstmod)
                <tr>
                    <td class="text-center">{{ $lstmod['SubjectName'] }}</td>
                    <td class="text-center">{{ $lstmod['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        setTimeout(() => {
            window.print();
        }, 100);
    </script>
</body>

</html>
