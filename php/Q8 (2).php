<?php
if(isset($_POST['smt'])){
    $a=$_POST['first'];    
    $b=$_POST['second'];
    if($a>$b){
        $small=$b." is small";
    }
    else if($a==$b){
        $small="Equal";
    }
    else{
        $small=$a." is small";

    }
}
?>
<html>
<head>
    <title>Smallest among two numbers</title>
</head>
<body>
    <h1>Smallest among two numbers</h1>
    <form action="Q8.php" method="post" name="frm">
        Enter first number:<input type="text" name="first" required><br>
        Enter second number:<input type="text" name="second" required><br>
        <input type="submit" name="smt" value="Show Result"><br>
        Result:<input type="text" value="
        <?php
        if(isset($small)){
            echo $small;
        }
        ?>
        "
        >
    </form>
</body>
</html>