const cartTable = document.getElementById('cart-table');
const cartTotal = document.getElementById('cart-total');
const checkoutButton = document.getElementById('checkout-button');

let cartItems = [];

function updateCartTable() {
  let cartTableHtml = '';
  let totalPrice = 0;

  cartItems.forEach(item => {
    const totalItemPrice = item.quantity * item.price;
    cartTableHtml += `<tr>
                        <td>${item.name}</td>
                        <td>${item.quantity}</td>
                        <td>${item.price}</td>
                        <td>${totalItemPrice}</td>
                        <td><button class="remove-item" data-id="${item.id}">Remove</button></td>
                      </tr>`;
    totalPrice += totalItemPrice;
  });

  cartTable.querySelector('tbody').innerHTML = cartTableHtml;
  cartTotal.textContent = totalPrice;
}

function updateCartCount() {
  const cartCount = document.querySelector('.cart-count');
  cartCount.textContent = cartItems.reduce((acc, curr) => acc + curr.quantity, 0);
}

function addItemToCart(item) {
  const existingItemIndex = cartItems.findIndex(cartItem => cartItem.id === item.id);

  if (existingItemIndex !== -1) {
    cartItems[existingItemIndex].quantity += item.quantity;
  } else {
    cartItems.push(item);
  }

  updateCartTable();
  updateCartCount();
}

function removeItemFromCart(id) {
  cartItems = cartItems.filter(cartItem => cartItem.id !== id);

  updateCartTable();
  updateCartCount();
}


cartTable.addEventListener('click', event => {
  if (event.target.classList.contains('remove-item')) {
    const id = parseInt(event.target.getAttribute('data-id'));
    removeItemFromCart(id);
  }
});

checkoutButton.addEventListener('click', () => {
  alert('Thank you for your purchase!');
  updateCartTable();
  updateCartCount();
});

// Add sample items to cart
// addItemToCart({
//   id: 11,
//   name: 'Dog food',
//   price: 20,
//   quantity: 2
// });

// addItemToCart({
//   id: 2,
//   name: 'Leash',
//   price: 10,
//   quantity: 1
// });

// addItemToCart({
//   id: 3,
//   name: 'Dog bed',
//   price: 50,
//   quantity: 1
// });

// addItemToCart({
//   id: 4,
//   name: 'Dog toys',
//   price: 15,
//   quantity: 3
// });





// button
// Select the "Add to Cart" buttons
const addToCartButtons = document.querySelectorAll('.add-to-cart');

// Add event listeners to the buttons
addToCartButtons.forEach(button => {
  button.addEventListener('click', event => {
    const id = parseInt(button.getAttribute('data-id'));
    const name = button.getAttribute('data-name');
    const price = parseFloat(button.getAttribute('data-price'));
    addItemToCart({ id, name, price, quantity: 1 });
  });
});


// payment info
// Calculate cart total
const cartItemss = document.querySelectorAll('#cart-items tr');
let cartTotall = 0;

cartItemss.forEach(item => {
  const quantity = item.children[2].textContent;
  const price = item.children[1].textContent.replace('$', '');
  cartTotall += quantity * price;
});

document.querySelector('#cart-total').textContent = '$' + cartTotall.toFixed(2);



function showDiv() {
   document.getElementById('paymentSection').style.display = "block";
}


//prevent cart reload
// Get the cart data from Local Storage
const cartData = JSON.parse(localStorage.getItem('cartTable')) || {};

// Add an item to the cart
function addToCart(itemId, itemName, itemPrice, itemQty) {
  if (!cartData[itemId]) {
    cartData[itemId] = {
      name: itemName,
      qty: itemQty,
      price: itemPrice,
      totalPrice:totalItemPrice

    };
  } else {
    cartData[itemId].qty += itemQty;
  }
  
  // Update the cart display
  updateCartDisplay();
  
  // Save the updated cart data to Local Storage
  localStorage.setItem('cart', JSON.stringify(cartData));
}

// Update the cart display
function updateCartDisplay() {
  // Get the cart display element
  const cartDisplay = document.querySelector('#cart-display');
  
  // Calculate the total cart value
  let total = 0;
  for (let itemId in cartData) {
    total += cartData[itemId].price * cartData[itemId].qty;
  }
  
  // Update the cart display text
  if (total > 0) {
    cartDisplay.textContent = `Cart Total: $${total.toFixed(2)}`;
  } else {
    cartDisplay.textContent = 'Your cart is empty';
  }
}

// Call the updateCartDisplay function on page load
updateCartDisplay();


// // payment successful
const paynowButton = document.getElementById('paynow-button');

paynowButton.addEventListener('click', () => {
  alert('Order placed Successfully!');
});