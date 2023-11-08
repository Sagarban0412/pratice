<?php
if(isset($_POST['smt'])){
    $n=$_POST['num'];
    if($n%2==0){
        $ans=$n." is even";
    }
    else{
        $ans=$n." is odd";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Odd & Even</title>
</head>
<body>
    <h1>Odd & Even</h1>
    <form action="Q11.php" id="frm" method="post">
        Enter a number:<input type="text" name="num" required><br>
        <input type="Submit" value="Check" name="smt"><br>
        Result:<input type="text" value="
        <?php
        if(isset($ans)){
            echo $ans;
        }
        ?>
        "><br>
    </form>
</body>
</html>