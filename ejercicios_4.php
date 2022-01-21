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
                echo "<td>8:50-9:40</td> 
                <td>IAW</td>
                <td>SAD</td>
                <td>ASX</td>
                <td>ASX</td>
                <td>IAW</td>"

                ?>
            </tr>
            <tr>
                <?php 
                 echo "<td>9:40-10:30</td>
                <td>IAW</td>
                <td>SAD</td>
                <td>EIEA</td>
                <td>ASX</td>
                <td>SRI</td>"
                ?>
            </tr>
            <tr>
                <?php 
                echo "<td>10:30-11:20</td>
                <td>SRI</td>
                <td>SAD</td>
                <td>EIEA</td>
                <td>EIEA</td>
                <td>SRI</td>"
                ?>
            </tr>
            <tr>
                <?php 
                echo "<td>11:20-12:00</td>"
                ?>
                <td colspan="5" align="Center">RECREO</td>
            </tr>
            <tr>
                <?php 
                echo "<td>12:00-12:50</td>
                <td>SRI</td>
                <td>ASO</td>
                <td>ASO</td>
                <td>IAW</td>
                <td>SAD</td>"
                $horario = array(
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
                    '17:40 - 18:60' => array('','SRI','','ASO',''), 
                );
                ?>
            </tr>
            <tr>
                <?php
                echo "<td>12:50-13:40</td>
                <td>ASO</td>
                <td>ASO</td>
                <td>IAW</td>
                <td>IAW</td>
                <td>SAD</td>"
                ?>
            </tr>
            <tr>
                <?php 
                echo "<td>13:40-14:30</td>
                <td>ASX</td>
                <td>ASO</td>
                <td>IAW</td>
                <td>SRI</td>
                <td>SAD</td>"
                ?>
            </tr>
            <tr>
                <?php 
                echo "<td>14:30-16:00</td>"?>
                <td colspan="5" align="Center">KEBAB</td>
            </tr>
            <tr>
                <?php 
                echo "<td>16:00-16:50</td>
                <td></td>
                <td>SRI</td>
                <td></td>
                <td>ASO</td>
                <td></td>"
                ?>
            </tr>
            <tr>
                <?php 
                echo "<td>16:50-17:40</td>
                <td></td>
                <td>SRI</td>
                <td></td>
                <td>ASO</td>
                <td></td>"
                ?>
            </tr>
            <tr>
                <?php 
                echo "<td>17:10-18:30</td>
                <td></td>
                <td>SRI</td>
                <td></td>
                <td>ASO</td>
                <td></td>"
                ?>
            </tr>
        </tbody>
    </table>


</html>