document.addEventListener('DOMContentLoaded', () => {

    const basketData = document.getElementById('basket-data');
    const discountPercentage = parseFloat(basketData.dataset.discount) || 0;

     const discountDisplay = document.getElementById('discount-display');
    if (discountDisplay) {
        discountDisplay.textContent = `${discountPercentage}%`;
    }

    function updatePrice(input) {
        const price = parseFloat(input.dataset.price);
        const quantity = parseInt(input.value) || 0;
        const total = (price * quantity).toFixed(2);

        const priceElement = input.closest('.row').querySelector('.total-price');
        if (priceElement) {
            priceElement.textContent = `${total}€`;
        }
    }
   
    function sumBasket() {
        let totalPrice = 0;

        document.querySelectorAll('.quantity-input').forEach(input => {
            const price = parseFloat(input.dataset.price);
            const quantity = parseInt(input.value) || 0;
            totalPrice += price * quantity;
        });



        const selectedDelivery = document.querySelector('.delivery-option:checked');
        if (selectedDelivery) {
            totalPrice += parseFloat(selectedDelivery.dataset.price) || 0;
        }
        const discountAmount = totalPrice * (discountPercentage / 100);
        totalPrice = totalPrice - discountAmount;
        document.getElementById('total-price-basket').textContent = `${totalPrice.toFixed(2)}€`;
    }

    function changeQuantity(button, delta) {
        const input = button.parentNode.querySelector('input[type=number]');
        let current = parseInt(input.value) || 0;
        current = Math.max(0, current + delta);
        input.value = current;
        updatePrice(input);
        sumBasket();
    }

    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('input', () => {
            updatePrice(input);
            sumBasket();
        });
        updatePrice(input);
    });

    document.querySelectorAll('.delivery-option').forEach(input => {
        input.addEventListener('change', () => {
            const price = parseFloat(input.dataset.price).toFixed(2);
            document.getElementById('delivery-price').textContent = `${price}€`;
            sumBasket();
        });
    });
    window.changeQuantity = changeQuantity;
    window.sumBasket = sumBasket;
});
