<?php
$num1 = $_POST['txt_num1'];
$num2 = $_POST['txt_num2'];

if (($_POST['rb_op'])==="rb_mais"){
    $total = $num1 + $num2;
    echo"o resultado da soma dos números é: $total";
}
else if (($_POST['rb_op'])==="rb_menos"){
    $total1 = $num1 - $num2;
    echo"o resultado da subtração dos números é: $total1";
}
else if (($_POST['rb_op'])==="rb_divide"){
    $total2 = $num1 / $num2;
    echo"o resultado da divisão dos números é: $total2";
}
else
{
    $total3 = $num1 * $num2;
    echo"o resultado da multiplicação dos números é: $total3";
}

?>