    <?php
    $priceExcludingTax = 100;
    $vat = 20;
    $quantity = 3;

    var_dump($priceExcludingTax * $vat / 100);           //20
    var_dump($priceExcludingTax - 20);                  //80
    var_dump(($priceExcludingTax - 20) * $quantity);   //240

    $vatPerArticle = $priceExcludingTax * $vat / 100;
    $ttc = $priceExcludingTax + $vatPerArticle;
    $totatlTTC = $ttc * $quantity;
  ?>