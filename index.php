<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUSD - TON USD</title>
    
    <!-- Tailwind CSS CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS CDN -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero-section {
            background: url('img/blockchain1.png') no-repeat center center;
            background-size: cover;
            height: 100vh;
        }
        .navbar-brand img {
            height: 50px;
        }
        .about-img {
            max-width: 100%;
            height: auto;
        }
        .progress-bar-custom {
            background-color: #4caf50; /* Custom color */
        }
        .market-section iframe {
            border: none;
            width: 100%;
            height: 600px;
        }
        .animated {
            animation-duration: 1.5s;
            animation-fill-mode: both;
        }
        @keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0);
                opacity: 0;
            }
            to {
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }
        .fadeInUp {
            animation-name: fadeInUp;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/tusd-logo.png" alt="TUSD Logo" style="height: 50px; margin-right: 10px;">
                <span>TUSD - TON USD</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#market">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#community">Community</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section d-flex align-items-center justify-content-center text-white text-center">
        <div class="container animated fadeInUp">
            <h1 class="display-4 font-bold">Welcome to TUSD - TON USD</h1>
            <p class="mt-4 h4">The future of digital finance</p>
            <a href="#about" class="btn btn-primary mt-4">Learn More</a>

            <!-- Hard Cap Information -->
            <div class="mt-8">
                <h2 class="h2 font-bold">Hard Cap: $100K</h2>
                <p class="mt-2">We are currently gathering funds to reach our hard cap goal.</p>

                <!-- Progress Bar -->
                <div class="progress mt-4" style="height: 30px;">
                    <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                </div>
                <p class="mt-2">We have gathered 10% of our hard cap goal!</p>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-12 bg-gray-100">
        <div class="container">
            <h2 class="h2 font-bold text-center mb-8">Features</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-lock fa-3x mb-4"></i>
                    <h3 class="h5 font-bold">Secure & Transparent</h3>
                    <p class="mt-2">Your investments are secure with our state-of-the-art technology.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-rocket fa-3x mb-4"></i>
                    <h3 class="h5 font-bold">Fast Transactions</h3>
                    <p class="mt-2">Experience lightning-fast transactions with TUSD.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-globe fa-3x mb-4"></i>
                    <h3 class="h5 font-bold">Global Reach</h3>
                    <p class="mt-2">Access TUSD from anywhere in the world.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- About Section -->
<section id="about" class="py-12 bg-gray-100">
    <div class="container">
        <h2 class="h2 font-bold text-center mb-8">About TUSD</h2>
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p>🚀 <strong>TUSD (TON USD)</strong> - Your gateway to a stable, transparent, and secure digital financial future! 🌐<br><br>
                
                💎 <strong>Stability & Transparency:</strong> TUSD is designed to eliminate volatility in the crypto world, ensuring your investments remain steady and reliable.<br><br>
                
                🔐 <strong>Unmatched Security:</strong> Powered by the robust TON Network, TUSD guarantees top-notch security for all your digital transactions, giving you peace of mind.<br><br>
                
                ⚡ <strong>Efficient Transactions:</strong> Experience lightning-fast transactions with zero hassles, making your financial operations smoother than ever.<br><br>
                
                Join the revolution in digital finance with TUSD today! 💸💪<br><br>
                
                <span class="text-blue-500">#Crypto #Stablecoin #DigitalFinance #TUSD #TONNetwork #Blockchain #CryptoSecurity</span></p>
            </div>
            <div class="col-md-6 text-center">
                <img src="img/about-screen1.png" alt="About TUSD" class="about-img img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>


    <!-- Market Section -->
    <section id="market" class="py-12 bg-gray-100 market-section">
        <div class="container">
            <h2 class="h2 font-bold text-center mb-8">Market Overview</h2>
            <div class="row">
                <div class="col-12">
                    <iframe height="600" width="100%" id="geckoterminal-embed" title="GeckoTerminal Embed" src="https://www.geckoterminal.com/ton/pools/EQDLtfchnWcWKCFU8L0J_SYT8Smxa1ilx6Y1pmtqrw6FI_Rg?embed=1&info=1&swaps=1" frameborder="0" allow="clipboard-write" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
<section id="contact" class="py-12 bg-gray-100">
    <div class="container">
        <h2 class="h2 font-bold text-center mb-8">Contact Us</h2>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="process_form.php" method="POST">
                    <div class="form-group mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


    <!-- Community Section -->
    <section id="community" class="py-12 bg-gray-100">
        <div class="container">
            <h2 class="h2 font-bold text-center mb-8">Join Our Community</h2>
            <div class="text-center">
                <a href="https://twitter.com/yourtwitterhandle" class="text-blue-500 text-2xl mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://t.me/tonusdinfo" class="text-blue-500 text-2xl mx-2">
                    <i class="fab fa-telegram"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-gray-800 text-white text-center">
        <div class="container">
            <p>&copy; 2024 TUSD. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
