<html>
    <?php
for ($m = 0; $m <= 10 ; $m++){
        echo "*";
}
    for($i=10;$i >= 0; $i--){
        for ($m = 1; $m <= 1; $m++){
            echo "*";
        }
        for ($m = 1; $m <= $i*2; $m++){
            echo "&nbsp";
        }
        for ($m = 1; $m <= 1; $m++){
            echo "*";
        }
        for ($m = 1; $m <= 10;$m++){
            echo "&nbsp";
        }
        echo '<br>';
    }
    for ($m = 1; $m <= 1 ; $m++){
        echo "*";
    }
    ?>
</html>