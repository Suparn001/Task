<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Information</title>
</head>
<body>
    <h2>Enter Your Vehicle details:</h2>
    <form action="task2.php" method="POST">
        <label for="type">Enter Vehicle Type (car/truck):</label><br>
        <input type="text" name="type" required><br><br>

        <label for="brand">Enter Vehicle Brand:</label><br>
        <input type="text" name="brand" required><br><br>

        <label for="model">Enter Vehicle Model:</label><br>
        <input type="text"  name="model" required><br><br>

        <label for="speed">Enter Vehicle Speed in kmph:</label><br>
        <input type="number"  name="speed"><br><br>

        <button type="submit">Submit</button>      
      
    </form>
</body>
</html>