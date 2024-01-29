<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <title> Marketing</title>
    <style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  background-color:whitesmoke;
}
/* body{
        /* background-color: orangered; 
        height: 100vh;
        position: relative;

        background-image:linear-gradient(
        #031f3899,
        #24035576
        ),
        url(../images/hero2.jpg);
        background-size: cover;
        color:#fff;
    } */


.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color:lightcyan;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}x

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.navbar{
    background-color:lightcyan;
}
</style>

</head>
<body>
  <nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand">Market</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="sidebar">
  <a href="#">Home</a>
  <a href="#">Orders</a>
  <a href="#">Bills</a>
  <a href="#">Contact</a>
  <a href="#">Email</a>
  <a href="#">Address</a>
</div>
<div class="container">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>


@yield('content')

</body>
</html>
 
