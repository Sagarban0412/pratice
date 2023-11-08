<?php
if(isset($_POST['smt'])){
    $n=$_POST['num'];
   ($n%2==0)?
   $ans=$n." is even": 
   $ans=$n." is odd"; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Use of Ternary operator</title>
</head>
<body>
    <h1>Use of Ternary operator</h1>
    <form action="Q26.php" id="frm" method="post">
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