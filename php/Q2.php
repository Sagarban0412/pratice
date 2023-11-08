<?php
if(isset($_POST['smt'])){
    $a=$_POST['first'];
    $b=$_POST['second'];
    $p= $a*$b;
}
?>
<html>
<head>
    <title>Multiplication</title>
</head>
<body>
    <h1>Multiplication</h1>
    <form action="Q2.php" method="post" name="frm">
        
        Enter first number:<input type="text" name="first" required><br>
        Enter second number:<input type="text" name="second" required><br>
        <input type="submit" name="smt" value="Show Result"><br>
        Result:<input type="text" value="
        <?php
        if(isset($p)){
            echo $p;
        }
        ?>
        "
        >
    </form>
</body>
</html>