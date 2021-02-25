<html>
<body>

<h1>Convert pounds (lb) to kilogram (kg)</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Pounds: <input type="number" step="0.01" name="fpounds" placeholder="Enter pounds">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $pounds = $_POST['fpounds'];
    if (empty($pounds)) {
        echo "Enter a number for pounds";
    } else {
        $kilograms = $pounds / 2.2046;
        echo $pounds . " lb is " . round($kilograms, 2) . " kg";
    }
}
?>

</body>
</html>