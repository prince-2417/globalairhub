<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheapflightsfares Header</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <header class="main-header">
        <div class="top-header">
            <div class="container">
                <div class="logo-area">
                    <a href="#" class="logo">
                        <span class="logo-icon">Global</span>
                        <span class="logo-text">Air Hub</span>
                    </a>
                </div>

                <div class="top-actions">
                    <a href="tel:+12163022732" class="call-btn">
                        <div class="phone-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="call-text">
                            <span>Llama 24/7:</span>
                            <strong>+1-216-302-2732</strong>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="bottom-header">
            <div class="container">
                <button class="hamburger" id="hamburger-btn" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>
                <nav class="main-nav" id="main-nav">
                    <ul>
                        <li><a href="#">Vuelos</a></li>
                        <li><a href="#">Hoteles</a></li>
                        <li><a href="#">Autos</a></li>
                        <li><a href="#">Cruceros</a></li>
                        <li class="dropdown">
                            <a href="#">Ofertas <i class="fa-solid fa-chevron-down dropdown-arrow"></i></a>
                        </li>
                        <li><a href="#">Opiniones</a></li>
                        <li><a href="#">Atención al cliente</a></li>
                        <li><a href="#">Contáctanos</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-bg">
                <img src="https://images.unsplash.com/photo-1539635278303-d4002c07eae3?q=80&w=2000&auto=format&fit=crop" alt="Coastal town">
            </div>
            <div class="hero-content container">
                <h1 class="hero-title">Viajar es fácil</h1>
                <p class="hero-subtitle">Encuentra las mejores ofertas de vuelos a tu destino</p>

                <div class="search-widget">
                    <div class="widget-tabs">
                        <button class="tab-btn active"><i class="fa-solid fa-plane"></i> Vuelos</button>
                        <button class="tab-btn"><i class="fa-solid fa-building"></i> Hoteles</button>
                        <button class="tab-btn"><i class="fa-solid fa-car"></i> Autos</button>
                        <button class="tab-btn"><i class="fa-solid fa-ship"></i> Cruceros</button>
                    </div>

                    <div class="widget-body">
                        <div class="trip-type">
                            <label class="radio-label">
                                <input type="radio" name="trip" checked>
                                ~Ida y vuelta
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="trip">
                                ~Solo Ida
                            </label>
                        </div>

                        <form class="search-form">
                            <div class="form-group location-group">
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-plane-departure"></i>
                                    <input type="text" placeholder="From">
                                </div>
                                <button type="button" class="swap-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></button>
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-plane-arrival"></i>
                                    <input type="text" placeholder="To">
                                </div>
                            </div>

                            <div class="form-group date-box">
                                <i class="fa-solid fa-calendar-days"></i>
                                <div class="date-text">
                                    <span class="date-main">JUL 22</span>
                                    <span class="date-year">2026</span>
                                </div>
                            </div>

                            <div class="form-group date-box">
                                <i class="fa-solid fa-calendar-days"></i>
                                <div class="date-text">
                                    <span class="date-main">JUL 29</span>
                                    <span class="date-year">2026</span>
                                </div>
                            </div>

                            <div class="form-group passenger-box">
                                <i class="fa-solid fa-user-tie"></i>
                                <div class="passenger-text">
                                    <span class="passenger-main">1 Adulto,</span>
                                    <span class="passenger-class">Economía</span>
                                </div>
                                <i class="fa-solid fa-chevron-down arrow-down"></i>
                            </div>

                            <button type="submit" class="btn-search">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews-banner">
            <div class="container">

                <div class="reviews-marquee-wrapper">
                    <div class="reviews-container">
                        <!-- Set 1 -->
                        <div class="review-item trustpilot">
                            <div class="tp-logo"><i class="fa-solid fa-star" style="color: #00b67a;"></i> <strong>Trustpilot</strong></div>
                            <div class="tp-stars">
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box half"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="tp-score">TrustScore 4.5<br>10,379 reviews</div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo"><i class="fa-solid fa-star" style="color: #4a90e2;"></i> <strong>smart</strong>customer <i class="fa-solid fa-circle-info info-icon"></i></div>
                            <div class="review-count">Basada en 22,801 reseñas</div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo"><i class="fa-solid fa-circle-check" style="color: #111;"></i> <strong>REVIEWS</strong>.io <i class="fa-solid fa-circle-info info-icon"></i></div>
                            <div class="review-count">Basada en 5,890 reseñas</div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo">Reseller<strong>Ratings</strong> <i class="fa-solid fa-circle-check" style="color: #d11975;"></i> <i class="fa-solid fa-circle-info info-icon"></i></div>
                            <div class="review-count">Basada en 1,167 reseñas</div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo google-logo">
                                <span style="color:#4285F4;font-weight:700;">G</span><span style="color:#EA4335;font-weight:700;">o</span><span style="color:#FBBC05;font-weight:700;">o</span><span style="color:#4285F4;font-weight:700;">g</span><span style="color:#34A853;font-weight:700;">l</span><span style="color:#EA4335;font-weight:700;">e</span> <i class="fa-solid fa-circle-info info-icon"></i>
                            </div>
                            <div class="review-count">Basada en 1,605 reseñas</div>
                        </div>
                        <!-- Set 2 (duplicate for seamless loop) -->
                        <div class="review-item trustpilot">
                            <div class="tp-logo"><i class="fa-solid fa-star" style="color: #00b67a;"></i> <strong>Trustpilot</strong></div>
                            <div class="tp-stars">
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box"><i class="fa-solid fa-star"></i></div>
                                <div class="tp-box half"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="tp-score">TrustScore 4.5<br>10,379 reviews</div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo"><i class="fa-solid fa-star" style="color: #4a90e2;"></i> <strong>smart</strong>customer <i class="fa-solid fa-circle-info info-icon"></i></div>
                            <div class="review-count">Basada en 22,801 reseñas</div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo"><i class="fa-solid fa-circle-check" style="color: #111;"></i> <strong>REVIEWS</strong>.io <i class="fa-solid fa-circle-info info-icon"></i></div>
                            <div class="review-count">Basada en 5,890 reseñas</div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo">Reseller<strong>Ratings</strong> <i class="fa-solid fa-circle-check" style="color: #d11975;"></i> <i class="fa-solid fa-circle-info info-icon"></i></div>
                            <div class="review-count">Basada en 1,167 reseñas</div>
                        </div>
                        <div class="review-item">
                            <div class="platform-logo google-logo">
                                <span style="color:#4285F4;font-weight:700;">G</span><span style="color:#EA4335;font-weight:700;">o</span><span style="color:#FBBC05;font-weight:700;">o</span><span style="color:#4285F4;font-weight:700;">g</span><span style="color:#34A853;font-weight:700;">l</span><span style="color:#EA4335;font-weight:700;">e</span> <i class="fa-solid fa-circle-info info-icon"></i>
                            </div>
                            <div class="review-count">Basada en 1,605 reseñas</div>
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
                        <h3 class="card-title">Gana recompensas<br>de regalo</h3>
                        <p class="card-desc">Gana hasta $100* en crédito de viaje después de cada reserva de vuelo</p>
                        <button class="reward-btn">
                            <i class="fa-solid fa-certificate badge-icon"></i>
                            <div class="btn-text">
                                <span class="hasta">HASTA</span>
                                <span class="amount">$100*</span>
                                <span class="creditos">CRÉDITOS DE VIAJE</span>
                            </div>
                        </button>
                        <a href="#" class="terms-link">*Sujeto a términos y condiciones</a>
                    </div>
                    <div class="fc-graphic">
                        <i class="fa-solid fa-gift gift-icon"></i>
                        <i class="fa-solid fa-plane plane-icon"></i>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="feature-card card-travelers">
                    <div class="avatars-wrapper">
                        <div class="avatars">
                            <img src="https://i.pravatar.cc/100?img=1" alt="user">
                            <img src="https://i.pravatar.cc/100?img=2" alt="user">
                            <img src="https://i.pravatar.cc/100?img=3" alt="user">
                            <img src="https://i.pravatar.cc/100?img=4" alt="user">
                            <img src="https://i.pravatar.cc/100?img=5" alt="user">
                            <img src="https://i.pravatar.cc/100?img=6" alt="user">
                        </div>
                        <div class="play-btn"><i class="fa-solid fa-play"></i></div>
                    </div>
                    <div class="fc-content">
                        <h4 class="text-blue">Más de 2 millones</h4>
                        <h3 class="highlight-title">Viajeros felices <span class="sparks">✨</span></h3>
                        <p class="card-desc">Nuestros viajeros hablan con el corazón. Aquí te contamos lo que tienen que decir.</p>
                        <a href="#" class="more-link">Más información <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="feature-card card-established">
                    <div class="fc-content">
                        <h4 class="text-dark">Establecido desde</h4>
                        <h2 class="year-text">2013</h2>

                        <div class="badges">
                            <div class="support-badge">
                                <i class="fa-solid fa-headset"></i> Soporte al cliente
                            </div>
                            <div class="status-badge">
                                <span class="dot"></span> Disponible
                            </div>
                        </div>
                    </div>
                    <div class="business-badge-wrapper">
                        <div class="business-badge">
                            <div class="bb-inner">
                                <div class="stars">★★★</div>
                                <div class="years">12+</div>
                                <div class="years-text">YEARS</div>
                                <div class="in-business">IN BUSINESS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="offers-section">
            <div class="container">
                <div class="offers-card">
                    <div class="offers-header">
                        <div class="badge-pill">OFERTAS DE LA SEMANA</div>
                        <h2>LAS MEJORES OFERTAS DE VUELOS SELECCIONADAS</h2>
                        <p>Accede a ofertas de vuelos inigualables adaptadas a tus necesidades de viaje. Explora y reserva las tarifas más bajas en las mejores aerolíneas.</p>
                    </div>

                    <div class="carousel-wrapper">
                        <button class="nav-btn prev-btn"><i class="fa-solid fa-chevron-left"></i></button>

                        <div class="offers-grid">
                            <!-- Offer 1 -->
                            <div class="offer-item">
                                <div class="offer-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1501854140801-50d01698950b?w=600&q=80" alt="Havana" class="city-img">
                                    <div class="offer-img-overlay"></div>
                                    <div class="offer-destination-badge">Havana</div>
                                    <div class="offer-price-badge">
                                        <span class="opb-from">A partir de</span>
                                        <span class="opb-amount">$285</span>
                                        <span class="opb-per">/ persona</span>
                                    </div>
                                    <div class="offer-overlay-content">
                                        <div class="route">Miami <i class="fa-solid fa-arrow-right-arrow-left"></i> Havana</div>
                                        <div class="offer-meta">
                                            <span class="airline-name"><i class="fa-solid fa-plane"></i> Alaska</span>
                                            <span class="class-pill">Clase Turista</span>
                                        </div>
                                        <div class="date-range"><i class="fa-regular fa-calendar"></i> Jul 21 &ndash; Jul 25, 2026</div>
                                        <button class="btn-reserve">Reserva ahora <i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Offer 2 -->
                            <div class="offer-item">
                                <div class="offer-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1605810230434-7631ac76ec81?w=600&q=80" alt="Las Vegas" class="city-img">
                                    <div class="offer-img-overlay"></div>
                                    <div class="offer-destination-badge">Las Vegas</div>
                                    <div class="offer-price-badge">
                                        <span class="opb-from">A partir de</span>
                                        <span class="opb-amount">$57</span>
                                        <span class="opb-per">/ persona</span>
                                    </div>
                                    <div class="offer-overlay-content">
                                        <div class="route">San Francisco <i class="fa-solid fa-arrow-right-arrow-left"></i> Las Vegas</div>
                                        <div class="offer-meta">
                                            <span class="airline-name"><i class="fa-solid fa-plane"></i> Frontier</span>
                                            <span class="class-pill">Clase Turista</span>
                                        </div>
                                        <div class="date-range"><i class="fa-regular fa-calendar"></i> Jul 27 &ndash; Jul 28, 2026</div>
                                        <button class="btn-reserve">Reserva ahora <i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Offer 3 -->
                            <div class="offer-item">
                                <div class="offer-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600&q=80" alt="Edmonton" class="city-img">
                                    <div class="offer-img-overlay"></div>
                                    <div class="offer-destination-badge">Edmonton</div>
                                    <div class="offer-price-badge">
                                        <span class="opb-from">A partir de</span>
                                        <span class="opb-amount">$58</span>
                                        <span class="opb-per">/ persona</span>
                                    </div>
                                    <div class="offer-overlay-content">
                                        <div class="route">Abbotsford <i class="fa-solid fa-arrow-right-arrow-left"></i> Edmonton</div>
                                        <div class="offer-meta">
                                            <span class="airline-name"><i class="fa-solid fa-plane"></i> Westjet</span>
                                            <span class="class-pill">Clase Turista</span>
                                        </div>
                                        <div class="date-range"><i class="fa-regular fa-calendar"></i> Jul 25 &ndash; Jul 27, 2026</div>
                                        <button class="btn-reserve">Reserva ahora <i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Offer 4 -->
                            <div class="offer-item">
                                <div class="offer-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=600&q=80" alt="Calgary" class="city-img">
                                    <div class="offer-img-overlay"></div>
                                    <div class="offer-destination-badge">Calgary</div>
                                    <div class="offer-price-badge">
                                        <span class="opb-from">A partir de</span>
                                        <span class="opb-amount">$71</span>
                                        <span class="opb-per">/ persona</span>
                                    </div>
                                    <div class="offer-overlay-content">
                                        <div class="route">Calgary <i class="fa-solid fa-arrow-right-arrow-left"></i> Edmonton</div>
                                        <div class="offer-meta">
                                            <span class="airline-name"><i class="fa-solid fa-plane"></i> Westjet</span>
                                            <span class="class-pill">Clase Turista</span>
                                        </div>
                                        <div class="date-range"><i class="fa-regular fa-calendar"></i> Jul 25 &ndash; Jul 27, 2026</div>
                                        <button class="btn-reserve">Reserva ahora <i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="nav-btn next-btn"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>


                </div>
            </div>
        </section>

        <section class="personalized-offers-section">
            <div class="container">
                <div class="po-grid">
                    <!-- Featured Card (big) -->
                    <div class="po-card po-featured">
                        <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?w=800&q=80" alt="Amigos celebrando" class="po-img">
                        <div class="po-overlay"></div>
                        <div class="po-badge">Ofertas de ultima hora</div>
                        <div class="po-content">
                            <h3>Hasta $50* de descuento al instante, así de fácil.</h3>
                            <a href="#" class="btn-outline-dashed">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Small Cards Column -->
                    <div class="po-small-col">
                        <div class="po-card po-small">
                            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=600&q=80" alt="Pareja con laptop" class="po-img">
                            <div class="po-overlay"></div>
                            <div class="po-badge">Ofertas por menos de $199</div>
                            <div class="po-content">
                                <h3>Vuela con más de 25% de descuento en los vuelos.</h3>
                                <a href="#" class="btn-outline-dashed">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="po-card po-small">
                            <img src="https://images.unsplash.com/photo-1505327191481-d35259e82c58?w=600&q=80" alt="Pareja mayor" class="po-img">
                            <div class="po-overlay"></div>
                            <div class="po-badge">Ofertas para personas mayores</div>
                            <div class="po-content">
                                <h3>Ahorre hasta $60* en vuelos para personas mayores.</h3>
                                <a href="#" class="btn-outline-dashed">Ver más <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <section class="social-community-section">
            <div class="container">
                <div class="sc-header">
                    <h2>FROM OUR SOCIAL COMMUNITY</h2>
                    <p>Videos shared by travelers showing how they found flight deals and booked on Cheapflightsfares.</p>
                </div>

                <div class="sc-grid">
                    <!-- Video 1 -->
                    <div class="sc-card">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=600&fit=crop" alt="Chris Francis" class="sc-img">
                        <div class="sc-overlay">
                            <p class="sc-review">Diligent Assistance For The Flight To Florida. A Smooth Experience With Cheapflightsfares.</p>
                            <div class="sc-author-row">
                                <div class="sc-author-info">
                                    <span class="sc-name">Chris Francis</span>
                                    <div class="sc-stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <button class="btn-play-review"><i class="fa-solid fa-play"></i> Play Review</button>
                            </div>
                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="sc-card">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=600&fit=crop" alt="V Morgan" class="sc-img">
                        <div class="sc-overlay">
                            <p class="sc-review">Great Deals On Flights. Best Price For Europe Flights. Excellent Callback Assistance.</p>
                            <div class="sc-author-row">
                                <div class="sc-author-info">
                                    <span class="sc-name">V Morgan</span>
                                    <div class="sc-stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <button class="btn-play-review"><i class="fa-solid fa-play"></i> Play Review</button>
                            </div>
                        </div>
                    </div>

                    <!-- Video 3 -->
                    <div class="sc-card">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=600&fit=crop" alt="Marius Chis" class="sc-img">
                        <div class="sc-overlay">
                            <p class="sc-review">Easy Booking, Great Service. Tons Of Flight Options On The Website. Loved It!</p>
                            <div class="sc-author-row">
                                <div class="sc-author-info">
                                    <span class="sc-name">Marius Chis</span>
                                    <div class="sc-stars">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <button class="btn-play-review"><i class="fa-solid fa-play"></i> Play Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="global-cta-section">
            <div class="container">
                <div class="global-cta-content">

            
                    <div class="global-cta-text">
                        <span class="global-cta-tag">READY TO FLY?</span>

                        <h2>Find Your Perfect Flight & Start Your Journey</h2>

                        <p>
                            Looking for the best flight options for your next trip?
                            Let our travel experts help you find the right itinerary
                            and make your booking simple, quick, and stress-free.
                        </p>

                        <div class="global-cta-buttons">
                            <a href="tel:18775133980" class="cta-primary-btn">
                                <i class="bi bi-telephone-fill"></i>
                                Call Now
                            </a>

                            <a href="/flights" class="cta-secondary-btn">
                                Explore Flights
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="global-cta-card">
                        <div class="cta-icon">
                            <i class="bi bi-airplane-fill"></i>
                        </div>

                        <h3>Let's Plan Your Trip</h3>

                        <p>
                            Get personalized travel assistance and explore
                            convenient flight options for your journey.
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
                            <div class="hc-card help-card">
                                <img src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=800&q=80" alt="Travel" class="help-bg">
                                <div class="help-overlay"></div>
                                <div class="help-content">
                                    <div class="agent-avatar"><img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Agent"></div>
                                    <h3>&iquest;Necesitas ayuda para encontrar ofertas?</h3>
                                    <p>Nuestros agentes est&aacute;n listos para ayudarte a encontrar ofertas de telefon&iacute;a.</p>
                                    <a href="#" class="reserve-link">Reserva ahora</a>
                                    <a href="tel:+12163022732" class="call-action-btn">
                                        <div class="call-icon-circle"><i class="fa-solid fa-phone"></i></div>
                                        <span>Llama 24/7: <strong>+1-216-302-2732</strong></span>
                                    </a>
                                </div>
                            </div>
                            <div class="hc-card car-card hc-horizontal">
                                <div class="hc-img-box car-img-box"><img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=500&q=80" alt="Car" class="hc-img"></div>
                                <div class="hc-details">
                                    <div class="car-title-row">
                                        <div>
                                            <h3>Audit A4</h3>
                                            <p class="sub-text">o SUV de tama&ntilde;o mediano</p>
                                        </div>
                                        <div class="vendor-logo">dollar.</div>
                                    </div>
                                    <div class="car-features-price">
                                        <div class="features-pill">
                                            <span><i class="fa-solid fa-user"></i> 5</span>
                                            <span><i class="fa-solid fa-car-side"></i> 4</span>
                                            <span><i class="fa-solid fa-suitcase"></i> 1</span>
                                        </div>
                                        <div class="price-display"><span class="desde">Desde</span> <span class="price-green">$37</span><span class="unit">/d&iacute;a</span></div>
                                    </div>
                                    <button class="btn-blue-block">Reserva ahora</button>
                                </div>
                            </div>
                            <div class="hc-card hotel-card hc-horizontal">
                                <div class="hc-img-box"><img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=500&q=80" alt="Hotel Room" class="hc-img"></div>
                                <div class="hc-details">
                                    <h3>Planet Hollywood Resort &amp; Casino</h3>
                                    <p class="sub-text">3667 Las Vegas Blvd S, Las Vegas, NV 89109, US</p>
                                    <div class="hotel-stars-price">
                                        <div class="stars-gold"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" style="color: #e0e0e0;"></i></div>
                                        <div class="price-display"><span class="desde">Desde</span> <span class="price-green">$51</span></div>
                                    </div>
                                    <button class="btn-blue-block">Reserva ahora</button>
                                </div>
                            </div>
                            <div class="hc-card vacation-card hc-horizontal">
                                <div class="hc-img-box"><img src="https://images.unsplash.com/photo-1510097467424-192d713fd8b2?w=500&q=80" alt="Cancun" class="hc-img"></div>
                                <div class="hc-details">
                                    <div class="vac-badge">Paquete Vacacional</div>
                                    <h3>Canc&uacute;n, M&eacute;xico</h3>
                                    <p class="sub-text">Vuelo + Hotel + Traslado incluido</p>
                                    <div class="vac-includes">
                                        <span><i class="fa-solid fa-plane"></i> Vuelo</span>
                                        <span><i class="fa-solid fa-building"></i> Hotel 5&#9733;</span>
                                        <span><i class="fa-solid fa-van-shuttle"></i> Traslado</span>
                                    </div>
                                    <div class="price-display" style="margin:10px 0;"><span class="desde">Desde</span> <span class="price-green">$499</span><span class="unit">/persona</span></div>
                                    <button class="btn-blue-block">Reserva ahora</button>
                                </div>
                            </div>
                            <div class="hc-card vacation-card hc-horizontal">
                                <div class="hc-img-box"><img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=500&q=80" alt="Paris" class="hc-img"></div>
                                <div class="hc-details">
                                    <div class="vac-badge">Paquete Vacacional</div>
                                    <h3>Par&iacute;s, Francia</h3>
                                    <p class="sub-text">Vuelo + Hotel + Tour incluido</p>
                                    <div class="vac-includes">
                                        <span><i class="fa-solid fa-plane"></i> Vuelo</span>
                                        <span><i class="fa-solid fa-building"></i> Hotel 4&#9733;</span>
                                        <span><i class="fa-solid fa-map-location-dot"></i> Tour</span>
                                    </div>
                                    <div class="price-display" style="margin:10px 0;"><span class="desde">Desde</span> <span class="price-green">$899</span><span class="unit">/persona</span></div>
                                    <button class="btn-blue-block">Reserva ahora</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hc-header">
                        <h2>LAS MEJORES OFERTAS DE HOTELES Y AUTOS</h2>
                        <p>Consiga estancias en hoteles de primera categor&iacute;a y ofertas exclusivas de alquiler de autos, dise&ntilde;adas por nuestro equipo de expertos en viajes y adaptadas a todos los presupuestos.</p>
                        <div class="hc-right-cards">
                            <div class="hc-card vacation-card hc-horizontal">
                                <div class="hc-img-box"><img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=500&q=80" alt="Bali" class="hc-img"></div>
                                <div class="hc-details">
                                    <div class="vac-badge">Paquete Vacacional</div>
                                    <h3>Bali, Indonesia</h3>
                                    <p class="sub-text">Vuelo + Hotel + Tour incluido</p>
                                    <div class="vac-includes">
                                        <span><i class="fa-solid fa-plane"></i> Vuelo</span>
                                        <span><i class="fa-solid fa-building"></i> Hotel 5&#9733;</span>
                                        <span><i class="fa-solid fa-map-location-dot"></i> Tour</span>
                                    </div>
                                    <div class="price-display" style="margin:10px 0;"><span class="desde">Desde</span> <span class="price-green">$749</span><span class="unit">/persona</span></div>
                                    <button class="btn-blue-block">Reserva ahora</button>
                                </div>
                            </div>
                            <div class="hc-card vacation-card hc-horizontal">
                                <div class="hc-img-box"><img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?w=500&q=80" alt="New York" class="hc-img"></div>
                                <div class="hc-details">
                                    <div class="vac-badge">Paquete Vacacional</div>
                                    <h3>New York, EE.UU.</h3>
                                    <p class="sub-text">Vuelo + Hotel + Traslado incluido</p>
                                    <div class="vac-includes">
                                        <span><i class="fa-solid fa-plane"></i> Vuelo</span>
                                        <span><i class="fa-solid fa-building"></i> Hotel 4&#9733;</span>
                                        <span><i class="fa-solid fa-van-shuttle"></i> Traslado</span>
                                    </div>
                                    <div class="price-display" style="margin:10px 0;"><span class="desde">Desde</span> <span class="price-green">$399</span><span class="unit">/persona</span></div>
                                    <button class="btn-blue-block">Reserva ahora</button>
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
                            <div class="blog-brand-tag">Travel Blog</div>
                            <h2>FOREVER NOMAD</h2>  
                            <p>Desde series de viajes épicos y consejos exclusivos hasta las últimas noticias y trucos de viaje, encuéntralo todo en Forever Nomad.</p>
                            <a href="#" class="blog-view-all">Ver todos los artículos <i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        <!-- Right: Articles -->
                        <div class="blog-articles">
                            <div class="blog-article-card">
                                <div class="bac-img">
                                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=500&q=80" alt="Airport terminal">
                                </div>
                                <div class="bac-content">
                                    <span class="bac-date">jul 20, 2026</span>
                                    <h3>United Airlines Flight Change &amp; Cancellation Policy: Complete Guide</h3>
                                    <p>United Airlines has eliminated the change fee on its flights. You can now change your ticket without paying extra fees.</p>
                                    <a href="#" class="bac-read">Leer más <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="blog-article-card">
                                <div class="bac-img">
                                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=500&q=80" alt="American Airlines plane">
                                </div>
                                <div class="bac-content">
                                    <span class="bac-date">jul 20, 2026</span>
                                    <h3>American Airlines Flight Change &amp; Cancellation Policy: Complete Guide</h3>
                                    <p>Most American Airlines tickets booked for Main Cabin and above can be changed for free.</p>
                                    <a href="#" class="bac-read">Leer más <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="blog-article-card">
                                <div class="bac-img">
                                    <img src="https://images.unsplash.com/photo-1605810230434-7631ac76ec81?w=500&q=80" alt="Dallas to Las Vegas">
                                </div>
                                <div class="bac-content">
                                    <span class="bac-date">jul 17, 2026</span>
                                    <h3>Dallas to Las Vegas Flight: A Complete Travel Guide</h3>
                                    <p>Dallas to Las Vegas flight route is one of the busiest domestic leisure corridors in the United States.</p>
                                    <a href="#" class="bac-read">Leer más <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bottom-cards-section">
            <div class="container">
                <!-- Rewards Card -->
                <div class="rewards-card">
                    <div class="rc-left">
                        <!-- Using a generic gift image as placeholder for the vector graphic -->
                        <img src="https://images.unsplash.com/photo-1549465220-1a8b9238cd48?w=300&q=80" alt="Rewards" class="rc-img">
                    </div>
                    <div class="rc-middle">
                        <h2>REGÍSTRATE Y OBTÉN RECOMPENSAS</h2>
                        <ul class="rc-benefits">
                            <li><i class="fa-solid fa-check"></i> Ofertas exclusivas para miembros</li>
                            <li><i class="fa-solid fa-check"></i> Acceso a salas VIP</li>
                            <li><i class="fa-solid fa-check"></i> Puntos de recompensa</li>
                            <li><i class="fa-solid fa-check"></i> Alertas y notificaciones</li>
                        </ul>
                    </div>
                    <div class="rc-right">
                        <button class="btn-gradient-orange">Únase ahora<br>gratis</button>
                    </div>
                </div>

                <!-- SEO Text Card -->
                <div class="seo-card">
                    <h2>Encuentra vuelos baratos y ofertas de viajes en Cheapflightsfares</h2>
                    <p>¿Buscas los vuelos más baratos al destino de tus sueños? ¡Has llegado al lugar indicado! En Cheapflightsfares, nos especializamos en encontrar las mejores ofertas de vuelos a destinos de todo el mundo. Ya sea que planees una escapada de fin de semana, unas vacaciones muy esperadas o un viaje de negocios, te ayudamos a reservar vuelos económicos sin complicaciones. Nuestra tecnología de vanguardia garantiza una experiencia de reserva de vuelos rápida, segura y sin complicaciones, permitiéndote encontrar las mejores tarifas aéreas con solo unos clics.</p>
                    <a href="#" class="read-more-link">Leer más</a>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="site-footer">
            <div class="footer-top">
                <div class="container">
                    <!-- Left: Logo + Tagline -->
                    <div class="footer-brand">
                        <a href="#" class="footer-logo">
                            <span class="logo-icon">Global </span>
                            <span class="logo-text">Air Hub</span>
                        </a>
                        <p class="footer-tagline">Your trusted travel partner since 2013. Find the best flight deals, hotels, and car rentals worldwide.</p>
                        <a href="tel:+12163022732" class="footer-phone">
                            <i class="fa-solid fa-phone"></i>
                            <span>+1-216-302-2732</span>
                        </a>
                    </div>

                    <!-- Right: Links Grid -->
                    <div class="footer-links-grid">
                        <div class="footer-col">
                            <h4 class="text-orange">Quick Links</h4>
                            <ul>
                                <li><a href="#">Popular Airlines</a></li>
                                <li><a href="#">Popular Flight Routes</a></li>
                                <li><a href="#">Top Destinations in the USA</a></li>
                                <li><a href="#">Main International Destinations</a></li>
                                <li><a href="#">Main Airports</a></li>
                                <li><a href="#">Cruises</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>BOOKING</h4>
                            <ul>
                                <li><a href="#">Cheap flights</a></li>
                                <li><a href="#">Cheap hotels</a></li>
                                <li><a href="#">Car rental</a></li>
                                <li><a href="#">Group trips</a></li>
                                <li><a href="#">Gift Cards</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>TOOLS FOR TRAVELERS</h4>
                            <ul>
                                <li><a href="#">Customer service</a></li>
                                <li><a href="#">Online Billing</a></li>
                                <li><a href="#">Airline baggage fees</a></li>
                                <li><a href="#">Travel blog</a></li>
                                <li><a href="#">Customer reviews</a></li>
                                <li><a href="#">Browser compatibility</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>ABOUT US</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Site map</a></li>
                            </ul>
                            <h4 style="margin-top:24px;">LEGAL NOTICE</h4>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Taxes and fees</a></li>
                                <li><a href="#">Post-ticketing rates</a></li>
                                <li><a href="#">Affiliate program</a></li>
                                <li><a href="#">Your privacy rights in California</a></li>
                                <li><a href="#">Travel now, pay later with Flex Pay</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copy">&copy; 2026 Cheapflightsfares. All rights reserved.</p>
                    <div class="footer-social">
                        <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="js/main.js"></script>
</body>

</html>