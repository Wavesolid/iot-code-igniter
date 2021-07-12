<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Dashboard.css">

    <!-- <link rel="stylesheet" href="styles/bootstrap/bootstrap.min.css"> -->

    <title> dashboard </title>

    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- load realtime  -->
    <script type="text/javascript">
        var refreshid = setInterval(function() {
            $('#suhu').load('dashboard-table/data-suhu.php');
            $('#kelembapan').load('dashboard-table/data-kelembapan.php');
        }, 1000);
    </script>

</head>

<body>

    <!-- membuat nav disamping -->
    <nav>
        <div class="logo">
            <img src="imgOno/logo.png" alt="logo">
            <h2>Special</h2>
            <h2 class="huruf-kedua">Corp</h2>
        </div>
        <div class="isi">
            <div class="isi-child">
                <img src="imgOno/icon-dashboard.png" alt="">
                <span>Dashboard</span>
            </div>
            <div class="isi-child" onclick="location.href='dashboard-graph/dashboard-graph.php';">
                <img src="imgOno/icon-statistic.png" alt="">
                <span>Statistic</span>
            </div>
            <div class="isi-child">
                <img src="imgOno/icon-device.png" alt="">
                <span>Device</span>
            </div>
            <div class="isi-child">
                <img src="imgOno/icon-endpoint.png" alt="">
                <span>Endpoint</span>
            </div>
        </div>
        <div class="logout" onclick="location.href='index.php';">
            <img src="imgOno/icon-logout.png" alt="">
            <span>Logout</span>
        </div>
    </nav>
    <!-- membuat nav disamping -->

    <!-- membuat tempat profile -->
    <div class="profile">
        <span>Gifino Hizbullah Pradana</span>
        <img src="imgOno/profil1.png" alt="">
    </div>
    <!-- membuat tempat profile -->


    <!-- main content -->
    <div class="main">

        <h2>Table</h2>

        <!-- membuat main table -->

        <!-- <div class="main-judul">
            <span>Dashboard List</span>
            <img src="ImgOno/icon-information.png" alt="">
        </div>
        <div class="main-button">
            <form action="">
                <button type="submit" name="add"> Add Dashboard</button>
                <button type="submit" name="refresh">Refresh</button>
            </form>
        </div>
        <div class="main-isi">
            <table style="width: 100%;">
                <tr>
                    <th><input type = "checkbox" style="width: 15px; height: 15px;"></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Project</th>
                </tr>
                <tr>
                    <td><input type = "checkbox" style="width: 15px; height: 15px;"></td>
                    <td>Sadam</td>
                    <td>Jarak Jauh</td>
                    <td>Aselole</td>
                </tr>
            </table>
        </div> -->

        <!-- membuat main table -->

        <div class="card-container">
            <!-- card status suhu -->
            <div class="card">
                <div class="card-header" style="font-size:20px; font-weight:bold;">
                    Suhu
                </div>
                <div class="card-body">
                    <h1> <span id="suhu">0</span></h1>
                </div>
            </div>
            <!-- card status suhu-->


            <!-- card status kelembapan -->
            <div class="card">
                <div class="card-header" style="font-size:20px; font-weight:bold;">
                    kelembapan
                </div>
                <div class="card-body">
                    <h1><span id="kelembapan">0</span></h1>
                </div>
            </div>
            <!-- card status kelembapan -->
        </div>
    </div>

</body>

</html>