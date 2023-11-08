<?php
if(isset($_POST['smt'])){
    $p=$_POST['principle'];
    $t=$_POST['time'];
    $r=$_POST['rate'];
    $si= ($p*$t*$r)/100;
}
?>
<html>
<head>
    <title>Simple Interest</title>
</head>
<body>
    <h1>Simple Interest</h1>
    <form action="Q4.php" method="post" name="frm">
        
        Enter principle:<input type="text" name="principle" required><br>
        Enter time:<input type="text" name="time" required><br>
        Enter rate:<input type="text" name="rate" required><br>
        <input type="submit" name="smt" value="Show Result"><br>
        Result:<input type="text" value="
        <?php
        if(isset($si)){
            echo $si;
        }
        ?>
        "
        >
    </form>
</body>
</html>