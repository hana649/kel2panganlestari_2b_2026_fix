document.addEventListener('DOMContentLoaded', () => {
    // Tab Controller
    const navItems = document.querySelectorAll('.nav-item');
    const sections = document.querySelectorAll('.content-section');

    navItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            navItems.forEach(i => i.classList.remove('active'));
            sections.forEach(s => s.classList.remove('active'));

            item.classList.add('active');
            const target = item.getAttribute('data-target');
            document.getElementById(target).classList.add('active');
        });
    });

    // Simulasi Peramalan LSTM
    const forecastForm = document.getElementById('forecast-form');
    if (forecastForm) {
        forecastForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const commodity = document.getElementById('fc-commodity').value;
            const horizon = document.getElementById('fc-horizon').value;
            alert(`Peramalan LSTM Sukses!\nKomoditas: ${commodity}\nHorizon: ${horizon} Hari\nHash Blockchain SHA-256 Terverifikasi.`);
        });
    }
});