
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
                <form action="./partials/passGenerator.php" method="GET">
                    <label for="length">Inserisci la lunghezza della password desiderata</label>
                    <input type="number" name="length" id="length">

                    <div>
                        <label for="letter">lettere</label>
                        <input type="checkbox" value="letter" id="letter" name="option1">
    
                        <label for="number">numeri</label>
                        <input type="checkbox" value="number" id="number" name="option2">
    
                        <label for="symbol">simboli</label>
                        <input type="checkbox" value="symbol" id="symbol" name="option3">
                    </div>

                    <div>
                        <label for="">Ripeti Caratteri</label>
                        <input type="radio" value="true" id="repeat" name="repeatStatus">
    
                        <label for="no-repeat">Non Ripetere i Caratteri</label>
                        <input type="radio" value="false" id="no-repeat" name="repeatStatus">
                    </div>


                    <button type="submit">
                        Send
                    </button>
                </form>

            </main>

            <footer>
                <!-- FOOTER -->
            </footer>
        </div>
    </body>
</html>