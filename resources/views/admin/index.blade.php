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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Doanh Thu</h2>
            <div class="flex gap-2 mb-4">
                <select id="revenue-filter" class="bg-gray-700 text-white p-2 rounded" onchange="toggleDateInput('revenue')">
                    <option value="day">Ngày</option>
                    <option value="month">Tháng</option>
                </select>
                <input type="date" id="revenue-date" class="bg-gray-700 text-white p-2 rounded">
                <input type="month" id="revenue-month" class="bg-gray-700 text-white p-2 rounded hidden">
            </div>
            <canvas id="revenueChart"></canvas>
        </div>

        <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Sản Phẩm Bán Chạy</h2>
            <div class="flex gap-2 mb-4">
                <select id="best-sellers-filter" class="bg-gray-700 text-white p-2 rounded" onchange="toggleDateInput('best-sellers')">
                    <option value="day">Ngày</option>
                    <option value="month">Tháng</option>
                </select>
                <input type="date" id="best-sellers-date" class="bg-gray-700 text-white p-2 rounded">
                <input type="month" id="best-sellers-month" class="bg-gray-700 text-white p-2 rounded hidden">
            </div>
            <canvas id="bestSellersChart"></canvas>
        </div>

        <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Sản Phẩm Quan Tâm</h2>
            <div class="flex gap-2 mb-4">
                <select id="most-viewed-filter" class="bg-gray-700 text-white p-2 rounded" onchange="toggleDateInput('most-viewed')">
                    <option value="day">Ngày</option>
                    <option value="month">Tháng</option>
                </select>
                <input type="date" id="most-viewed-date" class="bg-gray-700 text-white p-2 rounded">
                <input type="month" id="most-viewed-month" class="bg-gray-700 text-white p-2 rounded hidden">
            </div>
            <canvas id="mostViewedChart"></canvas>
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
        document.getElementById(`${type}-date`).classList.toggle('hidden', filter !== 'day');
        document.getElementById(`${type}-month`).classList.toggle('hidden', filter !== 'month');
    }

    function fetchData(endpoint, chart, filterId, dateId, monthId) {
        const filterValue = document.getElementById(filterId).value;
        const dateValue = document.getElementById(dateId).value;
        const monthValue = document.getElementById(monthId).value;
        
        let url = `/api/${endpoint}?filter=` + filterValue;
        if (filterValue === 'day' && dateValue) {
            url += `&date=` + dateValue;
        } else if (filterValue === 'month' && monthValue) {
            url += `&month=` + monthValue;
        }
        
        fetch(url)
            .then(response => response.json())
            .then(data => {
                chart.data.labels = data.labels;
                chart.data.datasets[0].data = data.values;
                chart.update();
            });
    }

    function initCharts() {
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        const bestSellersCtx = document.getElementById('bestSellersChart').getContext('2d');
        const mostViewedCtx = document.getElementById('mostViewedChart').getContext('2d');

        const revenueChart = new Chart(revenueCtx, { type: 'line', data: { labels: [], datasets: [{ label: 'Doanh Thu', data: [], borderColor: 'rgba(75, 192, 192, 1)', backgroundColor: 'rgba(75, 192, 192, 0.2)', borderWidth: 2 }] }, options: { responsive: true, scales: { y: { beginAtZero: true } } } });
        const bestSellersChart = new Chart(bestSellersCtx, { type: 'bar', data: { labels: [], datasets: [{ label: 'Bán Chạy', data: [], backgroundColor: 'rgba(255, 99, 132, 0.2)', borderColor: 'rgba(255, 99, 132, 1)', borderWidth: 2 }] }, options: { responsive: true, scales: { y: { beginAtZero: true } } } });
        const mostViewedChart = new Chart(mostViewedCtx, { type: 'bar', data: { labels: [], datasets: [{ label: 'Quan Tâm', data: [], backgroundColor: 'rgba(54, 162, 235, 0.2)', borderColor: 'rgba(54, 162, 235, 1)', borderWidth: 2 }] }, options: { responsive: true, scales: { y: { beginAtZero: true } } } });

        fetchData('revenue', revenueChart, 'revenue-filter', 'revenue-date', 'revenue-month');
        fetchData('best-sellers', bestSellersChart, 'best-sellers-filter', 'best-sellers-date', 'best-sellers-month');
        fetchData('most-viewed', mostViewedChart, 'most-viewed-filter', 'most-viewed-date', 'most-viewed-month');
    }

    document.addEventListener('DOMContentLoaded', initCharts);
</script>
@endsection
