<!DOCTYPE html>
<html>
<?php include 'assets/inc/head.php'; ?>
<body>

    <!-- Header -->
    <header>
        <div class="nav_sec">
            <div class="container">
                <?php include 'assets/inc/search-nav-no-form.php'; ?>
            </div>
        </div>
    </header>

        <!-- Slider Sec -->
        <section class="inner_banner">
        <div class="container">
            <h1>Search</h1>
            <ul class="breadcrum">
                <li><a href="index.php">Home</a></li>
                <li>Search</li>
            </ul>			
        </div>
    </section>


<section>
    <div class="container">
        <h1>Search</h1>
            <form method="get" action="testing-search-results.php">
                <label for="search">Search:</label>
                <input type="text" id="search" name="search">
                <input type="submit" value="Submit">
            </form>
    </div>
</section>
<footer>
        <section class="footer_detail footer_detail_3">
            <?php include 'assets/inc/footer.php'; ?>
        </section>
    </footer>
    <!-- Js -->
    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <!-- theme Whatsapp chat -->
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
