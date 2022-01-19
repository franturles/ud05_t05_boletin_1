<html>
    <?php
    for($i=1;$i <= 10; $i++){
        for ($m = 1; $m <= 1; $m++){
            echo "*";
        }
        for ($m = 1; $m <= $i*2; $m++){
            echo "&nbsp";
        }
        for ($m = 1; $m <= 1; $m++){
            echo "*";
        }
        echo '<br>';
    }
    ?>
</html>