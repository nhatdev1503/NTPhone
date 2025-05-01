<!-- Notification Container -->
<div id="notification-container" class="notification-container"></div>

<style>
.notification-container {
    position: fixed;
    top: 70px;
    right: 20px;
    z-index: 100000;
    width: 300px;
}

.notification {
    background: white;
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    margin-bottom: 1rem;
    transform: translateX(100%);
    opacity: 0;
    transition: all 0.3s ease;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.notification.show {
    transform: translateX(0);
    opacity: 1;
}

.notification i {
    font-size: 1.25rem;
    flex-shrink: 0;
}

.notification-content {
    flex: 1;
}

.notification-title {
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.notification-message {
    font-size: 0.95rem;
    line-height: 1.4;
    color: #666;
}

.notification.success { border-left: 4px solid #4caf50; }
.notification.success i { color: #4caf50; }

.notification.error { border-left: 4px solid #f44336; }
.notification.error i { color: #f44336; }

.notification.warning { border-left: 4px solid #ff9800; }
.notification.warning i { color: #ff9800; }

.notification.info { border-left: 4px solid #2196f3; }
.notification.info i { color: #2196f3; }
</style>

<script>
function showNotification(message, type = 'success', title = null, duration = 5000) {
    const container = document.getElementById('notification-container');
    const notification = document.createElement('div');
    notification.classList.add('notification', type);

    let icon = '';
    switch (type) {
        case 'success':
            icon = '<i class="fas fa-check-circle"></i>';
            break;
        case 'error':
            icon = '<i class="fas fa-exclamation-circle"></i>';
            break;
        case 'warning':
            icon = '<i class="fas fa-exclamation-triangle"></i>';
            break;
        case 'info':
            icon = '<i class="fas fa-info-circle"></i>';
            break;
    }

    let content = `
        ${icon}
        <div class="notification-content">
            ${title ? `<div class="notification-title">${title}</div>` : ''}
            <div class="notification-message">${message}</div>
        </div>
    `;

    notification.innerHTML = content;
    container.appendChild(notification);

    setTimeout(() => notification.classList.add('show'), 10);
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => notification.remove(), 500);
    }, duration);
}

// Expose function globally
window.showNotification = showNotification;
</script> 