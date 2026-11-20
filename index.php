<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanganLestari - Dashboard Peramalan Stok & Harga Beras</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="[suspicious link removed]">
    <script src="[suspicious link removed]"></script>
</head>
<body>
    <div class="app-container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="brand">
                <i class="fa-solid fa-wheat-awn brand-icon"></i>
                <h2>PanganLestari</h2>
            </div>
            <nav class="nav-menu">
                <a href="#overview" class="nav-item active" data-target="overview"><i class="fa-solid fa-chart-line"></i> Ringkasan Stok</a>
                <a href="#forecast" class="nav-item" data-target="forecast"><i class="fa-solid fa-brain"></i> Peramalan LSTM</a>
                <a href="#exogenous" class="nav-item" data-target="exogenous"><i class="fa-solid fa-cloud-sun-rain"></i> Cuaca & Ekonomi</a>
                <a href="#blockchain" class="nav-item" data-target="blockchain"><i class="fa-solid fa-link"></i> Verifikasi Blockchain</a>
                <a href="#reports" class="nav-item" data-target="reports"><i class="fa-solid fa-file-export"></i> Ekspor Laporan</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="topbar">
                <input type="text" class="search-box" placeholder="Cari komoditas atau pasar...">
                <div class="status-indicator online"><span class="dot"></span> Live Sync Bapanas & PIHPS</div>
            </header>

            <!-- Dashboard Overview -->
            <section id="overview" class="content-section active">
                <div class="cards-grid">
                    <div class="card status-safe">
                        <h3>Stok Aman</h3>
                        <span class="card-value">14 Komoditas</span>
                        <span class="card-sub">Beras Premium, Minyak Goreng, Gula</span>
                    </div>
                    <div class="card status-warning">
                        <h3>Status Waspada</h3>
                        <span class="card-value">4 Komoditas</span>
                        <span class="card-sub">Bawang Merah, Daging Sapi</span>
                    </div>
                    <div class="card status-critical">
                        <h3>Status Kritis</h3>
                        <span class="card-value">2 Komoditas</span>
                        <span class="card-sub">Cabai Rawit Merah, Cabai Keriting</span>
                    </div>
                </div>

                <div class="panel">
                    <h2>Tren Harga Beras Medium & Premium (Historis vs LSTM)</h2>
                    <div class="chart-container"><canvas id="mainChart"></canvas></div>
                </div>
            </section>
        </main>
    </div>
    <script src="js/chart-custom.js"></script>
    <script src="js/app.js"></script>
</body>
</html>