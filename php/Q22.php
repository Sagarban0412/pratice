<html>
    <head>
        <title>Fibonacci series. 1, 1, 2, 3, 5, 8, …….. upto 15 terms.</title>
    </head>
    <body>
        <h1>Fibonacci series. 1, 1, 2, 3, 5, 8, …….. upto 15 terms.</h1>
<form method="post" action="Q21.php" name="frm">
    <input type="submit" value="show" name="smt"><br>
    Result:<br><textarea type="text" rows="10" cols="20">
    <?php
    $a=1;
    $b=1;
    echo $a.", ";
    echo $b.", ";
    for($i=2;$i<15;$i++){
        $c=$a+$b;
        echo $c.", ";
        $a=$b;
        $b=$c;

    }
    ?>
    </textarea>
</form>
    </body>
</html>