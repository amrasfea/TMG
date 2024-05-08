<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Platinum Home Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20%;
  background-color: #FFDB58;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
  list-style-type: disc;
}

li a.active {
  background-color: wheat;
  color: black;
}

li a:hover:not(.active) {
  background-color: wheat;
  color: darkblue;
}

</style>
<body>
    
<!-- Navigation Bar at top-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFDB58;">
  <div class="container">
    <a class="navbar-brand mx-auto" href="#" style="text-align: center;"><b>Thesis Master Gate</b></a>
  </div>
</nav>

<!-- vertical bar -->
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Profile</a></li>
  <li><a href="#contact">Expert Domain Information</a></li>
  <li><a href="#about">Publication</a></li>
</ul>


@yield('navBar')

</body>

</html>