<?php include 'config/database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Shop</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="d-flex justify-content-between navbar navbar-expand navbar-light bg-light p-3">
      <a class="navbar-brand" href="/php-shop/index.php">PHP Shop</a>
      <ul class="d-flex nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/php-shop/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/php-shop/shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/php-shop/cart.php">Cart</a>
        </li>
      </ul>
    </nav>
  </header>