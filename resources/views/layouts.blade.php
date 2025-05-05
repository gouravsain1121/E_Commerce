<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            margin: 0;
            font-family: sans-serif;
        }

        footer{
            background: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .main-content {
            display: flex;
            flex: 1;
            height: 90vh;
        }

        .sidebar {
            width: 200px;
            padding: 20px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .bg-none, a{
            background: none !important;
            color: rgb(30, 14, 14) !important;   
        }
        .bg-light, a:hover{
            color: rgb(214, 0, 0) !important;   
        }
    </style>
</head>
<body>

    @include('components.header')

    <div class="main-content">
        <div class="sidebar">
            @include('partials.sidebar')
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>

    @include('components.footer')

</body>
</html>
