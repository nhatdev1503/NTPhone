@extends('layouts.admin.main')

@section('content')
    <div class="p-6 bg-gray-900 min-h-screen text-white">
        <h1 class="text-3xl font-bold mb-6 text-blue-400">Thống Kê</h1>

        <!-- Thẻ Thống Kê Tổng Quan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-blue-400">Người Dùng</h2>
                        <a href="{{ route('users.index') }}"><p id="total-products" class="text-4xl font-bold mt-2 text-white">{{ $totalUsers }}</p></a>
                    </div>
                    <div class="bg-blue-500 p-3 rounded-full">
                        <i class="bi bi-people text-2xl text-white"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-green-400">Sản Phẩm</h2>
                        <a href="{{ route('products.index') }}"><p id="total-orders" class="text-4xl font-bold mt-2 text-white">{{ $totalProducts }}</p></a>
                    </div>
                    <div class="bg-green-500 p-3 rounded-full">
                        <i class="bi bi-box text-2xl text-white"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-yellow-400">Đơn Hàng</h2>
                        <a href="{{ route('orders.index') }}"><p id="total-revenue" class="text-4xl font-bold mt-2 text-white">{{ $totalOrders }}</p></a>
                    </div>
                    <div class="bg-yellow-500 p-3 rounded-full">
                        <i class="bi bi-cart text-2xl text-white"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-purple-400">Doanh Thu</h2>
                        <p id="new-customers" class="text-2xl font-bold mt-2 text-white">{{ number_format($totalRevenue) }}đ</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Biểu Đồ Thống Kê -->
        <div class="grid grid-cols-1">
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-700">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-blue-400">Doanh Thu</h2>
                    <div class="flex gap-4">
                        <select id="revenue-filter" class="bg-gray-700 text-white p-2 rounded border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500" onchange="toggleDateInput('revenue')">
                            <option value="day">Theo Ngày</option>
                            <option value="month">Theo Tháng</option>
                        </select>
                        <div id="date-range" class="flex gap-2">
                            <input type="date" id="start-date" class="bg-gray-700 text-white p-2 rounded border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <input type="date" id="end-date" class="bg-gray-700 text-white p-2 rounded border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div id="month-range" class="hidden flex gap-2">
                            <input type="month" id="start-month" class="bg-gray-700 text-white p-2 rounded border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <input type="month" id="end-month" class="bg-gray-700 text-white p-2 rounded border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <button onclick="fetchRevenueData()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition-colors duration-300">
                            <i class="bi bi-search"></i> Xem
                        </button>
                    </div>
                </div>
                <div class="relative" style="height: 400px;">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Danh Sách Chi Tiết -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-700">
                <h2 class="text-xl font-semibold mb-4 text-green-400">Sản Phẩm Bán Chạy Nhất</h2>
                <ul id="top-selling-products" class="space-y-2">
                    <!-- Dữ liệu sẽ được thêm vào đây -->
                </ul>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-700">
                <h2 class="text-xl font-semibold mb-4 text-yellow-400">Sản Phẩm Được Quan Tâm Nhất</h2>
                <ul id="most-viewed-products" class="space-y-2">
                    <!-- Dữ liệu sẽ được thêm vào đây -->
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function toggleDateInput(type) {
            const filter = document.getElementById(`${type}-filter`).value;
            const dateRange = document.getElementById('date-range');
            const monthRange = document.getElementById('month-range');
            
            if (filter === 'day') {
                dateRange.classList.remove('hidden');
                monthRange.classList.add('hidden');
            } else {
                dateRange.classList.add('hidden');
                monthRange.classList.remove('hidden');
            }
        }

        function fetchRevenueData() {
            const filter = document.getElementById('revenue-filter').value;
            let url = `/api/revenue?filter=${filter}`;
            
            if (filter === 'day') {
                const startDate = document.getElementById('start-date').value;
                const endDate = document.getElementById('end-date').value;
                if (startDate && endDate) {
                    url += `&start_date=${startDate}&end_date=${endDate}`;
                }
            } else {
                const startMonth = document.getElementById('start-month').value;
                const endMonth = document.getElementById('end-month').value;
                if (startMonth && endMonth) {
                    url += `&start_month=${startMonth}&end_month=${endMonth}`;
                }
            }

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    updateRevenueChart(data.labels, data.values);
                })
                .catch(error => {
                    console.error('Error fetching revenue data:', error);
                    alert('Có lỗi xảy ra khi tải dữ liệu. Vui lòng thử lại.');
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
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.2)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        labels: {
                            color: '#ffffff'
                        }
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        backgroundColor: 'rgba(17, 24, 39, 0.8)',
                        titleColor: '#ffffff',
                        bodyColor: '#ffffff',
                        borderColor: 'rgba(59, 130, 246, 0.5)',
                        borderWidth: 1,
                        padding: 10,
                        callbacks: {
                            label: function(context) {
                                return `Doanh Thu: ${new Intl.NumberFormat('vi-VN').format(context.raw)}đ`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Thời Gian',
                            color: '#ffffff',
                            font: {
                                size: 14
                            }
                        },
                        ticks: {
                            color: '#ffffff',
                            font: {
                                size: 12
                            }
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Doanh Thu (VND)',
                            color: '#ffffff',
                            font: {
                                size: 14
                            }
                        },
                        ticks: {
                            color: '#ffffff',
                            beginAtZero: true,
                            font: {
                                size: 12
                            },
                            callback: function(value) {
                                return new Intl.NumberFormat('vi-VN').format(value) + 'đ';
                            }
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        }
                    }
                }
            }
        });

        // Fetch top products
        function fetchTopProducts() {
            fetch('/api/top-products')
                .then(response => response.json())
                .then(data => {
                    updateTopSellingProducts(data.top_selling);
                    updateMostViewedProducts(data.most_viewed);
                })
                .catch(error => {
                    console.error('Error fetching top products:', error);
                });
        }

        function updateTopSellingProducts(products) {
            const container = document.getElementById('top-selling-products');
            container.innerHTML = products.map((product, index) => `
                <li class="flex items-center gap-3 p-2 hover:bg-gray-700 rounded-lg transition-colors">
                    <span class="text-lg font-bold text-blue-400">${index + 1}</span>
                    <img src="${product.image}" alt="${product.name}" class="w-12 h-12 object-cover rounded">
                    <div class="flex-1">
                        <p class="text-sm font-medium">${product.name}</p>
                        <p class="text-xs text-gray-400">Đã bán: ${product.quantity}</p>
                    </div>
                </li>
            `).join('');
        }

        function updateMostViewedProducts(products) {
            const container = document.getElementById('most-viewed-products');
            container.innerHTML = products.map((product, index) => `
                <li class="flex items-center gap-3 p-2 hover:bg-gray-700 rounded-lg transition-colors">
                    <span class="text-lg font-bold text-yellow-400">${index + 1}</span>
                    <img src="${product.image}" alt="${product.name}" class="w-12 h-12 object-cover rounded">
                    <div class="flex-1">
                        <p class="text-sm font-medium">${product.name}</p>
                        <p class="text-xs text-gray-400">Lượt xem: ${product.views}</p>
                    </div>
                </li>
            `).join('');
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Set default date range to last 30 days
            const today = new Date();
            const thirtyDaysAgo = new Date(today);
            thirtyDaysAgo.setDate(today.getDate() - 30);
            
            document.getElementById('start-date').value = thirtyDaysAgo.toISOString().split('T')[0];
            document.getElementById('end-date').value = today.toISOString().split('T')[0];
            
            // Set default month range to last 12 months
            const currentMonth = today.toISOString().slice(0, 7);
            const twelveMonthsAgo = new Date(today);
            twelveMonthsAgo.setMonth(today.getMonth() - 12);
            const startMonth = twelveMonthsAgo.toISOString().slice(0, 7);
            
            document.getElementById('start-month').value = startMonth;
            document.getElementById('end-month').value = currentMonth;
            
            fetchRevenueData();
            fetchTopProducts();
        });
    </script>
@endsection
