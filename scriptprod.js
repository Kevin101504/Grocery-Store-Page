// Function to increase quantity
function increaseQuantity(productId) {
    const quantityInput = document.getElementById(`quantity-${productId}`);
    let quantity = parseInt(quantityInput.value);
    quantity++;
    quantityInput.value = quantity;
}

// Function to decrease quantity
function decreaseQuantity(productId) {
    const quantityInput = document.getElementById(`quantity-${productId}`);
    let quantity = parseInt(quantityInput.value);
    if (quantity > 0) {
        quantity--;
        quantityInput.value = quantity;
    }
}

// Function to add to cart (example, replace with actual cart functionality)
// Initialize cart as an array to hold cart items

let items = []; // Assuming this is a global variable to store cart items
let sum = 0; // Assuming this is a global variable to store the total cost

function addToCart(productId, productName, productPrice) {
    const quantityInput = document.getElementById(`quantity-${productId}`);
    const quantity = parseInt(quantityInput.value);
    const price = parseInt(productPrice);

    if (quantity > 0) {
        let found = false;

        for (let i = 0; i < items.length; i++) {
            let item = items[i];

            if (productId === item.id) {
                // Update quantity and cost properties of item if productId exists
                item.quant += quantity;
                item.cost += price;

                found = true;
                break; // Exit the loop if the item is found and updated
            }
        }

        // If productId doesn't exist in items, add it
        if (!found) {
            items.push({ id: productId, name: productName, cost: price, quant: quantity });
        }

        // Recalculate total sum
        sum = 0;
        for (let i = 0; i < items.length; i++) {
            sum += items[i].cost * items[i].quant;
        }

        // Update total displayed
        document.getElementById('total').innerHTML = `Total: $${sum}`;

        // Clear existing list items in 'cart-items' element
        document.getElementById('cart-items').innerHTML = '';

        // Create and append new list items for each item in items array
        displayprod();
        document.getElementById(`quantity-${productId}`).value=0;
    } else {
        alert('Please select a quantity greater than zero.');
    }
}

function reduceQuantity(productId) {
    for (let i = 0; i < items.length; i++) {
        if (items[i].id === productId) {
            // Reduce quantity by 1 if greater than 1
            if (items[i].quant > 1) {
                items[i].quant--;
            }

            else if(items[i].quant == 1){
                removeFromCart(productId);
            }

            // Recalculate total sum
            sum = 0;
            for (let j = 0; j < items.length; j++) {
                sum += items[j].cost * items[j].quant;
            }

            // Update total displayed
            document.getElementById('total').innerHTML = `Total: $${sum}`;

            // Update quantity input value
            document.getElementById(`quant-${productId}`).value = items[i].quant;

            let c=items[i].quant * items[i].cost;

            document.getElementById(`cost-${productId}`).innerHTML=`${c}`;

            break; // Exit loop once quantity is reduced
        }
    }
}

function addQuantity(productId){
    for (let i = 0; i < items.length; i++) {
        if (items[i].id === productId) {
            // Reduce quantity by 1 if greater than 1
            items[i].quant++;

            // Recalculate total sum
            sum = 0;
            for (let j = 0; j < items.length; j++) {
                sum += items[j].cost * items[j].quant;
            }

            // Update total displayed
            document.getElementById('total').innerHTML = `Total: $${sum}`;

            // Update quantity input value
            document.getElementById(`quant-${productId}`).value = items[i].quant;

            let c=items[i].quant * items[i].cost;

            document.getElementById(`cost-${productId}`).innerHTML=`${c}`;

            break; // Exit loop once quantity is reduced
        }
    }
}

function removeFromCart(productId) {
    for (let i = 0; i < items.length; i++) {
        if (items[i].id === productId) {
            // Remove the item from the items array
            items.splice(i, 1);

            // Recalculate total sum
            sum = 0;
            for (let j = 0; j < items.length; j++) {
                sum += items[j].cost * items[j].quant;
            }

            // Update total displayed
            document.getElementById('total').innerHTML = `Total: $${sum}`;

            // Remove item from the HTML display
            document.getElementById(`item-${productId}`).remove();

            break; // Exit loop once item is removed
        }
    }
}

function updateQuantity(productId, newQuantity) {
    for (let i = 0; i < items.length; i++) {
        if (items[i].id === productId) {
            // Update the quantity
            items[i].quant = parseInt(newQuantity);

            // Recalculate total sum
            sum = 0;
            for (let j = 0; j < items.length; j++) {
                sum += items[j].cost * items[j].quant;
            }

            // Update total displayed
            document.getElementById('total').innerHTML = `Total: $${sum}`;

            break; // Exit loop once quantity is updated
        }
    }
}


function checkout(){
    alert('Thank you for purchasing at our store.');
    // Refresh the page
    location.reload();

    // Scroll to the top of the page
    window.scrollTo(0, 0);
    
}

function displayprod(){
    for (let i = 0; i < items.length; i++) {
        let item = items[i];

        var div = document.createElement('div');
        div.id = `item-${item.id}`;
        div.innerHTML = `
            Name : ${item.name} <br>
            Quantity : 
            <button onclick="reduceQuantity(${item.id})">-</button>
            <input type="number" id="quant-${item.id}" value="${item.quant}" readonly> 
            <button onclick="addQuantity(${item.id})">+</button>
            <br>
            Cost : $<span id="cost-${item.id}">${item.cost * item.quant}</span>
            <hr>
        `;
        document.getElementById('cart-items').appendChild(div);
    }
}