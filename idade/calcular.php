<?php
$Nome = $_POST['txtnome'];
$Ano = $_POST['txtano'];
$Idade = 2024 - $Ano;
$Dias = $Idade * 365;
$Horas = $Dias * 24;
$Min = $Horas * 60;
$BPM = $Min * 75;
$BPMtotal = $Min * 75;

    echo"<h2> Sua idade é: $Idade </h2>";
    echo"<h3> Você já viveu $Dias dias, $Horas horas, $Min minutos, e seu coração já bateu $BPMtotal vezes</h3>"
?>
<a href = "Calcular.html"> Voltar </a>