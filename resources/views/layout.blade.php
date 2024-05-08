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

<div style="margin-left:20%;padding:1px 16px;height:1000px;">
  <h2>Fixed Full-height Side Nav</h2>
  <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
  <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
  <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
</div>

@yield('navBar')

</body>

</html>