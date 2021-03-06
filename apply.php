<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>EZL</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        <body>
            <header class="header">
                <div id="header">
                    <nav class="menu">
                        <ul class="toggle">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="stats.php">Stats</a></li>
                            <li><a href="apply.php" class="selected">Apply</a></li>
                            <li><a href="sponsors.php">Sponsors</a></li>
                            <li><a href="about.php">About</a></li>
                        </ul>
                        <a class="toggle-nav">&#9776;</a>
                        <script>
                        $(document).ready(function() {
                        $('.toggle-nav').click(function(e) {
                            e.preventDefault();
                        $(this).toggleClass('active');
                        $('.menu ul').toggleClass('toggle');
                            });
                        });
                        </script>
                    </nav>
                </div>
                <div id="header-content">
                    <h1>EZL</h1>
                    <h3>Vainglory League</h3>
                </div>
            </header>
            <main class="wrapper">
                <h2>Apply Page</h2>
                <p>This is where all the content will be stored</p>
            </main>
            <footer>
                <p>&copy; <?php echo date ("Y"); ?> EZL</p>
            </footer>
     </body>
</html>