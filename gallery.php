<?php include('partials-front/menu.php') ?>
<!-- HOTEL SERVICES Section Starts Here -->
<section class="hotel-services">
    <div class="container">
        <h2 class="text-center">Our Services</h2>

        <div class="service">
            <div class="service-img">
                <img src="images/room.jpeg" alt="Room Service" class="img-responsive">
            </div>
            <div class="service-content">
                <h3 class="service-title">Room Service</h3>
                <p class="service-description">Enjoy 24/7 room service with a variety of dishes and drinks delivered straight to your room. Our team is dedicated to providing you with a comfortable and convenient stay.</p>
            </div>
        </div>

        <div class="service">
            <div class="service-img">
                <img src="images/swimming.jpeg" alt="Swimming Pool" class="img-responsive">
            </div>
            <div class="service-content">
                <h3 class="service-title">Swimming Pool</h3>
                <p class="service-description">Take a dip in our outdoor swimming pool and relax in the sun. Our pool area is perfect for both leisure and fitness, providing a refreshing escape from the everyday.</p>
            </div>
        </div>

        <div class="service">
            <div class="service-img">
                <img src="images/wellness.jpeg" alt="Spa and Wellness" class="img-responsive">
            </div>
            <div class="service-content">
                <h3 class="service-title">Spa and Wellness</h3>
                <p class="service-description">Rejuvenate your mind and body at our luxurious spa. We offer a range of treatments including massages, facials, and wellness therapies to help you unwind and relax.</p>
            </div>
        </div>

    </div>
</section>
<!-- HOTEL SERVICES Section Ends Here -->


<!-- GALLERY Section Starts Here -->
<section class="gallery text-center">
    <div class="container">
        <h2 class="text-center">Our Gallery</h2>
        
        <div class="gallery-grid">
        <?php
        // Fetch hotel images from the database
        $sql = "SELECT * FROM tbl_gallery WHERE active='Yes'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];
        ?>
                <div class="gallery-item">
                    <?php
                    if ($image_name == "") {
                        echo "<div class='error'>Image not available</div>";
                    } else {
                    ?>
                        <img src="<?php echo SITEURL; ?>images/gallery/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="img-responsive img-curve">
                    <?php
                    }
                    ?>
                    <h3 class="float-text text-white"><?php echo $title; ?></h3>
                </div>
        <?php
            }
        } else {
            echo "<div class='error'>Gallery not Added</div>";
        }
        ?>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- GALLERY Section Ends Here -->

<?php include('partials-front/footer.php') ?>
