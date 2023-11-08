<?php
if(isset($_POST['smt'])){
    $a=$_POST['first'];
    $b=$_POST['second'];
    $op=$_POST["operator"];
    switch($op){
        case 1:
        $r=$a+$b;
        break;
        case 2:
        $r=$a-$b;
        break;
        case 3:
        $r=$a*$b;
        break;
        case 4:
        $r=$a/$b;
        break;
        default:
        break;
    }

}
?>
<html>
<head>
    <title>Use of switch case statement.</title>
</head>
<body>
    <h1>Use of switch case statement.</h1>
    <form action="Q27.php" method="post" name="frm">
        
        Enter first number:<input type="text" name="first" required><br>
        Enter second number:<input type="text" name="second" required><br>
        Select operator:<Select name="operator">
            <option value="1">Add</option>
            <option value="2">Subtract</option>
            <option value="3">Multiply</option>
            <option value="4">Divide</option>
        </Select><br>
        <input type="submit" name="smt" value="Show Result"><br>
        Result:<input type="text" value="
        <?php
        if(isset($r)){
            echo $r;
        }
        ?>
        "
        >
    </form>
</body>
</html>