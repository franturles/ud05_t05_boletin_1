<html>
    <?php
for($i=1;$i <= 9; $i++){
    for ($m=0; $m < 1; $m++) { 
            echo "*";
    }    
    echo "<br>";
    for ($k=0; $k < 1; $k++) { 
        echo "*";
        if ($i == 9) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp *";
        }
        echo "&nbsp";

    }

    for ($l=0; $l < $i-1; $l++) { 
        echo "&nbsp&nbsp&nbsp";
    }
    
}
echo "<br>";
for($x=1;$x <= 10; $x++){
    for ($c=0; $c < 1; $c++) { 
            echo "&nbsp";
            echo "*"; 
    }
}
    ?>

</html>