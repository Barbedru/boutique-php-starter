<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
function displayBadge($text, $color){
    return "<span class='badge' style='background: $color'>$text</span>";
}

$texte = displayBadge("Salut" , "green");
echo $texte;

function displayPrice($price, $discount = 0){
    if ($discount = 0){
        $discountPrice = $price * (1 - $discount / 100);
        return "<span class='price' style='color: red; text-decoration: line-trhough;'>$price €</pan>
        <span class='price' style='color: green;'> $discountPrice € </span>; 

    } else {
        return "<span class='price'>$price €</span>";
}
        $display = display


?>

</body>
</html>