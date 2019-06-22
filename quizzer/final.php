<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" /> 
    </head>
    <body>
        <header>
            <div class="container">
                <h1> Quizzer </h1>


            </div>
        </header>
        <main>
            <div class="container">
                <h2> Testul s-a terminat </h2>
                    <p> Bravos! </p>
                    <p> Scorul: <?php echo $_SESSION['score']; ?> </p>
                    <a href="question.php?n=1" class="start">Fa-l din nou</a>
                    <?php $_SESSION['score'] = 0; ?>
            </div>

        </main>

        <footer>
            <div class="container">
                Copyright &copy; 2019, PHP quizzer
            </div>

        </footer>
    </body>
</html>