<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/Dashboard.css">
    <title><?= $title; ?></title>
</head>

<body>

    <!-- membuat nav disamping -->
    <nav>
        <div class="logo">
            <img src="/imgOno/logo.png" alt="logo">
            <h2>Special</h2>
            <h2 class="huruf-kedua">Corp</h2>
        </div>
        <div class="isi">
            <div class="isi-child">
                <img src="/imgOno/icon-dashboard.png" alt="">
                <span>Dashboard</span>
            </div>
            <div class="isi-child">
                <img src="/imgOno/icon-statistic.png" alt="">
                <span>Statistic</span>
            </div>
            <div class="isi-child">
                <img src="/imgOno/icon-device.png" alt="">
                <span>Device</span>
            </div>
            <div class="isi-child">
                <img src="/imgOno/icon-endpoint.png" alt="">
                <span>Endpoint</span>
            </div>
        </div>
        <div class="logout">
            <img src="/imgOno/icon-logout.png" alt="">
            <span>Logout</span>
        </div>
    </nav>
    <!-- membuat nav disamping -->

    <!-- membuat tempat profile -->
    <div class="profile">
        <span>Gifino Hizbullah Pradana</span>
        <img src="/imgOno/profil1.png" alt="">
    </div>
    <!-- membuat tempat profile -->


    <!-- membuat main table -->
    <div class="main">
        <div class="main-judul">
            <span>Dashboard List</span>
            <img src="/ImgOno/icon-information.png" alt="">
        </div>
        <div class="main-button">
            <form action="">
                <button type="submit" name="add"> Add Dashboard</button>
                <button type="submit" name="refresh">Refresh</button>
            </form>
        </div>
        <div class="main-isi">
            <div class="column">
                <input type= "checkbox" style = "height:15px; width:15px;"> 
                <span>Dashboard</span>
                <span>Name</span>
                <span>Description</span>
                <span>Project</span>
            </div>
            <div class="column-child">
            <input type= "checkbox" style = "height:15px; width:15px;"> 
                <span>Aseelole</span>
                <span>OnlyFans</span>
                <span>Jarak Jauh</span>
                <span>anjay</span>
            </div>
        </div>
    </div>
     <!-- membuat main table -->
</body>

</html>