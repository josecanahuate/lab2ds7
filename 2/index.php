<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;    
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>OPERACIONES MATEMATICAS</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="container">
    Num 1: <?php echo $num1 ?> 
    <br>
    Num 2 : <?php echo $num2 ?>
    <br>
    <br>
    La Suma es <?php echo $suma ?>
    <br>
    La Resta es <?php echo $resta ?>
    <br>
    La Multiplicación es <?php echo $multiplicacion ?>
    <br>
    La División es <?php echo $division ?>
</div>

<?php
/*
echo $num1." + ".$num2." = ".$suma; 
echo "<br>";
echo $num1." - ".$num2." = ".$resta; 
echo "<br>";
echo $num1." * ".$num2." = ".$multiplicacion; 
echo "<br>";
echo $num1." / ".$num2." = ".$division;  
*/
?>

</body>
</html>

<!-- http://lab2.com/2/index.php?num1=5&num2=4 -->
