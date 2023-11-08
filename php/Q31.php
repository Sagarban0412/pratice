<?php
if(isset($_POST['smt'])){
    $p=$_POST['principle'];
    $n=$_POST['year'];
    $r=$_POST['rate'];
    $ans=pow((1+$r/100),$n);
    $ans=$ans-1;
    $ans=$p*$ans;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculate compound interest</title>
    <link rel="stylesheet" href="Q31.css">
</style>
</head>
<body>
    <div id="whole">
    <h1>Calculate compound interest</h1>
    <form action="Q31.php" method="post">
        <div class="container"><br>
            Enter principle:<input type="text" name="principle" required>
        </div>
        <div class="container">
            Enter no.of year:<input type="text" name="year" required>
        </div >
        <div class="container">
            Enter rate of interest:<input type="text" name="rate" required>
        </div>
        <div class="show">
            <input type="submit" value="Show result" name="smt">
        </div>
        <div class="container">

            Result:<input type="text" value="
            <?php
        if(isset($ans)){
            echo $ans;
        }
        ?>
        ">
    </div><br>
        
    </form>
</div>
</body>
</html>