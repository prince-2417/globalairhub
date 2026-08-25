<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Global Air Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css?v=3">
</head>

<body>

    <?php include('include/header.php'); ?>

    <!-- Hero -->
    <section class="cnt-hero">
        <div class="cnt-hero-overlay"></div>
        <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1400&q=80" alt="Contact Us" class="cnt-hero-bg">
        <div class="cnt-hero-content">
            <span class="cnt-hero-badge"><i class="fa-solid fa-headset"></i> We're Here to Help</span>
            <h1>Get in Touch <span>With Our Team</span></h1>
            <p>Have a question, need help booking, or want to know about our deals? Our travel experts are available 24/7 — just reach out.</p>
        </div>
    </section>

    <!-- Info Cards -->
    <section class="cnt-info-section">
        <div class="cnt-container">

            <div class="cnt-info-grid">

                <!-- Call Us -->
                <div class="cnt-info-card">

                    <div class="cnt-info-icon" style="background:#e8f0fe;color:#2563eb;">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>

                    <h3>Call Global Air Hub</h3>

                    <p>
                        Speak with one of our travel specialists for assistance
                        with flights, cruises, travel plans, and bookings.
                    </p>

                    <a href="tel:+1-877-513-3980" class="cnt-info-link">
                        1-877-513-3980
                    </a>

                    <span class="cnt-info-note">
                        <i class="fa-solid fa-circle"
                            style="color:#2e7d32;font-size:8px;"></i>
                        Travel Support Available 24/7
                    </span>

                </div>


                <!-- Email Us -->
                <div class="cnt-info-card">

                    <div class="cnt-info-icon" style="background:#e8f5e9;color:#2e7d32;">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <h3>Email Us</h3>

                    <p>
                        Have a question about your travel plans? Send us an
                        email and our support team will assist you.
                    </p>

                    <a href="mailto:info@globalairhub.com" class="cnt-info-link">
                        info@globalairhub.com
                    </a>

                    <span class="cnt-info-note">
                        <i class="fa-solid fa-circle"
                            style="color:#1a73e8;font-size:8px;"></i>
                        Our team will respond as soon as possible
                    </span>

                </div>


                <!-- Live Chat -->
                <div class="cnt-info-card">

                    <div class="cnt-info-icon" style="background:#fff3e0;color:#e65100;">
                        <i class="fa-regular fa-comment-dots"></i>
                    </div>

                    <h3>Live Chat</h3>

                    <p>
                        Get quick assistance from our travel support team with
                        your flight, cruise, or general travel questions.
                    </p>

                    <a href="#" class="cnt-info-link">
                        Start Live Chat
                    </a>

                    <span class="cnt-info-note">
                        <i class="fa-solid fa-circle"
                            style="color:#2e7d32;font-size:8px;"></i>
                        Travel assistance available
                    </span>

                </div>


                <!-- Travel Support -->
                <div class="cnt-info-card">

                    <div class="cnt-info-icon" style="background:#fce4ec;color:#c62828;">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <h3>Travel Support</h3>

                    <p>
                        Need help choosing a flight or cruise? Our travel
                        specialists are ready to help you explore your options.
                    </p>

                    <a href="tel:+1-877-513-3980"
                        class="cnt-info-link">
                        Speak to a Travel Expert
                    </a>

                    <span class="cnt-info-note">
                        <i class="fa-solid fa-circle"
                            style="color:#2e7d32;font-size:8px;"></i>
                        Available 24 hours, 7 days a week
                    </span>

                </div>

            </div>

        </div>
    </section>

    <!-- Form + Map -->
    <section class="cnt-main-section">
        <div class="cnt-container">

            <div class="cnt-main-grid">

                <!-- Contact Form -->
                <div class="cnt-form-wrap">

                    <span class="cnt-section-tag">
                        Contact Global Air Hub
                    </span>

                    <h2>
                        We're Here to <span>Help You Travel</span>
                    </h2>

                    <p>
                        Have a question about your flight, cruise, booking, or
                        travel plans? Send us a message and our travel specialists
                        will be happy to assist you.
                    </p>

                    <form class="cnt-form" id="contactForm" onsubmit="return handleSubmit(event);">

                        <!-- Name -->
                        <div class="cnt-form-row">

                            <div class="cnt-field">
                                <label>
                                    First Name <span>*</span>
                                </label>

                                <div class="cnt-input-wrap">
                                    <i class="fa-solid fa-user"></i>
                                    <input
                                        type="text"
                                        name="first_name"
                                        placeholder="John"
                                        required>
                                </div>
                            </div>

                            <div class="cnt-field">
                                <label>
                                    Last Name <span>*</span>
                                </label>

                                <div class="cnt-input-wrap">
                                    <i class="fa-solid fa-user"></i>
                                    <input
                                        type="text"
                                        name="last_name"
                                        placeholder="Doe"
                                        required>
                                </div>
                            </div>

                        </div>


                        <!-- Email & Phone -->
                        <div class="cnt-form-row">

                            <div class="cnt-field">
                                <label>
                                    Email Address <span>*</span>
                                </label>

                                <div class="cnt-input-wrap">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input
                                        type="email"
                                        name="email"
                                        placeholder="john@example.com"
                                        required>
                                </div>
                            </div>

                            <div class="cnt-field">
                                <label>
                                    Phone Number
                                </label>

                                <div class="cnt-input-wrap">
                                    <i class="fa-solid fa-phone"></i>
                                    <input
                                        type="tel"
                                        name="phone"
                                        placeholder="+1 (555) 000-0000">
                                </div>
                            </div>

                        </div>


                        <!-- Travel Service -->
                        <div class="cnt-field cnt-field-full">

                            <label>
                                How Can We Help? <span>*</span>
                            </label>

                            <div class="cnt-input-wrap">

                                <i class="fa-solid fa-plane"></i>

                                <select name="subject" required>

                                    <option value="" disabled selected>
                                        Select a service
                                    </option>

                                    <option>
                                        Flight Booking Inquiry
                                    </option>

                                    <option>
                                        Cruise Booking Inquiry
                                    </option>

                                    <option>
                                        Existing Booking Assistance
                                    </option>

                                    <option>
                                        Booking Modification
                                    </option>

                                    <option>
                                        Cancellation / Refund
                                    </option>

                                    <option>
                                        Baggage Information
                                    </option>

                                    <option>
                                        Travel Assistance
                                    </option>

                                    <option>
                                        General Question
                                    </option>

                                    <option>
                                        Other
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- Message -->
                        <div class="cnt-field cnt-field-full">

                            <label>
                                Message <span>*</span>
                            </label>

                            <div class="cnt-input-wrap cnt-textarea-wrap">

                                <i class="fa-solid fa-message"></i>

                                <textarea
                                    name="message"
                                    rows="5"
                                    placeholder="Tell us about your travel plans or how we can assist you..."
                                    required></textarea>

                            </div>

                        </div>


                        <!-- Footer -->
                        <div class="cnt-form-footer">

                            <label class="cnt-check">

                                <input type="checkbox" required>

                                I agree to the
                                <a href="privacy-policy.php">
                                    Privacy Policy
                                </a>
                                and
                                <a href="terms.php">
                                    Terms & Conditions
                                </a>

                            </label>

                            <button
                                type="submit"
                                class="cnt-submit-btn">
                                <i class="fa-solid fa-paper-plane"></i>
                                Send Message
                            </button>

                        </div>

                    </form>


                    <!-- Success Message -->
                    <div class="cnt-success" id="successMsg">

                        <div class="cnt-success-icon">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>

                        <h3>
                            Message Sent Successfully!
                        </h3>

                        <p>
                            Thank you for contacting Global Air Hub.
                            One of our travel specialists will get back to you
                            as soon as possible.
                        </p>

                    </div>

                </div>


                <!-- Right Side -->
                <div class="cnt-side">

                    <!-- Quick Contact -->
                    <div class="cnt-quick-box">

                        <h4>
                            <i class="fa-solid fa-bolt"></i>
                            Quick Contact
                        </h4>

                        <p>
                            Looking for a quick answer? Contact our travel team
                            directly and get assistance with your travel plans.
                        </p>

                        <a
                            href="tel:+1-877-513-3980"
                            class="cnt-quick-call">

                            <i class="fa-solid fa-phone"></i>

                            <div>
                                <span>
                                    Call Global Air Hub
                                </span>

                                <strong>
                                    1-877-513-3980
                                </strong>
                            </div>

                        </a>

                        <a
                            href="#"
                            class="cnt-quick-chat">
                            <i class="fa-regular fa-comment-dots"></i>
                            Start Live Chat
                        </a>

                    </div>


                    <!-- Business Hours -->
                    <div class="cnt-hours-box">

                        <h4>
                            <i class="fa-regular fa-clock"></i>
                            Customer Support Hours
                        </h4>

                        <ul>

                            <li>
                                <span>
                                    Phone Support
                                </span>

                                <strong>
                                    24 / 7
                                </strong>
                            </li>

                            <li>
                                <span>
                                    Travel Assistance
                                </span>

                                <strong>
                                    24 / 7
                                </strong>
                            </li>

                            <li>
                                <span>
                                    Booking Support
                                </span>

                                <strong>
                                    24 / 7
                                </strong>
                            </li>

                            <li>
                                <span>
                                    Email Support
                                </span>

                                <strong>
                                    Available Daily
                                </strong>
                            </li>

                        </ul>

                    </div>


                    <!-- Services -->
                    <div class="cnt-services-box">

                        <h4>
                            <i class="fa-solid fa-plane-departure"></i>
                            What We Can Help With
                        </h4>

                        <div class="cnt-services-list">

                            <span>
                                <i class="fa-solid fa-plane"></i>
                                Flight Bookings
                            </span>

                            <span>
                                <i class="fa-solid fa-ship"></i>
                                Cruise Vacations
                            </span>

                            <span>
                                <i class="fa-solid fa-calendar-days"></i>
                                Travel Planning
                            </span>

                            <span>
                                <i class="fa-solid fa-headset"></i>
                                Booking Assistance
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- FAQ -->
    <section class="cnt-faq-section">
        <div class="cnt-container">

            <div class="cnt-section-head">
                <span class="cnt-section-tag">Global Air Hub FAQ</span>
                <h2>Frequently Asked <span>Questions</span></h2>
                <p>Find quick answers about flight bookings, changes, cancellations, refunds, and travel support with Global Air Hub.</p>
            </div>

            <div class="cnt-faq-grid">

                <!-- FAQ 1 -->
                <div class="cnt-faq-item">
                    <button class="cnt-faq-q" onclick="toggleFaq(this)">
                        How can I book a flight with Global Air Hub?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="cnt-faq-a">
                        <p>
                            You can search for flights through the Global Air Hub website or contact our travel experts for assistance. Our team can help you compare available flight options, fares, schedules, and travel requirements before completing your booking.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="cnt-faq-item">
                    <button class="cnt-faq-q" onclick="toggleFaq(this)">
                        Can I change or cancel my flight booking?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="cnt-faq-a">
                        <p>
                            Yes, depending on the airline's fare rules and the terms of your ticket. Contact Global Air Hub support with your booking details, and our travel specialists will help you understand the available change or cancellation options.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="cnt-faq-item">
                    <button class="cnt-faq-q" onclick="toggleFaq(this)">
                        How do I get help with my existing reservation?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="cnt-faq-a">
                        <p>
                            Our support team can assist with eligible booking changes, cancellations, itinerary questions, and other travel-related concerns. Please keep your booking confirmation or reference number available so we can assist you more efficiently.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="cnt-faq-item">
                    <button class="cnt-faq-q" onclick="toggleFaq(this)">
                        Are flight prices and availability guaranteed?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="cnt-faq-a">
                        <p>
                            Flight fares and availability can change at any time based on airline inventory, travel dates, demand, and other factors. A displayed fare is subject to availability and is confirmed only after the booking has been successfully completed.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="cnt-faq-item">
                    <button class="cnt-faq-q" onclick="toggleFaq(this)">
                        Do flight fares include taxes and fees?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="cnt-faq-a">
                        <p>
                            Taxes, airline charges, and applicable service fees may vary depending on the itinerary and fare selected. Please review the complete price, inclusions, and applicable fare conditions before confirming your booking.
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="cnt-faq-item">
                    <button class="cnt-faq-q" onclick="toggleFaq(this)">
                        Can I book a flight for another traveler?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="cnt-faq-a">
                        <p>
                            Yes. You can make a reservation for another traveler. Make sure the passenger's name and personal details are entered exactly as they appear on their valid travel documents.
                        </p>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="cnt-faq-item">
                    <button class="cnt-faq-q" onclick="toggleFaq(this)">
                        Do you provide assistance with group travel?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="cnt-faq-a">
                        <p>
                            Yes. Global Air Hub can help travelers looking for group flight options. Contact our travel team with your group size, destination, and preferred travel dates so we can help you explore suitable options.
                        </p>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="cnt-faq-item">
                    <button class="cnt-faq-q" onclick="toggleFaq(this)">
                        How can I contact Global Air Hub?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="cnt-faq-a">
                        <p>
                            If you need assistance with flights or an existing reservation, you can contact the Global Air Hub travel support team by phone or through the contact options available on our website. Our travel specialists are ready to help with your travel-related questions.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- CTA -->
    <section class="cnt-cta">
        <div class="cnt-container">
            <div class="cnt-cta-inner">

                <div class="cnt-cta-icon">
                    <i class="fa-solid fa-headset"></i>
                </div>

                <div class="cnt-cta-text">
                    <h2>Need Help With Your Travel Plans?</h2>
                    <p>
                        Our Global Air Hub travel specialists are available 24/7
                        to help you with bookings, changes, cancellations, and travel questions.
                    </p>
                </div>

                <div class="cnt-cta-actions">
                    <a href="tel:+18775133980" class="cnt-cta-call">
                        <i class="fa-solid fa-phone"></i>
                        +1-877-513-3980
                    </a>

                    <a href="flights.php" class="cnt-cta-search">
                        <i class="fa-solid fa-plane"></i>
                        Search Flights
                    </a>
                </div>

            </div>
        </div>
    </section>

    <?php include('include/footer.php'); ?>

    <script>
        function toggleFaq(btn) {
            const item = btn.parentElement;
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.cnt-faq-item.open').forEach(el => el.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        }

        function handleSubmit(e) {
            e.preventDefault();
            document.getElementById('contactForm').style.display = 'none';
            document.getElementById('successMsg').style.display = 'flex';
            return false;
        }
    </script>

    <script src="js/main.js"></script>
</body>

</html>
