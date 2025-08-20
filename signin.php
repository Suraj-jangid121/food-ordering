<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign In - Online Food Ordering</title>

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
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/random/1200x500/?login-food,secure-login') no-repeat center center/cover;
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

        /* Login Box Styling */
        .login-box {
            background-color: #ffffff;
            max-width: 450px;
            margin: auto;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15); /* More prominent shadow */
            margin-top: 50px; /* Adjusted margin-top */
            margin-bottom: 50px; /* Add margin-bottom for spacing before footer */
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #d63384; /* Pink heading */
            font-weight: bold;
            font-size: 2rem;
        }

        .login-box h2 i {
            margin-right: 10px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .input-group-text {
            background-color: #f1f1f1;
            border-right: none;
            color: #555;
            border-radius: 8px 0 0 8px;
        }

        .form-control {
            border-left: none;
            border-radius: 0 8px 8px 0;
        }

        .form-control:focus {
            border-color: #d63384;
            box-shadow: 0 0 0 0.2rem rgba(214, 51, 132, 0.25);
        }

        .btn-login {
            background-color: #d63384; /* Pink button */
            color: white;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #bd216e;
        }

        .form-text a {
            color: #d63384;
            text-decoration: none;
            transition: text-decoration 0.3s ease;
        }

        .form-text a:hover {
            text-decoration: underline;
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
            .login-box {
                margin-top: 30px;
                padding: 30px;
            }
            .login-box h2 {
                font-size: 1.8rem;
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
            .login-box {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container header-content">
            <div>
                <h1>🔑 Secure Sign In</h1>
                <p>Access your account and manage your orders.</p>
            </div>
            <div>
                <a href="index.php" class="btn home-btn">🏠 Home</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero-section">
        <div class="container">
            <h2>Welcome Back!</h2>
            <p>
                Sign in to your Online Food Ordering account to quickly access your saved preferences,
                order history, and exclusive deals.
            </p>
            <a href="#login-form-section" class="btn btn-hero">Sign In Now</a>
        </div>
    </section>

    <!-- Sign In Form -->
    <main class="container my-5" id="login-form-section">
        <div class="login-box">
            <h2><i class="ri-user-line"></i> Sign In</h2>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-mail-line"></i></span>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-lock-line"></i></span>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                </div>

                <div class="mb-3 text-end">
                    <small class="form-text"><a href="#">Forgot password?</a></small>
                </div>

                <button type="submit" class="btn btn-login w-100">Sign In</button>

                <div class="text-center mt-3">
                    <small class="form-text">Don't have an account? <a href="signup.php">Sign Up</a></small>
                </div>
            </form>
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

</body>
</html>
