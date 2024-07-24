
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('partials-front/menu.php') ?>

    <section class="contact">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>

            <div class="contact-form">
                <form action="contact-form-handler.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>

            <div class="contact-details">
                <h3>Our Contact Details</h3>
                <p><strong>Address:</strong> 123 Food Street, Food City, FC 12345</p>
                <p><strong>Email:</strong> info@foodorderwebsite.com</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
            </div>
        </div>
    </section>

    <?php include('partials-front/footer.php') ?>
</body>
</html>
