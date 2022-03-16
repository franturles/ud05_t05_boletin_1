<html>
    <form>
    <input type='text' name='numero1' /></label>
    <select name='operacion' style="width : 50px; heigth : 1px">
        <option selected value='+'>+</option>
        <option value='-'>-</option>
        <option value='/'>/</option>
        <option value='*'>*</option>
    </select>
    <input type='text' name='numero2' /></label>
    <p><input type='submit' value='Submit'/></p>
    </form>

</html>
<?php
if (!isset($_REQUEST['numero1']) && !isset($_REQUEST['numero2'])) {
    echo "Debes dar un valor";
}
if(isset($_REQUEST['numero1']) && filter_var($_REQUEST['numero1'],FILTER_VALIDATE_INT) && ($_REQUEST['numero1'] > 0)){
    $Numero1 =isset($_REQUEST['numero1'])?$_REQUEST["numero1"]:"";
}else{
    echo "Tiene que decirme un numero valido";
}
if(isset($_REQUEST['numero2']) && filter_var($_REQUEST['numero2'],FILTER_VALIDATE_INT) && ($_REQUEST['numero2'] > 0)){
    $Numero2 =isset($_REQUEST['numero2'])?$_REQUEST["numero2"]:"";
}else{
    echo "Tiene que decirme un numero valido";
}
$Signo = $_REQUEST["operacion"];

switch ($Signo) {
    case '+':
        $Resultado = $Numero1 + $Numero2;
        break;

    case '-':
        $Resultado = $Numero1 - $Numero2;
        break;

    case '/':
        $Resultado = $Numero1 / $Numero2;
        break;
        
    case '*':
        $Resultado = $Numero1 * $Numero2;
        break;
}
echo $Resultado;
?>