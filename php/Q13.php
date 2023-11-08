<?php
if(isset($_POST['smt'])){
    $n=$_POST['num'];
    if($n%5==0&&$n%10==0){
        $ans=$n." is divisible by both 5 and 10";
    }
    else if($n%5==0&&$n%10!=0){
        $ans=$n." is divisible by 5 but not by 10";
    }
    else if ($n%5!=0&&$n%10==0){
        $ans=$n." is divisible by 10 but not by 5";
    }
    else{
        $ans=$n." is not divisible";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Divisible by 5 and 10</title>
</head>
<body>
    <h1>Divisible by 5 and 10</h1>
    <form action="Q13.php" id="frm" method="post">
        Enter a number:<input type="text" name="num" required><br>
        <input type="Submit" value="Check" name="smt"><br>
        Result:<input type="text" style="width:200px" value="
        <?php
        if(isset($ans)){
            echo $ans;
        }
        ?>
        "><br>
    </form>
</body>
</html>