<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rentals - Cheapflightsfares</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/flight.css">
    <link rel="stylesheet" href="css/cars.css">
</head>

<body>

    <?php include 'include/header.php'; ?>

    <section class="cars-hero">
        <div class="cars-hero-bg">
            <img
                src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1600&q=80&auto=format&fit=crop"
                alt="Car rental services by Global Air Hub">
            <div class="cars-hero-overlay"></div>
        </div>

        <div class="cars-hero-content">

            <div class="cars-hero-main">
                <span class="cars-hero-tag">
                    <i class="fa-solid fa-car"></i> Car Rentals
                </span>

                <h1>
                    Find the Right Car for Your Next Journey
                </h1>

                <p>
                    Make your trip more convenient with flexible car rental
                    options for business trips, family vacations, road trips,
                    and airport transfers.
                </p>

                <a href="#cars-deals" class="cars-hero-cta">
                    Explore Car Rentals
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="cars-hero-stats">

                <div>
                    <i class="fa-solid fa-car"></i>
                    <strong>Flexible</strong>
                    <span>Rental Options</span>
                </div>

                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <strong>Multiple</strong>
                    <span>Pickup Locations</span>
                </div>

                <div>
                    <i class="fa-solid fa-headset"></i>
                    <strong>24/7</strong>
                    <span>Travel Support</span>
                </div>

            </div>

        </div>
    </section>

    <section class="cars-deals-section" id="cars-deals">
        <div class="fsb-container">

            <div class="section-heading">
                <span>Global Air Hub Car Rentals</span>
                <h2>Find the Right Car for Your Journey</h2>
                <p>
                    Explore convenient car rental options for city travel,
                    family vacations, business trips, and road adventures.
                </p>
            </div>

            <div class="cars-grid">

                <!-- Economy / Compact -->
                <article class="car-card">
                    <img
                        src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?w=800&q=80"
                        alt="Economy and compact car rental">

                    <div class="car-card-body">
                        <h3>Economy & Compact</h3>

                        <p>
                            A practical choice for city trips, short journeys,
                            and travelers looking for a comfortable and
                            fuel-efficient vehicle.
                        </p>

                        <div class="car-card-details">
                            <span>
                                <i class="fa-solid fa-user-group"></i>
                                4–5 Seats
                            </span>

                            <span>
                                <i class="fa-solid fa-snowflake"></i>
                                A/C
                            </span>

                            <span>
                                <i class="fa-solid fa-gears"></i>
                                Automatic
                            </span>
                        </div>

                        <div class="car-card-bottom">
                            <strong>Check Availability</strong>

                            <a href="tel:+18775133980" class="btn-small">
                                <i class="fa-solid fa-phone"></i>
                                Call Now
                            </a>
                        </div>
                    </div>
                </article>


                <!-- SUV -->
                <article class="car-card">
                    <img
                        src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=800&q=80"
                        alt="SUV car rental">

                    <div class="car-card-body">
                        <h3>SUV</h3>

                        <p>
                            Enjoy extra space and comfort for family vacations,
                            longer journeys, and road trips with more luggage.
                        </p>

                        <div class="car-card-details">
                            <span>
                                <i class="fa-solid fa-user-group"></i>
                                5–7 Seats
                            </span>

                            <span>
                                <i class="fa-solid fa-suitcase"></i>
                                Extra Space
                            </span>

                            <span>
                                <i class="fa-solid fa-gears"></i>
                                Automatic
                            </span>
                        </div>

                        <div class="car-card-bottom">
                            <strong>Check Availability</strong>

                            <a href="tel:+18775133980" class="btn-small">
                                <i class="fa-solid fa-phone"></i>
                                Call Now
                            </a>
                        </div>
                    </div>
                </article>


                <!-- Premium -->
                <article class="car-card">
                    <img
                        src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c?w=800&q=80"
                        alt="Premium luxury car rental">

                    <div class="car-card-body">
                        <h3>Premium & Luxury</h3>

                        <p>
                            Travel in style with premium vehicles designed for
                            business trips, special occasions, and comfortable
                            long-distance journeys.
                        </p>

                        <div class="car-card-details">
                            <span>
                                <i class="fa-solid fa-user-group"></i>
                                5 Seats
                            </span>

                            <span>
                                <i class="fa-solid fa-couch"></i>
                                Premium Comfort
                            </span>

                            <span>
                                <i class="fa-solid fa-gears"></i>
                                Automatic
                            </span>
                        </div>

                        <div class="car-card-bottom">
                            <strong>Check Availability</strong>

                            <a href="tel:+18775133980" class="btn-small">
                                <i class="fa-solid fa-phone"></i>
                                Call Now
                            </a>
                        </div>
                    </div>
                </article>

            </div>

            <!-- Bottom CTA -->
            <!-- <div class="cars-deals-cta">
                <div>
                    <i class="fa-solid fa-car-side"></i>
                    <div>
                        <h3>Looking for a specific vehicle?</h3>
                        <p>
                            Contact Global Air Hub and let our travel team
                            help you explore available rental options.
                        </p>
                    </div>
                </div>

                <a href="tel:+18775133980" class="btn-small">
                    <i class="fa-solid fa-phone-volume"></i>
                    +1-877-513-3980
                </a>
            </div> -->

        </div>
    </section>

    <section class="cars-benefits-section">
        <div class="fsb-container cars-benefits-grid">

            <!-- Benefit 1 -->
            <div class="benefit-card">
                <i class="fa-solid fa-shield-halved"></i>
                <h3>Travel With Confidence</h3>
                <p>
                    Explore car rental options with clear details about the
                    vehicle, rental conditions, and available services before booking.
                </p>
            </div>

            <!-- Benefit 2 -->
            <div class="benefit-card">
                <i class="fa-solid fa-car-side"></i>
                <h3>Flexible Car Options</h3>
                <p>
                    Choose from different vehicle categories to suit your
                    business trip, family vacation, airport transfer, or road trip.
                </p>
            </div>

            <!-- Benefit 3 -->
            <div class="benefit-card">
                <i class="fa-solid fa-headset"></i>
                <h3>24/7 Travel Support</h3>
                <p>
                    Need assistance with your travel plans? Connect with the
                    Global Air Hub support team for help with your travel needs.
                </p>
            </div>

        </div>
    </section>

    <section class="cars-info-section">
        <div class="fsb-container cars-info-grid">

            <!-- Left: Content -->
            <div class="cars-info-copy">

                <span class="section-tag">
                    <i class="fa-solid fa-car"></i> Global Air Hub Car Rentals
                </span>

                <h2>
                    Convenient Car Rentals for Every Journey
                </h2>

                <p>
                    Complete your travel plans with convenient car rental options
                    through Global Air Hub. Whether you're planning a family
                    vacation, business trip, airport transfer, or road adventure,
                    explore vehicle options that fit your journey.
                </p>

                <ul class="cars-info-list">

                    <li>
                        <strong>Choose the right vehicle:</strong>
                        Explore options ranging from compact cars and sedans
                        to SUVs and premium vehicles.
                    </li>

                    <li>
                        <strong>Flexible travel options:</strong>
                        Find rental solutions that can suit different destinations,
                        trip lengths, and travel requirements.
                    </li>

                    <li>
                        <strong>Travel support:</strong>
                        Get assistance from the Global Air Hub team when you
                        need help with your travel arrangements.
                    </li>

                </ul>

            </div>


            <!-- Right: Stats / Highlights -->
            <div class="cars-info-stats">

                <div class="info-card">
                    <i class="fa-solid fa-car-side"></i>
                    <h3>Multiple</h3>
                    <p>Vehicle categories to explore</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-location-dot"></i>
                    <h3>Flexible</h3>
                    <p>Pickup and drop-off options</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-headset"></i>
                    <h3>24/7</h3>
                    <p>Global Air Hub travel support</p>
                </div>

            </div>

        </div>
    </section>
    <?php include 'include/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>