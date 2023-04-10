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
  <div class="d-flex flex-wrap justify-content-center gap-3 p-5">
    <?php foreach ($products as $item) : ?>
      <div class="card w-25">
        <div class="card-body">
          <img class="card-img-top" src="<?php echo $item['image'] ?>" />
          <div class="d-flex align-items-center justify-content-between mb-2">
            <h5 class="card-title mt-2"><?php echo $item['name']; ?></h5>
            <span>€ <?php echo $item['price']; ?></span>
          </div>
          <div class="buy-option-container d-flex justify-content-center gap-1">
            <button class="btn btn-primary">-</button>
            <input class="item-quantity w-25" type="number" value="1">
            <button class="btn btn-primary">+</button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>