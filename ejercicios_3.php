<html>
<?php
$Idioma = array('home'=>'Casa', 'defense'=>'defensa', 'sword'=>'espada', 
'ball'=>'Bola', 'Goodbay'=>'Adios','Hello'=>'Hola', 
'what'=> 'Que', 'Where'=>'Donde', 'Cookie'=> 'Galleta','Awakening' => 'Despertar');
echo "<table cellpadding='10'border='1px'>
<thead>
    <tr>
        <th>Español</th>
        <th>Ingles</th>
    </tr>
</thead>";
foreach ($Idioma as $Palabra => $Ingles) {    
    echo "<tbody>
    <tr>
        <td>$Ingles</td>
        <td>$Palabra</td>
    </tr>
    </tbody>";
    }
?>
</html>