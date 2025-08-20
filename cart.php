<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order - Online Food Ordering</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Remixicon CSS for icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            padding-top: 80px; /* Space for the fixed header */
        }

        /* Header Styling - Consistent with other pages */
        header {
            background-color: #212529;
            color: white;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .home-btn {
            background-color: #ffc107;
            border: none;
            color: #000;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .home-btn:hover {
            background-color: #e0a800;
            color: #000;
        }

        /* Hero Section */
        #hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/random/1200x500/?food-menu,restaurant-interior') no-repeat center center/cover;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
            box-shadow: inset 0 0 10px rgba(0,0,0,0.5);
        }

        #hero-section h2 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }

        #hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-hero {
            background-color: #d63384;
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-hero:hover {
            background-color: #bd216e;
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.3);
        }

        /* Menu Section Title */
        h2.section-title {
            color: #343a40; /* Dark grey for section titles */
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }

        h2.section-title i {
            margin-right: 10px;
            color: #d63384; /* Pink icon color */
        }

        /* Menu Item Styling */
        .menu-container {
            display: flex;
            justify-content: center;
            gap: 30px; /* Increased gap for better spacing */
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .menu-item {
            background: #fff;
            border: none; /* Removed default border */
            border-radius: 12px; /* Rounded corners */
            padding: 20px;
            width: 300px; /* Slightly wider cards */
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08); /* Soft shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Distribute content vertically */
            height: 100%; /* Ensure cards are same height in a row */
        }

        .menu-item:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .menu-item img {
            max-width: 100%;
            height: 180px; /* Fixed height for images */
            object-fit: cover; /* Ensure images cover the area */
            border-radius: 8px; /* Rounded image corners */
            margin-bottom: 15px;
        }

        .menu-item h3 {
            font-size: 1.5rem;
            color: #343a40;
            margin-bottom: 10px;
        }

        .menu-item p {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 15px;
            flex-grow: 1; /* Allow description to take space */
        }

        .price {
            font-weight: bold;
            color: #d63384; /* Pink price color */
            font-size: 1.4em;
            margin-bottom: 20px;
        }

        .add-to-cart-btn {
            background-color: #ffc107; /* Yellow button */
            color: #333;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
            width: 100%; /* Full width button */
        }

        .add-to-cart-btn:hover {
            background-color: #e0a800;
            color: #000;
        }

        /* Cart Container Styling */
        .cart-container {
            background: #fff;
            border: none;
            border-radius: 12px;
            padding: 30px;
            max-width: 700px; /* Wider cart container */
            margin: 50px auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .cart-container h2 {
            font-size: 2rem;
            color: #d63384;
            margin-bottom: 25px;
            text-align: center;
        }

        #cart-items {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }

        #cart-items li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px dashed #eee; /* Dashed border for items */
            font-size: 1.1rem;
            color: #444;
        }

        #cart-items li:last-child {
            border-bottom: none;
        }

        .total {
            font-weight: bold;
            font-size: 1.6em;
            text-align: right;
            margin-top: 20px;
            color: #343a40;
        }

        .checkout-btn {
            background-color: #28a745; /* Green for checkout */
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 25px;
        }

        .checkout-btn:hover {
            background-color: #218838;
        }

        /* Footer Styling - Detailed, Consistent with other pages */
        footer {
            background-color: #212529; /* Dark background */
            color: white;
            padding: 40px 0;
            font-size: 0.95rem;
            border-top: 5px solid #ffc107; /* Accent line */
            margin-top: 80px;
        }

        footer h5 {
            color: #ffc107; /* Yellow headings */
            margin-bottom: 20px;
            font-weight: bold;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 10px;
        }

        footer ul li a {
            color: #f8f9fa;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer ul li a:hover {
            color: #d63384; /* Pink on hover */
        }

        .social-icons a {
            color: white;
            font-size: 1.8rem;
            margin-right: 15px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #d63384;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
            font-size: 0.85rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            #hero-section {
                padding: 60px 0;
            }
            #hero-section h2 {
                font-size: 2.5rem;
            }
            #hero-section p {
                font-size: 1.2rem;
            }
            .btn-hero {
                padding: 12px 25px;
                font-size: 1rem;
            }
            h2.section-title {
                font-size: 2rem;
            }
            .menu-item {
                width: 80%; /* Make cards wider on small screens */
                max-width: 300px; /* Limit max width */
            }
            .cart-container {
                padding: 20px;
            }
            .cart-container h2 {
                font-size: 1.8rem;
            }
            #cart-items li {
                font-size: 1rem;
            }
            .total {
                font-size: 1.4em;
            }
            .checkout-btn {
                font-size: 1.1em;
                padding: 12px 20px;
            }
            footer .col-md-4 {
                margin-bottom: 30px;
                text-align: center;
            }
            footer .col-md-4 ul {
                text-align: center;
            }
            .social-icons {
                justify-content: center;
                display: flex;
            }
        }

        @media (max-width: 576px) {
            header h1 {
                font-size: 1.8rem;
            }
            header p {
                font-size: 0.9rem;
            }
            #hero-section h2 {
                font-size: 2rem;
            }
            #hero-section p {
                font-size: 1rem;
            }
            .btn-hero {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            h2.section-title {
                font-size: 1.8rem;
            }
            .menu-item {
                width: 95%; /* Almost full width on very small screens */
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container header-content">
            <div>
                <h1>🛒 Your Food Cart</h1>
                <p>Review your delicious selections before checkout!</p>
            </div>
            <div>
                <a href="index.php" class="btn home-btn">🏠 Home</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero-section">
        <div class="container">
            <h2>Ready to Order?</h2>
            <p>
                Browse our menu, add your favorite dishes to the cart, and get ready for a delightful meal delivered to your door.
            </p>
            <a href="#menu-section" class="btn btn-hero">Start Ordering</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container my-5">
        <section id="menu-section">
            <h2 class="section-title"><i class="ri-restaurant-line"></i> Our Delicious Menu</h2>
            <div class="row g-4 justify-content-center">
                <!-- Menu Item 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="asset/images/pizza2.jpg" alt="Margherita Pizza">
                        <h3>Margherita Pizza</h3>
                        <p>Classic delight with 100% real mozzarella cheese, fresh basil, and a tangy tomato sauce.</p>
                        <p class="price">₹199.00</p>
                        <button class="add-to-cart-btn" data-name="Margherita Pizza" data-price="199.00">Add to Cart</button>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="asset/images/burger2.jpg" alt="Classic Burger">
                        <h3>Classic Burger</h3>
                        <p>A juicy beef patty with fresh lettuce, ripe tomato, crisp onions, and our special house sauce, all in a toasted bun.</p>
                        <p class="price">₹79.00</p>
                        <button class="add-to-cart-btn" data-name="Classic Burger" data-price="79.00">Add to Cart</button>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="asset/images/pexels-fariphotography-803963 (1).jpg" alt="Creamy Pasta">
                        <h3>Creamy Pasta</h3>
                        <p>Al dente penne pasta tossed in a rich and creamy white sauce with a hint of garlic and parmesan.</p>
                        <p class="price">₹99.00</p>
                        <button class="add-to-cart-btn" data-name="Creamy Pasta" data-price="99.00">Add to Cart</button>
                    </div>
                </div>

                <!-- Additional Menu Item 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="asset/images/cbiryani.jpg" alt="Chicken Biryani">
                        <h3>Chicken Biryani</h3>
                        <p>Fragrant basmati rice cooked with tender chicken pieces and aromatic spices.</p>
                        <p class="price">₹249.00</p>
                        <button class="add-to-cart-btn" data-name="Chicken Biryani" data-price="249.00">Add to Cart</button>
                    </div>
                </div>

                <!-- Additional Menu Item 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="asset/images/roll.jpeg" alt="Sushi Rolls">
                        <h3>Assorted Sushi Rolls</h3>
                        <p>A fresh selection of handcrafted sushi rolls with various fillings and flavors.</p>
                        <p class="price">₹349.00</p>
                        <button class="add-to-cart-btn" data-name="Assorted Sushi Rolls" data-price="349.00">Add to Cart</button>
                    </div>
                </div>

                <!-- Additional Menu Item 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="asset/images/taco.jpg" alt="Tacos">
                        <h3>Spicy Tacos</h3>
                        <p>Crispy taco shells filled with seasoned meat, fresh salsa, and a zesty cream sauce.</p>
                        <p class="price">₹129.00</p>
                        <button class="add-to-cart-btn" data-name="Spicy Tacos" data-price="129.00">Add to Cart</button>
                    </div>
                </div>
            </div>
        </section>

        <div class="cart-container">
            <h2 class="text-center"><i class="ri-shopping-bag-line"></i> Your Cart</h2>
            <ul id="cart-items">
                <!-- Items added dynamically -->
            </ul>
            <p class="total">Total: ₹<span id="cart-total">0.00</span></p>
            <a href="checkout.php">
            <button class="checkout-btn">Proceed to Checkout</button></a>
        </div>

    </main>

    <!-- Footer - Detailed, Consistent with other pages -->
    <footer class="text-center text-md-start">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Online Food Ordering</h5>
                    <p>
                        Your ultimate destination for delicious food delivered right to your doorstep.
                        We connect you with the best restaurants in town.
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Menu</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Connect With Us</h5>
                    <div class="social-icons">
                        <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                        <a href="#"><i class="ri-twitter-fill"></i></a>
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                    </div>
                    <p class="mt-3">Email: info@onlinefood.com</p>
                    <p>Phone: +1 (123) 456-7890</p>
                </div>
            </div>
            <div class="row footer-bottom text-center">
                <div class="col-12">
                    <p>&copy; 2025 OnlineFood. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
        const cartItemsList = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');

        let cart = [];
        let total = 0;

        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                const name = button.dataset.name;
                const price = parseFloat(button.dataset.price);

                cart.push({ name, price });
                total += price;

                renderCart();
            });
        });

        function renderCart() {
            cartItemsList.innerHTML = '';

            cart.forEach(item => {
                const li = document.createElement('li');
                li.innerHTML = `${item.name} <span>₹${item.price.toFixed(2)}</span>`;
                cartItemsList.appendChild(li);
            });

            cartTotal.textContent = total.toFixed(2);
        }
    </script>

</body>
</html>
