<!-- Logan Hill -->

<?php

date_default_timezone_set("America/Chicago");

// Converts string to Dates and compare dates. Return difference.
function findDiff(string $returnDate, string $dueDate)
{
    $dt_return = date_create($returnDate);
    $dt_due    = date_create($dueDate);

    $diff = date_diff($dt_return, $dt_due);
    return $diff->format('%y years, %m months, %d days');
}

// Format dates entered to be displayed on index.php
function formatDates(string $returnDate, string $dueDate)
{
    // Convert string to timestamp
    $timestamp_return = strtotime($returnDate);
    $timestamp_due = strtotime($dueDate);

    // Format timestamps using date()
    $f_return = date("l, F j, Y", $timestamp_return);
    $f_due = date("l, F j, Y", $timestamp_due);
    echo "Testing Return - $f_return<br>Testing Due - $f_due";
}

// Final decision tree to determine output on index.php by comparing dates
function finalOutput(string $returnDate, string $dueDate)
{
    if ($returnDate > $dueDate) {
        return "Your book has been overdue for " . findDiff($returnDate, $dueDate);
    }
    elseif ($returnDate < $dueDate) {
        return "Your book is due in " . findDiff($returnDate, $dueDate);
    }
    else {
        return "Your book is due today.";
    }
}


?>