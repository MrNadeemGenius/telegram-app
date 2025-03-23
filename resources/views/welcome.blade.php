@php
  use App\Models\Settings;

  $settings = Settings::first(); // Retrieve the current settings
@endphp
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required Meta Tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <meta name="theme-color" content="#004dff" />
  <meta name="author" content="Powerd By DigiTal MarkeT" />
  <meta name="language" content="en" />
  <meta name="distribution" content="global" />
  <meta name="rating" content="general" />

  <link rel="icon" type="image/png" href="{{ env('LIGHT_LOGO') }}" />


  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}" />

  <!-- Dynamic Title and Description -->
  <title>
    Powerd By DigiTal MarkeT Monetag User Task
  </title>



  <!-- Preloading Critical Resources -->
  <link rel="preload" href="{{ asset('assets/css/styles.css') }}" as="style">
  <link rel="preload" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" as="style">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/dist/sweetalert2.min.css') }}" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css" />
  <link rel="stylesheet" href="{{ asset('assets/libs/daterangepicker/daterangepicker.css') }}" />

  <script src="//niphaumeenses.net/vignette.min.js" data-zone="{{ $settings->monetag_id }}"
    data-sdk="show_{{ $settings->monetag_id }}"></script>
  <script src="https://sad.adsgram.ai/js/sad.min.js"></script>
  <!-- Developed By Powerd By DigiTal MarkeT -->
  <!-- Custom Loader -->
  <style>
    /* From Uiverse.io by AqFox */
    .spinner {
      width: 44px;
      height: 44px;
      animation: spinner-y0fdc1 2s infinite ease;
      transform-style: preserve-3d;
    }

    .spinner>div {
      background-color: rgba(0, 77, 255, 0.2);
      height: 100%;
      position: absolute;
      width: 100%;
      border: 2px solid #004dff;
    }

    .spinner div:nth-of-type(1) {
      transform: translateZ(-22px) rotateY(180deg);
    }

    .spinner div:nth-of-type(2) {
      transform: rotateY(-270deg) translateX(50%);
      transform-origin: top right;
    }

    .spinner div:nth-of-type(3) {
      transform: rotateY(270deg) translateX(-50%);
      transform-origin: center left;
    }

    .spinner div:nth-of-type(4) {
      transform: rotateX(90deg) translateY(-50%);
      transform-origin: top center;
    }

    .spinner div:nth-of-type(5) {
      transform: rotateX(-90deg) translateY(50%);
      transform-origin: bottom center;
    }

    .spinner div:nth-of-type(6) {
      transform: translateZ(22px);
    }

    @keyframes spinner-y0fdc1 {
      0% {
        transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
      }

      50% {
        transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
      }

      100% {
        transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
      }
    }

    .loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(255, 255, 255, 0.9);
      /* Optional: Light overlay */
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1050;
      /* Higher than Bootstrap modal z-index */
    }
  </style>

  <style>
    :root {
      --primary-gradient: linear-gradient(135deg, #6a11cb, #2575fc);
      --icon-size: 1.5rem;
      --fab-size: 65px;
    }

    .footer-nav {
      background: var(--primary-gradient);
    }

    .nav-item {
      transition: transform 0.2s ease-in-out, opacity 0.2s;
    }

    .nav-item:hover {
      transform: scale(1.1);
      opacity: 0.9;
    }

    .nav-item-center {
      width: var(--fab-size);
      height: var(--fab-size);
      border: 4px solid white;
      background: white;
      color: var(--primary-gradient);
    }

    .nav-item-center i {
      font-size: 1.8rem;
      color: #6a11cb;
    }
  </style>
</head>

<body>




  <!-- Navigation Bar -->
  <nav class="d-flex align-items-center justify-content-between bg-primary p-3 shadow-lg">
    <div class="d-flex align-items-center">
      <img src="https://placehold.co/50" height="50" width="50" alt="Profile Picture"
        class="rounded-circle me-3 border border-light profile-pic" />
      <div class="user-info">
        <h3 class="mb-0 text-white fw-bold UserName">Powerd By DigiTal MarkeT</h3>
        <p class="mb-0 text-light fw-semibold user-balance">$100</p>
      </div>
    </div>
  </nav>





  <main class="pb-5">
    <div id="alert-container" class="mt-4"></div>
    <!-- Profile Section -->
    <section class="profile-section container py-4" id="home">
      <div class="row justify-content-center">

        <div class="col-lg-12 col-xl-6 d-flex align-items-strech">
          <div class="card w-100">
            <div class="card-body position-relative">
              <div>
                <h5 class="mb-1 fw-bold">Welcome <span class="UserName">Powerd By DigiTal MarkeT</span></h5>
                <p class="fs-3 mb-3 pb-1">Start Earning Money Now</p>
                <button onclick="showSection('earn')" class="btn btn-primary rounded-pill" type="button">
                  Earn Now
                </button>
              </div>
              <div class="school-img d-none d-sm-block">
                <img src="../assets/images/backgrounds/school.png" class="img-fluid" alt="">
              </div>

              <div class="d-sm-none d-block text-center">
                <img src="../assets/images/backgrounds/school.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 d-flex align-items-strech">
          <div class="card info-card overflow-hidden text-bg-primary w-100">
            <div class="card-body p-4">
              <div class="mb-7">
                <i class="ti ti-currency-dollar fs-8 fw-lighter"></i>
              </div>
              <h5 class="text-white fw-bold fs-14 text-nowrap lifetime_earning" id="totalEarnings">
                0
              </h5>
              <p class="opacity-50 mb-0">Total Earnings</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 d-flex align-items-strech">
          <div class="card info-card overflow-hidden text-bg-dark w-100">
            <div class="card-body p-4">
              <div class="mb-7">
                <i class="ti ti-ad fs-8 fw-lighter"></i>
              </div>
              <h5 class="text-white fw-bold fs-14 text-nowrap totalAdsWatched" id="totalAdsWatched" class="totalAdsWatched">
                0
              </h5>
              <p class="opacity-50 mb-0">Total Ads Watched</p>
            </div>
          </div>
        </div>


      </div>


    </section>

<section class="container p-4 mb-4 bg-white rounded shadow-lg" id="refer">
      <h2 class="text-primary fw-bold text-center mb-4">🚀 Referral Program</h2>

      <!-- Referral Link & Share Options -->
      <div class="row mb-5">
        <div class="col-md-6">
          <h5 class="text-dark mb-3">Your Referral Link</h5>
          <div class="d-flex align-items-center border rounded p-2 shadow-sm">
            <input type="text" class="form-control border-0 refer-link" value="https://t.me/your_bot?start=ABC123"
              id="refer-link" readonly />
          </div>
          <p class="text-muted mt-2">Share your referral link and earn rewards for every friend who joins!</p>
        </div>

        <div class="col-md-6 text-center">
          <h5 class="text-dark mb-3">Share on Telegram</h5>
          <a id="reffer_now" href="" class="btn btn-outline-primary btn-lg px-4 py-2 shadow-sm rounded-pill">
            <i class="bi bi-telegram fs-5 me-2"></i> Share on Telegram
          </a>
        </div>
      </div> 

      <!-- Referrals Count & List -->
      <div class="row">
        <!-- Referrals Count Card -->
        <div class="col-md-4">
          <div class="card border-0 shadow-sm text-center p-3">
            <h5 class="text-primary fw-bold">Total Referrals</h5>
            <h2 class="text-success fw-bold refferCount" id="refferCount">0</h2>
          </div>
        </div>

      </div>
    </section>

    <section class="d-none earn-section container py-4 bg-light rounded shadow-sm" id="earn" style="height: 100vh">
      <h2 class="text-primary mb-4 text-center fw-bold">Earn Rewards</h2>

      <div class="row g-4">
        <!-- Task Progress -->
        <div class="col-md-6">
          <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body p-4">
              <h5 class="card-title text-primary fw-bold">Today's Tasks</h5>
              <p class="mb-2"><strong>Total Tasks:</strong> <span id="taskCount" class="text-dark fw-semibold taskCount">0</span>
              </p>
              <p class="mb-2"><strong>Completed:</strong> <span id="tasksCompleted"
                  class="text-success fw-semibold tasksCompleted">0</span></p>
              <p class="mb-2"><strong>Remaining:</strong> <span id="tasksRemaining"
                  class="text-danger fw-semibold tasksRemaining">0</span></p>

              <!-- Progress Bar -->
              <div class="progress my-3" style="height: 1.5rem;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60"
                  aria-valuemin="0" aria-valuemax="100">
                  60% Completed
                </div>
              </div>
              

              <!-- Start Task Button -->
              <button id="show-ad" class="btn btn-primary w-100 fw-semibold shadow-sm">
                Start Earning <i class="bi bi-play-fill ms-1"></i>
              </button
              </div>
              </div>
              <!-- Support Button -->
<button id="support-button" class="btn btn-primary w-100 fw-semibold shadow-sm" onclick="window.open('https://t.me/All_In_One_Nadeem', '_blank')">
  Support <i class="bi bi-telegram ms-1"></i>
</button>
            </div>
          </div>
        </div>
        

        <!-- Referral Section -->
        <div class="col-md-6">
          <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body p-4">
              <h5 class="card-title text-primary fw-bold">Refer & Earn</h5>
              <p class="mb-2"><strong>Total Referrals:</strong> <span id="refferCount"
                  class="text-dark fw-semibold refferCount">0</span></p>

              <!-- Progress Bar -->
              <div class="progress mb-3">
                <div id="refferProgress" class="progress-bar bg-success" style="width: 0%;" role="progressbar"></div>
              </div>

              <!-- Refer Now Button -->
              <a onclick="showSection('refer')" class="btn btn-success w-100 fw-semibold shadow-sm">
                Invite Friends <i class="bi bi-share-fill ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Custom Styles -->
      <style>
        .card {
          border-radius: 15px;
          transition: all 0.3s ease-in-out;
        }

        .card:hover {
          transform: scale(1.02);
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .progress {
          height: 8px;
          border-radius: 5px;
          overflow: hidden;
        }

        .btn {
          transition: all 0.3s ease-in-out;
        }

        .btn:hover {
          transform: scale(1.05);
        }
      </style>
    </section>

    <section class="withdraw-section container py-5 bg-light rounded shadow-lg" id="withdraw" style="min-height: 100vh">
      <!-- Withdraw Section Heading -->
      <h2 class="text-primary mb-4 text-center fw-bold">Withdraw Funds</h2>

      <!-- Balance Display -->
      <div class="text-center mb-4">
        <h3 class="text-secondary fw-semibold">
          <strong>Available Balance:</strong>
          <span class="user-balance text-success fw-bold fs-4">0.00</span>
        </h3>
      </div>

      <!-- Withdraw Form -->
      <div class="card border-0 shadow-lg rounded-4 p-4">
        <div class="card-body">
          <h5 class="card-title text-info fw-bold mb-3">Request Withdrawal</h5>
          <form id="withdraw-form">

            <!-- Payment Method Selection -->
            <div class="mb-3">
              <label for="payment-method" class="form-label fw-semibold">Withdrawal Method</label>
              <div class="input-group">
                <span class="input-group-text bg-light">
                  <i class="bi bi-wallet2 text-primary"></i>
                </span>
                <select class="form-select" id="payment-method" required>
                  <option value="">Select a method</option>
                  @foreach ($PaymentMethod as $method)
            <option value="{{ $method->id }}">{{ $method->name }}</option>
          @endforeach
                </select>
              </div>
            </div>

            <!-- Withdrawal Amount -->
            <div class="mb-3">
              <label for="withdraw-amount" class="form-label fw-semibold">Amount</label>
              <div class="input-group">
                <span class="input-group-text bg-light">
                  <i class="bi bi-cash-stack text-success"></i>
                </span>
                <input type="number" class="form-control" id="withdraw-amount" placeholder="Enter amount" min="1"
                  required />
              </div>
            </div>

            <!-- Withdrawal Address -->
            <div class="mb-3">
              <label for="withdraw-address" class="form-label fw-semibold">Withdrawal Address</label>
              <div class="input-group">
                <span class="input-group-text bg-light">
                  <i class="bi bi-clipboard-check text-warning"></i>
                </span>
                <input type="text" class="form-control" id="withdraw-address" placeholder="Enter wallet address"
                  required />
              </div>
            </div>

            <!-- Submit Button -->
            <button type="button" id="withdraw-button" class="btn btn-primary w-100 fw-bold shadow-sm"
              onclick="handleWithdraw()">
              Submit Withdrawal <i class="bi bi-arrow-right-circle ms-1"></i>
            </button>
          </form>
        </div>
      </div>
      <!-- Custom Styles -->
      <style>
        .card {
          border-radius: 15px;
          transition: all 0.3s ease-in-out;
        }

        .card:hover {
          transform: scale(1.02);
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .input-group-text {
          border-radius: 10px 0 0 10px;
          padding: 10px;
        }

        .form-control,
        .form-select {
          border-radius: 10px;
        }

        .btn {
          transition: all 0.3s ease-in-out;
        }

        .btn:hover {
          transform: scale(1.05);
        }
      </style>
    </section>


    <section class="profile-section container py-5 bg-light rounded shadow-lg my-4" id="profile">
      <!-- Profile Section Heading -->
      <h2 class="text-primary mb-4 text-center fw-bold">User Profile</h2>

      <div class="row align-items-center">
        <!-- Profile Picture and User Info -->
        <div class="col-md-4 text-center mb-4">
          <div class="profile-img-container">
            <img src="https://placehold.co/150" alt="User Logo" class="rounded-circle profile-pic shadow"
              style="width: 100px;" />
          </div>
          <h3 class="text-primary fw-bold mt-3 UserName">UserName</h3>
          <p class="text-secondary mb-1"><strong>Username:</strong> <span class="UserUsername">UserUsername</span></p>
          <p class="text-secondary"><strong>Balance:</strong> <span
              class="user-balance fw-bold text-success">$0.00</span></p>
        </div>

        <!-- Earnings, Ads Watched, and Referrals Stats -->
        <div class="col-md-8">
          <div class="row">
            <!-- Total Earnings -->
            <div class="col-md-4 mb-4">
              <div class="card earnings-card border-0 shadow-sm">
                <div class="card-body text-center">
                  <h5 class="card-title text-success fw-bold">Total Earnings</h5>
                  <p class="card-text fs-4 fw-semibold">
                    <span id="totalEarnings" class="lifetime_earning">$0.00</span>
                  </p>
                </div>
              </div>
            </div>

            <!-- Total Ads Watched -->
            <div class="col-md-4 mb-4">
              <div class="card ads-card border-0 shadow-sm">
                <div class="card-body text-center">
                  <h5 class="card-title text-info fw-bold">Total Ads Watched</h5>
                  <p class="card-text fs-4 fw-semibold">
                    <i class="bi bi-eye text-info"></i>
                    <span id="totalAdsWatched" class="totalAdsWatched">0</span>
                  </p>
                </div>
              </div>
            </div>

            <!-- Total Referrals -->
            <div class="col-md-4 mb-4">
              <div class="card referrals-card border-0 shadow-sm">
                <div class="card-body text-center">
                  <h5 class="card-title text-warning fw-bold">Total Referrals</h5>
                  <p class="card-text fs-4 fw-semibold">
                    <i class="bi bi-people text-warning"></i>
                    <span id="refferCount" class="refferCount">0</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <style>
        /* Cards */
        .card {
          border-radius: 15px;
          transition: all 0.3s ease-in-out;
          background: rgba(255, 255, 255, 0.8);
          backdrop-filter: blur(10px);
        }

        .card:hover {
          transform: scale(1.01);
          box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .earnings-card {
          border-left: 4px solid #28a745;
        }

        .ads-card {
          border-left: 4px solid #0dcaf0;
        }

        .referrals-card {
          border-left: 4px solid #ffc107;
        }
      </style>


    </section>






  </main>











  <!-- Footer Navigation -->
  <footer class="footer-nav d-flex justify-content-between align-items-center p-3 fixed-bottom shadow-lg rounded-top"
    style="background: linear-gradient(135deg, #6a11cb, #2575fc); z-index: 1000;">
    <div class="container d-flex justify-content-around position-relative">

      <!-- Home Button -->
      <a href="#" onclick="showSection('home')" class="nav-item text-center text-decoration-none text-white">
        <i class="bi bi-house-door-fill fs-4 d-block"></i>
        <small class="fw-semibold">Home</small>
      </a>

      <!-- Earn Button -->
      <a href="#" onclick="showSection('earn')" class="nav-item text-center text-decoration-none text-white">
        <i class="bi bi-cash-stack fs-4 d-block"></i>
        <small class="fw-semibold">Earn</small>
      </a>

      <!-- Withdraw Button -->
      <a href="#" onclick="showSection('withdraw')" class="nav-item text-center text-decoration-none text-white">
        <i class="bi bi-wallet-fill fs-4 d-block"></i>
        <small class="fw-semibold">Withdraw</small>
      </a>

      <!-- Profile Button -->
      <a href="#" onclick="showSection('profile')" class="nav-item text-center text-decoration-none text-white">
        <i class="bi bi-person-circle fs-4 d-block"></i>
        <small class="fw-semibold">Profile</small>
      </a>

    </div>
  </footer>

  <!-- Floating Refer & Earn Button -->
  <a href="#" onclick="showSection('refer')"
    class="position-fixed bottom-5 end-3 bg-primary text-white rounded-pill d-flex align-items-center px-4 py-2 shadow-lg text-decoration-none"
    style="z-index: 1055;">
    <i class="bi bi-people-fill fs-5 me-2"></i>
    <span class="fw-semibold">Refer & Earn</span>
  </a>

  <style>
    /* Ensures footer and floating button don't overlap */
    .footer-nav {
      padding-bottom: 12px;
    }

    /* Floating Button Positioning & Style */
    a.position-fixed {
      transition: all 0.3s ease-in-out;
      bottom: 100px !important;
      /* Avoids overlap */
      right: 20px;
    }

    a.position-fixed:hover {
      background: #0056b3;
      /* Slightly darker blue on hover */
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
      transform: scale(1.05);
    }
  </style>



  <script>
    function showSection(sectionId) {
      const sections = document.querySelectorAll("main > section");

      sections.forEach((section) => {
        if (section.id === sectionId) {
          section.classList.remove("d-none");
        } else {
          section.classList.add("d-none");
        }
      });
    }

    document.addEventListener("DOMContentLoaded", () => {
      showSection("home");
    });
  </script>




  <div class="loader">
    <div class="spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector('.loader').classList.add('d-none');
    });
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <script src="{{ asset('assets') }}/js/vendor.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Import Js Files -->
  <script src="{{ asset('assets') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets') }}/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="{{ asset('assets') }}/js/theme/app.dark.init.js"></script>
  <script src="{{ asset('assets') }}/js/theme/theme.js"></script>
  <script src="{{ asset('assets') }}/js/theme/app.min.js"></script>
  <script src="{{ asset('assets') }}/js/theme/sidebarmenu.js"></script>
  <script src="{{ asset('assets') }}/js/theme/feather.min.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
  <script src="{{ asset('assets') }}/js/plugins/toastr-init.js"></script>
  <script src="{{ asset('assets') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ asset('assets') }}/libs/select2/dist/js/select2.full.min.js"></script>
  <script src="{{ asset('assets') }}/libs/select2/dist/js/select2.min.js"></script>
  <script src="{{ asset('assets') }}/js/forms/select2.init.js"></script>
  <script src="{{ asset('assets') }}/libs/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="{{ asset('assets') }}/js/forms/sweet-alert.init.js"></script>

  <script src="{{ asset('assets') }}/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
  <script src="{{ asset('assets') }}/libs/jquery-asGradient/dist/jquery-asGradient.min.js"></script>
  <script src="{{ asset('assets') }}/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
  <script src="{{ asset('assets') }}/libs/@claviska/jquery-minicolors/jquery.minicolors.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/colorpicker-init.js"></script>

  <script src="{{ asset('assets') }}/js/extra-libs/moment/moment.min.js"></script>
  <script src="{{ asset('assets') }}/libs/daterangepicker/daterangepicker.js"></script>
  <script src="{{ asset('assets') }}/js/forms/daterangepicker-init.js"></script>
  <script src="{{ asset('assets') }}/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="{{ asset('assets') }}/libs/aos/dist/aos.js"></script>
  <script src="{{ asset('assets') }}/js/landingpage/landingpage.js"></script>
  <script>
    function confirmDeletion(url) {
      Swal.fire({
        title: "Are you sure?",
        text: "You will not be able to recover this action!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonColor: "#6c757d",
        confirmButtonText: "Yes, do it!",
        cancelButtonText: "Cancel",
      }).then((result) => {
        if (result.isConfirmed) {
          // Redirect to the provided URL
          window.location.href = url;
        }
      });
    }
    function copyToClipboard(text) {
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(text)
          .then(() => {
            toastr.success("Copied to clipboard!", "Success");
          })
          .catch((error) => {
            toastr.error("Failed to copy to clipboard. Please try again.", "Error");
            console.error("Clipboard error:", error);
          });
      } else {
        // Fallback for browsers that don't support navigator.clipboard
        let textArea = document.createElement("textarea");
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();

        try {
          document.execCommand("copy");
          toastr.success("Copied to clipboard!", "Success");
        } catch (error) {
          toastr.error("Failed to copy to clipboard. Please try again.", "Error");
          console.error("Fallback clipboard error:", error);
        }

        document.body.removeChild(textArea);
      }
    }

  </script>


  <script>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error("{{ $error }}", "Problem");
  @endforeach
  @endif

    @if (session('success'))
    toastr.success("{{ session('success') }}", "Success");
  @endif

    @if (session('error'))
    toastr.error("{{ session('error') }}", "Problem");
  @endif

    @if (request('success'))
    toastr.success("{{ request('success') }}", "Success");
  @endif

    @if (request('error'))
    toastr.error("{{ request('error') }}", "Problem");
  @endif
  </script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      // Initialize Highlight.js
      hljs.highlightAll();
    });
  </script>

  <script src="https://telegram.org/js/telegram-web-app.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {

      window.csrfToken = "{{ csrf_token() }}";


      const showAdButton = document.getElementById("show-ad");

      function toggleLoading(show) {
        document.querySelector('.loader').style.display = show ? "flex" : "none";
      }



      function showAlert(message, type = "danger") {
        const alertContainer = document.getElementById("alert-container");
        alertContainer.innerHTML = `
          <div class="alert alert-${type} alert-dismissible fade show" role="alert">
              ${message}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      `;
      }

      function fetchUserData(userData) {
        toggleLoading(true);
        fetch("{{ route('user.check') }}", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": window.csrfToken,
          },

          body: JSON.stringify(userData),
        })
          .then(async (response) => {
            toggleLoading(false);
            if (!response.ok) {
              const errorText = await response.text();
              throw new Error(`Failed to fetch user data: ${errorText}`);
            }
            return response.json();
          })
          .then((data) => {
            if (data.success) {
              updateUI(data);
            } else {
              showAlert("Failed to load user data.");
            }
          })
          .catch((error) => showAlert("Error: " + error.message));
      }

      function handleAdReward(userId) {
        toggleLoading(true);
        fetch("{{ route('reward.user') }}", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": window.csrfToken,
          },
          body: JSON.stringify({ telegram_id: userId }),
        })
          .then(async (response) => {
            toggleLoading(false);
            if (!response.ok) {
              const errorText = await response.text();
              throw new Error(`Failed to reward user: ${errorText}`);
            }
            return response.json();
          })
          .then((data) => {
            if (data.success) {
              updateUI(data);
              showAlert("Reward credited successfully!", "success");
            } else {
              showAlert("Failed to reward user.");
            }
          })
          .catch((error) => showAlert("Error: " + error.message));
      }

      function updateUI(data) {
        if (data.user) {
          const user = data.user;

          updateTextContent(".UserUsername", '@' + user.username || "User");
          updateTextContent(".UserName", user.first_name + ' ' + user.last_name || "User");
          updateTextContent(".user-balance", `{{ $settings->currency }} ${user.balance || "0.00"}`);
          updateTextContent(".refferCount", ` ${data.refferCount || "0"}`);

          updateTextContent(".tasksCompleted", data.today_ads || "0");
          updateTextContent(".taskCount", data.ads_limit || "0");
          updateTextContent(".today_earning", `{{ $settings->currency }} ${data.today_earning || "0.00"}`);
          updateTextContent(".totalAdsWatched", data.totalAdsWatched || "0");
          updateTextContent(".lifetime_earning", `{{ $settings->currency }} ${data.lifetime_earning || "0.00"}`);
          updateTextContent(".tasksRemaining", data.ads_limit - data.today_ads || "0.00");

          // Update progress bar
          const adsLimit = data.ads_limit || 0;
          const todayAds = data.today_ads || 0;
          const completionPercentage = Math.min((todayAds / adsLimit) * 100, 100);

          const progressBar = document.querySelector(".progress-bar");
          if (progressBar) {
            progressBar.style.width = `${completionPercentage}%`;
            progressBar.setAttribute("aria-valuenow", completionPercentage.toFixed(0));
            progressBar.innerText = `${completionPercentage.toFixed(0)}%`;
          }

          // Show or hide the "Show Ad" button based on ad limit
          const showAdButton = document.getElementById("show-ad");
          if (showAdButton) {
            if (data.ads_limit - data.today_ads > 0) {
              showAdButton.classList.remove("d-none");
            } else {
              showAdButton.classList.add("d-none");
            }
          }

          // Update profile picture
          const profilePictureUrl = user.photo_url || "https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg";
          document.querySelectorAll(".profile-pic").forEach((img) => {
            img.src = profilePictureUrl;
          });
        } else {
          showAlert("Failed to load user data.");
        }
      }


      function updateTextContent(selector, text) {
        document.querySelectorAll(selector).forEach((el) => {
          el.innerText = text;
        });
      }

      let currentUserId;

      if (window.Telegram.WebApp) {
        Telegram.WebApp.ready(); // Ensure WebApp is initialized

        const user = Telegram.WebApp.initDataUnsafe?.user;
        const startParam = Telegram.WebApp.initDataUnsafe?.start_param || null; // Get referral code

        console.log("Raw initDataUnsafe:", Telegram.WebApp.initDataUnsafe); // Debugging

        if (user) {
          const userData = {
            first_name: user.first_name,
            last_name: user.last_name,
            username: user.username,
            language_code: user.language_code,
            photo_url: user.photo_url || "https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg",
            is_premium: user.is_premium,
            id: user.id,
            referral_code: startParam // Store referral code
          };



          currentUserId = user.id;



          const referNowElement = document.getElementById("reffer_now");
          const referLinkElement = document.getElementById("refer-link");
          if (referNowElement) {
            referNowElement.href = "https://t.me/share/url?url=" + encodeURIComponent("https://t.me/Daily_PaisaBot?startapp=" + currentUserId);

          } else {
            console.error("Element with ID 'reffer_now' not found.");
          }
          if (referLinkElement) {
            referLinkElement.value = "https://t.me/Daily_PaisaBot?startapp=" + currentUserId;

          } else {
            console.error("Element with ID 'refer-link' not found.");
          }



          fetchUserData(userData);

          document.querySelectorAll(".profile-pic").forEach((img) => {
            img.src = userData.photo_url;
          });

        } else {
          console.error("User data not available.");
        }
      }



      if (showAdButton) {
        showAdButton.addEventListener("click", function () {
          // Disable the button to prevent multiple clicks
          showAdButton.disabled = true;

          show_{{ $settings->monetag_id }}().then(() => {
            if (currentUserId) {
              handleAdReward(currentUserId).then(() => {
                // Re-enable the button after handling the reward
                showAdButton.disabled = false;
              }).catch(error => {
                // Handle any error that occurs during reward processing
                console.error("Error handling ad reward:", error);
                showAlert("There was an error processing your reward.");
                // Re-enable the button even if there's an error
                showAdButton.disabled = false;
              });
            } else {
              showAlert("User ID is not available.");
              // Re-enable the button if user ID is not available
              showAdButton.disabled = false;
            }
          }).catch(error => {
            // Handle any error that occurs during show_ function
            console.error("Error showing ad:", error);
            showAlert("There was an error showing the ad.");
            // Re-enable the button in case of an error
            showAdButton.disabled = false;
          });
        });
      }

      document.getElementById('withdraw-button').addEventListener('click', handleWithdraw);

      function handleWithdraw() {
        const amount = parseFloat(document.getElementById('withdraw-amount').value);
        const paymentMethodId = document.getElementById('payment-method').value;
        const withdrawAddress = document.getElementById('withdraw-address').value;

        // Check if fields are filled correctly
        if (currentUserId && amount > 0 && paymentMethodId && withdrawAddress) {
          toggleLoading(true);
          fetch("{{ route('user.withdraw') }}", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
              "X-CSRF-TOKEN": window.csrfToken,
            },

            body: JSON.stringify({
              telegram_id: currentUserId,
              amount: amount,
              payment_method_id: paymentMethodId,
              address: withdrawAddress
            }),
          })
            .then(async (response) => {
              toggleLoading(false);
              if (!response.ok) {
                const errorText = await response.text();
                throw new Error(`Failed to process withdrawal: ${errorText}`);
              }
              return response.json();
            })
            .then((data) => {
              if (data.success) {
                updateUI(data);
                showAlert("Withdrawal successful!", "success");
              } else {
                showAlert(data.message || "Failed to process withdrawal.", "danger");
              }
            })
            .catch((error) => showAlert("Error: " + error.message));
        } else {
          showAlert("Please fill in all fields correctly.");
        }
      }


    });

  </script>
</body>