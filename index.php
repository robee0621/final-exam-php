<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #add8e6;  /* Light blue background color */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #2e344f;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #7587d1;
        }
        .menu {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome! <?php echo $_SESSION['username'];?></h1>
        <h1>Order Management System</h1>
        <div class="menu">
            <h2>Menu</h2>
            <ul>
                <li>American Hamburger - PHP 130</li>
                <li>Spaghetti - PHP 80</li>
                <li>2 pcs Chicken w/ Rice - PHP 120</li>
            </ul>
        </div>
        <form method="get" action="receipt.php">
            <label for="item">Select Item:</label>
            <select id="item" name="item">
                <option value="130"American Hamburger - PHP 130</option>
                <option value="80">Spaghetti - PHP 80</option>
                <option value="120">2 pcs Chicken w/ Rice - PHP 120</option>
            </select><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required><br>
            <label for="payment">Payment:</label>
            <input type="number" id="payment" name="payment" min="0" required><br>
            <input type="submit" value="Submit">
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>