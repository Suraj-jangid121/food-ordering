<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery - Search</title>

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
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/random/1200x500/?food-search,restaurant-finder') no-repeat center center/cover;
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

        /* Search Section */
        #search-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .search-input-group {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-input {
            width: 60%;
            max-width: 500px;
            padding: 12px 20px;
            border: 1px solid #ccc;
            border-radius: 8px 0 0 8px; /* Rounded left, sharp right */
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .search-input:focus {
            border-color: #d63384;
            box-shadow: 0 0 0 0.2rem rgba(214, 51, 132, 0.25);
        }

        .search-btn {
            padding: 12px 25px;
            background-color: #d63384; /* Pink search button */
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 0 8px 8px 0; /* Sharp left, rounded right */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-btn:hover {
            background-color: #bd216e;
        }

        /* Filter Buttons */
        .filter-buttons {
            margin: 20px auto;
            width: 80%;
            max-width: 800px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px; /* Space between filter buttons */
        }

        .filter-btn {
            padding: 10px 20px;
            background-color: #eee;
            border: 1px solid #ddd;
            border-radius: 25px; /* Pill shape */
            cursor: pointer;
            font-size: 0.95rem;
            font-weight: 500;
            color: #555;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        .filter-btn:hover, .filter-btn.active {
            background-color: #ffc107; /* Yellow on hover/active */
            color: #333;
            border-color: #ffc107;
        }

        /* Search Results Styling */
        .results-container {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto 50px auto;
        }

        .restaurant-card {
            background-color: white;
            padding: 25px;
            margin-bottom: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            display: flex;
            align-items: center;
            gap: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .restaurant-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .restaurant-card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0; /* Prevent image from shrinking */
        }

        .restaurant-info {
            flex-grow: 1;
        }

        .restaurant-info h3 {
            margin: 0 0 10px;
            font-size: 1.8rem;
            color: #343a40;
            font-weight: bold;
        }

        .restaurant-info p {
            margin: 0 0 8px;
            font-size: 1rem;
            color: #666;
        }

        .restaurant-info p i {
            margin-right: 5px;
            color: #d63384; /* Pink for icons */
        }

        .order-btn {
            padding: 10px 20px;
            background-color: #d63384; /* Pink order button */
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.05rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
            flex-shrink: 0; /* Prevent button from shrinking */
        }

        .order-btn:hover {
            background-color: #bd216e;
        }

        /* Footer Styling - Detailed, Consistent with other pages */
        footer {
            background-color: #212529; /* Dark background */
            color: white;
            padding: 40px 0;
            font-size: 0.95rem;
            border-top: 5px solid #ffc107; /* Accent line */
            margin-top: 80px; /* Ensure space before footer */
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
            .search-input {
                width: 80%;
                border-radius: 8px; /* Full rounded on small screens */
                margin-bottom: 10px;
            }
            .search-btn {
                width: 80%;
                border-radius: 8px; /* Full rounded on small screens */
            }
            .search-input-group {
                flex-direction: column;
                align-items: center;
            }
            .filter-buttons {
                width: 95%;
            }
            .restaurant-card {
                flex-direction: column;
                text-align: center;
                align-items: center;
                padding: 20px;
                gap: 15px;
            }
            .restaurant-card img {
                width: 100px;
                height: 100px;
            }
            .restaurant-info h3 {
                font-size: 1.5rem;
            }
            .restaurant-info p {
                font-size: 0.9rem;
            }
            .order-btn {
                width: 100%;
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
            .search-input, .search-btn {
                width: 95%;
            }
            .filter-btn {
                font-size: 0.85rem;
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container header-content">
            <div>
                <h1>🔍 Find Your Next Meal</h1>
                <p>Search for restaurants, cuisines, or dishes.</p>
            </div>
            <div>
                <a href="index.php" class="btn home-btn">🏠 Home</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero-section">
        <div class="container">
            <h2>Discover Delicious Food Near You!</h2>
            <p>
                Explore a wide variety of restaurants and cuisines. Your perfect meal is just a search away.
            </p>
            <a href="#search-section" class="btn btn-hero">Start Searching</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container my-5">
        <!-- Search Bar and Filters -->
        <section id="search-section">
            <div class="search-input-group">
                <input type="text" class="search-input" placeholder="Search for food or restaurants...">
                <button class="search-btn">Search</button>
            </div>

            <div class="filter-buttons">
                <span class="me-2 d-none d-md-inline">Filter by:</span>
                <button class="filter-btn active">All</button>
                <button class="filter-btn">Pizza</button>
                <button class="filter-btn">Burger</button>
                <button class="filter-btn">Indian</button>
                <button class="filter-btn">Chinese</button>
                <button class="filter-btn">Italian</button>
                <button class="filter-btn">Desserts</button>
                <button class="filter-btn">Vegan</button>
                <button class="filter-btn">Mexican</button>
                <button class="filter-btn">Thai</button>
            </div>
        </section>

        <!-- Search Results -->
        <section class="results-container">
            <h3>Top Restaurants</h3>

            <!-- Restaurant 1 -->
            <div class="restaurant-card">
                <img src="asset/images/kanha.jpg" alt="Tandoori Spice Restaurant">
                <div class="restaurant-info">
                    <h3>Kanha Restaurant</h3>
                    <p><i class="ri-restaurant-line"></i> Indian Cuisine</p>
                    <p><i class="ri-star-fill"></i> 4.5 (500+ ratings)</p>
                    <p><i class="ri-time-line"></i> 30-45 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- Restaurant 2 -->
            <div class="restaurant-card">
                <img src="asset/images/domino.jpg" alt="Cheesy Crust Pizza">
                <div class="restaurant-info">
                    <h3>Domino's Pizza</h3>
                    <p><i class="ri-restaurant-line"></i> Pizza, Italian</p>
                    <p><i class="ri-star-fill"></i> 4.7 (1.2K ratings)</p>
                    <p><i class="ri-time-line"></i> 25-40 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- Restaurant 3 -->
            <div class="restaurant-card">
                <img src="asset/images/burgerking.png" alt="Burger Haven">
                <div class="restaurant-info">
                    <h3>Burger King</h3>
                    <p><i class="ri-restaurant-line"></i> American, Burgers</p>
                    <p><i class="ri-star-fill"></i> 4.3 (800+ ratings)</p>
                    <p><i class="ri-time-line"></i> 20-35 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- Restaurant 4 -->
            <div class="restaurant-card">
                <img src="asset/images/subway.jpg" alt="Dragon Wok">
                <div class="restaurant-info">
                    <h3>Subway</h3>
                    <p><i class="ri-restaurant-line"></i> Chinese, Asian</p>
                    <p><i class="ri-star-fill"></i> 4.6 (950+ ratings)</p>
                    <p><i class="ri-time-line"></i> 35-50 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- Restaurant 5 -->
            <div class="restaurant-card">
                <img src="asset/images/burgerfarm.jpg" alt="Sushi Master">
                <div class="restaurant-info">
                    <h3>Burger Farm</h3>
                    <p><i class="ri-restaurant-line"></i> Japanese, Sushi</p>
                    <p><i class="ri-star-fill"></i> 4.8 (1.5K ratings)</p>
                    <p><i class="ri-time-line"></i> 40-55 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- Restaurant 6 -->
            <div class="restaurant-card">
                <img src="asset/images/harishankar.jpg" alt="Green Bites Cafe">
                <div class="restaurant-info">
                    <h3>Harishankar Bhojnalya</h3>
                    <p><i class="ri-restaurant-line"></i> Indian, Healthy</p>
                    <p><i class="ri-star-fill"></i> 4.2 (600+ ratings)</p>
                    <p><i class="ri-time-line"></i> 25-40 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- New Restaurant 7 -->
            <div class="restaurant-card">
                <img src="asset/images/rominus.jpg" alt="Fiesta Mexicana">
                <div class="restaurant-info">
                    <h3>Rominus Pizza</h3>
                    <p><i class="ri-restaurant-line"></i> Pizza</p>
                    <p><i class="ri-star-fill"></i> 4.4 (720+ ratings)</p>
                    <p><i class="ri-time-line"></i> 30-40 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- New Restaurant 8 -->
            <div class="restaurant-card">
                <img src="asset/images/coffeee.jpg" alt="Thai Orchid">
                <div class="restaurant-info">
                    <h3>Barista Coffee</h3>
                    <p><i class="ri-restaurant-line"></i> Beverages,Coffee</p>
                    <p><i class="ri-star-fill"></i> 4.7 (1.1K ratings)</p>
                    <p><i class="ri-time-line"></i> 35-50 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- New Restaurant 9 -->
            <div class="restaurant-card">
                <img src="asset/images/momoss.jpg" alt="Morning Brew Cafe">
                <div class="restaurant-info">
                    <h3>Momos Adda</h3>
                    <p><i class="ri-restaurant-line"></i> Cafe,Lunch,Momos</p>
                    <p><i class="ri-star-fill"></i> 4.1 (450+ ratings)</p>
                    <p><i class="ri-time-line"></i> 15-30 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

            <!-- New Restaurant 10 -->
            <div class="restaurant-card">
                <img src="asset/images/Panner.jpg" alt="Sweet Delights Bakery">
                <div class="restaurant-info">
                    <h3>Hotel Highway King</h3>
                    <p><i class="ri-restaurant-line"></i>Hotel,Food</p>
                    <p><i class="ri-star-fill"></i> 4.9 (2K+ ratings)</p>
                    <p><i class="ri-time-line"></i> 20-35 mins delivery</p>
                </div>
                <button class="order-btn">Order Now</button>
            </div>

        </section>
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

</body>
</html>
