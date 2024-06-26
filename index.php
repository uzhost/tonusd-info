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
        
       /* Token Metrics Section Styles */
#token-info {
    padding-top: 6rem;
    padding-bottom: 6rem;
}

#token-info h2 {
    color: #000000; /* Adjusted to black (#000000) */
}

.grid {
    display: grid;
}

.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
}

.sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.gap-4 {
    gap: 1rem; /* Adjust gap size as needed */
}

.bg-white {
    background-color: #ffffff; /* Adjust background color as per your design */
}

.p-4 {
    padding: 1rem;
}

.rounded-lg {
    border-radius: 0.5rem; /* Adjust border radius as needed */
}

.text-center {
    text-align: center;
}

.text-xl {
    font-size: 1.25rem; /* Adjust font size as needed */
}

.text-2xl {
    font-size: 1.5rem; /* Adjust font size as needed */
}

.font-semibold {
    font-weight: 600;
}

.text-green-500 {
    color: #48bb78; /* Adjust text color as per your design */
}

.shadow-md {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08); /* Adjust shadow as needed */
}

.flex {
    display: flex;
}

.flex-col {
    flex-direction: column;
}

.justify-center {
    justify-content: center;
}

.items-center {
    align-items: center;
}

@media (min-width: 640px) {
    .sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (min-width: 768px) {
    .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
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

               <!-- Token Metrics Section -->
<section id="token-info" class="py-12 bg-gray-100 text-gray-900">
    <div class="container">
        <h2 class="text-3xl font-bold text-center mb-8">Token Metrics</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-items-center">

            <div class="bg-white p-4 rounded-lg text-center shadow-md flex flex-col justify-center items-center">
                <h3 class="text-xl font-semibold mb-2">Price</h3>
                <p id="price" class="text-2xl font-bold text-green-500">$0.0001</p>
            </div>

            <div class="bg-white p-4 rounded-lg text-center shadow-md flex flex-col justify-center items-center">
                <h3 class="text-xl font-semibold mb-2">24h Volume</h3>
                <p id="volume" class="text-2xl font-bold text-green-500">$00.01</p>
            </div>

            <div class="bg-white p-4 rounded-lg text-center shadow-md flex flex-col justify-center items-center">
                <h3 class="text-xl font-semibold mb-2">Liquidity</h3>
                <p id="liquidity" class="text-2xl font-bold text-green-500">$00.01</p>
            </div>

            <div class="bg-white p-4 rounded-lg text-center shadow-md flex flex-col justify-center items-center">
                <h3 class="text-xl font-semibold mb-2">Supply</h3>
                <p id="supply" class="text-2xl font-bold text-green-500">0,000,000</p>
            </div>

            <div class="bg-white p-4 rounded-lg text-center shadow-md flex flex-col justify-center items-center">
                <h3 class="text-xl font-semibold mb-2">Market Cap</h3>
                <p id="marketcap" class="text-2xl font-bold text-green-500">$00.01K</p>
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

   
   <!-- Contract Information Section -->
<section id="contract-info" class="py-12 bg-gray-100">
    <div class="container">
        <h2 class="text-3xl font-bold text-center mb-8">Contract Information</h2>
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <p class="mb-4 text-xl">
                <strong>Contract Address:</strong>
                <span class="block mt-2 text-lg text-gray-700">EQDWnAbLVdQXKJhevqFcTwSdTAUHguvOzWOab8Oyfqzoa_0r</span>
            </p>
            <p class="text-lg mb-4">Check the contract on:</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <a href="https://tonviewer.com/EQDWnAbLVdQXKJhevqFcTwSdTAUHguvOzWOab8Oyfqzoa_0r" target="_blank" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">Tonviewer</a>
                <a href="https://dyor.io/minter/EQDWnAbLVdQXKJhevqFcTwSdTAUHguvOzWOab8Oyfqzoa_0r" target="_blank" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">Dyor Minter</a>
                <a href="https://ton.app/en/jettons/EQDWnAbLVdQXKJhevqFcTwSdTAUHguvOzWOab8Oyfqzoa_0r" target="_blank" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">Ton App</a>
                <a href="https://coinmarketcap.com/dexscan/ton/EQAbGCA8nGRFvWrGHrz63xMYiniJKw1O22_-QuThiw8Wcavz/" target="_blank" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">CoinMarketCap</a>
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
                <div class="alert alert-info text-center">
                    <p>Please, write to <strong><a href="mailto:support@tonusd.net">support@tonusd.net</a></strong> if you have any questions or offers.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Community Section -->
<section id="community" class="py-12 bg-gray-100">
    <div class="container">
        <h2 class="text-3xl font-bold text-center mb-8">Join Our Community</h2>
        <div class="text-center">
            <p class="text-lg mb-4">Connect with us on social media and stay updated with the latest news!</p>
            <div class="flex justify-center space-x-4">
                <a href="https://twitter.com/yourtwitterhandle" class="text-blue-500 text-3xl mx-2 hover:text-blue-600 transition duration-300 ease-in-out">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://t.me/tonusdinfo" class="text-blue-500 text-3xl mx-2 hover:text-blue-600 transition duration-300 ease-in-out">
                    <i class="fab fa-telegram"></i>
                </a>
            </div>
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
    
     <script>
async function fetchTokenData() {
    const apiUrl = 'https://api.geckoterminal.com/api/v2/networks/ton/tokens/EQDWnAbLVdQXKJhevqFcTwSdTAUHguvOzWOab8Oyfqzoa_0r';

    try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const json = await response.json();
        const data = json.data.attributes; // Accessing the attributes object directly

        // Correctly access nested properties using the updated paths
        updateDOM('price', data.price_usd);
        updateDOM('supply', data.total_supply);
        updateDOM('volume', data.volume_usd.h24); // Correctly accessing the 24h volume
        updateDOM('liquidity', data.total_reserve_in_usd);
        // The API response does not contain a direct market_cap_usd, using fdv_usd as a fallback
        updateDOM('marketcap', data.fdv_usd); // Using fully diluted valuation in place of market cap if market cap is null
    } catch (error) {
        console.error('Fetching token data failed:', error);
        document.querySelectorAll('.info-box p').forEach(p => p.innerText = 'Data unavailable');
    }
}

function updateDOM(elementId, value) {
    const element = document.querySelector(`#${elementId}`);
    if (element && value !== undefined) { // Check for undefined to allow zero values
        let formattedValue;
        switch (elementId) {
            
            case 'price':
                // Assuming price needs to be detailed due to its potentially small value
                formattedValue = parseFloat(value).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 4 });
                element.innerText = `$${formattedValue}`;
                break;
            
            case 'volume':
                // Round 24h volume to the nearest integer and format with commas
                formattedValue = parseFloat(value).toFixed(0); // Ensure it's an integer
                formattedValue = parseInt(formattedValue).toLocaleString(); // Format with commas
                element.innerText = `$${formattedValue}`;
            break;


                
             case 'liquidity':
                // The liquidity value and convert it to a whole number without decimal places
                formattedValue = Math.round(parseFloat(value)).toLocaleString();
                element.innerText = `$${formattedValue}`;
            break;

            case 'supply':
                // Remove 9 decimals from the total supply and format. Append "TUSD" instead of "$".
                formattedValue = (parseFloat(value) / Math.pow(10, 9)).toLocaleString(undefined, { maximumFractionDigits: 0 }) + " TUSD";
                element.innerText = formattedValue;
            break;

            case 'marketcap':
                // Display market cap without decimal accuracy
                formattedValue = parseFloat(value).toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
                element.innerText = `$${formattedValue}`;
            break;

            
            default:
                formattedValue = parseFloat(value).toLocaleString();
                element.innerText = `$${formattedValue}`;
        }
    } else {
        console.warn(`Missing data or element for ${elementId}`);
    }
}

window.onload = fetchTokenData;

</script>
    
</body>
</html>
