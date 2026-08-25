<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights Unavailable | Global Air Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/flights-results-error.css">
</head>

<body>

    <?php include 'include/header.php'; ?>

    <main class="error-page">

        <div class="error-container">

            <!-- Search Summary -->
            <div class="search-summary" aria-label="Your Global Air Hub flight search">

                <div>
                    <i class="fa-solid fa-plane-departure"></i>
                    <span>
                        New York <strong>JFK</strong>
                    </span>
                </div>

                <i class="fa-solid fa-arrow-right-long route-arrow"></i>

                <div>
                    <i class="fa-solid fa-plane-arrival"></i>
                    <span>
                        Los Angeles <strong>LAX</strong>
                    </span>
                </div>

                <span class="search-date">
                    <i class="fa-regular fa-calendar"></i>
                    Jul 27 – Aug 3, 2026 · 1 Traveler
                </span>

                <a href="flights.php">
                    Edit Search
                </a>

            </div>


            <!-- Error Card -->
            <section class="error-card" aria-labelledby="error-title">

                <div class="error-art" aria-hidden="true">
                    <i class="fa-solid fa-plane-circle-exclamation"></i>
                </div>

                <p class="error-eyebrow">
                    Global Air Hub Flight Search
                </p>

                <h1 id="error-title">
                    We Couldn't Find a Flight Matching Your Search
                </h1>

                <p class="error-message">
                    We’re sorry, but we couldn’t find available flight options for your
                    selected route and travel dates. Fares and availability can change
                    quickly. Try adjusting your dates, airport, or travel preferences
                    to explore more options.
                </p>

                <div class="error-actions">

                    <a class="try-again" href="flights.php">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Modify Your Search
                    </a>

                    <a class="view-deals" href="flights-results.php">
                        View Available Flight Deals
                    </a>

                </div>

                <p class="error-code">
                    Search Reference:
                    <strong>GAH-FLIGHT-204</strong>
                </p>

            </section>


            <!-- Helpful Suggestions -->
            <section class="help-section">

                <div class="help-heading">

                    <i class="fa-solid fa-lightbulb"></i>

                    <div>
                        <h2>
                            Try These Options
                        </h2>

                        <p>
                            A small change to your search may help you find more
                            flight choices and competitive fares.
                        </p>
                    </div>

                </div>


                <div class="suggestion-grid">

                    <!-- Flexible Dates -->
                    <a href="flights.php">

                        <i class="fa-regular fa-calendar-days"></i>

                        <span>
                            <strong>
                                Try Flexible Travel Dates
                            </strong>

                            <small>
                                Check flights one or two days before or after your
                                selected travel dates.
                            </small>
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>


                    <!-- Nearby Airports -->
                    <a href="flights.php">

                        <i class="fa-solid fa-location-dot"></i>

                        <span>
                            <strong>
                                Check Nearby Airports
                            </strong>

                            <small>
                                Compare nearby departure or arrival airports for
                                additional flight options.
                            </small>
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>


                    <!-- Travel Expert -->
                    <a href="tel:+1-877-513-3980">

                        <i class="fa-solid fa-headset"></i>

                        <span>
                            <strong>
                                Speak With a Travel Expert
                            </strong>

                            <small>
                                Our travel specialists can help you explore
                                available flight options.
                            </small>
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>

                </div>

            </section>


            <!-- Global Air Hub Support Callout -->
            <div class="callout">

                <i class="fa-solid fa-phone-volume"></i>

                <div>
                    <strong>
                        Need Help Finding the Right Flight?
                    </strong>

                    <span>
                        Global Air Hub travel specialists are available 24/7
                        to help you compare routes, dates, and flight options.
                    </span>
                </div>

                <a href="tel:+1-877-513-3980">
                    <i class="fa-solid fa-phone"></i>
                    Call 1-877-513-3980
                </a>

            </div>

        </div>


    </main>


    <?php include 'include/footer.php'; ?>
    <script src="js/main.js"></script>
</body>

</html>