<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- STYLES -->
    <link rel="stylesheet" href="../styles/login.css" />
    <link rel="stylesheet" href="../styles/style.css?11" />
    <link rel="stylesheet" href="../styles/footer.css" />

    <!-- HEADER ICON -->
    <link
      rel="shortcut icon"
      href="../images/header_icon.ico"
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
    <script src="../scripts/app.js?10"></script>
    <style>
      h3,
      h1 {
        color: black;
        font-weight: 400;
      }
    </style>
    <title>shop</title>
  </head>
  <body onload="get_products();">
    <header>
      <nav class="flex">
        <a href="../index.php"><img src="../images/logo.png" alt="logo" class="logo" /></a>
        <ul class="links flex">
          <li><a href="../index.php">Bosh sahifa</a></li>
          <li><a href="./shop.php">Do'kon</a></li>
          <li><a href="./contacts.php">Aloqa</a></li>
          <li>
            <a href="./cart.php">
              <i class="fa-solid fa-cart-shopping">
                <span class="badge bg-dark" id="cart_count">0</span></i
              >
            </a>
          </li>
        
        </ul>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>
    <main class="shop-main">
      <section class="product-section">
        <div class="filters">
          <h3>Buyurtmani qabul qilish</h3>
          <select onchange="get_products();" name="" id="category-filter">
            <option value="">Hammasi</option>
            <option value="Men">Erkaklar</option>
            <option value="Women">Ayollar</option>
            <option value="Kids">Yosh bolalar</option>
          </select>
          <h3><i class="fa-solid fa-filter"></i> Filters</h3>
          <label for="">Brand</label>
          <select onchange="get_products();" id="brands-filter">
            <option value="">All</option>
            <option value="Nike">Nike</option>
            <option value="Addidas">Addidas</option>
            <option value="Puma">Puma</option>
            <option value="Mango">Mango</option>
            <option value="Vance">Vance</option>
          </select>
          <label for="">Price</label>
          <select onchange="get_products();" name="" id="price-filter">
            <option value="">Hammasi</option>
            <option value="low">0 - 299 000 UZS</option>
            <option value="medium">1 000 000 - 5 000 000 UZS</option>
            <option value="high">5 000 000 UZS va yuqori</option>
          </select>
        </div>

        <div class="products">
          <div onkeyup="get_products();" class="search-product">
            <input
              type="text"
              id="search-product-input"
              placeholder="Maxsulotlarni izlash..."
            />
            <button>
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
          <div class="showing-result flex">
            <h3>Barcha Mahsulotlar: <span id="filter-result">Barcha Mahsulotlar</span></h3>
            <div>
              <label>Price bo'yicha saralash</label>
              <select
                onchange="get_products();"
                id="sort_price"
                class="btn btn-outline-dark mx-3"
              >
                <option value="DESC">Baland narxdan pastga</option>
                <option value="ASC">Past narxdan tepaga</option>
              </select>
              <button
                id="toggle-filter-btn"
                class="btn btn-outline-dark"
                onclick="filter_toggle();"
              >
                <i class="fa-solid fa-sliders"></i> Filtrni bilan boshqaruv
              </button>
            </div>
          </div>
          <div class="latest-products"></div>
        </div>
      </section>
    </main>
    <?php include "footer.html"?>
    <script src="../scripts/animations.js?8"></script>
  </body>
</html>
