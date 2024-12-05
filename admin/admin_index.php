<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin OTO TRACK</title>
    <link rel="icon" type="image/png" href="img/oto track.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #2c3e50;
        }

        .navbar-brand img {
            width: 100px;
        }

        .navbar-nav .nav-link {
            color: #ecf0f1 !important;
        }

        .navbar-nav .nav-link:hover {
            color: #3498db !important;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
        }

        p {
            font-size: 1.1rem;
            color: #34495e;
            text-align: center;
        }

        .card-deck {
            margin-top: 30px;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-size: 1.25rem;
            color: #2c3e50;
        }

        .card-text {
            color: #7f8c8d;
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .whatsapp-button {
            color: #25d366;
            font-size: 1.5rem;
            text-decoration: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <?php include 'header.php'; ?>

    <!-- Body -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Selamat Datang di Admin Panel OTO TRACK</h1>
                <p>Gunakan navigasi di atas untuk mengelola pengguna, kendaraan, pemesanan, laporan, dan pengaturan sistem.</p>
            </div>
        </div>
        <div class="row card-deck">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/user_management.jpg" class="card-img-top" alt="User Management">
                    <div class="card-body">
                        <h5 class="card-title">User Management</h5>
                        <p class="card-text">Mengelola data pengguna.</p>
                        <a href="user_management/list_users.php" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/vehicle_management.jpg" class="card-img-top" alt="Vehicle Management">
                    <div class="card-body">
                        <h5 class="card-title">Vehicle Management</h5>
                        <p class="card-text">Mengelola data kendaraan.</p>
                        <a href="vehicle_management/list_vehicles.php" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/booking_management.jpg" class="card-img-top" alt="Booking Management">
                    <div class="card-body">
                        <h5 class="card-title">Booking Management</h5>
                        <p class="card-text">Mengelola data pemesanan.</p>
                        <a href="booking_management/list_bookings.php" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-deck mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/reports_statistics.jpg" class="card-img-top" alt="Reports and Statistics">
                    <div class="card-body">
                        <h5 class="card-title">Reports and Statistics</h5>
                        <p class="card-text">Melihat laporan dan statistik.</p>
                        <a href="reports_and_statistics/income_report.php" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/system_settings.jpg" class="card-img-top" alt="System Settings">
                    <div class="card-body">
                        <h5 class="card-title">System Settings</h5>
                        <p class="card-text">Mengelola pengaturan sistem.</p>
                        <a href="system_settings/general_settings.php" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../footer.php'; ?>
</body>

</html>
