<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoodsDeal - Your Ultimate Destination for Amazing E-commerce Deals</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <style>
    /* CSS Styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #white;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      font-size: 28px;
      margin: 0;
    }
    .banner-image {
      width: 100%;
      max-height: 300px;
    }
    .container {
      max-width: 960px;
      margin: 20px auto;
      padding: 0 20px;
    }
    .section {
      margin-bottom: 40px;
    }
    .section h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    .section p {
      line-height: 1.6;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-weight: bold;
    }
    .newsletter {
      text-align: center;
      margin-top: 40px;
    }
    .newsletter input {
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      border: none;
      margin-right: 10px;
      width: 250px;
    }
    .newsletter button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-weight: bold;
    }
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    footer p {
      margin: 0;
    }
  </style>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section id="header">
    <a href="#"><img src="img/logo1.png" class = "logo" alt=""></a>
    <div>
        <ul id="navbar">
        <li><a class = "active" href="welcome.php">Home</a></li>
        <li><a href="#shopping">Shop</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li id="lg-bag"><a href="cart.php"><i class="bi bi-cart-dash-fill cart"></i></a></li>
        <a href="#" id="close"><i class="bi bi-x"></i></a>
     </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="bi bi-cart-dash-fill cart"></i></a>
        <i id="bar" class="bi bi-box-arrow-left"></i>

    </div>
</section>
  <header>
    <h1>Welcome to GoodsDeal: Your Ultimate Destination for Amazing E-commerce Deals</h1>
  </header>
  <div class="container">
    <section class="section">
      <h2>Why Choose GoodsDeal?</h2>
      <p><strong>1. Unbeatable Deals</strong></p>
      <p>At GoodsDeal, we believe in offering our customers the best value for their money. Our dedicated team works tirelessly to source products directly from manufacturers and suppliers, ensuring that we can provide you with the lowest prices possible. With our incredible deals, you can save big on all your favorite products.</p>

      <p><strong>2. Wide Product Selection</strong></p>
      <p>We understand that everyone has unique preferences and requirements when it comes to shopping. That's why we offer a vast selection of products across various categories. Whether you're searching for the latest tech gadgets, trendy fashion items, or stylish home decor, you'll find it all at GoodsDeal. Our user-friendly website makes it easy to navigate through our extensive collection and find exactly what you need.</p>

      <p><strong>3. Exceptional Quality</strong></p>
        <p>We understand that everyone has unique preferences and requirements when it comes to shopping. That's why we offer a vast selection of products across various categories. Whether you're searching for the latest tech gadgets, trendy fashion items, or stylish home decor, you'll find it all at GoodsDeal. Our user-friendly website makes it easy to navigate through our extensive collection and find exactly what you need.</p>

        <p><strong>4. Secure and Convenient Shopping Experience</strong></p>
        <p>Shopping at GoodsDeal is not only affordable and diverse, but it's also secure and convenient. Our website is equipped with advanced security measures to safeguard your personal and payment information. We also offer multiple secure payment options, allowing you to choose the one that suits you best. With our user-friendly interface and efficient order processing system, shopping at GoodsDeal is a breeze.</p>
  
        <p><strong>5. Exceptional Customer Support</strong></p>
        <p>Your satisfaction is our top priority. Our dedicated customer support team is available to assist you with any queries, concerns, or feedback you may have. Whether you need help with product selection, tracking an order, or resolving an issue, our friendly and knowledgeable support staff is just a message away.</p>
      </section>
  
      <section class="section">
        <h2>Stay Up-to-Date with the Latest Deals</h2>
        <p>Don't miss out on the hottest deals and exclusive offers! Sign up for our newsletter and be the first to know about our latest promotions, discounts, and product launches. Simply enter your email address below to stay informed.</p>
        <div class="newsletter">
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit">Subscribe</button>
        </div>
      </section>
  
      <section class="section">
        <h2>Start Saving Today!</h2>
        <p>Are you ready to embark on a fantastic shopping journey filled with incredible deals? Visit GoodsDeal now and explore our extensive range of products. We're confident that you'll find everything you need at prices that will make you smile. Happy shopping!</p>
        <a class="btn" href="welcome.php">Visit GoodsDeal Now</a>
      </section>
    </div>
  
    <section id="newsletter" class="section-p1">
        <div class="newstext">
            <h4>Sign Up for Newletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers. </span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
  </body>
  </html>
  