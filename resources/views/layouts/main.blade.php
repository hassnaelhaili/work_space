<!DOCTYPE html>
<html>

<head>
    <title>Your App</title>
    <!-- Include Bootstrap CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>

<body class="" style=" background-color: rgba(0, 0, 0, 0.02);">


    <nav class="navbar navbar-expand-lg " style=" background-color: rgba(0, 0, 0, 0.3);">
        <div>
            <img src="images/logo.png" alt="" style="max-height: 55px;">
        </div>

        <a class="navbar-brand" href="#" style="margin-left:20px; color: rgb(83, 80, 80);">Work Space</a>
        <div class="mx-auto"> <!-- Centered content -->
            <form class="form-inline my-2 my-lg-0">
                <!-- Centered Search Bar -->
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

            </form>
        </div>
        <div class="ml-auto"> <!-- Right-aligned content -->
            <ul class="navbar-nav" style="margin-right: 8px;">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
    </div>
    <!-- Include Bootstrap JS here if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
