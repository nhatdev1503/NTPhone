<!-- Chat Widget -->
<div id="chat-widget" class="chat-widget" style="display: none;">
    <div class="chat-header">
        <h3>Chat</h3>
        <button class="close-chat" onclick="toggleChat()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
    <div class="chat-messages" id="chat-messages">
        <!-- Messages will be displayed here -->
    </div>
    <form id="chat-form" class="chat-input">
        <input type="text" id="message-input" placeholder="Nhập tin nhắn..." required>
        <button type="submit">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 2L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </form>
</div>

<style>
.chat-widget {
    position: fixed;
    bottom: 100px;
    right: 20px;
    width: 350px;
    height: 500px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    z-index: 1000;
    overflow: hidden;
}

.chat-header {
    background: #1a73e8;
    color: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.chat-header h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 500;
}

.close-chat {
    background: none;
    border: none;
    color: white;
    cursor: pointer;
    padding: 0;
}

.chat-messages {
    flex: 1;
    padding: 20px;
    overflow-y: auto;
    background: #f8f9fa;
}

.message {
    margin-bottom: 15px;
    max-width: 80%;
}

.message.received {
    margin-right: auto;
}

.message.sent {
    margin-left: auto;
}

.message-content {
    padding: 10px 15px;
    border-radius: 15px;
    font-size: 14px;
    line-height: 1.4;
}

.received .message-content {
    background: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.sent .message-content {
    background: #1a73e8;
    color: white;
}

.chat-input {
    padding: 15px;
    background: white;
    border-top: 1px solid #eee;
    display: flex;
    gap: 10px;
}

.chat-input input {
    flex: 1;
    border: 1px solid #ddd;
    padding: 10px 15px;
    border-radius: 25px;
    outline: none;
    font-size: 14px;
}

.chat-input input:focus {
    border-color: #1a73e8;
}

.chat-input button {
    background: #1a73e8;
    color: white;
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
}

.chat-input button:hover {
    background: #1557b0;
}

.chat-input button svg {
    width: 20px;
    height: 20px;
}

/* Custom Scrollbar */
.chat-messages::-webkit-scrollbar {
    width: 6px;
}

.chat-messages::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.chat-messages::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 3px;
}

.chat-messages::-webkit-scrollbar-thumb:hover {
    background: #555;
}
</style>

<script>
function toggleChat() {
    const chatWidget = document.getElementById('chat-widget');
    chatWidget.style.display = chatWidget.style.display === 'none' ? 'flex' : 'none';
}

document.addEventListener('DOMContentLoaded', function() {
    const chatForm = document.getElementById('chat-form');
    const messageInput = document.getElementById('message-input');
    const messagesContainer = document.getElementById('chat-messages');
    let currentChannel = null;

    // Xử lý khi form được submit
    chatForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const message = messageInput.value.trim();
        if (!message) return;

        try {
            // Gửi tin nhắn đến server
            const response = await axios.post('/chat/send-message', {
                message: message,
                receiver_id: 1 // ID của admin
            });

            // Clear input
            messageInput.value = '';
            
            // Hiển thị tin nhắn đã gửi
            appendMessage(message, true);
            
            // Scroll to bottom
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        } catch (error) {
            console.error('Error sending message:', error);
        }
    });

    // Hàm thêm tin nhắn vào container
    function appendMessage(message, isSent = false) {
        const messageElement = document.createElement('div');
        messageElement.className = `message ${isSent ? 'sent' : 'received'}`;
        messageElement.innerHTML = `
            <div class="message-content">
                ${message}
            </div>
        `;
        messagesContainer.appendChild(messageElement);
    }

    // Thiết lập kết nối real-time
    async function setupChatChannel() {
        try {
            const response = await axios.post('/chat/get-room-id', {
                user_id: 1 // ID của admin
            });
            
            const roomId = response.data.roomId;
            
            if (currentChannel) {
                currentChannel.stopListening('MessageSent');
            }

            currentChannel = Echo.private(`chat.${roomId}`)
                .listen('MessageSent', (e) => {
                    if (e.message.sender_id !== {{ auth()->id() }}) {
                        appendMessage(e.message.message, false);
                        messagesContainer.scrollTop = messagesContainer.scrollHeight;
                    }
                });
        } catch (error) {
            console.error('Error setting up chat:', error);
        }
    }

    // Load tin nhắn cũ
    async function loadMessages() {
        try {
            const response = await axios.post('/chat/get-data', {
                userId: 1 // ID của admin
            });
            
            const messages = response.data[1];
            const currentUserId = {{ auth()->id() }};
            
            messages.forEach(message => {
                appendMessage(message.message, message.sender_id === currentUserId);
            });
            
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        } catch (error) {
            console.error('Error loading messages:', error);
        }
    }

    // Khởi tạo chat
    setupChatChannel();
    loadMessages();
});
</script> 