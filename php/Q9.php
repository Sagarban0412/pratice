<?php
if(isset($_POST['smt'])){
    $a=$_POST['first'];    
    $b=$_POST['second'];
    $c=$_POST['third'];

    if($a==$b&&$b==$c){
            $large="All are equal";       
    }
    else if($a==$b){
        if($a>$c)
         $large="Two are equal and greater than Third number i.e greater= ".$a;
        else
         $large=$c." is Greater";
    }
    else if($a==$c) {
        if($a>$b)
         $large="Two are equal and greater than Second number i.e greater= ".$a;
        else
         $large=$b." is greater";
    }
    else if($b==$c){
        if($b>$a)
         $large="Two are equal and greater than first number i.e greater= ".$b;
        else 
         $large=$a." is Greater";
    }
    else if($a>$b&&$a>$c){
        $large=$a." is greater";       
    }
    else if($b>$a&&$b>$c){
        $large=$b. " is greater";       
    }
    else if($c>$a&&$c>$b){
        $large=$c." is greater";
    }

}

?>
<html>
<head>
    <title>Largest among three numbers</title>
</head>
<body>
    <h1>Largest among three numbers</h1>
    <form action="Q9.php" method="post" name="frm">
        Enter first number:<input type="text" name="first" required><br>
        Enter second number:<input type="text" name="second" required><br>
        Enter third number:<input type="text" name="third" required><br>
        <input type="submit" name="smt" value="Show Result"><br>
            Result:
            <input id="1" type="text" style="width:600px;" value="
            <?php if (isset($_POST['smt'])) 
            echo  $large;
            ?>">            
            
        

    </form>
  
   

</body>
</html>