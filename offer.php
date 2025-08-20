<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Offers - Online Food Ordering</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            padding-top: 80px; /* Space for the fixed header */
        }

        /* Header Styling - Consistent with Home Page */
        header {
            background-color: #212529;
            color: white;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: top 0.3s ease-in-out; /* Add transition for a smooth effect */
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
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/random/1200x500/?food-banner') no-repeat center center/cover;
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

        /* Offer Card Styling */
        .offer-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            background-color: white;
            display: flex;
            flex-direction: column;
        }

        .offer-card:hover {
            transform: translateY(-5px); /* Lift effect */
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .offer-card img {
            height: 250px; /* Fixed height for consistent image display */
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }

        .card-body {
            padding: 25px;
            flex-grow: 1; /* Allow body to take available space */
            display: flex;
            flex-direction: column;
        }

        .card-title {
            color: #d63384;
            font-size: 1.7rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 1.05rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1; /* Allow text to grow */
        }

        .btn-claim {
            background-color: #ffc107;
            color: #333;
            font-weight: bold;
            border-radius: 8px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-claim:hover {
            background-color: #e0a800;
            color: #000;
        }

        /* How It Works Section */
        #how-it-works {
            background-color: #e2f0f4; /* Light blue background */
            padding: 60px 0;
            text-align: center;
            margin-top: 50px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        #how-it-works h3 {
            color: #343a40;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .step-icon {
            font-size: 3.5rem;
            color: #d63384;
            margin-bottom: 20px;
        }

        .step-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .step-description {
            color: #666;
            font-size: 1rem;
        }

        /* Footer Styling - Detailed, Consistent with Home Page */
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
            .offer-card img {
                height: 200px;
            }
            .card-title {
                font-size: 1.5rem;
            }
            .card-text {
                font-size: 0.95rem;
            }
            #how-it-works {
                padding: 40px 0;
            }
            #how-it-works h3 {
                font-size: 2rem;
            }
            .step-icon {
                font-size: 3rem;
            }
            .step-title {
                font-size: 1.3rem;
            }
            .step-description {
                font-size: 0.9rem;
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
            .card-body {
                padding: 15px;
            }
            .card-title {
                font-size: 1.3rem;
            }
            .card-text {
                font-size: 0.85rem;
            }
            .btn-claim {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
            #how-it-works h3 {
                font-size: 1.8rem;
            }
            .step-icon {
                font-size: 2.5rem;
            }
            .step-title {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="container header-content">
            <div>
                <h1>🎉 Special Offers & Deals</h1>
                <p>Unlock amazing savings on your favorite dishes!</p>
            </div>
            <div>
                <a href="index.php" class="btn home-btn">🏠 Home</a>
            </div>
        </div>
    </header>

    <section id="hero-section">
        <div class="container">
            <h2>Don't Miss Out on Incredible Savings!</h2>
            <p>
                From sizzling discounts to delicious combos, we've got deals that will make your taste buds and wallet happy.
                Explore our latest promotions below!
            </p>
            <a href="#offers-list" class="btn btn-hero">View All Offers</a>
        </div>
    </section>

    <main class="container my-5" id="offers-list">
        <h3 class="text-center mb-5" style="color: #343a40; font-weight: bold;">Our Hottest Deals Right Now!</h3>
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="card offer-card h-100">
                    <img src="asset/images/burger2.jpg" class="card-img-top" alt="Burger Offer">
                    <div class="card-body">
                        <h5 class="card-title"><i class="ri-fire-fill"></i> 50% Off on Burgers</h5>
                        <p class="card-text">
                            Craving a juicy burger? Get a massive 50% discount on all burger orders above ₹199!
                            This limited-time offer is valid until midnight. Don't miss out on your favorite patties!
                        </p>
                        <a href="#" class="btn btn-claim w-100">Claim Offer Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card offer-card h-100">
                    <img src="asset/images/pizza2.jpg" class="card-img-top" alt="Pizza Offer">
                    <div class="card-body">
                        <h5 class="card-title"><i class="ri-pizza-line"></i> Buy 1 Get 1 Free Pizza</h5>
                        <p class="card-text">
                            Double the delight! Order any medium or large pizza and get another one absolutely FREE!
                            Perfect for sharing or for your next pizza party. Use code: <strong>PIZZADEAL</strong> at checkout.
                        </p>
                        <a href="#" class="btn btn-claim w-100">Claim Offer Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card offer-card h-100">
                    <img src="asset/images/free.jpg" class="card-img-top" alt="Free Delivery">
                    <div class="card-body">
                        <h5 class="card-title"><i class="ri-truck-line"></i> Free Delivery</h5>
                        <p class="card-text">
                            No delivery fees today! Enjoy free delivery on all orders above ₹299.
                            Get your delicious meal delivered right to your doorstep without any extra cost.
                        </p>
                        <a href="#" class="btn btn-claim w-100">Claim Offer Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card offer-card h-100">
                    <img src="asset/images/wafle.jpg" class="card-img-top" alt="Dessert Offer">
                    <div class="card-body">
                        <h5 class="card-title"><i class="ri-cake-3-line"></i> Dessert Delight - 20% Off!</h5>
                        <p class="card-text">
                            Sweeten your meal with 20% off on all desserts! From cheesecakes to brownies,
                            indulge your sweet tooth for less. Offer valid with any main course.
                        </p>
                        <a href="#" class="btn btn-claim w-100">Claim Offer Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card offer-card h-100">
                    <img src="asset/images/family.jpg" class="card-img-top" alt="Combo Offer">
                    <div class="card-body">
                        <h5 class="card-title"><i class="ri-restaurant-line"></i> Family Combo Deals</h5>
                        <p class="card-text">
                            Feed the whole family with our special combo meals, starting at just ₹599.
                            Includes main courses, sides, and drinks. Perfect for a hassle-free dinner!
                        </p>
                        <a href="#" class="btn btn-claim w-100">Claim Offer Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card offer-card h-100">
                    <img src="asset/images/burger.jpg" class="card-img-top" alt="Drink Offer">
                    <div class="card-body">
                        <h5 class="card-title"><i class="ri-cup-line"></i> Free Drink with Any Meal</h5>
                        <p class="card-text">
                            Quench your thirst! Get a complimentary beverage with the purchase of any main meal.
                            Choose from a selection of soft drinks or fresh juices.
                        </p>
                    </div>
                    <a href="#" class="btn btn-claim w-100">Claim Offer Now</a>
                </div>
            </div>

        </div>
    </main>

    <section id="how-it-works" class="container">
        <h3>How to Redeem Your Offers</h3>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <i class="ri-search-line step-icon"></i>
                <h4 class="step-title">1. Browse Deals</h4>
                <p class="step-description">Explore our wide range of exciting offers and find the perfect one for you.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="ri-shopping-bag-line step-icon"></i>
                <h4 class="step-title">2. Add to Cart</h4>
                <p class="step-description">Select your desired items and add them to your cart. Apply codes if needed.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="ri-check-double-line step-icon"></i>
                <h4 class="step-title">3. Enjoy Savings!</h4>
                <p class="step-description">Complete your order and enjoy your delicious meal with fantastic savings!</p>
            </div>
        </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let lastScrollY = window.scrollY;
        const header = document.querySelector('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > lastScrollY && window.scrollY > 100) {
                // Scrolling down and past a certain point
                header.style.top = '-80px'; // Adjust this value to match header height
            } else {
                // Scrolling up
                header.style.top = '0';
            }
            lastScrollY = window.scrollY;
        });
    </script>

</body>
</html>