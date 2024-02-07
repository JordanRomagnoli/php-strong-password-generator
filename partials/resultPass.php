<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <!-- css -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="debug">
        <div class="container">
            <header>
                <h1>
                    Ecco la tua password
                </h1>
            </header>

            <main>
                <div>
                    <?php
                        
                        echo $_SESSION['finalPassword'];
                    ?>
                </div>
            </main>

            <footer>
                <!-- FOOTER -->
            </footer>
        </div>
    </body>
</html>