@extends('layouts.admin.main')

@section('content')
<style>
    #usernampo{
        color: black;

    }
    .fw-bold {
        color: black ;
    }
    /* Chat Container Styles */
.chat-container {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
}

/* Sidebar Styles */
.chat-container .bg-light {
    background-color: #f8f9fa !important;
}

.chat-container .border-end {
    border-color: #edf2f7 !important;
}

/* Search Input */
.chat-container .form-control {
    border-radius: 20px;
    padding: 10px 20px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.chat-container .form-control:focus {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.15);
    border-color: #63b3ed;
}

/* Nav Tabs */
.chat-container .nav-tabs {
    border: none;
}

.chat-container .nav-tabs .nav-link {
    border: none;
    color: #718096;
    padding: 8px 16px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.chat-container .nav-tabs .nav-link.active {
    color: #4299e1;
    background: transparent;
    border-bottom: 2px solid #4299e1;
}

/* User List */
.chat-container .list-group-item {
    border: none;
    padding: 12px 16px;
    margin-bottom: 4px;
    border-radius: 8px;
    transition: all 0.2s ease;
}

.chat-container .list-group-item:hover {
    background-color: #edf2f7;
}

.chat-container .list-group-item.active {
    background-color: #ebf8ff;
    color: #2b6cb0;
}

/* Chat Header */
.chat-container .border-bottom {
    border-color: #edf2f7 !important;
}

/* Messages Area */
.chat-container .bg-light {
    background: linear-gradient(rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.95)), url('/chat-bg.png');
    background-size: cover;
}

/* Message Bubbles */
.chat-container .bg-white {
    border-radius: 16px 16px 16px 0;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

.chat-container .bg-primary {
    background-color: #4299e1 !important;
    border-radius: 16px 16px 0 16px;
}

/* Timestamps */
.chat-container .text-muted {
    font-size: 0.75rem;
    color: #718096 !important;
}

/* Avatar Images */
.chat-container .rounded-circle {
    border: 2px solid #fff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

/* Footer Input Area */
.chat-container .border-top {
    border-color: #edf2f7 !important;
}

.chat-container .btn-light {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #e2e8f0;
    transition: all 0.2s ease;
}

.chat-container .btn-light:hover {
    background-color: #edf2f7;
}

.chat-container .btn-success {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #4299e1;
    border: none;
    transition: all 0.2s ease;
}

.chat-container .btn-success:hover {
    background-color: #3182ce;
    transform: scale(1.05);
}

/* Scrollbar Styling */
.chat-container .overflow-auto::-webkit-scrollbar {
    width: 6px;
}

.chat-container .overflow-auto::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.chat-container .overflow-auto::-webkit-scrollbar-thumb {
    background: #cbd5e0;
    border-radius: 3px;
}

.chat-container .overflow-auto::-webkit-scrollbar-thumb:hover {
    background: #a0aec0;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .chat-container {
        height: 100vh !important;
        border-radius: 0;
    }

    .chat-container .col-md-3 {
        position: fixed;
        left: -100%;
        top: 0;
        bottom: 0;
        width: 100%;
        z-index: 1000;
        transition: all 0.3s ease;
    }

    .chat-container .col-md-3.show {
        left: 0;
    }
}
.chat-list {
					display: flex;
					margin-bottom: 15px;
					align-items: flex-start;
				}

				.chat-list.right {
					flex-direction: row-reverse;
				}

				.chat-list.left {
					flex-direction: row;
                    color: black;
				}

				.chat-avatar {
					width: 36px;
					height: 36px;
					margin: 0 10px;
				}

				.chat-avatar img {
					width: 100%;
					height: 100%;
					border-radius: 50%;
					object-fit: cover;
				}

				.user-chat-content {
					max-width: 70%;
					padding: 8px 12px;
					border-radius: 12px;
					background: #fff;
					box-shadow: 0 1px 2px rgba(0,0,0,0.1);
				}

				.chat-list.right .user-chat-content {
					background: #ef9f00;
					color: white;
				}

				.chat-list.right .meta {
					color: rgba(255,255,255,0.8) !important;
				}

				.chat-media {
					margin-top: 5px;
				}

				.chat-media img {
					max-width: 200px;
					border-radius: 8px;
				}

				.meta {
					font-size: 0.75rem;
					color: #9b9b9b;
					margin-top: 5px;
				}

				.chat-body form {
					display: flex;
					gap: 5px;
					padding: 10px;
					background: #fff;
					border-top: 1px solid #eee;
				}

				.chat-body input[type="text"] {
					flex: 1;
					padding: 8px;
					border: 1px solid #ddd;
					border-radius: 20px;
					outline: none;
				}

				.chat-body button {
					padding: 8px 15px;
					background: #ef9f00;
					border: none;
					border-radius: 20px;
					color: white;
					cursor: pointer;
					transition: background 0.2s;
				}

				.chat-body button:hover {
					background: #e08f00;
				}
                #chat-widget{
                   display: none;
                }
</style>

<!-- Bootstrap Chat UI -->
<div class="container-fluid">
    <div class="row chat-container shadow rounded overflow-hidden" style="height: 90vh;">
        <div class="col-md-3 p-3 bg-light border-end">
            <h5 class="fw-bold mb-3">Trò chuyện</h5>
            <input type="text" id="searchInput" class="form-control mb-3" placeholder="🔍 Tìm kiếm...">
            
            <ul class="nav nav-tabs mb-3">
                <li class="nav-item">
                    <button class="nav-link active">Khách hàng</button>
                </li>
            </ul>
            <div class="list-group overflow-auto" style="max-height: 70vh;">
                @foreach ($users as $user)
                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center" 
                   data-id="{{ $user->id }}"
                   data-name="{{ $user->username }}"
                   data-avatar="{{ $user->avatar && Storage::exists($user->avatar) ? Storage::url($user->avatar) : 'https://i.pravatar.cc/40' }}">
                    <img src="{{ $user->avatar && Storage::exists($user->avatar) ? Storage::url($user->avatar) : 'https://i.pravatar.cc/40' }}" 
                         class="rounded-circle me-2" width="40">
                    <span>{{$user->username}}</span>
                </a>
                @endforeach
            </div>
        </div>

        <div class="col-md-9 d-flex flex-column p-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom bg-white">
                <div class="d-flex align-items-center">
                    <img src="https://i.pravatar.cc/40" id="avartar-xs" class="rounded-circle me-2" width="40">
                    <strong id="usernampo">Chọn người dùng để trò chuyện</strong>
                </div>
            </div>
            
            <div class="flex-grow-1 overflow-auto p-3 bg-light" id="users-conversation" style="background-image: url('/chat-bg.png'); background-size: cover; height: 500px;">
                <!-- Messages will be dynamically inserted here -->
            </div>

            <form id="chatinput-form" class="p-3 border-top bg-white d-flex align-items-center">
                <input type="hidden" id="idUser">
                <input type="file" id="fileInput" class="d-none">
                <button type="button" class="btn btn-light me-2" onclick="document.getElementById('fileInput').click();">
                    <i class="bi bi-paperclip"></i>
                </button>
                <input type="text" id="chat-input" class="form-control me-2" placeholder="Type your message...">
                <button type="submit" class="btn btn-success"><i class="bi bi-send"></i></button>
            </form>
        </div>
    </div>
</div>
@vite('resources/js/app.js')
<script type="module">
    // Add Echo debugging
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const query = this.value.toLowerCase();
        const userList = document.querySelectorAll('.list-group-item');
        userList.forEach((li) => {
            const name = li.getAttribute('data-name').toLowerCase();
            if (name.includes(query)) {
                li.style.display = '';
            } else {
                li.style.display = 'none';
            }
        });
    });

    const form = document.getElementById('chatinput-form');
    const chatInput = document.getElementById('chat-input');
    const idUser = document.getElementById('idUser');
    const userIdAdmin = @json(Auth::user()->id);
    let currentChannel = null;

    document.addEventListener("DOMContentLoaded", () => {
        const listItems = document.querySelectorAll('.list-group-item');
        const userDisplayName = document.getElementById('usernampo');
        const avatarDisplay = document.getElementById('avartar-xs');
        let formSubmitHandler;

        listItems.forEach(item => {
            item.addEventListener('click', () => {
                // Remove active class from all items
                listItems.forEach(li => li.classList.remove('active'));
                // Add active class to clicked item
                item.classList.add('active');

                const chatList = document.getElementById('users-conversation');
                chatList.innerHTML = '';
                
                const userId = item.getAttribute('data-id');
                const userName = item.getAttribute('data-name');
                const avatarUser = item.getAttribute('data-avatar');
                fetchRoomId(userId)
                // Update header with user info
                avatarDisplay.src = avatarUser;
                userDisplayName.textContent = userName;
                idUser.value = userId;

                // Fetch chat history
                getDataChatMessageUserById(userId, avatarUser);

                // Remove previous event listener if exists
                if (formSubmitHandler) {
                    form.removeEventListener('submit', formSubmitHandler);
                }

                // Create new event handler
                formSubmitHandler = async (event) => {
                    event.preventDefault();
                    const fileInput = document.getElementById('fileInput');
                    const file = fileInput.files[0];
                    const message = chatInput.value.trim();
                    
                    if (!message && !file) return;

                    let formData = new FormData();
                    formData.append('message', message);
                    formData.append('receiver_id', userId);
                    if (file) {
                        formData.append('file', file);
                    }
                    var route = '{{ route('chat.send-message') }}';
                    try {
                        const response = await axios.post(route, formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data',
                            },
                        });
                        chatInput.value = '';
                        fileInput.value = '';
                        
                    } catch (error) {
                        console.error('Error sending message:', error);
                        fileInput.value = '';
                    }
                };

                // Add new event listener
                form.addEventListener('submit', formSubmitHandler);

                // Set up real-time chat channel
                //setupChatChannel(userId);
            });
        });
    });

    // const setupChatChannel = async (userId) => {
    //     try {
    //         var route = '{{ route('chat.get-room-id') }}';
    //         const response = await axios.post(route, {
    //             user_id: userId,
    //         });
    //         const roomId = response.data.roomId;
    //         console.log('Room ID received:', roomId);

    //         if (currentChannel) {
    //             console.log('Unsubscribing from previous channel:', currentChannel.name);
    //             currentChannel.stopListening('.MessageSent');
    //             currentChannel.unsubscribe();
    //         }

    //         const channelName = `chat.${roomId}`;
    //         console.log('Attempting to subscribe to channel:', channelName);
            
    //         currentChannel = Echo.private(channelName);
            
    //         currentChannel.listen('.MessageSent', (e) => {
    //             console.log('Message received on channel:', channelName);
    //             console.log('Message data:', e);
    //             console.log('Sender ID:', e.sender.id);
    //             console.log('Current admin ID:', userIdAdmin);
                
    //             // Only render messages from others, not our own messages
    //             if (e.sender.id !== userIdAdmin) {
    //                 console.log('Rendering message from other user');
    //                 renderMessage(e, userIdAdmin, userId);
    //             } else {
    //                 console.log('Skipping own message');
    //             }
    //         });

    //         currentChannel.subscribed(() => {
    //             console.log('Successfully subscribed to channel:', channelName);
    //         });

    //         currentChannel.error((error) => {
    //             console.error('Channel subscription error:', error);
    //         });

    //     } catch (error) {
    //         console.error('Error setting up chat channel:', error);
    //     }
    // };

    function renderMessage(e, userIdAdmin, idUser) {
        console.log('Rendering message:', e);
        if (e !== null) {
            const chatList = document.getElementById('users-conversation');
            let chatHTML = '';

            // Check if the message is from the current user
            const isCurrentUser = e.sender.id === userIdAdmin;
            
            chatHTML += `
                <div class="chat-list ${isCurrentUser ? 'right' : 'left'}">
                    ${!isCurrentUser ? `
                        <div class="chat-avatar">
                            <img src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="Avatar">
                        </div>
                    ` : ''}
                    <div class="user-chat-content">
                        <p>${e.message}</p>
                        ${e.media_path ? `
                            <div class="chat-media">
                                <img src="${e.media_path}" alt="Image" style="max-width: 200px; border-radius: 8px;">
                            </div>
                        ` : ''}
                        <p class="meta" style="color:#9b9b9b"><time datetime="2018">${formatDateTime(new Date())}</time></p>
                    </div>
                </div>`;

            chatList.insertAdjacentHTML('beforeend', chatHTML);
            chatList.scrollTop = chatList.scrollHeight;
        }
    }
    const fetchRoomId = async (userId) => {
            try {
                var route = '{{ route('chat.get-room-id') }}';
                const response = await axios.post(route, {
                    user_id: userId,
                });
                let roomId = response.data.roomId;
                Echo.private(`chat.` + roomId)
                    .listen('MessageSent', (e) => {
                        console.log('MessageSent event received:', e);
                        renderMessage(e, userIdAdmin, userId)
                    });
            } catch (error) {
                console.error('Error fetching room ID:', error.response?.data?.message || error.message);
            }
        };


    async function getDataChatMessageUserById(userId, avatarUser) {
        let url = '{{ route('chat.getDataChatAdmin') }}';
        try {
            const response = await axios.post(url, {
                userId: userId,
                _token: '{{ csrf_token() }}'
            });

            const messages = response.data[1];
            console.log(messages);
            renderMessageData(messages, avatarUser);
        } catch (error) {
            console.error('Error fetching chat messages:', error);
        }
    }

    function renderMessageData(messages, avatarUser) {
        const chatList = document.getElementById('users-conversation');
        let currentUserId = @json(Auth::check() ? Auth::user()->id : null);
        let chatHTML = '';

        messages.forEach(data => {
            if (data.sender_id === currentUserId) {
                chatHTML += `
                    <div class="chat-list right">
                        <div class="user-chat-content">
                            <p>${data.message}</p>
                            ${avatarUser ? `
                                <div class="chat-media">
                                    <img src="{{ Storage::url('${avatarUser}') }}" alt="Image" style="max-width: 200px; border-radius: 8px;">
                                </div>
                            ` : ''}
                            <p class="meta" style="color:#9b9b9b"><time datetime="2018">${formatDateTime(new Date(data.created_at))}</time></p>
                        </div>
                    </div>`;
            } else {
                chatHTML += `
                    <div class="chat-list left">
                        <div class="chat-avatar">
                            <img src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="Avatar">
                        </div>
                        <div class="user-chat-content">
                            <p>${data.message}</p>
                            ${data.media_path ? `
                                <div class="chat-media">
                                    <img src="{{ Storage::url('${data.media_path}') }}" alt="Image" style="max-width: 200px; border-radius: 8px;">
                                </div>
                            ` : ''}
                            <p class="meta" style="color:#9b9b9b"><time datetime="2018">${formatDateTime(new Date(data.created_at))}</time></p>
                        </div>
                    </div>`;
            }
        });

        chatList.insertAdjacentHTML('beforeend', chatHTML);
        const chatView = document.getElementById('users-conversation');
        chatView.scrollTop = chatView.scrollHeight;
    }

    function formatDateTime(dateTime) {
        const date = new Date(dateTime);
        const hours = String(date.getHours()).padStart(2, '0');
        const minutes = String(date.getMinutes()).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();
        return `${hours}:${minutes}, ${day}-${month}-${year}`;
    }
</script>
@endsection

