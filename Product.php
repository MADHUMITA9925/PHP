<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Product Name: <input type="text" name="pname"><br><br>
    Price: <input type="text" name="price"><br><br>
    Quantity: <input type="text" name="qty"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $product = array(
        "name"     => $_POST['pname'],
        "price"    => $_POST['price'],
        "quantity" => $_POST['qty']
    );

    $total = $product['price'] * $product['quantity'];

    echo "<h3>Product Details</h3>";
    echo "Product Name: " . $product['name'] . "<br>";
    echo "Price: " . $product['price'] . "<br>";
    echo "Quantity: " . $product['quantity'] . "<br>";
    echo "Total Price: " . $total;
}
?>

</body>
</html>