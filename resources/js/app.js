import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

document.addEventListener('DOMContentLoaded', () => {
    function updatePrice(input) {
        const price = parseFloat(input.dataset.price);
        const quantity = parseInt(input.value) || 0;
        const total = (price * quantity).toFixed(2);

        const priceElement = input.closest('.row').querySelector('.total-price');
        if (priceElement) {
            priceElement.textContent = `${total}€`;
        }
    }

    function changeQuantity(button, delta) {
        const input = button.parentNode.querySelector('input[type=number]');
        let current = parseInt(input.value) || 0;
        current = Math.max(0, current + delta);
        input.value = current;
        updatePrice(input);
    }


    window.changeQuantity = changeQuantity;

    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('input', () => updatePrice(input));
        updatePrice(input);
    });
});

document.querySelectorAll('.delivery-option').forEach(input => {
    input.addEventListener('change', () => {
        const price = parseFloat(input.dataset.price).toFixed(2);
        document.getElementById('delivery-price').textContent = `${price}€`;
    });
});