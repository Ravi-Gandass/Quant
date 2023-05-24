<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Database connection parameters
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'goodse deal';

// Create a new MySQLi instance
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to insert the data into the database
$sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind the parameters and execute the statement
$stmt->bind_param("sss", $name, $email, $message);
if ($stmt->execute()) {
    $message = "Thank you for contacting us. We will get back to you soon.";
} else {
    $message = "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();


// Redirect back to the contact page or display a success message
// header("Location: contact.php");
// // exit();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact - Goods Deal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<style>
   

   body {
        font-family: Arial, sans-serif;
    }
    
    h1, h2, h4 {
        text-align: center;
    }
    
    /* Header Section */
    
    
    
    .logo {
        height: 50px;
        width: auto;
    }
    
    
    /* Contact Section */
    
    #contact {
        padding: 40px;
    }
    
    form {
        max-width: 500px;
        margin: 0 auto;
    }
    
    label, input, textarea {
        display: block;
        margin-bottom: 10px;
    }
    
    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
    }
    
    input[type="submit"] {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }
    
    /* Newsletter Section */
    #newsletter {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px; /* Adjust this value as needed */
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    
    .form {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .form input[type="text"] {
        padding: 10px;
        width: 300px;
        margin-right: 10px;
        border: none;
        border-radius: 3px;
    }
    
    .form button {
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
   
    
    /* Responsive Styles */
    
    @media only screen and (max-width: 768px) {
        #navbar {
            display: none;
        }
    
        #mobile {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
    
        #mobile i {
            margin-right: 5px;
        }
    
        #mobile:hover {
            opacity: 0.7;
        }
    
        #header {
            padding: 10px;
            justify-content: space-between;
        }
    
        #header ul {
            display: none;
        }
    
        #header a {
            display: none;
        }
    
        #header #mobile {
            display: block;
        }
    }
    
    
    </style>
       
<body>
    <section id="header">
        <a href="#"><img src="img/logo1.png" class = "logo" alt=""></a>
        <div>
            <ul id="navbar">
            <li><a class = "active" href="welcome.php">Home</a></li>
            <li><a href="#shopping">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="bi bi-cart-dash-fill cart"></i></a></li>
            <a href="#" id="close"><i class="bi bi-x"></i></a>
         </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="bi bi-cart-dash-fill cart"></i></a>
            <i id="bar" class="bi bi-box-arrow-left"></i>

        </div>
    </section>
    <section id="contact">
        <h2>Contact Us</h2>
        <?php if (isset($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php else : ?>
            <form action="submit_contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Submit">
            </form>
        <?php endif; ?>
    </section>
    <section id="newsletter" class="section-p1">
        <div class="newstext">
            <h4>Sign Up for Newletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers. </span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
</body>
</html>