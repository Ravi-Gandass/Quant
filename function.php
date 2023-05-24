<?php

// Retrieves the items in the user's cart from the database
function getCartItems($userId) {
    // Connect to the database (replace with your own database connection code)
    $conn = mysqli_connect('localhost', 'root', '', 'goodse deal');

    // Retrieve cart items query
    $query = "SELECT * FROM cart_items WHERE user_id = $userId";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Fetch the items as an associative array
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Close the database connection
    mysqli_close($conn);

    // Return the cart items
    return $items;
}

// Updates the quantity of a product in the user's cart
function updateCartItem($userId, $productId, $quantity) {
    // Connect to the database (replace with your own database connection code)
    $conn = mysqli_connect('localhost', 'root', '', 'goodse deal');

    // Update cart item query
    $query = "UPDATE cart_items SET quantity = $quantity WHERE user_id = $userId AND product_id = $productId";

    // Execute the query
    mysqli_query($conn, $query);

    // Close the database connection
    mysqli_close($conn);
}

// Calculates the total cost of the items in the user's cart
function getCartTotal($userId) {
    // Connect to the database (replace with your own database connection code)
    $conn = mysqli_connect('localhost', 'root', '', 'goodse deal');

    // Calculate cart total query
    $query = "SELECT SUM(price * quantity) AS total FROM cart_items INNER JOIN products ON cart_items.product_id = products.id WHERE user_id = $userId";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Fetch the total
    $total = mysqli_fetch_assoc($result)['total'];

    // Close the database connection
    mysqli_close($conn);

    // Return the cart total
    return $total;
}

// Formats the given amount as a currency string
function formatCurrency($amount) {
    // Format the amount as a currency string (replace with your own currency formatting logic)
    $formattedAmount = '$' . number_format($amount, 2);

    // Return the formatted amount
    return $formattedAmount;
}

?>
