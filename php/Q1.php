<?php
if(isset($_POST['smt'])){
    $a=$_POST['first'];
    $b=$_POST['second'];
    $sum= $a+$b;
}
?>
<html>
<head>
    <title>Addition</title>
</head>
<body>
    <h1>Addition</h1>
    <form action="Q1.php" method="post" name="frm">
        
        Enter first number:<input type="text" name="first" required><br>
        Enter second number:<input type="text" name="second" required><br>
        <input type="submit" name="smt" value="Show Result"><br>
        Result:<input type="text" value="
        <?php
        if(isset($sum)){
            echo $sum;
        }
        ?>
        "
        >
    </form>
</body>
</html>