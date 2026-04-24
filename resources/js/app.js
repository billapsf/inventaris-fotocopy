import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const deleteForms = document.querySelectorAll('[data-confirm-delete]');

    deleteForms.forEach((form) => {
        form.addEventListener('submit', (event) => {
            const message = form.dataset.confirmDelete || 'Yakin ingin menghapus data ini?';

            if (!window.confirm(message)) {
                event.preventDefault();
            }
        });
    });

    const alerts = document.querySelectorAll('[data-auto-hide]');

    alerts.forEach((alert) => {
        window.setTimeout(() => {
            alert.classList.add('is-hiding');

            window.setTimeout(() => {
                alert.remove();
            }, 250);
        }, 3000);
    });
});
