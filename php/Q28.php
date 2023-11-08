<?php
if(isset($_POST['smt'])){
    $num=$_POST['number'];
    $temp=$num;
    $result=0;
    $len=strlen((string)$temp);
    (int)$temp;
    while($temp!=0){
        $digit =$temp%10;
        $count=0;
        $mresult=1;
        while($count!=$len){
            $mresult=$mresult*$digit;
            $count++;
        }
        $result=$result+$mresult;
        $temp=$temp/10;
    }
    if($num==$result){
        $ans= $num." is armstrong";
    }
    else{
        $ans= $num." is not armstrong";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>To check Armstrong or not</title>
</head>
<body>
    <h1>To check Armstrong or not</h1>
    <form action="Q28.php" method="post" name="frm">
        Enter a number:<input type="text" name="number" required><br>
        <input type="submit" value="check" name="smt"><br>
        <input type= "text" value="
        <?php
        if(isset($ans)){
            echo $ans;

        }
        ?>
        ">
    </form>
</body>
</html>