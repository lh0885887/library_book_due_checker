<!-- Logan Hill -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>form.php</title>
</head>

<body>


    <div class="container mt-3">
        <form method="GET" action="index.php">

            <!-- Return Date field -->
            <div class="mb-3">
                <label for="returnDate" class="form-label">Return Date</label>
                <input type="date" class="form-control" name="returnDate" id="returnDate" aria-describedby="returnDate">
                <div id="tooltip1" class="form-text">(Enter the date the book was returned)</div>
            </div>

            <!-- Due Date field -->
            <div class="mb-3">
                <label for="dueDate" class="form-label">Due Date</label>
                <input type="date" class="form-control" name="dueDate" id="dueDate">
                <div id="tooltip2" class="form-text">(Enter the date the book is due)</div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>

</body>

</html>