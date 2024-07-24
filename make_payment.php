<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="<?php echo SITEURL; ?>index.php" >
                    <img src="food images/logo/logo.jpeg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li><a href="<?php echo SITEURL; ?>index.php">Home</a></li>
                    <li><a href="<?php echo SITEURL; ?>categories.php">Categories</a></li>
                    <li><a href="<?php echo SITEURL; ?>foods.php">Foods</a></li>
                    <li><a href="<?php echo SITEURL; ?>contact.php">Contact</a></li>
                    <li><a href="<?php echo SITEURL; ?>gallery.php">Gallery</a></li>
                    <li><a href="<?php echo SITEURL; ?>make_payment.php">Make Payment</a></li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- M-Pesa Payment Form -->
    <section class="payment">
        <div class="container">
            <h2 class="text-center">Make a Payment</h2>

            <form action="process_payment.php" method="POST" class="order">
                <fieldset>
                    <legend>Payment Details</legend>
                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="phone" placeholder="E.g. 254712345678" class="input-responsive" required>

                    <div class="order-label">Amount</div>
                    <input type="number" name="amount" placeholder="E.g. 1000" class="input-responsive" required>

                    <input type="submit" name="submit" value="Pay Now" class="btn btn-primary">
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>
