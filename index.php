<!-- Logan Hill -->

<?php

// Checks if data has been submitted, then returns data
function getData() {
    if ($_GET)
    {
        // check if keys exist, if so use them. If not, set to empty string
        $return = isset($_GET['returnDate']) ? $_GET['returnDate'] : '';
        $due = isset($_GET['dueDate']) ? $_GET['dueDate'] : '';

        // If both variables exist, return them.
        if ($return && $due) {

            // create an array to hold the dates
            $dates = ['return' => $return, 'due' => $due];

            return $dates;
        }
        else {
            return '';
        }
        
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

    <!-- data passthrough test -->
    <?php //echo print_r(getData()); ?>

    <div class="container mt-3">
        <h1 style="text-decoration: underline;">Library Book Due Checker</h1>
    </div>

    <!-- form.php -->
    <?php include "form.php"; ?>

    <!-- insert date logic functions -->
    <?php
    require "functions.php";

    if ($_GET): ?>
        <div class="container card mt-4 mb-4">
            <div class="card-body">
                <h5 class="card-title">Dates Entered</h5>
                <p>Return Date: <?= $_GET['returnDate']; ?> </p>
                <p>Due Date: <?= $_GET['dueDate']; ?></p>
            </div>
            <div class="card-body pt-0">
                <h5 class="card-title">Information</h5>
                <!-- <p><?= formatDates($_GET['returnDate'], $_GET['dueDate']); ?> </p> -->
                <p><?= finalOutput($_GET['returnDate'], $_GET['dueDate']); ?></p>
            </div>
        </div>
    <?php endif; ?>

</body>

</html>