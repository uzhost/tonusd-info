<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUSD - TON USD</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.4.4/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
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
                <h2 class="h2 font-bold">Hard Cap Gathering</h2>
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
    <section id="about" class="py-12">
        <div class="container">
            <h2 class="h2 font-bold text-center mb-8">About TUSD</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>TUSD (TON USD) is a stablecoin designed to bring stability and transparency to the cryptocurrency world. Backed by the power of the TON Network, TUSD offers unparalleled security and efficiency for all your digital transactions.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/about-screen1.jpg" alt="About TUSD" class="about-img">
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
    <section id="contact" class="py-12">
        <div class="container">
            <h2 class="h2 font-bold text-center mb-8">Contact Us</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
