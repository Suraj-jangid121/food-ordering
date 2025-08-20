<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support - Online Food Ordering</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            padding-top: 80px; /* Space for the fixed header */
        }

        /* Header Styling - Consistent with Home/Offers Page */
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
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/random/1200x500/?customer-support,helpdesk') no-repeat center center/cover;
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

        /* Accordion (FAQ) Styling */
        .accordion-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .accordion-button {
            font-weight: bold;
            font-size: 1.1rem;
            color: #333;
            background-color: #f1f1f1;
            padding: 18px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            background-color: #d63384;
            color: #fff;
            box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
        }

        .accordion-button:focus {
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(214, 51, 132, 0.25);
        }

        .accordion-body {
            padding: 20px;
            background-color: #fff;
            line-height: 1.6;
            color: #555;
            font-size: 1rem;
        }

        /* Contact Box Styling */
        .contact-box {
            background: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-top: 60px;
        }

        .contact-box p {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(214, 51, 132, 0.25);
            border-color: #d63384;
        }

        .btn-submit {
            background-color: #d63384;
            color: white;
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #bd216e;
        }

        /* Footer Styling - Detailed, Consistent with Home/Offers Page */
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
            .accordion-button {
                font-size: 1rem;
                padding: 15px 18px;
            }
            .accordion-body {
                font-size: 0.9rem;
            }
            .contact-box {
                padding: 30px;
            }
            .contact-box p {
                font-size: 1rem;
            }
            .btn-submit {
                padding: 10px 25px;
                font-size: 0.95rem;
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
            .accordion-button {
                font-size: 0.95rem;
                padding: 12px 15px;
            }
            .contact-box {
                padding: 20px;
            }
            .btn-submit {
                width: 100%;
            }
        }
    </style>
</head>
<body>

        <header>
        <div class="container header-content">
            <div>
                <h1>💡 Help & Support Center</h1>
                <p>Your guide to a seamless food ordering experience.</p>
            </div>
            <div>
                <a href="index.php" class="btn home-btn">🏠 Home</a>
            </div>
        </div>
    </header>

        <section id="hero-section">
        <div class="container">
            <h2>How Can We Help You Today?</h2>
            <p>
                Find answers to your questions, troubleshoot issues, or connect with our support team.
                We're here to ensure your online food ordering journey is smooth and enjoyable.
            </p>
            <a href="#faq-section" class="btn btn-hero me-3">Browse FAQs</a>
            <a href="#contact-us-section" class="btn btn-hero">Contact Us</a>
        </div>
    </section>

        <main class="container my-5">

                <section id="faq-section">
            <h2 class="section-title"><i class="ri-question-answer-line"></i> Frequently Asked Questions</h2>

            <div class="accordion" id="faqAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true">
                            <i class="ri-user-add-line me-2"></i> How do I create an account?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            To create an account, simply click on the <strong>Sign Up</strong> button located at the top-right corner of our homepage. You'll then be prompted to fill in your basic details, including your email address and a secure password. Once submitted, you'll be ready to explore our delicious offerings!
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                            <i class="ri-lock-unlock-line me-2"></i> How can I reset my password?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            If you've forgotten your password, navigate to the <strong>Sign In</strong> page and click on the "Forgot password?" link. Enter your registered email address, and we'll send you a link with instructions to securely reset your password.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                            <i class="ri-truck-line me-2"></i> Where is my order?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can easily track the status of your order in real-time! Simply log in to your account, go to the <strong>Order History</strong> section in your profile, and select your current order to view its live progress from preparation to delivery.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                            <i class="ri-bank-card-line me-2"></i> What payment methods are accepted?
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer a variety of convenient payment options, including UPI, Credit/Debit cards (Visa, MasterCard, Amex), Net Banking, popular digital Wallets, and Cash on Delivery (COD) for eligible orders.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                            <i class="ri-time-line me-2"></i> What are your customer support hours?
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our dedicated customer support team is available <strong>24/7</strong> to assist you! You can reach us anytime via email, live chat on our website, or by calling our support hotline.
                        </div>
                    </div>
                </div>

            </div>
        </section>

                <section id="contact-us-section" class="contact-box">
            <h2 class="section-title"><i class="ri-mail-send-line"></i> Contact Us</h2>
            <p class="mb-4">Still have questions or need personalized assistance? Fill out the form below, and our support team will get back to you as soon as possible.</p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="example@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Topic<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="subject" placeholder="e.g., Order Issue, Payment Query, Feedback" required>
                </div>

                <div class="mb-4">
                    <label for="message" class="form-label">Your Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Type your detailed message here..." required></textarea>
                </div>

                <button type="submit" class="btn btn-submit w-100">Send Message</button>
            </form>
        </section>

    </main>

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