<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amber Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fbdfff;
            animation: backgroundAnimation 10s infinite alternate;
        }
        @keyframes backgroundAnimation {
            0% { background-color: #f1f1f1; }
            50% { background-color: #d3d3d3; }
            100% { background-color: #f1f1f1; }
        }
        header {
            background-color: #f5acff;
            color: #fff;
            padding: 20px;
            text-align: lift;
            position: relative;
            z-index: 1;
        }
        .header-content {
            position: relative;
            z-index: 2;
        }
        .gift-box {
            width: 100px;
            height: 100px;
            background-color: #fff;
            border-radius: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            overflow: hidden;
        }
        .gift-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease-in-out;
        }
        .gift-box:hover .gift-image {
            transform: scale(1.2);
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            text-align: center;
        }
        h2 {
            margin-top: 50px;
            color: #333;
        }
        p {
            color: #666;
            margin-bottom: 20px;
            transition: color 0.3s ease-in-out;
            animation: fontGrow 0.3s ease-in-out forwards;
        }
        @keyframes fontGrow {
            from { font-size: 16px; }
            to { font-size: 18px; }
        }
        .product {
            display: inline-block;
            width: 30%;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .product:hover {
            transform: scale(1.05);
        }
        .product img {
            width: 100%; 
            height: 200px; 
            object-fit: cover; 
            border-radius: 5px; 
        }
        .product p.price {
            font-weight: bold;
            font-size: 20px;
            color: #333;
            animation: priceAnimation 1s ease-in-out infinite alternate;
        }
        @keyframes priceAnimation {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        .product:hover p.price {
            color: #d230ba;
            animation: none; 
        }
        .product p.description {
            font-style: italic;
        }
        .product:hover p.description {
            color: #444;
        }
        .category {
            margin-bottom: 20px;
        }
        .category select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        footer {
            background-color: #fbdfff;
            color: #fff;
            text-align: center;
            padding: 30px;
        }
        .btn-add-to-cart {
            background-color: #fbdfff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .btn-add-to-cart:hover {
            background-color: #d230ba;
        }
        .login-register {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
        }

        .login-register a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }
        .gift-box {
            width: 150px; 
            height: 150px; 
            border: 2px solid #333; 
            border-radius: 10px; 
            overflow: hidden; 
            position: relative; 
        }

        .gift-image {
            width: 100%; 
            height: 100%; 
            object-fit: cover;
        }
        .shopping-cart-container {
            position: absolute;
            top: 20px;
            right: 170px;
            color: white;
        }

        .shopping-cart-container i {
            margin-right: 5px;
        }

        .cart-counter {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border-radius: 50%;
        }
</style>


</head>
<body>

<header>
    <div class="header-content">
        <h1>Amber Store</h1>
        <p>"Discover the beauty. Welcome to Amber Store !"</p>
		
    </div>
    <div class="gift-box">
        <img class="gift-image" src="amber.jpg" alt="Gift">
    </div>
<div class="login-register">
        <a href="login interface.html">Login</a> | <a href="Register interface.html">Register</a>
    </div>
	<div class="shopping-cart-container">
	<a href="shoppingcart.html">CART</a>
        
        <i class="fas fa-shopping-cart"></i>
        <span class="cart-counter">0</span>
</header>

<img src="backamber1.jpg" alt="Background Image" style="position: fixed; z-index: -1; width: 100%; height: 100%; top: 0; left: 0; opacity: 0.7;">


<div class="container">
    <div class="category">
        <select name="category" onchange="location = this.value;">
            <option value="E-Gift Store.html">All Categories</option>
            <option value="cat1.html">For Men</a></option>
            <option value="cat2.html">For Women</option>
        </select>
    </div>
	
    <h2>Featured Products</h2>
    <div class="product">
        <img src="menmain.jpg" alt="Product 1">
        <h3>Eros Parfum by Versace</h3>
        <p class="description">A unique aura, sensual on the skin, reassuringly virile these are the keys to the hymn of love announced by Eros, the triumphant and flamboyant seducer.
</p>
		<p>Price: $</p>
        <p class="price">74.99</p>
        <button class="btn-add-to-cart">Add to Cart</button>
    </div>
    <div class="product">
        <img src="womenmain.jpg" alt="Product 2">
        <h3>MY WAY Eau de Parfum (90ml)</h3>
        <p class="description">A Fragrance for the Future MY WAY uses natural ingredients. The refillable bottle, available in 90 ml, reduces carbon emissions by 60% and plastic use by 64%.</p>
		<p>Price: $</p>
        <p class="price">149.99</p>
        <button class="btn-add-to-cart">Add to Cart</button>
    </div>
    <div class="product">
        <img src="menwomen.jpg" alt="Product 3">
        <h3>L’instant Homme De Guerlain</h3>
        <p class="description">L’Instant de Guerlain pour Homme highlights a unique moment: the one in which a man takes the initiative and after which everything will be different.</p>
		<p>Price: $</p>
        <p class="price">114.99</p>
        <button class="btn-add-to-cart">Add to Cart</button>
    </div>
</div>

<div class="container">
    <h2>Featured Products</h2>
    <?php
    include 'db.php'; // Include the database connection
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
                <div class='product'>
                    <img src='{$row['image']}' alt='{$row['name']}'>
                    <h3>{$row['name']}</h3>
                    <p class='description'>{$row['description']}</p>
                    <p class='price'>\${$row['price']}</p>
                    <button class='btn-add-to-cart' data-id='{$row['id']}'>Add to Cart</button>
                </div>
            ";
        }
    } else {
        echo "<p>No products available.</p>";
    }
    ?>
</div>



<script>

let shoppingCart = []; 

function updateCartUI() {
    const cartCounter = document.querySelector('.cart-counter'); 
    cartCounter.innerText = shoppingCart.length; 
}


document.querySelectorAll('.btn-add-to-cart').forEach(button => {
    button.addEventListener('click', function() { 
        const product = this.parentElement; 
        const productName = product.querySelector('h3').innerText; 
        const productPrice = product.querySelector('.price').innerText;		
		
        const productDetails = { 
            name: productName,
            price: productPrice
        };
        shoppingCart.push(productDetails); 
        updateCartUI(); 
        localStorage.setItem('shoppingCart', JSON.stringify(shoppingCart)); 
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const storedCart = JSON.parse(localStorage.getItem('shoppingCart')); 
    const cartContainer = document.querySelector('.cart-container'); 

    
    if (storedCart) {
        shoppingCart = storedCart; 
        updateCartUI(); 

        shoppingCart.forEach(product => {
            const productElement = document.createElement('div');
            productElement.classList.add('cart-item');
            productElement.innerHTML = `
                <h4>${product.name}</h4>
                <p>${product.price}</p>
            `;
            cartContainer.appendChild(productElement);
        });
    } else {
        // Display a message indicating that the cart is empty
        cartContainer.innerHTML = '<p>Your shopping cart is empty.</p>';
    }
});




</script>
<footer>
    <div class="contact-info">
        <p>Contact us: AmberStore@gmail.com | Phone: +962795923658</p>
    </div>
    <div class="social-links">
        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
    <p>&copy; 2024 Amber Store. All rights reserved.</p>
</footer>

</body>
</html>
