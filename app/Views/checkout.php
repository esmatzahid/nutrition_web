<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Checkout</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f1f3f6;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .container {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      font-weight: bold;
      margin-bottom: 10px;
      display: block;
    }
    input[type="text"], input[type="email"], input[type="tel"], input[type="number"] {
      width: 100%;
      padding: 12px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn {
      background-color: #28a745;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
      width: 100%;
      margin-top: 20px;
    }
    .btn:hover {
      background-color: #218838;
    }
    .error {
      color: #dc3545;
      font-size: 0.875rem;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Checkout</h1>
    <form id="checkout-form">
      <div class="form-group">
        <label for="full-name">Full Name</label>
        <input type="text" id="full-name" name="full-name" required />
        <div class="error" id="error-name"></div>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required />
        <div class="error" id="error-email"></div>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required />
        <div class="error" id="error-phone"></div>
      </div>

      <div class="form-group">
        <label for="address">Shipping Address</label>
        <input type="text" id="address" name="address" required />
        <div class="error" id="error-address"></div>
      </div>

      <button type="submit" class="btn">Place Order</button>
    </form>
  </div>

  <script>
    document.getElementById('checkout-form').addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent form submission

      // Clear previous error messages
      document.getElementById('error-name').innerText = '';
      document.getElementById('error-email').innerText = '';
      document.getElementById('error-phone').innerText = '';
      document.getElementById('error-address').innerText = '';

      let isValid = true;

      // Get form values
      const fullName = document.getElementById('full-name').value.trim();
      const email = document.getElementById('email').value.trim();
      const phone = document.getElementById('phone').value.trim();
      const address = document.getElementById('address').value.trim();

      // Validate form fields
      if (!fullName) {
        document.getElementById('error-name').innerText = 'Full Name is required.';
        isValid = false;
      }

      if (!email || !validateEmail(email)) {
        document.getElementById('error-email').innerText = 'Please enter a valid email address.';
        isValid = false;
      }

      if (!phone || !validatePhone(phone)) {
        document.getElementById('error-phone').innerText = 'Please enter a valid phone number.';
        isValid = false;
      }

      if (!address) {
        document.getElementById('error-address').innerText = 'Shipping address is required.';
        isValid = false;
      }

      // If all validations pass, proceed to place order
      if (isValid) {
        // Simulate successful form submission
        alert('Order placed successfully! Redirecting to confirmation page.');
        localStorage.removeItem('cart'); // Clear the cart
        window.location.href = 'thank_you.php'; // Redirect to thank you page
      }
    });

    function validateEmail(email) {
      const regex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
      return regex.test(email);
    }

    function validatePhone(phone) {
      const regex = /^\d{10}$/; // Simple validation for 10-digit phone numbers
      return regex.test(phone);
    }
  </script>

</body>
</html>
