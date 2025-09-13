<!-- Logan Hill -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Gentium+Book+Plus:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <title>Library Book Checker</title>
</head>

<body>

    <div class="container anton-sc-regular mt-3">
        <h1 id="intro" style="text-decoration: underline;">Library Book Checker</h1>
    </div>

    <!-- form.php -->
    <?php include "form.php"; ?>

    <!-- insert date logic functions -->
    <?php
    require "functions.php";

    if ($_GET): ?>
        <div class="container card mt-4 mb-4">
            <div class="card-body">
                <h5 class="card-title anton-sc-regular">Dates Entered</h5>
                <p>Return Date: <?= $_GET['returnDate']; ?> </p>
                <p>Due Date: <?= $_GET['dueDate']; ?></p>
            </div>
            <div class="card-body pt-0">
                <h5 class="card-title anton-sc-regular">Information</h5>
                <p><?= finalOutput($_GET['returnDate'], $_GET['dueDate']); ?></p>
            </div>
        </div>
    <?php endif; ?>

</body>

</html>