<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Results - New York to Los Angeles | Global Air Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/flight.css">
    <link rel="stylesheet" href="css/flights-results.css">
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- Hero Section -->
    <section class="fr-hero">
        <div class="fr-hero-bg"></div>
        <div class="fr-hero-content">
            <div class="fr-hero-copy">
                <span class="fr-hero-tag">Flight Search</span>
                <h1>Find the best flights from New York to Los Angeles</h1>
                <p>Compare top airlines, save on round-trip fares, and book the perfect flight in seconds.</p>
                <a href="http://localhost/cheap/flights-results.php#" class="fr-hero-cta">View Latest Deals</a>
            </div>
            <div class="fr-hero-stats">
                <div><strong>48</strong> flights today</div>
                <div><strong>4.8/5</strong> traveler rating</div>
                <div><strong>24/7</strong> support available</div>
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
                    <input type="text" value="New York (JFK)">
                </div>
                <div class="si-field">
                    <i class="fa-solid fa-location-dot" style="color:#1a73e8;"></i>
                    <input type="text" value="Los Angeles (LAX)">
                </div>
                <div class="si-field date-field">
                    <i class="fa-regular fa-calendar" style="color:#1a73e8;"></i>
                    <input type="text" value="07-27-2026" readonly>
                </div>
                <div class="si-field date-field">
                    <i class="fa-regular fa-calendar" style="color:#1a73e8;"></i>
                    <input type="text" value="08-03-2026" readonly>
                </div>
                <div class="si-field traveler-field">
                    <i class="fa-solid fa-user" style="color:#1a73e8;"></i>
                    <div class="select-wrapper">
                        <select>
                            <option>1 Traveler</option>
                            <option>2 Travelers</option>
                            <option>3 Travelers</option>
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

    <!-- Results Page -->
    <div class="fr-page">
        <div class="fr-container">

   
            <!-- LEFT: FILTERS -->
            <aside class="fr-filters">

                <div class="fr-filter-header">
                    <span>Refine Your Search</span>
                    <button class="fr-reset-btn">Reset All</button>
                </div>

                <!-- Stops -->
                <div class="fr-filter-group">
                    <div class="fr-filter-title">Stops</div>

                    <label class="fr-check-item">
                        <input type="checkbox" value="0" checked>
                        <span class="fr-check-label">Non-stop <span class="fr-count">(12)</span></span>
                        <span class="fr-check-price">from $189</span>
                    </label>

                    <label class="fr-check-item">
                        <input type="checkbox" value="1" checked>
                        <span class="fr-check-label">1 Stop <span class="fr-count">(28)</span></span>
                        <span class="fr-check-price">from $149</span>
                    </label>

                    <label class="fr-check-item">
                        <input type="checkbox" value="2" checked>
                        <span class="fr-check-label">2+ Stops <span class="fr-count">(8)</span></span>
                        <span class="fr-check-price">from $119</span>
                    </label>
                </div>

                <!-- Airlines -->
                <div class="fr-filter-group">
                    <div class="fr-filter-title">Airlines</div>

                    <label class="fr-check-item">
                        <input type="checkbox" value="american" checked>
                        <span class="fr-check-label">American Airlines</span>
                        <span class="fr-check-price">$149</span>
                    </label>

                    <label class="fr-check-item">
                        <input type="checkbox" value="delta" checked>
                        <span class="fr-check-label">Delta Air Lines</span>
                        <span class="fr-check-price">$159</span>
                    </label>

                    <label class="fr-check-item">
                        <input type="checkbox" value="united" checked>
                        <span class="fr-check-label">United Airlines</span>
                        <span class="fr-check-price">$169</span>
                    </label>

                    <label class="fr-check-item">
                        <input type="checkbox" value="southwest" checked>
                        <span class="fr-check-label">Southwest Airlines</span>
                        <span class="fr-check-price">$139</span>
                    </label>

                    <label class="fr-check-item">
                        <input type="checkbox" value="jetblue" checked>
                        <span class="fr-check-label">JetBlue Airways</span>
                        <span class="fr-check-price">$145</span>
                    </label>

                    <label class="fr-check-item">
                        <input type="checkbox" value="spirit" checked>
                        <span class="fr-check-label">Spirit Airlines</span>
                        <span class="fr-check-price">$89</span>
                    </label>
                </div>

                <!-- Price Range -->
                <div class="fr-filter-group">
                    <div class="fr-filter-title">Price Range</div>

                    <div class="fr-price-range">
                        <input
                            type="range"
                            min="50"
                            max="800"
                            value="800"
                            class="fr-range-slider"
                            id="priceRange">

                        <div class="fr-price-labels">
                            <span>$50</span>
                            <span id="priceVal">$800</span>
                        </div>
                    </div>
                </div>

                <!-- Departure Time -->
                <div class="fr-filter-group">
                    <div class="fr-filter-title">Departure Time</div>

                    <div class="fr-time-grid">

                        <label class="fr-time-btn active">
                            <input type="checkbox" value="morning" checked>
                            <i class="fa-solid fa-sun"></i>
                            <span>Morning</span>
                            <small>6am–12pm</small>
                        </label>

                        <label class="fr-time-btn active">
                            <input type="checkbox" value="afternoon" checked>
                            <i class="fa-solid fa-cloud-sun"></i>
                            <span>Afternoon</span>
                            <small>12pm–6pm</small>
                        </label>

                        <label class="fr-time-btn active">
                            <input type="checkbox" value="evening" checked>
                            <i class="fa-solid fa-moon"></i>
                            <span>Evening</span>
                            <small>6pm–12am</small>
                        </label>

                        <label class="fr-time-btn active">
                            <input type="checkbox" value="night" checked>
                            <i class="fa-solid fa-star"></i>
                            <span>Night</span>
                            <small>12am–6am</small>
                        </label>

                    </div>
                </div>

                <!-- Maximum Duration -->
                <div class="fr-filter-group">
                    <div class="fr-filter-title">Maximum Duration</div>

                    <div class="fr-price-range">
                        <input
                            type="range"
                            min="3"
                            max="24"
                            value="24"
                            class="fr-range-slider"
                            id="durationRange">

                        <div class="fr-price-labels">
                            <span>3h</span>
                            <span id="durationVal">24h</span>
                        </div>
                    </div>
                </div>

                <!-- Global Air Hub CTA -->
                <div class="fr-filter-cta">
                    <i class="fa-solid fa-headset"></i>

                    <p>
                        Need help finding the right flight?
                    </p>

                    <a href="tel:+12163022732" class="fr-cta-call-btn">
                        <i class="fa-solid fa-phone"></i>
                        +1-216-302-2732
                    </a>

                    <span>
                        Global Air Hub Travel Support • Available 24/7
                    </span>
                </div>

            </aside>


            <!-- RIGHT: FLIGHT RESULTS -->
            <div class="fr-results">

                <!-- Results Header -->
                <div class="fr-results-header">

                    <div class="fr-results-info">

                        <h1 class="fr-results-title">
                            New York
                            <i class="fa-solid fa-arrow-right-long"></i>
                            Los Angeles
                        </h1>

                        <p class="fr-results-meta">
                            Jul 27 – Aug 3, 2026
                            &bull;
                            1 Traveler
                            &bull;
                            Economy
                            &bull;
                            <strong>
                                <span id="resultsCount">6</span>
                                flight options found
                            </strong>
                        </p>

                    </div>

                    <div class="fr-sort-row">
                        <span class="fr-sort-label">Sort by:</span>

                        <select class="fr-sort-select">
                            <option>Cheapest</option>
                            <option>Fastest</option>
                            <option>Recommended</option>
                            <option>Departure Time</option>
                            <option>Arrival Time</option>
                        </select>
                    </div>

                </div>


                <!-- Global Air Hub Call Banner -->
                <div class="fr-call-banner">

                    <div class="fr-call-banner-left">

                        <i class="fa-solid fa-phone-volume"></i>

                        <div>
                            <strong>
                                Get Personalized Flight Assistance
                            </strong>

                            <span>
                                Speak with a Global Air Hub travel expert for help
                                comparing flight options and finding the right fare.
                            </span>
                        </div>

                    </div>

                    <a
                        href="tel:+12163022732"
                        class="fr-call-banner-btn">
                        <i class="fa-solid fa-phone"></i>
                        Call +1-216-302-2732
                    </a>

                </div>


                <!-- CARD 1 -->
                <div
                    class="fr-flight-card best-deal"
                    data-airline="american"
                    data-stops="0"
                    data-price="189"
                    data-departure="morning"
                    data-duration="5.5">

                    <div class="fr-badge">Recommended</div>

                    <div class="fr-card-main">

                        <div class="fr-airline-col">
                            <div class="fr-airline-logo aa-logo">AA</div>
                            <span class="fr-airline-name">American Airlines</span>
                            <span class="fr-flight-no">AA 2341</span>
                        </div>

                        <div class="fr-flight-times">

                            <div class="fr-time-block">
                                <span class="fr-time">06:00</span>
                                <span class="fr-airport">JFK</span>
                            </div>

                            <div class="fr-duration-col">
                                <span class="fr-dur-time">5h 30m</span>

                                <div class="fr-dur-line">
                                    <span class="fr-dur-dot"></span>
                                    <span class="fr-dur-track"></span>
                                    <i class="fa-solid fa-plane fr-plane-icon"></i>
                                    <span class="fr-dur-track"></span>
                                    <span class="fr-dur-dot"></span>
                                </div>

                                <span class="fr-stops-label nonstop">
                                    Non-stop
                                </span>
                            </div>

                            <div class="fr-time-block right">
                                <span class="fr-time">09:30</span>
                                <span class="fr-airport">LAX</span>
                            </div>

                        </div>

                        <div class="fr-price-col">
                            <span class="fr-per-person">per traveler</span>
                            <span class="fr-price">$189</span>
                            <span class="fr-price-type">Round Trip</span>

                            <a href="tel:+12163022732" class="fr-book-btn">
                                Select Flight
                            </a>
                        </div>

                    </div>

                    <div class="fr-card-footer">
                        <span>
                            <i class="fa-solid fa-suitcase-rolling"></i>
                            Carry-on included
                        </span>

                        <span>
                            <i class="fa-solid fa-wifi"></i>
                            Wi-Fi available
                        </span>

                        <span>
                            <i class="fa-solid fa-utensils"></i>
                            In-flight service
                        </span>

                        <button class="fr-details-btn">
                            Flight Details
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </div>

                </div>


                <!-- CARD 2 -->
                <div
                    class="fr-flight-card"
                    data-airline="delta"
                    data-stops="0"
                    data-price="209"
                    data-departure="morning"
                    data-duration="5.75">

                    <div class="fr-card-main">

                        <div class="fr-airline-col">
                            <div class="fr-airline-logo dl-logo">DL</div>
                            <span class="fr-airline-name">Delta Air Lines</span>
                            <span class="fr-flight-no">DL 1892</span>
                        </div>

                        <div class="fr-flight-times">

                            <div class="fr-time-block">
                                <span class="fr-time">08:15</span>
                                <span class="fr-airport">JFK</span>
                            </div>

                            <div class="fr-duration-col">
                                <span class="fr-dur-time">5h 45m</span>

                                <div class="fr-dur-line">
                                    <span class="fr-dur-dot"></span>
                                    <span class="fr-dur-track"></span>
                                    <i class="fa-solid fa-plane fr-plane-icon"></i>
                                    <span class="fr-dur-track"></span>
                                    <span class="fr-dur-dot"></span>
                                </div>

                                <span class="fr-stops-label nonstop">
                                    Non-stop
                                </span>
                            </div>

                            <div class="fr-time-block right">
                                <span class="fr-time">14:00</span>
                                <span class="fr-airport">LAX</span>
                            </div>

                        </div>

                        <div class="fr-price-col">
                            <span class="fr-per-person">per traveler</span>
                            <span class="fr-price">$209</span>
                            <span class="fr-price-type">Round Trip</span>

                            <a href="tel:+12163022732" class="fr-book-btn">
                                Select Flight
                            </a>
                        </div>

                    </div>

                    <div class="fr-card-footer">
                        <span>
                            <i class="fa-solid fa-suitcase-rolling"></i>
                            Carry-on included
                        </span>

                        <span>
                            <i class="fa-solid fa-wifi"></i>
                            Wi-Fi available
                        </span>

                        <button class="fr-details-btn">
                            Flight Details
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </div>

                </div>


                <!-- CARD 3 -->
                <div
                    class="fr-flight-card"
                    data-airline="united"
                    data-stops="1"
                    data-price="169"
                    data-departure="morning"
                    data-duration="8.25">

                    <div class="fr-card-main">

                        <div class="fr-airline-col">
                            <div class="fr-airline-logo ua-logo">UA</div>
                            <span class="fr-airline-name">United Airlines</span>
                            <span class="fr-flight-no">UA 4421</span>
                        </div>

                        <div class="fr-flight-times">

                            <div class="fr-time-block">
                                <span class="fr-time">10:30</span>
                                <span class="fr-airport">JFK</span>
                            </div>

                            <div class="fr-duration-col">
                                <span class="fr-dur-time">8h 15m</span>

                                <div class="fr-dur-line">
                                    <span class="fr-dur-dot"></span>
                                    <span class="fr-dur-track"></span>
                                    <i class="fa-solid fa-plane fr-plane-icon"></i>
                                    <span class="fr-dur-track"></span>
                                    <span class="fr-dur-dot"></span>
                                </div>

                                <span class="fr-stops-label one-stop">
                                    1 Stop · ORD
                                </span>
                            </div>

                            <div class="fr-time-block right">
                                <span class="fr-time">18:45</span>
                                <span class="fr-airport">LAX</span>
                            </div>

                        </div>

                        <div class="fr-price-col">
                            <span class="fr-per-person">per traveler</span>
                            <span class="fr-price">$169</span>
                            <span class="fr-price-type">Round Trip</span>

                            <a href="tel:+12163022732" class="fr-book-btn">
                                Select Flight
                            </a>
                        </div>

                    </div>

                    <div class="fr-card-footer">

                        <span>
                            <i class="fa-solid fa-suitcase-rolling"></i>
                            Carry-on included
                        </span>

                        <span>
                            <i class="fa-solid fa-clock"></i>
                            1h 30m layover at ORD
                        </span>

                        <button class="fr-details-btn">
                            Flight Details
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>

                    </div>

                </div>


                <!-- CARD 4 -->
                <div
                    class="fr-flight-card"
                    data-airline="jetblue"
                    data-stops="0"
                    data-price="225"
                    data-departure="afternoon"
                    data-duration="6">

                    <div class="fr-card-main">

                        <div class="fr-airline-col">
                            <div class="fr-airline-logo b6-logo">B6</div>
                            <span class="fr-airline-name">JetBlue Airways</span>
                            <span class="fr-flight-no">B6 0721</span>
                        </div>

                        <div class="fr-flight-times">

                            <div class="fr-time-block">
                                <span class="fr-time">13:00</span>
                                <span class="fr-airport">JFK</span>
                            </div>

                            <div class="fr-duration-col">
                                <span class="fr-dur-time">6h 00m</span>

                                <div class="fr-dur-line">
                                    <span class="fr-dur-dot"></span>
                                    <span class="fr-dur-track"></span>
                                    <i class="fa-solid fa-plane fr-plane-icon"></i>
                                    <span class="fr-dur-track"></span>
                                    <span class="fr-dur-dot"></span>
                                </div>

                                <span class="fr-stops-label nonstop">
                                    Non-stop
                                </span>
                            </div>

                            <div class="fr-time-block right">
                                <span class="fr-time">19:00</span>
                                <span class="fr-airport">LAX</span>
                            </div>

                        </div>

                        <div class="fr-price-col">
                            <span class="fr-per-person">per traveler</span>
                            <span class="fr-price">$225</span>
                            <span class="fr-price-type">Round Trip</span>

                            <a href="tel:+12163022732" class="fr-book-btn">
                                Select Flight
                            </a>
                        </div>

                    </div>

                    <div class="fr-card-footer">

                        <span>
                            <i class="fa-solid fa-suitcase-rolling"></i>
                            Carry-on included
                        </span>

                        <span>
                            <i class="fa-solid fa-wifi"></i>
                            Free Wi-Fi
                        </span>

                        <span>
                            <i class="fa-solid fa-tv"></i>
                            Live TV
                        </span>

                        <button class="fr-details-btn">
                            Flight Details
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>

                    </div>

                </div>


                <!-- CARD 5 -->
                <div
                    class="fr-flight-card"
                    data-airline="southwest"
                    data-stops="1"
                    data-price="139"
                    data-departure="morning"
                    data-duration="9.33">

                    <div class="fr-card-main">

                        <div class="fr-airline-col">
                            <div class="fr-airline-logo wn-logo">WN</div>
                            <span class="fr-airline-name">Southwest Airlines</span>
                            <span class="fr-flight-no">WN 3302</span>
                        </div>

                        <div class="fr-flight-times">

                            <div class="fr-time-block">
                                <span class="fr-time">07:45</span>
                                <span class="fr-airport">JFK</span>
                            </div>

                            <div class="fr-duration-col">
                                <span class="fr-dur-time">9h 20m</span>

                                <div class="fr-dur-line">
                                    <span class="fr-dur-dot"></span>
                                    <span class="fr-dur-track"></span>
                                    <i class="fa-solid fa-plane fr-plane-icon"></i>
                                    <span class="fr-dur-track"></span>
                                    <span class="fr-dur-dot"></span>
                                </div>

                                <span class="fr-stops-label one-stop">
                                    1 Stop · MDW
                                </span>
                            </div>

                            <div class="fr-time-block right">
                                <span class="fr-time">17:05</span>
                                <span class="fr-airport">LAX</span>
                            </div>

                        </div>

                        <div class="fr-price-col">
                            <span class="fr-per-person">per traveler</span>
                            <span class="fr-price">$139</span>
                            <span class="fr-price-type">Round Trip</span>

                            <a href="tel:+12163022732" class="fr-book-btn">
                                Select Flight
                            </a>
                        </div>

                    </div>

                    <div class="fr-card-footer">

                        <span>
                            <i class="fa-solid fa-suitcase"></i>
                            2 bags included
                        </span>

                        <span>
                            <i class="fa-solid fa-clock"></i>
                            2h 10m layover at MDW
                        </span>

                        <button class="fr-details-btn">
                            Flight Details
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>

                    </div>

                </div>


                <!-- CARD 6 -->
                <div
                    class="fr-flight-card"
                    data-airline="american"
                    data-stops="0"
                    data-price="199"
                    data-departure="afternoon"
                    data-duration="5.67">

                    <div class="fr-card-main">

                        <div class="fr-airline-col">
                            <div class="fr-airline-logo aa-logo">AA</div>
                            <span class="fr-airline-name">American Airlines</span>
                            <span class="fr-flight-no">AA 5512</span>
                        </div>

                        <div class="fr-flight-times">

                            <div class="fr-time-block">
                                <span class="fr-time">16:20</span>
                                <span class="fr-airport">JFK</span>
                            </div>

                            <div class="fr-duration-col">
                                <span class="fr-dur-time">5h 40m</span>

                                <div class="fr-dur-line">
                                    <span class="fr-dur-dot"></span>
                                    <span class="fr-dur-track"></span>
                                    <i class="fa-solid fa-plane fr-plane-icon"></i>
                                    <span class="fr-dur-track"></span>
                                    <span class="fr-dur-dot"></span>
                                </div>

                                <span class="fr-stops-label nonstop">
                                    Non-stop
                                </span>
                            </div>

                            <div class="fr-time-block right">
                                <span class="fr-time">22:00</span>
                                <span class="fr-airport">LAX</span>
                            </div>

                        </div>

                        <div class="fr-price-col">
                            <span class="fr-per-person">per traveler</span>
                            <span class="fr-price">$199</span>
                            <span class="fr-price-type">Round Trip</span>

                            <a href="tel:+12163022732" class="fr-book-btn">
                                Select Flight
                            </a>
                        </div>

                    </div>

                    <div class="fr-card-footer">

                        <span>
                            <i class="fa-solid fa-suitcase-rolling"></i>
                            Carry-on included
                        </span>

                        <span>
                            <i class="fa-solid fa-wifi"></i>
                            Wi-Fi available
                        </span>

                        <button class="fr-details-btn">
                            Flight Details
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>

                    </div>

                </div>


                <!-- Load More -->
                <div class="fr-load-more">

                    <button class="fr-load-btn">
                        Load More Flight Options
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>

                    <p>
                        Showing 6 of 48 available flight options
                    </p>

                </div>

            </div>
        </div>
 

    </div>


    <?php include 'include/footer.php'; ?>

    <script>
        const priceRange = document.getElementById('priceRange');
        const priceVal = document.getElementById('priceVal');
        const durRange = document.getElementById('durationRange');
        const durVal = document.getElementById('durationVal');
        const resultsCount = document.getElementById('resultsCount');
        const resultSummary = document.querySelector('.fr-load-more p');
        const flightCards = [...document.querySelectorAll('.fr-flight-card')];
        const filterGroups = document.querySelectorAll('.fr-filter-group');
        const stopInputs = [...filterGroups[0].querySelectorAll('input[type="checkbox"]')];
        const airlineInputs = [...filterGroups[1].querySelectorAll('input[type="checkbox"]')];
        const timeInputs = [...document.querySelectorAll('.fr-time-btn input')];

        function selectedValues(inputs) {
            return inputs.filter(input => input.checked).map(input => input.value);
        }

        function applyFilters() {
            const selectedStops = selectedValues(stopInputs);
            const selectedAirlines = selectedValues(airlineInputs);
            const selectedTimes = selectedValues(timeInputs);
            const maximumPrice = Number(priceRange.value);
            const maximumDuration = Number(durRange.value);
            let visibleCount = 0;

            flightCards.forEach(card => {
                const matches = selectedStops.includes(card.dataset.stops) &&
                    selectedAirlines.includes(card.dataset.airline) &&
                    selectedTimes.includes(card.dataset.departure) &&
                    Number(card.dataset.price) <= maximumPrice &&
                    Number(card.dataset.duration) <= maximumDuration;

                card.hidden = !matches;
                if (matches) visibleCount++;
            });

            resultsCount.textContent = visibleCount;
            resultSummary.textContent = `Showing ${visibleCount} of ${flightCards.length} results`;
        }

        function updateTimeButton(input) {
            input.closest('.fr-time-btn').classList.toggle('active', input.checked);
        }

        [...stopInputs, ...airlineInputs].forEach(input => input.addEventListener('change', applyFilters));
        timeInputs.forEach(input => input.addEventListener('change', () => {
            updateTimeButton(input);
            applyFilters();
        }));

        priceRange.addEventListener('input', () => {
            priceVal.textContent = '$' + priceRange.value;
            applyFilters();
        });

        durRange.addEventListener('input', () => {
            durVal.textContent = durRange.value + 'h';
            applyFilters();
        });

        document.querySelector('.fr-reset-btn').addEventListener('click', () => {
            [...stopInputs, ...airlineInputs, ...timeInputs].forEach(input => {
                input.checked = true;
                if (input.closest('.fr-time-btn')) updateTimeButton(input);
            });
            priceRange.value = priceRange.max;
            durRange.value = durRange.max;
            priceVal.textContent = '$' + priceRange.value;
            durVal.textContent = durRange.value + 'h';
            applyFilters();
        });

        timeInputs.forEach(updateTimeButton);
        applyFilters();

        // Flight details toggle
        document.querySelectorAll('.fr-details-btn').forEach(btn => {
            btn.type = 'button';
            btn.setAttribute('aria-expanded', 'false');
            btn.addEventListener('click', function() {
                const card = this.closest('.fr-flight-card');
                let details = card.querySelector('.fr-flight-details');

                if (!details) {
                    const airline = card.querySelector('.fr-airline-name').textContent;
                    const flightNumber = card.querySelector('.fr-flight-no').textContent;
                    const departure = card.querySelector('.fr-time-block:not(.right) .fr-time').textContent;
                    const arrival = card.querySelector('.fr-time-block.right .fr-time').textContent;
                    const duration = card.querySelector('.fr-dur-time').textContent;
                    const stops = card.querySelector('.fr-stops-label').textContent;

                    details = document.createElement('div');
                    details.className = 'fr-flight-details';
                    details.innerHTML = `
                    <div><strong>${airline} ${flightNumber}</strong><span>Operated by ${airline}</span></div>
                    <div><strong>${departure} JFK</strong><span>Departure</span></div>
                    <div><strong>${arrival} LAX</strong><span>Arrival</span></div>
                    <div><strong>${duration}</strong><span>${stops}</span></div>`;
                    details.hidden = true;
                    card.querySelector('.fr-card-footer').before(details);
                }

                const isExpanded = details.hidden;
                details.hidden = !isExpanded;
                this.setAttribute('aria-expanded', String(isExpanded));
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-chevron-down', !isExpanded);
                icon.classList.toggle('fa-chevron-up', isExpanded);
            });
        });
    </script>

    <script src="js/main.js"></script>

</body>

</html>