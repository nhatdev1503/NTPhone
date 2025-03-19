@extends('layouts.admin.main')

@section('content')
<div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
    <h2 class="text-center mb-4">📊 Thống Kê Bán Hàng</h2>

    <!-- THỐNG KÊ TỔNG QUAN -->
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 bg-success text-white text-center rounded-4">
                <h5>📈 Tổng Doanh Thu</h5>
                <h3 id="totalRevenue">0 VND</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 bg-primary text-white text-center rounded-4">
                <h5>📦 Tổng Đơn Hàng</h5>
                <h3 id="totalOrders">0</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg p-3 bg-warning text-dark text-center rounded-4">
                <h5>👥 Khách Hàng</h5>
                <h3 id="totalCustomers">0</h3>
            </div>
        </div>
    </div>

    <!-- BIỂU ĐỒ DOANH THU -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card p-3 shadow-lg rounded-4">
                <h5 class="text-center">📅 Doanh Thu Theo Thời Gian</h5>
                <canvas id="revenueChart"></canvas>
            </div>
        </div>
    </div>

    <!-- SẢN PHẨM BÁN CHẠY -->
    <div class="mt-4">
        <h4>🔥 Top 5 Sản Phẩm Bán Chạy</h4>
        <div class="card p-3 shadow-lg rounded-4">
            <table class="table table-bordered mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Sản Phẩm</th>
                        <th>Đã Bán</th>
                    </tr>
                </thead>
                <tbody id="bestSellingProducts">
                    <!-- Dữ liệu sẽ được load bằng JS -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- CHART.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Dữ liệu giả lập, thay bằng dữ liệu từ Laravel
        const totalRevenue = 1200000000; // 1.2 tỷ VND
        const totalOrders = 350;
        const totalCustomers = 120;

        const monthlyRevenue = {
            'Tháng 1': 150000000,
            'Tháng 2': 200000000,
            'Tháng 3': 250000000,
            'Tháng 4': 300000000,
            'Tháng 5': 400000000,
            'Tháng 6': 500000000
        };

        const bestSellingProducts = [
            { name: "iPhone 15 Pro Max", sold: 120 },
            { name: "Samsung Galaxy S23 Ultra", sold: 98 },
            { name: "Xiaomi 13 Pro", sold: 75 },
            { name: "MacBook Air M2", sold: 60 },
            { name: "iPad Pro M2", sold: 50 }
        ];

        // Cập nhật thống kê tổng quan
        document.getElementById('totalRevenue').innerText = new Intl.NumberFormat().format(totalRevenue) + " VND";
        document.getElementById('totalOrders').innerText = totalOrders;
        document.getElementById('totalCustomers').innerText = totalCustomers;

        // Biểu đồ doanh thu theo tháng
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: Object.keys(monthlyRevenue),
                datasets: [{
                    label: 'Doanh thu (VND)',
                    data: Object.values(monthlyRevenue),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                }
            }
        });

        // Hiển thị sản phẩm bán chạy
        const productTable = document.getElementById('bestSellingProducts');
        bestSellingProducts.forEach((product, index) => {
            const row = `<tr>
                <td>${index + 1}</td>
                <td>${product.name}</td>
                <td>${product.sold} đơn</td>
            </tr>`;
            productTable.innerHTML += row;
        });
    });
</script>
@endsection
