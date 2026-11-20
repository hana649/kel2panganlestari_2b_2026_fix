# PanganLestari - Project Web Source Code (VS Code Ready)

Proyek ini adalah implementasi sistem web **PanganLestari** (Dashboard Peramalan Stok & Harga Beras Berbasis Machine Learning / LSTM) berdasarkan spesifikasi jurnal Kelompok 2 CoSciTech & contoh desain Figma.

## 📁 Struktur Folder Project:
```
pangan_lestari_vscode/
├── index.html            # Antarmuka Utama Dashboard (HTML5)
├── index.php             # Wrapper PHP Server
├── css/
│   └── style.css         # Styling UI Dark Mode / Glassmorphism Responsive
├── js/
│   ├── app.js            # Logika Navigasi, Simulasi & Ekspor CSV
│   └── chart-custom.js   # Render Grafik Interaktif Chart.js (Historis vs LSTM)
├── api/
│   └── forecast.php      # Endpoint Backend JSON (Model & Hash SHA-256)
└── README.md             # Petunjuk Penggunaan di VS Code
```

## 🚀 Cara Menjalankan Project di Visual Studio Code:

1. **Buka Folder di VS Code:**
   - Ekstrak file zip ini (`pangan_lestari_vscode_project.zip`).
   - Buka aplikasi **Visual Studio Code**, pilih **File > Open Folder...** dan arahkan ke folder `pangan_lestari_vscode`.

2. **Menjalankan dengan Live Server (Frontend HTML/JS):**
   - Install ekstensi **Live Server** di VS Code.
   - Klik kanan pada `index.html`, lalu pilih **Open with Live Server**.

3. **Menjalankan dengan PHP Server / XAMPP (Full Stack PHP API):**
   - Install ekstensi **PHP Server** di VS Code atau gunakan XAMPP / Local Server.
   - Jalankan `index.php` melalui browser (`http://localhost:3000` atau `http://localhost/pangan_lestari_vscode/`).

## 💡 Fitur Utama yang Tersedia:
- **Dashboard Ringkasan Status Stok:** Kartu indikator (Aman, Waspada, Kritis).
- **Simulasi Model LSTM:** Pilihan horizon (7, 30, 90, 365 hari), evaluasi metrik (RMSE 0.054, MAE, MAPE 4.32%, R² 0.952).
- **Chart.js Line Graph:** Visualisasi kurva tren historis vs hasil prediksi LSTM.
- **Verifikasi Keaslian Blockchain:** Hash SHA-256 & Transaction ID terintegrasi.
- **Fitur Ekspor:** Unduh data ke file CSV.
