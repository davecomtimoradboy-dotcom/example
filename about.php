<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us | Elegance Restaurant</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="loader"><span></span></div>

<header>
<div class="nav">
<a href="index.php" class="logo">ELEGANCE</a>
<button class="menu-toggle" aria-label="Open menu">☰</button>
<nav>
<a href="index.php">Home</a>
<a href="menu.php">Menu</a>
<a href="about.php" class="active">About</a>
<a href="contact.php">Contact</a>
<a href="reservation.php" class="nav-btn">Reserve</a>
</nav>
</div>
</header>

<main>
<section class="page-hero">
<div class="page-hero-content reveal">
<p class="eyebrow">OUR STORY</p>
<h1>Where passion meets <span>elegance.</span></h1>
<p>Discover the story, philosophy and people behind an unforgettable dining experience.</p>
</div>
</section>

<section class="about-section section reveal">
<div class="about-grid">
<div class="about-image">
<img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=85" alt="Elegant restaurant interior">
</div>
<div class="about-copy">
<p class="eyebrow">ABOUT ELEGANCE</p>
<h2>Dining created with purpose.</h2>
<p>Elegance Restaurant was created for people who believe great food should be more than a meal. Every plate combines carefully selected ingredients, bold flavours and refined presentation.</p>
<p>From intimate dinners to special celebrations, our goal is to create a warm atmosphere where excellent food, thoughtful service and memorable moments come together.</p>
<a href="reservation.php" class="btn">Reserve a Table</a>
</div>
</div>
</section>

<section class="statement reveal">
<div>
<p class="eyebrow">OUR PHILOSOPHY</p>
<h2>“Every dish tells a story.”</h2>
<p>We celebrate local flavours while giving every dish a modern and luxurious touch.</p>
</div>
</section>

<section class="section reveal">
<div class="section-head">
<div>
<p class="eyebrow">WHY CHOOSE US</p>
<h2>The Elegance experience.</h2>
</div>
</div>
<div class="feature-grid">
<div class="feature">
<span>01</span>
<h3>Quality Ingredients</h3>
<p>We choose fresh, carefully sourced ingredients to create dishes with rich flavour and character.</p>
</div>
<div class="feature">
<span>02</span>
<h3>Refined Dining</h3>
<p>Our atmosphere is designed to make every visit comfortable, beautiful and memorable.</p>
</div>
<div class="feature">
<span>03</span>
<h3>Warm Service</h3>
<p>From the moment you arrive, our team is committed to making your experience exceptional.</p>
</div>
</div>
</section>

<section class="about-cta reveal">
<div>
<p class="eyebrow">YOUR TABLE AWAITS</p>
<h2>Make your next meal unforgettable.</h2>
<a href="reservation.php" class="btn">Book Your Table</a>
</div>
</section>
</main>

<footer>
<div class="footer-grid">
<div><a href="index.php" class="logo">ELEGANCE</a><p>Where flavour becomes art.</p></div>
<div><p>Abuja, Nigeria</p><p>+234 800 000 0000</p></div>
<div><p>hello@elegancerestaurant.com</p><p>Open daily · 12PM – 11PM</p></div>
</div>
<p class="copyright">© <?php echo date('Y'); ?> Elegance Restaurant. All rights reserved.</p>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
