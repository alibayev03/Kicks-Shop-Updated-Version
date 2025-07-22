<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- STYLES -->
    <link rel="stylesheet" href="./styles/style.css?15" />
    <link rel="stylesheet" href="./styles/footer.css" />

    <!-- HEADER ICON -->
    <link
      rel="shortcut icon"
      href="./images/header_icon.ico"
      type="image/x-icon"
    />
    <!-- FONTAWESOME LINK -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;800&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap Links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- AJAX AND JQUERY-->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- javascript script -->
    <script src="scripts/app.js?3"></script>

    <title>Bosh sahifa</title>
  </head>
  <body onload="get_user_info('home');">
    <header>
      <nav class="flex">
        <a href=""><img src="./images/logo.png" alt="logo" class="logo" /></a>
        <ul class="links flex">
          <li><a href="./index.php">Bosh sahifa</a></li>
          <li><a href="pages/shop.php">Do'kon</a></li>
          <li><a href="pages/contacts.php">Aloqa</a></li>
          <li>
            <a href="pages/cart.php">
              <i class="fa-solid fa-cart-shopping">
                <span class="badge bg-dark" id="cart_count">0</span></i
              >
            </a>
          </li>
          <li id="login_btn"><a href="pages/login.php">Tizimga kirish</a></li>
        </ul>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>
    <img src="./images/main-background.png" alt="" class="main-background" />
    <main>
      <section class="first-section flex">
        <div class="info">
          <h3>Oyoq kiyimlar do'koni</h3>
          <p>
            Bu bizning onlayn do'konimiz <a href="pages/shop.php"><strong style="color:rgba(255, 157, 0, 0.799); text-decoration:none">Mahsulotlarni ko'rish</strong> </a>
            <br> Bu yerda siz o'zingiz yoqtirgan krossovkalar brendlari bo'yicha eng yaxshi chegirmalarni topishingiz mumkin!
          </p>
          <div class="add-to-bag">
            <button class="shop-btn">
              <a href="pages/shop.php"
                ><i class="text-light fa-solid fa-cart-shopping"></i
              ></a>
            </button>
            <span>Maxsulotni tanlash</span>
          </div>
        </div>
        <div class="main-image">
          <img src="./images/product3.png" alt="main-image" class="logo" />
        </div>
      </section>
      <section class="second-section">
        <div class="mission flex">
          <div class="card">
            <h2><i class="fa-solid fa-truck"></i></h2>
            <h4>Bepul yetkazib berish</h4>
            <p>Barcha buyurtmalar uchun bepul yetkazib berish</p>
          </div>
          <div class="card">
            <h2><i class="fa-solid fa-rotate-left"></i></h2>
            <h4>Qaytarish siyosati</h4>
            <p>Moslashuvchan qaytarish siyosati</p>
          </div>
          <div class="card">
            <h2><i class="fa-solid fa-headphones"></i></h2>
            <h4>24/7 Aloqa</h4>
            <p>Ajoyib xizmat ko'rsatish jamoasi</p>
          </div>
          <div class="card">
            <h2><i class="fa-solid fa-database"></i></h2>
            <h4>Xavfsiz to'lov</h4>
            <p>Ishonchli va tasdiqlangan to'lovlar</p>
          </div>
        </div>
        <div class="title"><h2>Gallery</h2></div>
        <div class="shoe-gallery">
          <div class="grid-pic grid-pic1">
            <img src="./images/shoe-gallery-pic1.jpg" alt="gallery-img1" />
          </div>
          <div class="grid-pic grid-pic2">
            <img src="./images/shoe-gallery-pic2.jpg" alt="gallery-img2" />
          </div>
          <div class="grid-pic grid-pic3">
            <img src="./images/shoe-gallery-pic3.jpg" alt="gallery-img3" />
          </div>
          <div class="grid-pic grid-pic4">
            <img src="./images/shoe-gallery-pic4.jpg" alt="gallery-img4" />
          </div>
          <div class="grid-pic grid-pic5">
            <img src="./images/shoe-gallery-pic5.jpg" alt="gallery-img5" />
          </div>
        </div>
        <div class="title">
          <h2>Bizning Nike kolleksiyamiz</h2>
        </div>
        <div class="shoe-gallery">
          <div class="grid-pic grid-pic1">
            <img src="./images/n1.avif" alt="gallery-img1" />
          </div>
          <div class="grid-pic grid-pic2">
            <img src="./images/n5.avif" alt="gallery-img2" />
          </div>
          <div class="grid-pic grid-pic3">
            <img src="./images/n3.avif" alt="gallery-img3" />
          </div>
          <div class="grid-pic grid-pic4">
            <img src="./images/n4.avif" alt="gallery-img4" />
          </div>
          <div class="grid-pic grid-pic5">
            <img src="./images/n2.avif" alt="gallery-img5" />
          </div>
        </div>
      </section>
    </main>
  <?php include "pages/footer.html"; ?>

    <!-- javascript file -->
    <script src="scripts/animations.js"></script>
  </body>
</html>
