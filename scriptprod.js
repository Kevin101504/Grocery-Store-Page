document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const checkoutButton = document.getElementById('checkout');

    let cart = [];

    // Add to cart button click event
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const name = button.getAttribute('data-name');
            const price = parseFloat(button.getAttribute('data-price'));

            addToCart(name, price);
            updateCartDisplay();
        });
    });

    // Add item to cart
    function addToCart(name, price) {
        cart.push({ name, price });
    }

    // Update cart display
    function updateCartDisplay() {
        cartItemsList.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.name} - $${item.price.toFixed(2)}`;
            cartItemsList.appendChild(li);
            total += item.price;
        });

        cartTotal.textContent = `$${total.toFixed(2)}`;
    }

    // Checkout button click event
    checkoutButton.addEventListener('click', function() {
        if (cart.length > 0) {
            alert('Thank you for your purchase!');
            cart = [];
            updateCartDisplay();
        } else {
            alert('Your cart is empty. Add some items before checking out.');
        }
    });
});
