<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>


  <script>
    lucide.createIcons();
  </script>
  <title>Admin Panel</title>
<style>
  .validate_error {margin-top:5px; color:red; font-size:12px;}
</style>
</head>
<body class="bg-gray-100 text-gray-900">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-700 p-6 text-white">
      <h1 class="text-2xl font-bold mb-8">Admin</h1>
      <ul>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-home"></i>
          <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-image"></i>
          <a href="{{ route('banners.index') }}">Quản lí banner</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-layout-grid"></i>
          <a href="{{ route('categories.index') }}">Quản lí danh mục</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-box"></i>
          <a href="{{ route('colors_storages.index') }}"> Màu - Dung lượng</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-box"></i>
          <a href="{{ route('products.index') }}">Quản lí sản phẩm</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-box"></i>
          <a href="{{ route('orders.index') }}">Quản lí đơn hàng</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-tag"></i>
          <a href="{{ route('discounts.index') }}">Quản lí khuyến mãi</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-phone-call"></i>
          <a href="{{ route('contacts.index') }}">Quản lí liên hệ</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-users"></i>
          <a href="{{ route('users.index') }}">Quản lí tài khoản</a>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <div class="bg-gray-800 p-4 flex justify-between items-center relative text-white">
        <h2 class="text-2xl font-bold">NTPhone</h2>
        
        <!-- User Dropdown -->
        <div class="relative">
          <!-- Trigger Button -->
          <input type="checkbox" id="userMenuToggle" class="peer hidden">
          <label for="userMenuToggle" class="cursor-pointer flex items-center gap-2">
            <i class="lucide lucide-user-circle text-white text-3xl"></i>
            <span class="hidden md:inline-block">Admin</span>
          </label>

          <!-- Dropdown Menu -->
          <div class="hidden peer-checked:flex flex-col absolute right-0 mt-2 w-56 bg-white text-gray-900 rounded-lg shadow-xl overflow-hidden z-50">
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Thông tin cá nhân</a>
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Đổi mật khẩu</a>
            <form action="{{ route('auth.logout') }}" method="POST">
              @csrf
              <button type="submit" class="w-full text-left px-4 py-3 text-red-600 hover:bg-gray-100">Đăng xuất</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Chat Widget -->
    <div id="chat-widget" class="fixed bottom-4 right-4 w-16 h-16 bg-blue-600 text-white flex items-center justify-center rounded-full cursor-pointer shadow-lg" onclick="toggleChat()">
      💬
  </div>

  <!-- Chat Box -->
  <div id="chat-box" class="fixed bottom-20 right-4 w-80 bg-white border shadow-lg rounded-lg hidden">
      <div class="bg-blue-600 text-white p-3 flex justify-between items-center" style="border-radius: 10px">
          <span>Chat</span>
          <button onclick="toggleChat()" class="text-white">✖</button>
      </div>
      <div id="chat-content" class="p-3 max-h-96 overflow-y-auto"></div>
      <div class="p-3 border-t">
          <input type="text" id="message-input" class="w-full p-2 border rounded" placeholder="Nhập tin nhắn...">
          <button onclick="sendMessage()" class="w-full bg-blue-600 text-white p-2 mt-2 rounded">Gửi</button>
      </div>
  </div>

  <script>
      const userId = {{ auth()->user()->id }};
      let selectedUser = null;
      let chatOpen = false;

      function toggleChat() {
          const chatBox = document.getElementById('chat-box');
          chatOpen = !chatOpen;
          chatBox.style.display = chatOpen ? 'block' : 'none';

          if (chatOpen) loadChats();
      }

      function loadChats() {
          axios.get('/chats').then(response => {
              let chats = response.data;
              let chatContent = document.getElementById('chat-content');
              chatContent.innerHTML = '';

              Object.keys(chats).forEach(user => {
                  let div = document.createElement('div');
                  div.classList.add('p-2', 'cursor-pointer', 'border-b', 'hover:bg-gray-100');
                  div.textContent = "Chat với user " + user;
                  div.onclick = () => loadMessages(user);
                  chatContent.appendChild(div);
              });
          });
      }

      function loadMessages(user) {
          selectedUser = user;
          axios.get(`/messages/${user}`).then(response => {
              let messages = response.data;
              let chatContent = document.getElementById('chat-content');
              chatContent.innerHTML = '';

              messages.forEach(msg => {
                  let div = document.createElement('div');
                  div.classList.add('p-2', msg.sender_id == userId ? 'text-right' : 'text-left');
                  div.innerHTML = `<span class="inline-block p-2 rounded ${msg.sender_id == userId ? 'bg-blue-500 text-white' : 'bg-gray-200'}">${msg.message}</span>`;
                  chatContent.appendChild(div);
              });

              // Cuộn xuống tin nhắn mới nhất
              chatContent.scrollTop = chatContent.scrollHeight;
          });
      }

      function sendMessage() {
          if (!selectedUser) {
              alert("Chọn một cuộc trò chuyện trước!");
              return;
          }

          let message = document.getElementById('message-input').value;
          axios.post('/send-message', {
              receiver_id: selectedUser,
              message: message
          }).then(() => {
              document.getElementById('message-input').value = '';
          });
      }
  </script>
  @vite('resources/js/private.js')
      <!-- Page Content -->
      <div class="flex-1 p-8 bg-white rounded-lg shadow">
        @yield('content')
      </div>
    </div>
  </div>
</body>
</html>