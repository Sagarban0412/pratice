<html>
    <head>
        <title>Pattern</title>
    </head>
    <body>
        <h1>Pattern</h1>
<form method="post" action="Q23c.php" name="frm">
    c:<br><textarea type="text" rows="10" cols="20">
    <?php
    echo "\n";
    for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "$j";
    }
    echo "\n";
    }

    ?>
    </textarea>
    
</form>
    </body>
</html>