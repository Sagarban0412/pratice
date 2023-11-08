<?php
if(isset($_POST['smt'])){
    $a=$_POST['first'];    
    $b=$_POST['second'];
    $c=$_POST['third'];

    if($a==$b&&$b==$c){
            $small="All are equal";       
    }
    else if($a==$b){
        if($a<$c)
         $small="Two are equal and smaller than Third number i.e smaller= ".$a;
        else
         $small=$c." is smaller";
    }
    else if($a==$c) {
        if($a<$b)
         $small="Two are equal and smaller than Second number i.e smaller= ".$a;
        else
         $small=$b." is smaller";
    }
    else if($b==$c){
        if($b<$a)
         $small="Two are equal and smaller than first number i.e smaller= ".$b;
        else 
         $small=$a." is smaller";
    }
    else if($a<$b&&$a<$c){
        $small=$a." is smaller";       
    }
    else if($b<$a&&$b<$c){
        $small=$b. " is smaller";       
    }
    else if($c<$a&&$c<$b){
        $small=$c." is smaller";
    }

}

?>
<html>
<head>
    <title>Smallest among three numbers</title>
</head>
<body>
    <h1>Smallest among three numbers</h1>
    <form action="Q10.php" method="post" name="frm">
        Enter first number:<input type="text" name="first" required><br>
        Enter second number:<input type="text" name="second" required><br>
        Enter third number:<input type="text" name="third" required><br>
        <input type="submit" name="smt" value="Show Result"><br>
            Result:
            <input id="1" type="text" style="width:600px;" value="
            <?php if (isset($_POST['smt'])) 
            echo  $small;
            ?>">            
            
        

    </form>
  
   

</body>
</html>