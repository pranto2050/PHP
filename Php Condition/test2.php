<?php
$sum = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    $sum = $num1 + $num2;
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Sum of Two Numbers</h2>
<form method="post" action="">
  Number 1: <input type="text" name="num1" required><br><br>
  Number 2: <input type="text" name="num2" required><br><br>
  <input type="submit" value="Calculate Sum">
</form>

<?php
if ($sum !== '') {
    echo "<h3>Sum: $sum</h3>";
}
else {
    echo "<h3>Please enter two numbers to calculate the sum.</h3>";
}
?>

</body>
</html>
