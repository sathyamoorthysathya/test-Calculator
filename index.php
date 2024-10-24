<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form action="welcome.php" method="post">
            <input type="text" name="input1" placeholder="First Number" required />
            <select name="dropdown">
                <option value="Addition">Add</option>
                <option value="Subtraction">Subtraction</option>
                <option value="Multiply">Multiply</option>
                <option value="Divide">Divide</option>
            </select>
            <input type="text" name="input2" placeholder="Second Number" required />
            <br />
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>