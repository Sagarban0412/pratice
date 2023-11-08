<?php
if(isset($_POST['smt'])){
    $n=$_POST['num'];
    if($n%7==0&&$n%13!=0){
        $ans= $n." is divisible by 7 but not by 13";
    }
    else if($n%7==0&&$n%13==0){
        $ans=$n." is divisible by both 7 and 13";
    }
    else if($n%7!=0&&$n%13!=0){
        $ans=$n." is not divisible by both 7 and 13";
    }
    else if($n%7!=0&&$n%13==0){
        $ans=$n." is divisible by 13 but not by 7";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Divisible by 7 but not by 13</title>
</head>
<body>
    <h1>Divisible by 7 but not by 13</h1>
    <form action="Q14.php" id="frm" method="post">
        Enter a number:<input type="text" name="num" required><br>
        <input type="Submit" value="Check" name="smt"><br>
        Result:<input type="text" style="width:300px" value="
        <?php
        if(isset($ans)){
            echo $ans;
        }
        ?>
        "><br>
    </form>
</body>
</html>