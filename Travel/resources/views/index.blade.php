<!DOCTYPE html>
<html lang="en" ng-app="searchApp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Web Design Mastery | SKYWINGS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">Skywings</a>
        </div>
        <div class="nav__search" ng-controller="SearchController">
          <div class="search-box">
            <input type="text" ng-model="searchQuery" placeholder="Search destinations...">
            <button class="search-btn" ng-click="search()">
              <i class="ri-search-line"></i>
            </button>
          </div>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#tour">TOUR</a></li>
        <li><a href="#package">PACKAGE</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#trips/index.blade.php">BOOK TRIP</a></li>
        <li><a href="login.blade.php">LOGIN NOW!</a></li>
      </ul>
      <div class="nav__btns">
        <button class="btn" onclick="window.location.href='/trips'">BOOK TRIP</button>
      </div>
      <div class="nav__btns">
        <button class="btn" onclick="window.location.href='/login'">LOGIN</button>
      </div>
    </nav>

    <header id="home">
      <div class="header__container">
        <div class="header__content">
          <p>ELEVATE YOUR TRAVEL JOURNEY</p>
          <h1>Experience The Magic Of Flight!</h1>
          <div class="header__btns">
            <button class="btn">Book A Trip Now</button>
            <a href="#">
              <span><i class="ri-play-circle-fill"></i></span>
            </a>
          </div>
        </div>
        <div class="header__image">
          <img src="assets/header.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container destination__container" id="about">
      <h2 class="section__header">Popular Destination</h2>
      <p class="section__description">
        Discover the Most Loved Destinations Around the Globe
      </p>
      <div class="destination__grid">
        <div class="destination__card">
          <img src="assets/destination-1.jpg" alt="destination" />
          <div class="destination__card__details">
            <div>
              <h4>Tradition and Futurism</h4>
              <p>New York City, USA</p>
            </div>
            <div class="destination__rating">
              <span><i class="ri-star-fill"></i></span>
              4.7
            </div>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-2.jpg" alt="destination" />
          <div class="destination__card__details">
            <div>
              <h4>The City of Lights</h4>
              <p>Paris, France</p>
            </div>
            <div class="destination__rating">
              <span><i class="ri-star-fill"></i></span>
              4.5
            </div>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-3.jpg" alt="destination" />
          <div class="destination__card__details">
            <div>
              <h4>Island of the Gods</h4>
              <p>Bali, Indonesia</p>
            </div>
            <div class="destination__rating">
              <span><i class="ri-star-fill"></i></span>
              4.8
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container journey__container" id="tour">
      <h2 class="section__header">Journey To The Sky Made Simple!</h2>
      <p class="section__description">
        Effortless Planning for Your Next Adventure
      </p>
      <div class="journey__grid">
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-bookmark-3-line"></i></span>
            <h4>Seamless Booking Process</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-bookmark-3-line"></i></span>
            <h4>Easy Reservations, One Click Away</h4>
            <p>
              From flights and accommodations to activities and transfers,
              everything you need is available at your fingertips, making travel
              planning effortless.
            </p>
          </div>
        </div>
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-landscape-fill"></i></span>
            <h4>Tailored Itineraries</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-landscape-fill"></i></span>
            <h4>Customized Plans Just for You</h4>
            <p>
              Enjoy personalized travel plans designed to match your preferences
              and interests. Whether you seek adventure or cultural immersion,
              our tailored itineraries ensure your journey is uniquely yours.
            </p>
          </div>
        </div>
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-map-2-line"></i></span>
            <h4>Expert Local Insights</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-map-2-line"></i></span>
            <h4>Insider Tips and Recommendations</h4>
            <p>
              We provide curated recommendations for dining, sightseeing, and
              hidden gems, so you can experience each destination like a local.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container showcase__container" id="package">
      <div class="showcase__image">
        <img src="assets/showcase.jpg" alt="showcase" />
      </div>
      <div class="showcase__content">
        <h4>UNLEASH WANDERLUST WITH SKYWINGS</h4>
        <p>
          Embark on a journey like no other with Skywings, where your travel
          dreams come to life. Our mission is to inspire and facilitate your
          adventures, whether you seek the vibrant energy of bustling
          cityscapes, the serene beauty of pristine beaches, or the captivating
          history of ancient landmarks. At Skywings, we provide expertly curated
          destinations and personalized itineraries, ensuring that every trip is
          tailored to your unique preferences. Discover hidden gems, immerse
          yourself in diverse cultures, and create unforgettable memories that
          will last a lifetime.
        </p>
        <p>
          With Skywings as your ultimate travel companion, exploring the wonders
          of the world has never been easier. Our insider tips and local
          insights give you access to destinations beyond the usual tourist
          spots, allowing you to truly experience the heart and soul of each
          place. From luxurious getaways to budget-friendly adventures, we offer
          a wide range of packages to suit all travel styles and budgets.
        </p>
      </div>
    </section>

    <section class="section__container subscribe__container" id="contact">
      <h2 class="section__header">Stay In Touch!</h2>
      <p class="section__description">
        Subscribe to our Newsletter for Travel Inspiration and Updates
      </p>
      <div class="subscribe__form">
        <input type="email" placeholder="Enter your email" required />
        <button class="btn">Subscribe Now</button>
      </div>
    </section>

    <footer>
      <div class="footer__container">
        <div class="footer__logo">
          <a href="#">Skywings</a>
        </div>
        <div class="footer__social">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
          <a href="#"><i class="ri-linkedin-fill"></i></a>
        </div>
        <div class="footer__links">
          <a href="#">Terms</a>
          <a href="#">Privacy</a>
          <a href="#">Help</a>
        </div>
        <p>&copy; 2024 Skywings. All rights reserved.</p>
      </div>
    </footer>

    <script>
      angular.module('searchApp', []).controller('SearchController', function ($scope) {
        $scope.search = function () {
          alert('Searching for: ' + $scope.searchQuery);
        };
      });

      // Handle popup
      document.getElementById("openSubscribePopup").onclick = function() {
        document.getElementById("subscribePopup").style.display = "block";
      };

      document.getElementById("closePopup").onclick = function() {
        document.getElementById("subscribePopup").style.display = "none";
      };
    </script>
  </body>
</html>
