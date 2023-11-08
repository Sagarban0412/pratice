<?php
if(isset($_POST['smt'])){
    $a=$_POST['first'];    
    $b=$_POST['second'];
    if($a>$b){
        $large=$a." is large";
    }
    else if($a==$b){
        $large="Equal";
    }
    else{
        $large=$b." is large";

    }
}
?>
<html>
<head>
    <title>Largest among two numbers</title>
</head>
<body>
    <h1>Largest among two numbers</h1>
    <form action="Q7.php" method="post" name="frm">
        Enter first number:<input type="text" name="first" required><br>
        Enter second number:<input type="text" name="second" required><br>
        <input type="submit" name="smt" value="Show Result"><br>
        Result:<input type="text" value="
        <?php
        if(isset($large)){
            echo $large;
        }
        ?>
        "
        >
    </form>
</body>
</html>