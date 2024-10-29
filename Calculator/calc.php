<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
<div class="container">
    <form method="GET" action="./sum.php">
        Number 1: <input type="number" class="num" name="num1" required>
        <br><br>
        Number 2: <input type="number" class="num" name="num2" required>
        <br><br>
        Operation: 
        <select name="operation" id="" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="modulus">%</option>
        </select>
        <br><br>
        <input type="submit" value="Calculate">
    </form>
</div>

</body>
</html>
