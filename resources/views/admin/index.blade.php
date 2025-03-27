@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <h1 class="text-3xl font-bold mb-6">Thống Kê</h1>
  
    <!-- Thẻ Thống Kê Tổng Quan -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold">Tổng Sản Phẩm</h2>
        <p class="text-4xl font-bold mt-2">1,200</p>
      </div>
      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold">Tổng Đơn Hàng</h2>
        <p class="text-4xl font-bold mt-2">3,450</p>
      </div>
      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold">Tổng Doanh Thu</h2>
        <p class="text-4xl font-bold mt-2">$150,000</p>
      </div>
      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold">Khách Hàng Mới</h2>
        <p class="text-4xl font-bold mt-2">850</p>
      </div>
    </div>
  
    <!-- Biểu Đồ Doanh Thu -->
    <div class="bg-gray-800 p-6 rounded-xl shadow-lg mb-8">
      <h2 class="text-xl font-semibold mb-4">Biểu Đồ Doanh Thu</h2>
      <canvas id="revenueChart"></canvas>
    </div>
  
    <!-- Sản Phẩm Bán Chạy Nhất và Được Quan Tâm Nhiều Nhất -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Sản Phẩm Bán Chạy Nhất</h2>
        <ul class="space-y-2">
          <li>📱 iPhone 15 Pro Max - 500 đơn hàng</li>
          <li>📱 Samsung Galaxy S24 Ultra - 450 đơn hàng</li>
          <li>📱 Xiaomi 13 Pro - 300 đơn hàng</li>
        </ul>
      </div>
  
      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Sản Phẩm Được Quan Tâm Nhiều Nhất</h2>
        <ul class="space-y-2">
          <li>📱 iPhone 15 Pro Max - 20,000 lượt xem</li>
          <li>📱 Samsung Galaxy S24 Ultra - 18,000 lượt xem</li>
          <li>📱 Xiaomi 13 Pro - 15,000 lượt xem</li>
        </ul>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('revenueChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'],
        datasets: [{
          label: 'Doanh Thu (USD)',
          data: [12000, 15000, 18000, 20000, 22000, 25000, 27000],
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  </script>
  
@endsection
