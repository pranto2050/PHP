

<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
  Enter a number: <input type="text" name="number">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    echo "You entered: " . htmlspecialchars($number);
}
?>

</body>
</html>
