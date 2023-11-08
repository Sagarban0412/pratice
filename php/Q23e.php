<html>
    <head>
        <title>Pattern</title>
    </head>
    <body>
        <h1>Pattern</h1>
<form method="post" action="Q23c.php" name="frm">
    e:<br><textarea type="text" rows="10" cols="20">
    <?php
    echo "\n";
    for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        if($j%2==1){
            echo "1";
        }
        else{
            echo "0";
        }
    }
    echo "\n";
    }

    ?>
    </textarea>
    
</form>
    </body>
</html>