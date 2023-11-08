<?php
if(isset($_POST['smt'])){
    $n=$_POST['num'];
    if($n%7==0){
        $ans=$n. " is Divisible";
    }
    else{
        $ans=$n. " is Not Divisible";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Divisible by 7 or not</title>
</head>
<body>
    <h1>Divisible by 7 or not</h1>
    <form action="Q12.php" id="frm" method="post">
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