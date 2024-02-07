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
                    Password Generator
                </h1>
            </header>

            <main>
                <form action="" method="POST">
                    <label for="length">Inserisci la lunghezza della password desiderata</label>
                    <input type="number" name="length" id="length">
                    <button type="submit">
                        Send
                    </button>
                </form>

                <?php
                    include __DIR__.'./partials/passGenerator.php';
                ?>

                <div>
                    <span>
                        <?php
                            if(isset($_POST['length'])){

                                echo randomPass(intval($_POST['length']));

                            };
                        ?>
                    </span>
                </div>

            </main>

            <footer>
                <!-- FOOTER -->
            </footer>
        </div>
    </body>
</html>