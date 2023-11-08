<html>
    <head>
        <title>Pattern</title>
    </head>
    <body>
        <h1>Pattern</h1>
<form method="post" action="Q23d.php" name="frm">
    d:<br><textarea type="text" rows="10" cols="20">
    <?php
    echo "\n";
    for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "$i";
    }
    echo "\n";
    }

    ?>
    </textarea>
    
</form>
    </body>
</html>