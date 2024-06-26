<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Custom styles */

    body {
      background-color: #f8f9fa;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      max-width: 700px; /* Increased max-width */
    }

    .navbar-brand {
      color: #00008B;
      font-weight: bold;
    }

    .form-label {
      color: #00008B;
      font-weight: bold;
    }

    .form-control {
      border-radius: 10px; /* Increased border-radius */
      padding: 10px; /* Increased padding */
      font-size: 16px; /* Increased font size */
    }

    .btn-primary {
      border-radius: 15px; /* Increased border-radius */
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #F0F8FF;
    }

    .login-image {
      max-width: 200px; /* Increased max-width */
      margin-right: 20px; /* Adjust as needed */
    }

    .form-check-label {
      margin-right: 20px; /* Adjust margin between Remember me and Forgot password */
    }
  </style>
</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFDB58;">
  <div class="container">
    <a class="navbar-brand mx-auto" href="#" style="text-align: center;"><b>Thesis Master Gate</b></a>
  </div>
</nav>

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <div class="card mx-auto mt-5" style="max-width: 700px;"> <!-- Increased max-width -->
    <div class="card-body py-5 px-md-5">

      <div class="d-flex align-items-center mb-4">
        <img src="/image/kk.jpg" alt="Login Image" class="login-image">
        <form>
          <!-- Username input -->
          <div class="mb-4">
            <label for="form2Example1" class="form-label">Username</label>
            <input type="email" id="form2Example1" class="form-control" />
          </div>

          <!-- Password input -->
          <div class="mb-4">
            <label for="form2Example2" class="form-label">Password</label>
            <input type="password" id="form2Example2" class="form-control" />
          </div>

          <!-- User type selection -->
          <div class="mb-4">
            <select class="form-select" id="userType" >
              <option value="platinum">Platinum</option>
              <option value="staff">Staff</option>
              <option value="mentor">Mentor</option>
            </select>
          </div>

          <!-- Remember me and Forgot password -->
          <div class="mb-4 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
            <div>
              <a href="{{ route('forgot.password') }}" class="text-decoration-none">Forgot password?</a>
            </div>
          </div>

          <!-- Submit button -->
          <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block">Login</button>

        </form>
      </div>

    </div>
  </div>
</section>
<!-- Section: Design Block -->

</body>
</html>


