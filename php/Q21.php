<?php
if(isset($_POST['smt'])){
    $n=$_POST['num'];
    $f=1;
    for($i=1;$i<=$n;$i++){
        $f=$f*$i;
    }
}
?>
<html>
    <head>
        <title>factorial</title>
    </head>
    <body>
        <h1>Factorial</h1>
<form method="post" action="Q21.php" name="frm">
    Enter a number:<input type="ext" name="num" required><br>
    <input type="submit" value="show" name="smt"><br>
    Result:<input type="text" value="
    <?php
    if(isset($f)){
        echo $f;
    }
    ?>
    "
    >
</form>
    </body>
</html>