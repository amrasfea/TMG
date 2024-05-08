<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Mentor Home Page</title>
  <style>
    body {
      margin: 0;
      background-color: whitesmoke;
    }

    .navbar {
      background-color: #d8bfd8 !important; /* Change navbar background color */
      position: fixed; /* Fixed position */
      width: 100%; /* Full width */
      z-index: 1000; /* Ensure it's above other elements */
    }

    .navbar-brand {
      text-align: center; 
      color: navy !important; /* Change navbar brand color */
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 20%;
      background-color: #d8bfd8;
      position: fixed;
      height: 100%;
      overflow: auto;
      margin-top: 56px; /* Adjust for the height of the navbar */
    }

    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
      list-style-type: disc;
    }

    li a.active {
      background-color: lavender ;
      color: black;
    }

    li a:hover:not(.active) {
      background-color: lavender;
      color: darkblue;
    }

    /* Override Bootstrap's default container styles */
    .container {
      max-width: none !important;
    }

    /* Additional CSS for main content area */
    .content {
      margin-left: 20%; /* Adjust according to the width of the sidebar */
      padding: 20px;
    }

  </style>
</head>
<body>
    
<!-- Navigation Bar at top-->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand mx-auto" href="#"><b>Thesis Master Gate</b></a>
  </div>
</nav>

<!-- vertical bar -->
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Profile</a></li>
  <li><a href="#contact">Expert Domain Information</a></li>
  <li><a href="#about">Publication</a></li>
</ul>

<div class="content">
  <!-- Your content here -->
  <!-- You can add content here which will be displayed in the main area -->
</div>

@yield('StaffBar')

</body>
</html>