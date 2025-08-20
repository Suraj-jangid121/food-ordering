<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Ordering</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Body Styles */
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, Helvetica, sans-serif;
            background-color: #f8f9fa;
            padding-top: 80px;
        }

        /* Main Container */
        #main {
            width: 100%;
            overflow-x: hidden;
        }

        /* Header Styling */
        #header {
            width: 100%;
            height: 80px;
            position: fixed;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 999;
            top: 0;
            transition: top 0.3s ease-in-out;
        }

        #logo {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        #logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #nav-links {
            display: flex;
            align-items: center;
            margin-left: auto;
        }

        .texts {
            margin: 0 15px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #000038;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            text-decoration: none;
            white-space: nowrap;
        }

        .texts:hover {
            color: #d63384;
            transform: translateY(-2px);
        }

        .texts i {
            margin-right: 8px;
            font-size: 1.3rem;
        }

        /* Main Page Sections */
        #page1,
        #page2,
        #page3 {
            width: 100%;
            min-height: 90vh;
            padding: 40px 0;
        }

        #page1 {
            background-color: #f8f9fa;
        }

        #page2 {
            background-color: #e2f0f4;
        }

        #page3 {
            background-color: #e2f0f4;
            color: black;
        }

        /* New Hero Section Styling (replaces slideshow) */
        #hero-section {
            width: 100%;
            height: 600px;
            position: relative;
            background-image: url('asset/images/2406.jpg'); /* Your main hero image */
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            margin-top: 0; /* Changed from margin: 50px auto; to remove the gap */
            margin-bottom: 50px;
        }
        
        #hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Overlay for text readability */
            border-radius: 15px;
        }

        #hero-section .content {
            position: relative;
            z-index: 1;
        }

        #hero-section h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-out;
        }
        
        #hero-section p {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out;
        }

        #hero-section .btn-primary {
            background-color: #d63384;
            border-color: #d63384;
            font-size: 1.2rem;
            padding: 15px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        #hero-section .btn-primary:hover {
            background-color: #a02867;
            border-color: #a02867;
            transform: scale(1.05);
        }

        /* Keyframe animations for hero content */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* "What's On Your Mind?" Section */
        #top h3 {
            font-weight: 800;
            color: #343a40;
            margin-bottom: 30px;
        }

        /* Food Categories/Divisions */
        #top2 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 20px;
        }

        .division {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: white;
            position: relative;
        }

        .division:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .division img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 50%;
        }

        .division p {
            position: absolute;
            bottom: 10px;
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1.1rem;
            width: 90%;
        }
        
        /* New Styles for Restaurants and Deals */
        .restaurants-section,
        .deals-section {
            padding: 50px 0;
        }

        .restaurant-card,
        .deal-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            cursor: pointer;
        }

        .restaurant-card:hover,
        .deal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .restaurant-card img,
        .deal-card img {
            height: 250px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .restaurant-card .card-body {
            padding: 20px;
        }

        .restaurant-card .card-title {
            font-weight: bold;
            color: #343a40;
            margin-bottom: 5px;
        }

        .restaurant-card .card-text {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .deal-card .card-body {
            background-color: white;
            color: #343a40;
            padding: 20px;
        }

        .deal-card .card-title {
            font-weight: bold;
            color: #000038;
        }

        .deal-card .card-text {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .deal-card .card-footer {
            border-top: none;
            font-weight: 500;
        }

        /* Footer Styling */
        footer {
            background-color: #212529;
            color: white;
            padding: 40px 0;
            font-size: 0.95rem;
            border-top: 5px solid #ffc107;
        }

        footer h5 {
            color: #ffc107;
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
            color: #d63384;
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
        @media (max-width: 992px) {
            #nav-links {
                justify-content: flex-end;
            }

            .texts {
                margin: 0 10px;
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            #header {
                flex-direction: column;
                height: auto;
                padding: 15px;
            }

            #logo {
                margin-bottom: 10px;
            }

            #nav-links {
                flex-wrap: wrap;
                justify-content: center;
                margin-top: 10px;
            }

            .texts {
                margin: 5px 8px;
                font-size: 0.9rem;
            }

            #page1,
            #page2,
            #page3 {
                padding: 20px 0;
            }

            #top h3 {
                text-align: center;
                margin-left: 0;
            }

            .division {
                width: 150px;
                height: 150px;
            }

            .division p {
                font-size: 0.9rem;
            }

            #hero-section {
                height: 400px;
                padding: 15px;
            }

            #hero-section h1 {
                font-size: 2.5rem;
            }
            
            #hero-section p {
                font-size: 1.2rem;
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
            .texts {
                font-size: 0.8rem;
                margin: 3px 5px;
            }

            #logo {
                height: 50px;
                width: 50px;
            }
            
            #hero-section {
                height: 300px;
                border-radius: 0;
            }
            
            #hero-section h1 {
                font-size: 1.8rem;
            }
            
            #hero-section p {
                font-size: 1rem;
            }

            .division {
                width: 120px;
                height: 120px;
                margin: 15px;
            }

            .division p {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <div id="main">
        <header id="header">
            <div id="logo">
                <img src="asset/images/1.jpeg.jpg" alt="Company Logo">
            </div>
            <nav id="nav-links">
                <a class="texts" href="index.php"><i class="ri-handbag-line"></i>Foodies Corporate</a>
                <a class="texts" href="search.php"><i class="ri-search-line"></i>Search</a>
                <a class="texts" href="offer.php"><i class="ri-discount-percent-line"></i>Offers</a>
                <a class="texts" href="help.php"><i class="ri-question-line"></i>Help</a>
                <a class="texts" href="signin.php"><i class="ri-user-line"></i>Sign In</a>
                <a class="texts" href="cart.php"><i class="ri-shopping-bag-line"></i>Cart</a>
            </nav>
        </header>

        <div id="page1" class="container-fluid">
            <div id="hero-section" class="container-fluid">
                <div class="content">
                    <h1>Savor Every Moment, Delivered to Your Door</h1>
                    <p>Discover the best local restaurants and get your favorite meals fast!</p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div id="top" class="text-center mt-5">
                <h3>What's On Your Mind?</h3>
            </div>

            <div id="top2" class="d-flex flex-wrap justify-content-center">
                <div class="division">
                    <a href="#"><img src="asset/images/dessert.jpg" alt="Desserts"></a>
                    <p>Desserts</p>
                </div>
                <div class="division">
                    <a href="#"><img src="asset/images/pexels-catscoming-674574.jpg" alt="South Indian"></a>
                    <p>South Indian</p>
                </div>
                <div class="division">
                    <a href="#"><img src="asset/images/biryani.jpeg" alt="Biryani"></a>
                    <p>Biryani</p>
                </div>
                <div class="division">
                    <a href="#"><img src="asset/images/roll.jpeg" alt="Rolls"></a>
                    <p>Rolls</p>
                </div>
                <div class="division">
                    <a href="#"><img src="asset/images/chin.jpg" alt="Chinese"></a>
                    <p>Chinese</p>
                </div>
                <div class="division">
                    <a href="#"><img src="asset/images/north.jpg" alt="North Indian"></a>
                    <p>North Indian</p>
                </div>
            </div>
        </div>

        <div id="page2" class="container">
            <div class="restaurants-section">
                <h2 class="text-center mb-5">Top Restaurants Near You</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col">
                        <div class="card h-100 restaurant-card">
                            <img src="asset/images/sirka.jpg" class="card-img-top" alt="Gourmet Grills">
                            <div class="card-body">
                                <h5 class="card-title">Thali And More</h5>
                                <p class="card-text">
                                    <i class="ri-star-fill text-warning"></i> 4.5
                                    <span class="ms-3">North Indian, Mughlai</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 restaurant-card">
                            <img src="asset/images/ghewar.jpg" class="card-img-top" alt="Pizza Planet">
                            <div class="card-body">
                                <h5 class="card-title">Jodhpur Sweets</h5>
                                <p class="card-text">
                                    <i class="ri-star-fill text-warning"></i> 4.2
                                    <span class="ms-3">Italian, Pizza, Fast Food</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 restaurant-card">
                            <img src="asset/images/burger.jpg" class="card-img-top" alt="Wok & Roll">
                            <div class="card-body">
                                <h5 class="card-title">Burger King</h5>
                                <p class="card-text">
                                    <i class="ri-star-fill text-warning"></i> 4.7
                                    <span class="ms-3">Chinese, Asian</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 restaurant-card">
                            <img src="asset/images/coffee.jpg" class="card-img-top" alt="The Burger Barn">
                            <div class="card-body">
                                <h5 class="card-title">Rustic Spot Cafe </h5>
                                <p class="card-text">
                                    <i class="ri-star-fill text-warning"></i> 4.1
                                    <span class="ms-3">Burgers, American</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 restaurant-card">
                            <img src="asset/images/pizza.jpg" class="card-img-top" alt="Sushi Sensation">
                            <div class="card-body">
                                <h5 class="card-title">The Pizza Unlimited</h5>
                                <p class="card-text">
                                    <i class="ri-star-fill text-warning"></i> 4.8
                                    <span class="ms-3">Japanese, Sushi</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 restaurant-card">
                            <img src="asset/images/momos.jpg" class="card-img-top" alt="Spicy Fiesta">
                            <div class="card-body">
                                <h5 class="card-title">Momos Adda</h5>
                                <p class="card-text">
                                    <i class="ri-star-fill text-warning"></i> 3.9
                                    <span class="ms-3">Mexican</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="page3" class="container">
            <div class="deals-section">
                <h2 class="text-center text-black mb-5">Amazing Deals & Offers!</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col">
                        <div class="card h-100 deal-card">
                            <img src="asset/images/pizza2.jpg" class="card-img-top" alt="Deal 1">
                            <div class="card-body">
                                <h5 class="card-title">20% Off on Pizzas!</h5>
                                <p class="card-text">Enjoy a flat 20% discount on all pizza orders over $15. Use code: PIZZA20</p>
                            </div>
                            <div class="card-footer bg-warning text-dark text-center">
                                <small>Valid until 30th August</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 deal-card">
                            <img src="asset/images/wafle.jpg" class="card-img-top" alt="Deal 2">
                            <div class="card-body">
                                <h5 class="card-title">Free Dessert with Any Meal</h5>
                                <p class="card-text">Order any main course and get a free dessert of your choice. Limited time offer!</p>
                            </div>
                            <div class="card-footer bg-warning text-dark text-center">
                                <small>Limited time offer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 deal-card">
                            <img src="asset/images/burger2.jpg" class="card-img-top" alt="Deal 3">
                            <div class="card-body">
                                <h5 class="card-title">Buy One Get One Free Burger</h5>
                                <p class="card-text">Double the fun with our BOGO offer on all classic burgers. Code: BURGERBOGO</p>
                            </div>
                            <div class="card-footer bg-warning text-dark text-center">
                                <small>Use code at checkout</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let lastScrollTop = 0;
        const header = document.getElementById("header");

        window.addEventListener("scroll", function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop && scrollTop > header.offsetHeight) {
                header.style.top = "-80px";
            } else {
                header.style.top = "0";
            }
            lastScrollTop = scrollTop;
        });
    </script>
</body>

</html>