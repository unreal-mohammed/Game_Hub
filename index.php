<?php
include ("dbconn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Hub - Your Gaming Destination</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body id="top">

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar">
        <div class="logo">
            <img src="images/logo.png" alt="Game Hub Logo">
            <span class="logo-text">GAME HUB</span>
        </div>

        <ul class="nav-links">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#games">Games</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="nav-actions">
            <a href="#" class="btn-login">Sign In</a>
            <a href="#" class="btn-cta">Get Started</a>
        </div>

        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <!-- ================= HERO SECTION ================= -->
    <section id="home" class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <span class="hero-badge">🎮 Ultimate Gaming Platform</span>
            <h1>Find The Best <span class="highlight">Games</span></h1>
            <p class="hero-subtitle">Discover, play, and explore the hottest games — all in one epic platform powered by AI recommendations.</p>
            
            <div class="hero-buttons">
                <a href="#games" class="btn-primary">
                    <i class="fas fa-gamepad"></i> Explore Games
                </a>
                <a href="#features" class="btn-secondary">
                    <i class="fas fa-star"></i> Learn More
                </a>
            </div>

            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Games</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50K+</span>
                    <span class="stat-label">Players</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.9</span>
                    <span class="stat-label">Rating</span>
                </div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="game-controller">
                <i class="fas fa-gamepad"></i>
            </div>
            <div class="glow-effect"></div>
        </div>
    </section>

    <!-- ================= FEATURES SECTION ================= -->
    <section id="features" class="features">
        <div class="section-header">
            <span class="section-tag">Why Choose Us</span>
            <h2>Our <span class="highlight">Features</span></h2>
            <p>Everything you need for the ultimate gaming experience</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>AI Game Recommender</h3>
                <p>Get personalized game recommendations based on your preferences and gaming history.</p>
                <div class="feature-glow"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3>Tournament Mode</h3>
                <p>Join tournaments, compete with other players, and win exciting prizes.</p>
                <div class="feature-glow"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Multiplayer Lobby</h3>
                <p>Find teammates, join gaming squads, and play together seamlessly.</p>
                <div class="feature-glow"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Game Analytics</h3>
                <p>Track your progress, analyze performance, and improve your skills.</p>
                <div class="feature-glow"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-cloud-download"></i>
                </div>
                <h3>Cloud Gaming</h3>
                <p>Play high-end games on any device without downloading or installation.</p>
                <div class="feature-glow"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Safe Gaming</h3>
                <p>Secure account protection, parental controls, and fair play enforcement.</p>
                <div class="feature-glow"></div>
            </div>
        </div>
    </section>

    <!-- ================= GAMES SECTION ================= -->
    <section id="games" class="games-section">
        <div class="section-header">
            <span class="section-tag">Popular Now</span>
            <h2>Trending <span class="highlight">Games</span></h2>
            <p>Discover the most popular games chosen by our community</p>
        </div>

        <div class="games-grid">
            <div class="game-card">
                <div class="game-image">
                    <img src="images/game1.jpg.jpeg" alt="FIFA 23">
                    <div class="game-overlay">
                        <span class="game-rating">⭐ 4.8</span>
                        <span class="game-category">Sports</span>
                    </div>
                </div>
                <div class="game-info">
                    <h3>FIFA 23</h3>
                    <p>The ultimate football simulation game</p>
                    <a href="#" class="btn-play">Play Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="game-card">
                <div class="game-image">
                    <img src="images/game2.jpg.jpeg" alt="Adventure Quest">
                    <div class="game-overlay">
                        <span class="game-rating">⭐ 4.6</span>
                        <span class="game-category">Adventure</span>
                    </div>
                </div>
                <div class="game-info">
                    <h3>Adventure Quest</h3>
                    <p>Epic open-world adventure awaits</p>
                    <a href="#" class="btn-play">Play Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="game-card">
                <div class="game-image">
                    <img src="images/game3.jpg" alt="Battle Arena">
                    <div class="game-overlay">
                        <span class="game-rating">⭐ 4.9</span>
                        <span class="game-category">Action</span>
                    </div>
                </div>
                <div class="game-info">
                    <h3>Battle Arena</h3>
                    <p>Multiplayer combat experience</p>
                    <a href="#" class="btn-play">Play Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="game-card">
                <div class="game-image">
                    <img src="images/game4.jpg" alt="Puzzle Master">
                    <div class="game-overlay">
                        <span class="game-rating">⭐ 4.4</span>
                        <span class="game-category">Puzzle</span>
                    </div>
                </div>
                <div class="game-info">
                    <h3>Puzzle Master</h3>
                    <p>Challenge your brain</p>
                    <a href="#" class="btn-play">Play Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="game-card">
                <div class="game-image">
                    <img src="images/game5.jpg" alt="Speed Racer">
                    <div class="game-overlay">
                        <span class="game-rating">⭐ 4.7</span>
                        <span class="game-category">Racing</span>
                    </div>
                </div>
                <div class="game-info">
                    <h3>Speed Racer</h3>
                    <p>High-octane racing action</p>
                    <a href="#" class="btn-play">Play Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="game-card">
                <div class="game-image">
                    <img src="images/game1.jpg.jpeg" alt="Strategy Kings">
                    <div class="game-overlay">
                        <span class="game-rating">⭐ 4.5</span>
                        <span class="game-category">Strategy</span>
                    </div>
                </div>
                <div class="game-info">
                    <h3>Strategy Kings</h3>
                    <p>Command your empire</p>
                    <a href="#" class="btn-play">Play Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="view-all">
            <a href="#" class="btn-view-all">View All Games <i class="fas fa-angle-double-right"></i></a>
        </div>
    </section>

    <!-- ================= ABOUT SECTION ================= -->
    <section id="about" class="about-section">
        <div class="about-content">
            <div class="about-text">
                <span class="section-tag">About Game Hub</span>
                <h2>The Future of <span class="highlight">Gaming</span></h2>
                <p>Game Hub is your ultimate destination for discovering, playing, and connecting with gamers worldwide. Our AI-powered platform recommends games tailored to your preferences, while our community features let you compete, collaborate, and share your gaming journey.</p>
                
                <div class="about-features">
                    <div class="about-item">
                        <i class="fas fa-check-circle"></i>
                        <span>500+ Curated Games</span>
                    </div>
                    <div class="about-item">
                        <i class="fas fa-check-circle"></i>
                        <span>AI-Powered Recommendations</span>
                    </div>
                    <div class="about-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Global Gaming Community</span>
                    </div>
                    <div class="about-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Regular Content Updates</span>
                    </div>
                </div>

                <a href="#contact" class="btn-primary">Join Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="about-visual">
                <div class="about-card">
                    <i class="fas fa-headset"></i>
                    <h3>24/7</h3>
                    <p>Support</p>
                </div>
                <div class="about-card">
                    <i class="fas fa-globe"></i>
                    <h3>100+</h3>
                    <p>Countries</p>
                </div>
                <div class="about-card">
                    <i class="fas fa-award"></i>
                    <h3>Award</h3>
                    <p>Winning</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA SECTION ================= -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to <span class="highlight">Level Up</span>?</h2>
            <p>Join thousands of gamers and start your adventure today!</p>
            <div class="cta-buttons">
                <a href="#" class="btn-primary btn-large">Get Started Free</a>
                <a href="#" class="btn-secondary btn-large">Watch Demo</a>
            </div>
        </div>
        <div class="cta-glow"></div>
    </section>

    <!-- ================= CONTACT SECTION ================= -->
    <section id="contact" class="contact-section">
        <div class="section-header">
            <span class="section-tag">Get In Touch</span>
            <h2>Contact <span class="highlight">Us</span></h2>
            <p>Have questions? We'd love to hear from you!</p>
        </div>

        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>support@gamehub.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Phone</h4>
                        <p>+1 234 567 890</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Location</h4>
                        <p>Gaming City, World</p>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-discord"></i></a>
                </div>
            </div>

            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <select>
                        <option>Select Topic</option>
                        <option>General Inquiry</option>
                        <option>Support</option>
                        <option>Partnership</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-primary">Send Message <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <div class="logo">
                    <img src="images/logo.png" alt="Game Hub Logo">
                    <span class="logo-text">GAME HUB</span>
                </div>
                <p>Your ultimate destination for discovering and playing the best games. Join our community of gamers worldwide!</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-discord"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#games">Games</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Categories</h4>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Racing</a></li>
                    <li><a href="#">Puzzle</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Legal</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">DMCA</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Game Hub. All rights reserved. Made with <i class="fas fa-heart"></i> by Game Hub Team</p>
        </div>
    </footer>

    <!-- ================= BACK TO TOP ================= -->
    <a href="#top" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script src="js/script.js"></script>
</body>

</html>
            <button>Explore Games</button>
        </a>
    </div>

    <!-- ================= STATS ================= -->
    <div class="stats">
        <div>
            <h3>🎮 50+</h3>
            <p>Games</p>
        </div>

        <div>
            <h3>👥 1K+</h3>
            <p>Players</p>
        </div>

        <div>
            <h3>⭐ 4.8</h3>
            <p>Rating</p>
        </div>
    </div>

    <!-- ================= FEATURED GAME ================= -->
    <div class="featured-game">
        <h2>🔥 Featured Game</h2>

        <div class="featured-card">
            <img src="images/game1.jpg.jpeg" alt="Featured Game">

            <div>
                <h3>FIFA 23</h3>
                <p>Most popular football game 🎮</p>

                <a href="javascript:void(0)" class="play-btn"
                   onclick="openModal('FIFA 23','Football game with realistic graphics','4.7')">
                   Play Now
                </a>
            </div>
        </div>
    </div>

    <!-- ================= GAMES ================= -->
    <div class="games">
        <h2>Popular Games</h2>

        <div class="game-card">
            <img src="images/game5.jpg" alt="Game 1">

            <a href="javascript:void(0)" class="play-btn"
               onclick="openModal('Game 1','Racing speed game','4.5')">
               Play Now
            </a>
        </div>

        <div class="game-card">
            <img src="images/game2.jpg.jpeg" alt="Game 2">

            <a href="javascript:void(0)" class="play-btn"
               onclick="openModal('Game 2','Adventure survival game','4.3')">
               Play Now
            </a>
        </div>

        <div class="game-card">
            <img src="images/game3.jpg" alt="Game 3">

            <a href="javascript:void(0)" class="play-btn"
               onclick="openModal('Game 3','Action multiplayer game','4.6')">
               Play Now
            </a>
        </div>

        <div class="game-card">
            <img src="images/game4.jpg" alt="Game 4">

            <a href="javascript:void(0)" class="play-btn"
               onclick="openModal('Game 4','Puzzle brain game','4.2')">
               Play Now
            </a>
        </div>
    </div>

    <!-- ================= WHY US ================= -->
    <div class="why-us">
        <h2>Why Game Hub?</h2>

        <ul>
            <li>✔ Free Games</li>
            <li>✔ Fast Loading</li>
            <li>✔ Mobile Friendly</li>
            <li>✔ Updated Weekly</li>
        </ul>
    </div>

    <!-- ================= DATE ================= -->
    <div class="date-box">
        <span>📅 Today</span>
        <p id="date"></p>
    </div>

    <!-- ================= BACK TO TOP ================= -->
    <a href="#top">⬆ Back to Top</a>

    <!-- ================= MODAL ================= -->
    <div id="gameModal" class="modal">
        <div class="modal-content">

            <span class="close" onclick="closeModal()">&times;</span>

            <h2 id="gameTitle">Game Title</h2>
            <p id="gameDesc">Game description here...</p>
            <p id="gameRate">⭐ Rating</p>

            <button class="modal-btn">Play Now</button>
        </div>
    </div>

    <!-- ================= JS ================= -->
    <script src="js/script.js"></script>

    <script>
        document.getElementById("date").innerHTML =
            new Date().toDateString();
    </script>

</body>

</html>