<?php
if(isset($_POST['smt'])){
    define("pi",3.1415);
    $r=$_POST['radius'];
    $area=pi *$r*$r;
}
?>
<html>
<head>
    <title>Area of circle</title>
</head>
<body>
    <h1>Area of circle</h1>
    <form action="Q6.php" method="post" name="frm">
        Enter radius:<input type="text" name="radius" required><br>
        <input type="submit" name="smt" value="Show Result"><br>
        Result:<input type="text" value="
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