<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/gotham-pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Manrope:600,800&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="img/icon.svg" type="image/svg" />
  <title>Discounts On Services</title>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__container bounding-box">
        <div class="header__logo logo">
          <img class="logo__img" src="img/logo.png" alt="DiscountsOnServices">
          <a class="logo__link" href="">DiscountsOnServices</a>
        </div>
        <div class="header__burger-menu burger-menu">
          <a class="burger-menu__link" href=""><img src="img/burger-menu.png"></a>
        </div>
        <nav class="header__menu menu">
          <ul class="menu__list">
            <li class="menu__item sub-menu">
              <a href="" class="menu-open menu__link">Subscriptions</a>
              <span class="sub-menu__down"></span>
              <ul class="menu-open__list">
                <li class="sub-menu__item">
                  <a href="" class="sub-menu__link">Netflix</a>
                </li>
                <li class="sub-menu__item">
                  <a href="" class="sub-menu__link">YouTube Premium</a>
                </li>
                <li class="sub-menu__item">
                  <a href="" class="sub-menu__link">Spotify</a>
                </li>
              </ul>
            </li>
            <li class="menu__item">
              <a href="" class="menu__link">FAQ</a>
            </li>
            <li class="menu__item">
              <a href="" class="menu__link">Support</a>
            </li>
            <li class="menu__item">
              <a href="" class="menu__link">About</a>
            </li>
          </ul>
        </nav>
        <div class="header__login login-box">
          <nav class="login-box__networks networks">
            <ul class="networks__list">
              <li class="networks__item">
                <a href="" class="networks__link"><img src="img/header-whatsapp.png" alt=""></a>
              </li>
              <li class="networks__item">
                <a href="" class="networks__link"><img src="img/header-telegram.png" alt=""></a>
              </li>
            </ul>
          </nav>
          <nav class="login-box__lang lang">
            <ul class="lang__list">
              <li class="lang__item">
                <a href="" class="lang__select">EN</a>
                <span class="sub-menu__down"></span>
                <ul class="lang__open-list">
                  <li class="lang__sub-item">
                    <a href="" class="lang__link">English</a>
                  </li>
                  <li class="lang__sub-item">
                    <a href="" class="lang__link">Ukraine</a>
                  </li>
                  <li class="lang__sub-item">
                    <a href="" class="lang__link">Russian</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <button class="login-box__login" type="button">Log in</button>
        </div>
      </div>
    </header>
    <main class="main">
      <div class="main-container bounding-box">
        <section class="main-container__box left-box">
          <h1>Start enjoying a benefit of up to 50%</h1>
          <p>You have always wanted to get the same product at a special price for you, without haggling - and it is yours.</p>
          <button><p>Start using</p></button>
        </section>
        <section class="main-container__box right-box">
          <div class="right-box__img"></div>
        </section>
      </div>
      <div class="subscription bounding-box">
        <h2 id="subscription-title">Choose a subscription</h2>
        <section class="subscription__box netflix">
          <div class="netflix__info">
            <h2>Netflix subscription rates</h2>
            <p>The constant contributes to the task of the same and thus the intended features and the set relation to the check and set also.</p>
            <button><p>Learn more</p></button>
          </div>
          <div class="netflix__logo"><img src="img/netflix-logo.jpg" class="netflix__logo-img"></div>
        </section>
        <section class="subscription__box spotify">
          <div class="spotify__info">
            <h2>Spotify Premium</h2>
            <p>The constant contributes to the task of the same and thus the intended features and the set relation to the check and set also.</p>
            <button><p>Learn more</p></button>
          </div>
          <div class="spotify__logo"><img src="img/spotify-logo.jpg" class="spotify__logo-img"></div>
        </section>
        <section class="subscription__box youtube">
          <div class="youtube__info">
            <h2>YouTube Premium</h2>
            <p>The constant contributes to the task of the same and thus the intended features and the set relation to the check and set also.</p>
            <button><p>Learn more</p></button>
          </div>
          <div class="youtube__logo"><img src="img/youtube-logo.jpg" class="youtube__logo-img"></div>
        </section>
      </div>
    </main>
    <footer class="footer"></footer>
  </div>
  <script src="js/script.js"></script>
</body>

</html>