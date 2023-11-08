<html>
    <head>
        <title>Pattern</title>
    </head>
    <body>
        <h1>Pattern</h1>
<form method="post" action="Q23b.php" name="frm">
    b:<br><textarea type="text" rows="10" cols="20">
    <?php
    echo "\n";
    for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++)
        echo " ";
        for($k=5;$k>=$i;$k--)
            echo "*";
        
    
    echo "\n";
    }

    ?>
    </textarea>
</form>
    </body>
</html>