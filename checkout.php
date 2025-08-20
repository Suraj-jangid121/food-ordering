<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Online Food Ordering</title>

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
            /* Added for scroll effect */
            transition: top 0.3s ease-in-out;
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
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/random/1200x500/?food-delivery,checkout') no-repeat center center/cover;
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

        /* Section Titles */
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

        /* Checkout Form Styling */
        .checkout-container {
            background: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            margin-bottom: 50px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control:focus, .form-select:focus, .form-check-input:focus {
            border-color: #d63384;
            box-shadow: 0 0 0 0.2rem rgba(214, 51, 132, 0.25);
        }

        .order-summary-box {
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid #e0e0e0;
        }

        .order-summary-box h4 {
            color: #343a40;
            font-weight: bold;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .order-summary-box ul {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .order-summary-box ul li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px dashed #ddd;
            font-size: 1.05rem;
            color: #555;
        }

        .order-summary-box ul li:last-child {
            border-bottom: none;
        }

        .order-summary-box .total-row {
            font-size: 1.3rem;
            font-weight: bold;
            color: #d63384;
            padding-top: 15px;
            border-top: 2px solid #d63384;
        }

        .place-order-btn {
            background-color: #28a745; /* Green for place order */
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 30px;
        }

        .place-order-btn:hover {
            background-color: #218838;
        }

        /* Success Modal Styling */
        .modal-content {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .modal-header {
            background-color: #28a745; /* Green header for success */
            color: white;
            border-bottom: none;
            border-radius: 15px 15px 0 0;
            padding: 20px;
        }

        .modal-header .btn-close {
            filter: invert(1); /* White close button */
        }

        .modal-body {
            padding: 30px;
            text-align: center;
            font-size: 1.1rem;
            color: #333;
        }

        .modal-body i {
            font-size: 4rem;
            color: #28a745;
            margin-bottom: 20px;
        }

        .modal-footer {
            border-top: none;
            padding: 20px;
            justify-content: center;
        }

        .modal-footer .btn {
            background-color: #ffc107;
            color: #333;
            font-weight: bold;
            border-radius: 8px;
            padding: 10px 25px;
            transition: background-color 0.3s ease;
        }

        .modal-footer .btn:hover {
            background-color: #e0a800;
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
        @media (max-width: 992px) {
            .order-summary-box {
                margin-top: 30px;
            }
        }

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
            .checkout-container {
                padding: 30px;
            }
            .order-summary-box {
                padding: 20px;
            }
            .order-summary-box h4 {
                font-size: 1.3rem;
            }
            .order-summary-box ul li {
                font-size: 1rem;
            }
            .order-summary-box .total-row {
                font-size: 1.2rem;
            }
            .place-order-btn {
                padding: 12px 25px;
                font-size: 1.1rem;
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
            .checkout-container {
                padding: 20px;
            }
            .place-order-btn {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container header-content">
            <div>
                <h1>✅ Complete Your Order</h1>
                <p>Final step to enjoy your delicious meal!</p>
            </div>
            <div>
                <a href="index.html" class="btn home-btn">🏠 Home</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero-section">
        <div class="container">
            <h2>Fast & Secure Checkout</h2>
            <p>
                Just a few more steps to confirm your order and have it delivered right to your doorstep.
            </p>
            <a href="#checkout-form-section" class="btn btn-hero">Proceed to Checkout</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container my-5" id="checkout-form-section">
        <div class="row">
            <!-- Delivery Address & Payment -->
            <div class="col-lg-8">
                <div class="checkout-container">
                    <h2 class="section-title"><i class="ri-map-pin-line"></i> Delivery Information</h2>
                    <form id="checkoutForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phoneNumber" placeholder="+91 9876543210" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="addressLine1" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="addressLine1" placeholder="House No., Building Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="addressLine2" class="form-label">Address Line 2 (Optional)</label>
                            <input type="text" class="form-control" id="addressLine2" placeholder="Street, Landmark">
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="city" placeholder="Your City" required>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <label for="state" class="form-label">State <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="state" placeholder="Your State" required>
                            </div>
                            <div class="col-md-2">
                                <label for="zipCode" class="form-label">Zip Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="zipCode" placeholder="123456" required>
                            </div>
                        </div>

                        <h2 class="section-title mt-5"><i class="ri-wallet-line"></i> Payment Method</h2>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" value="creditCard" checked>
                                <label class="form-check-label" for="creditCard">
                                    Credit/Debit Card
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="upi" value="upi">
                                <label class="form-check-label" for="upi">
                                    UPI
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod">
                                <label class="form-check-label" for="cod">
                                    Cash on Delivery (COD)
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="place-order-btn">Place Order</button>
                    </form>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="order-summary-box">
                    <h4>Order Summary</h4>
                    <ul>
                        <li>Margherita Pizza <span>₹199.00</span></li>
                        <li>Classic Burger <span>₹79.00</span></li>
                        <li>Creamy Pasta <span>₹99.00</span></li>
                        <li>Delivery Fee <span>₹40.00</span></li>
                        <li class="total-row">Total <span>₹417.00</span></li>
                    </ul>
                    <p class="text-muted text-center small">Prices include all taxes.</p>
                </div>
            </div>
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
                        <li><a href="index.html">Home</a></li>
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

    <!-- Order Placed Success Modal -->
    <div class="modal fade" id="orderSuccessModal" tabindex="-1" aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderSuccessModalLabel">Order Placed Successfully!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <i class="ri-checkbox-circle-line"></i>
                    <p>Your order has been confirmed and is on its way!</p>
                    <p>Thank you for choosing Online Food Ordering.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Continue Browsing</button>
                    <a href="index.html" class="btn">Go to Home</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('checkoutForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Basic form validation
            const fullName = document.getElementById('fullName').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const addressLine1 = document.getElementById('addressLine1').value;
            const city = document.getElementById('city').value;
            const state = document.getElementById('state').value;
            const zipCode = document.getElementById('zipCode').value;

            if (!fullName || !phoneNumber || !addressLine1 || !city || !state || !zipCode) {
                // Using a custom modal/message box instead of alert()
                // For simplicity, I'll use a basic alert here, but for a real app,
                // you'd implement a custom Bootstrap modal for error messages.
                alert('Please fill in all required fields.');
                return;
            }

            // Simulate order placement (replace with actual backend logic)
            console.log('Order placed!');
            // Show success modal
            const orderSuccessModal = new bootstrap.Modal(document.getElementById('orderSuccessModal'));
            orderSuccessModal.show();

            // Optionally clear the form after successful submission
            this.reset();
        });

        // --- Header Scroll Effect JavaScript ---
        let lastScrollTop = 0;
        const header = document.querySelector('header'); // Select the header element

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop && scrollTop > header.offsetHeight) {
                // Scrolling down, and past header height, hide the header
                header.style.top = `-${header.offsetHeight}px`; // Hide by its full height
            } else {
                // Scrolling up, or at the very top, show the header
                header.style.top = '0';
            }
            lastScrollTop = scrollTop;
        });
    </script>
</body>
</html>
         