function openModal(orderId, currentStatus) {
    const form = document.getElementById('statusForm');
    form.action = `/order/${orderId}`;

    const statusSelect = document.getElementById('status');
    statusSelect.value = currentStatus;

    document.getElementById('statusModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('statusModal').classList.add('hidden');
}