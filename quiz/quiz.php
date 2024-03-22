<?php
 $total = 0;
 if(($_POST['radio']) == "3"){
     $total += 1;
 }
 if(($_POST['radio5']) == "3"){
    $total += 1;
}
if(($_POST['radio6']) == "1"){
    $total += 1;
}
if(($_POST['radio7']) == "2"){
    $total += 1;
}
if(($_POST['radio8']) == "1"){
    $total += 1;
}
if(($_POST['radio9']) == "1"){
    $total += 1;
}
if(($_POST['radio10']) == "3"){
    $total += 1;
}
if(($_POST['radio11']) == "1"){
    $total += 1;
}
if(($_POST['radio12']) == "4"){
    $total += 1;
}
if(($_POST['radio13']) == "3"){
    $total += 1;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="text-center">
    <div class="FormClass">
        <h1><?="$total/10"?></h1>
        
        <a href="index.html"class= "btn btn-primary">Recomeçar</a>
</div>
    </div>
</body>
</html>