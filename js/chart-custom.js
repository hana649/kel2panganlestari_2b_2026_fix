document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('mainChart');
    if (ctx) {
        const labels = ['1 Nov', '3 Nov', '5 Nov', '7 Nov', '9 Nov', '11 Nov', '13 Nov', '15 Nov (Prediksi)', '17 Nov', '19 Nov', '21 Nov'];
        const dataActual = [14500, 14600, 14550, 14700, 14680, 14750, 14800, null, null, null, null];
        const dataLSTM = [null, null, null, null, null, 14750, 14800, 14890, 14950, 15020, 15120];

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Harga Historis Aktual (Rp/kg)',
                        data: dataActual,
                        borderColor: '#3b82f6',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        borderWidth: 3,
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Prediksi Model LSTM (Rp/kg)',
                        data: dataLSTM,
                        borderColor: '#0d9488',
                        borderDash: [5, 5],
                        borderWidth: 3,
                        tension: 0.3,
                        pointStyle: 'circle',
                        pointRadius: 6,
                        pointBackgroundColor: '#0d9488'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        labels: { color: '#f8fafc' }
                    }
                },
                scales: {
                    x: {
                        ticks: { color: '#94a3b8' },
                        grid: { color: '#334155' }
                    },
                    y: {
                        ticks: { color: '#94a3b8' },
                        grid: { color: '#334155' }
                    }
                }
            }
        });
    }
});
