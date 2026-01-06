<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIUM e-Clinic</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="app-container">

    <!-- HEADER -->
    <header class="header">
        <h1>IIUM e-Clinic</h1>
    </header>

    <!-- BODY -->
    <div class="body-container">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Book Appointment</a></li>
                <li><a href="#">Booking History</a></li>
                <li><a href="#">Profile</a></li>
                <li class="logout"><a href="#">Logout</a></li>
            </ul>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="content">
            @yield('content')
</div>
        </main>

    </div>

</div>

</body>
</html>
