<?php
if(isset($_POST['smt'])){
    $num=$_POST['number'];
    if($num==1){
        $ans= $num." is not prime";
    }
    if($num==2){
        $ans=$num." is prime";
    }
    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            $ans= $num." is not prime";
            break;
        }
        else{
            $ans=$num." is prime";
        }
    }
}?>
<!DOCTYPE html>
<html>
<head>
    <title>Prime number</title>
</head>
<body>
    <h1>Prime number</h1>
    <form action="Q24.php" method="post" name="frm">
        Enter a number:<input type="text" name="number" required><br>
        <input type="submit" value="check" name="smt"><br>
        <input type= "text" value="
        <?php
        if(isset($ans)){
            echo $ans;
        }?>">
    </form>
</body>
</html>