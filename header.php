<?php
  // Get the name of the current PHP script
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Dynamic Title Placeholder - You can set this variable on each page -->
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Ade Popoola | Lehigh Valley Apartment Building Buyer & Investor'; ?></title>
    
    <!-- Add other meta tags as needed -->
    <meta content="Ade Popoola buys apartment buildings in Lehigh Valley, PA, and beyond. A multifamily investor with $30M in acquisitions, he ensures a quick, hassle-free sale for property owners looking to sell their apartment building." name="description" />
    <meta content="real estate, apartment buildings, multifamily, investor, Lehigh Valley, Pennsylvania, property buyer" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
    <!-- Custom CSS with cache-busting parameters -->
    <link href="css/modern.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <link href="css/fixes.css?v=<?php echo time(); ?>" rel="stylesheet" />
    
    <!-- Force mobile viewport scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
  /* Container appearance */
  .form-all {
    background-color: #fff !important;
    border-radius: 0.75rem !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
    padding: 2rem !important;
    border: none !important;
    max-width: 700px;
    margin: 0 auto;
  }

  /* Input fields */
  .form-textbox,
  .form-textarea,
  .mask-phone-number {
    width: 100% !important;
    padding: 0.75rem 1rem !important;
    border: 1px solid #ced4da !important;
    border-radius: 0.5rem !important;
    font-size: 1rem !important;
    font-weight: 400;
    background-color: #fff !important;
    box-shadow: none !important;
    outline: none;
    transition: border-color 0.3s ease;
  }

  .form-textarea {
    resize: vertical !important;
    min-height: 150px !important;
  }

  .form-textbox:focus,
  .form-textarea:focus {
    border-color: #86b7fe !important;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25) !important;
  }

  /* Labels */
  .form-label {
    font-weight: 600 !important;
    margin-bottom: 0.5rem !important;
    font-size: 1rem;
    color: #333 !important;
  }

  /* Consent checkbox */
  .form-single-column label {
    font-size: 0.9rem !important;
    color: #444 !important;
  }

  /* Button styling */
  .form-submit-button {
    background-color: #2563eb !important;
    border: none !important;
    color: white !important;
    font-size: 1rem !important;
    padding: 0.75rem 2.5rem !important;
    border-radius: 0.5rem !important;
    font-weight: 600;
    margin-top: 1rem;
    transition: all 0.2s ease-in-out;
  }

  .form-submit-button:hover {
    background-color: #1d4ed8 !important;
  }

  /* Remove double name field */
  #id_27 {
    display: none !important;
  }

  /* Spacing */
  .form-line {
    margin-bottom: 1.5rem !important;
  }

  /* Hide JotForm branding if shown */
  .form-footer,
  #stage {
    display: none !important;
  }

  /* Responsive alignment */
  @media screen and (min-width: 768px) {
    .form-col-1 {
      display: flex;
      gap: 1.5rem;
    }

    .form-col-1 .form-input-wide {
      flex: 1;
    }
  }
</style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5ZQV4R3G');</script>
<!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- ======= Preloader (only shown on index page) ======= -->
    <?php if ($currentPage == 'index.php'): ?>
    <div id="preloader">
      <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/>
        </svg>
        <h3>Ade Popoola</h3>
      </div>
    </div>
    <?php endif; ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NL9N1P8RL5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NL9N1P8RL5');
</script>
    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container">
        <!-- Logo/title with dropdown functionality on mobile -->
        <h1 class="logo">
          <a href="index.php" class="d-none d-md-block">Ade Popoola</a>
          <a href="#" class="d-md-none mobile-dropdown-toggle">Ade Popoola</a>
        </h1>
        
        <!-- Desktop Navigation -->
        <nav id="navbar" class="navbar d-none d-md-flex">
          <ul class="desktop-nav">
            <li><a class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
            <li><a class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a></li>
           <!-- <li><a class="<?php echo ($currentPage == 'blog.php') ? 'active' : ''; ?>" href="https://www.rei.mba/market-intel">Blog</a></li>-->
            <li><a class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
          </ul>
        </nav><!-- .desktop-navbar -->
        
        <!-- Mobile Dropdown Menu (initially hidden) -->
        <div id="mobile-dropdown-menu" class="mobile-dropdown-menu">
          <ul class="mobile-nav">
            <li><a class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
            <li><a class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a></li>
            <!--<li><a class="<?php echo ($currentPage == 'blog.php') ? 'active' : ''; ?>" href="https://www.rei.mba/market-intel">Blog</a></li>-->
            <li><a class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
          </ul>
        </div>
        
        <!-- Mobile Dropdown Toggle Script -->
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            const mobileDropdownToggle = document.querySelector('.mobile-dropdown-toggle');
            const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
            
            if (mobileDropdownToggle && mobileDropdownMenu) {
              // Set initial state
              mobileDropdownMenu.style.display = 'none';
              
              // Toggle dropdown when clicking on Ade Popoola text
              mobileDropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                if (mobileDropdownMenu.style.display === 'none') {
                  mobileDropdownMenu.style.display = 'block';
                } else {
                  mobileDropdownMenu.style.display = 'none';
                }
              });
              
              // Close dropdown when clicking anywhere else on the page
              document.addEventListener('click', function(e) {
                if (!e.target.closest('.mobile-dropdown-toggle') && !e.target.closest('#mobile-dropdown-menu')) {
                  mobileDropdownMenu.style.display = 'none';
                }
              });
            }
          });
        </script>

      </div>
    </header><!-- End Header -->


