<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <!-- STYLES -->
    <link rel="stylesheet" href="../styles/login.css?2" />
    <link rel="stylesheet" href="../styles/style.css?3" />
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
    <script src="../scripts/app.js?9"></script>
  </head>
  <body onload="get_user_info();">
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
    <section id="top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="top-background-gradient"></div>
            <div class="top-header">
              <h1>Roʻyxatdan oʻtish</h1>
              <div class="top-nav">
                <a href="login.php">Tizimga kirish</a>
                <i class="fa fa-arrows-h home-page-link"></i>
                <a href="signup.php">Roʻyxatdan oʻtish</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="login-form">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 image-area">
            <img src="../images/keyboard.png" alt="image not available" />
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h3>YANGI HISOB YARATISH</h3>
            <div class="row">
              <div class="form-box" action="" method="post">
                <div class="col-md-12 compact-entry-area">
                  <div class="col-md-6">
                    <input
                      id="first_name"
                      class="login-input"
                      type="text"
                      name="first_name"
                      placeholder="Ismingiz"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Ismingiz'"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      id="last_name"
                      class="login-input"
                      type="text"
                      name="last_name"
                      placeholder="Familiyangiz"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Familiyangiz'"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-12 compact-entry-area">
                  <div class="col-md-6">
                    <input
                      id="date_of_birth"
                      type="text"
                      class="login-input"
                      placeholder="Tug'ilgan Sanangiz"
                      onfocus="this.type='date'"
                      onblur="this.type='text'"
                      required
                    />
                  </div>
                  <div class="col-md-6 select-gender-area">
                    <select
                      name="gender"
                      id="gender"
                      class="login-input gender-placeholder"
                      required
                    >
                      <option value="" disabled selected hidden>Jinsingiz</option>
                      <option value="M">Erkak</option>
                      <option value="F">Ayol</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <input
                    type="text"
                    id="address"
                    class="login-input"
                    placeholder="Shaxaringiz"
                    onfocus="this.placeholder=''"
                    onblur="this.placeholder='Shaxaringiz'"
                    required
                  />
                </div>
                <div class="col-md-12">
                  <input
                    id="email"
                    class="login-input"
                    type="text"
                    name="email"
                    placeholder="Email"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Email'"
                    required
                  />
                </div>
                <div class="col-md-12 signup-password-area">
                  <div class="col-sm-12">
                    <input
                      id="password_register"
                      class="login-input signup-password"
                      type="password"
                      name="password_register"
                      placeholder="Parolingiz"
                      onfocus="this.placeholder = ''"
                      onkeyup="compare_passwords();"
                      onblur="this.placeholder = 'Parolingiz'"
                      required
                    />
                  </div>
                  <div class="col-sm-12">
                    <input
                      id="confirm_password_register"
                      class="login-input signup-password confirm"
                      type="password"
                      name="confirm_password_register"
                      placeholder="Parolni qaytaring"
                      onfocus="this.placeholder = ''"
                      onkeyup="compare_passwords();"
                      onblur="this.placeholder = 'Confirm Password'"
                      required
                    />
                  </div>
                  <div id="confirm_password_text" class="col-sm-12">
                    <p></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <button onclick="register();" class="login-button">
                    <strong>Roʻyxatdan o'tish</strong>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include "footer.html"?>
    <script src="scripts/animations.js"></script>
  </body>
</html>
