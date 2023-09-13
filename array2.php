<?php 
$offers = [
    ['name' => 'bubble', 'price' => 1, 'stock' => 500,],
    ['name' => 'chocolate',  'price' => 10, 'stock' => 36,],
    ['name' => 'ice cream',  'price' => 15, 'stock' => 150,],
    ['name' => 'drink',  'price' => 9, 'stock' => 600,],
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Offers</h2>
    <p><?php echo $offers[0]['name']; ?> -
      $<?php echo $offers[0]['price']; ?> </p>
    <p><?php echo $offers[1]['name']; ?> -
      $<?php echo $offers[1]['price']; ?> </p>
    <p><?php echo $offers[2]['name']; ?> -
      $<?php echo $offers[2]['price']; ?> </p>
  </body>
</html>