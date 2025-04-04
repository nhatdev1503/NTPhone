import './bootstrap';

window.Echo.private('chat.' + userId)
    .listen('MessageSent', (event) => {
        alert('Đã nhận tin nhắn!');
            let chatContent = document.getElementById('chat-content');
            let div = document.createElement('div');
            div.classList.add('p-2', event.message.sender_id == userId ? 'text-right' : 'text-left');
            div.innerHTML = `<span class="inline-block p-2 rounded ${event.message.sender_id == userId ? 'bg-green-500 text-white' : 'bg-gray-200'}">${event.message.message}</span>`;
            chatContent.appendChild(div);

            // Cuộn xuống tin nhắn mới nhất
            chatContent.scrollTop = chatContent.scrollHeight;
    });
