<?php
if(isset($_POST['smt'])){
    $l=$_POST['length'];
    $b=$_POST['breadth'];
    $area=$l*$b;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Area of Rectangle</title>
</head>
<body>
    <h1>Area of Rectangle</h1>
    <form action="Q5.php" method="post">
        Enter length<input type="text" name="length"><br>
        Enter breadth<input type="text" name="breadth"><br>
        <input type="submit" value="Show result" name="smt"><br>
        Area of Rectangle<input type="text" value="
        <?php
        if(isset($area)){
            echo $area;
        }
        ?>
        "
        >
    </form>

</body>
</html>