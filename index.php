<!-- Logan Hill -->

<?php

function getData() {
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $dueDate = $_GET["dueDate"];
        $returnDate = $_GET["returnDate"];

        echo "Due: $dueDate, Return: $returnDate";

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Library Book Due Checker</title>
</head>

<body>

    <?php getData(); ?>

    <div class="container mt-3">
        <h1 style="text-decoration: underline;">Library Book Due Checker</h1>
    </div>

    <!-- form.php -->
    <?php include "form.php"; ?>

</body>

</html>