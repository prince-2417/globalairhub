<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheap Flights - Search Flights</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/flight.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php include('include/header.php'); ?>
    <!-- Hero Banner -->
    <section class="flight-hero">
        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1400&q=80" alt="Airplane in sky" class="flight-hero-bg">
        <div class="flight-hero-content">
            <div class="promo-card">
                <h3>Online Flight Deals</h3>
                <p class="promo-tagline">Subscribe &amp; get up to $10 off. Now!</p>
                <div class="promo-form">
                    <input type="email" placeholder="E-mail Address">
                    <button type="button">Get Promo</button>
                </div>
            </div>
            <div class="super-saver">
                <span class="ss-title">Super Saver</span>
                <span class="ss-route">Los Angeles <i class="fa-solid fa-arrow-right" style="font-size:10px;"></i> Las Vegas</span>
                <div class="ss-price"><sup>$</sup>46.96<sup style="font-size:14px;">*</sup></div>
                <span class="ss-dates">19 Sep 2026 - 21 Sep 2026</span>
                <div class="ss-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
    </section>

    <!-- Search Bar -->
    <div class="flight-search-bar">
        <div class="fsb-container">
            <div class="trip-type-row">
                <label class="trip-radio"><input type="radio" name="trip" checked> Round trip</label>
                <label class="trip-radio"><input type="radio" name="trip"> Oneway</label>
            </div>
            <div class="search-inputs-row">
                <div class="si-field">
                    <i class="fa-solid fa-location-dot" style="color:#e53935;"></i>
                    <input type="text" value="Delhi(DEL), Indira Gand...">
                </div>
                <div class="si-field">
                    <i class="fa-solid fa-location-dot" style="color:#1a73e8;"></i>
                    <input type="text" placeholder="Destination">
                </div>
                <div class="si-field date-field">
                    <i class="fa-regular fa-calendar" style="color:#1a73e8;"></i>
                    <input type="text" value="07-27-2026" readonly>
                </div>
                <div class="si-field date-field">
                    <i class="fa-regular fa-calendar" style="color:#1a73e8;"></i>
                    <input type="text" value="08-01-2026" readonly>
                </div>
                <div class="si-field traveler-field">
                    <i class="fa-solid fa-user" style="color:#1a73e8;"></i>
                    <div class="select-wrapper">
                        <select>
                            <option>1 Traveler</option>
                            <option>2 Travelers</option>
                            <option>3 Travelers</option>
                            <option>4 Travelers</option>
                        </select>
                        <i class="fa-solid fa-chevron-down chevron"></i>
                    </div>
                </div>
                <div class="si-field class-field">
                    <i class="fa-solid fa-chair" style="color:#1a73e8;"></i>
                    <div class="select-wrapper">
                        <select>
                            <option>Economy</option>
                            <option>Business</option>
                            <option>First Class</option>
                            <option>Premium Economy</option>
                        </select>
                        <i class="fa-solid fa-chevron-down chevron"></i>
                    </div>
                </div>
                <button class="btn-search-flight">Search</button>
            </div>
            <div class="search-bottom-row">
                <label class="direct-flights-check"><input type="checkbox"> Direct Flights Only</label>
                <span class="unaccompanied-link">Unaccompanied Minor</span>
            </div>
        </div>
    </div>

    <!-- Reviews Marquee -->
    <section class="flt-reviews-banner">
        <div class="fsb-container">
            <div class="reviews-marquee-wrap">
                <div class="reviews-scroll">
                    <div class="rv-item"><span style="color:#00b67a;">&#9733;</span> <strong>Trustpilot</strong> &nbsp; TrustScore 4.5 | 10,379 reviews</div>
                    <div class="rv-item"><span style="color:#4a90e2;">&#9733;</span> <strong>smartcustomer</strong> &nbsp; 22,801 reviews</div>
                    <div class="rv-item">&#10003; <strong>REVIEWS</strong>.io &nbsp; 5,890 reviews</div>
                    <div class="rv-item">Reseller<strong>Ratings</strong> &nbsp; 1,167 reviews</div>
                    <div class="rv-item"><span style="color:#4285F4;font-weight:800;">G</span><span style="color:#EA4335;font-weight:800;">o</span><span style="color:#FBBC05;font-weight:800;">o</span><span style="color:#4285F4;font-weight:800;">g</span><span style="color:#34A853;font-weight:800;">l</span><span style="color:#EA4335;font-weight:800;">e</span> &nbsp; 1,605 reviews</div>
                    <div class="rv-item"><span style="color:#00b67a;">&#9733;</span> <strong>Trustpilot</strong> &nbsp; TrustScore 4.5 | 10,379 reviews</div>
                    <div class="rv-item"><span style="color:#4a90e2;">&#9733;</span> <strong>smartcustomer</strong> &nbsp; 22,801 reviews</div>
                    <div class="rv-item">&#10003; <strong>REVIEWS</strong>.io &nbsp; 5,890 reviews</div>
                    <div class="rv-item">Reseller<strong>Ratings</strong> &nbsp; 1,167 reviews</div>
                    <div class="rv-item"><span style="color:#4285F4;font-weight:800;">G</span><span style="color:#EA4335;font-weight:800;">o</span><span style="color:#FBBC05;font-weight:800;">o</span><span style="color:#4285F4;font-weight:800;">g</span><span style="color:#34A853;font-weight:800;">l</span><span style="color:#EA4335;font-weight:800;">e</span> &nbsp; 1,605 reviews</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cheap Flight Deals -->
    <section class="deals-section">
        <div class="fsb-container">

            <h2 class="deals-title">
                FEATURED FLIGHT DEALS
            </h2>

            <p class="deals-desc">
                <strong>Global Air Hub</strong> helps you explore flight options
                for popular destinations across the United States and beyond.
                Discover available fares, compare itineraries, and find travel
                options that fit your plans. Whether you're planning a weekend
                getaway, a family vacation, a business trip, or an international
                journey, explore your options and start planning with confidence.
            </p>

            <div class="deals-grid">

                <!-- Atlanta to Tampa -->
                <div class="deal-card"
                    data-from="ATL"
                    data-from-city="Atlanta"
                    data-to="TPA"
                    data-to-city="Tampa"
                    data-depart="11 Sep 2026"
                    data-return="13 Sep 2026"
                    data-price="54.96">

                    <div class="deal-left">

                        <div class="deal-dates">
                            Sep 11, 2026 - Sep 13, 2026
                        </div>

                        <div class="deal-route">

                            <div class="deal-city">
                                <span class="city-code">ATL</span>
                                <span class="city-name">Atlanta</span>
                            </div>

                            <div class="deal-line">
                                <span class="dot"></span>
                                <span class="line"></span>
                                <span class="arr">&#8594;</span>
                            </div>

                            <div class="deal-city">
                                <span class="city-code">TPA</span>
                                <span class="city-name">Tampa</span>
                            </div>

                        </div>
                    </div>

                    <div class="deal-price-col">
                        <span class="trip-type-label">Round Trip</span>
                        <span class="deal-price">$54.96<sup>*</sup></span>
                    </div>
                </div>

                <!-- Denver to Houston -->
                <div class="deal-card"
                    data-from="DEN"
                    data-from-city="Denver"
                    data-to="HOU"
                    data-to-city="Houston"
                    data-depart="19 Sep 2026"
                    data-return="28 Sep 2026"
                    data-price="75.97">

                    <div class="deal-left">

                        <div class="deal-dates">
                            Sep 19, 2026 - Sep 28, 2026
                        </div>

                        <div class="deal-route">

                            <div class="deal-city">
                                <span class="city-code">DEN</span>
                                <span class="city-name">Denver</span>
                            </div>

                            <div class="deal-line">
                                <span class="dot"></span>
                                <span class="line"></span>
                                <span class="arr">&#8594;</span>
                            </div>

                            <div class="deal-city">
                                <span class="city-code">HOU</span>
                                <span class="city-name">Houston</span>
                            </div>

                        </div>
                    </div>

                    <div class="deal-price-col">
                        <span class="trip-type-label">Round Trip</span>
                        <span class="deal-price">$75.97<sup>*</sup></span>
                    </div>
                </div>

                <!-- Dallas to Phoenix -->
                <div class="deal-card"
                    data-from="DFW"
                    data-from-city="Dallas"
                    data-to="PHX"
                    data-to-city="Phoenix"
                    data-depart="18 Sep 2026"
                    data-return="28 Sep 2026"
                    data-price="126.96">

                    <div class="deal-left">

                        <div class="deal-dates">
                            Sep 18, 2026 - Sep 28, 2026
                        </div>

                        <div class="deal-route">

                            <div class="deal-city">
                                <span class="city-code">DFW</span>
                                <span class="city-name">Dallas</span>
                            </div>

                            <div class="deal-line">
                                <span class="dot"></span>
                                <span class="line"></span>
                                <span class="arr">&#8594;</span>
                            </div>

                            <div class="deal-city">
                                <span class="city-code city-orange">PHX</span>
                                <span class="city-name city-orange">Phoenix</span>
                            </div>

                        </div>
                    </div>

                    <div class="deal-price-col">
                        <span class="trip-type-label">Round Trip</span>
                        <span class="deal-price">$126.96<sup>*</sup></span>
                    </div>

                </div>


                <!-- Washington to Boston -->
                <div class="deal-card"
                    data-from="WAS"
                    data-from-city="Washington"
                    data-to="BOS"
                    data-to-city="Boston"
                    data-depart="05 Sep 2026"
                    data-return="07 Sep 2026"
                    data-price="192.84">

                    <div class="deal-left">

                        <div class="deal-dates">
                            Sep 05, 2026 - Sep 07, 2026
                        </div>

                        <div class="deal-route">

                            <div class="deal-city">
                                <span class="city-code">WAS</span>
                                <span class="city-name">Washington</span>
                            </div>

                            <div class="deal-line">
                                <span class="dot"></span>
                                <span class="line"></span>
                                <span class="arr">&#8594;</span>
                            </div>

                            <div class="deal-city">
                                <span class="city-code">BOS</span>
                                <span class="city-name">Boston</span>
                            </div>

                        </div>
                    </div>

                    <div class="deal-price-col">
                        <span class="trip-type-label">Round Trip</span>
                        <span class="deal-price">$192.84<sup>*</sup></span>
                    </div>

                </div>

                <!-- San Francisco to Dallas -->
                <div class="deal-card"
                    data-from="SFO"
                    data-from-city="San Francisco"
                    data-to="DFW"
                    data-to-city="Dallas"
                    data-depart="03 Oct 2026"
                    data-return="06 Oct 2026"
                    data-price="196.96">

                    <div class="deal-left">

                        <div class="deal-dates">
                            Oct 03, 2026 - Oct 06, 2026
                        </div>

                        <div class="deal-route">

                            <div class="deal-city">
                                <span class="city-code">SFO</span>
                                <span class="city-name">San Francisco</span>
                            </div>

                            <div class="deal-line">
                                <span class="dot"></span>
                                <span class="line"></span>
                                <span class="arr">&#8594;</span>
                            </div>

                            <div class="deal-city">
                                <span class="city-code">DFW</span>
                                <span class="city-name">Dallas</span>
                            </div>

                        </div>
                    </div>
                    <div class="deal-price-col">
                        <span class="trip-type-label">Round Trip</span>
                        <span class="deal-price">$196.96<sup>*</sup></span>
                    </div>
                </div>

                <!-- Boston to Chicago -->
                <div class="deal-card"
                    data-from="BOS"
                    data-from-city="Boston"
                    data-to="CHI"
                    data-to-city="Chicago"
                    data-depart="22 Oct 2026"
                    data-return="25 Oct 2026"
                    data-price="222.54">

                    <div class="deal-left">

                        <div class="deal-dates">
                            Oct 22, 2026 - Oct 25, 2026
                        </div>

                        <div class="deal-route">

                            <div class="deal-city">
                                <span class="city-code">BOS</span>
                                <span class="city-name">Boston</span>
                            </div>

                            <div class="deal-line">
                                <span class="dot"></span>
                                <span class="line"></span>
                                <span class="arr">&#8594;</span>
                            </div>

                            <div class="deal-city">
                                <span class="city-code">CHI</span>
                                <span class="city-name">Chicago</span>
                            </div>

                        </div>
                    </div>

                    <div class="deal-price-col">
                        <span class="trip-type-label">Round Trip</span>
                        <span class="deal-price">$222.54<sup>*</sup></span>
                    </div>
                </div>

                <!-- New York to Cleveland -->
                <div class="deal-card"
                    data-from="NYC"
                    data-from-city="New York"
                    data-to="CLE"
                    data-to-city="Cleveland"
                    data-depart="03 Sep 2026"
                    data-return="07 Sep 2026"
                    data-price="236.79">

                    <div class="deal-left">

                        <div class="deal-dates">
                            Sep 03, 2026 - Sep 07, 2026
                        </div>

                        <div class="deal-route">

                            <div class="deal-city">
                                <span class="city-code">NYC</span>
                                <span class="city-name">New York</span>
                            </div>

                            <div class="deal-line">
                                <span class="dot"></span>
                                <span class="line"></span>
                                <span class="arr">&#8594;</span>
                            </div>

                            <div class="deal-city">
                                <span class="city-code">CLE</span>
                                <span class="city-name">Cleveland</span>
                            </div>

                        </div>
                    </div>

                    <div class="deal-price-col">
                        <span class="trip-type-label">Round Trip</span>
                        <span class="deal-price">$236.79<sup>*</sup></span>
                    </div>

                </div>

                <!-- Chicago to Vancouver -->
                <div class="deal-card"
                    data-from="CHI"
                    data-from-city="Chicago"
                    data-to="YVR"
                    data-to-city="Vancouver"
                    data-depart="16 Sep 2026"
                    data-return="20 Sep 2026"
                    data-price="359.39">

                    <div class="deal-left">

                        <div class="deal-dates">
                            Sep 16, 2026 - Sep 20, 2026
                        </div>

                        <div class="deal-route">

                            <div class="deal-city">
                                <span class="city-code">CHI</span>
                                <span class="city-name">Chicago</span>
                            </div>

                            <div class="deal-line">
                                <span class="dot"></span>
                                <span class="line"></span>
                                <span class="arr">&#8594;</span>
                            </div>

                            <div class="deal-city">
                                <span class="city-code">YVR</span>
                                <span class="city-name">Vancouver</span>
                            </div>

                        </div>
                    </div>

                    <div class="deal-price-col">
                        <span class="trip-type-label">Round Trip</span>
                        <span class="deal-price">$359.39<sup>*</sup></span>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- CTA Section -->
    <section class="flt-cta-section">
        <div class="flt-cta-inner">
            <div class="flt-cta-left">
                <div class="flt-cta-badge">
                    <i class="fa-solid fa-headset"></i> 24/7 Travel Support
                </div>


                <h2>
                    Find Great Flight Deals
                    <span>With Global Air Hub!</span>
                </h2>

                <p>
                    Skip the hassle of searching through endless options. Our travel experts
                    help you find competitive airfare and the right flight options for your journey.
                    Call us today for personalized assistance.
                </p>

                <ul class="flt-cta-perks">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        Personalized flight assistance
                    </li>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        Competitive airfare options
                    </li>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        Fast and convenient booking support
                    </li>
                </ul>
            </div>

            <div class="flt-cta-right">
                <div class="flt-cta-card">
                    <div class="flt-cta-phone-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>

                    <p class="flt-cta-card-label">
                        Speak With a Travel Expert
                    </p>

                    <a href="tel:+12163022732" class="flt-cta-number">
                        +1-216-302-2732
                    </a>

                    <p class="flt-cta-avail">
                        Travel assistance available 24/7
                    </p>

                    <a href="tel:+12163022732" class="flt-cta-call-btn">
                        <i class="fa-solid fa-phone"></i> Call Now
                    </a>

                    <a href="#" class="flt-cta-chat-btn">
                        <i class="fa-regular fa-comment-dots"></i> Chat With Us
                    </a>
                </div>
            </div>
        </div>


    </section>

    <!-- Popular Destinations -->
    <section class="flt-dest-section">
        <div class="fsb-container">


            <div class="flt-dest-header">
                <h2>POPULAR DESTINATIONS</h2>
                <p>
                    Discover exciting destinations around the world with Global Air Hub.
                    Explore popular routes and find great airfare options for your next journey.
                </p>
            </div>

            <div class="flt-dest-grid">

                <!-- New York -->
                <div class="flt-dest-card flt-dest-big">
                    <img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?w=800&q=80"
                        alt="New York City">
                    <div class="flt-dest-overlay"></div>

                    <div class="flt-dest-info">
                        <span class="flt-dest-name">New York</span>
                        <span class="flt-dest-price">Explore Flight Options*</span>
                        <a href="#" class="flt-dest-link">
                            Explore <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Paris -->
                <div class="flt-dest-card">
                    <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=600&q=80"
                        alt="Paris France">
                    <div class="flt-dest-overlay"></div>

                    <div class="flt-dest-info">
                        <span class="flt-dest-name">Paris</span>
                        <span class="flt-dest-price">Explore Flight Options*</span>
                        <a href="#" class="flt-dest-link">
                            Explore <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Dubai -->
                <div class="flt-dest-card">
                    <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=600&q=80"
                        alt="Dubai United Arab Emirates">
                    <div class="flt-dest-overlay"></div>

                    <div class="flt-dest-info">
                        <span class="flt-dest-name">Dubai</span>
                        <span class="flt-dest-price">Explore Flight Options*</span>
                        <a href="#" class="flt-dest-link">
                            Explore <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Cancun -->
                <div class="flt-dest-card">
                    <img src="https://images.unsplash.com/photo-1510097467424-192d713fd8b2?w=600&q=80"
                        alt="Cancun Mexico">
                    <div class="flt-dest-overlay"></div>

                    <div class="flt-dest-info">
                        <span class="flt-dest-name">Cancun</span>
                        <span class="flt-dest-price">Explore Flight Options*</span>
                        <a href="#" class="flt-dest-link">
                            Explore <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- London -->
                <div class="flt-dest-card">
                    <img src="https://images.unsplash.com/photo-1505327191481-d35259e82c58?w=600&q=80"
                        alt="London United Kingdom">
                    <div class="flt-dest-overlay"></div>

                    <div class="flt-dest-info">
                        <span class="flt-dest-name">London</span>
                        <span class="flt-dest-price">Explore Flight Options*</span>
                        <a href="#" class="flt-dest-link">
                            Explore <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>


    </section>


    <!-- Booking Modal -->
    <div class="booking-modal-overlay" id="bookingModal">
        <div class="booking-modal">
   
            <button class="modal-close" id="modalClose" aria-label="Close booking search">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="modal-header">

                <div class="modal-route-info">

                    <div class="modal-city">
                        <span class="modal-code" id="modalFrom">JFK</span>
                        <span class="modal-city-name" id="modalFromCity">New York</span>
                    </div>

                    <div class="modal-route-arrow">
                        <i class="fa-solid fa-plane"></i>
                    </div>

                    <div class="modal-city">
                        <span class="modal-code" id="modalTo">LHR</span>
                        <span class="modal-city-name" id="modalToCity">London</span>
                    </div>

                </div>

                <div class="modal-price-badge">
                    <span class="modal-price-label">Flight Options From</span>
                    <span class="modal-price-val">
                        $<span id="modalPrice">199</span>*
                    </span>
                    <span class="modal-price-type">Round Trip / Traveler</span>
                </div>

            </div>

            <div class="modal-body">

                <form class="booking-form" onsubmit="return false;">

                    <!-- Trip Type -->
                    <div class="modal-trip-row">

                        <label class="modal-radio">
                            <input type="radio" name="mtrip" value="roundtrip" checked>
                            Round Trip
                        </label>

                        <label class="modal-radio">
                            <input type="radio" name="mtrip" value="oneway">
                            One Way
                        </label>

                    </div>

                    <!-- Search Fields -->
                    <div class="modal-search-grid">

                        <!-- From -->
                        <div class="msi-field">
                            <i class="fa-solid fa-location-dot" style="color:#e53935;"></i>
                            <input
                                type="text"
                                id="modalFromInput"
                                placeholder="From – City or Airport"
                                autocomplete="off">
                        </div>

                        <!-- Destination -->
                        <div class="msi-field">
                            <i class="fa-solid fa-location-dot" style="color:#1a73e8;"></i>
                            <input
                                type="text"
                                id="modalToInput"
                                placeholder="To – City or Airport"
                                autocomplete="off">
                        </div>

                        <!-- Departure -->
                        <div class="msi-field">
                            <i class="fa-regular fa-calendar" style="color:#1a73e8;"></i>
                            <input
                                type="text"
                                id="modalDepart"
                                placeholder="Departure Date"
                                readonly>
                        </div>

                        <!-- Return -->
                        <div class="msi-field">
                            <i class="fa-regular fa-calendar" style="color:#1a73e8;"></i>
                            <input
                                type="text"
                                id="modalReturn"
                                placeholder="Return Date"
                                readonly>
                        </div>

                        <!-- Travelers -->
                        <div class="msi-field">
                            <i class="fa-solid fa-user" style="color:#1a73e8;"></i>

                            <select id="modalTravelers">
                                <option value="1">1 Traveler</option>
                                <option value="2">2 Travelers</option>
                                <option value="3">3 Travelers</option>
                                <option value="4">4 Travelers</option>
                                <option value="5">5 Travelers</option>
                                <option value="6">6 Travelers</option>
                                <option value="7">7 Travelers</option>
                                <option value="8">8 Travelers</option>
                                <option value="9">9 Travelers</option>
                            </select>
                        </div>

                        <!-- Cabin Class -->
                        <div class="msi-field">
                            <i class="fa-solid fa-chair" style="color:#1a73e8;"></i>

                            <select id="modalCabin">
                                <option value="economy">Economy</option>
                                <option value="premium-economy">Premium Economy</option>
                                <option value="business">Business Class</option>
                                <option value="first">First Class</option>
                            </select>
                        </div>

                    </div>

                    <!-- Additional Options -->
                    <div class="modal-bottom-row">

                        <label class="modal-check">
                            <input type="checkbox" id="directFlights">
                            Direct Flights Only
                        </label>

                        <label class="modal-check">
                            <input type="checkbox" id="minorTraveler">
                            Traveling with an Unaccompanied Minor
                        </label>

                    </div>

                    <!-- Actions -->
                    <div class="bform-actions">

                        <button
                            type="button"
                            class="btn-cancel"
                            id="btnCancel">
                            Cancel
                        </button>

                        <button
                            type="submit"
                            class="btn-book">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Search Flights
                        </button>

                    </div>

                    <p class="modal-disclaimer">
                        *Displayed fares are subject to availability and may change at the time of booking.
                    </p>

                </form>

            </div>

        </div>
 

    </div>



    <?php include('include/footer.php'); ?>

    <script>
        const cards = document.querySelectorAll('.deal-card');
        const modal = document.getElementById('bookingModal');
        const modalClose = document.getElementById('modalClose');
        const btnCancel = document.getElementById('btnCancel');

        cards.forEach(card => {
            card.addEventListener('click', () => {
                document.getElementById('modalFrom').textContent = card.dataset.from;
                document.getElementById('modalFromCity').textContent = card.dataset.fromCity;
                document.getElementById('modalTo').textContent = card.dataset.to;
                document.getElementById('modalToCity').textContent = card.dataset.toCity;
                document.getElementById('modalDepart').value = card.dataset.depart;
                document.getElementById('modalReturn').value = card.dataset.return;
                document.getElementById('modalPrice').textContent = card.dataset.price;
                document.getElementById('modalFromInput').value = card.dataset.from + ' - ' + card.dataset.fromCity;
                document.getElementById('modalToInput').value = card.dataset.to + ' - ' + card.dataset.toCity;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeModal() {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        modalClose.addEventListener('click', closeModal);
        btnCancel.addEventListener('click', closeModal);
        modal.addEventListener('click', e => {
            if (e.target === modal) closeModal();
        });
    </script>
    <script src="js/main.js"></script>

</body>

</html>