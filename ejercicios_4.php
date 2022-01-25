<html>
<table cellpadding="10" border="1px">
        <thead>
            <tr>
                <th>Horas</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                $horario=array(
                    '8:50 - 9:40' => array('IAW','SAD','ASX','ASX','IAW'),
                    '9:40 - 10:30' => array('IAW','SAD','EIEA','ASX','SRI'),
                    '10:30 - 11:20' => array('SRI','SAD','EIEA','EIEA','SRI'),
                    '11:20 - 12:00' => array('Recreo'),
                    '12:00 - 12:50' => array('SRI','ASO','ASO','IAW','SAD'),
                    '12:50 - 13:40' => array('ASO','ASO','IAW','IAW','SAD'),
                    '13:40 - 14:30' => array('ASX','ASO','IAW','SRI','SAD'),
                    '14:30 - 16:00' => array('KEBAB'),
                    '16:00 - 16:50' => array('','SRI','','ASO',''),
                    '16:50 - 17:40' => array('','SRI','','ASO',''),
                    '17:40 - 18:60' => array('','SRI','','ASO','')
                );
                foreach($horario as $dia => $clase) {
                    if (count ($clase) >1) {
                        echo "<tr>
                        <td>$dia</td>
                        <td>$clase[0]</td>
                        <td>$clase[1]</td>
                        <td>$clase[2]</td>
                        <td>$clase[3]</td>
                        <td>$clase[4]</td>";
                    } else {
                        echo "<tr>
                        <td>$dia</td>
                        <td colspan = 5 style='text-align:center'>$clase[0]</td>";
                    }
                };
                ?>
            </tr>
        </tbody>
    </table>


</html>