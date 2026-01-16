// SWITCH

<?php
$status = "stanby" . "validated" . "shipped" . "delivered" . "canceled";

switch ($status){
     case "standby";
    break;
     case "validated";
    break;
     case "shipped";
    break;
     case "delivered";
    break;
     case "canceld";
    break;
}
    
// MATCH


$status = "validated";

$return_status = match ($status){
        "standby" => 'En attente',
        "validated" => 'Validé',
        "shipped" => 'Envoyé',
        "delivered" => 'Livré',
        "canceled" => 'Annulé',

};
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p><span style="color: orange"><?= $status?></span></p>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p><span style="color: green"><?= $return_status?></span></p>

</body>
</html>