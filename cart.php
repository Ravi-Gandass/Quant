<?php
// Start the session (make sure this is placed at the beginning of your PHP file)
session_start();

// Include necessary files
include_once 'db.php';
include_once 'function.php';

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

// Retrieve cart items from database
$cartItems = getCartItems($_SESSION['userId']);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $productId => $quantity) {
        updateCartItem($_SESSION['usersId'], $productId, $quantity);
    }
    header('Location: cart.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <header>
        <h1>Shopping Cart</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Cart Items</h2>
        <?php if (count($cartItems) > 0) : ?>
            <form method="post">
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cartItems as $item) : ?>
                            <tr>
                                <td><?= $item['name'] ?></td>
                                <td><?= formatCurrency($item['price']) ?></td>
                                <td><input type="number" name="<?= $item['id'] ?>" value="<?= $item['quantity'] ?>"></td>
                                <td><?= formatCurrency($item['price'] * $item['quantity']) ?></td>
                                <td><button type="submit" name="remove" value="<?= $item['id'] ?>">Remove</button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit">Update Cart</button>
            </form>
            <p>Total: <?= formatCurrency(getCartTotal($_SESSION['userId'])) ?></p>
            <a href="checkout.php"><button>Checkout</button></a>
        <?php else : ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </main>

    <footer>
        <!-- Footer content here -->
    </footer>

</body>
</html>
