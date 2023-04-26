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
            <h1>Search Results</h1>
            <ul class="breadcrum">
                <li><a href="index.php">Home</a></li>
                <li>Search Results</li>
            </ul>			
        </div>
    </section>

<section>
    <div class="container">
        <form method="get" action="testing-search-results.php">
                <label for="search">Search:</label>
                <input type="text" id="search" name="search">
                <input type="submit" value="Submit">
            </form>
        
            <?php
                if (isset($_GET['search'])) {
                    $search_term = $_GET['search'];
                    $results = [];
                    $files = glob("*.php");
                    foreach ($files as $file) {
                        $contents = file_get_contents($file);
                        if (strpos($contents, $search_term) !== false) {
                            $results[] = $file;
                        }
                    }
        
                    $resultsCount = sizeof($results);
                    if (count($results) > 0) {
                        echo "<div>Search results: for $search_term</div>
                        <div>$resultsCount results found</div>";
                        foreach ($results as $result) {
                            echo "<a href=\"$result\" target='_blank'>$result</a><br>";
                        }
                    } else {
                        echo "<div>No results found.</div>";
                    }
                }
            ?>
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
