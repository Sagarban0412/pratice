<?php
if(isset($_POST['smt'])){
    $cp=$_POST['cost'];
    $sp=$_POST['sell'];
    if($cp<$sp){
        $ans="There is profit and profit amount is ".$sp-$cp;

    }
    else if($cp>$sp){
        $ans="There is Loss and loss amount is ".$cp-$sp;

    }
    else{
        $ans="There is no profit neither loss";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profit and loss</title>
</head>
<body>
    <h1>Profit and loss</h1>
    <form action="Q15.php" method="post" id="frm">
    Enter Cost price:<input type="text" name="cost" required><br>
    Enter Selling price:<input type="text" name="sell" required><br>
    <input type="submit" value="Check" name="smt"><br>
    Result:<input type="text" style="width:300px" value="
    <?php
    if(isset($ans)){
        echo $ans;
    }
    ?>">
    </form>
</body>
</html>