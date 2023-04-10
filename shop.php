<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM products';
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<main>
  <?php if (empty($products)) : ?>
    <p>All products sold out!</p>
  <?php endif; ?>

  <?php foreach ($products as $item) : ?>
    <div class="card">
      <div class="card-body">
        <img src="<?php echo $item['image'] ?>" />
        <h5 class="card-title"><?php echo $item['name']; ?></h5>
        <span><?php echo $item['price']; ?></span>
        <div class="buy-option-container">
          <button>-</button>
          <input class="item-quantity" type="number" value="1">
          <button>+</button>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>