<?php include 'database.php'; ?>
<?php
    $query = "SELECT * FROM questions";
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;
?>
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
                <h2> Test cultura generala </h2>
                <p> Intrebarile au un singur raspuns corect </p>
                <ul>
                    <li><strong>Numarul de intrebari: </strong><?php echo $total ?></li>
                    <li><strong>Tipul: </strong>Raspunsuri Multiple</li>
                    <li><strong>Timpul estimat </strong>5 minute</li>

                </ul>
                <a href="question.php?n=1" class="start"> Start Quiz </a>
            </div>

        </main>

        <footer>
            <div class="container">
                Copyright &copy; 2019, PHP quizzer
            </div>

        </footer>
    </body>
</html>