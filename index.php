<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GlobalAirHub – Cruise Line Deals & Online Cruise Booking Worldwide</title>
    <meta name="description" content="Discover and book the best cruise vacations worldwide with GlobalAirHub. Compare top cruise lines, explore exclusive cruise deals, and enjoy a seamless, secure, and hassle-free cruise booking experience.">
    <meta name="keywords" content="cruise booking, cruise lines, cruise deals, book cruises online, affordable cruises, luxury cruises, international cruises, family cruises, cruise vacation packages, best cruise prices">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.webp">

    <!-- Style Css -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/search-form.css">
    <!-- Include flatpickr CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>


    <!-- Flight Preloader -->
    <div id="flightPreloader">
        <div class="flight-loader">
            <div class="plane">✈</div>
            <p>Searching best flights for you...</p>
        </div>
    </div>


    <?php include('include/header.php'); ?>

    <main>
        <section class="hero">
            <div class="hero-bg">
                <img src="images/banner/banner.jpg" alt="Coastal town" loading="lazy">
            </div>
            <div class="hero-content container">
                <h1 class="hero-title">Book Affordable Flights Worldwide</h1>
                <p class="hero-subtitle">
                    Compare fares from top airlines and book your next trip with confidence. Fast, secure, and hassle-free flight booking.
                </p>
                <!-- Search Box -->
                <form action="flights-results" method="post" id="serachform">
                    <div class="booking-box">
                        <div class="tab-content1 active" id="flights">
                            <div class="trip-type">
                                <label>
                                    <input type="radio" name="tripType" value="roundtrip" checked> Round Trip
                                </label>
                                <label>
                                    <input type="radio" name="tripType" value="oneway"> One Way
                                </label>
                            </div>

                            <div class="form-grid">
                                <div class="input-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <input type="text" id="fromAirport" name="from_code" placeholder="From Where?">
                                </div>
                                <div class="input-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <input type="text" id="toAirport" name="to_code" placeholder="To Where?">
                                </div>
                                <div class="date-box" id="departDateBox">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <input type="text" id="date1" name="depart_date" placeholder="YYYY-MM-DD">
                                </div>

                                <div class="date-box" id="returnDateBox">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <input type="text" id="date2" name="return_date" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="traveler-wrapper">
                                    <input type="text" class="traveler-input" name="travelers" placeholder="1 Passenger, Economy" readonly>
                                </div>
                                <button class="search-btn1">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="reviews-banner">
            <div class="container">

                <div class="reviews-marquee-wrapper">
                    <div class="reviews-container">
                        <!-- Set 1 -->
                        <div class="review-item trustpilot">
                            <div class="tp-logo">
                                <i class="fa-solid fa-star" style="color:#00b67a;"></i>
                                <strong>Trusted Flight Booking</strong>
                            </div>

                            <div class="tp-stars">
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                            </div>

                            <div class="tp-score">
                                Secure Flight Booking<br>
                                Fast & Reliable Travel Service
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo">
                                <i class="fa-solid fa-star" style="color:#4a90e2;"></i>
                                <strong>SmartCustomer</strong>
                            </div>
                            <div class="review-count">
                                Based on verified customer reviews
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="platform-logo">
                                <i class="fa-solid fa-circle-check" style="color:#111;"></i>
                                <strong>Reviews.io</strong>
                            </div>
                            <div class="review-count">
                                Verified customer feedback
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="platform-logo">
                                Reseller<strong>Ratings</strong>
                                <i class="fa-solid fa-circle-check" style="color:#d11975;"></i>
                            </div>
                            <div class="review-count">
                                Trusted by verified customers
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="platform-logo google-logo">
                                <span style="color:#4285F4;font-weight:700;">G</span><span style="color:#EA4335;font-weight:700;">o</span><span style="color:#FBBC05;font-weight:700;">o</span><span style="color:#4285F4;font-weight:700;">g</span><span style="color:#34A853;font-weight:700;">l</span><span style="color:#EA4335;font-weight:700;">e</span>
                            </div>
                            <div class="review-count">
                                Verified Google customer reviews
                            </div>
                        </div>
                        <!-- Set 2 (duplicate for seamless loop) -->
                        <div class="review-item trustpilot">
                            <div class="tp-logo">
                                <i class="fa-solid fa-star" style="color:#00b67a;"></i>
                                <strong>Trusted Flight Booking</strong>
                            </div>

                            <div class="tp-stars">
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                            </div>

                            <div class="tp-score">
                                Secure Flight Booking<br>
                                Fast & Reliable Travel Service
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo">
                                <i class="fa-solid fa-star" style="color:#4a90e2;"></i>
                                <strong>SmartCustomer</strong>
                            </div>
                            <div class="review-count">
                                Based on verified customer reviews
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="platform-logo">
                                <i class="fa-solid fa-circle-check" style="color:#111;"></i>
                                <strong>Reviews.io</strong>
                            </div>
                            <div class="review-count">
                                Verified customer feedback
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="platform-logo">
                                Reseller<strong>Ratings</strong>
                                <i class="fa-solid fa-circle-check" style="color:#d11975;"></i>
                            </div>
                            <div class="review-count">
                                Trusted by verified customers
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="platform-logo google-logo">
                                <span style="color:#4285F4;font-weight:700;">G</span><span style="color:#EA4335;font-weight:700;">o</span><span style="color:#FBBC05;font-weight:700;">o</span><span style="color:#4285F4;font-weight:700;">g</span><span style="color:#34A853;font-weight:700;">l</span><span style="color:#EA4335;font-weight:700;">e</span>
                            </div>
                            <div class="review-count">
                                Verified Google customer reviews
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="features-section">
            <div class="container features-grid">
                <!-- Card 1 -->
                <div class="feature-card card-rewards">
                    <div class="fc-content">
                        <h3 class="card-title">Book Flights at<br>Great Prices</h3>

                        <p class="card-desc">
                            Compare fares from leading airlines and find affordable domestic and international flight deals.
                        </p>

                        <button class="reward-btn">
                            <i class="fa-solid fa-tags badge-icon"></i>

                            <div class="btn-text">
                                <span class="hasta">SAVE ON</span>
                                <span class="amount">AIRFARES</span>
                                <span class="creditos">BEST FLIGHT DEALS</span>
                            </div>
                        </button>

                        <a href="tel:1-877-513-3980" class="terms-link">
                            *Offers and fares are subject to availability and airline terms.
                        </a>
                    </div>

                    <div class="fc-graphic">
                        <i class="fa-solid fa-tags gift-icon"></i>
                        <i class="fa-solid fa-plane plane-icon"></i>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="feature-card card-travelers">
                    <div class="avatars-wrapper">
                        <div class="avatars">
                            <img src="https://i.pravatar.cc/100?img=1" alt="Traveler">
                            <img src="https://i.pravatar.cc/100?img=2" alt="Traveler">
                            <img src="https://i.pravatar.cc/100?img=3" alt="Traveler">
                            <img src="https://i.pravatar.cc/100?img=4" alt="Traveler">
                            <img src="https://i.pravatar.cc/100?img=5" alt="Traveler">
                            <img src="https://i.pravatar.cc/100?img=6" alt="Traveler">
                        </div>

                        <div class="play-btn">
                            <i class="fa-solid fa-play"></i>
                        </div>
                    </div>

                    <div class="fc-content">
                        <h4 class="text-blue">Trusted Flight Booking</h4>

                        <h3 class="highlight-title">
                            Travel with Confidence
                            <span class="sparks">✈️</span>
                        </h3>

                        <p class="card-desc">
                            Discover affordable flight deals, secure booking, and dedicated customer support for a smooth travel experience.
                        </p>

                        <a href="flights" class="more-link">
                            Explore Flight Deals
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="feature-card card-established">
                    <div class="badges">
                        <div class="support-badge">
                            <i class="fa-solid fa-headset"></i> Travel Experts Available 24/7
                        </div>

                        <div class="status-badge">
                            <span class="dot"></span> Secure Booking
                        </div>
                    </div>
                    <div class="business-badge-wrapper">
                        <div class="business-badge">
                            <div class="bb-inner">
                                <div class="stars">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>

                                <div class="years">100%</div>

                                <div class="years-text">SECURE</div>

                                <div class="in-business">ONLINE BOOKING</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="offers-section">
            <div class="container">
                <div class="offers-card">

                    <!-- Section Header -->
                    <div class="offers-header">
                        <div class="badge-pill">FEATURED FLIGHT DEALS</div>

                        <h2>
                            Discover Great Flight Deals to Destinations Around the World
                        </h2>

                        <p>
                            Explore convenient flight options and competitive fares for
                            popular destinations worldwide. Compare available itineraries,
                            choose the option that suits your travel plans, and book your
                            journey with confidence through Global Air Hub.
                        </p>
                    </div>

                    <!-- Flight Offers Carousel -->
                    <div class="carousel-wrapper">

                        <!-- Previous Button -->
                        <button class="nav-btn prev-btn" type="button" aria-label="Previous flight deals">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>

                        <div class="offers-track-outer">

                            <div class="offers-grid">

                                <!-- Offer 1 -->
                                <div class="offer-item">
                                    <div class="offer-img-wrap">

                                        <img
                                            src="images/destination/des-1.png"
                                            alt="Dubai"
                                            class="city-img">

                                        <div class="offer-img-overlay"></div>

                                        <div class="offer-destination-badge">
                                            Dubai
                                        </div>

                                        <div class="offer-price-badge">
                                            <span class="opb-from">Explore fares</span>
                                            <span class="opb-amount">Dubai</span>
                                            <span class="opb-per">Popular destination</span>
                                        </div>

                                        <div class="offer-overlay-content">

                                            <div class="route">
                                                Toronto
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                Dubai
                                            </div>

                                            <div class="offer-meta">
                                                <span class="airline-name">
                                                    <i class="fa-solid fa-plane"></i>
                                                    Flight Options
                                                </span>

                                                <span class="class-pill">
                                                    Economy
                                                </span>
                                            </div>

                                            <div class="date-range">
                                                <i class="fa-regular fa-calendar"></i>
                                                Flexible Travel Dates
                                            </div>

                                            <a href="#serachform">
                                                <button class="btn-reserve" type="button">
                                                    Explore Flights
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            </a>

                                        </div>
                                    </div>
                                </div>


                                <!-- Offer 2 -->
                                <div class="offer-item">
                                    <div class="offer-img-wrap">

                                        <img
                                            src="images/destination/des-2.png"
                                            alt="New York"
                                            class="city-img">

                                        <div class="offer-img-overlay"></div>

                                        <div class="offer-destination-badge">
                                            New York
                                        </div>

                                        <div class="offer-price-badge">
                                            <span class="opb-from">Explore fares</span>
                                            <span class="opb-amount">New York</span>
                                            <span class="opb-per">Popular destination</span>
                                        </div>

                                        <div class="offer-overlay-content">

                                            <div class="route">
                                                Toronto
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                New York
                                            </div>

                                            <div class="offer-meta">
                                                <span class="airline-name">
                                                    <i class="fa-solid fa-plane"></i>
                                                    Flight Options
                                                </span>

                                                <span class="class-pill">
                                                    Economy
                                                </span>
                                            </div>

                                            <div class="date-range">
                                                <i class="fa-regular fa-calendar"></i>
                                                Flexible Travel Dates
                                            </div>

                                            <a href="#serachform">
                                                <button class="btn-reserve" type="button">
                                                    Explore Flights
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            </a>

                                        </div>
                                    </div>
                                </div>


                                <!-- Offer 3 -->
                                <div class="offer-item">
                                    <div class="offer-img-wrap">

                                        <img
                                            src="images/destination/des-3.png"
                                            alt="London"
                                            class="city-img">

                                        <div class="offer-img-overlay"></div>

                                        <div class="offer-destination-badge">
                                            London
                                        </div>

                                        <div class="offer-price-badge">
                                            <span class="opb-from">Explore fares</span>
                                            <span class="opb-amount">London</span>
                                            <span class="opb-per">Popular destination</span>
                                        </div>

                                        <div class="offer-overlay-content">

                                            <div class="route">
                                                Toronto
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                London
                                            </div>

                                            <div class="offer-meta">
                                                <span class="airline-name">
                                                    <i class="fa-solid fa-plane"></i>
                                                    Flight Options
                                                </span>

                                                <span class="class-pill">
                                                    Economy
                                                </span>
                                            </div>

                                            <div class="date-range">
                                                <i class="fa-regular fa-calendar"></i>
                                                Flexible Travel Dates
                                            </div>

                                            <a href="#serachform">
                                                <button class="btn-reserve" type="button">
                                                    Explore Flights
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            </a>

                                        </div>
                                    </div>
                                </div>


                                <!-- Offer 4 -->
                                <div class="offer-item">
                                    <div class="offer-img-wrap">

                                        <img
                                            src="images/destination/des-4.png"
                                            alt="Paris"
                                            class="city-img">

                                        <div class="offer-img-overlay"></div>

                                        <div class="offer-destination-badge">
                                            Paris
                                        </div>

                                        <div class="offer-price-badge">
                                            <span class="opb-from">Explore fares</span>
                                            <span class="opb-amount">Paris</span>
                                            <span class="opb-per">Popular destination</span>
                                        </div>

                                        <div class="offer-overlay-content">

                                            <div class="route">
                                                Toronto
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                Paris
                                            </div>

                                            <div class="offer-meta">
                                                <span class="airline-name">
                                                    <i class="fa-solid fa-plane"></i>
                                                    Flight Options
                                                </span>

                                                <span class="class-pill">
                                                    Economy
                                                </span>
                                            </div>

                                            <div class="date-range">
                                                <i class="fa-regular fa-calendar"></i>
                                                Flexible Travel Dates
                                            </div>

                                            <a href="#serachform">
                                                <button class="btn-reserve" type="button">
                                                    Explore Flights
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            </a>

                                        </div>
                                    </div>
                                </div>


                                <!-- Offer 5 -->
                                <div class="offer-item">
                                    <div class="offer-img-wrap">

                                        <img
                                            src="images/destination/des-5.png"
                                            alt="Vancouver"
                                            class="city-img">

                                        <div class="offer-img-overlay"></div>

                                        <div class="offer-destination-badge">
                                            Vancouver
                                        </div>

                                        <div class="offer-price-badge">
                                            <span class="opb-from">Explore fares</span>
                                            <span class="opb-amount">Vancouver</span>
                                            <span class="opb-per">Popular destination</span>
                                        </div>

                                        <div class="offer-overlay-content">

                                            <div class="route">
                                                Toronto
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                Vancouver
                                            </div>

                                            <div class="offer-meta">
                                                <span class="airline-name">
                                                    <i class="fa-solid fa-plane"></i>
                                                    Flight Options
                                                </span>

                                                <span class="class-pill">
                                                    Economy
                                                </span>
                                            </div>

                                            <div class="date-range">
                                                <i class="fa-regular fa-calendar"></i>
                                                Flexible Travel Dates
                                            </div>

                                            <a href="#serachform">
                                                <button class="btn-reserve" type="button">
                                                    Explore Flights
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            </a>

                                        </div>
                                    </div>
                                </div>


                                <!-- Offer 6 -->
                                <div class="offer-item">
                                    <div class="offer-img-wrap">

                                        <img
                                            src="images/destination/des-6.png"
                                            alt="Los Angeles"
                                            class="city-img">

                                        <div class="offer-img-overlay"></div>

                                        <div class="offer-destination-badge">
                                            Los Angeles
                                        </div>

                                        <div class="offer-price-badge">
                                            <span class="opb-from">Explore fares</span>
                                            <span class="opb-amount">Los Angeles</span>
                                            <span class="opb-per">Popular destination</span>
                                        </div>

                                        <div class="offer-overlay-content">

                                            <div class="route">
                                                Toronto
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                Los Angeles
                                            </div>

                                            <div class="offer-meta">
                                                <span class="airline-name">
                                                    <i class="fa-solid fa-plane"></i>
                                                    Flight Options
                                                </span>

                                                <span class="class-pill">
                                                    Economy
                                                </span>
                                            </div>

                                            <div class="date-range">
                                                <i class="fa-regular fa-calendar"></i>
                                                Flexible Travel Dates
                                            </div>

                                            <a href="#serachform">
                                                <button class="btn-reserve" type="button">
                                                    Explore Flights
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Next Button -->
                        <button class="nav-btn next-btn" type="button" aria-label="Next flight deals">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>

                    </div>

                </div>
            </div>
        </section>

        <section class="personalized-offers-section">
            <div class="container">

                <div class="po-grid">

                    <!-- Featured Card -->
                    <div class="po-card po-featured">

                        <img src="images/destination/des-7.png"
                            alt="Explore worldwide flight destinations"
                            class="po-img">

                        <div class="po-overlay"></div>

                        <div class="po-badge">
                            Explore Flight Deals
                        </div>

                        <div class="po-content">

                            <h3>
                                Discover convenient flight options and competitive fares for your next journey.
                            </h3>

                            <a href="#serachform" class="btn-outline-dashed">
                                Find Your Flight
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>
                    </div>


                    <!-- Small Cards Column -->
                    <div class="po-small-col">

                        <!-- Small Card 1 -->
                        <div class="po-card po-small">

                            <img src="images/destination/des-9.png"
                                alt="Domestic and international flights"
                                class="po-img">

                            <div class="po-overlay"></div>

                            <div class="po-badge">
                                Domestic & International
                            </div>

                            <div class="po-content">

                                <h3>
                                    Explore domestic and international flight options designed around your travel plans.
                                </h3>

                                <a href="#serachform" class="btn-outline-dashed">
                                    Explore Flights
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>
                        </div>


                        <!-- Small Card 2 -->
                        <div class="po-card po-small">

                            <img src="images/destination/des-8.png"
                                alt="Personalized travel booking assistance"
                                class="po-img">

                            <div class="po-overlay"></div>

                            <div class="po-badge">
                                Travel With Confidence
                            </div>

                            <div class="po-content">

                                <h3>
                                    Get a smooth booking experience with travel options and assistance tailored to your journey.
                                </h3>

                                <a href="#serachform" class="btn-outline-dashed">
                                    Start Your Journey
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>
                        </div>

                    </div>

                </div>

            </div>


        </section>

        <section class="social-community-section">
            <div class="container">

                <div class="sc-header">
                    <h2>TRAVELER EXPERIENCES</h2>
                    <p>
                        Discover what travelers value about finding flights, exploring destinations,
                        and planning their next journey with Global Air Hub.
                    </p>
                </div>

                <div class="sc-grid">

                    <!-- Traveler Review 1 -->
                    <div class="sc-card">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=600&fit=crop"
                            alt="Global Air Hub traveler"
                            class="sc-img">

                        <div class="sc-overlay">

                            <p class="sc-review">
                                Finding the right flight for my trip was simple and convenient.
                                The experience made planning my journey much easier.
                            </p>

                            <div class="sc-author-row">

                                <div class="sc-author-info">
                                    <span class="sc-name">Chris Francis</span>

                                    <div class="sc-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <button class="btn-play-review" type="button">
                                    <i class="fa-solid fa-play"></i>
                                    Traveler Story
                                </button>

                            </div>
                        </div>
                    </div>


                    <!-- Traveler Review 2 -->
                    <div class="sc-card">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=600&fit=crop"
                            alt="Traveler planning an international trip"
                            class="sc-img">

                        <div class="sc-overlay">

                            <p class="sc-review">
                                I found several flight options for my international trip
                                and was able to explore different travel choices with ease.
                            </p>

                            <div class="sc-author-row">

                                <div class="sc-author-info">
                                    <span class="sc-name">V Morgan</span>

                                    <div class="sc-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <button class="btn-play-review" type="button">
                                    <i class="fa-solid fa-play"></i>
                                    Traveler Story
                                </button>

                            </div>
                        </div>
                    </div>


                    <!-- Traveler Review 3 -->
                    <div class="sc-card">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=600&fit=crop"
                            alt="Traveler preparing for a journey"
                            class="sc-img">

                        <div class="sc-overlay">

                            <p class="sc-review">
                                Planning my journey felt smooth and straightforward.
                                I enjoyed exploring different flight possibilities for my trip.
                            </p>

                            <div class="sc-author-row">

                                <div class="sc-author-info">
                                    <span class="sc-name">Marius Chis</span>

                                    <div class="sc-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <button class="btn-play-review" type="button">
                                    <i class="fa-solid fa-play"></i>
                                    Traveler Story
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </section>

        <section class="global-cta-section">
            <div class="container">

                <div class="global-cta-content">

                    <!-- CTA Content -->
                    <div class="global-cta-text">

                        <span class="global-cta-tag">
                            YOUR JOURNEY STARTS HERE
                        </span>

                        <h2>
                            Find the Right Flight for Your Next Adventure
                        </h2>

                        <p>
                            Ready to plan your next trip? Explore flight options to
                            destinations around the world and find an itinerary that
                            fits your travel plans. Global Air Hub makes it easier to
                            discover, compare, and arrange your next journey.
                        </p>

                        <div class="global-cta-buttons">

                            <a href="tel:18775133980" class="cta-primary-btn">
                                <i class="bi bi-telephone-fill"></i>
                                Talk to Our Travel Team
                            </a>

                            <a href="#serachform" class="cta-secondary-btn">
                                Explore Flight Options
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>


                    <!-- CTA Card -->
                    <div class="global-cta-card">

                        <div class="cta-icon">
                            <i class="bi bi-airplane-fill"></i>
                        </div>

                        <h3>
                            Plan Your Next Journey
                        </h3>

                        <p>
                            Explore convenient flight options and get travel
                            assistance to help make planning your journey easier.
                        </p>

                        <a href="tel:18775133980" class="cta-phone">
                            <i class="bi bi-telephone-fill"></i>
                            1-877-513-3980
                        </a>

                    </div>

                </div>

            </div>


        </section>

        <section class="hotels-cars-section">
            <div class="container">

                <div class="hc-layout">

                    <div class="hc-cards-col">

                        <div class="hc-grid">

                            <!-- Travel Assistance Card -->
                            <div class="hc-card help-card">

                                <img src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=800&q=80"
                                    alt="Travel assistance"
                                    class="help-bg">

                                <div class="help-overlay"></div>

                                <div class="help-content">

                                    <div class="agent-avatar">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                            alt="Travel Specialist">
                                    </div>

                                    <h3>
                                        Need Help Planning Your Trip?
                                    </h3>

                                    <p>
                                        Our travel specialists are available to help
                                        you explore flight options and plan a journey
                                        that fits your travel needs.
                                    </p>

                                    <a href="#serachform" class="reserve-link">
                                        Start Planning
                                    </a>

                                    <a href="tel:18775133980" class="call-action-btn">

                                        <!-- <div class="call-icon-circle">
                                            <i class="fa-solid fa-phone"></i>
                                        </div> -->

                                        <span>
                                            Call Us:
                                            <strong>1-877-513-3980</strong>
                                        </span>

                                    </a>

                                </div>
                            </div>


                            <!-- Car Rental -->
                            <div class="hc-card car-card hc-horizontal">

                                <div class="hc-img-box car-img-box">
                                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=500&q=80"
                                        alt="Car rental"
                                        class="hc-img">
                                </div>

                                <div class="hc-details">

                                    <div class="car-title-row">

                                        <div>
                                            <h3>
                                                Premium Car Rental
                                            </h3>

                                            <p class="sub-text">
                                                Comfortable options for your journey
                                            </p>
                                        </div>



                                    </div>

                                    <div class="car-features-price">

                                        <div class="features-pill">
                                            <span>
                                                <i class="fa-solid fa-user"></i> 5
                                            </span>

                                            <span>
                                                <i class="fa-solid fa-car-side"></i> 4
                                            </span>

                                            <span>
                                                <i class="fa-solid fa-suitcase"></i> 2
                                            </span>
                                        </div>

                                        <div class="price-display">
                                            <span class="desde">From</span>
                                            <span class="price-green">$37</span>
                                            <span class="unit">/day</span>
                                        </div>

                                    </div>

                                    <a href="tel:18775133980" class="btn-blue-block" style="display:block;text-align:center;text-decoration:none;">
                                        Explore Cars
                                    </a>

                                </div>
                            </div>


                            <!-- Hotel -->
                            <div class="hc-card hotel-card hc-horizontal">

                                <div class="hc-img-box">

                                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=500&q=80"
                                        alt="Hotel accommodation"
                                        class="hc-img">

                                </div>

                                <div class="hc-details">

                                    <h3>
                                        Comfortable Hotel Stays
                                    </h3>

                                    <p class="sub-text">
                                        Explore accommodation options for your trip
                                    </p>

                                    <div class="hotel-stars-price">

                                        <div class="stars-gold">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="price-display">
                                            <span class="desde">From</span>
                                            <span class="price-green">$51</span>
                                        </div>

                                    </div>

                                    <button class="btn-blue-block">
                                        Explore Hotels
                                    </button>

                                </div>
                            </div>


                            <!-- Vacation Package 1 -->
                            <div class="hc-card vacation-card hc-horizontal">

                                <div class="hc-img-box">

                                    <img src="https://images.unsplash.com/photo-1510097467424-192d713fd8b2?w=500&q=80"
                                        alt="Cancun vacation"
                                        class="hc-img">

                                </div>

                                <div class="hc-details">

                                    <div class="vac-badge">
                                        Vacation Package
                                    </div>

                                    <h3>
                                        Cancun, Mexico
                                    </h3>

                                    <p class="sub-text">
                                        Flight + Hotel + Transfer options
                                    </p>

                                    <div class="vac-includes">

                                        <span>
                                            <i class="fa-solid fa-plane"></i>
                                            Flight
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-building"></i>
                                            Hotel
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-van-shuttle"></i>
                                            Transfer
                                        </span>

                                    </div>

                                    <div class="price-display" style="margin:10px 0;">

                                        <span class="desde">From</span>
                                        <span class="price-green">$499</span>
                                        <span class="unit">/person</span>

                                    </div>

                                    <button class="btn-blue-block">
                                        Explore Package
                                    </button>

                                </div>
                            </div>


                            <!-- Vacation Package 2 -->
                            <div class="hc-card vacation-card hc-horizontal">

                                <div class="hc-img-box">

                                    <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=500&q=80"
                                        alt="Paris vacation"
                                        class="hc-img">

                                </div>

                                <div class="hc-details">

                                    <div class="vac-badge">
                                        Vacation Package
                                    </div>

                                    <h3>
                                        Paris, France
                                    </h3>

                                    <p class="sub-text">
                                        Flight + Hotel + Sightseeing options
                                    </p>

                                    <div class="vac-includes">

                                        <span>
                                            <i class="fa-solid fa-plane"></i>
                                            Flight
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-building"></i>
                                            Hotel
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-map-location-dot"></i>
                                            Tour
                                        </span>

                                    </div>

                                    <div class="price-display" style="margin:10px 0;">

                                        <span class="desde">From</span>
                                        <span class="price-green">$899</span>
                                        <span class="unit">/person</span>

                                    </div>

                                    <button class="btn-blue-block">
                                        Explore Package
                                    </button>

                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Section Header -->
                    <div class="hc-header">

                        <h2>
                            MORE WAYS TO PLAN YOUR PERFECT TRIP
                        </h2>

                        <p>
                            Go beyond flights and explore travel options that can
                            make your journey more convenient. Discover hotels,
                            car rentals, and vacation experiences for your next trip.
                        </p>


                        <div class="hc-right-cards">

                            <!-- Bali -->
                            <div class="hc-card vacation-card hc-horizontal">

                                <div class="hc-img-box">

                                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=500&q=80"
                                        alt="Bali vacation"
                                        class="hc-img">

                                </div>

                                <div class="hc-details">

                                    <div class="vac-badge">
                                        Vacation Package
                                    </div>

                                    <h3>
                                        Bali, Indonesia
                                    </h3>

                                    <p class="sub-text">
                                        Flight + Hotel + Tour options
                                    </p>

                                    <div class="vac-includes">

                                        <span>
                                            <i class="fa-solid fa-plane"></i>
                                            Flight
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-building"></i>
                                            Hotel
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-map-location-dot"></i>
                                            Tour
                                        </span>

                                    </div>

                                    <div class="price-display" style="margin:10px 0;">

                                        <span class="desde">From</span>
                                        <span class="price-green">$749</span>
                                        <span class="unit">/person</span>

                                    </div>

                                    <button class="btn-blue-block">
                                        Explore Package
                                    </button>

                                </div>
                            </div>


                            <!-- New York -->
                            <div class="hc-card vacation-card hc-horizontal">

                                <div class="hc-img-box">

                                    <img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?w=500&q=80"
                                        alt="New York vacation"
                                        class="hc-img">

                                </div>

                                <div class="hc-details">

                                    <div class="vac-badge">
                                        Vacation Package
                                    </div>

                                    <h3>
                                        New York, USA
                                    </h3>

                                    <p class="sub-text">
                                        Flight + Hotel + Transfer options
                                    </p>

                                    <div class="vac-includes">

                                        <span>
                                            <i class="fa-solid fa-plane"></i>
                                            Flight
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-building"></i>
                                            Hotel
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-van-shuttle"></i>
                                            Transfer
                                        </span>

                                    </div>

                                    <div class="price-display" style="margin:10px 0;">

                                        <span class="desde">From</span>
                                        <span class="price-green">$399</span>
                                        <span class="unit">/person</span>

                                    </div>

                                    <button class="btn-blue-block">
                                        Explore Package
                                    </button>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>


        </section>

        <section class="blog-section">
            <div class="container">

                <div class="blog-card-container">

                    <div class="blog-layout">

                        <!-- Left: Branding -->
                        <div class="blog-brand">

                            <div class="blog-brand-tag">
                                Global Air Hub Blog
                            </div>

                            <h2>
                                TRAVEL INSIGHTS
                            </h2>

                            <p>
                                Discover helpful travel guides, flight tips, destination
                                inspiration, airline information, and useful advice to
                                make planning your next journey easier.
                            </p>

                            <a href="#blog-articles" class="blog-view-all">
                                Explore All Articles
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>


                        <!-- Right: Articles -->
                        <div class="blog-articles" id="blog-articles">

                            <!-- Article 1 -->
                            <div class="blog-article-card">

                                <div class="bac-img">
                                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=500&q=80"
                                        alt="Airplane at airport">
                                </div>

                                <div class="bac-content">

                                    <span class="bac-date">
                                        Travel Guide
                                    </span>

                                    <h3>
                                        How to Find the Right Flight for Your Next Trip
                                    </h3>

                                    <p>
                                        Learn how to compare flight options, consider
                                        travel dates, and choose an itinerary that fits
                                        your schedule and travel needs.
                                    </p>

                                    <a href="#" class="bac-read">
                                        Read More
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                </div>
                            </div>


                            <!-- Article 2 -->
                            <div class="blog-article-card">

                                <div class="bac-img">
                                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=500&q=80"
                                        alt="Commercial airplane">
                                </div>

                                <div class="bac-content">

                                    <span class="bac-date">
                                        Flight Tips
                                    </span>

                                    <h3>
                                        Essential Tips for Booking Domestic & International Flights
                                    </h3>

                                    <p>
                                        From choosing flexible travel dates to reviewing
                                        itinerary details, discover practical tips for
                                        planning a smoother flight booking experience.
                                    </p>

                                    <a href="#" class="bac-read">
                                        Read More
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                </div>
                            </div>


                            <!-- Article 3 -->
                            <div class="blog-article-card">

                                <div class="bac-img">
                                    <img src="https://images.unsplash.com/photo-1605810230434-7631ac76ec81?w=500&q=80"
                                        alt="Travel destination and city">
                                </div>

                                <div class="bac-content">

                                    <span class="bac-date">
                                        Destination Guide
                                    </span>

                                    <h3>
                                        Top Destinations to Add to Your Travel Plans
                                    </h3>

                                    <p>
                                        Explore popular destinations around the world
                                        and discover ideas, travel tips, and inspiration
                                        for your next adventure.
                                    </p>

                                    <a href="#" class="bac-read">
                                        Read More
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </section>

        <section class="bottom-cards-section">
            <div class="container">

                <!-- Travel Benefits Card -->
                <div class="rewards-card">

                    <div class="rc-left">
                        <img src="https://images.unsplash.com/photo-1549465220-1a8b9238cd48?w=300&q=80"
                            alt="Travel benefits and flight offers"
                            class="rc-img">
                    </div>

                    <div class="rc-middle">

                        <h2>
                            PLAN YOUR TRIP WITH GLOBAL AIR HUB
                        </h2>

                        <ul class="rc-benefits">

                            <li>
                                <i class="fa-solid fa-check"></i>
                                Explore flight options to destinations worldwide
                            </li>

                            <li>
                                <i class="fa-solid fa-check"></i>
                                Compare available travel options with ease
                            </li>

                            <li>
                                <i class="fa-solid fa-check"></i>
                                Get helpful travel planning assistance
                            </li>

                            <li>
                                <i class="fa-solid fa-check"></i>
                                Enjoy a simple and convenient booking experience
                            </li>

                        </ul>

                    </div>

                    <div class="rc-right">

                        <a href="#serachform" class="btn-gradient-orange">
                            Start Planning<br>
                            Your Trip
                        </a>

                    </div>

                </div>


                <!-- SEO Text Card -->
                <div class="seo-card">

                    <h2>
                        Explore Flight Options and Plan Your Next Journey with Global Air Hub
                    </h2>

                    <p>
                        Planning your next trip starts with finding the right flight.
                        Global Air Hub helps travelers explore flight options for
                        domestic and international destinations around the world.
                        Whether you are planning a family vacation, a business trip,
                        a weekend getaway, or a long-awaited international adventure,
                        you can explore different travel options based on your plans
                        and preferences. From popular destinations to convenient
                        itineraries, our platform is designed to make your travel
                        planning experience simple and straightforward. Explore
                        available flight options and take the next step toward your
                        journey with Global Air Hub.
                    </p>

                    <a href="#" class="read-more-link">
                        Learn More
                    </a>

                </div>

            </div>


        </section>


        <!-- Footer Section -->
        <?php include('include/footer.php'); ?>
    </main>

    <!-- Script  -->
    <script src="js/main.js"></script>
    <script src="js/search-form.js"></script>

</body>

</html>
