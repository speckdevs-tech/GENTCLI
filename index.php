<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gentcli | Home</title>
    <?php include 'Components/links.php'; ?>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include 'Components/header.php'; ?>
    <section class="hero">
        <div class="overlay"></div>
        <div class="h-main">
            <h2 class="paragraph">Spring / Summer 2025</h2>
            <h1 class="heading">Timeless<br>Elegance</h1>
            <p class="paragraph">Discover our carefully curated collection of <br>contemporary essentials, designed for
                the modern <br>individual who values quality and style.</p>
            <div class="btns">
                <button class="paragraph">Explore Collection</button>
                <button class="paragraph">Our Story</button>
            </div>
        </div>
        <img src="images/hero.png" alt="Hero Image">
    </section>
    <!-- end of hero section -->
    <section class="newarrivals">
        <h2 class="paragraph">Featured</h2>
        <div class="row">
            <h1 class="heading">New Arrivals</h1>
            <button>View All <ion-icon name="arrow-forward-outline"></ion-icon></button>
        </div>
        <div class="products">
            <a href="">

                <div class="product">
                    <div class="imgbox">
                        <img src="images/product-1.jpg" alt="Product 1">
                    </div>
                    <h3 class="heading">Classic Blazer</h3>
                    <p class="category paragraph">Top</p>
                    <p class="paragraph">$199.99</p>
                </div>
            </a>
            <a href="">

                <div class="product">
                    <div class="imgbox">
                        <img src="images/product-2.jpg" alt="Product 2">
                    </div>
                    <h3 class="heading">Tailored Trousers</h3>
                    <p class="category paragraph">Top</p>
                    <p class="paragraph">$149.99</p>
                </div>
            </a>
            <a href="">

                <div class="product">
                    <div class="imgbox">
                        <img src="images/product-3.jpg" alt="Product 1">
                    </div>
                    <h3 class="heading">Classic Blazer</h3>
                    <p class="category paragraph">Top</p>
                    <p class="paragraph">$199.99</p>
                </div>
            </a>
            <a href="">

                <div class="product">
                    <div class="imgbox">
                        <img src="images/product-4.jpg" alt="Product 2">
                    </div>
                    <h3 class="heading">Tailored Trousers</h3>
                    <p class="category paragraph">Top</p>
                    <p class="paragraph">$149.99</p>
                </div>
            </a>
        </div>
    </section>
    <!-- end of new arrivals section -->
     <section class="category-highlight">
  <div class="container">
    <div class="category-grid">

      <div class="category-card">
        <img src="images/product-2.jpg" alt="category-highlight">
        <div class="overlay">
          <!-- <span class="paragraph">COATS & JACKETS</span> -->
          <h3 class="heading">Women Wear</h3>
        </div>
      </div>

      <div class="category-card">
        <img src="images/product-4.jpg" alt="category-highlight">
        <div class="overlay">
          <!-- <span class="paragraph">SWEATERS & CARDIGANS</span> -->
          <h3 class="heading">Men Wear</h3>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- CATEGORY HILIGHT ENDS HERE -->
 <section class="newsletter">
  <div class="container">
    <h2 class="heading">Stay in the Loop</h2>
    <p class="paragraph">Be the first to know about new arrivals, exclusive offers, and styling tips delivered <br>straight to your inbox.</p>

    <form class="subscribe-form">
      <input type="email" placeholder="Enter your email">
      <button class="paragraph">Subscribe</button>
    </form>

    <p class="paragraph small">By subscribing, you agree to our Privacy Policy and consent to receive updates.</p>
  </div>
</section>
<!-- news letter ends here -->
 <footer class="footer">
  <div class="container">

    <div class="footer-grid">

      <div class="footer-col newsletter-col">
        <h4 class="heading">Join Our World</h4>
        <p class="paragraph">Subscribe to receive updates on new arrivals, exclusive offers, and styling inspiration.</p>

        <form class="footer-form">
          <input type="email" placeholder="Enter your email">
          <button class="paragraph">Subscribe</button>
        </form>
      </div>

      <div class="footer-col">
        <h4 class="heading">Shop</h4>
        <ul>
          <li><a href="#" class="paragraph">New Arrivals</a></li>
          <li><a href="#" class="paragraph">Best Sellers</a></li>
          <li><a href="#" class="paragraph">Women Wear</a></li>
          <li><a href="#" class="paragraph">Men Wear</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Help</h4>
        <ul>
          <li><a href="#" class="paragraph">Shipping & Returns</a></li>
          <li><a href="#" class="paragraph">Size Guide</a></li>
          <li><a href="#" class="paragraph">FAQs</a></li>
          <li><a href="#" class="paragraph">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="#" class="paragraph">About Us</a></li>
          <li><a href="#" class="paragraph">Sustainability</a></li>
          <li><a href="#" class="paragraph">Careers</a></li>
        </ul>
      </div>

    </div>
    
    <div class="footer-bottom">
      <div class="logo heading">Gentcli</div>
      <div class="copyright paragraph" >
        © 2025 Gentcli. All rights reserved.
      </div>
    </div>

  </div>
</footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>