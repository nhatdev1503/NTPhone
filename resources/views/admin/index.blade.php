@extends('layouts.admin.main')

@section('content')
    <div class="p-6 bg-gray-900 min-h-screen text-white">
        <h1 class="text-3xl font-bold mb-6">Thống Kê</h1>

        <!-- Thẻ Thống Kê Tổng Quan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-semibold">Tổng Người Dùng</h2>
                <p id="total-products" class="text-4xl font-bold mt-2">{{ $totalUsers }}</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-semibold">Tổng Sản Phẩm</h2>
                <p id="total-orders" class="text-4xl font-bold mt-2">{{ $totalProducts }}</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-semibold">Tổng Đơn Hàng</h2>
                <p id="total-revenue" class="text-4xl font-bold mt-2">{{ $totalOrders }}</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-semibold">Tổng Doanh Thu</h2>
                <p id="new-customers" class="text-4xl font-bold mt-2">{{ $totalRevenue }}</p>
            </div>
        </div>

        <!-- Biểu Đồ Thống Kê -->
        <div class="grid grid-cols-1">
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Doanh Thu</h2>
                <div class="flex gap-2 mb-4">
                    <select id="revenue-filter" class="bg-gray-700 text-white p-2 rounded" onchange="toggleDateInput('revenue')">
                        <option value="day">Ngày</option>
                        <option value="month">Tháng</option>
                    </select>
                </div>
                <canvas id="revenueChart" style="width: 100%; max-height: 500px;"></canvas> <!-- Set max height -->
            </div>
        </div>

        <!-- Danh Sách Chi Tiết -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Sản Phẩm Bán Chạy Nhất</h2>
                <ul id="top-selling-products" class="space-y-2">...</ul>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Sản Phẩm Được Quan Tâm Nhất</h2>
                <ul id="most-viewed-products" class="space-y-2">...</ul>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Người Dùng Mua Nhiều Nhất</h2>
                <ul id="top-customers" class="space-y-2">...</ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function toggleDateInput(type) {
            const filter = document.getElementById(`${type}-filter`).value;
            fetchRevenueData(filter);
        }

        function fetchRevenueData(filter) {
            let url = `/api/revenue?filter=${filter}`;
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    updateRevenueChart(data.labels, data.values);
                });
        }

        function updateRevenueChart(labels, values) {
            revenueChart.data.labels = labels;
            revenueChart.data.datasets[0].data = values;
            revenueChart.update();
        }

        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Doanh Thu',
                    data: [],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Thời Gian',
                            color: '#ffffff'
                        },
                        ticks: {
                            color: '#ffffff'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Doanh Thu (VND)',
                            color: '#ffffff'
                        },
                        ticks: {
                            color: '#ffffff',
                            beginAtZero: true
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#ffffff'
                        }
                    }
                }
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            fetchRevenueData('day'); // Default to fetching data for the last 12 days
        });
    </script>
@endsection
