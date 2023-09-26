<?php
if(isset(_POST["smt"]))
    $n=$_POST["input"];
    $f=1;
    for($i=1;$i<=$n;$i++)
   $f=$f*$i;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="factorial.php" method="post">
            Enter a number <input type="text" name=input>
            <input type="submit" value="show" name="smt">     
            result <input type="text" value="
            <?php 
            if(isset($f))
            echo $f;
            else
            echo "sorry";
            ?> " disabled>
        </form>
</body>
</html>