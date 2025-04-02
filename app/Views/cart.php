<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #f4f7fa; color: #333; text-align: center; }
        table { width: 60%; margin: auto; border-collapse: collapse;background:"white"; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #004225; color: white; }
        .remove-btn { color: red; cursor: pointer; }
        .total { font-size: 1.5em; margin-top: 20px; font-weight: bold; }
        .checkout-btn { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
        .continue-shopping { 
            padding: 10px 20px; 
            background: #004225; 
            color: white; 
            border: none; 
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <h1>Your Cart</h1>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="cart-items"></tbody>
    </table>
<!-- ftp is not showing  ok pop up is not showing  -->
    <p class="total">Total: £<span id="cart-total">0.00</span></p>
    <button class="continue-shopping" onclick="window.location.href='index.html'">Continue Shopping</button>
    <button class="checkout-btn">Checkout</button>

    <script>
        $(document).ready(function () {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            function updateCartDisplay() {
                let total = 0;
                $("#cart-items").html("");
                
                if (cart.length === 0) {
                    $("#cart-items").html(`
                        <tr>
                            <td colspan="5">Your cart is empty</td>
                        </tr>
                    `);
                } else {
                    cart.forEach((item, index) => {
                        let itemTotal = item.price * item.quantity;
                        total += itemTotal;
                        $("#cart-items").append(`
                            <tr>
                                <td>${item.name}</td>
                                <td>£${item.price.toFixed(2)}</td>
                                <td>${item.quantity}</td>
                                <td>£${itemTotal.toFixed(2)}</td>
                                <td><span class="remove-btn" data-index="${index}">Remove</span></td>
                            </tr>
                        `);
                    });
                }
                $("#cart-total").text(total.toFixed(2));

                $(".remove-btn").click(function () {
                    let index = $(this).data("index");
                    cart.splice(index, 1);
                    localStorage.setItem("cart", JSON.stringify(cart));
                    updateCartDisplay();
                });
            }
            
            updateCartDisplay();
            
            $(".checkout-btn").click(function() {
                if (cart.length > 0) {
                    alert("Proceeding to checkout!");
                    // Here you would typically redirect to a checkout page
                } else {
                    alert("Your cart is empty!");
                }
            });
        });
    </script>
</body>
</html>