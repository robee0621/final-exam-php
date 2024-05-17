<!DOCTYPE html>
<html>
<head>
    <title>Receipt - Order Management System</title>
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
        h2 {
            text-align: center;
            color: #333;
        }
        .receipt {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
        .order-again-btn {
            background-color: #2e344f;
            color: white;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            margin-top: 20px;
        }
        .order-again-btn:hover {
            background-color: #7587d1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Receipt</h2>
        <?php
            $item = $_GET["item"];
            $quantity = $_GET["quantity"];
            $payment = $_GET["payment"];
            $total = $item * $quantity;
            $change = $payment - $total;

            echo "<div class='receipt'>";
            echo "<p>Item: ";
            if ($item == 20) {
                echo "American Hamburger - PHP 130";
            } elseif ($item == 25) {
                echo "Spaghetti - PHP 80";
            } elseif ($item == 30) {
                echo "2 pcs Chicken w/ Rice - PHP 120";
            }
            echo "</p>";
            echo "<p>Quantity: $quantity</p>";
            echo "<p>Total: PHP $total</p>";
            echo "<p>Payment: PHP $payment</p>";
            if ($change >= 0) {
                echo "<p>Change: PHP $change</p>";
            } else {
                echo "<p>Insufficient payment!</p>";
            }
            echo "</div>";
        ?>
        <form method="get" action="index.php">
            <input type="submit" value="Order Again" class="order-again-btn">
        </form>
    </div>
</body>
</html>
