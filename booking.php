<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Booking | Global Air Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/booking.css">
</head>

<body>

    <?php include 'include/header.php'; ?>

    <main class="booking-page">
        <div class="booking-container">

            <!-- Booking Intro -->
            <div class="booking-intro">
                <a href="flights-results.php" class="back-link">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to Flight Results
                </a>

                <p class="booking-eyebrow">Secure Booking</p>

                <h1>Complete Your Flight Booking</h1>

                <p>
                    Enter your traveler details and contact information to continue
                    with your reservation through Global Air Hub.
                </p>
            </div>

            <div class="booking-layout">

                <!-- =========================
                 BOOKING FORM
            ========================== -->
                <form class="booking-form" action="confirm-booking.php" method="get">

                    <!-- Traveler Details -->
                    <section class="booking-card">

                        <div class="section-heading">
                            <span class="step-number">1</span>

                            <div>
                                <h2>Traveler Details</h2>
                                <p>
                                    Please enter the traveler information exactly as
                                    it appears on the government-issued travel document.
                                </p>
                            </div>
                        </div>

                        <div class="form-grid">

                            <label>
                                Title
                                <select name="title" required>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Dr.">Dr.</option>
                                </select>
                            </label>

                            <label>
                                First Name
                                <input
                                    name="first_name"
                                    type="text"
                                    placeholder="Enter first name"
                                    autocomplete="given-name"
                                    required>
                            </label>

                            <label>
                                Last Name
                                <input
                                    name="last_name"
                                    type="text"
                                    placeholder="Enter last name"
                                    autocomplete="family-name"
                                    required>
                            </label>

                            <label>
                                Date of Birth
                                <input
                                    name="dob"
                                    type="date"
                                    required>
                            </label>

                            <label class="full-width">
                                Gender
                                <select name="gender" required>
                                    <option value="" selected disabled>
                                        Select gender
                                    </option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Non-binary">Non-binary</option>
                                    <option value="Prefer not to say">
                                        Prefer not to say
                                    </option>
                                </select>
                            </label>

                        </div>
                    </section>

                    <!-- Contact Details -->
                    <section class="booking-card">

                        <div class="section-heading">
                            <span class="step-number">2</span>

                            <div>
                                <h2>Contact Information</h2>
                                <p>
                                    We'll use these details to send your booking
                                    confirmation, itinerary and important travel updates.
                                </p>
                            </div>
                        </div>

                        <div class="form-grid">

                            <label class="full-width">
                                Email Address
                                <input
                                    name="email"
                                    type="email"
                                    placeholder="you@example.com"
                                    autocomplete="email"
                                    required>
                            </label>

                            <label>
                                Phone Number
                                <input
                                    name="phone"
                                    type="tel"
                                    placeholder="+1 (000) 000-0000"
                                    autocomplete="tel"
                                    required>
                            </label>

                            <label>
                                Country / Region
                                <select name="country" required>
                                    <option value="United States">
                                        United States
                                    </option>
                                    <option value="Canada">
                                        Canada
                                    </option>
                                    <option value="United Kingdom">
                                        United Kingdom
                                    </option>
                                    <option value="India">
                                        India
                                    </option>
                                    <option value="Australia">
                                        Australia
                                    </option>
                                    <option value="Other">
                                        Other
                                    </option>
                                </select>
                            </label>
                        </div>
                        <label class="check-line">
                            <input type="checkbox" name="updates">
                            Send me Global Air Hub flight updates, travel information
                            and special offers.
                        </label>

                    </section>


                    <!-- Payment Details -->
                    <section class="booking-card">

                        <div class="section-heading">

                            <span class="step-number">3</span>

                            <div>
                                <h2>Payment Information</h2>
                                <p>
                                    Your payment information is processed securely
                                    through our authorized payment system.
                                </p>
                            </div>

                            <i
                                class="fa-solid fa-lock secure-icon"
                                aria-hidden="true">
                            </i>

                        </div>

                        <div class="accepted-cards">
                            <span>Accepted payment methods</span>

                            <i class="fa-brands fa-cc-visa"></i>
                            <i class="fa-brands fa-cc-mastercard"></i>
                            <i class="fa-brands fa-cc-amex"></i>
                            <i class="fa-brands fa-cc-discover"></i>
                        </div>

                        <div class="form-grid">

                            <label class="full-width">
                                Name on Card
                                <input
                                    name="card_name"
                                    type="text"
                                    placeholder="Name as shown on card"
                                    autocomplete="cc-name"
                                    required>
                            </label>

                            <label class="full-width">
                                Card Number
                                <input
                                    name="card_number"
                                    type="text"
                                    inputmode="numeric"
                                    autocomplete="cc-number"
                                    placeholder="1234 5678 9012 3456"
                                    required>
                            </label>

                            <label>
                                Expiry Date
                                <input
                                    name="expiry"
                                    type="text"
                                    inputmode="numeric"
                                    autocomplete="cc-exp"
                                    placeholder="MM / YY"
                                    required>
                            </label>

                            <label>
                                Security Code
                                <input
                                    name="cvc"
                                    type="text"
                                    inputmode="numeric"
                                    autocomplete="cc-csc"
                                    placeholder="CVC"
                                    required>
                            </label>

                        </div>

                    </section>


                    <!-- Terms -->
                    <label class="terms-line">
                        <input type="checkbox" required>

                        I agree to the
                        <a href="terms.php">Terms &amp; Conditions</a>,
                        applicable fare rules, and
                        <a href="privacy-policy.php">Privacy Policy</a>.
                    </label>


                    <!-- Confirm Booking -->
                    <button class="confirm-button" type="submit">
                        Confirm &amp; Pay $235.20
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                    <p class="secure-note">
                        <i class="fa-solid fa-shield-halved"></i>
                        Your booking information is protected using secure
                        encryption and industry-standard security measures.
                    </p>

                </form>


                <!-- =========================
                 BOOKING SUMMARY
            ========================== -->
                <aside class="booking-summary">

                    <div class="summary-card">

                        <div class="summary-header">
                            <span>Your Flight</span>
                            <a href="flights-results.php">
                                Change
                            </a>
                        </div>


                        <!-- Route -->
                        <div class="summary-route">

                            <div>
                                <strong>JFK</strong>
                                <span>New York</span>
                            </div>

                            <i class="fa-solid fa-plane"></i>

                            <div>
                                <strong>LAX</strong>
                                <span>Los Angeles</span>
                            </div>

                        </div>


                        <!-- Outbound -->
                        <div class="summary-flight">

                            <span>
                                Mon, Jul 27 · 6:00 AM
                            </span>

                            <strong>
                                American Airlines · AA 2341
                            </strong>

                            <small>
                                Non-stop · 5h 30m · Economy
                            </small>

                        </div>


                        <!-- Return -->
                        <div class="summary-flight return">

                            <span>
                                Mon, Aug 3 · 11:15 AM
                            </span>

                            <strong>
                                American Airlines · AA 2386
                            </strong>

                            <small>
                                Non-stop · 5h 20m · Economy
                            </small>

                        </div>


                        <div class="summary-divider"></div>


                        <!-- Price -->
                        <div class="summary-line">
                            <span>1 Adult</span>
                            <strong>$189.00</strong>
                        </div>

                        <div class="summary-line">
                            <span>Taxes &amp; Fees</span>
                            <strong>$46.20</strong>
                        </div>


                        <div class="summary-total">
                            <span>Total Price</span>
                            <strong>$235.20</strong>
                        </div>

                    </div>


                    <!-- Support Box -->
                    <div class="help-box">

                        <i class="fa-solid fa-headset"></i>

                        <div>
                            <strong>
                                Need Help With Your Booking?
                            </strong>

                            <span>
                                Our Global Air Hub travel specialists are available
                                24/7 to assist you.
                            </span>

                            <a href="tel:+12163022732">
                                +1-216-302-2732
                            </a>
                        </div>

                    </div>


                    <!-- Booking Assurance -->
                    <div class="booking-assurance">

                        <div>
                            <i class="fa-solid fa-shield-halved"></i>

                            <div>
                                <strong>Secure Booking</strong>
                                <span>
                                    Your information is handled securely.
                                </span>
                            </div>
                        </div>

                        <div>
                            <i class="fa-solid fa-headset"></i>

                            <div>
                                <strong>24/7 Support</strong>
                                <span>
                                    Assistance whenever you need it.
                                </span>
                            </div>
                        </div>

                        <div>
                            <i class="fa-solid fa-plane-circle-check"></i>

                            <div>
                                <strong>Booking Assistance</strong>
                                <span>
                                    Help with your reservation and itinerary.
                                </span>
                            </div>
                        </div>

                    </div>

                </aside>

            </div>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>
    <script src="js/main.js"></script>
</body>

</html>